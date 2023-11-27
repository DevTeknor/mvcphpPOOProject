<?php

include_once("bdd.php");

class ContactModel
{
    private $bdd;

    public function __construct(){
        $this->bdd = Bdd::connexion();
    }

    public function setContactModel($nom,$prenom,$email,$message){
        $contact = $this->bdd->prepare("INSERT INTO contact (nom, prenom, email, message_) VALUES (?, ?, ?, ?)");
        return $contact->execute([$nom,$prenom,$email,$message]);
    }
}