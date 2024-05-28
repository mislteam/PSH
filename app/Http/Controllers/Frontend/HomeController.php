<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Product;
use App\Models\Project;
use App\Models\Homeabout;
use App\Models\LandingPage;
use App\Models\NewCategory;
use App\Models\TechSupport;
use App\Models\Testimonial;
use App\Models\UserSupport;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use App\Models\HomeaboutCounter;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;
use App\Models\OurCustomer;
use App\Models\Special;
use App\Models\SpecialCard;

class HomeController extends Controller
{
    // frontend index home page
    public function index()
    {
        $brands = ProductBrand::all();
        $news = News::all();
        $product_category = ProductCategory::all();
        $homepage = LandingPage::all();
        $homeabout = Homeabout::all();
        $aboutcounter = HomeaboutCounter::all();
        $special = Special::all();
        $specialcard = SpecialCard::all();
        $ourcustomers = OurCustomer::all();
        return view('frontend.index', compact('brands', 'news', 'product_category','homepage','homeabout','aboutcounter','special','specialcard','ourcustomers'));
    }

    // frontend about page
    public function about()
    {
        $testimonials = Testimonial::all();
        return view('frontend.about', compact('testimonials'));
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

    // product detail page
    public function productDetail($id)
    {
        $productdetail = Product::findOrFail($id);
        $product_category = ProductCategory::all();
        $product_sub_category = ProductSubCategory::all();
        $brand = ProductBrand::all();
        $user_supp = UserSupport::find($id);
        $tech_supp = TechSupport::find($id);
        return view('frontend.detail.product.productdetail', compact('productdetail', 'product_category', 'product_sub_category', 'brand', 'user_supp', 'tech_supp'));
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

    // user guide 
    public function userguide()
    {
        $userguide = UserSupport::get();
        $products = Product::get();
        return view('frontend.userguide', compact('userguide', 'products'));
    }

    // user guide detail
    public function userguidedetail($id)
    {
        $userguidedetail = UserSupport::find($id);
        $productdetail = Product::find($id);
        return view('frontend.detail.userguidedetail.userguidedetail', compact('userguidedetail', 'productdetail'));
    }

    // tech guide 
    public function techguide()
    {
        $techguide = TechSupport::get();
        $products = Product::get();
        return view('frontend.techguide', compact('techguide', 'products'));
    }

    // tech guide detail
    public function techguidedetail($id)
    {
        $techguidedetail = UserSupport::find($id);
        $productdetail = Product::find($id);
        return view('frontend.detail.techguidedetail.techguidedetail', compact('techguidedetail', 'productdetail'));
    }
}
