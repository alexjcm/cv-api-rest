<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $table = 'veterinarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 'apellido', 'correo', 'nivel_acceso',
        'direccion', 'estado', 'telefono', 'cedula'
    ];
    protected $hidden = ['clave'];

    public function administrador()
    {
        return $this->belongsTo('App\Models\Administrador');
    }
}
