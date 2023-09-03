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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country')->nullable();
            $table->string('governorate')->nullable();
            $table->string('phone')->nullable();
            $table->string('img')->nullable();
            $table->string('username')->unique();
            $table->unsignedInteger('expertise');
            $table->unsignedBigInteger('completed_clients');
            $table->text('bio');
            $table->enum('status', ['active', 'inactive']); // IF INACTIVE, COACH CANNOT have clients
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
