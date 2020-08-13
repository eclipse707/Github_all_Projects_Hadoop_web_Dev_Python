-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2017 at 08:21 PM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default',
  `bio` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `email`, `password`, `fullname`, `username`, `avatar`, `bio`, `gender`, `country`, `facebook`, `twitter`, `pinterest`) VALUES
(1, 'thetechnolover7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Piyush Bendale', 'admin', 'default', '', 'M', 'India', 'Sample', 'PIyushVB7399', 'PIyushVB7399'),
(2, 'saurabh@gmail.com', '133057facf49cbe6520b15a4d96ee395', 'Saurabh Panjwani', 'saurabh', 'default', '', '', '', '', '', ''),
(3, 'saurabh@abc.com', '1a57ec3029385ba9dad07df4a06b0698', 'saurabh', 'saurabhp', 'default', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE IF NOT EXISTS `arts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `artistid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`id`, `image`, `alt`, `artistid`, `price`, `description`) VALUES
(1, '1', 'Dancing Colors', 0, 39, 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters.'),
(2, '2', 'Fluid Paint', 0, 39, 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters.'),
(3, '3', 'Fluid Paint', 0, 39, 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters.'),
(4, '1', 'Dancing Colors', 0, 39, 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters.'),
(5, '2', 'Fluid Paint', 0, 39, 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters.'),
(6, '1', 'Fluid Paint', 0, 39, 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters.'),
(7, '100406.png', 'sample', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
