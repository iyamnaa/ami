<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\Donation as Donasi;
use App\Models\Zakat as Zakat;
use Payment;

class NotificationController extends Controller
{
    public function notification(Request $request)
    {
      Payment::initMidtrans();

      $notif = new \Midtrans\Notification();
      $validSignatureKey = hash('sha512', $notif->order_id.$notif->status_code.$notif->gross_amount.env('MIDTRANS_SERVER_KEY'));

      if($notif->signature_key != $validSignatureKey){
        return response(['message' => 'Invalid Signature'], 403);
      }

      if($notif->status_code != 404){
        try{
          $transaction = $notif->transaction_status;
          // $transaction = 'settlement';
          $type = $notif->payment_type;
          $order_id = $notif->order_id;
          // $order_id = 'Zakat/061421/326082020/638';
          $fraud = $notif->fraud_status;

          $akad = $this->getAkad($order_id);
          $model = $this->findRepository($akad);

          // $vaNumber = null;
          // $vendorName = null;
          // if (!empty($notif->va_numbers[0])) {
          //   $vaNumber = $notif->va_numbers[0]->va_number;
          //   $vendorName = $notif->va_numbers[0]->bank;
          // }

          switch ($transaction) {
            case 'capture':    
              // if ($type = 'credit_card') {
              //   if ($fraud == 'challenge') {
                      $paymentStatus = 'proses';
              //   } else{

              //   }
              // }
              break;

            case 'settlement':
              $paymentStatus = 'berhasil';
              break;
            
            case 'pending':
              # code...
              break;

            case 'deny':
            case 'expire':
              $paymentStatus = 'gagal';
              break;

            case 'cancel':
              $paymentStatus = 'cancel';
              break;

            default:
              $paymentStatus = 'proses';
              break;
          }

          $dataTable = $model::where('transaction_id', $order_id);
          if(isset($dataTable) && isset($paymentStatus)){
            $dataTable->update(['status' => $paymentStatus]);
          }else{
            return response(['message' => 'Data Transaksi Tidak Ditemukan'], 404);
          }
        }catch(\Throwable $e){
          return response(['message' => $e->getMessage()], 404);
        }

      }else{
        return response(['message' => 'Tidak Ditemukan'], 404);
      }
    }

    public function getAkad($orderId = 'Default/')
    {
      return substr($orderId, 0, strpos($orderId, '/'));
    }

    public function findRepository($akad)
    {
      switch ($akad) {
        case 'Zakat':
          return app('App\Models\Zakat');
          break;

        case 'Donation':
          return app('App\Models\Donation');
          break;
        
        default:
          return app('App\Models\Donation');
          break;
      }
    }
}
