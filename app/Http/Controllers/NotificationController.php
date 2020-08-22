<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DonationRepository as DonationRepository;
use App\Repositories\ZakatRepository as ZakatRepository;
use Payment;

class NotificationController extends Controller
{
    public function notification(Request $request)
    {
      // $payload = $request->getContent();
      // $notification = json_decode($payload);
      // $validSignatureKey = hash('sha512', $notification->order_id.$notification->status_code.$notification->gross_amount.env('MIDTRANS_SERVER_KEY'));

      // if($notification->signature_key != $validSignatureKey){
      //   return response(['message' => 'Invalid Signature'], 403);
      // }

      // Payment::initMidtrans();
      // $status_code = null;

      $notif = new \Midtrans\notification();

      $transaction = $notif->transaction_status;
      $type = $notif->payment_type;
      $order_id = $notif->order_id;
      $fraud = $notif->fraud_status;

<<<<<<< HEAD
      $akad = $this->getAkad($order_id);
      $dataRepository = $this->findRepository($akad);

=======
      $akad = $this->getAkad('Zakat/121231')
      $dataRepository = $this->findRepository($akad);
>>>>>>> 148465eca14fd2f992df727fbab0ee4f764f49b5
      // // $vaNumber = null;
      // // $vendorName = null;
      // // if (!empty($notif->va_numbers[0])) {
      // //   $vaNumber = $notif->va_numbers[0]->va_number;
      // //   $vendorName = $notif->va_numbers[0]->bank;
      // // }

      // // $paymentStatus = null;
<<<<<<< HEAD
      switch ($transaction) {
        case 'capture':
            
           // if ($type = 'credit_card') {
           //   if ($fraud == 'challenge') {
           //     # code...
           //   } else{

           //   }
           // }
          break;

        case 'settlement':
          
          break;
        
        case 'pending':
          # code...
          break;

        case 'deny':
          # code...
          break;

        case 'expire':
          # code...
          break;

        case 'cancel':
          # code...
          break;

        default:
          # code...
          break;
      }
=======
      // switch ($transaction) {
      //   case 'capture':

      //      // if ($type = 'credit_card') {
      //      //   if ($fraud == 'challenge') {
      //      //     # code...
      //      //   } else{

      //      //   }
      //      // }
      //     break;

      //   case 'settlement':
          
      //     break;
        
      //   case 'pending':
      //     # code...
      //     break;

      //   case 'deny':
      //     # code...
      //     break;

      //   case 'expire':
      //     # code...
      //     break;

      //   case 'cancel':
      //     # code...
      //     break;

      //   default:
      //     # code...
      //     break;
      // }
>>>>>>> 148465eca14fd2f992df727fbab0ee4f764f49b5
    }

    public function getAkad($orderId = 'Default/')
    {
      return substr($orderId, 0, strpos($orderId, '/'));
    }

    public function findRepository($akad)
    {
      switch ($akad) {
        case 'Zakat':
          return app('App\Repositories\ZakatRepository');
          break;

        case 'Donation':
          return app('App\Repositories\DonationRepository');
          break;
        
        default:
          return app('App/Repositories/DonationRepository');
          break;
      }
    }
}
