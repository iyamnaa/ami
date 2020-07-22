<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Repositories\DonationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DonationController extends AppBaseController
{
    /** @var  DonationRepository */
    private $donationRepository;
    private $data = '';

    public function __construct(DonationRepository $donationRepo)
    {
        $this->donationRepository = $donationRepo;
    }

    /**
     * Display a listing of the Donation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $donations = $this->donationRepository->all();

        return view('admin.donations.index')
            ->with('donations', $donations);
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
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.donations.show')->with('donation', $this->data);
        }else{
            return redirect(route('donations.index'));
        }
    }

    /**
     * Show the form for editing the specified Donation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.donations.edit')->with('donation', $this->data);
        }else{
            return redirect(route('donations.index'));
        }
    }

    /**
     * Update the specified Donation in storage.
     *
     * @param int $id
     * @param UpdateDonationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDonationRequest $request)
    {

        $this->data_check($id);

        $donation = $this->donationRepository->update($request->all(), $id);

        Flash::success('Donation updated successfully.');

        return redirect(route('donations.index'));
    }

    /**
     * Remove the specified Donation from storage.
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

        $this->donationRepository->delete($id);

        Flash::success('Donation deleted successfully.');

        return redirect(route('donations.index'));
    }
    
    protected function data_check($id){
        if ($this->donationRepository->find($id)) {
            $this->data = $this->donationRepository->find($id);
            return true;
        }else{
            Flash::error('Donation not found');
            return false;
        }
    }
}
