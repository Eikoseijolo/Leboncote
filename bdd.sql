-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour leboncote
CREATE DATABASE IF NOT EXISTS `leboncote` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `leboncote`;

-- Listage de la structure de table leboncote. user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.user : ~0 rows (environ)
DELETE FROM `user`;
INSERT INTO `user` (`user_id`, `user_nom`, `user_password`) VALUES
	(1, 'willeggzeg', 'gzegzeg'),
	(2, 'willgergge', 'ergrrger'),
	(3, 'will02', 'will02400');

-- Listage de la structure de table leboncote. vente
CREATE TABLE IF NOT EXISTS `vente` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `article` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descriptions` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_article`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.vente : ~4 rows (environ)
DELETE FROM `vente`;
INSERT INTO `vente` (`id_article`, `article`, `descriptions`, `prix`, `img`) VALUES
	(9, 'Corsair', 'bar de ram', 56, 'https://m.media-amazon.com/images/I/518T3hrUY4L._AC_SL1200_.jpg'),
	(10, 'Ecran pc', 'Trés bon ecran', 150, 'https://m.media-amazon.com/images/I/71r8p6wpZEL._AC_SL1500_.jpg'),
	(11, 'Clavier razer', 'Présentant une finition mate propre, le boîtier est suffisamment robuste pour résister à de longues heures d’utilisation intense et régulière', 200, 'https://m.media-amazon.com/images/I/712e7S94B+L._AC_SL1500_.jpg'),
	(12, 'Logitech Souris de jeu sans fil G703 LIGHTSPEED', 'La souris gaming Logitech G703 LIGHTSPEED rencontre la nouvelle génération du capteur HERO 25K. Devenez pro avec une précision de jeu à 200 - 25’600 dpi et zéro lissage, et des performances sans fil améliorées.', 90.55, 'https://m.media-amazon.com/images/I/5138fK1qKuL._AC_SL1028_.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
