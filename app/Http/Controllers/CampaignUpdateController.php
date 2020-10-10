<?php

namespace App\Http\Controllers;

use App\DataTables\CampaignUpdateDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateCampaignUpdateRequest;
use App\Http\Requests\UpdateCampaignUpdateRequest;
use App\Repositories\CampaignUpdateRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CampaignUpdateController extends AppBaseController
{
    /** @var  CampaignUpdateRepository */
    private $campaignUpdateRepository;

    public function __construct(CampaignUpdateRepository $campaignUpdateRepo)
    {
        $this->campaignUpdateRepository = $campaignUpdateRepo;
    }

    public function addUpdates(Request $request)
    {
        return view('donations.update', ['campaign_id' => $request->id]);
    }

    public function storeUpdates(Request $request)
    {
        $input = $request->all();
        $data = $this->campaignUpdateRepository->create($input);

        Flash::success('Update Campaign telah dibuat');
        return redirect(url('/campaign/'.$request->campaign_id));
    }

    /**
     * Display a listing of the CampaignUpdate.
     *
     * @param CampaignUpdateDataTable $campaignUpdateDataTable
     * @return Response
     */
    public function index(CampaignUpdateDataTable $campaignUpdateDataTable)
    {
        return $campaignUpdateDataTable->render('admin.campaign_updates.index');
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

        $campaignUpdate = $this->campaignUpdateRepository->create($input);

        Flash::success('Campaign Update saved successfully.');

        return redirect(route('campaignUpdates.index'));
    }

    /**
     * Display the specified CampaignUpdate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $campaignUpdate = $this->campaignUpdateRepository->find($id);

        if (empty($campaignUpdate)) {
            Flash::error('Campaign Update not found');

            return redirect(route('campaignUpdates.index'));
        }

        return view('admin.campaign_updates.show')->with('campaignUpdate', $campaignUpdate);
    }

    /**
     * Show the form for editing the specified CampaignUpdate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $campaignUpdate = $this->campaignUpdateRepository->find($id);

        if (empty($campaignUpdate)) {
            Flash::error('Campaign Update not found');

            return redirect(route('campaignUpdates.index'));
        }

        return view('admin.campaign_updates.edit')->with('campaignUpdate', $campaignUpdate);
    }

    /**
     * Update the specified CampaignUpdate in storage.
     *
     * @param  int              $id
     * @param UpdateCampaignUpdateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignUpdateRequest $request)
    {
        $campaignUpdate = $this->campaignUpdateRepository->find($id);

        if (empty($campaignUpdate)) {
            Flash::error('Campaign Update not found');

            return redirect(route('campaignUpdates.index'));
        }

        $campaignUpdate = $this->campaignUpdateRepository->update($request->all(), $id);

        Flash::success('Campaign Update updated successfully.');

        return redirect(route('campaignUpdates.index'));
    }

    /**
     * Remove the specified CampaignUpdate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $campaignUpdate = $this->campaignUpdateRepository->find($id);

        if (empty($campaignUpdate)) {
            Flash::error('Campaign Update not found');

            return redirect(route('campaignUpdates.index'));
        }

        $this->campaignUpdateRepository->delete($id);

        Flash::success('Campaign Update deleted successfully.');

        return redirect(route('campaignUpdates.index'));
    }
}
