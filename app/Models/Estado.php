<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	public $timestamps = false;
	
    public function contactos()
    {
        return $this->hasMany('App\Models\Contacto');
    }
    public function municipios()
    {
        return $this->hasMany('App\Models\Municipio');
    }
    public function organismos(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Organismo');
    }
    public function motivos(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Motivo');
    }
}
