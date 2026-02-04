@extends("layout")
@section("content")
<h1>Crear una Sede</h1>
<form action="{{ route('sedes.store') }}" method="POST">
    @csrf
    @include("sedes._form")
</form>
@endsection