@extends('layout')
@section("title", "Entrenamientos")

@section("content")
<a href="{{ route("entrenamientos.create")  }}">Añadir Entrenamiento</a>
<h1>Entrenamientos disponibles</h1>
<table style="width:50% " border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Capacidad</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Entrenador</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entrenamientos as $entrenamiento)
        <tr>
            <td>{{ $entrenamiento->nombre }}</td>
            <td>{{ $entrenamiento->descripcion }}</td>
            <td>{{ $entrenamiento->capacidad }}</td>
            <td>{{ $entrenamiento->fecha_inicio }}</td>
            <td>{{ $entrenamiento->fecha_fin }}</td>
            <td>{{ $entrenamiento->entrenador->nombre }}, {{ $entrenamiento->entrenador->especialidad }} </td>
        </tr>
        @endforeach
    </tbody>


</table>
@endsection
