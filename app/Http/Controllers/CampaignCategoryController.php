<?php

namespace App\Http\Controllers;

use App\DataTables\CampaignCategoryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCampaignCategoryRequest;
use App\Http\Requests\UpdateCampaignCategoryRequest;
use App\Repositories\CampaignCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CampaignCategoryController extends AppBaseController
{
    /** @var  CampaignCategoryRepository */
    private $campaignCategoryRepository;

    public function __construct(CampaignCategoryRepository $campaignCategoryRepo)
    {
        $this->campaignCategoryRepository = $campaignCategoryRepo;
    }

    /**
     * Display a listing of the CampaignCategory.
     *
     * @param CampaignCategoryDataTable $campaignCategoryDataTable
     * @return Response
     */
    public function index(CampaignCategoryDataTable $campaignCategoryDataTable)
    {
        return $campaignCategoryDataTable->render('admin.campaign_categories.index');
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

        $campaignCategory = $this->campaignCategoryRepository->create($input);

        Flash::success('Campaign Category saved successfully.');

        return redirect(route('campaignCategories.index'));
    }

    /**
     * Display the specified CampaignCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $campaignCategory = $this->campaignCategoryRepository->find($id);

        if (empty($campaignCategory)) {
            Flash::error('Campaign Category not found');

            return redirect(route('campaignCategories.index'));
        }

        return view('admin.campaign_categories.show')->with('campaignCategory', $campaignCategory);
    }

    /**
     * Show the form for editing the specified CampaignCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $campaignCategory = $this->campaignCategoryRepository->find($id);

        if (empty($campaignCategory)) {
            Flash::error('Campaign Category not found');

            return redirect(route('campaignCategories.index'));
        }

        return view('admin.campaign_categories.edit')->with('campaignCategory', $campaignCategory);
    }

    /**
     * Update the specified CampaignCategory in storage.
     *
     * @param  int              $id
     * @param UpdateCampaignCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignCategoryRequest $request)
    {
        $campaignCategory = $this->campaignCategoryRepository->find($id);

        if (empty($campaignCategory)) {
            Flash::error('Campaign Category not found');

            return redirect(route('campaignCategories.index'));
        }

        $campaignCategory = $this->campaignCategoryRepository->update($request->all(), $id);

        Flash::success('Campaign Category updated successfully.');

        return redirect(route('campaignCategories.index'));
    }

    /**
     * Remove the specified CampaignCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $campaignCategory = $this->campaignCategoryRepository->find($id);

        if (empty($campaignCategory)) {
            Flash::error('Campaign Category not found');

            return redirect(route('campaignCategories.index'));
        }

        $this->campaignCategoryRepository->delete($id);

        Flash::success('Campaign Category deleted successfully.');

        return redirect(route('campaignCategories.index'));
    }
}
