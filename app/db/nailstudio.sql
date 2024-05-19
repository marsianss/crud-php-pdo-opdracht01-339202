-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 22 apr 2024 om 14:15
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roze` varchar(7) DEFAULT NULL,
  `blauw` varchar(7) DEFAULT NULL,
  `roze2` varchar(7) DEFAULT NULL,
  `geel` varchar(7) DEFAULT NULL,
  `telefoonnummer` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `afspraak_datum` datetime DEFAULT NULL,
  `nagelbijt_arrangement` tinyint(1) DEFAULT NULL,
  `luxe_manicure` tinyint(1) DEFAULT NULL,
  `nagelreparatie` tinyint(1) DEFAULT NULL,
  `verzend_datum_tijd` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
