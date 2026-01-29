@extends('layout')
@section("title", "Entrenamientos")

@section("content")
<h1>Entrenamientos disponibles</h1>
<table>
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
            <td>{{ $entrenamiento->duracion }}</td>
            <td>{{ $entrenamiento->nivel }}</td>
        </tr>
        @endforeach
    </tbody>


</table>
@endsection
