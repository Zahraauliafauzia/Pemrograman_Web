-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for webpribadi
CREATE DATABASE IF NOT EXISTS `webpribadi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `webpribadi`;

-- Dumping structure for table webpribadi.datamessage
CREATE TABLE IF NOT EXISTS `datamessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table webpribadi.datamessage: ~12 rows (approximately)
/*!40000 ALTER TABLE `datamessage` DISABLE KEYS */;
INSERT INTO `datamessage` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
	(2, 'Farsya', 'far@gmail.com', '11111111111111111111111', 'Kak tipsnya saat b leaching rambut dong kak ! PLEASE'),
	(3, 'ewfewf', 'wefew', 'wefwe', 'wefew'),
	(4, 'wedfewf', 'aefadsf@gmail.com', 'wefew', 'dsfdsf'),
	(5, 'aaaaaa', 'aaaaa@gmail.com', 'ssssssssssss', 'popo'),
	(6, 'bbbb', 'bbbbbbb@gmail.com', '', ''),
	(7, 'dfsgsdfgds', 'dsfdsf', 'sdfdsf', 'sdfdsf'),
	(8, 'uuuuu', 'uuuu', 'dsfds', 'sdf'),
	(10, 'QQQQQQQQ', 'QQQQQQQQ', 'QQQQQ', 'QQQQQQQQ'),
	(11, '', '', '', ''),
	(12, 'awdasd', 'asd', 'asdsadasd', 'sdasd'),
	(13, 'Zahra Aulia Fauzia', 'syiivadwi@gmail.com', 'wdawd', 'asdawd'),
	(14, 'slkdfsj', 'sdlkfjsfd', 'sdkfjsflksj', 'dsljkfsdjsfj');
/*!40000 ALTER TABLE `datamessage` ENABLE KEYS */;

-- Dumping structure for table webpribadi.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usernamelogin` varchar(50) NOT NULL,
  `passwordlogin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table webpribadi.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `usernamelogin`, `passwordlogin`) VALUES
	(1, 'raracaly', '$2y$10$JkRmAnZRZBcnLe82J/uZ0u8KzeRd0TAe5cLxpROwUy4ujUDmybZUa'),
	(2, 'hallobiru', '$2y$10$dzxcoQx4lzNXH7OTL6sXb.AQU6IFIfJuNfvc//zJzpIEmQAs05vYq');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
