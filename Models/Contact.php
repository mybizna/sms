<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;

class Contact extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'phone', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_contact";

}
