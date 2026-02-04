<label>Nombre</label>
<input type="text" name="nombre" value="{{ old('nombre', $entrenamiento->nombre ?? '') }}">
@error('nombre') <div>{{ $message }}</div> @enderror
<br>

<label>Descripción</label>
<textarea name="descripcion" value="{{ old('descripcion', $entrenamiento->descripcion ?? '' ) }}"></textarea>
@error('descripcion') <div>{{ $message }}</div> @enderror
<br>

<label>Capacidad</label>
<input type="number" name="capacidad" value="{{ old('capacidad', $entrenamiento->capacidad ?? '') }}">
@error('capacidad') <div>{{ $message }}</div> @enderror
<br>

<label>Fecha de inicio</label>
<input type="datetime-local" name="fecha_inicio"
    value="{{ old('fecha_inicio', isset($entrenamiento->fecha_inicio) ? date('Y-m-d\TH:i', strtotime($entrenamiento->fecha_inicio)) : '') }}">
@error('fecha_inicio') <div>{{ $message }}</div> @enderror
<br>

<label>Fecha fin</label>
<input type="datetime-local" name="fecha_fin"
    value="{{ old('fecha_fin', isset($entrenamiento->fecha_fin) ? date('Y-m-d\TH:i', strtotime($entrenamiento->fecha_fin)) : '') }}">
@error('fecha_fin') <div>{{ $message }}</div> @enderror
<br>

<label>Entrenador</label>
<select name="entrenador_id">
    <option value="">Selecciona...</option>
    @foreach ( $entrenadors as $entrenador )
    <option value="{{ $entrenador->id }}" {{ old('entrenador_id', $entrenamiento->entrenador_id ?? '') ==
        $entrenador->id ? 'selected' : '' }}>
        {{ $entrenador->nombre }}
    </option>
    @endforeach
</select>
@error('entrenador_id') <div>{{ $message }}</div> @enderror
<br>

<button type="submit">{{ isset($entrenamiento->id) ? 'Actualizar' : 'Crear' }}</button>