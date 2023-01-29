<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Gateway extends BaseModel
{

    protected $fillable = ['name', 'url', 'ordering', 'published'];
    public $migrationDependancy = [];
    protected $table = "sms_gateway";

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
        $table->string('url');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}
