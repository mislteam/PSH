<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Broadcasting\GenerateKeyChannel;
use Illuminate\Support\Facades\Broadcast;

class TradeSuccess extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trade:success';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $data = array(
            "message" => "Trade Successful",
            "to" => "user"
        );

        Broadcast::channel('generate-keys', function ($user) {
            return true; 
        });
        broadcast (new GenerateKeyChannel($data))->toOthers();
        return Command::SUCCESS;
    }
}
