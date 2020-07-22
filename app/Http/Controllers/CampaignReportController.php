<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampaignReportRequest;
use App\Http\Requests\UpdateCampaignReportRequest;
use App\Repositories\CampaignReportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CampaignReportController extends AppBaseController
{
    /** @var  CampaignReportRepository */
    private $campaignReportRepository;
    private $data = '';

    public function __construct(CampaignReportRepository $campaignReportRepo)
    {
        $this->campaignReportRepository = $campaignReportRepo;
    }

    /**
     * Display a listing of the CampaignReport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $datas = $this->campaignReportRepository->all();

        return view('admin.campaign_reports.index')
            ->with('campaignReports', $datas);
    }

    /**
     * Show the form for creating a new CampaignReport.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.campaign_reports.create');
    }

    /**
     * Store a newly created CampaignReport in storage.
     *
     * @param CreateCampaignReportRequest $request
     *
     * @return Response
     */
    public function store(CreateCampaignReportRequest $request)
    {
        $input = $request->all();

        $data = $this->campaignReportRepository->create($input);

        Flash::success('Campaign Report saved successfully.');

        return redirect(route('campaignReports.index'));
    }

    /**
     * Display the specified CampaignReport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.campaign_reports.show')->with('campaignReport', $this->data);
        }else{
            return redirect(route('campaign_reports.index'));
        }
    }

    /**
     * Show the form for editing the specified CampaignReport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.campaign_reports.edit')->with('campaignReport', $this->data);
        }else{
            return redirect(route('campaign_reports.index'));
        }
    }

    /**
     * Update the specified CampaignReport in storage.
     *
     * @param int $id
     * @param UpdateCampaignReportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignReportRequest $request)
    {

        $this->data_check($id);

        $data = $this->campaignReportRepository->update($request->all(), $id);

        Flash::success('Campaign Report updated successfully.');

        return redirect(route('campaignReports.index'));
    }

    /**
     * Remove the specified CampaignReport from storage.
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

        $this->campaignReportRepository->delete($id);

        Flash::success('Campaign Report deleted successfully.');

        return redirect(route('campaignReports.index'));
    }
    
    protected function data_check($id){
        if ($this->campaignReportRepository->find($id)) {
            $this->data = $this->campaignReportRepository->find($id);
            return true;
        }else{
            Flash::error('Campaign Report not found');
            return false;
        }
    }
}
