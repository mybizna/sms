<?php

namespace Modules\Sms\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Sms\Models\Contact;

class ContactResource extends BaseResource
{
    protected static ?string $model = Contact::class;

    protected static ?string $slug = 'sms/contact';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
