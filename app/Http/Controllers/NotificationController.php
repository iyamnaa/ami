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

      Payment::initMidtrans();
      $status_code = null;

      $notif = new \Midtrans\notification();

      $transaction = $notif->transaction_status;
      $type = $notif->payment_type;
      $order_id = $notif->order_id;
      $fraud = $notif->fraud_status;

      $akad = $this->getAkad($order_id);
      $dataRepository = $this->findRepository($akad);

      $vaNumber = null;
      $vendorName = null;
      if (!empty($notif->va_numbers[0])) {
        $vaNumber = $notif->va_numbers[0]->va_number;
        $vendorName = $notif->va_numbers[0]->bank;
      }

      // $paymentStatus = null;

      switch ($transaction) {
        case 'capture':    
           // if ($type = 'credit_card') {
           //   if ($fraud == 'challenge') {
                  $data->transaction_id = $order_id;
                  $data->qty = 3 //$notif->qty;
                  $data->amount = 35000 //$notif->amount / $notif->qty;

                  $data->name = 'Natieq '//$notif->data_muzaki['first_name'];
                  $data->email = 'Nathieq Sah '//$notif->data_muzaki['email'];
                  $data->telephone = '0892132400' //$notif->data_muzaki['phone'];
                  $data->address = 'Jl. Babakan Ciparay' //$notif->data_muzaki['address'];
                  $data->as_anonymous = false //$notif->data_muzaki['as_anonymous'];

                  $data->NIA = null //$notif->data_amil['amil_nia'];
                  $data->amil_name = null //$notif->data_amil['amil_name'];

                  $data->status = 'proses';
                  $data->akad = 'Zakat' //$akad;

                  $dataRepository->create($data);
           //   } else{

           //   }
           // }
          break;

        case 'settlement':
          $id = $dataRepository->all($search = ['transaction_id' = $order_id], $columns = ['id']);
          if(isset($id)){
            $id->update(['status' => 'berhasil'], $dataID);
          }
          break;
        
        case 'pending':
          # code...
          break;

        case 'deny', 'expire':
          $id = $dataRepository->all($search = ['transaction_id' = $order_id], $columns = ['id']);
          if(isset($id)){
            $id->update(['status' => 'gagal'], $dataID);
          }
          break;

        case 'cancel':
          $id = $dataRepository->all($search = ['transaction_id' = $order_id], $columns = ['id']);
          if(isset($id)){
            $id->update(['status' => 'cancel'], $dataID);
          }
          break;

        default:
          $id = $dataRepository->all($search = ['transaction_id' = $order_id], $columns = ['id']);
          if(isset($id)){
            $id->update(['status' => 'gagal'], $dataID);
          }
          break;
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
