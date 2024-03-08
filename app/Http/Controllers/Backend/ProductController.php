<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
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
        return view('backend.product.product-create', compact('products', 'brand', 'cat', 'subcat'));
    }

    //product store method
    public function store(Request $request)
    {
        // Combine the titles and values into an associative array
        $dynamicFields = array_combine(
            $request->input('title', []),
            $request->input('value', [])
        );

        // Filter out any null or empty values
        $dynamicFields = array_filter($dynamicFields);

        // pdf store
        $pdf_fileName = uniqid() . $request->file('product_pdf')->getClientOriginalName();
        $request->file('product_pdf')->storeAs('public/product_pdf/', $pdf_fileName);
        $data['product_pdf'] = $pdf_fileName;

        // feature image
        $imagefileName = uniqid() . $request->file('product_guide_image')->getClientOriginalName();
        $request->file('product_guide_image')->storeAs('public/product_guide_image/', $imagefileName);
        $data['product_guide_image'] = $imagefileName;

        // product_guide_pdf
        $feature_pdf_fileName = uniqid() . $request->file('product_guide_pdf')->getClientOriginalName();
        $request->file('product_guide_image')->storeAs('public/product_guide_pdf/', $feature_pdf_fileName);
        $data['product_guide_pdf'] = $feature_pdf_fileName;

        // $guide_video
        $product_guide_video = $request->input('source');
        if ($request->input('source') === 'link') {
            $product_guide_video = $request->input('video_link');
        } elseif ($request->input('source') === 'file') {
            $product_guide_video = uniqid() . $request->file('video_file')->getClientOriginalName();
            $request->file('video_file')->storeAs('public/product_guide_video/', $product_guide_video);
            $data['video_file'] = $product_guide_video;
        }

        Product::create([
            'name' => $request->product_name,
            'product_category_id' => intval($request->product_cat),
            'product_sub_category_id' => intval($request->product_subcat),
            'product_brand_id' => $request->product_brand,
            'description' => $request->product_des,
            'specification' => json_encode($dynamicFields),
            'product_pdf' => $pdf_fileName,
            'product_video_link' => $request->product_video_link,
            'product_feature_image' => $imagefileName,
            'product_guide_pdf' => $feature_pdf_fileName,
            'product_guide_video' => $product_guide_video,
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
