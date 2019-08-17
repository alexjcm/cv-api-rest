<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 'raza', 'especie', 'color',
        'fecha_nacimiento',  'edad', 'sexo'
    ];

    //Relaciones con otros modelos.
    public function cliente()
    {
        //pertenece a
        return $this->belongsTo('App\Models\Cliente');
    }

    public function citas()
    {
        return $this->hasMany('App\Models\Cita');
    }

    public function historia()
    {
        return $this->hasOne('App\Models\Historia');
    }
}
