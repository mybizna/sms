<?php

namespace Modules\Sms\Filament\Resources\SignatureResource\Pages;

use Modules\Sms\Filament\Resources\SignatureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSignatures extends ListRecords
{
    protected static string $resource = SignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
