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

        $carreraMasVisitada = Visita::select('carrera')
                                    ->groupBy('carrera')
                                    ->orderByRaw('COUNT(*) DESC')
                                    ->limit(1)
                                    ->pluck('carrera')
                                    ->first();
                                    

        $maestrosHombres = Visita::where('tipo_usuario', 'maestro')->where('sexo', 'masculino')->count();
        $maestrosMujeres = Visita::where('tipo_usuario', 'maestro')->where('sexo', 'femenino')->count();

         $alumnosHombres  = Visita::where('tipo_usuario', 'alumno')
         ->where('sexo', 'masculino')
         ->count() + 
         Visita::where('tipo_usuario', 'maestro')
         ->sum('cantidad_hombres');


         $alumnosMujeres = Visita::where('tipo_usuario', 'alumno')
         ->where('sexo', 'femenino')
         ->count() + 
         Visita::where('tipo_usuario', 'maestro')
         ->sum('cantidad_mujeres');


        
        $acervo = Visita::where('servicio', 'acervo')->count();
        $computo = Visita::where('servicio', 'computo')->count();
        $prestamo = Visita::where('servicio', 'prestamo')->count();
        
        

        // Pasar los datos a la vista
        return view('metricas.index', compact('totalVisitas', 'carreraMasVisitada','maestrosHombres','maestrosMujeres',
        'alumnosHombres','alumnosMujeres','acervo','computo','prestamo'
    ));
    }
}
