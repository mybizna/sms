<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;

class Queue extends BaseModel
{

    protected $fillable = ['phone', 'sms'];
    public $migrationDependancy = [];
    protected $table = "sms_queue";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('phone');
        $table->string('sms');
    }

}
