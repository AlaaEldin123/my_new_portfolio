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
        Schema::create('my_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('view_title')->nullable();
            $table->string('inside_title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('view_image')->nullable();
            $table->string('view_alt_image')->nullable();
            $table->string('inside_image')->nullable();
            $table->string('inside_alt_image')->nullable();
            $table->string('link')->nullable();
            $table->string('visibility')->nullable();
            $table->string('small_inside_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_portfolios');
    }
};
