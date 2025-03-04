<?php
namespace Modules\Sms\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Models\BaseModel;
use Modules\Sms\Models\Contact;

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

        $table->unsignedBigInteger('contact_id')->nullable();
    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('contact_id')->references('id')->on('sms_contact')->onDelete('set null');
    }
}
