-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 31 août 2020 à 15:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blurflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Id`, `Name`) VALUES
(1, 'Action/Aventure'),
(2, 'Comedy'),
(3, 'Drama'),
(4, 'Horror'),
(5, 'Romantic'),
(6, 'Sci-Fi & Fantasy'),
(7, 'Thrillers');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Comment` mediumtext NOT NULL,
  `User_Id` int(20) NOT NULL,
  `Comment_Date` date NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User_Id` (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entities`
--

DROP TABLE IF EXISTS `entities`;
CREATE TABLE IF NOT EXISTS `entities` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Thumbnails` varchar(200) NOT NULL,
  `Preview` varchar(400) NOT NULL,
  `CategoryId` int(10) NOT NULL,
  `movies` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `CategoryId` (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entities`
--

INSERT INTO `entities` (`Id`, `Name`, `Thumbnails`, `Preview`, `CategoryId`, `movies`, `adult`) VALUES
(6, 'Ballistic', 'thumbnail/Ballistic.jpg', '<iframe width=\"875\" height=\"344\" src=\"https://www.youtube.com/embed/em1ec7BZHJw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 1),
(7, 'Enigma', 'thumbnail/Enigma.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/UsaHBTXkt8I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 1),
(8, 'Hero', 'thumbnail/Hero.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/-RIIufN6_WA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 0),
(9, 'Retribution', 'thumbnail/Retribution.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/eA20RFE74Hg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 0),
(10, 'Hello Again', 'thumbnail/Hello_again.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/7vpFXA03x8M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 1),
(11, 'I_miss_you', 'thumbnail/I_miss_you.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/4F5oD7G40ng\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 1),
(12, 'Lonely_planet', 'thumbnail/Lonely_planet.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/kKCYgcooW90\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 0),
(13, 'Unspoken', 'thumbnail/Unspoken.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/cWPz7gbqIr4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 0),
(14, 'The Holy Grail', 'thumbnail/The_holy_grail.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/urRkGvhXc8w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 1),
(15, 'Jonnhy English', 'thumbnail/Jonnhy_English.jpg', '<iframe width=\"1263\" height=\"480\" src=\"<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/CwMmqNndnQM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 1),
(16, 'Central intelligence', 'thumbnail/Central_intelligence.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MxEw3elSJ8M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 0),
(17, 'The life of Brian', 'thumbnail/The_life_of_Brian.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/TKPmGjVFbrY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 0),
(18, 'The Green Mile', 'thumbnail/The_Green_mile.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/Ki4haFrqSrw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 1),
(19, 'Forrest gump', 'thumbnail/Forrest_gump.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bLvqoHBptjg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 1),
(20, 'Joker', 'thumbnail/Joker.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zAGVQLHvwOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 0),
(21, 'The Godfather', 'thumbnail/The_godfather.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/sY1S34973zA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 0),
(22, 'The Exorcist 1973', 'thumbnail/The_exorcist_1973.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/YDGw1MTEe9k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 1),
(23, 'The Conjuring', 'thumbnail/The_conjuring.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/k10ETZ41q5o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 1),
(24, 'Hush', 'thumbnail/Hush.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/Q_P8WCbhC6s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 0),
(25, 'Cargo', 'thumbnail/Cargo.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/W5QJW0M5pik\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 0),
(26, 'Time to hunt', 'thumbnail/Time_to_hunt.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1qFSdKY2wvk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 1),
(27, 'Invasion', 'thumbnail/Invasion_2020.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j1JRih9ifUE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 1),
(28, 'The_great_game', 'thumbnail/The_great_game.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lh93G546lew\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 0),
(29, 'Rupture_fatale', 'thumbnail/Rupture_fatale.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sDrtu0kxfy4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 0),
(30, 'Edge of tomorrow', 'Edge_of_tomorrow.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/vw61gCe2oqI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 1),
(31, 'Inception', 'thumbnail/Inception.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/YoHD9XEInc0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 1),
(32, 'Interstellar', 'thumbnail/Interstellar.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/zSWdZVtXT7E\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 0),
(33, 'Star wars', 'thumbnail/Star_wars.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pHgwf2eMFnA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 0),
(34, 'Breaking Bad', 'thumbnail/Breakin_bad.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/3U6PSWyv5sc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 0, 1),
(35, 'Gilmores Girls', 'thumbnail/Gilmores_girls.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/yhv1l_QsgUU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 0, 1),
(36, 'Mars', 'thumbnail/Mars.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4tIXHLC24aY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 0, 1),
(37, 'Typewriter', 'thumbnail/Typewriter.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mmyNUPvEF5M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 0, 1),
(38, 'Origin', 'thumbnail/Origin.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HjRjcgByAhk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 0, 1),
(39, 'Sons of Anarchy', 'thumbnail/Sons_of_Anarchy.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/W01L74Q_VTE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 0, 1),
(40, 'Friends', 'thumbnail/Friends.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/7z65wK5kgOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Adult` char(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`, `Adult`) VALUES
(9, 'Noemie', 'test@mail.com', '$2y$10$AjfkAUXYS5XTRsjVCITqMuHP77ldV.CnfDw8t2HSHOr4heZHVoTee', '1'),
(12, 'kids', 'kids@mail.com', '$2y$10$2XnPygqXW45eqrainTiQ1u/gyqunEhag.gUvdGMujRp1kRJkTaWU2', '0');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`);

--
-- Contraintes pour la table `entities`
--
ALTER TABLE `entities`
  ADD CONSTRAINT `entities_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categorie` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
