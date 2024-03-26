<?php

namespace App\Http\Controllers\Backend;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class FeedbackController extends ResponseController
{
    //index page
    public function index()
    {
        $services = Form::paginate(10);
        return view('backend.feedback.index', compact('services'));
    }

    //view page
    public function view($id)
    {
        $service = Form::find($id);
        return view('backend.feedback.show', compact('service'));
    }

    //   form delete method
    public function delete(Request $request)
    {
        $service = Form::find($request->id);
        if ($service) {
            $service->delete();
            return $this->successMessage('message', 'Service Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
