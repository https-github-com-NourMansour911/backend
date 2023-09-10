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
        Schema::create('coach_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booked_session_id');
            $table->text('content')->nullable();
            $table->decimal('rating');
            $table->timestamps();
            $table->foreign('booked_session_id')->references('id')->on('booked_sessions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_reviews');
    }
};
