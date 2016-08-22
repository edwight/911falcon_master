<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
	protected $table = 'direcciones';
	public $timestamps = false;

    public function contactos(){
         return $this->hasMany('App\Models\Contacto');
    }
    public function parroquias(){
         return $this->belongsTo('App\Models\Parroquia');
    }

}
