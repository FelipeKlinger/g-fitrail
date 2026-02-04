@extends("layout")
@section("title", "Entrenamientos")
@section("content")
<h1>Actualizar Entrenamiento</h1>
<form action="{{ route('entrenamientos.update', $entrenamiento) }}" method="POST">
    @method("PUT")
    @csrf
    @include('entrenamientos._form', compact('entrenamiento', 'entrenadors'))
</form>
@endsection