<?php

require __DIR__ . '/../models/clienteModel.php';

class clienteController
{

    private $model;

    public function __construct($pdo)
    {

        $this->model = new clienteModel($pdo);
    }



    function listarClientes()
    {

        $leerclientes = $this->model->listarClientes();

        require __DIR__ . '/../views/agregar.php';

    }





}




?>