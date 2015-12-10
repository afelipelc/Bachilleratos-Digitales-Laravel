<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nia')->unique();
            $table->string('nombre');
            $table->string('apellidop');
            $table->string('apellidom');
            $table->string('curp');
            $table->enum('sexo', array('h','m'));
            $table->date('nacimiento');
            $table->string('entidadnacimiento');
            $table->string('tiposangre');
            $table->string('domicilio');
            $table->integer('cp');
            $table->string('colonia')->nullable();
            $table->string('localidad')->nullable();
            $table->string('municipio');
            $table->string('estado');
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            $table->string('email')->nullable();
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->foreign('tutor_id')->references('id')->on('tutors');
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
        Schema::drop('students');
    }
}
