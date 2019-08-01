<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $primaryKey = ['id'];
    protected $fillable = ['nombre', 'apellido', 'correo', 'nivel_acceso']; //lista blanca de atributos
    protected $hidden = ['clave'];
}
