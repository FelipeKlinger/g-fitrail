<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrenadores = Entrenador::all();
        return view("entrenadores.index", compact("entrenadores")); // compact para pasar variables a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("entradores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // store() se utiliza para manejar la lógica de almacenamiento de nuevos registros
    {
        $validate = $request->validate([

            "nombre" => "required|string|max:100",
            "email" => "required|email|unique:entrenadors,email",
            "telefono" => "required|string|",
            "direccion" => "required|string|",
            "especialidad" => "required|in:Musculación,CrossFit,Funcional,Yoga,Rehabilitación",
            "password" => "requiered|string|min:6",
            "sede_id" => "required|exists:sedes,id" // Verifica que la sede_id exista en la tabla sedes
        ]);

        Entrenador::create($validate);

        return redirect()->route("entrenadores.index")->with("status", "Entrenador creado exitosamente");
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
