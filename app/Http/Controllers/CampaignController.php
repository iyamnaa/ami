<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Repositories\CampaignRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\CampaignCategory;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Donation;
use Illuminate\Http\Request;
use Flash;
use Response;

class CampaignController extends AppBaseController
{
    /** @var  CampaignRepository */
    private $campaignRepository;
    private $data = '';

    public function __construct(CampaignRepository $campaignRepo)
    {
        $this->campaignRepository = $campaignRepo;
    }

    /**
     * Display a listing of the Campaign.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function front(Request $request)
    {
        $filter = array(
            'name' => $request->input('search-filter'),
            'category' => $request->input('category')
        );

        $campaigns = Campaign::all();
        $campaigns = $filter['name'] != null ? $campaigns->where('name', $filter['name']) : $campaigns;
        $campaigns = $filter['category'] != null ? $campaigns->where('campaign_category_id', $filter['category']) : $campaigns;
        $campaigns = Campaign::deadlineCheck($campaigns, $request->input('type'));
        $campaigns = Campaign::campaignSort($campaigns, $request->input('sort-by'));

        $categories = CampaignCategory::all();
        return view('donations.index', [
                                            'campaigns' => $campaigns,
                                            'categories' => $categories 
                                        ]);

    }

    public function index(Request $request)
    {
        $datas = $this->campaignRepository->all();

        return view('admin.campaigns.index')
            ->with('campaigns', $datas);
    }

    /**
     * Show the form for creating a new Campaign.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.campaigns.create');
    }

    /**
     * Store a newly created Campaign in storage.
     *
     * @param CreateCampaignRequest $request
     *
     * @return Response
     */
    public function store(CreateCampaignRequest $request)
    {
        $input = $request->all();

        $data = $this->campaignRepository->create($input);

        Flash::success('Campaign saved successfully.');

        return redirect(route('campaigns.index'));
    }

    /**
     * Display the specified Campaign.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.campaigns.show')->with('campaign', $this->data);
        }else{
            return redirect(route('campaigns.index'));
        }
    }

    /**
     * Show the form for editing the specified Campaign.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.campaigns.edit')->with('campaign', $this->data);
        }else{
            return redirect(route('campaigns.index'));
        }
    }

    /**
     * Update the specified Campaign in storage.
     *
     * @param int $id
     * @param UpdateCampaignRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignRequest $request)
    {

        $this->data_check($id);
        $data = $this->campaignRepository->update($request->all(), $id);
        Flash::success('Campaign updated successfully.');

        return redirect(route('campaigns.index'));
    }

    /**
     * Remove the specified Campaign from storage.
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
        $this->campaignRepository->delete($id);
        Flash::success('Campaign deleted successfully.');

        return redirect(route('campaigns.index'));
    }
    
    protected function data_check($id){
        if ($this->campaignRepository->find($id)) {
            $this->data = $this->campaignRepository->find($id);
            return true;
        }else{
            Flash::error('Campaign not found');
            return false;
        }
    }
}
