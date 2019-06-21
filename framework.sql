-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 jun 2019 om 09:28
-- Serverversie: 5.6.37
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL,
  `event_time` time NOT NULL,
  `event_rider` varchar(255) NOT NULL,
  `event_horse` varchar(255) NOT NULL,
  `event_price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `events`
--

INSERT INTO `events` (`event_id`, `event_time`, `event_rider`, `event_horse`, `event_price`) VALUES
(23, '17:00:00', '99041398', '6', 55),
(24, '15:13:00', '99041398', '9', 0),
(29, '15:15:00', '99041398', '3', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `horses`
--

CREATE TABLE IF NOT EXISTS `horses` (
  `id` int(11) NOT NULL,
  `jumpsport` varchar(255) NOT NULL,
  `horse_age` int(11) NOT NULL,
  `horse_race` varchar(255) NOT NULL,
  `horse_name` varchar(255) NOT NULL,
  `horse_height` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `horses`
--

INSERT INTO `horses` (`id`, `jumpsport`, `horse_age`, `horse_race`, `horse_name`, `horse_height`) VALUES
(1, 'nee', 15, 'pony', 'duncan', '147'),
(2, 'ja', 12, 'paard', 'Amika', '187'),
(3, 'ja', 16, 'paard', 'Amadeus', '190'),
(6, 'nee', 16, 'pony', 'Klaas', '147.4'),
(7, 'ja', 15, 'paard', 'amika', '150'),
(9, 'ja', 45, 'paard', 'duncan', '175');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_adres` varchar(255) DEFAULT NULL,
  `visitor_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99041414 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `visitors`
--

INSERT INTO `visitors` (`visitor_id`, `visitor_name`, `visitor_adres`, `visitor_phone`) VALUES
(99041398, 'Lashawn', 'Heinlantstraat 76', '0646157900'),
(99041409, 'Bas', 'saaskln 55', '0629472847'),
(99041411, 'Hermelientje', 'Hogwarts', '9876545674'),
(99041413, 'nnnnn', 'nnnnn', '0612345678');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexen voor tabel `horses`
--
ALTER TABLE `horses`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT voor een tabel `horses`
--
ALTER TABLE `horses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT voor een tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99041414;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
