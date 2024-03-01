<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Broadcasting\GenerateKeyChannel;
use Illuminate\Support\Facades\Broadcast;

class MakeNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:noti';

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
            "message" => "Hello World",
            "to" => "admin",
            "from" => "min thet paing",
            "href" => "/admin/trade/edit/44"
        );

        Broadcast::channel('generate-keys', function ($user) {
            return true; 
        });
        broadcast (new GenerateKeyChannel($data))->toOthers();
        return  Command::SUCCESS;
    }
}
