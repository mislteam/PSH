<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;;

use App\Http\Controllers\Backend\NewController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SpecialController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Auth\VerificationController;

use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\TownshipController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Frontend\UserloginController;
use App\Http\Controllers\Backend\ActivityLogController;
use App\Http\Controllers\Backend\LandingPageController;
use App\Http\Controllers\Backend\NewCategoryController;
use App\Http\Controllers\Backend\OurCustomerController;
use App\Http\Controllers\Backend\ProductTypeController;
use App\Http\Controllers\Backend\TechSupportController;
use App\Http\Controllers\Backend\UserSupportController;
use App\Http\Controllers\Backend\ProductBrandController;
use App\Http\Controllers\Frontend\ContactFormController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProjectCategoryController;
use App\Http\Controllers\Backend\ProductSubCategoryController;
use App\Http\Controllers\Backend\ProjectSubCategoryController;
use App\Http\Controllers\Backend\ContactFormController as BackendContactFormController;
use App\Http\Controllers\Backend\TestimonialController as BackendTestimonialController;

// Frontend  Login 
Auth::routes([
    'verify' => true
]);

// Proxy Url 
Route::get('/proxy', function () {
    $url = request()->query('url');
    $response = Http::get($url);
    return $response->body();
});

// Admin Login 
Route::get('/admin/login', [LoginController::class, 'adminLogin'])->name('login.admin');

// email 
Route::get('/email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');

// google login
Route::get('auth/{website}', [SocialLoginController::class, 'redirectToGoogle'])->name('googlelogin');
Route::get('auth/{website}/callback', [SocialLoginController::class, 'handleGoogleCallback']);

// start FrontEnd 
// Home Page 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Detail page
Route::get('/projects/detail/{id}', [HomeController::class, 'projectdetail'])->name('projectdetail');
Route::get('/news/detail/{id}', [HomeController::class, 'newdetail'])->name('newdetail');

// all product page 
Route::get('/sub-category/{id}', [HomeController::class, 'subcategory'])->name('subcategory');
Route::get('/brand/{id}', [HomeController::class, 'brand'])->name('brand');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/product/detail/{id}', [HomeController::class, 'productDetail'])->name('productDetail');

// client servey form
Route::get('/service-form/view', [FormController::class, 'serviceView'])->name('serviceView');
Route::post('/service-form/store', [FormController::class, 'servicestore'])->name('servicestore');

// client testimonial form
Route::get('/client-testimonial/view', [TestimonialController::class, 'testimonialView'])->name('testimonialView');
Route::post('/client-testimonial/store', [TestimonialController::class, 'testimonialstore'])->name('testimonialstore');

// contact form
Route::get('/contact-form/view', [ContactFormController::class, 'contactformview'])->name('contactformview');
Route::post('/contact-form/store', [ContactFormController::class, 'contactformstore'])->name('contactformstore');

// User guide and technical guide
Route::get('/userguide', [HomeController::class, 'userguide'])->name('userguide');
Route::get('/userguide/detail/{id}', [HomeController::class, 'userguidedetail'])->name('userguidedetail');
Route::get('/techguide', [HomeController::class, 'techguide'])->name('techguide');
Route::get('/techguide/detail/{id}', [HomeController::class, 'techguidedetail'])->name('techguidedetail');



// user login
Route::get('/userlogin', [UserloginController::class, 'userlogin'])->name('user-login');


