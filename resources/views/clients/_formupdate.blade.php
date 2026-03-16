<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 600;
            font-size: 0.9rem;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
        }

        .error {
            color: #dc3545;
            font-size: 0.85rem;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .info-text {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="container">

        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $client->nombre) }}">
            @error('nombre') <div class="error">{{ $message }}</div> @enderror

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $client->email) }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label>Edad</label>
            <input type="number" name="edad" value="{{ old('edad', $client->edad) }}">
            @error('edad') <div class="error">{{ $message }}</div> @enderror

            <div style="display: flex; gap: 10px;">
                <div style="width: 50%;">
                    <label>Altura (cm)</label>
                    <input type="number" name="altura" step="0.01" value="{{ old('altura', $client->altura) }}">
                    @error('altura') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div style="width: 50%;">
                    <label>Peso (kg)</label>
                    <input type="number" name="peso" step="0.01" value="{{ old('peso', $client->peso) }}">
                    @error('peso') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <label>Objetivo</label>
            <select name="objetivo"> 
                <option value="">Selecciona...</option>
                <option value="perder peso" {{ old('objetivo', $client->objetivo) == 'perder peso' ? 'selected' : '' }}>Perder peso</option>
                <option value="ganar masa muscular" {{ old('objetivo', $client->objetivo) == 'ganar masa muscular' ? 'selected' : '' }}>Ganar masa muscular</option>
                <option value="tonificar" {{ old('objetivo', $client->objetivo) == 'tonificar' ? 'selected' : '' }}>Tonificar</option>
                <option value="mantener forma" {{ old('objetivo', $client->objetivo) == 'mantener forma' ? 'selected' : '' }}>Mantener forma</option>
                <option value="aumentar resistencia" {{ old('objetivo', $client->objetivo) == 'aumentar resistencia' ? 'selected' : '' }}>Aumentar resistencia</option>
                <option value="mejorar flexibilidad" {{ old('objetivo', $client->objetivo) == 'mejorar flexibilidad' ? 'selected' : '' }}>Mejorar flexibilidad</option>
                <option value="recomposición corporal" {{ old('objetivo', $client->objetivo) == 'recomposición corporal' ? 'selected' : '' }}>Recomposición corporal</option>
            </select>
            @error('objetivo') <div class="error">{{ $message }}</div> @enderror

            <label>Contraseña</label>
            <div class="info-text">Dejar en blanco para mantener la contraseña actual</div>
            <input type="password" name="password" placeholder="Nueva contraseña (opcional)">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Actualizar Cliente</button>
        </form>
    </div>

</body>
</html>
