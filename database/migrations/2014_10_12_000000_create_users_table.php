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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('age')->nullable();
            $table->unsignedBigInteger('weight')->nullable();
            $table->unsignedBigInteger('height')->nullable();
            $table->string('country')->nullable();
            $table->string('governorate')->nullable();
            $table->string('img')->nullable();
            $table->string('phone')->nullable();
            $table->string('username')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};