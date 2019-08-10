<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha_cita', 'hora', 'observaciones'
    ];

    //Relacion con otro modelo.
    public function consulta()
    {
        return $this->belongsTo('App\Models\Consulta');
    }

    public function animal()
    {
        return $this->belongsTo('App\Models\Animal');
    }
}
