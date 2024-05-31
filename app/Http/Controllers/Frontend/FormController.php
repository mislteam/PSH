<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Form;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    //user service form
    public function serviceView()
    {
        $footer = Footer::get();
        $header = Header::get();
        return  view('frontend.detail.serviceform.serviceform',compact('footer','header'));
    }

    // service store
    public function servicestore(Request $request)
    {
        $services = Form::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'series_number' => $request->series_number,
            'product_type' => $request->product_type,
            'communication' => $request->input('communication'),
            'friendliness' => $request->input('friendliness'),
            'customer_request' => $request->input('customer_request'),
            'performance' => $request->input('performance'),
            'meticulous_inspection' => $request->input('meticulous_inspection'),
            'delivery_time' => $request->input('delivery_time'),
            'service_time' => $request->input('service_time'),
            'product_structure' => $request->input('product_structure'),
            'spare_part_charges' => $request->input('spare_part_sharges'),
            'product_structure' => $request->input('product_structure'),
            'confidence_after_service' => $request->input('confidence_after_service'),
            'accuracy_weight' => $request->input('accuracy_weight'),
            'easy_to_use' => $request->input('easy_to_use'),
            'technical_quality' => $request->input('technical_quality'),
            'overall_rating_services' => $request->input('overall_rating_services'),
            'complaint' => $request->input('complaint'),
            'suggesstions' => $request->input('message'),
        ]);

        // Flash a success message to the session
        Session::flash('success', 'Send successfully');

        return Redirect::back();
    }
}
