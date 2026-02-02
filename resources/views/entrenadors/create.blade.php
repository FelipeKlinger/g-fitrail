@extends("layout")
@section("title", "Crear Entrenador")
@section("content")
<h1>Crear Entrenador</h1>
@include("entrenadors._form", compact("sedes")) // Incluir el formulario y pasar las sedes
@endsection