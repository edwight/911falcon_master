<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('codigo',60);
            $table->string('nombre',120);
            $table->string('tipo',120)->nullable();
            $table->string('matricula')->nullable();
            $table->integer('organismo_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('parroquia_id')->unsigned();
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
        Schema::drop('vehiculos');
    }
}
