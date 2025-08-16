<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    // Checkout page show karna
    public function index()
    {
        $session = Session::get('cart');
        if($session === null){
            return redirect()->route('music-store.front');
        }
        return view('front.checkout');
    }

    // Checkout form submit
//    public function checkoutForm(Request $request)
//    {
//
//        $request->validate([
//            'full_name'       => 'required|string|max:255',
//            'email'            => 'required|email',
//            'phone'            => 'required|string|max:11',
//            'password'         => 'required|confirmed|min:6',
//            'address'          => 'required|string',
//        ]);
//
//        $totalAmount = 0;
//        $orderDetails = "";
//
//        if (Session::has('cart')) {
//            foreach (Session::get('cart') as $cart) {
//                $lineTotal = $cart['price'] * $cart['quantity'];
//                $totalAmount += $lineTotal;
//                $orderDetails .= "{$cart['name']} x {$cart['quantity']} = USD {$lineTotal}\n";
//            }
//        }
//
//
//
//        // Cart clear
//        session()->forget('cart');
//
//        // User ko Thank You page dikhana
//        return redirect()->route('front.thankyou');
//    }

    public function checkoutForm(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:11',
            'password'  => 'required|confirmed|min:6',
            'address'   => 'required|string',
        ]);

        $totalAmount = 0;
        $orderDetails = "";

        if (Session::has('cart')) {
            foreach (Session::get('cart') as $cart) {
                $lineTotal = $cart['price'] * $cart['quantity'];
                $totalAmount += $lineTotal;
                $orderDetails .= "{$cart['name']} x {$cart['quantity']} = USD {$lineTotal}\n";
            }

            // Save order in DB
            DB::table('order_table')->insert([
                'admin_number' => '923492917821',
                'message' => "🛒 New Order Received!\nName: {$request->full_name}\nPhone: {$request->phone}\nAddress: {$request->address}\nOrder Details:\n{$orderDetails}\nTotal: USD {$totalAmount}",
                'created_at' => now(),
            ]);
        }



        // Clear cart
        session()->forget('cart');

        // Redirect to Thank You page with WhatsApp link
        return redirect()->route('front.thankyou')->with('whatsappUrl', $whatsappUrl);
    }

    // Thank You page
    public function thankyou()
    {
        return view('front.thankyou');
    }
}
