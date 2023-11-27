<?php

include_once("./model/contactModel.php");

class ContactController
{
    private $model;

    public function __construct()
    {
        $this->model = new ContactModel();
    }

    public function getContactController(){
        include("./view/contact.php");
    }

    function setContactController()
    {
        $contact = $this->model->setContactModel($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['message']);

        $this->getContactController();
    }
}