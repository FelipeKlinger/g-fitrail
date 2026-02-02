@extends("layout")

@section("title", "Editar Plan")

@section("content")

<h1>Editar Plan</h1>
<form action="{{ route('plans.update', $plan) }}" method="POST">
        @method("PUT")
        @csrf
        @include("plans._form", compact("plan"))
</form>
@endsection
