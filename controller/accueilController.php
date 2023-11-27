<?php

include_once("./model/velosModel.php");

class AccueilController
{
    private $model;

    public function __construct()
    {
        $this->model = new VelosModel();
    }

    function getAccueilController()
    {
        $velos = $this->model->getLastVelosModel();
        include("view/accueil.php");
    }
}