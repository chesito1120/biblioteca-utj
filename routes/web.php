<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitasController;

// Ruta para mostrar el formulario de creación
Route::get('/', [VisitasController::class, 'create'])->name('visitas.create');

// Ruta para almacenar una nueva visita
Route::post('/visitas', [VisitasController::class, 'store'])->name('visitas.store');

// Ruta para listar todas las visitas
Route::get('/visitas', [VisitasController::class, 'index'])->name('visitas.index');

// Ruta para mostrar el formulario de edición
Route::get('/visitas/{id}/edit', [VisitasController::class, 'edit'])->name('visitas.edit');

// Ruta para actualizar una visita
Route::put('/visitas/{id}', [VisitasController::class, 'update'])->name('visitas.update');

// Ruta para eliminar una visita
Route::delete('/visitas/{id}', [VisitasController::class, 'destroy'])->name('visitas.destroy');
