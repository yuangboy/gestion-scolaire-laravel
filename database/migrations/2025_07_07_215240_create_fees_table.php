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
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->decimal('amount', 10, 2);
            $table->date('due_date');
            $table->string('school_year');
            // $table->foreignId('class_id')->constrained('school_classes')->onDelete('cascade');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('fees');
    }
};
