-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2015 at 12:05 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `gender`, `birthdate`, `hubby`, `last_login_time`, `created`, `modified`, `created_ip`, `modified_ip`) VALUES
(1, 'John Robert Jerodiaz', 'johnrobertjerodiaz@gmail.com', '6344767cd3f231fb50a03e68eea2e509', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:01:20', '2015-05-06 02:01:20', '', ''),
(2, 'Joshua ferrer', 'joshua@gmail.com', '19185566c5fe3e613eb9a686fa3deec2', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:11:12', '2015-05-06 02:11:12', '', ''),
(3, 'brian jero', 'brian@gmail.com', '929064f2a141f812f1c2efb3ff8194ca', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:29:00', '2015-05-06 02:29:00', '127.0.0.1', ''),
(4, 'brian jero', 'brian@gmail.coms', '6c9c1cd8ef6ba9a23387308761c017bf', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:34:07', '2015-05-06 02:34:07', '127.0.0.1', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
