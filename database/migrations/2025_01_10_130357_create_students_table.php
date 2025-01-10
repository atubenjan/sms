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
            $table->string('academic_year');
            $table->string('admission_no');
            $table->string('admission_date');
            $table->string('roll_no');
            $table->string('student_status');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('class');
            $table->string('section');
            $table->string('gender');
            $table->string('dob');
            $table->string('blood_group');
            $table->string('religion');
            $table->string('house');
            $table->string('national)');
            $table->string('student_photo');
            $table->string('father_name');
            $table->string('father_email');
            $table->string('father_phone');
            $table->string('father_occuption');
            $table->string('mother_name');
            $table->string('mother_email');
            $table->string('mother_phone');
            $table->string('mother_occuption');
            $table->string('guardian_name');
            $table->string('guardian_email');
            $table->string('guardian_phone');
            $table->string('guardian_occuption');
            $table->string('guardian_relation');
            $table->string('guardian_address');
            $table->string('medical_condition_document');
            $table->string('previous_school');
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
