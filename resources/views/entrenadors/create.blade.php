@extends("layout")
@section("title", "Crear Entrenador")
@section("content")
<h1>Crear Entrenador</h1>
<form action="{{ route('entrenadors.store') }}" method="POST">
    @csrf
    @include("entrenadors._form", compact("sedes"))
</form>
@endsection