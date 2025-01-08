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
        Schema::create('promote__students', function (Blueprint $table) {
            $table->id();
            $table->string('class_id');
            $table->string('section_id');
            $table->string('promote_section');
            $table->string('promote_class');
            $table->string('promote_session');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promote__students');
    }
};
