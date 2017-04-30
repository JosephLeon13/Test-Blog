<?php

namespace App\Events;

use App\User;
use App\Comment;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CommentSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    /**
     * Message details
     *
     * @var Message
     */
    public $comment;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Comment $comment, User $user)
    {
        $this->user = $user;

        $this->comment = $comment;
    }


  
    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('comment');
    }

 
    
}
