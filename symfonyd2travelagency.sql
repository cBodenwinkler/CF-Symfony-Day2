-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Dez 2020 um 15:59
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `symfonyd2travelagency`
--
CREATE DATABASE IF NOT EXISTS `symfonyd2travelagency` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `symfonyd2travelagency`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `trips`
--

INSERT INTO `trips` (`id`, `name`, `image`, `description`, `price`) VALUES
(1, 'South Afrika', 'https://images.unsplash.com/photo-1599407384287-374f7c6ec113?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80', 'I am a description - I say nothing and I do even less', 19),
(2, 'Vienna', 'https://images.unsplash.com/photo-1516550893923-42d28e5677af?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80', 'I am a description - I say nothing and I do even less', 250),
(3, 'Vancouver', 'https://images.unsplash.com/photo-1559511260-66a654ae982a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1092&q=80', 'I am a description - I say nothing and I do even less, less, less, less, less, less, less, less, less, less, less, less, less, less, less', 350),
(4, 'London', 'https://images.unsplash.com/photo-1505761671935-60b3a7427bad?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80', 'I am a description - I say nothing and I do even less, less, less, less, less, less, less, less, less, less, less, less, less, less, less', 150);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
