<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('names', 125);
            $table->unsignedBigInteger('id_teacher');
            $table->foreign('id_teacher')->references('id')->on('teachers');
            $table->unsignedBigInteger('id_student');
            $table->foreign('id_student')->references('id')->on('students');
            $table->string('link', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
