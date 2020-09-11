-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2020 at 08:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blurflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `Comment` mediumtext NOT NULL,
  `Username` int(20) NOT NULL,
  `video_Id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Thumbnails` varchar(200) NOT NULL,
  `Preview` varchar(400) NOT NULL,
  `CategoryId` int(10) NOT NULL,
  `movies` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`Id`, `Name`, `Thumbnails`, `Preview`, `CategoryId`, `movies`, `adult`) VALUES
(6, 'Ballistic', '<img src=\"thumbnail/Ballistic.jpg\" alt=\"Ballistic\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/em1ec7BZHJw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 1),
(7, 'Enigma', '<img src=\"thumbnail/Enigma.jpg\" alt=\"Enigma\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/UsaHBTXkt8I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 1),
(8, 'Hero', '<img src=\"thumbnail/Hero.jpg\" alt=\"Hero\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/-RIIufN6_WA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 0),
(9, 'Retribution', '<img src=\"thumbnail/Retribution.jpg\" alt=\"Retribution\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/eA20RFE74Hg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 0),
(10, 'Hello Again', '<img src=\"thumbnail/Hello_again.jpg\" alt=\"Hello Again\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/7vpFXA03x8M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 1),
(11, 'I miss you', '<img src=\"thumbnail/I_miss_you.jpg\" alt=\"I_miss_you\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/4F5oD7G40ng\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 1),
(12, 'Lonely_planet', '<img src=\"thumbnail/Lonely_planet.jpg\" alt=\"Lonely Planet\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/kKCYgcooW90\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 0),
(13, 'Unspoken', '<img src=\"thumbnail/Unspoken.jpg\" alt=\"Unspoken\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/cWPz7gbqIr4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 1, 0),
(14, 'The Holy Grail', '<img src=\"thumbnail/The_holy_grail.jpg\" alt=\"The Holy Grail\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/urRkGvhXc8w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 1),
(15, 'Jonnhy English', '<img src=\"thumbnail/Jonnhy_English.jpg\" alt=\"Jonnhy English\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/CwMmqNndnQM\" frameborder=\"0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 1),
(16, 'Central intelligence', '<img src=\"thumbnail/Central_intelligence.jpg\" alt=\"Central Intelligence\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/MxEw3elSJ8M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 0),
(17, 'The life of Brian', '<img src=\"thumbnail/The_life_of_Brian.jpg\" alt=\"The life of Brian\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/TKPmGjVFbrY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1, 0),
(18, 'The Green Mile', '<img src=\"thumbnail/The_Green_mile.jpg\" alt=\"The Green Mile\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/Ki4haFrqSrw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 1),
(19, 'Forrest gump', '<img src=\"thumbnail/Forrest_gump.jpg\" alt=\"Forrest gump\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/bLvqoHBptjg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 1),
(20, 'Joker', '<img src=\"thumbnail/Joker.jpg\" alt=\"Joker\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/zAGVQLHvwOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 0),
(21, 'The Godfather', '<img src=\"thumbnail/The_godfather.jpg\" alt=\"The Godfather\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/sY1S34973zA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 1, 0),
(22, 'The Exorcist 1973', '<img src=\"thumbnail/The_exorcist_1973.jpg\" alt=\"The Exorcist 1973\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/YDGw1MTEe9k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 1),
(23, 'The Conjuring', '<img src=\"thumbnail/The_conjuring.jpg\" alt=\"The Conjuring\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/k10ETZ41q5o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 1),
(24, 'Hush', '<img src=\"thumbnail/Hush.jpg\" alt=\"Hush\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/Q_P8WCbhC6s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 0),
(25, 'Cargo', '<img src=\"thumbnail/Cargo.jpg\" alt=\"Cargo\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/W5QJW0M5pik\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1, 0),
(26, 'Time to hunt', '<img src=\"thumbnail/Time_to_hunt.jpg\" alt=\"Time to hunt\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/1qFSdKY2wvk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 1),
(27, 'Invasion', '<img src=\"thumbnail/Invasion_2020.jpg\" alt=\"Invasion\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/j1JRih9ifUE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 1),
(28, 'The great game', '<img src=\"thumbnail/The_great_game.jpg\" alt=\"The Great Game\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/lh93G546lew\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 0),
(29, 'Rupture fatale', '<img src=\"thumbnail/Rupture_fatale.jpg\" alt=\"Rupture Fatale\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/sDrtu0kxfy4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 1, 0),
(30, 'Edge of tomorrow', '<img src=\"thumbnail/Edge_of_tomorrow.jpg\" alt=\"Edge of Tomorrow\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/vw61gCe2oqI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 1),
(31, 'Inception', '<img src=\"thumbnail/Inception.jpg\" alt=\"Inception\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/YoHD9XEInc0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 1),
(32, 'Interstellar', '<img src=\"thumbnail/Interstellar.jpg\" alt=\"Interstellar\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/zSWdZVtXT7E\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 0),
(33, 'Star wars IX', '<img src=\"thumbnail/Star_wars.jpg\" alt=\"Star Wars\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/pHgwf2eMFnA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1, 0),
(34, 'Breaking Bad', '<img src=\"thumbnail/Breaking_bad.jpg\" alt=\"Breaking Bad\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/3U6PSWyv5sc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, 0, 1),
(35, 'Gilmore Girls', '<img src=\"thumbnail/Gilmores_girls.jpg\" alt=\"Gilmores Girls\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/yhv1l_QsgUU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, 0, 1),
(36, 'Mars', '<img src=\"thumbnail/Mars.jpg\" alt=\"Mars\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/4tIXHLC24aY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, 0, 1),
(37, 'Typewriter', '<img src=\"thumbnail/Typewriter.jpg\" alt=\"Typewriter\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/mmyNUPvEF5M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 0, 1),
(38, 'Origin', '<img src=\"thumbnail/Origin.jpg\" alt=\"Origin\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/HjRjcgByAhk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 0, 1),
(39, 'Sons of Anarchy', '<img src=\"thumbnail/Sons_of_Anarchy.jpg\" alt=\"Sons of Anarchy\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/W01L74Q_VTE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 0, 1),
(40, 'Friends', '<img src=\"thumbnail/Friends.jpg\" alt=\"Friends\">', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/7z65wK5kgOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(20) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Adult` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`, `Adult`) VALUES
(9, 'Noemie', 'test@mail.com', '$2y$10$AjfkAUXYS5XTRsjVCITqMuHP77ldV.CnfDw8t2HSHOr4heZHVoTee', '1'),
(12, 'kids', 'kids@mail.com', '$2y$10$2XnPygqXW45eqrainTiQ1u/gyqunEhag.gUvdGMujRp1kRJkTaWU2', '0'),
(14, 'test', 'testnoemie@mail.com', '$2y$10$K6JEQ5aGmeIGVl/LTWiNAevRpL80A05TDZ8Cu4bKJd5gER/6iqdDm', '1'),
(15, 'eugenie', 'eugenie@flix.com', '$2y$10$tXjsD6xlC7EUa.YfrG5h3.thNEmFrfQ9ou0K3nl9tKSTSHyt/jWUK', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User_Id` (`Username`),
  ADD UNIQUE KEY `video_Id` (`video_Id`);

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`video_Id`) REFERENCES `entities` (`Id`);

--
-- Constraints for table `entities`
--
ALTER TABLE `entities`
  ADD CONSTRAINT `entities_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categorie` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
