<?php

namespace App\Helpers;

class Payment{

  public static function initMidtrans(){
    \Midtrans\Config::$serverKey = \Config::get('values.server_key');
    \Midtrans\Config::$isProduction = env('MIDTRANS_PRODUCTION');
    \Midtrans\Config::$isSanitized = env('MIDTRANS_SANITIZE');
    \Midtrans\Config::$is3ds = env('MIDTRANS_3DS');
  }

  public static function generateSnapToken($params = null)
  {
    try {
      Payment::initMidtrans();
      $paymentData = Payment::setData($params);
      return \Midtrans\Snap::getSnapToken($paymentData);

    } catch (Exception $e) {
      return $e;
    }
  }

  public static function setData($paymentData){
    if (is_null($paymentData)) {
      $paymentData = Payment::getDefaultData();
    }

    // if ($paymentData['transaction_details']['gross_amount'] > 10000) {
    //   $enabled_payments = ["credit_card", "mandiri_clickpay", "cimb_clicks",
    //                       "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
    //                       "bca_va", "bni_va", "other_va", "gopay", "indomaret",
    //                       "danamon_online", "akulaku"];
    // }else{
    //   $enabled_payments = ["gopay", "akulaku"];
    // }
    switch ($paymentData['enabled_payments']) {
      case "Bank Transfer":
          $enabled_payments = ["permata_va", "bca_va","bni_va", "other_va"];
          break;
      case "Credit Card":
        $enabled_payments = ["credit_card"];
          break;
      case "Gopay":
        $enabled_payments = ["gopay"];
          break;
      case "Qris":
        $enabled_payments = ["qris"];
          break;
      case "Akulaku":
        $enabled_payments = ["akulaku"];
          break;
      case "Shopee Pay":
        $enabled_payments = ["shopee_pay"];
          break;
      case "Lain-Lainnya":
        $enabled_payments = ["indomaret", "alfamart", "alfamidi", "bca_klikpay", "bri_epay", "danamon_online"];
          break;
      default:
        $enabled_payments = ["credit_card", "mandiri_clickpay", "cimb_clicks",
                              "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
                              "bca_va", "bni_va", "other_va", "gopay", "indomaret",
                              "danamon_online", "akulaku"];
        break;
    }

    $callbacks = [
      'finish' => route('index')
    ];

    $paymentData['enabled_payments'] = $enabled_payments;
    $paymentData['callbacks'] = $callbacks;

    return $paymentData;

  }

  public static function generateOrderID($akad){
    return $akad.date('/His/NdmY/').rand(100,999);
  }

  public static function getDefaultData(){
    $defaultData = array('transaction_details' => [
                            'order_id' => Payment::generateOrderID("Default"),
                            'gross_amount' => 1000  
                          ],
                          'item_details' => [
                            'price' => 1000,
                            'quantity' => 1,
                            'name' => "Zakat Donasi",
                            'category' => "Donasi",
                            'merchant_name' => "Amal Madani"
                          ]
                        );

    return $defaultData;
  }

}

?>