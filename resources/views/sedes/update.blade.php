@extends("layout")
@section("title", "Editar sede")
@section("content")
<form action="{{ route("sedes.update", $sede) }}" method="POST">
    @method("PUT")
    @csrf
    @include("sedes._form")
</form>

@endsection