<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;

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

}
