<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserloginController extends Controller
{
    //user login page
    public function userlogin()
    {
        $footer = Footer::all();
        $header = Header::all();
        return view('frontend.userlogin',compact('footer','header'));    
    }
}
