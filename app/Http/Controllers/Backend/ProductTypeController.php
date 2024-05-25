<?php

namespace App\Http\Controllers\Backend;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class ProductTypeController extends ResponseController
{
    //index page
    public function index()
    {
        $product_type = ProductType::paginate(10);
        return view('backend.producttype.index', compact('product_type'));
    }

    //create page
    public function create()
    {
        return view('backend.producttype.create');
    }

    // product type store method
    public function store(Request $request)
    {
        ProductType::create([
            'name' => $request->name,
        ]);

        return redirect()->route('producttype.index')->with('message', 'Product Type created successfully');
    }

    // product type edit page
    public function edit($id)
    {
        $productType = ProductType::find($id);
        return view('backend.producttype.edit', compact('productType'));
    }

    // product type update method
    public function update(Request $request, $id)
    {
        $productType = [
            'id' => $id,
            'name' => $request->name,
        ];

        ProductType::where('id', $id)->update($productType);
        return redirect()->route('producttype.index')->with('message', 'Product Type updated successfully');
    }

    // projectcategory delete method
    public function delete(Request $request)
    {
        $productType = ProductType::find($request->id);

        if ($productType) {
            $productType->delete();
            return $this->successMessage('message', 'Product Type Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
