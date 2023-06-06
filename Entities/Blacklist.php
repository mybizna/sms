<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Base\Classes\Migration;

class Blacklist extends BaseModel
{

    protected $fillable = ['contact_id'];
    public $migrationDependancy = ['sms_contact'];
    protected $table = "sms_blacklist";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->foreignId('contact_id');
    }

    public function post_migration(Blueprint $table)
    {
        Migration::addForeign($table, 'sms_contact', 'contact_id');
    }
}
