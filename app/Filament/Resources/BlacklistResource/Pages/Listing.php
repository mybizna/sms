<?php

namespace Modules\Sms\Filament\Resources\BlacklistResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Sms\Filament\Resources\BlacklistResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = BlacklistResource::class;
}
