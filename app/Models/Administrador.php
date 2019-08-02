<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //La tabla asociada al modelo.
    protected $table = 'administradores';
    protected $primaryKey = 'id';
    //Los atributos que son asignables, lista blanca de atributos.
    protected $fillable = ['nombre', 'apellido', 'correo', 'nivel_acceso'];
    //Los atributos que deberían estar ocultos para los arrays.
    protected $hidden = ['clave'];

    //Relacion con otro modelo.
    public function veterinarios()
    {
        return $this->hasMany('App\Models\Veterinario');
    }
}
