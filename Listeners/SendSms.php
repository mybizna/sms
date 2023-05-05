<?php

namespace Modules\Sms\Listeners;

use Modules\Sms\Entities\Queue;

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

        Queue::create([
            'phone' => $contact,
            'sms' => $message,
        ]);

        //TODO: Twillo Afrikastalking

    }
}
