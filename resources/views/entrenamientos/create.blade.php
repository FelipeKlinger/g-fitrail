@extends('layout')
@section('title', 'Crear Entrenamiento')

@section('content')
<h1>Crear entrenamiento</h1>
@include('entrenamientos._form', compact('entrenadors'))

@endsection