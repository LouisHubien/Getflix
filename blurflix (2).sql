-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2020 at 11:48 AM
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
  `User_Id` int(20) NOT NULL,
  `Comment_Date` date NOT NULL
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
  `CategoryId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`Id`, `Name`, `Thumbnails`, `Preview`, `CategoryId`) VALUES
(6, 'Ballistic', 'Ballistic.jpg', '<iframe width=\"875\" height=\"344\" src=\"https://www.youtube.com/embed/em1ec7BZHJw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(7, 'Enigma', 'Enigma.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/UsaHBTXkt8I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(8, 'Hero', 'Hero.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/-RIIufN6_WA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(9, 'Retribution', 'Retribution.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/eA20RFE74Hg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(10, 'Hello Again', 'Hello_again.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/7vpFXA03x8M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5),
(11, 'I_miss_you', 'I_miss_you.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/4F5oD7G40ng\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5),
(12, 'Lonely_planet', 'Lonely_planet.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/kKCYgcooW90\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5),
(13, 'Unspoken', 'Unspoken.jpg', '<iframe width=\"715\" height=\"402\" src=\"https://www.youtube.com/embed/cWPz7gbqIr4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5),
(14, 'The Holy Grail', 'The_holy_grail.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/urRkGvhXc8w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2),
(15, 'Jonnhy English', 'Jonnhy_English.jpg', '<iframe width=\"1263\" height=\"480\" src=\"<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/CwMmqNndnQM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2),
(16, 'Central intelligence', 'Central_intelligence.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MxEw3elSJ8M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2),
(17, 'The life of Brian', 'The_life_of_Brian.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/TKPmGjVFbrY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2),
(18, 'The Green Mile', 'The_Green_mile.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/Ki4haFrqSrw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(19, 'Forrest gump', 'Forrest_gump.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bLvqoHBptjg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(20, 'Joker', 'Joker.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zAGVQLHvwOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(21, 'The Godfather', 'The_godfather.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/sY1S34973zA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(22, 'The Exorcist 1973', 'The_exorcist_1973.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/YDGw1MTEe9k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4),
(23, 'The Conjuring', 'The_conjuring.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/k10ETZ41q5o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4),
(24, 'Hush', 'Hush.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/Q_P8WCbhC6s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4),
(25, 'Cargo', 'Cargo.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/W5QJW0M5pik\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4),
(26, 'Time to hunt', 'Time_to_hunt.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1qFSdKY2wvk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7),
(27, 'Invasion', 'Invasion_2020.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j1JRih9ifUE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7),
(28, 'The_great_game', 'The_great_game.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lh93G546lew\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7),
(29, 'Rupture_fatale', 'Rupture_fatale.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sDrtu0kxfy4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7),
(30, 'Edge of tomorrow', 'Edge_of_tomorrow.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/vw61gCe2oqI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6),
(31, 'Inception', 'Inception.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/YoHD9XEInc0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6),
(32, 'Interstellar', 'Interstellar.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/zSWdZVtXT7E\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6),
(33, 'Star wars', 'Star_wars.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pHgwf2eMFnA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6),
(34, 'Breaking Bad', 'Breakin_bad.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/3U6PSWyv5sc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7),
(35, 'Gilmores Girls', 'Gilmores_girls.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/yhv1l_QsgUU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5),
(36, 'Mars', 'Mars.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4tIXHLC24aY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(37, 'Typewriter', 'Typewriter.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mmyNUPvEF5M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4),
(38, 'Origin', 'Origin.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HjRjcgByAhk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6),
(39, 'Sons of Anarchy', 'Sons_of_Anarchy.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/W01L74Q_VTE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(40, 'Friends', 'Friends.jpg', '<iframe width=\"1263\" height=\"480\" src=\"https://www.youtube.com/embed/7z65wK5kgOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2);

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
(5, 'Noémie', 'noemie@becode.com', 'noemie1', '1'),
(6, 'Eugenie', 'eugenie@becode.com', 'eugenie1', '0'),
(7, 'Louis', 'louis@becode.com', 'louis1', '0'),
(8, 'Soufiane', 'soufiane@becode.com', 'soufiane1', '1');

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
  ADD UNIQUE KEY `User_Id` (`User_Id`);

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
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`);

--
-- Constraints for table `entities`
--
ALTER TABLE `entities`
  ADD CONSTRAINT `entities_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categorie` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
