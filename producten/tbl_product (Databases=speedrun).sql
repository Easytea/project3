-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 28 mrt 2021 om 14:17
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
-- Tabelstructuur voor tabel `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `object` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `object`) VALUES
(2, 'Nike Air VaporMax Evo', 'nikeAirVaporMaxEvo.jpg', 224.99, 'schoen'),
(1, 'Nike React Miler 2', 'nikeReactMiler2.jpg', 129.99, 'schoen'),
(3, 'Nike AirForce 1 07', 'nikeAirForce107.jpg', 99.99, 'schoen'),
(4, 'On CLoudUltra', 'onCloudultra.jpg', 189.95, 'schoen'),
(5, 'Adidas Supernova', 'adidasSupernova.jpg', 89.95, 'schoen'),
(6, 'Adidas Adizero Pro', 'adidasAdizeroPro.jpg', 179.95, 'schoen'),
(7, 'Asics Gel Nimbus 23', 'asicsGelNimbus23.jpg', 169.95, 'schoen'),
(8, 'Nike AirMax 1 Evolution of Icons', 'nikeAirMax1EvolutionIcons.jpg', 149.99, 'schoen'),
(9, 'Nike Revolution 5', 'nikeRevolution5.jpg', 69.69, 'schoen'),
(10, 'Adidas Runfalcon 2.0', 'adidasRunfalcon2.jpg', 84.95, 'schoen'),
(11, 'Asics Gel Contend 7', 'asicsGelContend7.jpg', 59.95, 'schoen'),
(12, 'Mizuno Wave Daichi 5', 'mizunoWaveDaichi5.jpg', 74.95, 'schoen'),
(13, 'Nike Park', 'nikePark.jpg', 25.60, 'shirt'),
(14, 'Nike Pro 5 Longsleeve', 'nikePro5Longsleeve.jpg', 34.99, 'shirt'),
(15, 'Nike Tiempo Premier', 'nikeTiempoPremier.jpg', 24.60, 'shirt'),
(16, 'Adidas Runner Shirt', 'adidasRunnerShirt.jpg', 39.95, 'shirt'),
(17, 'Adidas Own THe Run', 'adidasOwnTheRun.jpg', 29.95, 'shirt'),
(18, 'Craft Prime ', 'craftPrimeShirt.jpg', 29.95, 'shirt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
