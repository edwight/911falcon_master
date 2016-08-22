<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('localidades', function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('localidad', 60);
            $table->integer('municipio_id')->unsigned()->nullable();
            $table->integer('parroquia_id')->unsigned()->nullable();
            $table->integer('ubigeom_id')->unsigned();
            $table->integer('ubigeop_id')->unsigned();
            $table->integer('ubigeol_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('localidades');
    }
}
