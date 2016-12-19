<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\User;

class UserRegistered
{
    use InteractsWithSockets, SerializesModels;

    public $user;
    public $realPassword;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, string $realPassword)
    {
        $this->user         = $user;
        $this->realPassword = $realPassword;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
