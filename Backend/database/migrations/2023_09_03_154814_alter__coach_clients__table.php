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
        Schema::table('coach_clients', function (Blueprint $table) {
            // Add foreign key constraint for coach_id
            $table->foreign('coach_id')
                ->references('id')
                ->on('coaches')
                ->onDelete('cascade');

            // Add foreign key constraint for client_id
            $table->foreign('client_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            // Add foreign key constraint for plan_id
            $table->foreign('plan_id')
                ->references('id')
                ->on('coach_plans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coach_clients', function (Blueprint $table) {
            // Drop the foreign key constraints if needed
            $table->dropForeign(['coach_id']);
            $table->dropForeign(['client_id']);
            $table->dropForeign(['plan_id']);
        });
    }
};
