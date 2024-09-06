<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitasController;
use App\Http\Controllers\MetricasController;


// crear forulario
Route::get('/', [VisitasController::class, 'create'])->name('visitas.create');
// index
Route::get('/visitas', [VisitasController::class, 'index'])->name('visitas.index');

// guardar
Route::post('/visitas', [VisitasController::class, 'store'])->name('visitas.store');

// Ruta para mostrar métricas
Route::get('/metricas', [MetricasController::class, 'index'])->name('metricas.index');