<?php
/// IMPORTANT - Replace the following line with your path to the escpos-php autoload script
require_once APPPATH."third_party/midtrans-php/Midtrans.php";
use Midtrans\ApiRequestor;
use Midtrans\Config;
use Midtrans\CoreApi;
use Midtrans\Notification;
use Midtrans\Sanitizer;
use Midtrans\Snap;
use Midtrans\SnapApiRequestor;
use Midtrans\Transaction;
class PayMidtrans
{
  public function paymentMidtrans($data,$id_transaction,$total){
    //Set Your server key
    Config::$serverKey = "SB-Mid-server-mVFs7IsFhzRv11k1-zzzgAAW";

    // Uncomment for production environment
    // Config::$isProduction = true;

    // Uncomment to enable sanitization
    // Config::$isSanitized = true;

    // Uncomment to enable 3D-Secure
    // Config::$is3ds = true;

    // Required
    $transaction_details = array(
        'order_id' => $id_transaction,
        'gross_amount' => $total, // no decimal allowed for creditcard
    );

    // Optional
    // $item_details = array ($item1_details, $item2_details);

    $params = array(
        'transaction_details' => $transaction_details,
        // 'customer_details' => $customer_details,
        'item_details' => $data['item_details'],
    );

    try {
        // Get Snap Payment Page URL
        $paymentUrl = Snap::createTransaction($params)->redirect_url;

        // Redirect to Snap Payment Page
        header('Location: ' . $paymentUrl);
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
  }
}
