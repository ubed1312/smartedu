-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2021 at 01:57 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `nom` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `apogée` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `cne` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `reclamer` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`apogée`),
  UNIQUE KEY `cne` (`cne`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `nom` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `msg` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nom`, `prenom`, `mail`, `msg`) VALUES
('ubed', 'ubed', 'ubedi@gmail.com', 'ubed'),
('dgf', 'df', 'df', 'de'),
('ibra', 'ubed', 'ubedi@g.com', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
