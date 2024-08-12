<?php

namespace Modules\Sms\Filament\Resources\OutgoingResource\Pages;

use Modules\Sms\Filament\Resources\OutgoingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOutgoing extends EditRecord
{
    protected static string $resource = OutgoingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
