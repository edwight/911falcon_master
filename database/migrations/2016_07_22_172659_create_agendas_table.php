<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('agendas', function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('nombre', 60);
            $table->string('telefono1', 60);
            $table->integer('parroquia_id')->unsigned();
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
