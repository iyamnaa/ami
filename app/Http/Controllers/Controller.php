<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function initMidtrans(){
      \Midtrans\Config::$serverKey = env['MIDTRANS_SERVER_KEY'];
      \Midtrans\Config::$isProduction = env['MIDTRANS_ENV'];
      \Midtrans\Config::$isSanitize = env['MIDTRANS_SANITIZE'];
      \Midtrans\Config::$is3ds = env['MIDTRANS_3DS'];
    }
}
