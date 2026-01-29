<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Sede</title>
</head>

<body>

    <form action="{{ route('sedes.store') }}" method="POST">
        @csrf
        <label>Dirección</label>
        <input type="text" name="direccion" value="{{ old('direccion', $sede->direccion ?? "") }}">
        @error("direccion") <div>{{ $message }}</div> @enderror
        <br>

        <label>Telefono</label>
        <input type="number" name="telefono" value="{{ old('telefono', $sede->telefono ?? "") }}">
        @error("telefono") <div>{{ $message }}</div> @enderror
        <br>
        <label>ciudad</label>
        <select name="ciudad">
            <option value="">Selecciona...</option>
            <option value="Tarragona"  {{ old('ciudad') == "Tarragona" ? "selected" : "" }}>Tarragona</option>
            <option value="Barcelona" {{ old('ciudad') == "Barcelona" ? "selected" : "" }}>Barcelona</option>
        </select>
        @error("ciudad") <div>{{$message}}</div>@enderror
        <br>
        <label>Horario de Apertura</label>
        <input type="time" name="horario_apertura" value="{{ old('horario_apertura', $sede->horario_apertura ?? "") }}">
        @error("horario_apertura") <div>{{ $message }}</div> @enderror
        <br>
        <label>Horario de Cierre</label>
        <input type="time" name="horario_cierre" value="{{ old('horario_cierre', $sede->horario_cierre ?? "") }}">
        @error("horario_cierre") <div>{{ $message }}</div> @enderror
        <br>

        <button type="submit">Enviar</button>

    </form>

</body>

</html>