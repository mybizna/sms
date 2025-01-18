<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;
use Modules\Sms\Models\Contact;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;

class Blacklist extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['contact_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_blacklist";

    /**
     * Add relationship to Contact
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->foreignId('contact_id')->nullable()->constrained(table: 'sms_contact')->onDelete('set null');

    }
}
