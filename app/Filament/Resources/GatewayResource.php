<?php

namespace Modules\Sms\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Sms\Models\Gateway;

class GatewayResource extends BaseResource
{
    protected static ?string $model = Gateway::class;

    protected static ?string $slug = 'sms/gateway';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
