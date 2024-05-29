<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        $title = "Fashion Website";
        return view('home', compact('title'));
    }

    public function shop(){
        $title = "Shop Page";
        return view('shop', compact('title'));
    }

    public function blog(){
        $title = "Blog Page";
        return view('blog', compact('title'));
    }

    public function about(){
        $title = "About Page";
        return view('about', compact('title'));
    }
}