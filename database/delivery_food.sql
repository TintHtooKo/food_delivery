-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2023 at 06:37 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `all_product`
--

CREATE TABLE IF NOT EXISTS `all_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `all_product`
--

INSERT INTO `all_product` (`id`, `name`, `price`, `image`) VALUES
(1, 'Bacon Cheese Green Burger', '5000', 'baconchess.png'),
(2, 'Black Angus Burger', '8500', 'black.png'),
(3, 'Bacon Bacon Cheese Burge', '5000', 'baconbacon.png'),
(4, 'CrazyBeefTuna Burger', '10000 ', 'tuna.png'),
(5, 'ShroomBacon Burger', '5000', 'sharoom.png'),
(6, 'Chicken Burger', '5600', 'chicken.png'),
(7, 'Fatboy Burger', '4000 ', 'fat.png'),
(8, 'Classic Smash', '5000', 'classic.png'),
(9, 'Ortolana', '15000', 'Ortolana.png'),
(10, 'Buffalo Chicken', '21000', 'Buffalo_chicken.png'),
(11, 'Doppio Pepperoni', '16000', 'doppio-pepperoni.png'),
(12, 'Bacon Alfredo', '13000 ', 'bacon_alfredo.png'),
(13, 'Margherita', '8500', 'margherita.png'),
(14, 'Sorriso', '11500', 'sorriso.png'),
(15, 'Vegetariana', '11500 ', 'vegetariana.png'),
(16, 'Caramel Glazed Cream', '5000', 'caramel.png'),
(17, 'Chocolate Glazed', '5000', 'chocolate.png'),
(18, 'Strawberry Filled Sprinkles', '5000 ', 'strawberry.png'),
(19, 'Lime Chocolate Ring', '5000', 'lime.png'),
(20, 'Chocolate M&M Sprinkles', '5000', 'm&m.png'),
(21, 'Coconut Chocolate', '5000', 'coconut.png'),
(22, 'Coconut and Vanilla', '5000', 'coconutvi.png'),
(23, 'Chocolate and Vanilla', '5000', 'chocov.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Htoo', 'htoo@gmail.com', 'hello foa'),
('kyaw', 'kyaw@gmail.com', 'Nice customer service.'),
('Htoo', 'htoo@gmail.com', 'Hello\r\n'),
('Htoo', 'htoo@gmail.com', 'Hello\r\n'),
('susu', 'susu@gmail.com', 'Thanks for everything\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `order_pro`
--

CREATE TABLE IF NOT EXISTS `order_pro` (
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_pro`
--

INSERT INTO `order_pro` (`name`, `email`, `phone`, `address`, `type`, `qty`, `price`, `no`) VALUES
('Htoo', 'htoo@gmail.com', '0977777', 'Yangon', 'Black Angus Burger', '3', '25500', '95097'),
('kyaw', 'kyaw@gmail.com', '03566565', 'Yangon', 'Vegetariana', '3', '34500', '44447'),
('mgmg', 'mgmg@gmail.com', '03566565', 'Yangon', 'Sorriso', '5', '57500', '33768');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `city`, `phone`, `pass`) VALUES
(1, 'Htoo', 'htoo@gmail.com', 'Yangon', '0977777', '11111111'),
(2, 'kyaw', 'kyaw@gmail.com', 'Mandalay', '09111111', '11111111'),
(3, 'susu', 'susu@gmail.com', 'Bego', '092222222', '11111111'),
(4, 'nandar', 'nandar@gmail.com', 'Mawlamyine', '03566565', '11111111'),
(5, 'agag', 'agag@gmaill.com', 'Bagan', '0955521212', '11111111'),
(6, 'mgmg', 'mgmg@gmail.com', 'Yangon', '09588545', '11111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
