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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id');
            $table->string('teacher_first_name');
            $table->string('teacher_last_name');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('teacher_emmergency_contact');
            $table->string('teacher_joining_date');
            $table->string('teacher_parmanent_address');
            $table->string('teacher_present_address');
            $table->string('teacher_gender');
            $table->string('teacher_religion');
            $table->string('teacher_dob');
            $table->string('teacher_marital_status');
            $table->string('teacher_basicsalary');
            $table->string('teacher_qualification');
            $table->string('teacher_experience');
            $table->string('teacher_subject');
            $table->string('teacher_designation');
            $table->string('teacher_department');
            $table->string('teacher_photo');
            $table->string('teacher_status');
            $table->string('teacher_profession');
            $table->string('teacher_nid');
            $table->string('teacher_documents');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
