<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('clients')->middleware(['auth', 'client'])->name('clients.')->group(function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('clients', ClientController::class);
    Route::resource('sedes', SedeController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('entrenadors', EntrenadorController::class);
    Route::resource('entrenamientos', EntrenamientoController::class);
    Route::resource('reservas', ReservaController::class);
    Route::resource('users', UserController::class);
});

Route::prefix('entrenadors')->middleware(['auth', 'entrenador'])->name('entrenadors.')->group(function () {
    Route::get('/dashboard', function () {
        return view('entrenadors.dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
