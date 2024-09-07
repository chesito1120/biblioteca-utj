<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = [
        'tipo_usuario',
        'turno',
        'matricula',
        'servicio',
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
