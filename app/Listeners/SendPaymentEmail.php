<?php

namespace App\Listeners;

use App\Events\NotifyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPaymentEmail
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
     * @param  NotifyEvent  $event
     * @return void
     */
    public function handle(NotifyEvent $event)
    {
        //
    }
}
