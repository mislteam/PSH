<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //index footer
    public function footerindex()
    {
        $footer= Footer::paginate(10);
        return view('backend.allpage.footer.index',compact('footer'));
    }

    //edit footer
    public function footeredit($id)
    {
        $footer= Footer::find($id);
        return view('backend.allpage.footer.edit',compact('footer'));
    }

     //footer update method
     public function footerupdate(Request $request, $id)
     {
         $footer = [
             'about_des' => $request->about_des,
             'phone' => $request->phone,
             'address' => $request->address,
             'email' => $request->email,
             'ig_link' => $request->ig_link,
             'twitter_link' => $request->twitter_link,
             'facebook_link' => $request->facebook_link,
         ];
 
         Footer::where('id', $id)->update($footer);
         return redirect()->route('footer.index')->with('message', 'Footer Updated Successfully');
     }
}
