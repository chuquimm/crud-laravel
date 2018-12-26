<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
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
}
