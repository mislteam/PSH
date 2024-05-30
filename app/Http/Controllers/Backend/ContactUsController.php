<?php

namespace App\Http\Controllers\Backend;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurBranch;

class ContactUsController extends Controller
{
    //Contact Us index page
    public function contactindex()
    {
        $contact = ContactUs::paginate(10);
        return view('backend.allpage.contact.index', compact('contact'));
    }

    //contact edit 
    public function contactedit($id)
    {
        $contact = ContactUs::find($id);
        return view('backend.allpage.contact.edit', compact('contact'));
    }

    //contact update method
    public function contactupdate(Request $request, $id)
    {
        $conatact = [
            'email' => $request->email,
            'phone' => $request->phone,
            'hours' => $request->hours,
            'address' => $request->address
        ];

        ContactUs::where('id', $id)->update($conatact);
        return redirect()->route('contact.index')->with('message', 'Conatact Updated Successfully');
    }

    //ourbranch index page
    public function ourbranchindex()
    {
        $ourbranch = OurBranch::paginate(10);
        return view('backend.allpage.ourbranch.index', compact('ourbranch'));
    }

    //ourbranch edit 
    public function ourbranchedit($id)
    {
        $ourbranch = OurBranch::find($id);
        return view('backend.allpage.ourbranch.edit', compact('ourbranch'));
    }

    //ourbranch update method
    public function ourbranchupdate(Request $request, $id)
    {
        $ourbranch = [
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email
        ];

        OurBranch::where('id', $id)->update($ourbranch);
        return redirect()->route('ourbranch.index')->with('message', 'Our Branch Updated Successfully');
    }
}
