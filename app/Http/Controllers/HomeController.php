<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\CampaignCategory;
use App\Models\Campaign;
use App\Models\Donation;

class HomeController extends Controller
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
        $categorySearch = $request->category != null ? $request->category : $categories->first->get()->id;
        $campaignsByCategory = Campaign::where('campaign_category_id', $categorySearch)->take(8)->get();
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
        $categorySearch = CampaignCategory::find($request->category)->name;
        $campaignsByCategory = Campaign::where('campaign_category_id', $request->category)->take(8)->get();
        return view('campaign-by-category', [
                                                'categorySearch' => $categorySearch,
                                                'campaignsByCategory' => $campaignsByCategory
                                            ]);
    }

    public function home()
    {
        return view('home');
    }

    public function signOut()
    {
        Auth::logout();
    }
}
