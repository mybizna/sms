<?php

namespace Modules\Sms\Filament\Resources\BlacklistResource\Pages;

use Modules\Sms\Filament\Resources\BlacklistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlacklists extends ListRecords
{
    protected static string $resource = BlacklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
