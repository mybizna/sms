<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;
use Modules\Sms\Models\Contact;

class Whitelist extends BaseModel
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
    protected $table = "sms_whitelist";

    /**
     * Add relationship to Contact
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

}
