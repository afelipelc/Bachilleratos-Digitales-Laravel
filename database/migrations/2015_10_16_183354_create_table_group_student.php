<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGroupStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned()->index()->default(0);
            $table->foreign('group_id')->references('id')->on('groups');
            $table->integer('student_id')->unsigned()->index()->default(0);
            $table->foreign('student_id')->references('id')->on('students');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('group_student');
    }
}
