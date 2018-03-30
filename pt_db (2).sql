-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2017 at 03:23 AM
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
-- Database: `pt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `emailp` varchar(50) NOT NULL,
  `emaild` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`emailp`, `emaild`, `comment`) VALUES
('rajjithesh55@gmail.com', 'abh@gmail.com ', 'abhay'),
('rajjithesh55@gmail.com', 'abh@gmail.com ', 'iioooo'),
('rajjithesh55@gmail.com', 'das@gmail.com ', 'good guy'),
('ja7@gmail.com', 'das@gmail.com ', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `name_d` varchar(15) NOT NULL,
  `mail_d` varchar(20) NOT NULL,
  `phone_d` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `adproof` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `lproof` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `vnumber` varchar(50) NOT NULL,
  `rcbook` varchar(50) NOT NULL,
  `rides` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`mail_d`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`name_d`, `mail_d`, `phone_d`, `password`, `age`, `adproof`, `gender`, `lproof`, `type`, `vnumber`, `rcbook`, `rides`, `rate`) VALUES
('Abhay Balan', 'abh@gmail.com', 9142426264, 'qwerty', 32, '12345678', 'male', '123456789', 'car', '1234', '12345678', 2, 4),
('das', 'das@gmail.com', 12345678, '12345', 32, '12345678', 'male', '1123456789', 'bike', '2345678', '213456789', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driverl`
--

DROP TABLE IF EXISTS `driverl`;
CREATE TABLE IF NOT EXISTS `driverl` (
  `email` varchar(50) NOT NULL,
  `flatt` decimal(20,10) NOT NULL,
  `flong` decimal(20,10) NOT NULL,
  `tolatt` decimal(20,10) NOT NULL,
  `tolong` decimal(20,10) NOT NULL,
  `rate` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driverl`
--

INSERT INTO `driverl` (`email`, `flatt`, `flong`, `tolatt`, `tolong`, `rate`, `time`) VALUES
('abh@gmail.com', '10.0522338000', '76.6187583000', '9.9312328000', '76.2673041000', 12, '05:59'),
('abh@gmail.com', '10.0522338000', '76.6187583000', '9.9312328000', '76.2673041000', 12, '05:59'),
('abh@gmail.com', '10.0640260000', '76.6593536000', '9.9188973000', '77.1024902000', 20, '04:00'),
('rajjithesh55@gmail.com', '10.0640260000', '76.6593536000', '9.9188973000', '77.1024902000', 20, '04:00');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `name_p` varchar(20) NOT NULL,
  `mail_p` varchar(50) NOT NULL,
  `phone_p` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender_p` varchar(30) NOT NULL,
  PRIMARY KEY (`mail_p`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='passenger table for private taxi rental system';

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`name_p`, `mail_p`, `phone_p`, `password`, `gender_p`) VALUES
('JITHESH', 'rajjithesh55@gmail.com', 9895805710, 'jithesh', 'male'),
('JACOB', 'ja7@gmail.com', 8597675646, 'qwerty', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `passengerl`
--

DROP TABLE IF EXISTS `passengerl`;
CREATE TABLE IF NOT EXISTS `passengerl` (
  `email` varchar(30) NOT NULL,
  `flatt` decimal(20,10) NOT NULL,
  `flang` decimal(20,10) NOT NULL,
  `tlatt` decimal(50,30) NOT NULL,
  `tolang` decimal(20,10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengerl`
--

INSERT INTO `passengerl` (`email`, `flatt`, `flang`, `tlatt`, `tolang`) VALUES
('rajjithesh55@gmail.com', '10.0640260000', '76.6593536000', '9.918897300000000000000000000000', '77.1024902000');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `emailp` varchar(30) NOT NULL,
  `emaild` varchar(30) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`emailp`, `emaild`, `active`) VALUES
('rajjithesh55@gmail.com', 'abh@gmail.com ', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
