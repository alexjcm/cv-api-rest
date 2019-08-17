<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha_consulta', 'respiracion', 'temperatura', 'pulsacion', 'peso', 'estado_reproductivo',
        'sintomas', 'presunto_diagnostico', 'solicitud_examen', 'tipo_examen', 'hospitalizacion'
    ];

    //Relaciones con otro modelos.
    public function cita()
    {
        return $this->belongsTo('App\Models\Cita');
    }

    public function historia()
    {
        return $this->belongsTo('App\Models\Historia');
    }

    public function veterinario()
    {
        return $this->belongsTo('App\Models\Veterinario');
    }
}
