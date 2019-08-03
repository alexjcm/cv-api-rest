<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 'apellido', 'cedula',
        'telefono', 'direccion', 'correo'
    ];

    //Relacion con otro modelo.
    public function animales()
    {
        return $this->hasMany('App\Models\Animal');
    }
}
