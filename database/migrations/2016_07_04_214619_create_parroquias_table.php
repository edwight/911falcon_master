<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('parroquia', 80);
            $table->integer('estado_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('ubigeom_id')->unsigned();
            $table->integer('ubigeop_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parroquias');
    }
}
