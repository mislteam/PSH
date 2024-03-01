<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
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
use App\Http\Controllers\Backend\HomebannerController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\ServicesavingController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\GetamountController;
use App\Http\Controllers\Backend\TradeAppointmentController;
use App\Http\Controllers\Backend\TradeController as BackendTradeController;
use App\Http\Controllers\Backend\TicketController as BackendTicketController;
use App\Http\Controllers\Backend\WalletController as BackendWalletController;
use App\Http\Controllers\Frontend\AccountController as FrontendAccountController;
use App\Http\Controllers\ProductController;
use Faker\Guesser\Name;

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

// Service and saving 
Route::get('center/{param}', [HomeController::class, 'service_saving'])->name('service_saving');

Route::middleware(['role:user', 'verified','auth', 'checkuserban'])->group(function () {
    // Account 
    Route::prefix('account')->group(function () {
        Route::get('/setting', [FrontendAccountController::class, 'index'])->name('user.account');
        Route::get('/edit', [FrontendAccountController::class, 'edit'])->name('user.accountEdit');
        Route::post('/edit', [FrontendAccountController::class, 'update'])->name('user.accountUpdate');
        // change password 
        Route::get('/change-password', [FrontendAccountController::class, 'change_password'])->name('user.changePassword');
        Route::post('/change-password', [FrontendAccountController::class, 'update_password'])->name('user.updatePassword');

        // Notify 
        Route::get('/notify/{id}', [FrontendAccountController::class, 'notify'])->name('user.notify');

        // Transaction 
        Route::get('/transaction', [FrontendAccountController::class, 'transaction'])->name('user.transaction');
    });

    // Support ticket 
    Route::get('/support-ticket', [TicketController::class, 'index'])->name('user.ticket');
    Route::get('/support-ticket/create', [TicketController::class, 'create'])->name('user.ticketCreate');
    Route::post('/support-ticket/create', [TicketController::class, 'store'])->name('user.ticketStore');
    Route::get('/support-ticket/{id}', [TicketController::class, 'show'])->name('user.ticketView');
    Route::post('/support-ticket/reply/{id}', [TicketController::class, 'reply_ticket'])->name('user.ticketReply');
    Route::post('/support-ticket/change-status/{id}', [TicketController::class, 'change_status'])->name('user.ticketStatusChange');

    // Trade 
    Route::get('/trade', [TradeController::class, 'index'])->name('user.trade');

    // Wallet Setting 
    Route::get('/wallet', [WalletController::class, 'index'])->name('user.wallet');

    // Deposit 
    Route::get('/wallet/buy/{symbol}', [WalletController::class, 'buy'])->name('user.buy');
    Route::post('/wallet/deposit', [WalletController::class, 'deposit'])->name('user.createDeposit');
    Route::get('/download/{walletAdd}', [WalletController::class, 'qrdownload'])->name('qrdownload');

    // Withdraw 
    Route::match(['get', 'post'], '/wallet/withdraw/{symbol}/auth', [WalletController::class, 'check_password'])->name('wallet.check_password');
    Route::match(['get', 'post'], '/wallet/withdraw/{symbol}', [WalletController::class, 'withdraw'])->name('user.withdraw');
    Route::match(['get', 'post'], '/wallet/withdraw/{symbol}/otpcode', [WalletController::class, 'check_otp'])->name('wallet.check_otp');

    // Market 
    Route::get('/market', [MarketController::class, 'index'])->name('user.market');
});


// Backend 
Route::prefix('admin')->middleware(['role:admin|editor|sale|office', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Products
    Route::prefix('products')->group(function(){
        Route::get('/product',[ProductController::class,'index'])->name('product.index');
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
