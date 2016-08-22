<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //public $timestamps = false;

   	public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function motivo(){
        return $this->belongsTo('App\Models\Motivo');
    }
    public function direccion(){
        return $this->belongsTo('App\Models\Direccion');
    }
    public function organismos(){
        //return $this->belongsTo('App\Models\Organismo');
        return $this->belongsToMany('App\Models\Organismo')->withTimestamps();
    }
    public function municipio(){
        return $this->belongsTo('App\Models\Municipio');
    }
     public function parroquia(){
        return $this->belongsTo('App\Models\parroquia');
    }
    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }
}
