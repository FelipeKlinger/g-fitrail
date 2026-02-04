<label>Nombre:</label>
<input type="text" name="nombre" value="{{ old('nombre', $entrenador->nombre ?? "") }}">
@error("nombre") <div>{{ $message }}</div> @enderror
<br>
<label>Email:</label>
<input type="email" name="email" value="{{ old('email', $entrenador->email ?? "") }}">
@error("email") <div>{{ $message }}</div> @enderror
<br>
<label>Telefono:</label>
<input type="number" name="telefono" value=" {{ old('telefono', $entrenador->telefono ?? "") }}">
@error("telefono") <div>{{ $message }}</div> @enderror
<br>
<label>Dirección:</label>
<input type="text" name="direccion" value="{{ old('direccion', $entrenador->direccion ?? "") }}">
@error("direccion") <div>{{ $message }}</div> @enderror
<br>
<label>Especialidad:</label>
<select name="especialidad">
    <option value="">Seleciona...</option>
    <option value="Musculación" {{ old("especialidad", $entrenador->especialidad ?? '')=="Musculación" ? "selected" : ""
        }}>Musculación</option>
    <option value="CrossFit" {{ old("especialidad", $entrenador->especialidad ?? '')=="CrossFit" ? "selected" : ""
        }}>CrossFit</option>
    <option value="Funcional" {{ old("especialidad", $entrenador->especialidad ?? '')=="Funcional" ? "selected" : ""
        }}>Funcional</option>
    <option value="Yoga" {{ old("especialidad", $entrenador->especialidad ?? '')=="Yoga" ? "selected" : "" }}>Yoga
    </option>
    <option value="Rehabilitación" {{ old("especialidad", $entrenador->especialidad ?? '')=="Rehabilitación" ?
        "selected" : "" }}>Rehabilitación
    </option>
</select>
@error("especialidad") <div>{{ $message }}</div>@enderror
<br>
<label>Contraseña:</label>
<input type="password" name="password" value="{{ old('password', $entrenador->password ?? "") }}">
@error("password") <div>{{ $message }}</div> @enderror
<br>
<label>Sede:</label>
<select name="sede_id">
    <option value="">Selecciona...</option>
    @foreach($sedes as $sede)
    <option value="{{ $sede->id }}" {{ old("sede_id", $entrenador->sede_id ?? '') == $sede->id ? "selected" : "" }}>
        {{ $sede->ciudad }} - {{ $sede->direccion }}
    </option>
    @endforeach
</select>
@error("sede_id") <div>{{ $message }}</div> @enderror
<br>
<button type="submit">{{ isset($entrenador->id) ? 'Actualizar' : 'Guardar' }}</button>