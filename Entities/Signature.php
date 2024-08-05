<?php

namespace Modules\Sms\Entities;

use Modules\Base\Entities\BaseModel;

class Signature extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'signature', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_signature";

}
