<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class MusicStoreController extends Controller
{
    public function index()
    {
        $categoryId = ProductCategory::where('name', 'CD')->first()->id; // Get the ID of the category

        $products = Product::with('category')
            ->where('category_id', $categoryId)
            ->get();

        return view('front.mucis-store',compact('products'));
    }
}
