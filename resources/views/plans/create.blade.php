@extends("layout")

@section("title", "Crear Plan")

@section("content")

<h1>Crear Plan</h1>
<form action="{{ route('plans.store') }}" method="POST">
    @csrf
    @include("plans._form")
</form>
@endsection