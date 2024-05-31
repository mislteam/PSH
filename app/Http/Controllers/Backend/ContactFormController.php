<?php

namespace App\Http\Controllers\Backend;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class ContactFormController extends ResponseController
{
    //index 
    public function contactformindex()
    {
        $contactform = ContactForm::paginate(10);
        return view('backend.feedback.contactform.index',compact('contactform'));
    }

     //view page
     public function contactformview($id)
     {
         $contactform = ContactForm::find($id);
         return view('backend.feedback.contactform.show', compact('contactform'));
     }
 
     //   form delete method
     public function contactformdelete(Request $request)
     {
         $contactform = ContactForm::find($request->id);
         if ($contactform) {
             $contactform->delete();
             return $this->successMessage('message', 'Contact Form Deleted Successfully');
         } else {
             return $this->errorMessage();
         }
     }
}
