<?php

namespace Modules\Sms\Entities;

use Modules\Base\Entities\BaseModel;

class Gateway extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'url', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_gateway";

}
