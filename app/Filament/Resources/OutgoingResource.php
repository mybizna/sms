<?php

namespace Modules\Sms\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Sms\Models\Outgoing;

class OutgoingResource extends BaseResource
{
    protected static ?string $model = Outgoing::class;

    protected static ?string $slug = 'sms/outgoing';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
