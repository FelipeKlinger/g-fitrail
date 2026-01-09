<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::resource('clients', ClientController::class); // Rutas RESTful para el recurso Client 
Route::get('/', fn()=> redirect()->route('clients.index')); // Redirige la raíz a la lista de clientes
