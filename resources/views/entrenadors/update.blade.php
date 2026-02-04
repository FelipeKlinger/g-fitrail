@extends("layout")
@section("title", "Formulario")
@section("content")
    <h1>Formulario de edición de entrenador</h1>
    <form action="{{ route('entrenadors.update', $entrenador) }}" method="POST">
        @method("PUT")
        @csrf
        @include("entrenadors._form", compact("entrenador", "sedes"))
    </form>
@endsection