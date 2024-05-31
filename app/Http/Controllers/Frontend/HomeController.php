<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Company;
use App\Models\Product;
use App\Models\Project;
use App\Models\Special;
use App\Models\ContactUs;
use App\Models\Homeabout;
use App\Models\Milestone;
use App\Models\OurBranch;
use App\Models\LandingPage;
use App\Models\NewCategory;
use App\Models\OurCustomer;
use App\Models\SpecialCard;
use App\Models\TechSupport;
use App\Models\Testimonial;
use App\Models\UserSupport;
use App\Models\ProductBrand;
use App\Models\CompanyDetail;
use App\Models\CompanyPoilcy;
use App\Models\CompanyFounder;
use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use App\Models\HomeaboutCounter;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;

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
        $footer = Footer::all();
        $header = Header::all();
        return view('frontend.index', compact('brands', 'news', 'product_category','homepage','homeabout','aboutcounter','special','specialcard','ourcustomers','footer','header'));
    }

    // frontend about page
    public function about()
    {
        $footer = Footer::all();
        $header = Header::all();
        $testimonials = Testimonial::all();
        $companypolicy = CompanyPoilcy::all();
        $company = Company::all();
        $companydetail = CompanyDetail::all();
        $companyfounder = CompanyFounder::all();
        $milestone = Milestone::all();
        return view('frontend.about', compact('testimonials','companypolicy','company','companydetail','companyfounder','milestone','footer','header'));
    }

    // frontend products category page
    public function products()
    {
        // $product_category = ProductCategory::with('subcategories')->get();
        // return view('frontend.products', compact('product_category'));
        $footer = Footer::all();
        $header = Header::all();
        $product_category = ProductCategory::with('subcategories.brands.products')->get();
        return view('frontend.products', compact('product_category','footer','header'));
    }

    // frontend subcategory page
    public function subcategory($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $product_sub_category = ProductSubCategory::findOrFail($id);
        $categoryId = $product_sub_category->product_category_id;

        // Get all subcategories with the same category ID
        $subcategories = ProductSubCategory::where('product_category_id', $categoryId)->get();
        return view('frontend.productsubcategory', compact('subcategories','footer','header'));
    }

    // frontend brand page
    public function brand($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $brand = ProductBrand::findOrFail($id);
        $subcategoryId = $brand->product_sub_category_id;

        // Get all subcategories with the same category ID
        $brands = ProductBrand::where('product_sub_category_id', $subcategoryId)->get();
        // dd($brands);
        return view('frontend.brand', compact('brands','footer','header'));
    }

    // frontend product page
    public function product($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $product = Product::findOrFail($id);
        $brandId = $product->product_brand_id;
        // Get all subcategories with the same category ID
        $products = Product::where('product_brand_id', $brandId)->get();
        // dd($products);
        return view('frontend.product', compact('products','footer','header'));
    }

    // product detail page
    public function productDetail($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $productdetail = Product::findOrFail($id);
        $product_category = ProductCategory::all();
        $product_sub_category = ProductSubCategory::all();
        $brand = ProductBrand::all();
        $user_supp = UserSupport::find($id);
        $tech_supp = TechSupport::find($id);
        return view('frontend.detail.product.productdetail', compact('productdetail', 'product_category', 'product_sub_category', 'brand', 'user_supp', 'tech_supp','footer','header'));
    }

    // frontend projects page
    public function projects()
    {
        $footer = Footer::all();
        $header = Header::all();
        $projects = Project::paginate(4);
        return view('frontend.project', compact('projects','footer','header'));
    }

    // frontend blog page
    public function blog()
    {
        $footer = Footer::all();
        $header = Header::all();
        $news = News::paginate(4);
        return view('frontend.blog', compact('news','footer','header'));
    }

    // frontend contact page
    public function contact()
    {
        $footer = Footer::all();
        $header = Header::all();
        $contact = ContactUs::all();
        $ourbranch = OurBranch::all();
        return view('frontend.contact',compact('contact','ourbranch','footer','header'));
    }

    // frontend project detail page
    public function projectdetail($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $project_detail = Project::find($id);
        $projectcategory = ProjectCategory::all();
        return view('frontend.detail.project.projectdetail', compact('project_detail', 'projectcategory','footer','header'));
    }

    // frontend project detail page
    public function newdetail($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $new_detail = News::find($id);
        $newcategory = NewCategory::all();
        return view('frontend.detail.news.newdetail', compact('new_detail', 'newcategory','footer','header'));
    }

    // user guide 
    public function userguide()
    {
        $footer = Footer::all();
        $header = Header::all();
        $userguide = UserSupport::get();
        $products = Product::get();
        return view('frontend.userguide', compact('userguide', 'products','footer','header'));
    }

    // user guide detail
    public function userguidedetail($id)
    {
        $userguidedetail = UserSupport::find($id);
        $productdetail = Product::find($id);
        return view('frontend.detail.userguidedetail.userguidedetail', compact('userguidedetail', 'productdetail','footer','header'));
    }

    // tech guide 
    public function techguide()
    {
        $footer = Footer::all();
        $header = Header::all();
        $techguide = TechSupport::get();
        $products = Product::get();
        return view('frontend.techguide', compact('techguide', 'products','footer','header'));
    }

    // tech guide detail
    public function techguidedetail($id)
    {
        $footer = Footer::all();
        $header = Header::all();
        $techguidedetail = UserSupport::find($id);
        $productdetail = Product::find($id);
        return view('frontend.detail.techguidedetail.techguidedetail', compact('techguidedetail', 'productdetail','footer','header'));
    }
}
