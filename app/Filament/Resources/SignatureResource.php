<?php

namespace Modules\Sms\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Sms\Models\Signature;

class SignatureResource extends BaseResource
{
    protected static ?string $model = Signature::class;

    protected static ?string $slug = 'sms/signature';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
