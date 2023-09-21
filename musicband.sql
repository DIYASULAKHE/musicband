-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 01:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musicband`
--

-- --------------------------------------------------------

--
-- Table structure for table `buytickets`
--

CREATE TABLE IF NOT EXISTS `buytickets` (
  `psw` int(10) NOT NULL,
  `usrname` varchar(20) NOT NULL,
  `Phnumber` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`Phnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buytickets`
--

INSERT INTO `buytickets` (`psw`, `usrname`, `Phnumber`, `price`) VALUES
(1, 'sdf@gmai', '1412435325', 250),
(1, '3252354', '2523643677', 250),
(1, 'sahanaskari546@gmail', '34563', 250),
(1, 'sdf@gmail.com', '3456323', 250),
(1, 'dasfas', '3456372365', 250),
(1, 'ffjhgjjk', '3456399797', 250),
(1, '87686876', '4232534654', 250),
(1, 'sdf@gmail.com', '4546789', 250),
(1, '444444@gmail.com', '5555666777', 250),
(3, 'sahanaskari@gmail.co', '6362279129', 0),
(3, 'sahanaskari546@gmail', '7867869898', 750);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `name` varchar(20) NOT NULL,
  `Phnumber` varchar(10) NOT NULL,
  `comments` varchar(25) NOT NULL,
  PRIMARY KEY (`Phnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `Phnumber`, `comments`) VALUES
('xyz', '2147483647', 'music band'),
('suhas', '34563', 'fhf'),
('sathjjl', '4364577', 'gikyk'),
('suhas', '6362379129', 'yes\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
