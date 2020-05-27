-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mei 2020 om 15:28
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colomnist`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(5) NOT NULL,
  `title` varchar(64) NOT NULL,
  `subtext` longtext NOT NULL,
  `text` longtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `image` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `subtext`, `text`, `date`, `image`) VALUES
(1, '100 op de snelweg!', '<p>Morbi non eros massa. Nam erat sem, congue at sem ac, mollis rutrum turpis. Phasellus iaculis convallis nunc eget luctus. Quisque lectus lacus, efficitur vitae ex eleifend, dapibus pellentesque sapien. Praesent quis erat sed sem dictum commodo. Sed ultrices orci vitae aliquet pulvinar. Nam sodales sapien est, id gravida ex pharetra eu.</p>', '<p>Morbi non eros massa. Nam erat sem, congue at sem ac, mollis rutrum turpis. Phasellus iaculis convallis nunc eget luctus. Quisque lectus lacus, efficitur vitae ex eleifend, dapibus pellentesque sapien. Praesent quis erat sed sem dictum commodo. Sed ultrices orci vitae aliquet pulvinar. Nam sodales sapien est, id gravida ex pharetra eu.</p>', '2020-05-25', 'images/100.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bio`
--

CREATE TABLE `bio` (
  `id` int(1) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bio`
--

INSERT INTO `bio` (`id`, `text`) VALUES
(1, '<p>Mijn naam is Scheurmink Geurts en ik ben Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci arcu. Donec maximus lacus nunc, sed sagittis arcu tristique non. Cras pulvinar, libero non mollis malesuada, tellus magna cursus leo, commodo consequat ipsum lacus vel neque. Morbi sagittis congue ante vel aliquam. <br /><br />Morbi finibus elit justo, vel gravida lectus elementum ullamcorper. Quisque dapibus sollicitudin tincidunt. Nam rutrum sem sed arcu tempus sodales. Suspendisse ullamcorper eget mi quis lobortis. Donec condimentum aliquam ipsum, quis accumsan massa placerat in. Suspendisse libero nulla, accumsan sed quam eget, maximus iaculis erat.</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '9e860fba8d4a603b2fefc0f766bf9c50');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
