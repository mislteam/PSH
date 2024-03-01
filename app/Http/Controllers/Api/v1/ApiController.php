<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Coin;
use App\Models\User;
use App\Models\Trade;
use App\Models\Banner;
use App\Models\CoinUser;
use App\Models\CoinInterest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Resources\TradeResource;
use App\Http\Resources\BannerResource;
use App\Broadcasting\GenerateKeyChannel;
use Illuminate\Support\Facades\Broadcast;
use App\Http\Controllers\ResponseController;
use DateTime;
use Illuminate\Support\Facades\DB;

class ApiController extends ResponseController
{
    public function banners()
    {
        $banners = Banner::orderBy('id', 'desc')->get();
        return BannerResource::collection($banners)->additional([
            'success' => true,
            'count' => count($banners)
        ]);
    }

    public function coins()
    {
        $coins = Coin::where('status', 1)->where('name', "!=", 'usdt')->orderBy('id', 'asc')->get();
        if(count($coins) > 0) {
            return response()->json([
                'data' => $coins,
                'success' => true,
                'count' => count($coins)
            ]);
        } else {
            return response()->json([
                'data' => [],
                'success' => true,
                'message' => 'No coins',
            ]);
        }
        
    }

    public function coin_interests()
    {
        $coin_interest = CoinInterest::all();

        if(count($coin_interest) > 0) {
            return response()->json([
                'data' => $coin_interest,
                'success' => true,
                'count' => count($coin_interest)
            ]);
        } else {
            return response()->json([
                'success' => false,
                'data' => [],
                'message' => 'No coin interests',
            ]);
        }
       
    }

    public function user_trade(Request $request)
    {
        $amount = $request->amount;
        $trade_type = $request->trade_type;
        $time = $request->time;

        // return response()->json([
        //     'data' => $request->all(),
        // ]);
        $coin_interest = CoinInterest::where('time', $time)->first();
        
        $percentage = $coin_interest->percentage;

        $coin = Coin::where('symbol', $request->symbol)->first();
        $account_asset = CoinUser::where('user_id', $request->user_id)->where('coin_id', 1)->first(); // Get USDT Value 
        $profit = intval($amount) * (intval($percentage) / 100);
        // Check the appointment and time
    
        $trade_appointment = Trade::where('user_id', $request->user_id)->where('coin_id', $coin->id)->where('status', 'pending')->first();
       
        // check if the appointment exists 
        if ($trade_appointment && $trade_appointment->start_time && $trade_appointment->end_time) {
            // check if the trade will make during the appointment time 

            $current = new DateTime();
            $start = new DateTime($trade_appointment->start_time);
            $end = new DateTime($trade_appointment->end_time);


            if ($start <= $current && $current <= $end) {
                // Start Transaction 
                DB::transaction(function() use ($trade_appointment, $amount, $trade_type, $coin_interest, $percentage, $account_asset) {
                    $trade_appointment->update([
                        'amount' => $amount,
                        'trade_type' => $trade_type,
                        'status' => 'completed',
                        'coin_interest_id' => $coin_interest->id,
                        'result' => 'win',
                    ]);
                    
                    // Add profit to the account via by percentage 
                    $available = intval($account_asset->available) + intval($amount) * (intval($percentage) / 100);
                    $account_asset->update([
                        'available' => $available,
                    ]);
                });


                return response()->json([
                    'success' => true,
                    'data' => $trade_appointment,
                    'message' => "Trade completed successfully",
                    'result' => 'win',
                    'profit' => $profit,
                ]);
            } else {
                try {
                    $trade = DB::transaction(function() use ($coin,$coin_interest, $amount, $percentage, $trade_type, $account_asset ) {
                        $trade = Trade::create([
                            'coin_id' => $coin->id,
                            'user_id' => request()->user_id,
                            'coin_interest_id' => $coin_interest->id,
                            'start_time' => null,
                            'end_time' => null,
                            'amount' => $amount,
                            'trade_type' => strtolower($trade_type),
                            'status' => 'completed',
                            'result' => "lose",
                        ]);
    
                        // Remove profit from the account via by percentage
                        $profit = intval($amount) * (intval($percentage) / 100);
                        $available = intval($account_asset->available) - $profit;
                        $account_asset->update([
                            'available' => $available,
                        ]);

                        $admin = Role::findByName('admin');
                        $notifyData = array(
                            'user_id' => $admin->id,
                            'subject' => 'Trade Transaction by ' . $trade->user->name,
                            'description' => "Trade amount is" . $trade->amount,
                            'link' => "/admin/trade/edit/" . $trade->id,
                        );
                        $this->createNotify($notifyData);
                        return $trade;
                    });

                    return response()->json([
                        'success' => true,
                        'data' => $trade,
                        'message' => "Trade completed successfully",
                        'result' => 'lose',
                        'profit' => $profit,
                    ]);
                } catch (\Exception $e) {
                    return response()->json([
                        'success' => false,
                        'message' => $e->getMessage(),
                        'data' => [],
                    ]);
                }
            }
        } else {
            try {
                $trade = DB::transaction(function() use ($coin,$coin_interest, $amount, $percentage, $trade_type, $account_asset ) {
                    $trade = Trade::create([
                        'coin_id' => $coin->id,
                        'user_id' => request()->user_id,
                        'coin_interest_id' => $coin_interest->id,
                        'start_time' => null,
                        'end_time' => null,
                        'amount' => $amount,
                        'trade_type' => strtolower($trade_type),
                        'status' => 'completed',
                        'result' => "lose",
                    ]);

                    // Remove profit from the account via by percentage
                    $available = intval($account_asset->available) - intval($amount) * (intval($percentage) / 100);
                    $account_asset->update([
                        'available' => $available,
                    ]);

                    $admin = Role::findByName('admin');
                    $notifyData = array(
                        'user_id' => $admin->id,
                        'subject' => 'Trade Requested By' . $trade->user->name,
                        'description' => "Trade amount is" . $trade->amount,
                        'link' => "/admin/trade/edit/" . $trade->id,
                    );
                    $this->createNotify($notifyData);
                    return $trade;
                });

                return response()->json([
                    'success' => true,
                    'data' => $trade,
                    'message' => "Trade completed successfully",
                    'result' => 'lose',
                    'profit' => $profit,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage(),
                    'data' => [],
                ]);
            }
        }
    }

