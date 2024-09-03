<?php

namespace Modules\Sms\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Core\Events\SendMedium;
use Modules\Sms\Listeners\SendSms;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SendMedium::class => [
            SendSms::class,
        ],
    ];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     *
     * @return void
     */
    protected function configureEmailVerification(): void
    {

    }

}
