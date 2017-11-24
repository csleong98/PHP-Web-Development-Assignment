-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2017 at 06:22 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interstellar`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `bookID` int(11) NOT NULL AUTO_INCREMENT,
  `bookedUser` varchar(255) NOT NULL,
  `roomName` varchar(255) NOT NULL,
  `checkInTime` date NOT NULL,
  `checkOutTime` date NOT NULL,
  `days` int(255) NOT NULL,
  `totalprice` float NOT NULL,
  `bookDay` date NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`bookID`, `bookedUser`, `roomName`, `checkInTime`, `checkOutTime`, `days`, `totalprice`, `bookDay`) VALUES
(1, 'csleong98', 'venus', '2017-11-01', '2017-11-23', 22, 549.78, '2017-11-23'),
(19, 'CheeWeng', 'venus', '2017-11-07', '2017-11-10', 3, 360, '2017-11-24'),
(18, 'CheeWeng', 'venus', '2017-11-10', '2017-11-30', 20, 2400, '2017-11-24'),
(17, 'sda', 'mercury', '2017-11-03', '2017-11-07', 4, 99.96, '2017-11-23'),
(16, 'csleong98', 'venus', '2017-11-03', '2017-11-11', 8, 199.92, '2017-11-23'),
(15, 'csleong98', 'moon', '2017-11-01', '2017-11-16', 15, 374.85, '2017-11-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
