<?php

namespace Modules\Sms\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;

class Whitelist extends BaseModel
{

    protected $fillable = ['contact_id'];
    public $migrationDependancy = ['sms_contact'];
    protected $table = "sms_whitelist";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('contact_id');
    }
    public function post_migration(Blueprint $table)
    {
        if (Migration::checkKeyExist('sms_whitelist', 'contact_id')) {
            $table->foreign('contact_id')->references('id')->on('sms_contact')->nullOnDelete();
        }
    }
}
