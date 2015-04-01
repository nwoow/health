-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 06:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

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
`id` int(11) NOT NULL,
  `breakfast` text NOT NULL,
  `lunch` text NOT NULL,
  `dinner` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `breakfast`, `lunch`, `dinner`, `user_id`) VALUES
(1, 'Take salads ', 'take chapati and curd', 'take salads', 5),
(2, 'Take salads with egg white', 'one chapati and salads', 'only salads and four bioled eggs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `mobile`, `bio`) VALUES
(1, 'nilay', 'nilay', 'nilayy1234@gmail.com', 'dietitian', '8406011750', 'I am nilay singh'),
(2, 'ankur', '$2y$10$cX0g46QmaVpPFkZLS.JPd.rP8m3mm9TMNh1N6kq2YvgyDYCv/92Iq', 'ankur@gmail.com', 'dietitian', '8506011750', 'I am ankur Singh'),
(3, 's1', '$2y$10$jHi5cKrqMLEdtNaS5fqr0Oy7gdG.73smQQY6Pd3rOv8Cl79MPDUDi', 's1@gmail.com', 'dietitian', '8383838383', 'I am s7'),
(4, 's2', '$2y$10$3IgVZEKnAV33Xc3LDym2PeZgX.K0wkg7CHC/m7AdScJtqAEVIjYxS', '', 'patient', '', ''),
(5, 's3', '$2y$10$lQQ7Hqn1qadxc4ZxhmXheuc9ZMpgBfoGbIFnw3LoqpxtmEMQXLhPy', '', 'patient', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`,`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
