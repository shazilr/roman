<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index');
    }

    public function detail()
    {
        return view('admin.order.detail');
    }

    public function invoice()
    {
        return view('admin.order.invoice');
    }
}
