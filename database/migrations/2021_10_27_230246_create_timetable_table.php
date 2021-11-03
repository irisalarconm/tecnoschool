<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable', function (Blueprint $table) {
            $table->id();
            $table->time('start_hour');
            $table->time('finished_hour');
            $table->string('day', 75);
            $table->unsignedBigInteger('id_course');
            $table->foreign('id_course')->references('id')->on('course');
            $table->unsignedBigInteger('id_subject');
            $table->foreign('id_subject')->references('id')->on('subjects');
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
        Schema::dropIfExists('timetable');
    }
}
