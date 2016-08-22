<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = ['id', 'password', 'roles'];

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function contactos()
    {
        return $this->belongsToMany('App\Models\Contacto');
    }
    public function grupo()
    {
        return $this->belongsTo('App\Models\Grupo');
    }
    public function llamadas()
    {
        return $this->hasMany('App\Models\Llamada');
    }
    public function casos()
    {
        return $this->hasMany('App\Models\Caso');
    }
    public function organismos()
    {
        return $this->belongsToMany('App\Models\Organismo');
    }
    /*
    public function setPasswordAttribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['password'] = bcrypt($value);
        }
    }
    */
    public function setPasswordAttribute($password)
    {
        if(!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
    }
}
