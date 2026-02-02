<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reserva;
use App\Models\Client;
use App\Models\Entrenador;

class ReservaController extends Controller
{

    public function index()
    {
        $reservas = Reserva::all();
        return view("reservas.index", compact("reservas"));
    }

    public function create()
    {
        $clientes = Client::all();
        $entrenadores = Entrenador::all();
        return view("reservas.create", compact("clientes", "entrenadores"));
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Request $request) {}

    public function update(Request $request) {}

    public function destroy(Request $request) {}
}
