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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country')->nullable();
            $table->string('img')->default('https://techtitans.puiux.org/Images/default.png');
            $table->string('category')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('username')->unique();
            $table->unsignedInteger('expertise')->default(0);
            $table->unsignedBigInteger('completed_clients')->default(0);
            $table->unsignedBigInteger('active_clients')->default(0);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->longText('bio')->nullable();
            $table->rememberToken();
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
