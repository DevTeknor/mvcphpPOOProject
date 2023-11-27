<?php

include_once("bdd.php");

class CommanderModel
{
    private $bdd;

    public function __construct(){
        $this->bdd = Bdd::connexion();
    }

    public function getCommanderModel(){
        return $this->bdd->query("SELECT id_velo, modele FROM velos")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setCommanderModel($id_velo,$nom, $prenom, $email, $message){
        $commander = $this->bdd->prepare("INSERT INTO commander (nom, prenom, email, message_, id_velo) VALUES (?, ?, ?, ?, ?)");
        return $commander->execute([$nom,$prenom,$email,$message,$id_velo]);
    }
}