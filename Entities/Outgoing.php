<?php

namespace Modules\Sms\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;

class Outgoing extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['phone', 'sms', 'is_sent'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['sms'];

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
    protected $table = "sms_outgoing";

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
        $this->fields->bigInteger('phone')->html('text');
        $this->fields->string('sms')->html('text');
        $this->fields->tinyInteger('is_sent')->nullable()->default(0)->html('switch');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['phone', 'sms', 'is_sent'];
        $structure['form'] = [
            ['label' => 'Outgoing Phone', 'class' => 'col-span-full', 'fields' => ['sms']],
            ['label' => 'Outgoing Detail', 'class' => 'col-span-full  md:col-span-6 md:pr-2', 'fields' => ['phone', 'is_sent']],
        ];
        $structure['filter'] = ['phone', 'is_sent'];

        return $structure;
    }

}
