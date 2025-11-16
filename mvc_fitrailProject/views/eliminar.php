<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar cliente</title>
</head>
<body>
    <h1>Eliminar cliente</h1>
    <?php if (!empty($cliente)): ?>
        <p>¿Seguro que quieres eliminar el cliente "<?= htmlspecialchars($cliente['nombre']) ?>" (ID: <?= htmlspecialchars($cliente['id']) ?>)?</p>
        <form method="get" action="index.php">
            <input type="hidden" name="accion" value="eliminar">
            <input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id']) ?>">
            <input type="hidden" name="confirmar" value="1">
            <button type="submit">Eliminar</button>
        </form>
    <?php else: ?>
        <p>No se encontró el cliente.</p>
    <?php endif; ?>
    <br>
    <a href="index.php?accion=listarClientes">Volver a la lista</a>
</body>
</html>