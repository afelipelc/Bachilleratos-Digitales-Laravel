<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('role', array('admin','director','profesor'));
            $table->integer('school_id')->unsigned()->nullable(); //a que escuela
            //$table->foreign('school_id')->references('id')->on('schools')->onDelete('set null'); //movido a alter_users_table
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        //primero debe existir un registro de usuario y 1 de escuela
        
        //el docente es un usuario, no es necesario crear una tabla docente
        //El director de escuela es un usuario
        //el grupo esta asociado a la escuela, el turno se convierte en un campo de grupo.
        //Falta asociacion grupo-alumo
        //el ciclo escolar se desvincula de escuela
        //la calificacion va enlazada con la materia
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
