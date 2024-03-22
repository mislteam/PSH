<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // frontend index home page
    public function index()
    {
        return view('frontend.index');
    }

    // frontend about page
    public function about()
    {
        return view('frontend.about');
    }

    // frontend products page
    public function products()
    {
        return view('frontend.products');
    }

    // frontend projects page
    public function projects()
    {
        return view('frontend.project');
    }

    // frontend blog page
    public function blog()
    {
        return view('frontend.blog');
    }

    // frontend contact page
    public function contact()
    {
        return view('frontend.contact');
    }
}
