<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Signature extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'signature', 'ordering', 'published'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['title'];

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
    protected $table = "sms_signature";

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
        $this->fields->char('title', 255)->html('text');
        $this->fields->string('signature')->html('textarea');
        $this->fields->integer('ordering')->default(10)->html('number');
        $this->fields->tinyInteger('published')->default(true)->html('switch');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['title', 'signature', 'ordering', 'published'];
        $structure['form'] = [
            ['label' => 'Signature Title', 'class' => 'col-span-full', 'fields' => ['title']],
            ['label' => 'Signature Detail', 'class' => 'col-span-full  md:col-span-6 md:pr-2', 'fields' => ['signature', 'ordering', 'published']],
        ];
        $structure['filter'] = ['title', 'signature', 'published'];

        return $structure;
    }
}
