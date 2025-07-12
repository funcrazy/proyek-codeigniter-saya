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


-- Dumping database structure for mercubuana
CREATE DATABASE IF NOT EXISTS `mercubuana` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mercubuana`;

-- Dumping structure for table mercubuana.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `dosen_id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dosen_id`),
  UNIQUE KEY `nip` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mercubuana.dosen: ~2 rows (approximately)
DELETE FROM `dosen`;
INSERT INTO `dosen` (`dosen_id`, `nip`, `nama_dosen`, `email`, `alamat`, `created_at`, `created_by`, `last_updated`, `last_updated_by`) VALUES
	(1, '19890101', 'Dr. Andi Wijaya', 'andi@example.com', 'Jl. Cemara No.3', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(2, '19890202', 'Prof. Dewi Lestari', 'dewi@example.com', 'Jl. Kenanga No.4', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL);

-- Dumping structure for table mercubuana.jurusan
CREATE TABLE IF NOT EXISTS `jurusan` (
  `jurusan_id` int NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`jurusan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mercubuana.jurusan: ~2 rows (approximately)
DELETE FROM `jurusan`;
INSERT INTO `jurusan` (`jurusan_id`, `nama_jurusan`, `fakultas`, `created_at`, `created_by`, `last_updated`, `last_updated_by`) VALUES
	(1, 'Teknik Informatika', 'Fakultas Ilmu Komputer', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(2, 'Sistem Informasi', 'Fakultas Ilmu Komputer', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL);

-- Dumping structure for table mercubuana.kontrak
CREATE TABLE IF NOT EXISTS `kontrak` (
  `kontrak_id` int NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` int NOT NULL,
  `mata_kuliah_id` int NOT NULL,
  `dosen_id` int NOT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kontrak_id`),
  UNIQUE KEY `mahasiswa_id` (`mahasiswa_id`,`mata_kuliah_id`,`semester`),
  KEY `mata_kuliah_id` (`mata_kuliah_id`),
  KEY `dosen_id` (`dosen_id`),
  CONSTRAINT `kontrak_ibfk_1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`mahasiswa_id`),
  CONSTRAINT `kontrak_ibfk_2` FOREIGN KEY (`mata_kuliah_id`) REFERENCES `mata_kuliah` (`mata_kuliah_id`),
  CONSTRAINT `kontrak_ibfk_3` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`dosen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mercubuana.kontrak: ~3 rows (approximately)
DELETE FROM `kontrak`;
INSERT INTO `kontrak` (`kontrak_id`, `mahasiswa_id`, `mata_kuliah_id`, `dosen_id`, `semester`, `nilai`, `created_at`, `created_by`, `last_updated`, `last_updated_by`) VALUES
	(1, 1, 1, 1, 'Genap 2024/2025', 'A', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(2, 1, 2, 2, 'Genap 2024/2025', 'B+', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(3, 2, 3, 1, 'Genap 2024/2025', 'A-', '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL);

-- Dumping structure for table mercubuana.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `mahasiswa_id` int NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text,
  `propinsi` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `jurusan_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mahasiswa_id`),
  UNIQUE KEY `nim` (`nim`),
  UNIQUE KEY `email` (`email`),
  KEY `jurusan_id` (`jurusan_id`),
  CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`jurusan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mercubuana.mahasiswa: ~4 rows (approximately)
DELETE FROM `mahasiswa`;
INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama_mahasiswa`, `email`, `tgl_lahir`, `alamat`, `propinsi`, `no_hp`, `jurusan_id`, `created_at`, `created_by`, `last_updated`, `last_updated_by`) VALUES
	(1, '220001', 'Budi Santoso', 'budi@example.com', '2003-05-01', 'Jl. Melati No.1', 'DKI Jakarta', '081234567890', 1, '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(2, '220002', 'Siti Amina', 'siti@example.com', '2003-06-15', 'Jl. Anggrek No.2', 'Jawa Barat', '082345678901', 2, '2025-05-22 16:30:32', NULL, '2025-05-22 17:47:18', NULL),
	(4, '220003', 'Iuy Prasetio', 'iuy@example.com', '2006-06-24', 'gambir', 'jakarta', '083163137', 1, '2025-05-22 17:41:56', NULL, '2025-05-22 17:47:10', NULL);

-- Dumping structure for table mercubuana.mata_kuliah
CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `mata_kuliah_id` int NOT NULL AUTO_INCREMENT,
  `kode_mata_kuliah` varchar(50) NOT NULL,
  `nama_mata_kuliah` varchar(100) NOT NULL,
  `jumlah_sks` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mata_kuliah_id`),
  UNIQUE KEY `kode_mata_kuliah` (`kode_mata_kuliah`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mercubuana.mata_kuliah: ~3 rows (approximately)
DELETE FROM `mata_kuliah`;
INSERT INTO `mata_kuliah` (`mata_kuliah_id`, `kode_mata_kuliah`, `nama_mata_kuliah`, `jumlah_sks`, `created_at`, `created_by`, `last_updated`, `last_updated_by`) VALUES
	(1, 'IF101', 'Pemrograman Web', 3, '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(2, 'IF102', 'Basis Data', 3, '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL),
	(3, 'IF103', 'Jaringan Komputer', 2, '2025-05-22 16:30:32', NULL, '2025-05-22 16:30:32', NULL);

-- Dumping structure for table mercubuana.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mercubuana.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
