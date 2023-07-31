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
        Schema::create('pricing_package_details', function (Blueprint $table) {
            $table->id();
            $table->string('package_id')->nullable();
            $table->string('package_title')->nullable();
            $table->text('package_subtitle')->nullable();
            $table->string('package_short_description')->nullable();
            $table->string('package_feature')->nullable();
            $table->string('package_feature_side')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_package_details');
    }
};
