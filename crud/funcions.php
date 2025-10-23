<?php
function PDOconect()
{

  $host = 'mysql';
  $db = 'fitrail';
  $user = 'root';
  $pass = 'root';
  $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];

  try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    return $pdo;
  } catch (PDOException $e) {
    echo "" . $e->getMessage();
  }
  function h(string $s): string
  {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }
};

function leerUsuarios()
{

  $pdo = PDOconect();

  $leer = $pdo->query('SELECT * FROM cliente ORDER BY id');
  return $leer->fetchAll();
}


function AltaUsuarios($nombre, $email, $edad, $altura, $peso, $objetivo, $pass1, $pass2)
{

  $pdo = PDOconect();

  if ($nombre === '' || $email === '' || $edad === '' || $altura === '' || $peso  === ''  || $objetivo === '' || $pass1 === '' || $pass2 === '') {
    echo 'Rellena todos los campos.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email no valido.';
  } elseif ($pass1 !== $pass2) {
    echo 'Les contraseñas no coinciden.';
  } else {
    $stmt = $pdo->prepare('SELECT id FROM cliente WHERE email = :email');
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
      echo 'Ya existe un usuario con este Email.';
    } else {
      $hash = password_hash($pass1, PASSWORD_DEFAULT);
      $stmt = $pdo->prepare(
        'INSERT INTO cliente (nombre, email, edad, altura, peso, objetivo, password_hash) VALUES (:nombre, :email, :edad, :altura, :peso, :objetivo, :hash)'
      );
      $stmt->execute([
        'nombre' => $nombre,
        'email' => $email,
        'edad' => $edad,
        'peso' => $peso,
        'altura' => $altura,
        'objetivo' => $objetivo,
        'hash' => $hash
      ]);
    }
  }
}


function EditarUsuari($id, $nombre, $email, $pass1, $pass2)
{
  $pdo = PDOconect();

  if (empty($nombre) || empty($email)) {
    return "El nombre y el email son obligatorios.";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "El email no tiene un formato válido.";
  }
  if (!empty($pass1) || !empty($pass2)) {
    if ($pass1 !== $pass2) {
      return "Las contraseñas no coinciden.";
    }
    $password_hash = password_hash($pass1, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("
            UPDATE cliente SET nombre = :nombre, email = :email, password_hash = :password WHERE id = :id
        ");
    $stmt->execute([
      ':nombre' => $nombre,
      ':email' => $email,
      ':password' => $password_hash,
      ':id' => $id
    ]);
    return "Usuario actualizado correctamente con nueva contraseña.";
  } else {
    $stmt = $pdo->prepare("
            UPDATE cliente SET nombre = :nombre, email = :email WHERE id = :id");
    $stmt->execute([
      ':nombre' => $nombre,
      ':email' => $email,
      ':id' => $id
    ]);

    return "Usuario actualizado correctamente (sin cambiar la contraseña).";
  }
}

function ElimnarUsuari($id)
{
  $pdo = PDOconect();

  try {

    $stmt = $pdo->prepare("DELETE FROM cliente WHERE id = :id");

    $stmt->execute(['id' => $id]);
  } catch (PDOException $e) {

    return $e->getMessage();
  }
}
