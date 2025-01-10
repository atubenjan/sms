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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->string('student_class');
            $table->string('student_religion');
            $table->string('student_gender');
            $table->string('student_guardian');
            $table->string('student_admission_no');
            $table->string('student_dob');
            $table->string('student_blood_group');
            $table->string('student_admission_date');
            $table->string('student_roll_no');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_address');
            $table->string('student_photo');
            $table->string('student_status');
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
