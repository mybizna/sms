<?php

namespace Modules\Sms\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Signature extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'signature', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "sms_signature";


    public function migration(Blueprint $table): void
    {


        $table->string('title', 255);
        $table->text('signature');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);

    }
}
