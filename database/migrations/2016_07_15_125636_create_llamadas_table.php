<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLlamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('llamadas',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->integer('falsas')->unsigned();
            $table->integer('quejas')->unsigned();
            $table->integer('sabotaje')->unsigned();
            $table->integer('registradas')->unsigned();
            $table->integer('informativas')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();  
            //$table->text('descripcion'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('llamadas');
    }
}
