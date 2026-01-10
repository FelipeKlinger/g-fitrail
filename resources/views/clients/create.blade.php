@extends('layout') 
@section('title', "Añadir Cliente")
@section('content')
<a href="{{ route('clients.index') }}">Ir al inicio</a> <br> <br>
<h1>Añadir Cliente</h1>
  <form method="POST" action="{{ route('clients.store') }}">
    @include('clients._form') 
  </form>
@endsection
