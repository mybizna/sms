<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;

class Whitelist extends BaseModel
{

    /**
     * The fields that can be filled
     * @var array<string>
     */
    protected $fillable = ['contact_id'];

    /**
     * List of tables names that are need in this model during migration.
     * @var array<string>
     */
    public array $migrationDependancy = ['sms_contact'];

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = "sms_whitelist";

    public function  listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('contact_id')->type('recordpicker')->table('sms_contact')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('contact_id')->type('recordpicker')->table('sms_contact')->group('w-1/2');

        return $fields;

    }

    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('contact_id')->type('recordpicker')->table('sms_contact')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
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
