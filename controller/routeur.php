<?php

$page = @$_GET['page'];

switch ($page) {
    case 'accueil':
        include_once('accueilController.php');
        $accueil = new AccueilController();
        $accueil->getAccueilController();
        break;

    case 'velos':
        include_once('velosController.php');
        $velos = new VelosController();
        $velos->getVelosController();
        break;

    case 'commander':
        if(isset($_GET['velo'])){
            include_once('uniqueVeloController.php');
            $uniqueVelo = new UniqueVeloController();
            $uniqueVelo->getUniqueVeloController();
        } else if (isset($_GET['commande'])){
            include_once('commanderController.php');
            $commander = new CommanderController();
            $commander->setCommanderController();
        } else {
            include_once('commanderController.php');
            $commander = new CommanderController();
            $commander->getCommanderController();
        }
        break;

    case 'contact':
        include_once('contactController.php');
        $contact = new ContactController();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $contact->setContactController();
        } else {
            $contact->getContactController();
        }
        break;

    default:
        echo "<main><h4>404 NOT FOUND</h4></main>";
        break;

}