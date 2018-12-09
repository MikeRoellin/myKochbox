-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Dez 2018 um 23:58
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
-- Datenbank: `rezepte`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `auswahl`
--

CREATE TABLE `auswahl` (
  `id` int(11) NOT NULL,
  `zutat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `auswahl`
--

INSERT INTO `auswahl` (`id`, `zutat`) VALUES
(1, 'Parmesan'),
(2, 'Pasta');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `normalform`
--

CREATE TABLE `normalform` (
  `id` int(11) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `bild` varchar(30) NOT NULL,
  `zutat` varchar(300) NOT NULL,
  `beschreibung` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `normalform`
--

INSERT INTO `normalform` (`id`, `titel`, `bild`, `zutat`, `beschreibung`) VALUES
(1, 'Spaghetti Carbonara', '1', 'Pasta', 'Den Speck bzw. Schinken nicht zu fein w?rfeln. In Oliven?l glasig anschwitzen. Beiseitestellen. Die Pasta in reichlich Salzwasser al dente kochen - auf keinen Fall weich, da die Pasta sp?ter noch etwas nachkocht. Gegen Ende der Kochzeit etwas Kochwasser (1 - 2 Espressot?sschen) auffangen oder einfach absch?pfen.\r\n\r\nW?hrenddessen die Eier mit den beiden K?sesorten verquirlen. Leicht salzen, schwarzen Pfeffer nach Geschmack mahlen und zuf?gen.\r\n\r\nDen Speck bzw. Schinken erneut erhitzen. Aufgefangenes Kochwasser hinzuf?gen und aufkochen lassen. Die Pasta zuf?gen, verr?hren. Eier-K?se-Mischung zuf?gen. Leicht stocken lassen und gut r?hren, damit die Mischung die Pasta z?rtlich umh?llt.\r\n\r\nDazu passt am besten ein guter Frascati Superiore. So m?gen\'s die R?mer im Original.Zubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.'),
(3, 'PASTA TEST', '10', 'Pasta', ''),
(3, 'PASTA TEST', '11', 'Parmesan', ''),
(1, 'Spaghetti Carbonara', '2', 'Schinken', 'Den Speck bzw. Schinken nicht zu fein w?rfeln. In Oliven?l glasig anschwitzen. Beiseitestellen. Die Pasta in reichlich Salzwasser al dente kochen - auf keinen Fall weich, da die Pasta sp?ter noch etwas nachkocht. Gegen Ende der Kochzeit etwas Kochwasser (1 - 2 Espressot?sschen) auffangen oder einfach absch?pfen.\r\n\r\nW?hrenddessen die Eier mit den beiden K?sesorten verquirlen. Leicht salzen, schwarzen Pfeffer nach Geschmack mahlen und zuf?gen.\r\n\r\nDen Speck bzw. Schinken erneut erhitzen. Aufgefangenes Kochwasser hinzuf?gen und aufkochen lassen. Die Pasta zuf?gen, verr?hren. Eier-K?se-Mischung zuf?gen. Leicht stocken lassen und gut r?hren, damit die Mischung die Pasta z?rtlich umh?llt.\r\n\r\nDazu passt am besten ein guter Frascati Superiore. So m?gen\'s die R?mer im Original.'),
(1, 'Spaghetti Carbonara', '3', 'Ei', 'Den Speck bzw. Schinken nicht zu fein w?rfeln. In Oliven?l glasig anschwitzen. Beiseitestellen. Die Pasta in reichlich Salzwasser al dente kochen - auf keinen Fall weich, da die Pasta sp?ter noch etwas nachkocht. Gegen Ende der Kochzeit etwas Kochwasser (1 - 2 Espressot?sschen) auffangen oder einfach absch?pfen.\r\n\r\nW?hrenddessen die Eier mit den beiden K?sesorten verquirlen. Leicht salzen, schwarzen Pfeffer nach Geschmack mahlen und zuf?gen.\r\n\r\nDen Speck bzw. Schinken erneut erhitzen. Aufgefangenes Kochwasser hinzuf?gen und aufkochen lassen. Die Pasta zuf?gen, verr?hren. Eier-K?se-Mischung zuf?gen. Leicht stocken lassen und gut r?hren, damit die Mischung die Pasta z?rtlich umh?llt.\r\n\r\nDazu passt am besten ein guter Frascati Superiore. So m?gen\'s die R?mer im Original.'),
(1, 'Spaghetti Carbonara', '4', 'Parmesan', 'Den Speck bzw. Schinken nicht zu fein w?rfeln. In Oliven?l glasig anschwitzen. Beiseitestellen. Die Pasta in reichlich Salzwasser al dente kochen - auf keinen Fall weich, da die Pasta sp?ter noch etwas nachkocht. Gegen Ende der Kochzeit etwas Kochwasser (1 - 2 Espressot?sschen) auffangen oder einfach absch?pfen.\r\n\r\nW?hrenddessen die Eier mit den beiden K?sesorten verquirlen. Leicht salzen, schwarzen Pfeffer nach Geschmack mahlen und zuf?gen.\r\n\r\nDen Speck bzw. Schinken erneut erhitzen. Aufgefangenes Kochwasser hinzuf?gen und aufkochen lassen. Die Pasta zuf?gen, verr?hren. Eier-K?se-Mischung zuf?gen. Leicht stocken lassen und gut r?hren, damit die Mischung die Pasta z?rtlich umh?llt.\r\n\r\nDazu passt am besten ein guter Frascati Superiore. So m?gen\'s die R?mer im Original.'),
(2, 'Lachs in Curry-Kokos-Soße mit Brokkolipüree', '5', 'Lachsfilet', 'Lachs in Curry-Kokos-Soße mit Brokkolipüree: \r\nZubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.'),
(2, 'Lachs in Curry-Kokos-Soße mit Brokkolipüree', '6', 'Brokkoli', 'Lachs in Curry-Kokos-Soße mit Brokkolipüree: \r\nZubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.'),
(2, 'Lachs in Curry-Kokos-Soße mit Brokkolipüre', '7', 'Kokosmilch', 'Lachs in Curry-Kokos-Soße mit Brokkolipüree: \r\nZubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.'),
(2, 'Lachs in Curry-Kokos-Soße mit Brokkolipüre', '8', 'Currypaste', 'Lachs in Curry-Kokos-Soße mit Brokkolipüree: \r\nZubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.'),
(2, 'Lachs in Curry-Kokos-Soße mit Brokkolipüre', '9', 'Kokosoel', 'Lachs in Curry-Kokos-Soße mit Brokkolipüree: \r\nZubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezept`
--

CREATE TABLE `rezept` (
  `titel` varchar(50) DEFAULT NULL,
  `bild` varchar(30) NOT NULL,
  `zutaten` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `beschreibung` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rezept`
--

INSERT INTO `rezept` (`titel`, `bild`, `zutaten`, `beschreibung`, `id`) VALUES
('Spaghetti Carbonara', 'image 1', 'Pasta, Schinken, Ei, Parmesan', 'Den Speck bzw. Schinken nicht zu fein w?rfeln. In Oliven?l glasig anschwitzen. Beiseitestellen. Die Pasta in reichlich Salzwasser al dente kochen - auf keinen Fall weich, da die Pasta sp?ter noch etwas nachkocht. Gegen Ende der Kochzeit etwas Kochwasser (1 - 2 Espressot?sschen) auffangen oder einfach absch?pfen.\r\n\r\nW?hrenddessen die Eier mit den beiden K?sesorten verquirlen. Leicht salzen, schwarzen Pfeffer nach Geschmack mahlen und zuf?gen.\r\n\r\nDen Speck bzw. Schinken erneut erhitzen. Aufgefangenes Kochwasser hinzuf?gen und aufkochen lassen. Die Pasta zuf?gen, verr?hren. Eier-K?se-Mischung zuf?gen. Leicht stocken lassen und gut r?hren, damit die Mischung die Pasta z?rtlich umh?llt.\r\n\r\nDazu passt am besten ein guter Frascati Superiore. So m?gen\'s die R?mer im Original.', 1),
('Lachs in Curry-Kokos-Soße mit Brokkolipüree', 'image 2', 'Lachsfilet, Brokkoli, Kokosmilch, Currypaste, Kokos?l, ', 'Lachs in Curry-Kokos-Soße mit Brokkolipüree: \r\nZubereitung\r\nArbeitszeit: ca. 20 Min. / Koch-/Backzeit: ca. 10 Min. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDas Lachsfilet antauen lassen.\r\n\r\nDen Brokkoli in kleine Röschen teilen und in etwas Wasser in einem Topf so lange dünsten, bis er weich ist. Das Wasser abgießen. \r\n\r\nDas Kokosöl in einer Pfanne erhitzen, den Lachs darin von beiden Seiten anbraten. Die Currypaste hinzufügen und mitbraten. Danach mit der Hälfte der Kokosmilch ablöschen und auf niedriger Stufe etwas einköcheln lassen.\r\n\r\nDie restliche Kokosmilch zum Brokkoli geben und alles mit einem Mixstab pürieren. Mit Salz, Pfeffer und Muskat abschmecken.\r\n\r\nDen Lachs mit der Soße und dem Püree auf einem Teller anrichten und servieren.', 2),
('Bunter Reissalat', 'image 3', 'Zucker, Sojasauce, Mayonnaise, Mandarine, Reis, Zwiebeln, Kochschinken', 'Bunter Reissalat:\r\nZubereitung\r\nArbeitszeit: ca. 30 Min. Ruhezeit: ca. 1 Std. / Schwierigkeitsgrad: simpel / Kalorien p. P.: keine Angabe\r\n\r\nDen Reis gar kochen und kalt stellen. \r\n\r\nPaprika, Zwiebel und Schinken klein schneiden. Die Mandarinen abtropfen lassen und den Saft aufbewahren. Paprika, Zwiebel, Schinken und Mandarinen zusammen in eine Schüssel geben. Den erkalteten Reis unterheben. \r\n\r\nAus der Salatmayonnaise, Zucker und der hellen Sojasauce, sowie Mandarinensaft nach Geschmack eine Sauce rühren und unter die Salatzutaten heben. \r\n\r\nBis zum Servieren kalt stellen und etwas ziehen lassen.', 3),
('Pasta Test', 'image 4', 'Pasta', 'ihoaibfowbo', 4),
('Test', '', 'Banane, Apfel, Curry', 'iobninininaininipninpinpinpinpinin', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zutaten`
--

CREATE TABLE `zutaten` (
  `id` int(11) NOT NULL,
  `zutaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `zutaten`
--

INSERT INTO `zutaten` (`id`, `zutaten`) VALUES
(1, 'Schweinefleisch, Brot, Karotten');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `auswahl`
--
ALTER TABLE `auswahl`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `normalform`
--
ALTER TABLE `normalform`
  ADD PRIMARY KEY (`bild`);

--
-- Indizes für die Tabelle `rezept`
--
ALTER TABLE `rezept`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `auswahl`
--
ALTER TABLE `auswahl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `rezept`
--
ALTER TABLE `rezept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
