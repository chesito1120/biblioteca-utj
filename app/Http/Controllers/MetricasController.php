<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;

class MetricasController extends Controller
{
    public function index()
    {
        // Consulta el total de visitas
        $totalVisitas = Visita::count();

        // Ejemplo: consulta la carrera con más visitas
        $carreraMasVisitada = Visita::select('carrera')
                                    ->groupBy('carrera')
                                    ->orderByRaw('COUNT(*) DESC')
                                    ->limit(1)
                                    ->pluck('carrera')
                                    ->first();

       

        // Pasar los datos a la vista
        return view('metricas.index', compact('totalVisitas', 'carreraMasVisitada',));
    }
}
