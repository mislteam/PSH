<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Homeabout;
use App\Models\HomeaboutCounter;
use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //home page
    public function index()
    {
        $homepage = LandingPage::paginate(2);
        $homeabout = Homeabout::paginate(2);
        $aboutcounter = HomeaboutCounter::paginate(2);
        return view('backend.allpage.home.index', compact('homepage','homeabout','aboutcounter'));
    }

    //home create page
    public function create()
    {
        return view('backend.allpage.home.create');
    }

    //home store method
    public function store(Request $request)
    {
        $imagefileName = uniqid() . $request->file('bg_image')->getClientOriginalName();
        $request->file('bg_image')->storeAs('public/home-bg-image/', $imagefileName);
        $data['bg_image'] = $imagefileName;

        LandingPage::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'bg_image' => $imagefileName,
            'btn_text' => $request->btn_text,
            'link' => $request->link,
        ]);
        return redirect()->route('home.index')->with('message', 'Home Page Created successfully');
    }

    //home edit page
    public function edit($id)
    {
        $home = LandingPage::find($id);
        return view('backend.allpage.home.edit', compact('home'));
    }

    //home update method
    public function update(Request $request, $id)
    {
        $home = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'btn_text' => $request->btn_text,
            'link' => $request->link,
        ];
        if ($request->hasFile('bg_image')) {
            $imagefileName = uniqid() . $request->file('bg_image')->getClientOriginalName();
            $request->file('bg_image')->storeAs('public/home-bg-image/', $imagefileName);
            $home['bg_image'] = $imagefileName;
        }

        LandingPage::where('id', $id)->update($home);

        return redirect()->route('home.index')->with('message', 'Home Page Updated successfully');
    }

    //homepage about edit page
    public function homeaboutedit($id)
    {
        $homeabout = Homeabout::find($id);
        return view('backend.allpage.home.aboutedit', compact('homeabout'));
    }

    //home update method
    public function homeaboutupdate(Request $request, $id)
    {
        $homeabout = [
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ];
        // if ($request->hasFile('about_img')) {
            $imagefileName = uniqid() . $request->file('about_img')->getClientOriginalName();
            $request->file('about_img')->storeAs('public/home-about-image/', $imagefileName);
            $home['about_img'] = $imagefileName;
        // }

        Homeabout::where('id', $id)->update($home);

        return redirect()->route('home.index')->with('message', 'Home About Page Updated successfully');
    }

     //homepage about counter edit page
     public function aboutcounteredit($id)
     {
         $aboutcounter = HomeaboutCounter::find($id);
         return view('backend.allpage.home.aboutcounter', compact('aboutcounter'));
     }

     //home about counter update method
    public function aboutcounterupdate(Request $request, $id)
    {
        $homeaboutcounter = [
            'title' => $request->title,
            'value' => $request->value,
        ];
        HomeaboutCounter::where('id', $id)->update($homeaboutcounter);

        return redirect()->route('home.index')->with('message', 'Home About Counter Page Updated successfully');
    }
 

}
