<?php

namespace Modules\Sms\Filament\Resources\OutgoingResource\Pages;

use Modules\Sms\Filament\Resources\OutgoingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOutgoing extends CreateRecord
{
    protected static string $resource = OutgoingResource::class;
}
