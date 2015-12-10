<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('partials', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('schoolyear_id')->unsigned()->default(0);
                $table->foreign('schoolyear_id')->references('id')->on('schoolyears');
                $table->integer('periodo')->default(1);
                $table->integer('parcial');
                $table->date('inicio');
                $table->date('fin');

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
        Schema::drop('partials');
    }
}
