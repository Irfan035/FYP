<?php

namespace App\Listeners;

use App\Donor;
use App\Notifications\donationNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admin=Donor::whereHas('sub_categories', function ($query) {
            $query->where('id', 1);
        })->get();

        Notification::send($admin, new donationNotification($event->donor));

    }
}
