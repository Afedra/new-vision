-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2018 at 01:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newvision`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `Staff_level` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_Identity` char(200) NOT NULL,
  PRIMARY KEY (`Staff_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`Staff_level`, `Staff_Identity`) VALUES
(1, 'client'),
(2, 'sales executive'),
(3, 'designer'),
(4, 'booking clerk'),
(5, 'accountant'),
(6, 'debt collector'),
(7, 'auditor'),
(8, 'manager');
