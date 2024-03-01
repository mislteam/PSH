<?php

namespace App\Http\Controllers\Test;

use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function trade_appointment($trade_app) {
        $current = new DateTime();

        if($trade_app->start_time <= $current && $current <= $trade_app->end_time ) {
            return response()->json([
                'trade' => "win",
            ]);
        } else  {
            return response()->json([
                'trade' => "lose",
            ]);
        }
    }
}
