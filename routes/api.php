<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\Api\v1\TradeHistoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/banners', [ApiController::class, 'banners']);
Route::get('/coins', [ApiController::class, 'coins']);
Route::get('/coin-interests', [ApiController::class, 'coin_interests']);
Route::post('/user-trade', [ApiController::class, 'user_trade']);
// Route::put('/user-trade', [ApiController::class, 'user_trade_update']);

// get available amount for specific user 
Route::get('/total-amount/{symbol}', [ApiController::class, 'total_amount']);

// get trade history for specific user and specific coin

Route::get('/trade/history/all/{user_id}', [TradeHistoryController::class, 'trade_history']);
Route::get('/trade/history/{symbol}/{user_id}', [TradeHistoryController::class, 'trade_history_coin']);

