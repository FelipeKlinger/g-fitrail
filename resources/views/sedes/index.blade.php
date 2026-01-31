@extends("layout")

@section("title","Llista de sedes")

@section("content")

<a href="{{ route("sedes.create") }}">Crear una sede</a>
<h1>Lista de sedes</h1>

<table style="width:60%; border-collapse: collapse;" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Horario de Apertura</th>
            <th>Horario de Cierre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sedes as $sede)

        <tr>
            <td>{{ $sede->id }}</td>
            <td>{{ $sede->direccion }}</td>
            <td>{{ $sede->telefono }}</td>
            <td>{{ $sede->ciudad }}</td>
            <td>{{ $sede->horario_apertura }}</td>
            <td>{{ $sede->horario_cierre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection