<?php

include_once("./model/velosModel.php");

class VelosController
{
    private $model;

    public function __construct()
    {
        $this->model = new VelosModel();
    }

    function getVelosController()
    {
        $velos = $this->model->getVelosModel();
        include("view/velos.php");
    }
}