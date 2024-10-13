<?php

namespace Modules\Sms\Filament\Resources\ContactResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Sms\Filament\Resources\ContactResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = ContactResource::class;
}
