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
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection