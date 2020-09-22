<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportCategoryRequest;
use App\Http\Requests\UpdateReportCategoryRequest;
use App\Repositories\ReportCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReportCategoryController extends AppBaseController
{
    /** @var  ReportCategoryRepository */
    private $reportCategoryRepository;
    private $data = '';

    public function __construct(ReportCategoryRepository $reportCategoryRepo)
    {
        $this->reportCategoryRepository = $reportCategoryRepo;
    }

    /**
     * Display a listing of the ReportCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reportCategories = $this->reportCategoryRepository->all();

        return view('admin.report_categories.index')
            ->with('reportCategories', $reportCategories);
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
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

        if($this->data_check($id)){
            return view('admin.report_categories.show')->with('reportCategory', $this->data);
        }else{
            return redirect(route('report_categories.index'));
        }
    }

    /**
     * Show the form for editing the specified ReportCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        if($this->data_check($id)){
            return view('admin.report_categories.edit')->with('reportCategory', $this->data);
        }else{
            return redirect(route('report_categories.index'));
        }
    }

    /**
     * Update the specified ReportCategory in storage.
     *
     * @param int $id
     * @param UpdateReportCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportCategoryRequest $request)
    {

        $this->data_check($id);

        $reportCategory = $this->reportCategoryRepository->update($request->all(), $id);

        Flash::success('Report Category updated successfully.');

        return redirect(route('reportCategories.index'));
    }

    /**
     * Remove the specified ReportCategory from storage.
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

        $this->reportCategoryRepository->delete($id);

        Flash::success('Report Category deleted successfully.');

        return redirect(route('reportCategories.index'));
    }
    
    protected function data_check($id){
        if ($this->reportCategoryRepository->find($id)) {
            $this->data = $this->reportCategoryRepository->find($id);
            return true;
        }else{
            Flash::error('Report Category not found');
            return false;
        }
    }
}
