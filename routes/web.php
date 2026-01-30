<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\PlanController;

Route::get('/', fn() => redirect()->route('homepage.index')); // Redirige la raíz a la lista de clientes
Route::resource('clients', ClientController::class); // Rutas RESTful para el recurso Client 
Route::resource('entrenadores', EntrenadorController::class); // Rutas RESTful para el recurso Entrenador
Route::resource('sedes', SedeController::class); // Rutas RESTful para el recurso Sede
Route::resource('entrenamientos', EntrenamientoController::class); // Rutas RESTful para el recurso Entrenamiento
Route::resource('planes', PlanController::class); // Rutas RESTful para el recurso Plan