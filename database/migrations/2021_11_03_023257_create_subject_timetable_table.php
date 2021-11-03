<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_timetable', function (Blueprint $table) {
            $table->unsignedBigInteger('id_subject');
            $table->foreign('id_subject')->references('id')->on('subjects');
            $table->unsignedBigInteger('id_timetable');
            $table->foreign('id_timetable')->references('id')->on('timetable');
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
        Schema::dropIfExists('subject_timetable');
    }
}
