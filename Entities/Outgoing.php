<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;

use Modules\Core\Classes\Views\ListTable;
use Modules\Core\Classes\Views\FormBuilder;

class Outgoing extends BaseModel
{

    protected $fillable = ['phone', 'sms'];
    public $migrationDependancy = [];
    protected $table = "sms_outgoing";


    public function listTable(){
        // listing view fields
        $fields = new ListTable();

        $fields->name('phone')->type('text')->ordering(true);
        $fields->name('sms')->type('text')->ordering(true);

        return $fields;

    }
    
    public function formBuilder(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('phone')->type('text')->group('w-1/2');
        $fields->name('sms')->type('text')->group('w-1/2');

        return $fields;

    }

    public function filter(){
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('phone')->type('text')->group('w-1/6');
        $fields->name('sms')->type('text')->group('w-1/6');

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
        $table->bigInteger('phone');
        $table->string('sms');
        $table->tinyInteger('is_sent')->nullable()->default(0);
    }

}
