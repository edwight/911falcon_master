<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organismos', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id');
            $table->string('siglas', 60);
            $table->string('nombre', 120);
            $table->string('telefono', 60);
            $table->text('direccion', 60);
            $table->boolean('activo');
            $table->timestamps();
        });

        Schema::create('contacto_organismo', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('contacto_id')->unsigned()->nullable();
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
        });
        Schema::create('estado_organismo', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
        });
        Schema::create('municipio_organismo', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('municipio_id')->unsigned()->nullable();
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
        });
        Schema::create('organismo_parroquia', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('parroquia_id')->unsigned()->nullable();
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
        });
        Schema::create('organismo_localidad', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->integer('localidad_id')->unsigned()->nullable();
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
        });

        Schema::create('organismo_user', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->boolean('activo');
            $table->integer('organismo_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            //$table->foreign('organismo_id')->references('id')->on('organismos');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organismos');
    }
}
