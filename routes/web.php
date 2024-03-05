<?php

use Faker\Guesser\Name;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TradeController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Frontend\MarketController;
use App\Http\Controllers\Frontend\TicketController;
use App\Http\Controllers\Frontend\WalletController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GetamountController;
use App\Http\Controllers\Backend\HomebannerController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\ServicesavingController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\TradeAppointmentController;
use App\Http\Controllers\Backend\ProductSubCategoryController;
use App\Http\Controllers\Backend\TradeController as BackendTradeController;
use App\Http\Controllers\Backend\TicketController as BackendTicketController;
use App\Http\Controllers\Backend\WalletController as BackendWalletController;
use App\Http\Controllers\Frontend\AccountController as FrontendAccountController;

// Home Page 
// Route::get('/', [HomeController::class, 'index'])->name('home');

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

// FrontEnd 

// Home Page 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['role:user', 'verified', 'auth', 'checkuserban'])->group(function () {
});


// Backend Route
Route::prefix('admin')->middleware(['role:admin|editor|sale|office', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Products
    Route::prefix('products')->group(function () {
        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
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
    });

    // change State 
    Route::post('/changeUserState', [UserController::class, 'change_state'])->name('changeUserState');
});

// test 
Route::get('/test', function () {
    return view('test.index')->with('message', 'test');
});
