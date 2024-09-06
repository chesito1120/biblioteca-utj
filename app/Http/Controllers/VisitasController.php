<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // Obtener todas las visitas
     $visitas = Visita::all();

     // Retornar la vista con los datos de visitas
     return view('visitas.index', compact('visitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validación para ambos tipos de usuarios
    $rules = [
        'nombre_completo' => 'required|string|max:255',
        'tipo_usuario' => 'required|in:maestro,alumno',
        'carrera' => 'required|string',
        'grado' => 'required|string',
        'grupo' => 'required|string',
        'turno' => 'required|string',
        'actividad' => 'required|string',
    ];

    // alumnes
    if ($request->tipo_usuario === 'alumno') {
        $rules['sexo'] = 'required|in:masculino,femenino,otro';
        $rules['matricula'] = 'nullable|string|max:255'; 
    }

    // maestros
    if ($request->tipo_usuario === 'maestro') {
        $rules['sexo'] = 'required|in:masculino,femenino,otro';
        $rules['cantidad_hombres'] = 'required|integer';
        $rules['cantidad_mujeres'] = 'required|integer';
    }
    $validatedData = $request->validate($rules);


    Visita::create($validatedData);

    return redirect()->route('visitas.create')->with('success', 'Visita registrada correctamente.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
