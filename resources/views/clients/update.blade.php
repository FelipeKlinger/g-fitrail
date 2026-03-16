@extends('layout') 
@section('title', "Editar Cliente")
@section('content')
<a href="{{ route('clients.index') }}">Ir al inicio</a> <br> <br>
<h1>Editar Cliente</h1>
  <form method="POST" action="{{ route('clients.update', $client->id) }}">
    @method('PUT')
    @include('clients._formupdate') 
  </form>
@endsection
