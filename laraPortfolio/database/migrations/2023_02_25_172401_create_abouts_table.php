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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('degree')->nullable();
            $table->string('city')->nullable();
            $table->string('freelance')->nullable();
            $table->string('website_link')->nullable();
            $table->string('favicon')->nullable()->default(0);
            $table->string('cv_file')->nullable();
            $table->Integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
