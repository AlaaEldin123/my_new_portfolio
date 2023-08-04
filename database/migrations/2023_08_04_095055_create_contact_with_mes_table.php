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
        Schema::create('contact_with_mes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('name')->nullable();
            $table->string('position_job')->nullable();
            $table->string('short_description')->nullable();
            $table->string('first_Phone')->nullable();
            $table->string('second_Phone')->nullable();
            $table->string('first_email')->nullable();
            $table->string('second_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_with_mes');
    }
};
