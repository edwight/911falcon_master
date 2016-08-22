<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuadrante extends Model
{
   public $timestamps = false;
   public function municipio(){
        return $this->belongsTo('App\Models\Municipio');
    }
}
