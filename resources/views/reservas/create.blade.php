@extends('layout')
@section("title", "Crear Reserva")
@section("content")
@include('reservas._form', compact("clientes", "entrenadores"))

@endsection