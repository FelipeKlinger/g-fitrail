<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrenamientos = Entrenamiento::all();
        return view("entrenamientos.index", compact("entrenamientos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entrenadors = Entrenador::all();
        return view("entrenamientos.create", compact("entrenadors"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            "nombre" => "required|string|max:255",
            "descripcion" => "required|string|max:1000",
            "capacidad" => "required|integer|min:1|max:30",
            "fecha_inicio" => "required|date|date_format:Y-m-d H:i",
            "fecha_fin" => "required|date|date_format:Y-m-d H:i|after:fecha_inicio",
            "entrenador_id" => "required|exists:entrenadors,id"
        ]);

        Entrenamiento::create($validated);
        return redirect()->route("entrenamientos.index")->with("status", "Entrenamiento creado exitosamente");
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
