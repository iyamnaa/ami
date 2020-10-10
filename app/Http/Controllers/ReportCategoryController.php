<?php

namespace App\Http\Controllers;

use App\DataTables\ReportCategoryDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateReportCategoryRequest;
use App\Http\Requests\UpdateReportCategoryRequest;
use App\Repositories\ReportCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ReportCategoryController extends AppBaseController
{
    /** @var  ReportCategoryRepository */
    private $reportCategoryRepository;

    public function __construct(ReportCategoryRepository $reportCategoryRepo)
    {
        $this->reportCategoryRepository = $reportCategoryRepo;
    }

    /**
     * Display a listing of the ReportCategory.
     *
     * @param ReportCategoryDataTable $reportCategoryDataTable
     * @return Response
     */
    public function index(ReportCategoryDataTable $reportCategoryDataTable)
    {
        return $reportCategoryDataTable->render('admin.report_categories.index');
    }

    /**
     * Show the form for creating a new ReportCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.report_categories.create');
    }

    /**
     * Store a newly created ReportCategory in storage.
     *
     * @param CreateReportCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateReportCategoryRequest $request)
    {
        $input = $request->all();

        $reportCategory = $this->reportCategoryRepository->create($input);

        Flash::success('Report Category saved successfully.');

        return redirect(route('reportCategories.index'));
    }

    /**
     * Display the specified ReportCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reportCategory = $this->reportCategoryRepository->find($id);

        if (empty($reportCategory)) {
            Flash::error('Report Category not found');

            return redirect(route('reportCategories.index'));
        }

        return view('admin.report_categories.show')->with('reportCategory', $reportCategory);
    }

    /**
     * Show the form for editing the specified ReportCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reportCategory = $this->reportCategoryRepository->find($id);

        if (empty($reportCategory)) {
            Flash::error('Report Category not found');

            return redirect(route('reportCategories.index'));
        }

        return view('admin.report_categories.edit')->with('reportCategory', $reportCategory);
    }

    /**
     * Update the specified ReportCategory in storage.
     *
     * @param  int              $id
     * @param UpdateReportCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportCategoryRequest $request)
    {
        $reportCategory = $this->reportCategoryRepository->find($id);

        if (empty($reportCategory)) {
            Flash::error('Report Category not found');

            return redirect(route('reportCategories.index'));
        }

        $reportCategory = $this->reportCategoryRepository->update($request->all(), $id);

        Flash::success('Report Category updated successfully.');

        return redirect(route('reportCategories.index'));
    }

    /**
     * Remove the specified ReportCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reportCategory = $this->reportCategoryRepository->find($id);

        if (empty($reportCategory)) {
            Flash::error('Report Category not found');

            return redirect(route('reportCategories.index'));
        }

        $this->reportCategoryRepository->delete($id);

        Flash::success('Report Category deleted successfully.');

        return redirect(route('reportCategories.index'));
    }
}
