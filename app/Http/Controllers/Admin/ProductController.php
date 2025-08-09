<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category = null)
    {
        $categories = ProductCategory::get();  // Fetch categories once

        if ($category != null) {
            $products = Product::where('category_id', $category)->paginate(10);
        } else {
            $products = Product::with('category')->paginate(10);
        }

        return view('admin.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = ProductCategory::get();
        return view('admin.product.add', compact('categories'));
    }

    public function store(Request $request)
    {

        // Create the product
        $product = new Product();
        $product->sku = $request->input('sku');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->old_price = $request->input('old_price');
        $product->coupon = $request->input('coupon');
        $product->status = $request->input('status');
        $product->schedule_date = $request->input('schedule_date');
        $product->schedule_time = $request->input('schedule_time');
        $product->tags = $request->input('tags');
        $product->category_id = $request->input('category_id');
        $product->stock = $request->input('stock');
        $product->url = $request->input('url');
        $product->description = $request->input('description');

        // Handle image upload if necessary
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('data/product_images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        $colors = array_filter($request->input('color', []));
        $quantities = array_filter($request->input('quantity', []));
        $sizes = array_filter($request->input('sizes', []));


        if (count($colors) > 0 && count($quantities) > 0) {

            foreach ($colors as $key => $color) {
                $quantity = $quantities[$key] ?? null;



                    ProductVariant::updateOrCreate(
                        [
                            'product_id' => $product->id,
                            'color' => $color,
                            'size' => null,
                        ],
                        [
                            'quantity' => $quantity,
                        ]
                    );

            }
        }
        if (count($sizes) > 0) {
            foreach ($sizes as $size) {
                ProductVariant::updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'color' => null,
                        'size' => $size,
                    ],
                    [
                        'quantity' => null,
                    ]
                );
            }
        }


        return redirect()->back()->with('success', 'Product created successfully!');
    }

    public function edit($id)
    {
        $product = Product::with('category','variant')->findOrFail($id);
        $categories = ProductCategory::get();
        return view('admin.product.edit',compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Update basic product information
        $product->update([
            'sku' => $request->input('sku'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'old_price' => $request->input('old_price'),
            'coupon' => $request->input('coupon'),
            'status' => $request->input('status'),
            'schedule_date' => $request->input('schedule_date'),
            'schedule_time' => $request->input('schedule_time'),
            'tags' => $request->input('tags'),
            'category_id' => $request->input('category_id'),
            'stock' => $request->input('stock'),
            'url' => $request->input('url'),
            'description' => $request->input('description'),
        ]);

        // Handle image upload if necessary
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('data/product_images'), $imageName);
            $product->update(['image' => $imageName]);
        }

        // Handle product variants (color, size, and quantity)
        $colors = array_filter($request->input('color', []));   // Filter out empty values
        $quantities = array_filter($request->input('quantity', []));
        $sizes = array_filter($request->input('sizes', []));

        // Delete old variants before inserting new ones
        $product->variant()->delete();  // Assuming there is a 'variants' relationship in the Product model

        $colors = array_filter($request->input('color', []));
        $quantities = array_filter($request->input('quantity', []));
        $sizes = array_filter($request->input('sizes', []));


        if (count($colors) > 0 && count($quantities) > 0) {

            foreach ($colors as $key => $color) {
                $quantity = $quantities[$key] ?? null;



                ProductVariant::updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'color' => $color,
                        'size' => null,
                    ],
                    [
                        'quantity' => $quantity,
                    ]
                );

            }
        }
        if (count($sizes) > 0) {
            foreach ($sizes as $size) {
                ProductVariant::updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'color' => null,
                        'size' => $size,
                    ],
                    [
                        'quantity' => null,
                    ]
                );
            }
        }


        // Redirect with success message
        return redirect()->back()->with('success', 'Product Updated successfully!');
    }

    public function updateStatus(Request $request,$id)
    {
        $product = Product::find($id);
        $product->status = $request->input('status');
        $product->update();

    }

    public function delete($id)
    {

        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }

}
