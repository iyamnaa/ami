<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampaignUpdateRequest;
use App\Http\Requests\UpdateCampaignUpdateRequest;
use App\Repositories\CampaignUpdateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CampaignUpdateController extends AppBaseController
{
    /** @var  CampaignUpdateRepository */
    private $campaignUpdateRepository;
    private $data = '';

    public function __construct(CampaignUpdateRepository $campaignUpdateRepo)
    {
        $this->campaignUpdateRepository = $campaignUpdateRepo;
    }

    /**
     * Display a listing of the CampaignUpdate.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $datas = $this->campaignUpdateRepository->all();

        return view('admin.campaign_updates.index')
            ->with('campaignUpdates', $datas);
    }

    /**
     * Show the form for creating a new CampaignUpdate.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.campaign_updates.create');
    }

    /**
     * Store a newly created CampaignUpdate in storage.
     *
     * @param CreateCampaignUpdateRequest $request
     *
     * @return Response
     */
    public function store(CreateCampaignUpdateRequest $request)
    {
        $input = $request->all();

        $data = $this->campaignUpdateRepository->create($input);

        Flash::success('Campaign Update saved successfully.');

        return redirect(route('campaignUpdates.index'));
    }

    /**
     * Display the specified CampaignUpdate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.campaign_updates.show')->with('campaignUpdate', $this->data);
        }else{
            return redirect(route('campaign_updates.index'));
        }
    }

    /**
     * Show the form for editing the specified CampaignUpdate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.campaign_updates.edit')->with('campaignUpdate', $this->data);
        }else{
            return redirect(route('campaign_updates.index'));
        }
    }

    /**
     * Update the specified CampaignUpdate in storage.
     *
     * @param int $id
     * @param UpdateCampaignUpdateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignUpdateRequest $request)
    {

        $this->data_check($id);

        $data = $this->campaignUpdateRepository->update($request->all(), $id);

        Flash::success('Campaign Update updated successfully.');

        return redirect(route('campaignUpdates.index'));
    }

    /**
     * Remove the specified CampaignUpdate from storage.
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

        $this->campaignUpdateRepository->delete($id);

        Flash::success('Campaign Update deleted successfully.');

        return redirect(route('campaignUpdates.index'));
    }
    
    protected function data_check($id){
        if ($this->campaignUpdateRepository->find($id)) {
            $this->data = $this->campaignUpdateRepository->find($id);
            return true;
        }else{
            Flash::error('Campaign Update not found');
            return false;
        }
    }
}
