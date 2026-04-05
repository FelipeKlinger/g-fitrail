<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use App\Models\Reserva;
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
        $reservas = Reserva::where('client_id', $client->id)->get(); // Obtener las reservas del cliente autenticado

        // Excluir entrenamientos que el cliente ya reservó
        $entrenamientosReservadosIds = $reservas->pluck('entrenamiento_id'); // pluck para obtener solo los IDs de los entrenamientos reservados

        $entrenamientos = Entrenamiento::where('capacidad', '>', 0)
            ->where('fecha_inicio', '>=', now())
            ->whereNotIn('id', $entrenamientosReservadosIds) // Excluir entrenamientos ya reservados
            ->get();
        
            
        return view('clients.dashboard', compact('entrenamientos', 'reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
