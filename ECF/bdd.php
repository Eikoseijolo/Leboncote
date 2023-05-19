<?php

// Require_once pour connecter la BDD au fichier PHP
require_once('./webfiles/php/actions/dbconnect.php');

// Création d'une table si celle-ci n'existe pas
$queryCreateUserTable = "CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
)";

// Création d'une table si celle-ci n'existe pas
$queryCreateVenteTable = "CREATE TABLE IF NOT EXISTS `vente` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `article` varchar(50) DEFAULT NULL,
  `descriptions` varchar(200) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
)";

// Suppression des données existantes dans la table vente
$queryDeleteVenteData = "DELETE FROM `vente`";

// Ajout de nouvelles valeurs dans la table vente
$queryInsertVenteData = "INSERT INTO `vente` (`id_article`, `article`, `descriptions`, `prix`, `img`) VALUES
	(2, 'pomme', 'le sport cest bien', 200, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg'),
	(3, 'pomme', 'le sport cest bien', 200, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg'),
	(4, 'Velo', 'Le velo cest bien', 600, 'https://m.media-amazon.com/images/I/81tBupHDgQL._AC_SX679_.jpg'),
	(7, 'pomme', 'ryrj,ud', 22, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg')";

// Exécution des requêtes
if ($conn->query($queryCreateUserTable) === TRUE) {
  echo "La table user a été créée avec succès<br>";
} else {
  echo "Erreur lors de la création de la table user : " . $conn->error . "<br>";
}

if ($conn->query($queryCreateVenteTable) === TRUE) {
  echo "La table vente a été créée avec succès<br>";
} else {
  echo "Erreur lors de la création de la table vente : " . $conn->error . "<br>";
}

if ($conn->query($queryDeleteVenteData) === TRUE) {
  echo "Les données existantes dans la table vente ont été supprimées avec succès<br>";
} else {
  echo "Erreur lors de la suppression des données existantes dans la table vente : " . $conn->error . "<br>";
}

if ($conn->query($queryInsertVenteData) === TRUE) {
  echo "Les nouvelles valeurs ont été ajoutées avec succès dans la table vente<br>";
} else {
  echo "Erreur lors de l'ajout des nouvelles valeurs dans la table vente : " . $conn->error . "<br>";
}

?>