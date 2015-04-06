-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 02:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE IF NOT EXISTS `meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `breakfast` text NOT NULL,
  `lunch` text NOT NULL,
  `dinner` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `breakfast`, `lunch`, `dinner`, `user_id`, `d_id`) VALUES
(1, 'Take salads ', 'take chapati and curd', 'take salads', 6, 2),
(2, 'Take salads with egg white', 'one chapati and salads', 'only salads and four bioled eggs', 4, 2),
(3, 'salad ', 'curd', 'juice', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(0, 0, 'Problem in breakfast', 2, 4, 'I have problem in breakfast', 0, '', ''),
(0, 0, 'Problem in breakfast', 2, 4, 'I have problem in breakfast', 0, '', ''),
(0, 0, '', 2, 4, '', 0, '', ''),
(0, 0, 'I have some issue in breakfast', 2, 4, 'problem1', 0, '', ''),
(0, 0, 'I am ankur', 2, 4, 'suggestions', 0, '', ''),
(0, 0, 'hiii', 6, 6, 'problem', 0, '', ''),
(0, 0, 'I am d1', 7, 5, 'I am d1 problem', 0, '', ''),
(0, 0, 'Hey I have problem in stomach', 7, 5, 'Stomach problem', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`,`mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `mobile`, `bio`) VALUES
(1, 'nilay', 'nilay', 'nilayy1234@gmail.com', 'dietitian', '8406011750', 'I am nilay singh'),
(2, 'ankur', '$2y$10$cX0g46QmaVpPFkZLS.JPd.rP8m3mm9TMNh1N6kq2YvgyDYCv/92Iq', 'ankur@gmail.com', 'dietitian', '8506011750', 'I am ankur Singh'),
(3, 's1', '$2y$10$jHi5cKrqMLEdtNaS5fqr0Oy7gdG.73smQQY6Pd3rOv8Cl79MPDUDi', 's1@gmail.com', 'dietitian', '8383838383', 'I am s7'),
(4, 's2', '$2y$10$3IgVZEKnAV33Xc3LDym2PeZgX.K0wkg7CHC/m7AdScJtqAEVIjYxS', '', 'patient', '', ''),
(5, 's3', '$2y$10$lQQ7Hqn1qadxc4ZxhmXheuc9ZMpgBfoGbIFnw3LoqpxtmEMQXLhPy', '', 'patient', '', ''),
(6, 'g2', '$2y$10$OSAWZSuTBxh8zIq0Ry4RsuHLeRkr7RviW8Zl7H9DB5JYcMK7mvNEq', '', 'patient', '', ''),
(7, 'd1', '$2y$10$whx7BTopP9tDpc6mJ4dt0eklQzSXJW8rFjHb6/dvS3Kbl8dSbG62e', '', 'dietitian', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
