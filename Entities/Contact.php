<?php

namespace Modules\Sms\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Contact extends BaseModel
{

    protected $fillable = ['name', 'phone', 'ordering', 'published'];
    public $migrationDependancy = [];
    protected $table = "sms_contact";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->char('name', 255);
        $table->char('phone', 255);
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}
