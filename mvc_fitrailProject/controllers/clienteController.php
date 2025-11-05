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


    public function agregarClientes(){


        require __DIR__ . '/../views/agregar.php';


    }


    public function editarClientes(){

    }

    public function eliminarClientes(){

    }
    






}




?>