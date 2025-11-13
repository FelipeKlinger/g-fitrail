<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
</head>

<body>

<h1>Lista</h1>
<a href="index.php?accion=agregar">Agregar</a>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Objetivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($leerclientes)): ?>
            <?php foreach ($leerclientes as $cliente): ?>
                <tr>
                    <td><?= htmlspecialchars($cliente['id']) ?></td>
                    <td><?= htmlspecialchars($cliente['nombre']) ?></td>
                    <td><?= htmlspecialchars($cliente['email']) ?></td>
                    <td><?= htmlspecialchars($cliente['edad']) ?></td>
                    <td><?= htmlspecialchars($cliente['altura']) ?></td>
                    <td><?= htmlspecialchars($cliente['peso']) ?></td>
                    <td><?= htmlspecialchars($cliente['objetivo']) ?></td>
                    <td>
                        <a href="index.php?accion=editar&id=">Editar</a> |
                        <a href="index.php?accion=eliminar&id=">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="8">No hay clientes registrados.</td></tr>
        <?php endif; ?>
    </tbody>
</table>


</body>

</html>