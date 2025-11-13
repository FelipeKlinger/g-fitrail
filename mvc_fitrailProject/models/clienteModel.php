<?php


class clienteModel
{
    private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }


 public function listarClientes(){
  
  $stmt = $this->pdo->query('SELECT * FROM cliente ORDER BY id');
  return $stmt->fetchAll();
}


function agregarClientes($nombre, $email, $edad, $altura, $peso, $objetivo, $pass1, $pass2)
{

  if ($nombre === '' || $email === '' || $edad === '' || $altura === '' || $peso  === ''  || $objetivo === '' || $pass1 === '' || $pass2 === '') {
    echo 'Rellena todos los campos.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email no valido.';
  } elseif ($pass1 !== $pass2) {
    echo 'Les contraseñas no coinciden.';
  } else {
    $stmt = $this->pdo->prepare('SELECT id FROM cliente WHERE email = :email');
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
      echo 'Ya existe un usuario con este Email.';
    } else {
      $hash = password_hash($pass1, PASSWORD_DEFAULT);
      $stmt = $this->pdo->prepare(
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


function editarClientes($id, $nombre, $email, $pass1, $pass2)
{

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
    $stmt = $this->pdo->prepare("
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
    $stmt = $this->pdo->prepare("
            UPDATE cliente SET nombre = :nombre, email = :email WHERE id = :id");
    $stmt->execute([
      ':nombre' => $nombre,
      ':email' => $email,
      ':id' => $id
    ]);

    return "Usuario actualizado correctamente (sin cambiar la contraseña).";
  }
}

function eliminarClientes($id)
{

  try {

    $stmt = $this->pdo->prepare("DELETE FROM cliente WHERE id = :id");

    $stmt->execute(['id' => $id]);
  } catch (PDOException $e) {

    return $e->getMessage();
  }
}
}
?>