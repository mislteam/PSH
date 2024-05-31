<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ContactFormController extends Controller
{
    public function contactformview()
    {
        return  view('frontend.contact');
    }

    // service store
    public function contactformstore(Request $request)
    {
        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Flash a success message to the session
        Session::flash('success', 'Send successfully');

        return Redirect::back();
    }
}
