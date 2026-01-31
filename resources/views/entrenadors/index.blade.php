@extends('layout')

@section('title', 'LLista de entrenadors')
@section('content')

<a href="{{ route('entrenadors.create') }}">Crear Entrenador</a>
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
            <th>Acciones</th>
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
            <td> {{ $entrenador->sede->direccion }}, {{ $entrenador->sede->ciudad }} </td>
            <td>
                <a href="{{ route('entrenadors.edit', $entrenador) }}">Editar</a>
                <form action="{{ route('entrenadors.destroy', $entrenador) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection