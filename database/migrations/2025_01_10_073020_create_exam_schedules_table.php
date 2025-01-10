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
        Schema::create('exam_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('section');
            $table->string('exam_name');
            $table->date('exam_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('duration');
            $table->string('subject');
            $table->string('max_mark');
            $table->string('min_mark');
            $table->string('room_no');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_schedules');
    }
};
