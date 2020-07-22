<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampaignCategoryRequest;
use App\Http\Requests\UpdateCampaignCategoryRequest;
use App\Repositories\CampaignCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CampaignCategoryController extends AppBaseController
{
    /** @var  CampaignCategoryRepository */
    private $campaignCategoryRepository;
    private $data = '';

    public function __construct(CampaignCategoryRepository $campaignCategoryRepo)
    {
        $this->campaignCategoryRepository = $campaignCategoryRepo;
    }

    /**
     * Display a listing of the CampaignCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $datas = $this->campaignCategoryRepository->all();

        return view('admin.campaign_categories.index')
            ->with('campaignCategories', $datas);
    }

    /**
     * Show the form for creating a new CampaignCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.campaign_categories.create');
    }

    /**
     * Store a newly created CampaignCategory in storage.
     *
     * @param CreateCampaignCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCampaignCategoryRequest $request)
    {
        $input = $request->all();

        $data = $this->campaignCategoryRepository->create($input);

        Flash::success('Campaign Category saved successfully.');

        return redirect(route('campaignCategories.index'));
    }

    /**
     * Display the specified CampaignCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.campaign_categories.show')->with('campaignCategory', $this->data);
        }else{
            return redirect(route('campaign_categories.index'));
        }
    }

    /**
     * Show the form for editing the specified CampaignCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.campaign_categories.edit')->with('campaignCategory', $this->data);
        }else{
            return redirect(route('campaign_categories.index'));
        }
    }

    /**
     * Update the specified CampaignCategory in storage.
     *
     * @param int $id
     * @param UpdateCampaignCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignCategoryRequest $request)
    {
        $this->data_check($id);

        $data = $this->campaignCategoryRepository->update($request->all(), $id);

        Flash::success('Campaign Category updated successfully.');

        return redirect(route('campaignCategories.index'));
    }

    /**
     * Remove the specified CampaignCategory from storage.
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

        $this->campaignCategoryRepository->delete($id);

        Flash::success('Campaign Category deleted successfully.');

        return redirect(route('campaignCategories.index'));
    }
    
    protected function data_check($id){
        if ($this->campaignCategoryRepository->find($id)) {
            $this->data = $this->campaignCategoryRepository->find($id);
            return true;
        }else{
            Flash::error('Campaign Category not found');
            return false;
        }
    }
}
