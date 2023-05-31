<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\User;
use App\Notifications\NewUser;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserCreatedNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        /** @var User $admin */
        $admin = User::where('is_admin', true)->first();
        $admin->notify(new NewUser($event->user));
    }
}
