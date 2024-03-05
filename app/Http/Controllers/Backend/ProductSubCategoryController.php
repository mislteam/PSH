<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ResponseController;

class ProductSubCategoryController extends ResponseController
{
    //sub category index page
    public function index()
    {
        $subcategories = ProductSubCategory::paginate(10);
        $cat = ProductCategory::all();
        return view('backend.productsubcategory.productsubcategory', compact('subcategories', 'cat'));
    }

    // sub category create page
    public function create()
    {
        $cat = ProductCategory::select('id', 'name')->get();
        $subcategories = ProductSubCategory::all();
        // dd($cat);
        return view('backend.productsubcategory.productsubcategory-create', compact('cat', 'subcategories'));
    }

    // sub category store method
    public function store(Request $request)
    {
        $fileName = uniqid() . $request->file('subcat_image')->getClientOriginalName();
        $request->file('subcat_image')->storeAs('public/subcategory_images/', $fileName);
        $data['subcategory_image'] = $fileName;

        $subcat = ProductSubCategory::create([
            'name' => $request->subcat_name,
            'product_category_id' => intval($request->subcat_id),
            'description' => $request->subcat_description,
            'subcategory_image' => $fileName
        ]);
        // dd($subcat);
        return redirect()->route('productsubcategory.index')->with('message', 'Product SubCategory created successfully');
    }

    // subcategory edit page
    public function edit($id)
    {
        $cat = ProductCategory::select('id', 'name')->get();
        $subcategory = ProductSubCategory::find($id);
        // dd($category);
        return view('backend.productsubcategory.productsubcategory-edit', compact('subcategory', 'cat'));
    }

    // subcategory update method
    public function update(Request $request, $id)
    {
        $subcategory = [
            'id' => $id,
            'name' => $request->subcat_name,
            'product_category_id' => $request->subcat_id,
            'description' => $request->subcat_description,
        ];

        if ($request->hasFile('subcat_image')) {
            $oldImageName = ProductSubCategory::where('id', $id)->first();
            $oldImageName = $oldImageName->image;

            if ($oldImageName != null) {
                Storage::delete('public/storage/subcategory_images/' . $oldImageName);
            }

            $fileName = uniqid() . $request->file('subcat_image')->getClientOriginalName();
            $request->file('subcat_image')->storeAs('public/subcategory_images/', $fileName);
            $subcategory['subcategory_image'] = $fileName;
        }

        ProductSubCategory::where('id', $id)->update($subcategory);
        return redirect()->route('productsubcategory.index')->with('message', 'Product SubCategory updated successfully');;
    }

    // subcategory delete method
    public function delete(Request $request)
    {
        $subcategory = ProductSubCategory::find($request->id);
        $category = ProductCategory::find($request->id);

        if ($subcategory) {
            $subcategory->delete();
            return $this->successMessage('message', 'Product-Sub-Category Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
