<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Banner;
use App\Models\ServiceSaving;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('test.index');
    }
}
