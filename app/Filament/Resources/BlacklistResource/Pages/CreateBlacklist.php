<?php

namespace Modules\Sms\Filament\Resources\BlacklistResource\Pages;

use Modules\Sms\Filament\Resources\BlacklistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlacklist extends CreateRecord
{
    protected static string $resource = BlacklistResource::class;
}
