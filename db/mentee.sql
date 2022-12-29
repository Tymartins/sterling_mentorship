-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2022 at 07:30 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentorship`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

DROP TABLE IF EXISTS `mentee`;
CREATE TABLE IF NOT EXISTS `mentee` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `SID` varchar(200) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Role` varchar(200) NOT NULL,
  `Motivation` varchar(200) NOT NULL,
  `Self` varchar(200) NOT NULL,
  `Reasons` varchar(200) NOT NULL,
  `Focus` varchar(200) NOT NULL,
  `Hobby` varchar(200) NOT NULL,
  `MoreInformation` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id`, `SID`, `Fname`, `Gender`, `Role`, `Motivation`, `Self`, `Reasons`, `Focus`, `Hobby`, `MoreInformation`, `Password`) VALUES
(1, 'JB03580', 'ABDULSALAM ABUBAKAR', 'male', 'mentee', 'I want to develop a new skill set ', 'fast learner', 'growth', 'AFOLABI AFOLAYAN', 'CODING', 'I am a problem solver', 'abdulsalam'),
(2, 'JB03581', 'Muideen Mudashiru', 'male', 'mentee', 'briefly', 'your self', 'one ', 'two', 'traveling', 'i am a senior man coach', 'coach'),
(3, 'JB03583', 'Khadija Jibril', 'femmale', 'mentee', 'tech enthusiast ', 'i am an aspiring front end dev', 'three ', 'front end ', 'coding ', 'i love kotlin ', 'dija ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
