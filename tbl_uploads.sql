-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 12-04-2018 a les 05:14:43
-- Versió del servidor: 10.1.26-MariaDB
-- Versió de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `dsproject`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `ftype` int(50) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `title`, `category`, `description`, `ftype`, `username`) VALUES
(28, '27440-travel.png', 'image/png', 4, 'Plane', 'Travel', 'planes are good for traveling. ', 4, 'paula123'),
(29, '58293-his-hair-is-a-biscuit-!.jpg', 'image/jpeg', 20, 'Picture I like', 'Hobbies', 'enjoy', 4, 'paula123'),
(30, '18579-ent.png', 'image/png', 8, 'test2', 'Entertainment', 'hello', 4, 'test1234'),
(31, '63521-small.mp4', 'video/mp4', 375, 'viddd', 'Hobbies', 'vidd', 2, 'alice'),
(32, '1966-woman-shout-sound-effect.mp3', 'audio/mp3', 120, 'audioTest', 'Entertainment', 'audio', 5, 'alice'),
(12, '53486-download.jpg', 'image/jpeg', 12, 'Whip cream ', 'Food', 'Whip cream is awesome.', 4, 'paula123'),
(13, '56457-1-1_object_structure.pdf', 'applicatio', 885, 'Healthy Recipes', 'Food', 'recipe book', 1, 'alice'),
(14, '37052-cereal-killer.jpg', 'image/jpeg', 55, 'For the love of food', 'Food', 'lovelovelovelove food.', 4, 'alice'),
(16, '90551-animal.png', 'image/png', 6, 'test', 'Animal Life', 'hello', 4, 'alice'),
(18, '95985-laboratory-4.pdf', 'applicatio', 138, 'pdf test', 'Entertainment', 'please work', 1, 'alice'),
(20, '76432-project-assignment-part-ii.pdf', 'applicatio', 415, 'Shoessss', 'Fashion and Accessories', 'pdf test', 1, 'alice'),
(21, '27530-lab-7---ias.pdf', 'applicatio', 284, 'pdf testttt', 'Health and Personal Care', 'testing', 1, 'alice'),
(22, '87407-the-story-of-electronics.pdf', 'applicatio', 1814, 'testing', 'Hobbies', 'hello world', 1, 'alice'),
(23, '15316-essay-writing-phraseology-cape.pdf', 'applicatio', 327, 'test1', 'News and Current Events', 'pls work', 1, 'alice'),
(24, '77211-lab1.pdf', 'applicatio', 131, 'test1', 'Sports', ':D work please', 1, 'alice'),
(25, '45640-00_runningjavaprograms.pdf', 'applicatio', 605, 'testinggggg', 'Technology', 'techy stuff', 1, 'alice'),
(26, '40537-project-assignment-part-ii.pdf', 'applicatio', 415, 'pdf upload', 'Travel', 'hello everyone.', 1, 'alice'),
(27, '29781-math-assignment.pdf', 'applicatio', 153, 'uploading pdf', 'Education', 'educational pdf just for you all', 1, 'alice');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
