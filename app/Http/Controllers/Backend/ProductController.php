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
    public function index(Request $request)
    {
        $productname = $request->query('name');
        $category = $request->query('category');
        $subcat = $request->query('subcat');
        $brand = $request->query('brand');
        $sessionArray = [
            'name' => $productname,
            'category' => $category,
            'subcat'=> $subcat,
            'brand'=> $brand
        ];
        session()->put('filter', $sessionArray); 
        $query = Product::with(['category','subCategory','brand']);

        if($category) {
            $query->where('product_category_id', $category);
        }

        if($subcat) {
            $query->where('product_sub_category_id', $subcat);
        }

        if($brand) {
            $query->where('product_brand_id', $brand);
        }

        if($productname) {
            // $query->whereHas('user', function($q) use ($productname) { 
                $query->where('name', 'like', '%'.$productname.'%');
            // });
        }
        // $orders = $query->paginate($perpage)->appends($request->except('page'));
        $products = $query->paginate(10);
        $cat = ProductCategory::all();
        $subcategory = ProductSubCategory::all();
        $brands = ProductBrand::all();
        return view('backend.product.product', compact('products','cat','subcategory','brands'));
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

    // product edit page
    public function edit($id)
    {
        $product = Product::find($id);
        $brand = ProductBrand::select('id', 'name')->get();
        $cat = ProductCategory::select('id', 'name')->get();
        $subcat = ProductSubCategory::select('id', 'name')->get();
        //  dd($product);
        return view('backend.product.product-edit', compact('brand', 'subcat', 'cat', 'product'));
    }

    // product update method
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'product_pdf' => 'nullable|mimes:pdf|max:2048', // Example validation rules for PDF files
            'product_guide_image' => 'nullable|image|max:2048', // Example validation rules for images
            'product_guide_pdf' => 'nullable|mimes:pdf|max:2048', // Example validation rules for PDF files
            'video_file' => 'nullable|mimetypes:video/mp4,video/avi|max:20480', // Example validation rules for video files
        ]);

        // Combine the titles and values into an associative array
        $dynamicFieldss = array_combine(
            $request->input('title', []),
            $request->input('value', [])
        );

        // Filter out any null or empty values
        $dynamicFields = array_filter($dynamicFieldss);

        // Initialize an empty array to store the updated product data
        $product = [];

        // PDF file handling
        if ($request->hasFile('product_pdf')) {
            $pdf_fileName = uniqid() . '.' . $request->file('product_pdf')->getClientOriginalExtension();
            $request->file('product_pdf')->storeAs('public/product_pdf/', $pdf_fileName);
            $product['product_pdf'] = $pdf_fileName;
        }

        // Feature image handling
        if ($request->hasFile('product_feature_image')) {
            $imagefileName = uniqid() . '.' . $request->file('product_feature_image')->getClientOriginalExtension();
            $request->file('product_feature_image')->storeAs('public/product_guide_image/', $imagefileName);
            $product['product_feature_image'] = $imagefileName;
        }

        // Product guide PDF handling
        if ($request->hasFile('product_guide_pdf')) {
            $feature_pdf_fileName = uniqid() . '.' . $request->file('product_guide_pdf')->getClientOriginalExtension();
            $request->file('product_guide_pdf')->storeAs('public/product_guide_pdf/', $feature_pdf_fileName);
            $product['product_guide_pdf'] = $feature_pdf_fileName;
        }

        // Product guide video handling
        $product_guide_video = $request->input('source') === 'link' ? $request->input('video_link') : null;
        if ($request->hasFile('video_file')) {
            $product_guide_video = uniqid() . '.' . $request->file('video_file')->getClientOriginalExtension();
            $request->file('video_file')->storeAs('public/product_guide_video/', $product_guide_video);
        }

        // Populate the $product array with the remaining fields
        $product['id'] = $id;
        $product['product_category_id'] = $request->product_cat;
        $product['product_sub_category_id'] = $request->product_subcat;
        $product['product_brand_id'] = $request->product_brand;
        $product['name'] = $request->product_name;
        $product['description'] = $request->product_des;
        $product['specification'] = json_encode($dynamicFields);
        $product['product_video_link'] = $request->product_video_link;
        $product['product_guide_video'] = $product_guide_video;

        // Update the product in the database
        Product::where('id', $id)->update($product);
        // Redirect back to the product index page with a success message
        return redirect()->route('product.index')->with('message', 'Product updated successfully');
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
