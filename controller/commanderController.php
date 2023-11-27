<?php

include_once("./model/commanderModel.php");

class CommanderController
{
    private $model;

    public function __construct()
    {
        $this->model = new CommanderModel();
    }

    public function getCommanderController(){
        $velos = $this->model->getCommanderModel();
        include("./view/commander.php");
    }

    function setCommanderController()
    {
        $commander = $this->model->setCommanderModel($_POST['modele'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['message']);

        $this->getCommanderController();
    }
}