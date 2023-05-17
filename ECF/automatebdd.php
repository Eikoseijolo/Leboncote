<?php

$reqCreate = "CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL,
  `admin_nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `admin_prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `admin_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";

-- Listage des données de la table leboncote.admin : ~2 rows (environ)
DELETE FROM `admin`;
INSERT INTO `admin` (`admin_id`, `admin_nom`, `admin_prenom`, `admin_password`) VALUES
	(1, 'warren', 'warren', '1234'),
	(2, 'william', 'william', '1234'),
	(3, 'vincent', 'vincent', '1234');

-- Listage de la structure de table leboncote. user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_prenom` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.user : ~0 rows (environ)
DELETE FROM `user`;
INSERT INTO `user` (`user_id`, `user_nom`, `user_prenom`, `user_password`) VALUES
	(1, 'vincent', 'vincent', 'azer'),
	(2, 'vincent', 'vincent', 'poiuy');

-- Listage de la structure de table leboncote. vente
CREATE TABLE IF NOT EXISTS `vente` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `article` varchar(50) DEFAULT NULL,
  `descriptions` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_article`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.vente : ~8 rows (environ)
DELETE FROM `vente`;
INSERT INTO `vente` (`id_article`, `article`, `descriptions`, `prix`, `img`) VALUES
	(2, 'pomme', 'le sport cest bien', 200, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg'),
	(3, 'pomme', 'le sport cest bien', 200, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg'),
	(4, 'Velo', 'Le velo cest bien', 600, 'https://m.media-amazon.com/images/I/81tBupHDgQL._AC_SX679_.jpg'),
	(7, 'pomme', 'ryrj,ud', 22, 'https://m.media-amazon.com/images/I/61p22DCb8ZL._AC_SY879_.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
