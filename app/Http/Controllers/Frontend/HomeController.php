<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\Project;
use App\Models\ProjectCategory;

class HomeController extends Controller
{
    // frontend index home page
    public function index()
    {
        $brands = ProductBrand::all();
        $news = News::all();
        $product_category = ProductCategory::all();
        return view('frontend.index', compact('brands', 'news', 'product_category'));
    }

    // frontend about page
    public function about()
    {
        return view('frontend.about');
    }

    // frontend products category page
    public function products()
    {
        // $product_category = ProductCategory::with('subcategories')->get();
        // return view('frontend.products', compact('product_category'));
        $product_category = ProductCategory::with('subcategories.brands.products')->get();
        return view('frontend.products', compact('product_category'));
    }

    // frontend subcategory page
    public function subcategory($id)
    {
        $product_sub_category = ProductSubCategory::findOrFail($id);
        $categoryId = $product_sub_category->product_category_id;

        // Get all subcategories with the same category ID
        $subcategories = ProductSubCategory::where('product_category_id', $categoryId)->get();
        return view('frontend.productsubcategory', compact('subcategories'));
    }

    // frontend brand page
    public function brand($id)
    {
        $brand = ProductBrand::findOrFail($id);
        $subcategoryId = $brand->product_sub_category_id;

        // Get all subcategories with the same category ID
        $brands = ProductBrand::where('product_sub_category_id', $subcategoryId)->get();
        // dd($brands);
        return view('frontend.brand', compact('brands'));
    }

    // frontend product page
    public function product($id)
    {
        $product = Product::findOrFail($id);
        $brandId = $product->product_brand_id;
        // Get all subcategories with the same category ID
        $products = Product::where('product_brand_id', $brandId)->get();
        // dd($products);
        return view('frontend.product', compact('products'));
    }

    // frontend projects page
    public function projects()
    {
        $projects = Project::paginate(4);
        return view('frontend.project', compact('projects'));
    }

    // frontend blog page
    public function blog()
    {
        $news = News::paginate(4);
        return view('frontend.blog', compact('news'));
    }

    // frontend contact page
    public function contact()
    {
        return view('frontend.contact');
    }

    // frontend project detail page
    public function projectdetail($id)
    {
        $project_detail = Project::find($id);
        $projectcategory = ProjectCategory::all();
        return view('frontend.detail.project.projectdetail', compact('project_detail', 'projectcategory'));
    }

    // frontend project detail page
    public function newdetail($id)
    {
        $new_detail = News::find($id);
        $newcategory = NewCategory::all();
        return view('frontend.detail.news.newdetail', compact('new_detail', 'newcategory'));
    }
}
