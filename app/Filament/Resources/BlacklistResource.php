<?php

namespace Modules\Sms\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Sms\Models\Blacklist;

class BlacklistResource extends BaseResource
{
    protected static ?string $model = Blacklist::class;

    protected static ?string $slug = 'sms/blacklist';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
