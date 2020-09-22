<?php

namespace App\Http\Controllers;

use App\DataTables\TopCampaignDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTopCampaignRequest;
use App\Http\Requests\UpdateTopCampaignRequest;
use App\Repositories\TopCampaignRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TopCampaignController extends AppBaseController
{
    /** @var  TopCampaignRepository */
    private $topCampaignRepository;

    public function __construct(TopCampaignRepository $topCampaignRepo)
    {
        $this->topCampaignRepository = $topCampaignRepo;
    }

    /**
     * Display a listing of the TopCampaign.
     *
     * @param TopCampaignDataTable $topCampaignDataTable
     * @return Response
     */
    public function index(TopCampaignDataTable $topCampaignDataTable)
    {
        return $topCampaignDataTable->render('admin.top_campaigns.index');
    }

    /**
     * Show the form for creating a new TopCampaign.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.top_campaigns.create');
    }

    /**
     * Store a newly created TopCampaign in storage.
     *
     * @param CreateTopCampaignRequest $request
     *
     * @return Response
     */
    public function store(CreateTopCampaignRequest $request)
    {
        $input = $request->all();

        $topCampaign = $this->topCampaignRepository->create($input);

        Flash::success('Top Campaign saved successfully.');

        return redirect(route('topCampaigns.index'));
    }

    /**
     * Display the specified TopCampaign.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $topCampaign = $this->topCampaignRepository->find($id);

        if (empty($topCampaign)) {
            Flash::error('Top Campaign not found');

            return redirect(route('topCampaigns.index'));
        }

        return view('admin.top_campaigns.show')->with('topCampaign', $topCampaign);
    }

    /**
     * Show the form for editing the specified TopCampaign.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $topCampaign = $this->topCampaignRepository->find($id);

        if (empty($topCampaign)) {
            Flash::error('Top Campaign not found');

            return redirect(route('topCampaigns.index'));
        }

        return view('admin.top_campaigns.edit')->with('topCampaign', $topCampaign);
    }

    /**
     * Update the specified TopCampaign in storage.
     *
     * @param  int              $id
     * @param UpdateTopCampaignRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopCampaignRequest $request)
    {
        $topCampaign = $this->topCampaignRepository->find($id);

        if (empty($topCampaign)) {
            Flash::error('Top Campaign not found');

            return redirect(route('topCampaigns.index'));
        }

        $topCampaign = $this->topCampaignRepository->update($request->all(), $id);

        Flash::success('Top Campaign updated successfully.');

        return redirect(route('topCampaigns.index'));
    }

    /**
     * Remove the specified TopCampaign from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topCampaign = $this->topCampaignRepository->find($id);

        if (empty($topCampaign)) {
            Flash::error('Top Campaign not found');

            return redirect(route('topCampaigns.index'));
        }

        $this->topCampaignRepository->delete($id);

        Flash::success('Top Campaign deleted successfully.');

        return redirect(route('topCampaigns.index'));
    }
}
