<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {

        if (Session::has('cart')) {
            return view('front.checkout');
        }
        return view('front.cart');

    }

    public function checkoutForm(Request $request)
    {
        // Collecting the form data
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
            'confirm_password' => $request->input('confirm_password'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'zip_code' => $request->input('zip_code'),
            'state' => $request->input('state'),
            'create_account' => $request->input('create_account'),
        ];

        // Storing the data in the session
        session()->put('checkout_data', $data);

        return redirect()->route('payment.front');
    }

}
