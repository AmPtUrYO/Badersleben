-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Mai 2021 um 21:34
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
-- Datenbank: `badersleben`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `content_id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `user_id` int(3) NOT NULL,
  `section_id` varchar(3) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `image_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`content_id`, `title`, `user_id`, `section_id`, `text`, `date`, `image_url`) VALUES
(1, 'titel 1', 1, 'hmv', 'text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text', '2021-03-04', NULL),
(2, 'titel 2', 1, 'spv', 'text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text', '2021-04-03', NULL),
(3, 'titel 3', 2, 'spv', 'text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text', '2021-04-01', NULL),
(4, 'titel 4', 2, 'ffw', 'text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text', '2021-03-23', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sections`
--

CREATE TABLE `sections` (
  `section_id` varchar(3) NOT NULL,
  `section_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`) VALUES
('ffw', 'Freiwillige Feuerwehr'),
('hmv', 'Heimatverein'),
('obm', 'Ortsbürgermeister'),
('spv', 'Sportverein');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `email`) VALUES
(1, 'Max Mustermann', 'mustermann123', 'muster@mann.de'),
(2, 'Bodo Baumann', 'baumann123', 'bau@mann.de');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `content_ibfk_1` (`section_id`),
  ADD KEY `content_ibfk_2` (`user_id`);

--
-- Indizes für die Tabelle `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`section_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `content_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
