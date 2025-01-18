<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Gateway extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'url', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_gateway";


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('name');
        $table->string('url');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);

    }
}
