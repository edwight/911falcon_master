<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuadrante extends Model
{
   public $timestamps = false;
   public function municipio(){
        return $this->belongsTo('App\Models\Municipio');
    }
    public function contactos(){
        return $this->belongsToMany('App\Models\Contacto')->withTimestamps();
    }
    public function motivos(){
        return $this->belongsToMany('App\Models\Motivo')->withTimestamps();
    }
    public function organismo(){
        return $this->belongsTo('App\Models\Organismo');
    }
}
