<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar cliente</title>
</head>
<body>
	<h1>Editar cliente</h1>
	<?php if (!empty($cliente)): ?>
	<form method="post">
		<input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id']) ?>">
		<label>Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($cliente['nombre']) ?>"></label><br>
		<label>Email: <input type="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>"></label><br>
        <label>Edad: <input type="number" name="edad" value="<?= htmlspecialchars($cliente['edad']) ?>"></label><br>
        <label>Altura: <input type="number" name="altura" value="<?= htmlspecialchars($cliente['altura']) ?>"></label><br>
        <label>Peso: <input type="number" name="peso" value="<?= htmlspecialchars($cliente['peso']) ?>"></label><br>
        <label>Objetivo:</label>
        <select name="objetivo"> 
        <option value="">--Selecciona una opción--</option>
                <option value="Perder peso (déficit calórico)"
                <?= $cliente['objetivo'] === 'Perder peso (déficit calórico)' ? 'selected' : '' ?>>Perder peso (déficit calórico)</option>
                <option value="Ganar masa muscular (superávit calórico)"
                <?= $cliente['objetivo'] === 'Ganar masa muscular (superávit calórico)' ? 'selected' : '' ?>>Ganar masa muscular (superávit calórico)
                </option>
                <option value="Recomposición corporal"
                <?= $cliente['objetivo'] === 'Recomposición corporal' ? 'selected' : '' ?>>Recomposición corporal</option>
            </select><br>
        <label>Nueva contraseña: <input type="password" name="pass1"></label><br>
		<label>Repetir nueva contraseña: <input type="password" name="pass2"></label><br>
		<button type="submit">Guardar cambios</button>
	</form>
	<?php else: ?>
		<p>No se encontró el cliente.</p>
	<?php endif; ?>
	<br>
	<a href="index.php?accion=listarClientes">Volver a la lista</a>
</body>
</html>
