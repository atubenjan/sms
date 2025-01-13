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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable(); // Allowing nullable in case it's optional
            $table->string('Department')->nullable();
            $table->string('Role')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Marital_status')->nullable();
            $table->string('Fathers_name')->nullable();
            $table->string('Mothers_name')->nullable();
            $table->date('Date_of_Birth')->nullable();
            $table->string('Language_Known')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('Phone_number')->nullable();
            $table->string('Email_Address')->nullable();
            $table->date('Date_of_Joining')->nullable();
            $table->string('Work_Experience')->nullable();
            $table->string('Permanent_address')->nullable();
            $table->string('Action')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
