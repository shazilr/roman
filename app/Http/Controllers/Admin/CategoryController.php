<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Commentry;
use App\Models\MenuItem;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::get();
        return view('admin.category.index', compact('categories'));
    }

    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $category = ProductCategory::find($id);
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('data/category_images'), $imageName);
            $category->image = $imageName;
        }
        if ($request->input('status') == 'scheduled') {
            $category->schedule_date = $request->input('schedule_date');
            $category->schedule_time = $request->input('schedule_time');
        }else{
            $category->schedule_date = null;
            $category->schedule_time = null;
        }
        $category->update();
        return redirect()->back()->with('success', 'Category Updated Successfully');
    }


    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new ProductCategory();
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('data/category_images'), $imageName);
            $category->image = $imageName;
        }
        if ($request->input('status') == 'scheduled') {
            $category->schedule_date = $request->input('schedule_date');
            $category->schedule_time = $request->input('schedule_time');
        }else{
            $category->schedule_date = null;
            $category->schedule_time = null;
        }
        $category->save();
        return redirect()->route('admin.create.category')->with('success', 'Category Created Successfully');
    }

    public function destroy($id)
    {

        $category = ProductCategory::find($id);
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category Deleted Successfully');
    }
}
