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
            $table->string('student_number')->unique(); // Unique identifier assigned by the university
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_number', 11);
            $table->string('email');
            $table->text('address');
            $table->string('acadprog_id');
            $table->integer('year_level'); // Current year level of the student
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
