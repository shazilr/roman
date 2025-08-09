<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheBandController extends Controller
{
    public function index()
    {

        return view('front.the-band');
    }
}
