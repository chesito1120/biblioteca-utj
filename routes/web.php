<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitasController;

Route::get('/', [VisitasController::class, 'create'])->name('formulario.visitas');
Route::post('/visitas', [VisitasController::class, 'store'])->name('visitas.store');




