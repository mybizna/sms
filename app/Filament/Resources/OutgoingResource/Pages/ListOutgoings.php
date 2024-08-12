<?php

namespace Modules\Sms\Filament\Resources\OutgoingResource\Pages;

use Modules\Sms\Filament\Resources\OutgoingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOutgoings extends ListRecords
{
    protected static string $resource = OutgoingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
