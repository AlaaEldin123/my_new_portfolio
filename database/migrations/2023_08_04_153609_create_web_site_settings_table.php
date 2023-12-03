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
        Schema::create('web_site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('alt_logo')->nullable();
            $table->string('copy_right')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('mete_author')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->longText('google_analysis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_site_settings');
    }
};
