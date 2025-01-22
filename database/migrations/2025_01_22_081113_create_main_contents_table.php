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
        Schema::create('main_contents', function (Blueprint $table) {
            $table->ulid('id') -> primary();
            $table->string('name');
            $table->string('occupation');
            $table->string('email');
            $table->string('telephone_number');
            $table->string('logo');
            $table->string('profile_photo');
            $table->longText('description');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_contents');
    }
};
