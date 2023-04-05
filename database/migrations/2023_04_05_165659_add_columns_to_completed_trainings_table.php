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
        Schema::table('completed_trainings', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('training_id');
            $table->string('why');
            $table->string('teach');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('completed_trainings', function (Blueprint $table) {
            //
        });
    }
};
