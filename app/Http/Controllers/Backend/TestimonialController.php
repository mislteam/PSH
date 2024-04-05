<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //backend testimonial index
    public function  index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('backend.testimonial.index',compact('testimonials'));  
    }

    // backend testimonial update
    public function update(Request $request,$id)
    {
        $testimonial = [
            'status' => $request->status
        ];

        Testimonial::where('id', $id)->update($testimonial);
    }
}
