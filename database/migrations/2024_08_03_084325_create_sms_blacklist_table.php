<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sms_blacklist', function (Blueprint $table) {
            $table->id();

            $table->foreignId('contact_id')->constrained('sms_contact')->onDelete('cascade')->nullable()->index('contact_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_blacklist');
    }
};
