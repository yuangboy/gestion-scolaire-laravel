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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth');
            // $table->foreignId('class_id')->constrained('school_classes')->onDelete('set null')->nullable();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('guardian_id')->nullable()->constrained('users')->onDelete('set null');
         
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('guardian_id')->nullable();
            $table->timestamps();

            $table->foreign('class_id')->references('id')->on('school_classes')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('guardian_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
