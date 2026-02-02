@extends("layout")

@section("title", "Lista de Planes")

@section("content")

<h1>Planes</h1>

<a href="{{ route('plans.create') }}">Añadir Plan</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($plans as $plan)
        <tr>
            <td>{{ $plan->id }}</td>
            <td>{{ $plan->nombre }}</td>
            <td>{{ $plan->descripcion }}</td>
            <td>{{ number_format($plan->precio, 2) }}€</td>
            <td>
                <a href="{{ route('plans.edit', $plan->id) }}">Editar</a>
                <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
