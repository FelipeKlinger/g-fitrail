<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuari</title>
    <style>
        body {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            padding: 20px;
        }

        input {
            padding: 6px;
            margin-bottom: 8px;
            width: 250px;
        }

        button {
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    require __DIR__ . '/funcions.php';


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        die("ID no proporcionado.");
    }

    $usuari = leerUsuarios();

    foreach ($usuari as $row) {
        if ($row['id'] == $id) {
            $nombre = $row['nombre'];
            $email = $row['email'];
        }
    }

    ?>

    <h1>Editar Usuari</h1>

    <form method="POST">
        <label>Nom:</label><br>
        <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br>

        <label>Nova contrasenya:</label><br>
        <input type="password" name="password"><br>

        <label>Confirmar contrasenya:</label><br>
        <input type="password" name="password2"><br>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $pass1 = $_POST['password'] ?? '';
            $pass2 = $_POST['password2'] ?? '';
            EditarUsuari($id, $nombre, $email, $pass1, $pass2);
            echo '<p>Usuario editado correctamente</p>';
        }
        ?>

        <button type="submit">Editar</button>
    </form>

    <br>
    <button><a href="./index.php">Torna a l'inici</a></button>

</body>

</html>