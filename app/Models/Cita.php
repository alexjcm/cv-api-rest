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

    //Relaciones con otro modelos.
    public function consulta()
    {
        return $this->belongsTo('App\Models\Consulta');
    }

    public function animal()
    {
        return $this->belongsTo('App\Models\Animal');
    }

    public function veterianrio()
    {
        return $this->belongsTo('App\Models\Veterinario');
    }
}
