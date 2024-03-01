<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Coin;
use App\Models\Trade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TradeResource;

class TradeHistoryController extends Controller
{
    public function trade_history_coin($symbol, $user_id) {
        $page = request('page') ?? 1;
        $perpage = request('perpage') ?? 10;
        $coin = Coin::where('symbol', $symbol)->first();
        $trades = Trade::where('user_id', $user_id)
                        ->where('coin_id', $coin->id)
                        ->where('status', '!=', 'pending')
                        ->latest('updated_at')
                        ->offset((intval($page) - 1) * $perpage)
                        ->limit($perpage)
                        ->get();
        $trades_count = Trade::where('user_id', $user_id)
                                ->where('coin_id', $coin->id)
                                ->where("status", "!=", 'pending')->count();

        if(count($trades) == 0) {
            return response()->json([
                'data'=> [],
                'success' => false,
                'message' => 'No trade history found',
            ]);
        } else {
            return TradeResource::collection($trades)->additional([
                'success' => true,
                'message' => "Trades",
                "count"   => $trades_count,
            ]);
        }
    }

    public function trade_history($user_id) {
        $page = request('page') ?? 1;
        $perpage = request('perpage') ?? 10;
        $trades = Trade::where('user_id', $user_id)
                        ->where('status', '!=', 'pending')
                        ->latest('updated_at')
                        ->offset((intval($page) - 1) * $perpage)
                        ->limit($perpage)
                        ->get();

        if(count($trades) == 0) {
            return response()->json([
                'data'=> [],
                'success' => false,
                'message' => 'No trade history found',
            ]);
        } else {
            return TradeResource::collection($trades)->additional([
                'success' => true,
                'message' => "Trades",
                'count' => count(Trade::where('user_id', $user_id)->where("status", "!=", 'pending')->get())
            ]);
        }
    }
}
