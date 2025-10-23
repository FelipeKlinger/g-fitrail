<html lang="es">
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" href="src/formularios.css" type="text/css">

<body>

    <div class="contenedor">
        <h1>Registro</h1>
        <form method="post">

            <label>Nombre
                <input name="nombre" value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>" required>
            </label><br>

            <label>Correo electrónico
                <input type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                    required>
            </label><br>

            <label>Edad
                <input type="number" name="edad" value="<?php echo htmlspecialchars($_POST['edad'] ?? ''); ?>" required>
            </label><br>

            <label>Peso (Kg)
                <input type="number" name="peso" value="<?php echo htmlspecialchars($_POST['peso'] ?? ''); ?>" required>
            </label><br>

            <label>Altura (cm)
                <input type="number" name="altura" value="<?php echo htmlspecialchars($_POST['altura'] ?? ''); ?>"
                    required>
            </label><br>

            <select name="objetivo" required>
                <option value="Perder peso (déficit calórico)">Perder peso (déficit calórico)</option>
                <option value="Ganar masa muscular (superávit calórico)">Ganar masa muscular (superávit calórico)
                </option>
                <option value="Recomposición corporal">Recomposición corporal</option>
            </select><br>

            <label>Contraseña <input type="password" name="password" required></label><br>
            <label>Repetir contraseña <input type="password" name="password2" required></label><br>
            <button>Crear cuenta</button>
        </form>
    </div>

    <a href="./index.php" class="inicio">Volver al inicio</a>

    <?php
    require __DIR__ . '/funcions.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = trim($_POST['nombre'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $edad = trim($_POST['edad'] ?? '');
        $altura = trim($_POST['altura'] ?? '');
        $peso = trim($_POST['peso'] ?? '');
        $objetivo = trim($_POST['objetivo'] ?? '');
        $pass1 = trim($_POST['password'] ?? '');
        $pass2 = trim($_POST['password2'] ?? '');
        AltaUsuarios($nombre, $email, $edad, $altura, $peso, $objetivo, $pass1, $pass2);

        echo '<p class="mensaje-exito">¡Usuario creado correctamente!.</p';
    }
    ?>



</html>