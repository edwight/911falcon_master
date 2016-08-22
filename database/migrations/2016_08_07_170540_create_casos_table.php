<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->integer('efectivos')->unsigned();
            $table->integer('sinefecto')->unsigned();
            $table->integer('noatendida')->unsigned();
            $table->integer('repetida')->unsigned();
            $table->integer('apoyo')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::drop('casos');
    }
}
