<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->default(0);
            $table->foreign('student_id')->references('id')->on('students');
            $table->enum('tipo', array('acta','migratorio','naturalizacion','sgnaletica'));
            //habrá campos ->nullable()
            $table->string('crip')->nullable();
            $table->string('juzgado')->nullable();
            $table->string('nofolio')->nullable();
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
        Schema::drop('documents');
    }
}
