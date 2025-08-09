<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){

        return view('front.index');
    }
}
