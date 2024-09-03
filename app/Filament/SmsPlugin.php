<?php

namespace Modules\Sms\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class SmsPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Sms';
    }

    public function getId(): string
    {
        return 'sms';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
