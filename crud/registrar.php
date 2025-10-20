<?php
require __DIR__ . '/funcions.php';


?>



<html lang="ca"><meta charset="utf-8"><title>Registre</title>
<body>


<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = trim($_POST['nom'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $edad = trim($_POST['edat'] ?? '');
        $edat = (INT) $edat;

        if ($edat > 17) {

            $missatge = "L'usuari creat es Major d'edat ";
        } else {

            $missatge = "L'usuari creat es menor de edat";
        }
    }


?>

  <?php
  require __DIR__ . '/funcions.php';

  // Inicializar variable de mensaje
  $missatge = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nom = trim($_POST['nom'] ?? '');
      $email = trim($_POST['email'] ?? '');
      $edat = trim($_POST['edat'] ?? '');
      $edat = (int) $edat;
      // Llamada a la función existente (se mantiene el nombre original)
      AfegirUsuaris($nom, $email, $edat);

      if ($edat > 17) {
          $missatge = 'El usuario creado es mayor de edad.';
      } else {
          $missatge = 'El usuario creado es menor de edad.';
      }
  }
  ?>

  <html lang="es"><meta charset="utf-8"><title>Registro</title>
  <body>

    <h1>Registro</h1>
    <?php if ($missatge): ?><p><?= h($missatge) ?></p><?php endif; ?>
    <form method="post">
      <label>Nombre <input name="nom" required></label><br>
      <label>Correo electrónico <input type="email" name="email" required></label><br>
      <label>Edad <input type="number" name="edat" required></label><br>
      <label>Contraseña <input type="password" name="password" required></label><br>
      <label>Repetir contraseña <input type="password" name="password2" required></label><br>
      <button>Crear cuenta</button>
    </form>
    <p><a href="login.php">¿Ya tienes cuenta? Inicia sesión</a></p>
  </body></html>