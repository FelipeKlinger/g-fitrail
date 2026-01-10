@extends('layout')
@section('content')

<style>
   
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .container {
        background-color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 800px; 
    }

    h1 {
        text-align: center;
        color: #333;
        margin-top: 0;
        margin-bottom: 1.5rem;
    }


    .btn {
        display: inline-block; 
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none; 
        font-weight: bold;
        margin-bottom: 20px;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #0056b3;
    }

 
    table {
        width: 100%;
        border-collapse: collapse; 
        margin-top: 10px;
    }

    th {
        background-color: #f8f9fa; 
        color: #555;
        font-weight: 600;
        text-align: left;
        padding: 12px;
        border-bottom: 2px solid #ddd;
    }

    td {
        padding: 12px;
        border-bottom: 1px solid #eee;
        color: #333;
    }

    tr:hover td {
        background-color: #f1f7ff;
    }
</style>

<div class="container">
    <h1>Clientes</h1>

    <a href="{{ route('clients.create') }}" class="btn">Añadir Cliente</a>

    <table>
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
</div>

@endsection