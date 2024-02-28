<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Contact extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'phone', 'ordering', 'published'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['name'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_contact";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->char('name', 255)->html('text');
        $this->fields->char('phone', 255)->html('text');
        $this->fields->integer('ordering')->default(10)->html('number');
        $this->fields->tinyInteger('published')->default(true)->html('switch');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['name', 'phone', 'published'];
        $structure['form'] = [
            ['label' => 'Name', 'class' => 'col-span-full', 'fields' => ['name']],
            ['label' => 'Contact', 'class' => 'col-span-full  md:col-span-6 md:pr-2', 'fields' => ['phone', 'ordering', 'published']],
        ];
        $structure['filter'] = ['name', 'phone', 'published'];

        return $structure;
    }
}
