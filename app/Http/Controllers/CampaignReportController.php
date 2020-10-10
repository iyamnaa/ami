<?php

namespace App\Http\Controllers;

use App\DataTables\CampaignReportDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateCampaignReportRequest;
use App\Http\Requests\UpdateCampaignReportRequest;
use App\Repositories\CampaignReportRepository;
use App\Models\ReportCategory;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CampaignReportController extends AppBaseController
{
    /** @var  CampaignReportRepository */
    private $campaignReportRepository;

    public function __construct(CampaignReportRepository $campaignReportRepo)
    {
        $this->campaignReportRepository = $campaignReportRepo;
    }

    public function report(Request $request)
    {
        $categories = ReportCategory::all();
        return view('donations.report', ['categories' => $categories, 'campaign_id' => $request->id]);
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $data = $this->campaignReportRepository->create($input);

        Flash::success('Laporan Campaign telah terkirim');
        return redirect(route('index'));
    }

    /**
     * Display a listing of the CampaignReport.
     *
     * @param CampaignReportDataTable $campaignReportDataTable
     * @return Response
     */
    public function index(CampaignReportDataTable $campaignReportDataTable)
    {
        return $campaignReportDataTable->render('admin.campaign_reports.index');
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

        $campaignReport = $this->campaignReportRepository->create($input);

        Flash::success('Campaign Report saved successfully.');

        return redirect(route('campaignReports.index'));
    }

    /**
     * Display the specified CampaignReport.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $campaignReport = $this->campaignReportRepository->find($id);

        if (empty($campaignReport)) {
            Flash::error('Campaign Report not found');

            return redirect(route('campaignReports.index'));
        }

        return view('admin.campaign_reports.show')->with('campaignReport', $campaignReport);
    }

    /**
     * Show the form for editing the specified CampaignReport.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $campaignReport = $this->campaignReportRepository->find($id);

        if (empty($campaignReport)) {
            Flash::error('Campaign Report not found');

            return redirect(route('campaignReports.index'));
        }

        return view('admin.campaign_reports.edit')->with('campaignReport', $campaignReport);
    }

    /**
     * Update the specified CampaignReport in storage.
     *
     * @param  int              $id
     * @param UpdateCampaignReportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignReportRequest $request)
    {
        $campaignReport = $this->campaignReportRepository->find($id);

        if (empty($campaignReport)) {
            Flash::error('Campaign Report not found');

            return redirect(route('campaignReports.index'));
        }

        $campaignReport = $this->campaignReportRepository->update($request->all(), $id);

        Flash::success('Campaign Report updated successfully.');

        return redirect(route('campaignReports.index'));
    }

    /**
     * Remove the specified CampaignReport from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $campaignReport = $this->campaignReportRepository->find($id);

        if (empty($campaignReport)) {
            Flash::error('Campaign Report not found');

            return redirect(route('campaignReports.index'));
        }

        $this->campaignReportRepository->delete($id);

        Flash::success('Campaign Report deleted successfully.');

        return redirect(route('campaignReports.index'));
    }
}
