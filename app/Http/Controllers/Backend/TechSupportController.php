<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\TechSupport;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;

class TechSupportController extends ResponseController
{
    //Tech support index page
    public function index()
    {
        $techsupp = TechSupport::paginate(10);
        return view('backend.techsupport.techsupport', compact('techsupp'));
    }

    //Tech support create page
    public function create()
    {
        $product = Product::all();
        $techsupp = TechSupport::select('id', 'name')->get();
        return view('backend.techsupport.techsupport-create', compact('techsupp', 'product'));
    }

    // Tech support store method
    public function store(Request $request)
    {
        $techsupp = TechSupport::create([
            'name' => $request->techsupp_name,
            'product_id' => $request->product_id,
            'description' => $request->techsupp_des
        ]);
        return redirect()->route('techsupport.index')->with('message', 'Technical Support created successfully');
    }

    // Tech support edit page
    public function edit($id)
    {
        $product = Product::select('id', 'name')->get();
        $techsupp = TechSupport::find($id);
        // dd($product);
        return view('backend.techsupport.techsupport-edit', compact('product', 'techsupp'));
    }

    // Tech support update method
    public function update(Request $request, $id)
    {
        $techsupp = [
            'id' => $id,
            'name' => $request->techsupp_name,
            'product_id' => $request->product_id,
            'description' => $request->techsupp_des,
        ];

        TechSupport::where('id', $id)->update($techsupp);
        return redirect()->route('techsupport.index')->with('message', 'Technical Support updated successfully');
    }

    //   Tech support delete method
    public function delete(Request $request)
    {
        $techsupp = TechSupport::find($request->id);

        if ($techsupp) {
            $techsupp->delete();
            return $this->successMessage('message', 'Technical Support Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
