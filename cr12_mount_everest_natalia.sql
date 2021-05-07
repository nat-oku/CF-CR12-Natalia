-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Mai 2021 um 19:51
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr12_mount_everest_natalia`
--
CREATE DATABASE IF NOT EXISTS `cr12_mount_everest_natalia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cr12_mount_everest_natalia`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `longitude` float(10,6) NOT NULL,
  `latitude` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `locationName`, `price`, `descr`, `picture`, `longitude`, `latitude`) VALUES
(2, 'Alaska', 453, 'Alaska, where the world ends?', '609578546a9d4.jpg', 65.030449, -150.653915),
(3, 'Kuala Lumpur', 102, 'Book now and save up to 25%!', '60957d10ac606.png', -15.000000, 13.738474),
(6, 'Oahu Surf Breaks', 1200, 'The best destination for surfing in the world.', '60955fc3312b1.jpg', 21.463070, -158.007843),
(7, 'Cerro del chupÃ³n', 900, 'The best destination for enjoying city and hiking.', '6095777a38fbf.jpg', 25.606684, -100.291161),
(8, 'Crested Butte', 1230, 'Crested butte is nothing for a crusty butt ;-)', '609577b483b51.jpg', 38.884899, -106.943932),
(9, 'Kluane Nationalpark', 986, 'Come to Kluane and leave happy.', '60957876736a4.jpg', 60.750111, -139.499878),
(10, 'Chandrashila dream', 2350, 'Discover the â€œMoon Rockâ€ of India.', '60957898b3b56.jpg', 30.813570, 79.281357),
(11, 'Jbel tidirhine', 780, 'Morocco is not only sand. Explore the vast valleys full of snow.', '609578b68e423.jpg', 34.841679, -4.517080),
(12, 'DivÄibare', 550, 'Enjoy nature, hiking and healthy delicious food in Serbia.', '609578ca0c1f9.jpg', 44.113258, 19.976660);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
