<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FanClubController extends Controller
{
    public function index()
    {

        return view('front.fan-club');
    }
}
