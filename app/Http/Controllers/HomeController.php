<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\CampaignCategory;
use App\Models\Campaign;
use App\Models\Donation;

class HomeController extends AppBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $newestCampaigns = Campaign::all()->take(3)->sortByDesc('created_at');
        $topCampaigns = CampaignCategory::all();
        $categories = CampaignCategory::all();
        $categorySearch = $request->category != null ? $request->category : $categories->first->get();
        $campaignsByCategory = Campaign::where('campaign_category_id', $categorySearch->id)->take(8)->get();
        return view('index', [
                                'topCampaigns' => $topCampaigns,
                                'newestCampaigns' => $newestCampaigns,
                                'categories' => $categories,
                                'categorySearch' => $categorySearch,
                                'campaignsByCategory' => $campaignsByCategory
                             ]);
    }

    public function searchByCategory(Request $request)
    {
        $categorySearch = CampaignCategory::find($request->category);
        $campaignsByCategory = Campaign::where('campaign_category_id', $request->category)->take(8)->get();
        return view('campaign-by-category', [
                                                'categorySearch' => $categorySearch,
                                                'campaignsByCategory' => $campaignsByCategory
                                            ]);
    }

    public function about()
    {
        return view('about');
    }

    public function home()
    {
        parent::adminOnly();
        return view('admin.home');
    }

    public function signOut()
    {
        Auth::logout();
    }
}
