<?php

namespace App\Http\Controllers;

use App\DataTables\DonationDataTable;
use App\Http\Requests\CreateDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Repositories\DonationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Crypt;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Donation;
use Auth;
use Payment;
use Illuminate\Http\Request;
use Flash;
use Response;

class DonationController extends AppBaseController
{
    /** @var  DonationRepository */
    private $donationRepository;

    public function __construct(DonationRepository $donationRepo)
    {
        $this->donationRepository = $donationRepo;
    }


    public function getSnapToken(Request $request)
    {
        try{
            $campaign = Campaign::find($request->input('campaign_id'));
            $transaction_details = [
            'order_id' => Payment::generateOrderID('Donasi'),
            'gross_amount' => $request->input('amount')
            ];

            $customer_details = [
            'first_name' => $request->input('name'),
            'last_name' => "",
            'email' => $request->input('email'),
            'phone' => $request->input('telephone')
            ];

            $item_details = array([
            'id' => $campaign->id,
            'price' => $request->input('amount'),
            'quantity' => 1,
            'name' => $campaign->title,
            'category' => "Donasi",
            'merchant_name' => "Amal Madani"
            ]);

            $paymentData = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
            );

            $data_donasi = [
            'transaction_id' => Crypt::encryptString($transaction_details['order_id']),
            'number' => 1,

            'name' => $customer_details['first_name'],
            'email' => $customer_details['email'],
            'telephone' => $customer_details['phone'],
            'address' => $request->input('address'),
            'as_anonymous' => 0, //$request->input('as_anonymous'),

            'nia' => $request->input('amil_nia') ? $request->input('amil_nia') : null,
            'amil_name' => $request->input('amil_name') !== null ? $request->input('amil_name') : null,

            'proses' => 'terkirim',
            'akad' => $item_details[0]['name'],
            'amount' => $item_details[0]['price'],
            'campaign_name' => $item_details[0]['name'],
            'campaign_id' => $item_details[0]['id'],

            'user_id' => Auth::check() ? Auth::id() : null
            ];

            $snapToken = Payment::generateSnapToken($paymentData);

            return response()->json(array('snapToken'=> $snapToken, 'donasi' => $data_donasi), 200);
        
        }catch(\Throwable $e){
            return response()->json(array('snapToken'=> null, 'th' => $e->getMessage()), 200);
        }
    }

    public function saveTransaction(Request $request)
    {
        try{
            $data_donasi = $request->donasi;
            $data_donasi['transaction_id'] = Crypt::decryptString($data_donasi['transaction_id']);
            $donasi = $this->donationRepository->create($data_donasi);

            return response()->json(array('message' => 'Transaksi Donasi Berhasil'), 200);
        }catch(\Throwable $e){
            return response()->json(array('message' => 'Error '.$e->getMessage().': Transaksi Donasi Gagal'), 200);
        }
    }

    public function payment(Request $request){
        $data = array(
            'amount' => str_replace('.', '', $request->input('amount')),
            'name' => Auth::check() ? Auth::user()->name : '',
            'phone' => Auth::check() ? Auth::user()->telephone : '',
            'email' => Auth::check() ? Auth::user()->email : '',
            'address' => Auth::check() ? Auth::user()->address : ''
        );

        $campaign = Campaign::find($request->input('campaign_id'));

        return view('donations.payment', ['data' => $data, 'campaign' => $campaign]);
    }


    /**
     * Display a listing of the Donation.
     *
     * @param DonationDataTable $donationDataTable
     * @return Response
     */
    public function index(DonationDataTable $donationDataTable)
    {
        return $donationDataTable->render('admin.donations.index');
    }

    /**
     * Show the form for creating a new Donation.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.donations.create');
    }

    /**
     * Store a newly created Donation in storage.
     *
     * @param CreateDonationRequest $request
     *
     * @return Response
     */
    public function store(CreateDonationRequest $request)
    {
        $input = $request->all();

        $donation = $this->donationRepository->create($input);

        Flash::success('Donation saved successfully.');

        return redirect(route('donations.index'));
    }

    /**
     * Display the specified Donation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        return view('admin.donations.show')->with('donation', $donation);
    }

    /**
     * Show the form for editing the specified Donation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        return view('admin.donations.edit')->with('donation', $donation);
    }

    /**
     * Update the specified Donation in storage.
     *
     * @param  int              $id
     * @param UpdateDonationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDonationRequest $request)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        $donation = $this->donationRepository->update($request->all(), $id);

        Flash::success('Donation updated successfully.');

        return redirect(route('donations.index'));
    }

    /**
     * Remove the specified Donation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        $this->donationRepository->delete($id);

        Flash::success('Donation deleted successfully.');

        return redirect(route('donations.index'));
    }
}
