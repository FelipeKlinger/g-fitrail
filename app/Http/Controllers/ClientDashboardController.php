<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use App\Models\Reserva;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $client = $user->client;
        $reservas = Reserva::with(['entrenamiento.entrenador'])
            ->where('client_id', $client->id)
            ->where('estado', '!=', 'cancelada')
            ->get(); // Reservas activas/visibles en dashboard (sin canceladas)

        // Excluir entrenamientos que el cliente ya reservó
        $entrenamientosReservadosIds = $reservas
            ->where('estado', 'confirmada')
            ->pluck('entrenamiento_id'); // Excluir solo entrenamientos con reserva confirmada

        $entrenamientos = Entrenamiento::where('capacidad', '>', 0)
            ->where('fecha_inicio', '>=', now())
            ->whereNotIn('id', $entrenamientosReservadosIds) // Excluir entrenamientos ya reservados
            ->get();

        $planActivo = $client->plans()
            ->wherePivot('estado', 'Activo')
            ->latest('client_plan.fecha_inicio') // Obtener el plan activo más reciente
            ->first(); 

        if (!$planActivo) {
            $planes = Plan::all();
            return view('plans.planClient', compact('planes'))->with('error', 'Tu plan no está activo. Por favor, contacta con el gimnasio para más información.');
        }

        return view('clients.dashboard', compact('entrenamientos', 'reservas'))->with('error', 'Tu plan no está activo. Por favor, contacta con el gimnasio para más información.');

    }

    public function reservas()
    {
        $user = Auth::user();
        $client = $user->client;

        $estado = request('estado', 'todas');

        $query = Reserva::with(['entrenamiento.entrenador'])
            ->where('client_id', $client->id);

        if (in_array($estado, ['confirmada', 'cancelada'], true)) {
            $query->where('estado', $estado);
        }

        $reservas = $query->latest('fecha_reserva')->get();

        return view('clients.reservas', compact('reservas', 'estado'));
    }

    public function cancelarReserva(Reserva $reserva)
    {
        $user = Auth::user();
        $client = $user->client;

        if ($reserva->client_id !== $client->id) {
            abort(403, 'No tienes permisos para cancelar esta reserva.');
        }

        if ($reserva->estado !== 'confirmada') {
            return redirect()->route('clients.reservas')->with('error', 'Solo se pueden cancelar reservas confirmadas.');
        }

        $reserva->update(['estado' => 'cancelada']);

        if ($reserva->entrenamiento) {
            $reserva->entrenamiento->increment('capacidad');
        }

        return redirect()->route('clients.reservas')->with('success', 'Reserva cancelada correctamente.');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
