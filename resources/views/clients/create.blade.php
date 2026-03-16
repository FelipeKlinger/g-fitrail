@extends('layout') 
@section('title', "Añadir Cliente")
@section('content')
  <form method="POST" action="{{ route('clients.store') }}">
    @include('clients._form') 
  </form>
@endsection
