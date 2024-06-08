<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserloginController extends Controller
{
    //user login page
    public function userlogin()
    {
        $footer = Footer::all();
        $header = Header::all();
        return view('frontend.userlogin', compact('footer', 'header'));
    }

    // memberform
    public function memberform($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $producttype = ProductType::all();
        $user = User::find($id);
        return view('frontend.memberform', compact('footer', 'header', 'user', 'producttype'));
    }

    // update member info
    public function updatememberinfo(Request $request, $id)
    {
        $userinfo = [
            'name' => $request->name,
            'phone' => $request->phone,
            'product_type_id' => $request->product_type,
            // 'township'=>$request->township,
            // 'region'=>$request->region
        ];

        $user = User::where('id', $id)->update($userinfo);
        return redirect()->route('otp');
    }

    //otp blade
    public function otp()
    {
        $footer = Footer::all();
        $header = Header::all();
        return view('frontend.otp', compact('footer', 'header'));
    }

    //otpverifity
    public function otpverify()
    {
        return redirect()->route('home');
    }
}
