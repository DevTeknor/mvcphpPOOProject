Il faut taper : 'chcp 65001' dans le terminal avant de se connecter à MariaDB pour intégrer tout ce qui est accent etc...

Utilisation de XAMPP (ou équivalent). Nécessite Apache2 et mysql.
Le fichier initBike.sql permet d'initialiser la base de donnée par défaut, avec les différents produits en vente.

Point d'entrée du site : http://localhost/mvcphpPOOProject/index.php?page=accueil

J'ai utilisé 2 manières d'envoyer les formulaires : pour les commandes j'utilise l'URL pour initialiser "commande", dont je vérifie l'existance pour les différents comportements. Dans l'autre cas je ne mets rien dans le "action" du formulaire, et je vérifie simplement s'il existe une requête POST pour différencier les comportements.
