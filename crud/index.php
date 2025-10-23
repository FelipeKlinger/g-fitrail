<?php
require __DIR__ . '/funcions.php';

$usuarios = leerUsuarios();
?>

<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<link rel="stylesheet" href="src/index.css" type="text/css">
<title>Listados de usuarios</title>

<body>

  <div class="contenedor">

    <h1>Lista de usuarios</h1>

    <p><a href="registrar.php">Agregar nuevo usuario</a></p>

    <?php if (empty($usuarios)): ?>
      <p>No hay usuarios registrados.</p>
    <?php else: ?>
      <table border="1" cellpadding="6" cellspacing="0">
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

        <?php foreach ($usuarios as $usuari): ?>
          <tr>
            <td><?= $usuari['id'] ?></td>
            <td><?= $usuari['nombre'] ?></td>
            <td><?= $usuari['email'] ?></td>
            <td><?= $usuari['edad'] ?></td>
            <td><?= $usuari['altura'] ?> cm</td>
            <td><?= $usuari['peso'] ?> kg</td>
            <td><?= $usuari['objetivo'] ?></td>

            <td>
              <a href="editar.php?id=<?= $usuari['id'] ?>">Editar</a> |
              <a href="eliminar.php?id=<?= $usuari['id'] ?>">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  <?php endif; ?>

</body>

</html>