    // Feature removed by Ko Phyo
    // public function user_trade_update(Request $request) {

    //     $trade = Trade::find($request->id);
    //     $amount = $trade->amount;
    //     $percentage = $trade->coin_interest->percentage;
    //     $interest_amount = $amount + $amount * ($percentage/100);
    //     if($trade) {
    //         try {  
    //             // Update User Account Asset 

    //             $account_asset = CoinUser::where('user_id', $request->user_id)->where('coin_id', $trade->coin_id)->first();
    //             $available = $account_asset->available + $amount * ($percentage/100);

    //             if($account_asset->available >= $amount) {
    //                 $account_asset->update([
    //                     'available' => $available,
    //                     'in_review' => $amount,
    //                     'completed' => $interest_amount,
    //                 ]);

    //              // Update Trade Status 

    //              $trade->update([
    //                     'status' => 'completed',
    //                 ]);

    //                 return response()->json([
    //                     'success' => true,
    //                     'message' => 'Trade Requested successfully',
    //                     'data' => $trade,
    //                     'interest_amount' => $interest_amount,
    //                 ]);
    //             } else {
    //                 return response()->json([
    //                     'success' => false,
    //                     'message' => 'You don\'t have sufficient balance in this coin',
    //                     'data' => [],
    //                 ]);
    //             }

    //         } catch (\Exception $e) {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => $e->getMessage(),
    //                 'data' => [],
    //             ]);
    //         }
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => "Trade not found",
    //             'data' => [],
    //         ]);
    //     }   
    // }

    public function total_amount($symbol)
    {   
        $total_amount = CoinUser::where('coin_id', 1)->where('user_id', request()->authId)->first();
        if($total_amount) {
            $available = $total_amount->available;
            return response()->json([
                'data' => $available,
                'success' => true,
            ]);
        } else {
            return response()->json([
                'data' => [],
                'success' => false,
                'message' => "not available for this user"
            ]);
        }
    }

    function sendNotiViaWebsocket($data)
    {
        Broadcast::channel('generate-keys', function ($user) {
            return true;
        });
        broadcast(new GenerateKeyChannel($data))->toOthers();
    }
}
