@extends('layout') 
@section('content')
<h1>Clientes</h1>

<a href="{{ route('clients.create') }}">Añadir Cliente</a> <br> <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Objetivo</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->nombre }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->edad}}</td>
                    <td>{{ $client->altura }}</td>
                    <td>{{ $client->peso }}</td>
                    <td>{{ $client->objetivo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection