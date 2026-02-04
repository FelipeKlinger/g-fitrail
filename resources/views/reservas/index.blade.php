@extends('layout')
@section("title", "Reservas")

@section("content")
    <a href="{{ route("reservas.create") }}">Crear Reserva</a>
    <table style="width: 60%" border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Cliente</th>
                <th>Entrenamiento</th>
                <th>Estado</th>
                <th>Fecha de reserva</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->cliente->nombre }}</td>
                    <td>{{ $reserva->entrenamiento->nombre }}</td>
                    <td>{{ $reserva->estado }}</td>
                    <td>{{ $reserva->fecha_reserva }}</td>
                    <td>
                        <a href="{{ route("reservas.edit", $reserva) }}">Editar</a>
                        <form action="{{ route("reservas.destroy", $reserva) }}" method="POST" style="display: inline;">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection