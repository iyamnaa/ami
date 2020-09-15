<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donation;
use App\Models\Zakat;
use PDF;
use Auth;

class ReceiptController extends Controller
{
    public function userReceipt(Request $request)
    {
        $user = User::where('username', $request->username)->get()->first->id;
        $id = $user->id;
        if (Auth::id() == $id) {
            $donations = Donation::where('user_id', $id)->get();
            $zakats = Zakat::where('user_id', $id)->get();

            return view('users/transaction-list', [
                                                    'user' => $user,
                                                    'donations' => $donations,
                                                    'zakats' => $zakats
                                                  ]);
        }else {
            return redirect('/');
        }
    }

    public function show(Request $request)
    {
        // $pdf = \App::make('dompdf.wrapper');
        $model = $this->findModel($request->type);

        $transaction = $model::find($request->id);
        $user_id = $transaction->user_id;
        if(!is_null($user_id) && Auth::id() == $user_id){
            $user = User::where('id', $user_id)->get()->first->id;

            // $pdf = PDF::loadView('users/receipt', ['transaction' => $transaction] );
            // return $pdf->stream();
            return view('users/receipt', ['user' => $user, 'transaction' => $transaction]);
        }else{
            return redirect('/');
        }
    }

    public function findModel($type = '')
    {
        if($type == "zakat"){
            return app('App\Models\Zakat');
        }else{
            return app('App\Models\Donation');
        }
    }
}
