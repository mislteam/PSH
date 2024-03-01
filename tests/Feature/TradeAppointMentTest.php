<?php

namespace Tests\Feature;

use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TradeAppointMentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_trade_win()
    {
        $tradeAppointment = (object) [
            'start_time' => '2023-09-25 20:00:00',
            'end_time' => '2023-09-25 21:00:00',
        ];

        $controller = new TestController();
        $response = $controller->trade_appointment($tradeAppointment);
        $response->assertSuccessful();
        $response->assertJson(['trade' => "win"]);
    }
}
