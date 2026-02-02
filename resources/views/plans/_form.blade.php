<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear un plan</title>
</head>
<body>

<form action="{{ route('plans.store') }}" method="POST">
    @csrf
    <label>Nombre del Plan</label>
    <input type="text" name="nombre" value="{{ old('nombre', $plan->nombre ?? '') }}">
    @error('nombre') <div>{{ $message }}</div> @enderror
    <br>

    <label>Descripción</label>
    <textarea name="descripcion">{{ old('descripcion', $plan->descripcion ?? '') }}</textarea>
    @error('descripcion') <div>{{ $message }}</div> @enderror
    <br>

    <label>Precio (€)</label>
    <input type="number" step="0.01" name="precio" value="{{ old('precio', $plan->precio ?? '') }}">
    @error('precio') <div>{{ $message }}</div> @enderror
    <br>

    <button type="submit">{{ isset($plan) ? 'Actualizar' : 'Crear' }} Plan</button>
</form>
</body>
</html>