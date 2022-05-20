<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function index(Request $request)
    {
        
// Set your Merchant Server Key
\Midtrans\Config::$serverKey = env('SERVER_KEY');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;
 
$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 5000,
    ),
    'customer_details' => array(
        'first_name' => 'kobo',
        'last_name' => 'kanaeru',
        'email' => 'kobo@kanaeru.com',
        'phone' => '08111222333',
    ),
);
 
$snapToken = \Midtrans\Snap::getSnapToken($params);
// dd($snapToken);
return view('pay.index', ['token'=>$snapToken]);
    }
}
