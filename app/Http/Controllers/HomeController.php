<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\CampaignCategory;
use App\Models\TopCampaign;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Zakat;
use App\Models\Donation;
use App\Models\News;
use App\Models\TopNews;
use App\Models\AdvertisingImage;

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
        $topCampaigns = TopCampaign::all();
        $categories = CampaignCategory::all();
        $categorySearch = $request->category != null ? $request->category : $categories->first->get();
        $campaignsByCategory = Campaign::where('campaign_category_id', $categorySearch->id)->take(8)->get();
        $articles = TopNews::all()->take(5);
        $ads = AdvertisingImage::all();
        return view('index', [
                                'topCampaigns' => $topCampaigns,
                                'newestCampaigns' => $newestCampaigns,
                                'categories' => $categories,
                                'categorySearch' => $categorySearch,
                                'campaignsByCategory' => $campaignsByCategory,
                                'articles' => $articles,
                                'ads' => $ads
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
        $dataCount = array(
            'campaigns' => Campaign::all()->count(),
            'users' => User::all()->count(),
            'donations' => Donation::all()->count(),
            'zakats' => Zakat::all()->count(),
        );
        return view('admin.home', [
                                    'dataCount' => $dataCount
                                  ]);
    }

    public function signOut()
    {
        Auth::logout();
    }
    public function coba()
    {
        $batas = 100;
        $minimum = 2;
        $pengulangan = 0;
        $limit = $minimum;
        $numbers = [];

        for ($i=2; $i <= $batas; $i++) { 
            array_push($numbers, $i);
        }

        while ($limit * $limit <= $batas) {
            $limit += 1;
        }

        for ($i=2; $i < $limit; $i++) { 
            foreach($numbers as $number){
                if($number % $i == 0 && $number != $i){
                    if($number != null){
                        $numbers[$number - 2] = null;
                        $pengulangan++;
                    }
                }
            }
        }

        return view('coba', ['numbers' => $numbers, 'pengulangan' => $pengulangan]);
    }

    public function coba2()
    {
        return view('coba');
    }
}
