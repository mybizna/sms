<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Base\Classes\Migration;

use Modules\Core\Classes\Views\ListTable;
use Modules\Core\Classes\Views\FormBuilder;

class Blacklist extends BaseModel
{

    protected $fillable = ['contact_id'];
    public $migrationDependancy = ['sms_contact'];
    protected $table = "sms_blacklist";


    public function listTable(){
        // listing view fields
        $fields = new ListTable();

        $fields->name('contact_id')->type('recordpicker')->table('sms_contact')->ordering(true);

        return $fields;

    }
    
    public function formBuilder(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('contact_id')->type('recordpicker')->table('sms_contact')->group('w-1/2');

        return $fields;

    }

    public function filter(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('contact_id')->type('recordpicker')->table('sms_contact')->group('w-1/6');

        return $fields;

    }
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
