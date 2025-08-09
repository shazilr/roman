<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::has('cart');
        if (!$cart) {
            return view('front.cart');
        }
        return view('front.cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []); // Get cart from session or an empty array

        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $name = $request->name;
        $price = $request->price;

        // Check if the product is already in the cart
        if (isset($cart[$product_id])) {
            // Update quantity if product exists
            $cart[$product_id]['quantity'] += $quantity;
        } else {
            // Add new product to the cart
            $cart[$product_id] = [
                'product_id' => $product_id,
                'quantity' => $quantity,
                'name' => $name,
                'price' => $price,
            ];
        }

        // Store updated cart in session
        session()->put('cart', $cart);


        return response()->json(['message' => 'Product added to cart successfully!']);
    }

    public function updateCart(Request $request)
    {
        $cart = session()->get('cart');
        $product_id = $request->product_id;
        $quantity = $request->quantity;

        // Update the quantity of the product in the cart
        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }


        return response()->json(['updatedQuantity' => $cart[$request->product_id]['quantity']]);
    }

    public function deleteCart(Request $request)
    {
        // Get the cart from the session
        $cart = session()->get('cart');
        $product_id = $request->product_id;

        // Check if the product exists in the cart
        if (isset($cart[$product_id])) {
            unset($cart[$product_id]); // Remove the product from the cart
            session()->put('cart', $cart); // Update the session with the modified cart
        }

        // If the cart is empty after deletion, clear the session
        if (empty($cart)) {
            session()->forget('cart');
        }

        // Return a response
        return response()->json([
            'message' => 'Product removed from cart successfully',

            'isCartEmpty' => empty($cart) // Pass whether the cart is empty
        ]);
    }

}
