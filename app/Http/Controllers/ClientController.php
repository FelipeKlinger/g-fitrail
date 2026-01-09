<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $clients = Client::all(); // Obtener todos los clientes
        return view("clients.index", compact("clients")); // Pasar los clientes a la vista
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view("clients.create");  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email',
            'edad' => 'required|integer|min:1',
            'altura' => 'required|numeric|min:0',
            'peso' => 'required|numeric|min:0',
            'objetivo' => 'required|in:perder peso,ganar masa muscular,tonificar,mantener forma,aumentar resistencia,mejorar flexibilidad,recomposición corporal',
            'password' => 'required|string|min:6',
        ]);

        Client::created($validated);
        return redirect()->route('clients.index')->with('status', 'Cliente creado exitosamente.');
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
