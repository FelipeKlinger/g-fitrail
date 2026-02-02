@section("title", "Formulario de reservas")
@section("content")

    <form action="{{ route("reservas.store") }}" method="POST">

        <label>Clientes</label>
        <select name="client_id">
            <option value="">Selecciona...</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ old("cliente_id") == $cliente->id ? "selected" : "" }}>
                    {{ $cliente->nombre }}
                </option>
            @endforeach
            <select />
            <br>

            <label>Entrenamiento</label>
            <select name="entrenador_id">
                <option value="">Selecciona...</option>
                @foreach ($entrenadores as $entrenador)
                    <option value="{{ $entrenador->id }}" {{ old("entrenador_id") == $entrenador->id ? "selectes" : "" }}>
                        {{ $entrenador->nombre }}
                    </option>

                @endforeach
            </select>
        </select>

    </form>

@endsection