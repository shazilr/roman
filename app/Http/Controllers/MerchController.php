<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('front.merch',compact('products'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('front.product-detail',compact('product'));
    }
}
