<?php

namespace Modules\Sms\Filament\Resources\OutgoingResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Sms\Filament\Resources\OutgoingResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = OutgoingResource::class;
}
