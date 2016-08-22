<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $timestamps = false;
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
