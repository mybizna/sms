<?php

namespace Modules\Sms\Entities;

use Modules\Base\Entities\BaseModel;

class Outgoing extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['phone', 'sms', 'is_sent'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_outgoing";

}
