<?php

require __DIR__ . '/config/db.php';
require_once __DIR__ . '/controllers/clienteController.php';

$controller = new clienteController($pdo);

 
$accio = $_GET['accion'];

switch ($accio) {

    case 'agregar':
        $controller->agregarClientes();
        break;

    case 'editar':
        $controller->editarClientes();
        break;

    case 'eliminar':
        $controller->eliminarClientes();
        break;

    default:

        $controller->listarClientes();
        break;

}

?>