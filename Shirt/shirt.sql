-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2015 at 05:39 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(5) NOT NULL,
  `usid` varchar(10) NOT NULL,
  `pid` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `usid`, `pid`, `status`) VALUES
(1, 'swathi', 1, 0),
(1, 'swathi', 2, 0),
(1, 'swathi', 8, 0),
(2, 'swathi', 3, 0),
(2, 'swathi', 4, 0),
(3, 'swathi', 1, 0),
(3, 'swathi', 8, 0),
(4, 'swathi', 6, 0),
(4, 'swathi', 7, 0),
(5, 'swathi', 8, 0),
(6, 'swathi', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `pass`) VALUES
('test@test.', '12345678'),
('swathi', 'swathi'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `cost`, `des`) VALUES
(1, 'Polo', '50.00', 'This is Polo shirt'),
(2, 'T-SHIRT', '20.00', 'This is cotton T- shirt'),
(3, 'Sweatshirt', '35.00', 'This is Sweat shirt'),
(4, 'Tunic', '29.00', 'This is Tunic shirt'),
(5, 'Party', '35.00', 'This is Party shirt'),
(6, 'office', '26.00', 'This is formal shirt'),
(7, 'Night Shirt', '10.00', 'This is casual shirt'),
(8, 'Tube top', '18.00', 'This is Tube top shirt');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(5) NOT NULL,
  `usid` varchar(20) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `usid`, `total`) VALUES
(1, 'swathi', '220.00'),
(3, 'swathi', '220.00'),
(4, 'swathi', '220.00'),
(5, 'swathi', '220.00'),
(6, 'swathi', '256.00'),
(7, 'swathi', '256.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
