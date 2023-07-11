<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;

class Outgoing extends BaseModel
{

    protected $fillable = ['phone', 'sms'];
    public $migrationDependancy = [];
    protected $table = "sms_outgoing";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->bigInteger('phone');
        $table->string('sms');
        $table->tinyInteger('is_sent')->nullable()->default(0);
    }

}
