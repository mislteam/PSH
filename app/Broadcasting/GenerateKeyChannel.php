<?php 

namespace App\Broadcasting;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GenerateKeyChannel implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function broadcastOn()
    {
        return new Channel('generate-keys');
    }

    public function broadcastAs()
    {
        return 'generate-key';
    }

    public function broadcastWith()
    {   
        return [
            'data' => $this->data,
        ];
    }
}
