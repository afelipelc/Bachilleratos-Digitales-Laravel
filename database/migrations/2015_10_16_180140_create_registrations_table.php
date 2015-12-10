<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Cedula
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->default(0);
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('school_id')->unsigned()->default(0);
            $table->foreign('school_id')->references('id')->on('schools');
            $table->integer('semester_id')->unsigned()->default(0);
            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->integer('group_id')->unsigned()->default(0);
            $table->foreign('group_id')->references('id')->on('groups');
            $table->integer('schoolyear_id')->unsigned()->default(0);
            $table->foreign('schoolyear_id')->references('id')->on('schoolyears');
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
        Schema::drop('inscriptions');
    }
}
