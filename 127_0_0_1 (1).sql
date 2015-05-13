-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2015 at 11:58 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `to_id`, `from_id`, `content`, `created`, `modified`) VALUES
(1, 0, 17, 'hello', '2015-05-08 09:45:25', '2015-05-08 09:45:25'),
(2, 0, 0, 'sdfsdfsd', '2015-05-08 09:49:14', '2015-05-08 09:49:14'),
(3, 0, 0, 'sdf', '2015-05-08 09:49:21', '2015-05-08 09:49:21'),
(4, 0, 0, 'sdfsdfsdf', '2015-05-08 09:49:38', '2015-05-08 09:49:38'),
(5, 0, 0, '4rtgfdsvcx', '2015-05-08 09:50:07', '2015-05-08 09:50:07'),
(6, 17, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-05-08 09:51:53', '2015-05-08 09:51:53'),
(7, 17, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-05-08 09:51:58', '2015-05-08 09:51:58'),
(8, 17, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-05-08 09:53:16', '2015-05-08 09:53:16'),
(9, 17, 16, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-05-08 09:54:19', '2015-05-08 09:54:19');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `gender`, `birthdate`, `hubby`, `last_login_time`, `created`, `modified`, `created_ip`, `modified_ip`) VALUES
(1, 'John Robert Jerodiaz', 'johnrobertjerodiaz@gmail.com', '6344767cd3f231fb50a03e68eea2e509', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:01:20', '2015-05-06 02:01:20', '', ''),
(2, 'Joshua ferrer', 'joshua@gmail.com', '19185566c5fe3e613eb9a686fa3deec2', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:11:12', '2015-05-06 02:11:12', '', ''),
(3, 'brian jero', 'brian@gmail.com', '929064f2a141f812f1c2efb3ff8194ca', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:29:00', '2015-05-06 02:29:00', '127.0.0.1', ''),
(4, 'brian jero', 'brian@gmail.coms', '6c9c1cd8ef6ba9a23387308761c017bf', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 02:34:07', '2015-05-06 02:34:07', '127.0.0.1', ''),
(5, 'John Robert Jerodiaz', 'johnrobert@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 18:44:29', '2015-05-06 18:44:29', '127.0.0.1', ''),
(6, 'joshua  ferrer', 'joshuaf@gmail.com', 'd1133275ee2118be63a577af759fc052', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 19:27:08', '2015-05-06 19:27:08', '127.0.0.1', ''),
(7, 'berto jero', 'berto@gmail.com', '83187f5ccfbe84d4ec1926efae38000b', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-06 20:18:00', '2015-05-06 20:18:00', '127.0.0.1', ''),
(8, 'mary jane', 'mary@gmail.com', '87410ff2cb507b3c9cbc847ac05fb8ed1214d6a6', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-07 18:53:21', '2015-05-07 18:53:21', '', ''),
(9, 'maria', 'maria@gmail.com', '45b972d03c340828ccce71f63b743d26a018a57e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-07 19:41:53', '2015-05-07 19:41:53', '', ''),
(10, 'jemey', 'jemey@gmail.com', '45b972d03c340828ccce71f63b743d26a018a57e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-07 20:36:12', '2015-05-07 20:36:12', '', ''),
(11, 'jarold prahinog', 'jarold@gmail.com', 'f33a5cb01924b655809ba884e6889e3726c5f814', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 00:23:42', '2015-05-08 00:23:42', '', ''),
(12, 'maria dela', 'maria@gmail.coms', '45b972d03c340828ccce71f63b743d26a018a57e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 00:29:47', '2015-05-08 00:29:47', '', ''),
(13, 'jarold prahinog', 'jerodiaz@gmail.comss', '73fe712c69bc17d8ed1940a9aa7892bc15c95289', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 00:32:02', '2015-05-08 00:32:02', '', ''),
(14, 'John Robert Jerodiaz', 'juanrobert@gmail.com', '45b972d03c340828ccce71f63b743d26a018a57e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 00:48:44', '2015-05-08 00:48:44', '', ''),
(15, 'register', 'register@gmail.com', '693520c74480dec2e39d33c04048e43ea4e26950', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 00:50:47', '2015-05-08 00:50:47', '', ''),
(16, 'hello hi', 'hello@gmail.com', '45b972d03c340828ccce71f63b743d26a018a57e', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 00:51:41', '2015-05-08 00:51:41', '', ''),
(17, 'john robert jerodiaz', 'johnrob@gmail.com', '6a84305784b686396e9ddcc344a090d36728cd31', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-05-08 01:24:18', '2015-05-08 01:24:18', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
