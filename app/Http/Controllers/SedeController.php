<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sedes = Sede::all();
        return view("sedes.index", compact("sedes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("sedes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'ciudad' => 'required|string|in:Tarragona,Barcelona',
            'horario_apertura' => 'required|date_format:H:i', // Formato de hora HH:MM ej: 14:30
            'horario_cierre' => 'required|date_format:H:i|after:horario_apertura', // Debe ser después de la hora de apertura
        ]);

        Sede::create($validated);

        return redirect()->route('sedes.index')->with('status', 'Sede creada exitosamente'); //PRG
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
        $sede = Sede::findOrFail($id);
        return view("sedes.update", compact("sede"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sede = Sede::findOrFail($id);
        
        $validated = $request->validate([
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'ciudad' => 'required|string|max:100',
            'horario_apertura' => 'required|date_format:H:i',
            'horario_cierre' => 'required|date_format:H:i|after:horario_apertura',
        ]);

        $sede->update($validated);

        return redirect()->route('sedes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sede = Sede::findOrFail($id);
        $sede->delete();
        
        return redirect()->route('sedes.index');
    }
}
