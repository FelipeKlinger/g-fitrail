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
        </select>
        @error("client_id") <div>{{ $message }}</div>
        @enderror
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
        @error("entrenador_id") <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Estado</label>
        <select name="estado">
            <option value="">seleccionar...</option>
            <option value="confirmada" {{ old("estado") == "confirmada" ? "selected" : "" }}>confirmada</option>
            <option value="cancelada" {{ old("estado") == "cancelada" ? "selected" : "" }}>cancelada</option>
            <option value="asistio" {{ old("estado") == "asistio" ? "selected" : "" }}>asistio</option>
            <option value="no_asistio" {{ old("estado") == "no_asistio" ? "selected" : "" }}>no_asistio</option>
        </select>
        @error("estado") <div>{{ $message }}</div>
        @enderror
        <br>
        <label>Fecha de reserva</label>
        <input type="datetime-local" name="fecha_reserva" value="{{ old("fecha_reserva", $reserva->fecha_reserva ?? "") }}">
          @error("fecha_reserva") <div>{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Crear</button>
    </form>

@endsection