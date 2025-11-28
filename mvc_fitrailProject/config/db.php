<?php
$DB_HOST = "mysql";
$DB_NAMER = "fitrail";
$DB_USER = "root";
$DB_PASS = "";

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAMER;charset=utf8mb4";

try {

    $pdo = new PDO($dsn, $DB_USER, $DB_PAS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

} catch (PDOException $error) {

    die("Error de conexión a la base de datos: " . $error->getMessage());
}


?>