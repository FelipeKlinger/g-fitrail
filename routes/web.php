<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SedeController;
use App\Models\Client;
use App\Models\Entrenador;
use App\Models\Entrenamiento;
use App\Models\Plan;
use App\Models\Reserva;
use App\Models\Sede;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('clients')->middleware(['auth', 'client'])->name('clients.')->group(function () {
    Route::get('/dashboard', function () {
        return view('clients.dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        $totalClients = Client::count();
        $totalEntrenadores = Entrenador::count();
        $totalSedes = Sede::count();
        $totalPlanes = Plan::count();
        $totalEntrenamientos = Entrenamiento::count();
        $totalReservas = Reserva::count();
        $reservasHoy = Reserva::whereDate('fecha_reserva', now()->toDateString())->count();

        $ultimasReservas = Reserva::with(['cliente', 'entrenamiento'])
            ->latest()
            ->take(6)
            ->get();

        $proximosEntrenamientos = Entrenamiento::with('entrenador')
            ->where('fecha_inicio', '>=', now())
            ->orderBy('fecha_inicio')
            ->take(5)
            ->get();

        $planesPopulares = Plan::withCount('clients')
            ->orderByDesc('clients_count')
            ->take(4)
            ->get();

        $ingresosPotenciales = $planesPopulares
            ->sum(fn($plan) => $plan->precio * $plan->clients_count);

        return view('admin.dashboard', compact(
            'totalClients',
            'totalEntrenadores',
            'totalSedes',
            'totalPlanes',
            'totalEntrenamientos',
            'totalReservas',
            'reservasHoy',
            'ultimasReservas',
            'proximosEntrenamientos',
            'planesPopulares',
            'ingresosPotenciales'
        ));
    })->name('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('clients', ClientController::class);
    Route::resource('sedes', SedeController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('entrenadors', EntrenadorController::class);
    Route::resource('entrenamientos', EntrenamientoController::class);
    Route::resource('reservas', ReservaController::class);
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
