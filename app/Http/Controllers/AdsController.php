<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvertisingImage;
use Flash;

class AdsController extends Controller
{
    public function index()
    {
        $ads = AdvertisingImage::all();
        return view('admin.ads.index', ['ads' => $ads]);
    }

    public function create()
    {
        return view('admin.ads.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if($request->input('image_url_name') != null){
            $input['image_url'] = $request->input('image_url_name');
        }else{
            $input['image_url'] = 'images/campaign/default.jpg';
        }

        $data = AdvertisingImage::create($input);

        Flash::success('Advertising saved successfully.');
        return redirect(route('ads.index'));
    }

    public function destroy(Request $request)
    {
        $ad = AdvertisingImage::find($request->id);
        unlink(public_path() .'/'. $ad->image_url);
        $ad->delete();
        Flash::success('Advertising deleted successfully.');
        return redirect(route('ads.index'));
    }
}
