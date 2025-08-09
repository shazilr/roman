<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Stripe\Checkout\Session;
use Stripe\Stripe;


class PaymentController extends Controller
{
    public function index()
    {


        return view('front.payment');
    }

    public function paymentForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email', // Corrected email validation rule
            'phone' => 'required',
            'password' => 'required|confirmed', // Added password confirmation check
            'address' => 'nullable',
            'country' => 'nullable',
            'city' => 'nullable',
            'zip_code' => 'nullable',
            'state' => 'nullable',
            'create_account' => 'nullable',
        ]);

        \Illuminate\Support\Facades\Session::put($request->all());

        $totalAmount = 0;
        $lineItems = [];

        if (session()->has('cart')) {
            foreach (session('cart') as $cart) {
                $totalAmount += $cart['price'] * $cart['quantity'];
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $cart['name'], // Product name from cart session
                        ],
                        'unit_amount' => $cart['price'] * 100, // Convert price to cents
                    ],
                    'quantity' => $cart['quantity'], // Quantity of the product
                ];
            }
        }

        Stripe::setApiKey(env('STRIPE_SECRET')); // Use environment variables for keys

        try {
            // Create a Stripe Checkout session
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('checkout.success', ['status' => 'success']),
                'cancel_url' => route('checkout.cancel'),
            ]);

            // Redirect to Stripe checkout session
            return redirect($session->url);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle API error
            return redirect()->route('checkout.cancel')->with('error', $e->getMessage());
        }
    }


    public function checkoutSuccess($status)
    {
        if ($status == 'success') {
            $session = \Illuminate\Support\Facades\Session::all();
            DB::beginTransaction();


            try {

                $totalItem = 0;
                $totalAmount = 0;

// Calculate total items and total amount from the cart
                if (isset($session['cart'])) {
                    foreach ($session['cart'] as $cart) {
                        $totalItem += $cart['quantity'];
                        $totalAmount += $cart['price'] * $cart['quantity'];
                    }
                }

// Create a user if 'create_account' is on
                if (optional($session)['create_account'] === 'on') {
                    $user = User::create([
                        'name' => optional($session)['first_name'] . ' ' . optional($session)['last_name'],
                        'email' => optional($session)['email'],
                        'password' => Hash::make(optional($session)['password']),
                    ]);

                    UserDetail::create([
                        'user_id' => $user->id,
                        'first_name' => optional($session)['first_name'],
                        'last_name' => optional($session)['last_name'],
                        'phone' => optional($session)['phone'],
                        'address' => optional($session)['address'],
                        'country' => optional($session)['country'],
                        'city' => optional($session)['city'],
                        'zip' => optional($session)['zip_code'],
                        'state' => optional($session)['state'],
                    ]);

                    $orderData = [
                        'user_id' => $user->id,
                    ];
                } else {
                    $orderData = [
                        'user_id' => null,
                        'type' => 'guest',
                        'first_name' => optional($session)['first_name'],
                        'last_name' => optional($session)['last_name'],
                        'phone' => optional($session)['phone'],
                        'address' => optional($session)['address'],
                        'country' => optional($session)['country'],
                        'city' => optional($session)['city'],
                        'zip_code' => optional($session)['zip_code'],
                        'state' => optional($session)['state'],
                    ];
                }


                $orderData = array_merge($orderData, [
                    'method' => 'stripe',
                    'total_quantity' => $totalItem,
                    'total_paid_amount' => $totalAmount,
                    'payment_status' => $status,
                ]);

                $order = Order::create($orderData);






                // Assuming you already have the $order variable set after creating the order
                if (\Illuminate\Support\Facades\Session::has('cart')) {
                    foreach (\Illuminate\Support\Facades\Session::get('cart') as $cartItem) {

                        OrderDetail::create([
                            'order_id' => $order->id,
                            'product_id' => $cartItem['product_id'],
                            'name' => $cartItem['name'],
                            'quantity' => $cartItem['quantity'],
                            'amount' => $cartItem['price'], // Or calculate total price here
                        ]);

                    }
                }

                DB::commit();

                \Illuminate\Support\Facades\Session::flush();

                return redirect()->route('thankyou')->with('Order Successfully Placed');
            } catch (\Exception $e) {
                DB::rollBack();
                // Handle the error, e.g., log it or return an error response
                return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
            }


        }
    }


    public function checkoutCancel()
    {
        \Illuminate\Support\Facades\Session::flush();
        return redirect()->route('merch.front')->with('error', 'Payment Failed Could Not Placed Order');
    }

    public function thankyou()
    {
        return view('front.thankyou');
    }
}
