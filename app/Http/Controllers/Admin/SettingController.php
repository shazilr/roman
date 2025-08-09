<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $index = Pages::where('slug', 'setting')->first();
        if ($index) {
            $data = $index->content;
            return view('admin.pages.setting', compact('data'));
        }
        return view('admin.pages.setting');

    }

    public function indexForm(Request $request)
    {
        $page = Pages::where('slug', 'setting')->first();

        $existingImages = $page->content ?? '';

        // Process bImage1
        if ($request->hasFile('fav_icon')) {
            // Delete old image if exists
            if (isset($existingImages['fav_icon']) && file_exists(public_path('admin/images/' . $existingImages['fav_icon']))) {
                unlink(public_path('admin/images/' . $existingImages['fav_icon']));
            }

            $image0 = $request->file('fav_icon');
            $imageName0 = time() . '_fav_icon.' . $image0->getClientOriginalExtension();
            $image0->move(public_path('admin/images'), $imageName0);
            $fav_icon = $imageName0;
        }

        // Process image1
        if ($request->hasFile('logo')) {
            // Delete old image if exists
            if (isset($existingImages['logo']) && file_exists(public_path('admin/images/' . $existingImages['logo']))) {
                unlink(public_path('admin/images/' . $existingImages['logo']));
            }
            $image1 = $request->file('logo');
            $imageName1 = time() . '_logo.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('admin/images'), $imageName1);
            $logo = $imageName1;
        }

        if ($request->hasFile('footer_logo')) {
            // Delete old image if exists
            if (isset($existingImages['footer_logo']) && file_exists(public_path('admin/images/' . $existingImages['footer_logo']))) {
                unlink(public_path('admin/images/' . $existingImages['footer_logo']));
            }
            $image2 = $request->file('footer_logo');
            $imageName2 = time() . '_footer_logo.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('admin/images'), $imageName2);
            $footerLogo = $imageName2;
        }


        // Prepare data for the 'content' field
        $content = [

            'fav_icon' => $fav_icon ?? $existingImages['fav_icon'] ?? null,
            'logo' => $logo ?? $existingImages['logo'] ?? null,
            'footer_logo' => $footerLogo ?? $existingImages['footer_logo'] ?? null,

            'name' => $request->input('name'),
            'copy_right' => $request->input('copy_right'),

        ];

        // Update or create the page
        Pages::updateOrCreate(
            ['slug' => 'setting'],
            [
                'name' => 'Setting',
                'content' => $content,
            ]
        );

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }

    public function banners()
    {
        $index = Pages::where('slug', 'banner')->first();
        if ($index) {
            $data = $index->content;
            return view('admin.pages.banner', compact('data'));
        }
        return view('admin.pages.banner');
    }

    public function bannersForm(Request $request)
    {

        $page = Pages::where('slug', 'banner')->first();

        $existingImages = $page->content ?? '';

        // Process bImage1
        if ($request->hasFile('commentry_banner_image')) {
            // Delete old image if exists
            if (isset($existingImages['commentry_banner_image']) && file_exists(public_path('admin/images/' . $existingImages['commentry_banner_image']))) {
                unlink(public_path('admin/images/' . $existingImages['commentry_banner_image']));
            }

            $image0 = $request->file('commentry_banner_image');
            $imageName0 = time() . '_commentry_banner_image.' . $image0->getClientOriginalExtension();
            $image0->move(public_path('admin/images'), $imageName0);
            $commentry_banner_image = $imageName0;
        }

        // Process image1
        if ($request->hasFile('investment_banner_image')) {
            // Delete old image if exists
            if (isset($existingImages['investment_banner_image']) && file_exists(public_path('admin/images/' . $existingImages['investment_banner_image']))) {
                unlink(public_path('admin/images/' . $existingImages['investment_banner_image']));
            }
            $image1 = $request->file('investment_banner_image');
            $imageName1 = time() . '_investment_banner_image.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('admin/images'), $imageName1);
            $investment_banner_image = $imageName1;
        }

        if ($request->hasFile('general_banner_image')) {
            // Delete old image if exists
            if (isset($existingImages['general_banner_image']) && file_exists(public_path('admin/images/' . $existingImages['general_banner_image']))) {
                unlink(public_path('admin/images/' . $existingImages['general_banner_image']));
            }
            $image2 = $request->file('general_banner_image');
            $imageName2 = time() . '_general_banner_image.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('admin/images'), $imageName2);
            $general_banner_image = $imageName2;
        }
        // Prepare data for the 'content' field
        $content = [
            'commentry_banner_image' => $commentry_banner_image ?? $existingImages['commentry_banner_image'] ?? null,
            'investment_banner_image' => $investment_banner_image ?? $existingImages['investment_banner_image'] ?? null,
            'general_banner_image' => $general_banner_image ?? $existingImages['general_banner_image'] ?? null,

            'commentry_banner_name' => $request->input('commentry_banner_name'),
            'investment_banner_name' => $request->input('investment_banner_name'),
            'general_banner_name' => $request->input('general_banner_name'),
            'general_description' => $request->input('general_description'),

        ];

        // Update or create the page
        Pages::updateOrCreate(
            ['slug' => 'banner'],
            [
                'name' => 'Banner',
                'content' => $content,
            ]
        );

        return redirect()->back()->with('success', 'Banners updated successfully!');
    }

}
