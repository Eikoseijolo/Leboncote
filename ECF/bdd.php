<?php

 // Require_once pour connecter la BDD au fichier PHP
require_once('./webfiles/php/actions/dbconnect.php')

// $reqCreate = $database 'leboncote'


// Création d'une table si celle-ci n'existe pas    
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
)


// Création d'une table si celle-ci n'existe pas
CREATE TABLE IF NOT EXISTS `vente` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `article` varchar(50) DEFAULT NULL,
  `descriptions` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_article`) USING BTREE
) 

// Suppression & Ajout de valeurs dans la table vente
DELETE FROM `vente`;
INSERT INTO `vente` (`id_article`, `article`, `descriptions`, `prix`, `img`) VALUES
	(2, 'pomme', 'le sport cest bien', 200, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg'),
	(3, 'pomme', 'le sport cest bien', 200, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg'),
	(4, 'Velo', 'Le velo cest bien', 600, 'https://m.media-amazon.com/images/I/81tBupHDgQL._AC_SX679_.jpg'),
	(7, 'pomme', 'ryrj,ud', 22, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg');

?>