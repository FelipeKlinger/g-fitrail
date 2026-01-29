@extends('layout')

@section('title', 'LLista de entrenadors')

@section('content')

<a href="{{ route('entrenadores.create') }}">Crear Entrenador</a>
<h1>Entrenadores</h1>

<table style="width:60%" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Especialidad</th>
            <th>Password</th>
            <th>sede</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($entrenadores as $entrenador )
        <tr>
            <td>{{ $entrenador->id }}</td>
            <td>{{ $entrenador->nombre }}</td>
            <td>{{ $entrenador->email }}</td>
            <td>{{ $entrenador->telefono }}</td>
            <td>{{ $entrenador->direccion }}</td>
            <td>{{ $entrenador->especialidad }}</td>
            <td>{{ $entrenador->password }}</td>
            <td>{{ $entrenador->sede_id }}</td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection