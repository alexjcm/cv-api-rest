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

    //Relacion con otro modelo.
    public function administrador()
    {
        //perteneca a
        return $this->belongsTo('App\Models\Administrador');
    }

    public function consultas()
    {
        //tiene muchas
        return $this->hasMany('App\Models\Consulta');
    }
}
