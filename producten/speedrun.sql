-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 18 mrt 2021 om 13:20
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedrun`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merk` varchar(255) NOT NULL,
  `naam` varchar(200) NOT NULL,
  `prijs` int(5) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `merk`, `naam`, `prijs`, `img`) VALUES
(1, 'Nike', 'AIR MAX 90 - Sneaker laag', 140, 'https://img01.ztat.net/article/spp-media-p1/ec86ff0fd9ee3edd88384f768859b8a7/dd768222bf9549a2b79ad17e9386ea75.jpg?imwidth=762&filter=packshot'),
(2, 'Nike', 'AIR FORCE 1 \'07 - Sneaker laag', 100, 'https://img01.ztat.net/article/spp-media-p1/af50ae492ef93f9c81a60b4c7f631141/705f3c89f2454bde916a4ffb306710c0.jpg?imwidth=1800&filter=packshot');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
