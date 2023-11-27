<?php

include_once("./model/velosModel.php");

class UniqueVeloController
{
    private $model;

    public function __construct()
    {
        $this->model = new VelosModel();
    }

    public function getUniqueVeloController(){
        $velos = $this->model->getUniqueVeloModel($_GET['velo']);
        include("view/uniqueVelo.php");
    }
}