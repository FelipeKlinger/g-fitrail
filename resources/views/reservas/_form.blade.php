<label>Clientes</label>
<select name="client_id">
    <option value="">Selecciona...</option>
    @foreach ($clientes as $cliente)
    <option value="{{ $cliente->id }}" {{ (old("client_id", $reserva->client_id ?? '') == $cliente->id) ? "selected" :
        "" }}>
        {{ $cliente->nombre }}
    </option>
    @endforeach
</select>
@error("client_id") <div>{{ $message }}</div>
@enderror
<br>

<label>Entrenamiento</label>
<select name="entrenamiento_id">
    <option value="">Selecciona...</option>
    @foreach ($entrenamientos as $entrenamiento)
    <option value="{{ $entrenamiento->id }}" {{ (old("entrenamiento_id", $reserva->entrenamiento_id ?? '') ==
        $entrenamiento->id) ? "selected" : "" }}>
        {{ $entrenamiento->nombre }}
    </option>
    @endforeach
</select>
@error("entrenamiento_id") <div>{{ $message }}</div>
@enderror
<br>
<label>Estado</label>
<select name="estado">
    <option value="">seleccionar...</option>
    <option value="confirmada" {{ old("estado", $reserva->estado ?? '') == "confirmada" ? "selected" : "" }}>confirmada
    </option>
    <option value="cancelada" {{ old("estado", $reserva->estado ?? '') == "cancelada" ? "selected" : "" }}>cancelada
    </option>
    <option value="asistio" {{ old("estado", $reserva->estado ?? '') == "asistio" ? "selected" : "" }}>asistio</option>
    <option value="no_asistio" {{ old("estado", $reserva->estado ?? '') == "no_asistio" ? "selected" : "" }}>no_asistio
    </option>
</select>
@error("estado") <div>{{ $message }}</div>
@enderror
<br>
<label>Fecha de reserva</label>
<input type="datetime-local" name="fecha_reserva" value="{{ old(" fecha_reserva", $reserva->fecha_reserva ?? "") }}">
@error("fecha_reserva") <div>{{ $message }}</div>
@enderror
<br>
<button type="submit">{{ isset($reserva->id) ? 'Actualizar' : 'Crear' }}</button>