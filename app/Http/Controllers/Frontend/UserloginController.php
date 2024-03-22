<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserloginController extends Controller
{
    //user login page
    public function userlogin()
    {
        return view('frontend.userlogin');    
    }
}
