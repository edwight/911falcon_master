<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuadrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuadrantes', function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('cuadrante', 10);
            $table->string('telefono', 60);
            $table->text('sectores');
            $table->string('localidad',100);
            $table->integer('organismo_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('parroquia_id')->unsigned();
            $table->integer('ubigeom_id')->unsigned();
            $table->integer('ubigeop_id')->unsigned();
        });
        Schema::create('cuadrante_motivo', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('cuadrante_id')->unsigned()->nullable();
            $table->integer('motivo_id')->unsigned()->nullable();
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
        Schema::drop('cuadrantes');
    }
}
