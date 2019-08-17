<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table = 'historias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha_creacion'
    ];

    //Relacion con otro modelo.
    public function animal()
    {
        //pertenece a
        return $this->belongsTo('App\Models\Animal');
    }

    public function consultas()
    {
        return $this->hasMany('App\Models\Consulta');
    }
}
