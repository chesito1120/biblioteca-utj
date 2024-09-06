<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visita extends Model
{
    protected $fillable = [
        'tipo_usuario',
        'turno',
        'matricula',
        'nombre_completo',
        'carrera',
        'grado',
        'grupo',
        'actividad',
        'sexo',
        'cantidad_hombres',
        'cantidad_mujeres',
    ];
}
