<?php

namespace App\Listeners;

use App\Events\NewReservationEvent;
use App\Mail\ReservationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendReservationEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  NewReservationEvent  $event
     * @return void
     */
    public function handle(NewReservationEvent $event)
    {
        Mail::to('test@gmail.com')->send(new ReservationMail($event->data));
    }
}
