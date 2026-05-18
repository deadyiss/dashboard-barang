-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for db_praktikum_php
CREATE DATABASE IF NOT EXISTS `db_praktikum_php` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_praktikum_php`;

-- Dumping structure for table db_praktikum_php.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori_id` int DEFAULT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `stok` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_praktikum_php.barang: ~8 rows (approximately)
INSERT INTO `barang` (`id`, `kategori_id`, `nama_barang`, `harga`, `stok`) VALUES
	(2, 2, 'Elektronik', 50000, 50),
	(11, 3, 'Pulpen', 3000, 10),
	(12, 4, 'Pensil', 3000, 0),
	(13, 5, 'Penghapus', 5000, 50),
	(14, 6, 'Sticker', 2000, 10),
	(15, 7, 'Baju', 375000, 10),
	(32, 3, 'tv', 2000, 6),
	(33, 8, 'Case', 40000, 2);

-- Dumping structure for table db_praktikum_php.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_praktikum_php.kategori: ~8 rows (approximately)
INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
	(1, 'Elektronik'),
	(2, 'Sepatu'),
	(3, 'Baju'),
	(4, 'Sandal'),
	(5, 'Celana'),
	(6, 'Botol'),
	(7, 'Sembako'),
	(8, 'Mebel'),
	(9, 'Tas'),
	(10, 'Buku');

-- Dumping structure for table db_praktikum_php.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_praktikum_php.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
