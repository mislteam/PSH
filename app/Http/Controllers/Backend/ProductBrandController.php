<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ResponseController;

class ProductBrandController extends ResponseController
{
    // product brand page
    public function index()
    {
        $product_brand = ProductBrand::paginate(10);
        return view('backend.productbrand.productbrand', compact('product_brand'));
    }

    // product brand create page
    public function create()
    {
        $brand = ProductBrand::select('id', 'name')->get();
        $cat = ProductCategory::all();
        $subcat = ProductSubCategory::all();
        return view('backend.productbrand.productbrand-create', compact('brand','cat','subcat'));
    }

    // product brand store method
    public function store(Request $request)
    {
        $fileName = uniqid() . $request->file('brand_image')->getClientOriginalName();
        $request->file('brand_image')->storeAs('public/brand_image/',$fileName);
        $data['brand_image'] = $fileName;

        $brand = ProductBrand::create([
            'name' => $request->brand_name,
            'product_category_id' => intval($request->cat_id),
            'product_sub_category_id' => intval($request->subcat_id),
            'description' => $request->brand_description,
            'brand_image' => $fileName
        ]);
        return redirect()->route('productbrand.index')->with('message', 'Product Brand created successfully');
    }

    // product brand edit page
     public function edit($id)
     {
         $brand = ProductBrand::find($id);
         $cat = ProductCategory::select('id', 'name')->get();
         $subcat = ProductSubCategory::select('id', 'name')->get();
         return view('backend.productbrand.productbrand-edit', compact('brand','subcat', 'cat'));
     }

      // product brand update method
    public function update(Request $request, $id)
    {
        $brand = [
            'id' => $id,
            'name' => $request->brand_name,
            'product_category_id' => $request->cat_id,
            'product_sub_category_id' => $request->subcat_id,
            'description' => $request->brand_description,
        ];

        if ($request->hasFile('brand_image')) {
            $oldImageName = ProductBrand::where('id', $id)->first();
            $oldImageName = $oldImageName->image;

            if ($oldImageName != null) {
                Storage::delete('public/storage/brand_image/' . $oldImageName);
            }

            $fileName = uniqid() . $request->file('brand_image')->getClientOriginalName();
            $request->file('brand_image')->storeAs('public/brand_image/', $fileName);
            $brand['brand_image'] = $fileName;
        }

        ProductBrand::where('id', $id)->update($brand);
        return redirect()->route('productbrand.index')->with('message', 'Product Brand updated successfully');
    }

    // product brand delete method
    public function delete(Request $request)
    {
        $brand = ProductBrand::find($request->id);

        if ($brand) {
            $brand->delete();
            return $this->successMessage('message', 'Product Brand Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
