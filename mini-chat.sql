-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2020 at 09:21 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini-chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `membres_messages`
--

CREATE TABLE IF NOT EXISTS `membres_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_pseudo` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `date_messages` datetime NOT NULL,
  `themes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `membres_messages`
--

INSERT INTO `membres_messages` (`id`, `users_pseudo`, `messages`, `date_messages`, `themes_id`) VALUES
(1, 'avo', 'ce que voulez vous dire est tellemnet vraie.', '2020-08-05 19:41:39', 1),
(2, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(3, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(4, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(5, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(6, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(7, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(8, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(9, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(10, 'avo', 'un petit test me fait de bien good ', '0000-00-00 00:00:00', 2),
(11, 'avo', 'I don''t remember that it is easy to use ', '0000-00-00 00:00:00', 1),
(12, 'avo', 'Computer is so cool, because I spend more time in  front of my Pc', '0000-00-00 00:00:00', 1),
(14, 'avo', 'you go worked fuck', '0000-00-00 00:00:00', 1),
(15, 'avo', 'Oh Pution', '0000-00-00 00:00:00', 1),
(16, 'avo', 'allez, stp marche', '0000-00-00 00:00:00', 1),
(17, 'avo', 'ouais, d''apres moi les films sont trop cool car on peut tuer le temps avec des films', '0000-00-00 00:00:00', 2),
(18, 'nasan', 'test if it work\r\n', '0000-00-00 00:00:00', 2),
(19, 'nasan', 'test', '0000-00-00 00:00:00', 2),
(20, 'nasan', 'test', '2020-08-07 06:28:56', 2),
(21, 'avo', 'ok je crois que ca a fini par marcher\r\n', '2020-08-07 07:06:43', 2),
(22, 'avo', 'ok je crois que ca a fini par marcher\r\n', '2020-08-07 07:07:49', 2),
(23, 'nasan', 'yosh, Il reste quelque bug Ã  resoudre avant de finir et de redevelopper Ã  nouveau mon app', '2020-08-07 10:10:24', 1),
(24, 'tsiaro', 'maefa message @zay zay f ef a ', '2020-08-07 10:46:53', 2),
(25, 'tsiaro', 'Yo putin', '2020-08-07 10:47:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `date_theme` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `titre`, `description`, `date_theme`) VALUES
(1, 'Computer', 'In our day, Computer becomes a most popular things in the World, you can''t run away with it.\r\nWhat in your mind, about it?', '2020-08-05'),
(2, 'movies', 'Movies too become a most popular things in the world, It concerns all peopole and no one doesn''t afford it.\r\nWhat in your mind, about it?', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'avo', 'c6252b4121d43ed6403081c08832c46f28074789'),
(2, 'nasan', 'c5b39c09b3069882330adc07ab4f811551e1ff9c'),
(3, 'tsiaro', '4b8427c0e90d77e080f995c7dc10aa1149966104');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
