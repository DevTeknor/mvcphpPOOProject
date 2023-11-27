DROP DATABASE IF EXISTS smartbike;
CREATE DATABASE smartbike;
USE smartbike;

CREATE TABLE velos (
    id_velo INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    modele VARCHAR(30) NOT NULL,
    description_ VARCHAR(200) NOT NULL,
    photo VARCHAR(150) NOT NULL,
    prix INT NOT NULL
);

CREATE TABLE commander (
    id_commande INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message_ TEXT NOT NULL,
    id_velo INT NOT NULL,
    FOREIGN KEY (id_velo) REFERENCES velos(id_velo)
);

CREATE TABLE contact (
    id_contact INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(300) NOT NULL,
    message_ TEXT NOT NULL
);

INSERT INTO velos(modele,description_,photo,prix) VALUES
    ('BikeOne','Premier vélo développé par notre entreprise, il satisfera vos attente en tant que moyen de locomotion adapté à tout terrain !','BikeOne.jpg',679),
    ('BikeFirst',"Vélo d'entrée de gamme. Profitez d'une capacité à vous déplacer à petit prix ! Idéal pour commencer le vélo en ville.",'BikeFirst.jpg',249),
    ('Bike22','Voici notre VTT de descente de notre nouvelle gamme. Vivez vos expériences pleinement avec ce produit qui vous fera voler sur les montagnes !','Bike22.jpg',999),
    ('Bike5','Taillé pour la course, notre nouveau produit vous rapprochera de la compétition à prix abordable. Profitez du savoir-faire de nos ingénieurs pour performer et battre des records !','Bike5.jpg',1999);
