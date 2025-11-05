<?php

require __DIR__ . '/config/db.php';

$controller = new clienteController($pdo);

 
$accio = $_GET['accio'] ?? 'llista';

switch ($accio) {

    case 'afegir':
        $controller->AfegirJoc();
        break;

    case 'editar':
        $controller->EditarJoc();
        break;

    case 'eliminar':
        $controller->EliminarJoc();
        break;

    default:

        $controller->llistarJocs();
        break;

}

?>