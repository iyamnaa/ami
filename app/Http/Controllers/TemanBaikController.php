<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemanBaikController extends Controller
{
    public function index()
    {
        return view('temanbaik.index');
    }

    public function create(Request $request)
    {
        return view('temanbaik.daftar');
    }
}
