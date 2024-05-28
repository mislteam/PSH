<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Special;
use App\Models\SpecialCard;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    //index page
    public function index()
    {
        $specials = Special::paginate(5);
        $specialcards = SpecialCard::paginate(5);
        return view('backend.allpage.specialization.index', compact('specials','specialcards'));
    }

    //edit page
    public function edit($id)
    {
        $special = Special::find($id);
        return view('backend.allpage.specialization.edit', compact('special'));
    }

    //update method
    public function update(Request $request, $id)
    {
        $special = [
            'title' => $request->title,
            'description' => $request->description
        ];

        Special::where('id', $id)->update($special);
        return redirect()->route('special.index')->with('message', 'Special Page Updated successfully');
    }

    //edit card page
    public function cardEdit($id)
    {
        $specialcard = SpecialCard::find($id);
        return view('backend.allpage.specialization.specialcardedit', compact('specialcard'));
    }

    //home update method
    public function cardUpdate(Request $request, $id)
    {
        $card = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        if ($request->hasFile('card_img')) {
            $imagefileName = uniqid() . $request->file('card_img')->getClientOriginalName();
            $request->file('card_img')->storeAs('public/card_img/', $imagefileName);
            $card['card_img'] = $imagefileName;
        }

        SpecialCard::where('id', $id)->update($card);

        return redirect()->route('special.index')->with('message', 'Special Card Updated successfully');
    }
}
