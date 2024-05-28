<?php

namespace App\Http\Controllers\Backend;

use App\Models\OurCustomer;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class OurCustomerController extends ResponseController
{
    //our customer index page
    public function index()
    {
        $ourcustomers = OurCustomer::paginate(10);
        return view('backend.allpage.ourcustomer.index', compact('ourcustomers'));
    }

    //our customer create page
    public function create()
    {
        return view('backend.allpage.ourcustomer.create');
    }

    //our customer store method
    public function store(Request $request)
    {
        $imagefileName = uniqid() . $request->file('customer_img')->getClientOriginalName();
        $request->file('customer_img')->storeAs('public/customer_img/', $imagefileName);
        $data['customer_img'] = $imagefileName;

        OurCustomer::create([
            'title' => $request->title,
            'link' => $request->link,
            'customer_img' => $imagefileName,
        ]);
        return redirect()->route('ourcustomer.index')->with('message', 'Our Customer Created successfully');
    }

    //our customer edit page
    public function edit($id)
    {
        $ourcustomer = OurCustomer::find($id);
        return view('backend.allpage.ourcustomer.edit', compact('ourcustomer'));
    }

    //Our customer update method
    public function update(Request $request, $id)
    {
        $ourcustomer = [
            'title' => $request->title,
            'link' => $request->link,
        ];
        if ($request->hasFile('customer_img')) {
            $imagefileName = uniqid() . $request->file('customer_img')->getClientOriginalName();
            $request->file('customer_img')->storeAs('public/customer_img/', $imagefileName);
            $ourcustomer['customer_img'] = $imagefileName;
        }

        OurCustomer::where('id', $id)->update($ourcustomer);

        return redirect()->route('ourcustomer.index')->with('message', 'Our Customer Updated successfully');
    }

    //   our customer delete method
    public function delete(Request $request)
    {
        $ourcustomer = OurCustomer::find($request->id);
        if ($ourcustomer) {
            $ourcustomer->delete();
            return $this->successMessage('message', 'Our Customer Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
