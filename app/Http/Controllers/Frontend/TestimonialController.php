<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{
    // user testimonial form
    public function testimonialView()
    {
        return  view('frontend.detail.clienttestimonial.testimonial');
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
