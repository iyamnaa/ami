<?php

namespace App\Http\Controllers;

use App\DataTables\CampaignDataTable;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Repositories\CampaignRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Auth;
use App\Models\CampaignUpdate;
use App\Models\CampaignCategory;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Donation;
use App\Models\TopCampaign;

class CampaignController extends AppBaseController
{
    /** @var  CampaignRepository */
    private $campaignRepository;

    public function __construct(CampaignRepository $campaignRepo)
    {
        $this->campaignRepository = $campaignRepo;
    }

    public function front(Request $request)
    {
        $filter = array(
            'name' => $request->input('search-filter'),
            'category' => $request->input('category')
        );

        $campaigns = Campaign::all();
        $campaigns = $filter['name'] != 'null' ? $campaigns->where('name', $filter['name']) : $campaigns;
        $campaigns = $filter['category'] != null ? $campaigns->where('campaign_category_id', $filter['category']) : $campaigns;
        $campaigns = Campaign::deadlineCheck($campaigns, $request->input('type'));
        $campaigns = Campaign::campaignSort($campaigns, $request->input('sort-by'));

        $categories = CampaignCategory::all();
        return view('donations.index', [
                                            'campaigns' => $campaigns,
                                            'categories' => $categories 
                                        ]);

    }

    public function campaignDetail(Request $request)
    {
        $campaign = Campaign::find($request->id);
        $updates = CampaignUpdate::where('campaign_id', $campaign->id)->get();
        $donations = Donation::where('campaign_id', $campaign->id)->get();
        return view('donations.show', [
                                        'campaign' => $campaign,
                                        'updates' => $updates,
                                        'donations' => $donations
                                      ]);
    }

    public function topCampaigns()
    {
        $campaigns = TopCampaign::all();
        return view('admin.campaigns.top', ['campaigns' => $campaigns]);
    }

    public function topCampaignCreate(Request $request)
    {
        TopCampaign::updateOrCreate(['campaign_id' => $request->id], ['campaign_id' => $request->id]);
        Flash::success('Top Campaign added successfully.');
        return redirect(route('campaigns.index'));
    }

    public function topCampaignDestroy(Request $request)
    {
        TopCampaign::destroy($request->id);
        Flash::success('Top Campaign deleted successfully.');
        return redirect(route('topCampaigns.index'));
    }

    /**
     * Display a listing of the Campaign.
     *
     * @param CampaignDataTable $campaignDataTable
     * @return Response
     */
    public function index(CampaignDataTable $campaignDataTable)
    {
        return $campaignDataTable->render('admin.campaigns.index');
    }

    /**
     * Show the form for creating a new Campaign.
     *
     * @return Response
     */
    public function create()
    {
        $categories = CampaignCategory::all();
        return view('admin.campaigns.create', ['categories' => $categories]);
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

        if($request->input('image_cover_name') != null){
            $input['image_cover'] = $request->input('image_cover_name');
        }else{
            $input['image_cover'] = 'images/campaign/default.jpg';
        }

        $input['user_id']= Auth::check() ? Auth::id() : 1;
        $input['is_deleted']= 0;
        $input['status']='diminta';
        $data = $this->campaignRepository->create($input);

        Flash::success('Campaign saved successfully.');

        return redirect(route('campaigns.index'));
    }

    /**
     * Display the specified Campaign.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $campaign = $this->campaignRepository->find($id);
        if (empty($campaign)) {
            Flash::error('Campaign not found');
            return redirect(route('campaigns.index'));
        }
        return view('admin.campaigns.show')->with('campaign', $campaign);
    }

    /**
     * Show the form for editing the specified Campaign.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $campaign = $this->campaignRepository->find($id);

        if (empty($campaign)) {
            Flash::error('Campaign not found');
            return redirect(route('campaigns.index'));
        }

        $categories = CampaignCategory::all();
        return view('admin.campaigns.edit', ['campaign' => $campaign, 'categories' => $categories]);
    }

    /**
     * Update the specified Campaign in storage.
     *
     * @param  int              $id
     * @param UpdateCampaignRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampaignRequest $request)
    {
        $input = $request->all();
        $old_image = Campaign::find($id)->image_cover;

        if($request->input('image_cover_name') != null){
            $input['image_cover'] = $request->input('image_cover_name');
            if(is_file($old_image)){
                unlink(public_path().'/'. $old_image);
            }
        }else{
            $input['image_cover'] = $old_image;
        }

        if($this->data_check($id)){
            $data = $this->campaignRepository->update($input, $id);
            Flash::success('Campaign berhasil diedit.');
            return redirect(route('campaigns.index'));
        }else{
            Flash::alert('Campaign Tidak Ditemukan');
            return redirect(route('campaigns.index'));
        }
    }

    /**
     * Remove the specified Campaign from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $campaign = $this->campaignRepository->find($id);
        if (empty($campaign)) {
            Flash::error('Campaign not found');
            return redirect(route('campaigns.index'));
        }

        $this->campaignRepository->delete($id);
        Flash::success('Campaign deleted successfully.');
        return redirect(route('campaigns.index'));
    }
}