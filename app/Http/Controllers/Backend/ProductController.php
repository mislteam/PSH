<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;

class ProductController extends ResponseController
{
    //product index page
    public function index()
    {
        $products = Product::paginate(10);
        return view('backend.product.product', compact('products'));
    }

    //product create page
    public function create()
    {
        $brand = ProductBrand::all();
        $cat = ProductCategory::all();
        $subcat = ProductSubCategory::all();
        $products = Product::select('id', 'name')->get();
        return view('backend.product.product-create', compact('products','brand','cat','subcat'));
    }

      //product store method
      public function store(Request $request)
      {
        $product = Product::create([
            'name' => $request->product_name,
            'product_category_id' => intval($request->product_cat),
            'product_sub_category_id' => intval($request->product_subcat),
            'product_brand_id' => $request->product_brand,
            'description'=>$request->product_des
        ]);
        return redirect()->route('product.index')->with('message', 'Product created successfully');
      }

    //   product delete method
    public function delete(Request $request)
    {
        $product = Product::find($request->id);

        if ($product) {
            $product->delete();
            return $this->successMessage('message', 'Product Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
