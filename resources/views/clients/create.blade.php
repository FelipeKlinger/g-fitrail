@extends('layout') 
@section('title', "Añadir Cliente")

@section('content')
<h1>Añadir Cliente</h1>
  <form method="POST" action="{{ route('clients.store') }}">
    @include('clients._form')
  </form>
@endsection