Route::middleware(['role:user', 'verified', 'auth', 'checkuserban'])->group(function () {
    Route::get('/memberform/{id}', [UserloginController::class, 'memberform'])->name('memberform');
    Route::post('/memberform/update/{id}', [UserloginController::class, 'updatememberinfo'])->name('updatememberinfo');
    Route::get('/otp', [UserloginController::class, 'otp'])->name('otp');
    Route::get('/otp-verify', [UserloginController::class, 'otpverify'])->name('otpverifity');
    Route::get('/fetch-townships', [TownshipController::class,'fetchTownships'])->name('fetchTownships');
});
// End FrontEnd 
// **************************************************************************************************************************
// Backend Route
Route::prefix('admin')->middleware(['role:admin|editor|sale|office', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Products
    Route::prefix('products')->group(function () {
        Route::match(['get', 'post'], '/product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::post('/product/delete', [ProductController::class, 'delete'])->name('product.delete');
    });

    // Products Type
    Route::prefix('products')->group(function () {
        Route::match(['get', 'post'], '/producttype', [ProductTypeController::class, 'index'])->name('producttype.index');
        Route::get('/producttype/create', [ProductTypeController::class, 'create'])->name('producttype.create');
        Route::post('/producttype/store', [ProductTypeController::class, 'store'])->name('producttype.store');
        Route::get('/producttype/edit/{id}', [ProductTypeController::class, 'edit'])->name('producttype.edit');
        Route::post('/producttype/update/{id}', [ProductTypeController::class, 'update'])->name('producttype.update');
        Route::post('/producttype/delete', [ProductTypeController::class, 'delete'])->name('producttype.delete');
    });

    // Products Categorys
    Route::prefix('products')->group(function () {
        Route::get('/product-category', [ProductCategoryController::class, 'index'])->name('productcategory.index');
        Route::get('/product-category/create', [ProductCategoryController::class, 'create'])->name('productcategory.create');
        Route::post('/product-category/store', [ProductCategoryController::class, 'store'])->name('productcategory.store');
        Route::get('/product-category/edit/{id}', [ProductCategoryController::class, 'edit'])->name('productcategory.edit');
        Route::post('/product-category/update/{id}', [ProductCategoryController::class, 'update'])->name('productcategory.update');
        Route::post('/product-category/delete', [ProductCategoryController::class, 'delete'])->name('productcategory.delete');
    });

    // Products Sub Categorys
    Route::prefix('products')->group(function () {
        Route::get('/product-sub-category', [ProductSubCategoryController::class, 'index'])->name('productsubcategory.index');
        Route::get('/product-sub-category/create', [ProductSubCategoryController::class, 'create'])->name('productsubcategory.create');
        Route::post('/product-sub-category/store', [ProductSubCategoryController::class, 'store'])->name('productsubcategory.store');
        Route::get('/product-sub-category/edit/{id}', [ProductSubCategoryController::class, 'edit'])->name('productsubcategory.edit');
        Route::post('/product-sub-category/update/{id}', [ProductSubCategoryController::class, 'update'])->name('productsubcategory.update');
        Route::post('/product-sub-category/delete', [ProductSubCategoryController::class, 'delete'])->name('productsubcategory.delete');
    });

    // Products brands
    Route::prefix('products')->group(function () {
        Route::get('/product-brand', [ProductBrandController::class, 'index'])->name('productbrand.index');
        Route::get('/product-brand/create', [ProductBrandController::class, 'create'])->name('productbrand.create');
        Route::post('/product-brand/store', [ProductBrandController::class, 'store'])->name('productbrand.store');
        Route::get('/product-brand/edit/{id}', [ProductBrandController::class, 'edit'])->name('productbrand.edit');
        Route::post('/product-brand/update/{id}', [ProductBrandController::class, 'update'])->name('productbrand.update');
        Route::post('/product-brand/delete', [ProductBrandController::class, 'delete'])->name('productbrand.delete');
    });

    // Products User Support
    Route::prefix('products')->group(function () {
        Route::get('/user-support', [UserSupportController::class, 'index'])->name('usersupport.index');
        Route::get('/usersupport/create', [UserSupportController::class, 'create'])->name('usersupport.create');
        Route::post('/usersupport/store', [UserSupportController::class, 'store'])->name('usersupport.store');
        Route::get('/usersupport/edit/{id}', [UserSupportController::class, 'edit'])->name('usersupport.edit');
        Route::post('/usersupport/update/{id}', [UserSupportController::class, 'update'])->name('usersupport.update');
        Route::post('/usersupport/delete', [UserSupportController::class, 'delete'])->name('usersupport.delete');
    });

    // Products Technical Support
    Route::prefix('products')->group(function () {
        Route::get('/tech-support', [TechSupportController::class, 'index'])->name('techsupport.index');
        Route::get('/tech-support/create', [TechSupportController::class, 'create'])->name('techsupport.create');
        Route::post('/tech-support/store', [TechSupportController::class, 'store'])->name('techsupport.store');
        Route::get('/tech-support/edit/{id}', [TechSupportController::class, 'edit'])->name('techsupport.edit');
        Route::post('/tech-support/update/{id}', [TechSupportController::class, 'update'])->name('techsupport.update');
        Route::post('/tech-support/delete', [TechSupportController::class, 'delete'])->name('techsupport.delete');
    });

    // Project category
    Route::prefix('project')->group(function () {
        // Route::get('/project-category', [ProjectController::class, 'index'])->name('project-category.index');
        Route::match(['get', 'post'], '/project-category', [ProjectCategoryController::class, 'index'])->name('project-category.index');
        Route::get('/project-category/create', [ProjectCategoryController::class, 'create'])->name('project-category.create');
        Route::post('/project-category/store', [ProjectCategoryController::class, 'store'])->name('project-category.store');
        Route::get('/project-category/edit/{id}', [ProjectCategoryController::class, 'edit'])->name('project-category.edit');
        Route::post('/project-category/update/{id}', [ProjectCategoryController::class, 'update'])->name('project-category.update');
        Route::post('/project-category/delete', [ProjectCategoryController::class, 'delete'])->name('project-category.delete');
    });

    // Project sub category
    Route::prefix('project')->group(function () {
        Route::match(['get', 'post'], '/project-sub-category', [ProjectSubCategoryController::class, 'index'])->name('project-sub-category.index');
        Route::get('/project-sub-category/create', [ProjectSubCategoryController::class, 'create'])->name('project-sub-category.create');
        Route::post('/project-sub-category/store', [ProjectSubCategoryController::class, 'store'])->name('project-sub-category.store');
        Route::get('/project-sub-category/edit/{id}', [ProjectSubCategoryController::class, 'edit'])->name('project-sub-category.edit');
        Route::post('/project-sub-category/update/{id}', [ProjectSubCategoryController::class, 'update'])->name('project-sub-category.update');
        Route::post('/project-sub-category/delete', [ProjectSubCategoryController::class, 'delete'])->name('project-sub-category.delete');
    });

    // All Projects
    Route::prefix('projects')->group(function () {
        Route::match(['get', 'post'], '/project', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
        Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
        Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
        Route::post('/project/delete', [ProjectController::class, 'delete'])->name('project.delete');
    });

    // news category
    Route::prefix('news')->group(function () {
        Route::match(['get', 'post'], '/new-category', [NewCategoryController::class, 'index'])->name('new-category.index');
        Route::get('/new-category/create', [NewCategoryController::class, 'create'])->name('new-category.create');
        Route::post('/new-category/store', [NewCategoryController::class, 'store'])->name('new-category.store');
        Route::get('/new-category/edit/{id}', [NewCategoryController::class, 'edit'])->name('new-category.edit');
        Route::post('/new-category/update/{id}', [NewCategoryController::class, 'update'])->name('new-category.update');
        Route::post('/new-category/delete', [NewCategoryController::class, 'delete'])->name('new-category.delete');
    });

    // All News
    Route::prefix('news')->group(function () {
        Route::match(['get', 'post'], '/news', [NewController::class, 'index'])->name('news.index');
        Route::get('/news/create', [NewController::class, 'create'])->name('news.create');
        Route::post('/news/store', [NewController::class, 'store'])->name('news.store');
        Route::get('/news/edit/{id}', [NewController::class, 'edit'])->name('news.edit');
        Route::post('/news/update/{id}', [NewController::class, 'update'])->name('news.update');
        Route::post('/news/delete', [NewController::class, 'delete'])->name('news.delete');
    });

    // forum 
    Route::prefix('forum')->group(function (){
        Route::get('/post',[PostController::class,'PostIndex'])->name('PostIndex');
        Route::get('/post/create',[PostController::class,'PostCreate'])->name('PostCreate');
        Route::post('/post/create',[PostController::class,'PostStore'])->name('PostStore');
        Route::get('/post/edit/{id}',[PostController::class,'PostEdit'])->name('PostEdit');
        Route::post('/post/update/{id}',[PostController::class,'PostUpdate'])->name('PostUpdate');
    });

    // Customer Feedback Form 
    Route::prefix('feedback')->group(function () {
        Route::match(['get', 'post'], '/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
        Route::get('/feedback/view/{id}', [FeedbackController::class, 'view'])->name('feedback.view');
        Route::post('/feedback/delete', [FeedbackController::class, 'delete'])->name('feedback.delete');
    });

    // Contact Form 
    Route::prefix('contact')->group(function () {
        Route::match(['get', 'post'], '/contactform', [BackendContactFormController::class, 'contactformindex'])->name('contactform.index');
        Route::get('/contactform/view/{id}', [BackendContactFormController::class, 'contactformview'])->name('contactform.view');
        Route::post('/contactform/delete', [BackendContactFormController::class, 'contactformdelete'])->name('contactform.delete');
    });

    // Customer testimonial Form 
    Route::prefix('testimonial')->group(function () {
        Route::match(['get', 'post'], '/testimonial', [BackendTestimonialController::class, 'index'])->name('testimonial.index');
        Route::post('/testimonial/update/{id}', [BackendTestimonialController::class, 'update'])->name('testimonial.update');
        Route::post('/changetestimonialState', [BackendTestimonialController::class, 'testimonial_change_state'])->name('changeTestimonialState');
    });

    // User 
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('userIndex');
        Route::get('/create', [UserController::class, 'create'])->name('userCreate');
        Route::post('/store', [UserController::class, 'store'])->name('userStore');
        Route::get('/{id}', [UserController::class, 'show'])->name('userView');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('userEdit');
        Route::put('/edit/{id}', [UserController::class, 'update'])->name('userUpdate');
        Route::post('/delete', [UserController::class, 'delete'])->name('userDelete');
    });

    // all user
    Route::prefix('customer')->group(function () {
        Route::match(['get', 'post'], '/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/show/{id}', [CustomerController::class, 'show'])->name('customer.show');
    });

    // All Page
    Route::prefix('allpage')->group(function () {
        // home page slide
        Route::get('home', [LandingPageController::class, 'index'])->name('home.index');
        Route::get('home/create', [LandingPageController::class, 'create'])->name('home.create');
        Route::post('home/store', [LandingPageController::class, 'store'])->name('home.store');
        Route::get('home/edit/{id}', [LandingPageController::class, 'edit'])->name('home.edit');
        Route::post('home/edit/{id}', [LandingPageController::class, 'update'])->name('home.update');

        // home about page
        Route::get('home/aboutedit/{id}', [LandingPageController::class, 'homeaboutedit'])->name('homeabout.edit');
        Route::post('home/aboutedit/{id}', [LandingPageController::class, 'homeaboutupdate'])->name('homeabout.update');

        // home about counter
        Route::get('home/aboutcounter/edit/{id}', [LandingPageController::class, 'aboutcounteredit'])->name('aboutcounter.edit');
        Route::post('home/aboutcounter/update/{id}', [LandingPageController::class, 'aboutcounterupdate'])->name('aboutcounter.update');

        // specialization
        Route::get('specialization', [SpecialController::class, 'index'])->name('special.index');
        Route::get('specialization/edit/{id}', [SpecialController::class, 'edit'])->name('special.edit');
        Route::post('specialization/update/{id}', [SpecialController::class, 'update'])->name('special.update');

        // specialization card
        Route::get('specialization/card/edit/{id}', [SpecialController::class, 'cardEdit'])->name('card.edit');
        Route::post('specialization/card/update/{id}', [SpecialController::class, 'cardUpdate'])->name('card.update');

        // Our customer
        Route::get('ourcustomer', [OurCustomerController::class, 'index'])->name('ourcustomer.index');
        Route::get('ourcustomer/create', [OurCustomerController::class, 'create'])->name('ourcustomer.create');
        Route::post('ourcustomer/store', [OurCustomerController::class, 'store'])->name('ourcustomer.store');
        Route::get('ourcustomer/edit/{id}', [OurCustomerController::class, 'edit'])->name('ourcustomer.edit');
        Route::post('ourcustomer/edit/{id}', [OurCustomerController::class, 'update'])->name('ourcustomer.update');
        Route::post('ourcustomer/delete', [OurCustomerController::class, 'delete'])->name('ourcustomer.delete');

        // About => Company Policy
        Route::get('companypolicy', [AboutUsController::class, 'index'])->name('about.companypolicy');
        Route::get('companypolicy/edit/{id}', [AboutUsController::class, 'edit'])->name('about.companypolicyedit');
        Route::post('companypolicy/edit/{id}', [AboutUsController::class, 'update'])->name('about.companypolicyupdate');

        // About => Company
        Route::get('companys', [AboutUsController::class, 'companyindex'])->name('about.company');
        Route::get('companys/create', [AboutUsController::class, 'companycreate'])->name('companys.create');
        Route::post('companys/store', [AboutUsController::class, 'companystore'])->name('companys.store');
        Route::get('companys/edit/{id}', [AboutUsController::class, 'companyedit'])->name('about.companyedit');
        Route::post('companys/edit/{id}', [AboutUsController::class, 'companyupdate'])->name('about.companyupdate');

        // About => Company Detail
        Route::get('companydetail', [AboutUsController::class, 'companydetailindex'])->name('about.companydetail');
        Route::get('companydetail/edit/{id}', [AboutUsController::class, 'companydetailedit'])->name('about.companydetailedit');
        Route::post('companydetail/edit/{id}', [AboutUsController::class, 'companydetailupdate'])->name('about.companydetailupdate');

        // About => Company founder
        Route::get('companyfounder', [AboutUsController::class, 'companyfounderindex'])->name('about.companyfounder');
        Route::get('companyfounder/edit/{id}', [AboutUsController::class, 'companyfounderedit'])->name('about.companyfounderedit');
        Route::post('companyfounder/edit/{id}', [AboutUsController::class, 'companyfounderupdate'])->name('about.companyfounderupdate');

        // About => Company milestone
        Route::get('milestone', [AboutUsController::class, 'milestoneindex'])->name('milestone.index');
        Route::get('milestone/create', [AboutUsController::class, 'milestonecreate'])->name('milestone.create');
        Route::post('milestone/store', [AboutUsController::class, 'milestonestore'])->name('milestone.store');
        Route::get('milestone/edit/{id}', [AboutUsController::class, 'milestoneedit'])->name('milestone.edit');
        Route::post('milestone/edit/{id}', [AboutUsController::class, 'milestoneupdate'])->name('milestone.update');

        // contact us 
        Route::get('contact', [ContactUsController::class, 'contactindex'])->name('contact.index');
        Route::get('contact/edit/{id}', [ContactUsController::class, 'contactedit'])->name('contact.edit');
        Route::post('contact/edit/{id}', [ContactUsController::class, 'contactupdate'])->name('contact.update');

        // our branch 
        Route::get('ourbranch', [ContactUsController::class, 'ourbranchindex'])->name('ourbranch.index');
        Route::get('ourbranch/edit/{id}', [ContactUsController::class, 'ourbranchedit'])->name('ourbranch.edit');
        Route::post('ourbranch/edit/{id}', [ContactUsController::class, 'ourbranchupdate'])->name('ourbranch.update');

        // header 
        Route::get('header', [HeaderController::class, 'headerindex'])->name('header.index');
        Route::get('header/edit/{id}', [HeaderController::class, 'headeredit'])->name('header.edit');
        Route::post('header/edit/{id}', [HeaderController::class, 'headerupdate'])->name('header.update');

        // footer 
        Route::get('footer', [FooterController::class, 'footerindex'])->name('footer.index');
        Route::get('footer/edit/{id}', [FooterController::class, 'footeredit'])->name('footer.edit');
        Route::post('footer/edit/{id}', [FooterController::class, 'footerupdate'])->name('footer.update');
    });

    // Account 
    Route::get('/account/{id}', [AccountController::class, 'show'])->name('accountShow');
    Route::get('/account/edit/{id}', [AccountController::class, 'edit'])->name('accountEdit');
    Route::get('/account/passwordChange/{id}', [AccountController::class, 'changePasswordPage'])->name('accountChangePasswordPage');
    Route::put('/account/edit/{id}', [AccountController::class, 'update'])->name('accountUpdate');
    Route::put('/accountEdit/{id}', [AccountController::class, 'updateAccount'])->name('accountInformationupdate');

    Route::prefix('setting')->group(function () {

        // Permissions 
        Route::get('admin/permission', [PermissionController::class, 'get_all_roles'])->name('permissionIndex');
        Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('permissionEdit');
        Route::post('/permission/give', [PermissionController::class, 'grant_permission'])->name('grantPermission');

        // General Setting 

        Route::get('admin/general', [GeneralSettingController::class, 'index'])->name('generalIndex');
        Route::get('/general/edit/{id}', [GeneralSettingController::class, 'edit'])->name('generalEdit');
        Route::put('/general/edit/{id}', [GeneralSettingController::class, 'update'])->name('generalUpdate');

        // activity log
        Route::get('admin/activitylog', [ActivityLogController::class, 'activitylog'])->name('activitylog');
    });

    // change State 
    Route::post('/changeUserState', [UserController::class, 'change_state'])->name('changeUserState');
});
// Backend Route

// test 
Route::get('/test', function () {
    return view('layouts.adminlogin')->with('message', 'test');
});
