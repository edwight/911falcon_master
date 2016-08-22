<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function(Blueprint $table){
            $table->Increments('id')->unsigned();
            $table->string('municipio', 60);
            $table->string('capital', 60);
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('levelzoom');
            $table->integer('estado_id')->unsigned();
            $table->integer('ubigeom_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('municipios');
    }
}
