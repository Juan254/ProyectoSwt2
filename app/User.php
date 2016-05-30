<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'usuario', 'contraseña', 'telefono' , 'numero_licencia', 'direccion', 'horas_acumuladas'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    public function bono()
    {
        return $this->hasOne('App\bono');
    }

    public function solicitud_renta(){
        return $this->hasOne('App\solicitud_renta');
    }
}
