<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{
    // user testimonial form
    public function testimonialView()
    {
        $footer = Footer::get();
        $header = Header::get();
        return  view('frontend.detail.clienttestimonial.testimonial',compact('footer','header'));
    }

    // service store
    public function testimonialstore(Request $request)
    {
        $testimonial = Testimonial::create([
            'fullname' => $request->name,
            'companyname' => $request->company,
            'review' => $request->review,       
        ]);

        // Flash a success message to the session
        Session::flash('success', 'Send successfully');

        return Redirect::back();
}

}
