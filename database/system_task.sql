-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2018 at 08:47 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `system_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_features` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_features`, `image`) VALUES
(7, 'Honor 7x Mobile', '4 GB RAM ,64 GB internal storage', '18833_1-31100.jpg'),
(8, 'Samsung J7 NXT', ' (16GB, Black) - 2GB RAM (5.5" Display)', '12534_Black-96601.jpeg'),
(9, 'Samsung Galaxy J7 Prime Shock Proof Case JMA ', 'Red Original Gkk ', '27816_1-adcc8.jpeg'),
(10, 'Samsung Galaxy J7 Prime', ' (32GB, 3GB RAM)', '9153_Samsung-J7-Prime-32GB-SDL130688359-1-9c9b6.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
