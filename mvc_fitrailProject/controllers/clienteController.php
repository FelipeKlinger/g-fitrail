<?php

class clienteController {

    private $model;

    public function __construct($pdo){

        $this->model = new clienteModel($pdo);
    }




}




?>