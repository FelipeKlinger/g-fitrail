@extends("layout")
@section("title", "Editar reserva")
@section("content")
<h1>Editar reserva</h1>
<form action="{{ route('reservas.update', $reserva) }}" method="POST">
    @method("PUT")
    @csrf
    @include("reservas._form", compact("clientes", "entrenamientos"))
</form>
@endsection