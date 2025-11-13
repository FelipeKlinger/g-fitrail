<?php

require __DIR__ . '/../models/clienteModel.php';

class clienteController
{

    private $model;

    public function __construct($pdo)
    {
    $this->model = new clienteModel($pdo);
    }
    
    public function listarClientes()
    {
    $leerclientes = $this->model->listarClientes();
                require __DIR__ . '/../views/lista.php';
 }
    public function agregarClientes()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre   = $_POST['nombre'] ?? '';
            $email    = $_POST['email'] ?? '';
            $edad     = $_POST['edad'] ?? '';
            $altura   = $_POST['altura'] ?? '';
            $peso     = $_POST['peso'] ?? '';
            $objetivo = $_POST['objetivo'] ?? '';
            $pass1    = $_POST['pass1'] ?? '';
            $pass2    = $_POST['pass2'] ?? '';

            $this->model->agregarClientes($nombre, $email, $edad, $altura, $peso, $objetivo, $pass1, $pass2);
            header('Location: index.php?accion=listarClientes');
            exit;
        } else {
            require __DIR__ . '/../views/agregar.php';
        }
    }


    public function editarClientes()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id     = $_POST['id'] ?? '';
            $nombre = $_POST['nombre'] ?? '';
            $email  = $_POST['email'] ?? '';
            $pass1  = $_POST['pass1'] ?? '';
            $pass2  = $_POST['pass2'] ?? '';

            $result = $this->model->editarClientes($id, $nombre, $email, $pass1, $pass2);

            header('Location: index.php?accion=listarClientes');
            exit;
        } else {
            $id = $_GET['id'] ?? '';
            $cliente = null;

            if ($id) {
                $clientes = $this->model->listarClientes();
                foreach ($clientes as $c) {
                    if ($c['id'] == $id) {
                        $cliente = $c;
                        break;
                    }
                }
            }
            require __DIR__ . '/../views/editar.php';
        }
    }

    public function eliminarClientes()
    {
        $id = $_GET['id'] ?? '';
        if ($id !== '') {
            $this->model->eliminarClientes($id);
            header('Location: index.php');
            exit;
        }
    
        require __DIR__ . "/../views/eliminar.php";
    }
}

?>
