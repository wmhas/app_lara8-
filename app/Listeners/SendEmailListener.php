<?php

namespace App\Listeners;

use App\Event\UserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailListener
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
     * @param  \App\Event\UserCreatedEvent  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {

        print_r($event->email);
        //We can send a mail from here
        echo ".. From Listeners - EVENT HANDLING";
        exit;
    }
}
