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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('address');
            // $table->foreignId('subject_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
          
            $table->unsignedBigInteger('subject_id')->nullable();
           $table->unsignedBigInteger('user_id')->nullable();
           $table->timestamps();
           $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
