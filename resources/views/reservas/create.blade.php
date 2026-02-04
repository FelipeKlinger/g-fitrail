@extends('layout')
@section("title", "Crear Reserva")
@section("content")
<h1>Crear Reserva</h1>
<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    @include('reservas._form', compact("clientes", "entrenamientos"))
</form>
@endsection