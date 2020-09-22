<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function imageCrop()
    {
        return view('image');
    }

    public function imageCropPost(Request $request)
    {
        try {
            $data = $request->image;
            $dir = $request->dir;
    
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
    
            $data = base64_decode($data);
            $image_name = 'images/' . $dir.'/'.time().'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            return response()->json(['success'=> $path, 'file_name' => $image_name]);

        } catch (\Throwable $th) {
            return response()->json(['success'=> $th->getMessage(),'file_name' => null]);
        }
    }
}
