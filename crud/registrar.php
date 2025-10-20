<?php
require __DIR__ . '/funcions.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass1 = trim($_POST['password'] ??'');
    $pass2 = trim($_POST['password2'] ??'');
    AltaUsuarios($nombre, $email, $pass1, $pass2);

}
?>

<html lang="es">
<meta charset="utf-8">
<title>Registro</title>

<body>

    <h1>Registro</h1>
    <form method="post">
        <label>Nombre <input name="nombre" required></label><br>
        <label>Correo electrónico <input type="email" name="email" required></label><br>
        <label>Contraseña <input type="password" name="password" required></label><br>
        <label>Repetir contraseña <input type="password" name="password2" required></label><br>
        <button>Crear cuenta</button>
    </form>
    <p><a href="login.php">¿Ya tienes cuenta? Inicia sesión</a></p>
</body>

</html>