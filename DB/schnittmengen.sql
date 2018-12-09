-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Dez 2018 um 23:57
-- Server-Version: 10.1.34-MariaDB
-- PHP-Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `schnittmengen`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t1`
--

CREATE TABLE `t1` (
  `id` varchar(11) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `t1`
--

INSERT INTO `t1` (`id`) VALUES
('a'),
('b'),
('c');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t2`
--

CREATE TABLE `t2` (
  `id` varchar(11) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `t2`
--

INSERT INTO `t2` (`id`) VALUES
('b'),
('c'),
('d');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t3`
--

CREATE TABLE `t3` (
  `personID` int(11) NOT NULL,
  `stuffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `t3`
--

INSERT INTO `t3` (`personID`, `stuffID`) VALUES
(1, 2),
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(2, 4),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t4`
--

CREATE TABLE `t4` (
  `stuffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `t4`
--

INSERT INTO `t4` (`stuffID`) VALUES
(1),
(2),
(3);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
