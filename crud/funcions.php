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

function leerUsuarios(){

  $pdo = PDOconect(); 

  $leer = $pdo->query('SELECT * FROM cliente ORDER BY id');
  return $leer->fetchAll();
}


function AltaUsuarios(){

 $pdo = PDOconect();
 
    $missatge = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom   = trim($_POST['nom'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $pass1 = $_POST['password']  ?? '';
  $pass2 = $_POST['password2'] ?? '';

  if ($nom === '' || $email === '' || $pass1 === '' || $pass2 === '') {
    $missatge = 'Omple tots els camps.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $missatge = 'Email no vàlid.';
  } elseif ($pass1 !== $pass2) {
    $missatge = 'Les contrasenyes no coincideixen.';
  } else {
    $stmt = $pdo->prepare('SELECT id FROM usuaris WHERE email = :email');
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
      $missatge = 'Ja existeix un usuari amb aquest email.';
    } else {
      $hash = password_hash($pass1, PASSWORD_DEFAULT);
      $stmt = $pdo->prepare(
        'INSERT INTO usuaris (nom, email, password_hash) VALUES (:nom, :email, :hash)'
      );
      $stmt->execute(['nom' => $nom, 'email' => $email, 'hash' => $hash]);
      $missatge = 'Registre complet! Ara pots iniciar sessió.';
    }
  }
}
}







?>