<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index');
    }

    public function detail()
    {
        return view('admin.customer.detail');
    }
}
