<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ResponseController;
use App\Models\Product;

class ProductCategoryController extends ResponseController
{
    //category index page
    public function index()
    {
        $categories = ProductCategory::paginate(10);
        return view('backend.productcategory.productcategory', compact('categories'));
    }

    // category create page
    public function create()
    {
        return view('backend.productcategory.productcategory-create');
    }

    // category store method
    public function store(Request $request)
    {

        $fileName = uniqid() . $request->file('cat_image')->getClientOriginalName();
        $request->file('cat_image')->storeAs('public/category_images/', $fileName);
        $data['category_image'] = $fileName;

        ProductCategory::create([
            'name' => $request->cat_name,
            'description' => $request->cat_description,
            'category_image' => $fileName
        ]);

        return redirect()->route('productcategory.index')->with('message', 'Product-category created successfully');
    }

    // category edit page
    public function edit($id)
    {
        $category = ProductCategory::find($id);
        // dd($category);
        return view('backend.productcategory.productcategory-edit', compact('category'));
    }

    // category update method
    public function update(Request $request, $id)
    {
        $category = [
            'id' => $id,
            'name' => $request->cat_name,
            'description' => $request->cat_description,
        ];

        if ($request->hasFile('cat_image')) {
            $oldImageName = ProductCategory::where('id', $id)->first();
            $oldImageName = $oldImageName->image;

            if ($oldImageName != null) {
                Storage::delete('public/storage/category_images/' . $oldImageName);
            }

            $fileName = uniqid() . $request->file('cat_image')->getClientOriginalName();
            $request->file('cat_image')->storeAs('public/category_images/', $fileName);
            $category['category_image'] = $fileName;
        }

        ProductCategory::where('id', $id)->update($category);
        return redirect()->route('productcategory.index')->with('message', 'Product-category updated successfully');;
    }

    // category delete method
    public function delete(Request $request)
    {
        $category = ProductCategory::find($request->id);

        if ($category) {
            $category->delete();
            return $this->successMessage('message', 'Product-Category Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
