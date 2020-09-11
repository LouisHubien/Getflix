-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 sep. 2020 à 19:30
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blurflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_request`
--

DROP TABLE IF EXISTS `password_reset_request`;
CREATE TABLE IF NOT EXISTS `password_reset_request` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date_requested` datetime NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `password_reset_request`
--

INSERT INTO `password_reset_request` (`id`, `user_id`, `date_requested`, `token`) VALUES
(1, 9, '2020-09-02 18:11:56', '9fe14b18726685130d7b5811d15d1fad'),
(2, 9, '2020-09-02 18:12:25', 'cbcda0c10ecfd6ca97d073b0f1982889'),
(3, 9, '2020-09-02 18:12:32', 'a214c0fb4b69fa0bc6ded46461d39005'),
(4, 9, '2020-09-02 18:13:00', 'de217a07f00ec5c61f13701b7ab93ede'),
(5, 9, '2020-09-02 18:14:08', 'e8b49ecab8f9ea7cb4a6f95c99f56c40'),
(6, 9, '2020-09-02 18:16:18', '0542e4da2c33fbfe1526dde299ab224f'),
(7, 10, '2020-09-02 18:16:37', '0135ab9d0cd6bf8a9624dad2bf0ce9b5'),
(8, 12, '2020-09-02 18:41:21', 'cf60adf9eceda37c607217b8efd1050c'),
(9, 9, '2020-09-02 21:11:05', 'd2939776825eac303f0e875e8f9dda93');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
