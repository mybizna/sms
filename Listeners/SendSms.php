<?php

namespace Modules\Sms\Listeners;


class SendSms
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
        $message = $event->message;
        $contact = $event->contact;

        //TODO: Twillo
        //TODO: Afrikastalking

       

    }
}
