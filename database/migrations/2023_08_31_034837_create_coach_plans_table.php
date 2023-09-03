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
        Schema::create('coach_plans', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('coach_id');
            $table->string('plan_name');
            $table->text('description');
            $table->integer('discount')->nullable();
            $table->bigInteger('price');
            $table->timestamps();
            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_plans');
    }
};
