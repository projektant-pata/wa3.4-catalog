-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Pon 20. led 2025, 07:29
-- Verze serveru: 8.3.0
-- Verze PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `wp`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8mb4_czech_ci NOT NULL,
  `perex` varchar(1024) COLLATE utf8mb4_czech_ci NOT NULL,
  `content` text COLLATE utf8mb4_czech_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int UNSIGNED NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `blog`
--

INSERT INTO `blog` (`id`, `title`, `perex`, `content`, `created`, `user`, `active`) VALUES
(1, 'Můj první příspěvek', 'Je sice první ale určitě ne poslední', 'Praesent dapibus. Aenean placerat. Fusce consectetuer risus a nunc. Donec quis nibh at felis congue commodo. Sed ac dolor sit amet purus malesuada congue. Maecenas lorem. Fusce aliquam vestibulum ipsum. Integer tempor. Aliquam ante. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '2025-01-20 07:27:23', 1, 1),
(2, 'Povídání druhé o tom že choditi do školy je nutné', 'A jéjé to bude blábol', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Aliquam erat volutpat. Nunc tincidunt ante vitae massa. In convallis. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Etiam dictum tincidunt diam. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Integer pellentesque quam vel velit. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Vivamus porttitor turpis ac leo. Duis risus. Aliquam erat volutpat. Donec vitae arcu. ', '2025-01-20 07:28:31', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
