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

}
