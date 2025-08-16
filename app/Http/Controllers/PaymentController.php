<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    /**
     * Show payment page
     */
    public function index()
    {
        return view('front.payment');
    }

    /**
     * Handle payment form submission and redirect to Stripe Checkout
     */
    public function paymentForm(Request $request)
    {
        $request->validate([
            'full_name'       => 'required|string|max:255',
            'email'            => 'required|email|unique:users,email',
            'phone'            => 'required|string|max:11',
            'password'         => 'required|confirmed|min:6',
            'address'          => 'nullable|string|max:500',
            'create_account'   => 'nullable',
        ]);

        Session::put($request->all());

//        $lineItems = [];
//        $totalAmount = 0;
//
//        if (Session::has('cart')) {
//            foreach (Session::get('cart') as $cart) {
//                $totalAmount += $cart['price'] * $cart['quantity'];
//                $lineItems[] = [
//                    'price_data' => [
//                        'currency' => 'usd',
//                        'product_data' => [
//                            'name' => $cart['name'],
//                        ],
//                        'unit_amount' => $cart['price'] * 100, // cents
//                    ],
//                    'quantity' => $cart['quantity'],
//                ];
//            }
//        }

        $session = Session::all();
        DB::beginTransaction();

        try {
            $totalItem = 0;
            $totalAmount = 0;

            if (isset($session['cart'])) {
                foreach ($session['cart'] as $cart) {
                    $totalItem += $cart['quantity'];
                    $totalAmount += $cart['price'] * $cart['quantity'];
                }
            }

            // Create user if requested
            if (!empty($session['create_account']) && $session['create_account'] === 'on') {

                $user = User::create([
                    'name'     => $session['full_name'] ,
                    'email'    => $session['email'],
                    'password' => Hash::make($session['password']),
                ]);

               $userDetail = UserDetail::create([
                    'user_id'  => $user->id,
                    'phone'      => $session['phone'],
                    'address'    => $session['address'],
                ]);

                $orderData = [
                    'user_id' => $user->id,
                ];

            } else {
                $orderData = [
                    'user_id'    => null,
                    'type'       => 'guest',
                    'first_name' => $session['full_name'],
                    'phone'      => $session['phone'],
                    'address'    => $session['address'],
                ];
            }

            $referenceId = mt_rand(100000, 999999);
            // Create order
            $orderData = array_merge($orderData, [
                'method'            => 'cod',
                'total_quantity'    => $totalItem,
                'total_paid_amount' => $totalAmount,
                'payment_status'    => 'cod',
                'reference_id' => $referenceId,
            ]);

            $order = Order::create($orderData);
            if (Session::has('cart')) {
                foreach (Session::get('cart') as $cartItem) {
                  OrderDetail::create([
                        'order_id'   => $order->id,
                        'product_id' => $cartItem['product_id'],
                        'name'       => $cartItem['name'],
                        'quantity'   => $cartItem['quantity'],
                        'amount'     => $cartItem['price'],
                    ]);

                }
            }

            DB::commit();
            Session::flush();




//        .
//            $adminNumber = '923492917821';
//            $message = urlencode(
//                "🛒 My Order\n\n" .
//                "Name: {$request->full_name}\n" .
//                "total quantity:\n{$orderData['total_quantity']}\n" .
//                "Total: PKR {$orderData['total_paid_amount']}".
//                "Payment Method {$orderData['payment_status']}"
//            );


            // Prepare WhatsApp link for admin


            $adminNumber = '923492917821';
            $message = urlencode(
                "🛒 My Order\n\n" .
                "Reference ID: {$referenceId}\n" .
                "Name: {$request->full_name}\n" .
                "total quantity:{$orderData['total_quantity']}\n" .
                "Total: PKR {$orderData['total_paid_amount']}\n" .
                "Payment Method {$orderData['payment_status']}"
            );
            $whatsappUrl = "https://wa.me/{$adminNumber}?text={$message}";
return redirect($whatsappUrl);
//            return redirect()->route('thankyou')
//                ->with('success', 'Order Successfully Placed');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }


    /**
     * Thank you page
     */
    public function thankyou()
    {
        return view('front.thankyou');
    }
}
