<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    //index header
    public function headerindex()
    {
        $header = Header::paginate(10);
        return view('backend.allpage.header.index', compact('header'));
    }

    //edit header
    public function headeredit($id)
    {
        $header = Header::find($id);
        return view('backend.allpage.header.edit', compact('header'));
    }

    //header update method
    public function headerupdate(Request $request, $id)
    {
        $header = [
            'phone' => $request->phone,
            'email' => $request->email,
            'open_hour' => $request->open_hour,
            'ig_link' => $request->ig_link,
            'twitter_link' => $request->twitter_link,
            'fb_link' => $request->fb_link,
        ];

        Header::where('id', $id)->update($header);
        return redirect()->route('header.index')->with('message', 'Header Updated Successfully');
    }
}
