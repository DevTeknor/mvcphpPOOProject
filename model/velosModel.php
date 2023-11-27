<?php

include_once("bdd.php");

class VelosModel
{
    private $bdd;

    public function __construct(){
        $this->bdd = Bdd::connexion();
    }

    public function getLittleVelosModel(){
        return $this->bdd->query("SELECT (photo,prix) FROM velos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVelosModel(){
        return $this->bdd->query("SELECT * FROM velos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLastVelosModel(){
        return $this->bdd->query("SELECT * FROM velos ORDER BY (id_velo) DESC LIMIT 1")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUniqueVeloModel($id_velo){
        return $this->bdd->query("SELECT * FROM velos WHERE id_velo = $id_velo")->fetchAll(PDO::FETCH_ASSOC);
    }
}