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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('from_date_to_date')->nullable();
            $table->text('short_description')->nullable();
            $table->string('testimonial_image')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('testimonial_name')->nullable();
            $table->string('testimonial_company')->nullable();
            $table->string('testimonial_position')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
