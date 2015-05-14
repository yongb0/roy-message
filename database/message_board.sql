-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 01:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` varchar(50) NOT NULL,
  `modified` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Aston Martin', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(2, 'Acura', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(3, 'Audi', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(4, 'Bentley', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(5, 'Bmw', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(6, 'Bugatti', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(7, 'Buick', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(8, 'Cadillac', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(9, 'Chevrolet', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(10, 'Chrysler', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(11, 'Dodge', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(12, 'Ferrari', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(13, 'Ford', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(14, 'Gmc', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(15, 'Honda', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(16, 'Hyundai', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(17, 'Infiniti', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(18, 'Jaguar', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(19, 'Jeep', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(20, 'Lamborghini', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(21, 'Lexus', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(22, 'Lincoln', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(23, 'Maserati', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(24, 'Mazda', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(25, 'Mercedes-Benz', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(26, 'Mitsubishi', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(27, 'Tesla', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(28, 'Nissan', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(29, 'Porsche', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(30, 'Rolls Royce', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(31, 'Subaru', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(32, 'Tesla', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(33, 'Toyota', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(34, 'Volkswagen', '2015-05-13 10:42:37', '2015-05-13 10:42:37'),
(35, 'Volvo', '2015-05-13 10:42:37', '2015-05-13 10:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `to_id`, `from_id`, `content`, `created`, `modified`) VALUES
(22, 18, 18, 'Hello I am sending message in my inbox', '2015-05-13 04:04:29', '2015-05-13 04:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name_first` varchar(100) NOT NULL,
  `name_second` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `name_first`, `name_second`) VALUES
(1, 'Tony', 'Blair'),
(5, 'John', 'Major'),
(6, 'Margaret', 'Thatcher'),
(7, 'James', 'Callaghan'),
(8, 'Edward', 'Heath'),
(9, 'Harold', 'Wilson'),
(10, 'Alec', 'Douglas-Home'),
(11, 'Harold', 'Macmillan'),
(12, 'Anthony', 'Eden'),
(13, 'Clement', 'Attlee'),
(14, 'Winston', 'Churchill');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `hubby` text,
  `last_login_time` timestamp NOT NULL,
  `created` timestamp NOT NULL,
  `modified` timestamp NOT NULL,
  `created_ip` varchar(20) NOT NULL,
  `modified_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `gender`, `birthdate`, `hubby`, `last_login_time`, `created`, `modified`, `created_ip`, `modified_ip`) VALUES
(18, 'john robert jerodiaz', 'johnrobertjerodiaz@gmail.com', '6a84305784b686396e9ddcc344a090d36728cd31', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-12 20:03:54', '2015-05-12 20:03:54', '', ''),
(19, 'God my father', 'father@gmail.com', '45b972d03c340828ccce71f63b743d26a018a57e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-13 04:35:44', '2015-05-13 04:35:44', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
