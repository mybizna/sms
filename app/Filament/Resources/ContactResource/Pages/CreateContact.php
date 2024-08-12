<?php

namespace Modules\Sms\Filament\Resources\ContactResource\Pages;

use Modules\Sms\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;
}
