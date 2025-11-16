<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar cliente</title>
</head>
<body>
    <h1>Agregar cliente</h1>
    <form method="post" action="">
        <label>Nombre: <input type="text" name="nombre" value="<?= isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '' ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required></label><br>
        <label>Edad: <input type="number" name="edad" value="<?= isset($_POST['edad']) ? htmlspecialchars($_POST['edad']) : '' ?>" required></label><br>
        <label>Altura (cm): <input type="number"name="altura" value="<?= isset($_POST['altura']) ? htmlspecialchars($_POST['altura']) : '' ?>" required></label><br>
        <label>Peso (Kg): <input type="number" name="peso" value="<?= isset($_POST['peso']) ? htmlspecialchars($_POST['peso']) : '' ?>" required></label><br>
        ¿Cuál es tu objetivo?: <select name="objetivo" required> 
            <option value="" selected>--Selecciona una opción--</option>
                <option value="Perder peso (déficit calórico)">Perder peso (déficit calórico)</option>
                <option value="Ganar masa muscular (superávit calórico)">Ganar masa muscular (superávit calórico)
                </option>
                <option value="Recomposición corporal">Recomposición corporal</option>
            </select><br>
        <label>Contraseña: <input type="password" name="pass1" required></label><br>
        <label>Repetir contraseña: <input type="password" name="pass2"required></label><br>
        <button type="submit">Agregar</button>
    </form>
    <br>
    <a href="index.php?accion=listarClientes">Volver a la lista</a>
</body>
</html>