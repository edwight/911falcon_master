<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{
    public $timestamps = false;

    public function motivos()
    {
        return $this->belongsToMany('App\Models\Motivo');
    }
    public function contactos()
    {
        //return $this->hasMany('App\Models\Contacto');
        return $this->belongsToMany('App\Models\Contacto')->withPivot('created_at','updated_at')->withTimestamps();
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function estados(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Estado');
    }
    public function municipios(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Municipio');
    }
    public function parroquias(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Parroquia');
    }
    public function localidades(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Localidad');
    }
}
