<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('main.main');
    }
    public function showCarousel()
    {
        return view('carousel');
    }
}
