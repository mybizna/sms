<?php

namespace Modules\Sms\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Sms\Models\Whitelist;

class WhitelistResource extends BaseResource
{
    protected static ?string $model = Whitelist::class;

    protected static ?string $slug = 'sms/whitelist';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
