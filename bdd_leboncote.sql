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

-- Listage de la structure de table leboncote. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL,
  `admin_nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `admin_prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `admin_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.admin : ~0 rows (environ)
DELETE FROM `admin`;
INSERT INTO `admin` (`admin_id`, `admin_nom`, `admin_prenom`, `admin_password`) VALUES
	(1, 'warren', 'warren', '1234'),
	(2, 'william', 'william', '1234'),
	(3, 'vincent', 'vincent', '1234');

-- Listage de la structure de table leboncote. user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_prenom` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.user : ~0 rows (environ)
DELETE FROM `user`;

-- Listage de la structure de table leboncote. vente
CREATE TABLE IF NOT EXISTS `vente` (
  `id_article` int NOT NULL DEFAULT '0',
  `article` varchar(50) DEFAULT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_article`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table leboncote.vente : ~1 rows (environ)
DELETE FROM `vente`;
INSERT INTO `vente` (`id_article`, `article`, `description`, `prix`, `img`) VALUES
	(1, 'bouteille', 'bouteille d\'eau', 2, 'https://www.amazon.fr/BORMIOLI-ROCCO-Bouteille-Lt-Atelier/dp/B014PEUFFQ/ref=sr_1_8?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1VK2P726XLD2J&keywords=bouteille&qid=1684143526&sprefix=bouteille%2Caps%2C81&sr=8-8');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
