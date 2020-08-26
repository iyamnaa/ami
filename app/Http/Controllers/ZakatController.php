<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateZakatRequest;
use App\Http\Requests\UpdateZakatRequest;
use App\Repositories\ZakatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Flash;
use Response;
use Payment;

class ZakatController extends AppBaseController
{
    /** @var  ZakatRepository */
    private $zakatRepository;
    private $zakatId = [
      'zakat-fitrah' => 'Z01',
      'zakat-emas' => 'Z02',
      'zakat-profesi' => 'Z03',
      'zakat-tabungan' => 'Z04',
      'zakat-perdagangan' => 'Z05',
      'zakat-simpanan' => 'Z06',
      'zakat-hadiah' => 'Z07',
      'zakat-pertanian' => 'Z08',
    ];
    private $data = '';

    public function __construct(ZakatRepository $zakatRepo)
    {
        $this->zakatRepository = $zakatRepo;
    }

    /**
     * Display a listing of the Zakat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function front(){

        return view('zakats.index');
    }

    public function getSnapToken(Request $request)
    {
    try{
        $transaction_details = [
          'order_id' => Payment::generateOrderID('Zakat'),
          'gross_amount' => $request->input('kadarZakat') * $request->input('qty')
        ];

        $customer_details = [
          'first_name' => $request->input('name'),
          'last_name' => "",
          'email' => $request->input('email'),
          'phone' => $request->input('telephone')
        ];

        $item_details = array([
          'id' => $this->zakatId[$request->input('akad')],
          'price' => $request->input('kadarZakat'),
          'quantity' => $request->input('qty'),
          'name' => str_replace('-', ' ', ($request->input('akad'))),
          'category' => "Zakat",
          'merchant_name' => "Amal Madani"
        ]);

        $paymentData = array(
          'transaction_details' => $transaction_details,
          'customer_details' => $customer_details,
          'item_details' => $item_details,
        );

        $data_zakat = [
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
          'qty' => $item_details[0]['quantity'],
          'amount' => $item_details[0]['price'],

          'user_id' => 1
        ];

        $snapToken = Payment::generateSnapToken($paymentData);

        return response()->json(array('snapToken'=> $snapToken, 'zakat' => $data_zakat), 200);
        
        }catch(\Throwable $e){
            return response()->json(array('snapToken'=> null, 'th' => $e->getMessage()), 200);
        }
    }

    public function saveTransaction(Request $request)
    {
        try{
            $data_zakat = $request->zakat;
            $data_zakat['transaction_id'] = Crypt::decryptString($data_zakat['transaction_id']);
            $zakat = $this->zakatRepository->create($data_zakat);

            return response()->json(array('message' => 'Transaksi Zakat Berhasil'), 200);
        }catch(\Throwable $e){
            return response()->json(array('message' => 'Error '.$e->getMessage().': Transaksi Zakat Gagal'), 200);
        }
    }

    public function payment(Request $request){
        $data = array();

        $data['qty'] = $request->input('qty-zakat');
        $data['kadar-zakat'] = str_replace('.', '', $request->input('kadar-zakat'));
        $data['akad'] = $request->input('akad');
        $data['name'] = 'Natieq Sah Muhammad';
        $data['phone'] = '081221572240';
        $data['email'] = 'nathieqs16@gmail.com';
        $data['address'] = 'Jl. Babakan Ciparay';

        return view('zakats.payment', ['data' => $data]);
    }

    public function index(Request $request)
    {
        $zakats = $this->zakatRepository->all();

        return view('admin.zakats.index')
            ->with('zakats', $zakats);
    }

    /**
     * Show the form for creating a new Zakat.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.zakats.create');
    }

    /**
     * Store a newly created Zakat in storage.
     *
     * @param CreateZakatRequest $request
     *
     * @return Response
     */
    public function store(CreateZakatRequest $request)
    {
        $input = $request->all();

        $zakat = $this->zakatRepository->create($input);

        Flash::success('Zakat saved successfully.');

        return redirect(route('zakats.index'));
    }

    /**
     * Display the specified Zakat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.zakats.show')->with('zakat', $this->data);
        }else{
            return redirect(route('zakats.index'));
        }
    }

    /**
     * Show the form for editing the specified Zakat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.zakats.show')->with('zakat', $this->data);
        }else{
            return redirect(route('zakats.index'));
        }
    }

    /**
     * Update the specified Zakat in storage.
     *
     * @param int $id
     * @param UpdateZakatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateZakatRequest $request)
    {
        $this->data_check($id);

        $zakat = $this->zakatRepository->update($request->all(), $id);

        Flash::success('Zakat updated successfully.');

        return redirect(route('admin.zakats.index'));
    }

    /**
     * Remove the specified Zakat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->data_check($id);

        $this->zakatRepository->delete($id);

        Flash::success('Zakat deleted successfully.');

        return redirect(route('zakats.index'));
    }

    protected function data_check($id){
        if ($this->zakatRepository->find($id)) {
            $this->data = $this->zakatRepository->find($id);
            return true;
        }else{
            Flash::error('Zakat not found');
            return false;
        }
    }
}
