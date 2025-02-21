<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('latin_name');
            $table->string('phone_number');
            $table->char('gender', 1);
            $table->string('english_level');
            $table->string('khmer_level');
            $table->date('register_date')->nullable();
            $table->date('joining_date');
            $table->date('dob');
            $table->text('current_address');
            $table->string('father_name');
            $table->string('father_job');
            $table->string('mother_name');
            $table->string('mother_job');
            $table->string('student_photo')->nullable();
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
