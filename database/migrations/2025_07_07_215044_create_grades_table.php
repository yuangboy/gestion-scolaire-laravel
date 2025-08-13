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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('term'); // ex: "Trimestre 1", "Semestre 2"
            $table->float('score'); // note de l'élève
            $table->text('comment')->nullable(); // commentaire du prof
            // $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            // $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
           
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('enrollment_id')->nullable();
            $table->timestamps();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('enrollment_id')->references('id')->on('enrollments')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
