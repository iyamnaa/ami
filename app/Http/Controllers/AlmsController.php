<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlmsController extends Controller
{
    public function index()
    {
        return view('alms.index');
    }
}
