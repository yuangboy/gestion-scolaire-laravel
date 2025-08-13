<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('student_id')->constrained()->onDelete('cascade');
            // $table->foreignId('class_id')->constrained('school_classes')->onDelete('cascade');
          $table->unsignedBigInteger('student_id')->nullable();
          $table->unsignedBigInteger('class_id')->nullable();
          $table->string('school_year');
          $table->timestamps();
          $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
          $table->foreign('class_id')->references('id')->on('school_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
