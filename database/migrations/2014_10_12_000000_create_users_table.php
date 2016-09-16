<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 60);
            $table->string('slug', 60);
            $table->string('email',60)->unique();
            $table->string('phone', 12);
            $table->string('foto', 100)->default('/imgs/users/avatar.png');
            $table->boolean('sexo');
            $table->boolean('status');
            $table->date('fecha_nacimiento');
            $table->enum('roles', ['operador', 'despachador','supervisor','admin']);
            //$table->integer('role');
            $table->string('password', 255);
            $table->integer('grupo_id')->unsigned();
            $table->integer('organismo_id')->unsigned();
            //$table->Integer('llamada_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();  
        });
        Schema::create('contacto_user', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->Increments('id')->unsigned();
            $table->integer('contacto_id')->unsigned()->nullable(); 
            //$table->foreign('contacto_id')->references('id')->on('contactos');
            $table->integer('user_id')->unsigned()->nullable();
            //$table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('users');
    }
}
