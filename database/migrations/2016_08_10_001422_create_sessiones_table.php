<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessiones',function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->text('payload');
            $table->integer('duraccion')->unsigned();
            $table->integer('startTime')->unsigned();
            $table->integer('endTime')->unsigned();
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
        Schema::drop('sessiones');
    }
}
