<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->string('cedula', 10);
            $table->string('telefono', 12);
            $table->boolean('status');
            //$table->enum('type', ['171', 'siipol']);
            //$table->Integer('llamada_id')->unsigned()->nullable();
            //$table->Integer('organismo_id')->unsigned()->nullable();
            $table->Integer('estado_id')->unsigned()->nullable();
            $table->Integer('municipio_id')->unsigned();
            $table->Integer('parroquia_id')->unsigned();
            $table->Integer('localidad_id')->unsigned()->nullable();
            $table->Integer('direccion_id')->unsigned();
            $table->Integer('motivo_id')->unsigned();
            //$table->Integer('cuadrante_id')->unsigned()->nullable();
            //$table->Integer('user_id')->unsigned();
            $table->dateTime('fecha_at');
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
        Schema::drop('contactos');
    }
}
