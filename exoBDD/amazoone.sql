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


-- Listage de la structure de la base pour amazoone
CREATE DATABASE IF NOT EXISTS `amazoone` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `amazoone`;

-- Listage de la structure de table amazoone. article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table amazoone.article : ~8 rows (environ)
INSERT INTO `article` (`id`, `designation`, `img`, `prix`) VALUES
	(4, 'Water TV Stick', 'https://i.ytimg.com/vi/dNTttMZ20pw/maxresdefault.jpg', 12.5),
	(5, 'Raquette de Penis', 'https://lequotidien.lu/wp-content/uploads/2021/01/310021_cx__cy__cw__ch_-310x207.jpeg', 34.95),
	(6, 'Clavier mécanique PlasticSeries', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61ZD3QGdU3L._AC_SX425_.jpg', 99.99),
	(7, 'Coco cola', 'https://images.theconversation.com/files/410356/original/file-20210708-23-1es550t.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=900.0&fit=crop', 7.85),
	(8, 'Alcool Vodka', 'https://img.lamontagne.fr/gXW-sMMcQDuV43SjHRv8qFLOYYpyf1FhvAn0C5pOTlQ/fit/657/438/sm/0/bG9jYWw6Ly8vMDAvMDAvMDYvNDMvNTUvMjAwMDAwNjQzNTUzNw.jpg', 19),
	(9, 'Imprichiante', 'https://i.ytimg.com/vi/pcig4EjfBuI/maxresdefault.jpg', 49.25),
	(10, 'Coffre faible', 'https://cdn.manomano.com/images/images_products/10735498/P/18962477_1.jpg', 33.99);

-- Listage de la structure de table amazoone. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table amazoone.utilisateurs : ~3 rows (environ)
INSERT INTO `utilisateurs` (`id`, `mail`, `user`, `password`) VALUES
	(12, 'tt@tt.c', 'pichuu', 'd89af753c03e398c87e9d66ab393b590c908296494eb3551bbdfd28124d22c74'),
	(13, 'pijame@mailinator.com', 'sidid', '2f6563ab4fb0a7aedbc0165aa5c75dfc11bc6f7e9f750343e73b6bac8f91ac6c'),
	(14, 'vamon@mailinator.com', 'parapluie', 'b8d47aa82bf6200643ad17780313c8c56ec548bf50cf315dc841124d013905ea');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
