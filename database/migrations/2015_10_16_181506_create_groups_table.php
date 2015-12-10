<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('school_id')->unsigned()->default(0);
            $table->foreign('school_id')->references('id')->on('schools');
            $table->integer('schoolyear_id')->unsigned()->default(0);
            $table->foreign('schoolyear_id')->references('id')->on('schoolyears');
            $table->integer('semester_id')->unsigned()->default(0);
            $table->foreign('semester_id')->references('id')->on('semesters');
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
        Schema::drop('groups');
    }
}
