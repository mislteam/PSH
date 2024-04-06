<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;

class TestimonialController extends  ResponseController
{
    //backend testimonial index
    public function  index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('backend.testimonial.index', compact('testimonials'));
    }

    // backend testimonial update
    public function update(Request $request, $id)
    {
        $testimonial = [
            'status' => $request->status
        ];

        Testimonial::where('id', $id)->update($testimonial);
    }

    public function testimonial_change_state(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);
        if ($testimonial) {
            if ($testimonial->status == 0) {
                $testimonial->status = 1;
                $testimonial->save();
                return $this->successMessage($testimonial, 'Testimonial Active Successfully');
            } else {
                $testimonial->status = 0;
                $testimonial->save();
                return $this->successMessage($testimonial, 'Testimonial Disable Successfully');
            }
        } else {
            return $this->errorMessage();
        }
    }
}
