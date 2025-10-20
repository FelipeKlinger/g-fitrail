<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>

<style>
    body {

        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

    }

    input {

        padding: 6px;
        margin-bottom: 8px;

    }

    button {

        padding: 10px;
        margin-top: 30px;
    }

    h2 {

        justify-content: center;
        text-align: center;
    }

    a {

        text-decoration: none;
        color: black;
    }
</style>

<body>

    <?php

    require __DIR__ . "/funcions.php";

    $id;

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
    } else {

        echo "Error ID";
    }

    $usuari = leerUsuarios();

    foreach ($usuari as $row) {

        if ($row['id'] == $id) {

            echo "<p>Has seleccionado al usuario:</p>";
            echo "<p>Nom: $row[nombre]</p>";
            echo "<p>Email: $row[email]</p>";
        }
    }

    echo "<h3>¿Seguro que quieres eliminar a este usuario?</h3>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['aceptar']) && $_POST['aceptar'] === "true") {
            ElimnarUsuari($id);
            echo "<p>Usuario eliminado correctamente.</p>";
        } elseif (isset($_POST['rechazar']) && $_POST['rechazar'] === "false") {
            echo "<p>Operación cancelada.</p>";
        }
    }

    ?>

    <form method="POST">
        <button type="submit" name="aceptar" value="true">Sí, eliminar</button>
        <button type="submit" name="rechazar" value="false">No, cancelar</button>
    </form>

    <?php echo "<button><a href='./index.php'> Torna al inici </a> </button>"; ?>

</body>

</html>