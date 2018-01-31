-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 30 jan 2018 om 20:34
-- Serverversie: 5.5.59-0+deb8u1
-- PHP-versie: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `memory_game`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `partycode`
--

CREATE TABLE IF NOT EXISTS `partycode` (
`id` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `partycode`
--

INSERT INTO `partycode` (`id`, `code`) VALUES
(1, 7583),
(2, 6606),
(3, 9036),
(4, 1723),
(5, 3840),
(6, 3555),
(7, 3909),
(8, 6120),
(9, 8837),
(10, 2818),
(11, 5080),
(12, 5932),
(13, 4523),
(14, 7722),
(15, 9808),
(16, 2492),
(17, 2889),
(18, 4881),
(19, 1945),
(20, 7777),
(21, 5546),
(22, 5801),
(23, 2570),
(24, 5390),
(25, 4390),
(26, 9405),
(27, 5935),
(28, 5246),
(29, 4272),
(30, 6520),
(31, 1382),
(32, 5687),
(33, 1154),
(34, 7507),
(35, 1906),
(36, 9405),
(37, 1062),
(38, 6756),
(39, 2965),
(40, 5643),
(41, 6264),
(42, 6605),
(43, 1839),
(44, 6026),
(45, 8927),
(46, 1262),
(47, 2821),
(48, 6655),
(49, 4266),
(50, 6080),
(51, 2992),
(52, 7371),
(53, 8143),
(54, 8831),
(55, 1889),
(56, 3776),
(57, 8474),
(58, 1483),
(59, 1111),
(60, 2637),
(61, 4241),
(62, 6823),
(63, 1753);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `score`
--

CREATE TABLE IF NOT EXISTS `score` (
`id` int(11) NOT NULL,
  `player1` int(10) NOT NULL,
  `player2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `Age` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `nickname`, `password`, `Age`, `email`) VALUES
(1, 'kevin', 'ppb47k1cbg8jr4701jjbhhjkghb1jrp58d7dbggr', 17, 'kevinsliedrecht2000@gmail.com'),
(2, 'rutger', 'p1ph2p1gjb8dhggg4g21rk5j480pkcjd2140brgb', 17, 'rutgerpesman@outlook.com'),
(6, 'piemol', '44h78h2p1dk488hg4bh00pjp1h88p4db8j05jgd0', 11, 'piemol'),
(7, 'Mussolini', 'dk8h85g0kcdp4p42b75r7jhdg850gp154gr4g542', -16, 'Mussolini@gmail.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `partycode`
--
ALTER TABLE `partycode`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `score`
--
ALTER TABLE `score`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `partycode`
--
ALTER TABLE `partycode`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT voor een tabel `score`
--
ALTER TABLE `score`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
