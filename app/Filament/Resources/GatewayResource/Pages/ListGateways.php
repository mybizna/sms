<?php

namespace Modules\Sms\Filament\Resources\GatewayResource\Pages;

use Modules\Sms\Filament\Resources\GatewayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGateways extends ListRecords
{
    protected static string $resource = GatewayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
