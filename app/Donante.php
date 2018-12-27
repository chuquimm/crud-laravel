<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    protected $table = "donante";
    
    protected $fillable = [
        'nombre', 
        'apellido', 
        'correo', 
        'dni', 
        'celular', 
        'fecha', 
        'genero', 
        'sangre', 
        'factor', 
        'lugar', 
        'foto', 
        'password'
    ];

    protected $hidden = [
        'password',
    ];
}
