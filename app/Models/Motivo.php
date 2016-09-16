<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
	protected $table = 'motivos';
	public $timestamps = false;

	public function __toString()
    {
      return $this->value;
    }
    
    public function toString()
    {
      return $this->value;
    }

    public function organismos()
    {
      return $this->belongsToMany('App\Models\Organismo');
    }
    public function contactos()
    {
      return $this->hasMany('App\Models\Contacto');
    }
    public function estados()
    {
        return $this->belongsToMany('App\Models\Estado');
    }
    public function municipios()
    {
        return $this->belongsToMany('App\Models\Municipio');
    }
    public function parroquias()
    {
        return $this->belongsToMany('App\Models\Parroquia');
    }
    public function localidades()
    {
        return $this->belongsToMany('App\Models\Localidad');
    }
    public function Cuadrantes(){
        return $this->belongsToMany('App\Models\Cuadrante')->withTimestamps();
    }

}
