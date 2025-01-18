<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

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


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->bigInteger('phone');
        $table->string('sms');
        $table->tinyInteger('is_sent')->nullable()->default(0);

    }
}
