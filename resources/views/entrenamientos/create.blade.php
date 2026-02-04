@extends('layout')
@section('title', 'Crear Entrenamiento')

@section('content')
<h1>Crear entrenamiento</h1>
<form action="{{ route('entrenamientos.store') }}" method="POST">
    @csrf
    @include('entrenamientos._form', compact('entrenadors'))
</form>
@endsection