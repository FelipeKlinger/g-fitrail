@extends("layout")
@section("title", "Editar sede")
@section("content")
<h1>Editar Sede</h1>
<form action="{{ route('sedes.update', $sede) }}" method="POST">
    @method("PUT")
    @csrf
    @include("sedes._form", compact("sede"))
</form>
@endsection