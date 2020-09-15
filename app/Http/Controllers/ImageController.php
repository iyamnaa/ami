<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function imageCrop()
    {
        return view('image');
    }

    public function imageCropPost(Request $requests)
    {
        try {
            $data = $request->image;
    
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
    
            $data = base64_decode($data);
            $image_name= time().'.png';
            $path = public_path() . "/upload/" . $image_name;
    
            file_put_contents($path, $data);
        } catch (\Throwable $th) {
            return response()->json(['success'=> $th->getMessage()]);
        }
    }
}
