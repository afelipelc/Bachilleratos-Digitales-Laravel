<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //si es necesario, crear las tablas con localidades y municipios

        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('clave');
            $table->string('direccion');
            $table->string('localidad'); //solo se asociaría la localidad.
            $table->string('municipio');
            $table->string('entidad');
            $table->string('cp');
            
            $table->integer('user_id')->unsigned()->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
        //remove foreign school
        Schema::table('users', function($tx)
        {
            $tx->dropForeign('users_school_id_foreign');
            //$tx->dropColumn('school_id');
        });
        
        Schema::drop('schools');
    }
}
