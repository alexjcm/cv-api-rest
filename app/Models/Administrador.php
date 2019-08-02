<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'administradores';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'apellido', 'correo', 'nivel_acceso']; //lista blanca de atributos
    protected $hidden = ['clave'];
}
