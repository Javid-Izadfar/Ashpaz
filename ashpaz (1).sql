-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 03:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ashpaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_lookup`
--

CREATE TABLE IF NOT EXISTS `city_lookup` (
  `city_code` int(11) NOT NULL,
  `city_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_lookup`
--

INSERT INTO `city_lookup` (`city_code`, `city_name`) VALUES
(1, 'تهران'),
(2, 'پردیس'),
(3, 'دماوند'),
(4, 'شهرری'),
(5, 'اصفهان'),
(6, 'چادگان');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_title` varchar(64) NOT NULL,
  `post_text` text NOT NULL,
  `post_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state_lookup`
--

CREATE TABLE IF NOT EXISTS `state_lookup` (
  `state_code` int(11) NOT NULL,
  `state_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_lookup`
--

INSERT INTO `state_lookup` (`state_code`, `state_name`) VALUES
(1, 'تهران'),
(2, 'اصفهان');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `family` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state_code` int(11) NOT NULL,
  `city_code` int(11) NOT NULL,
  `address` text NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `catering_name` varchar(25) DEFAULT NULL,
  `p_code` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `family`, `username`, `password`, `email`, `state_code`, `city_code`, `address`, `phonenumber`, `catering_name`, `p_code`) VALUES
(1, 'setare karimi', 'karimi', 'ibhjmkl', '46315', 'setarekarimi.kh@gmail.com', 2, 1, 'teranpars khiaban maleki', '09361070325', 'javidkhan', 1234567890),
(2, 'Ø³ØªØ§Ø±Ù‡', 'Ú©Ø±ÛŒÙ…ÛŒ', 'Serlina', 'qazxft', 'str72.karimi@gmail.com', 2, 2, 'ØªÙ‡Ø±Ø§Ù† Ù¾Ø§Ø±Ø³ Ø®ÛŒØ§Ø¨Ø§Ù† Ù…Ù„Ú©ÛŒ', '09361070325', '', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_lookup`
--
ALTER TABLE `city_lookup`
  ADD PRIMARY KEY (`city_code`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_title`), ADD KEY `user_id` (`user_id`), ADD KEY `post_date` (`post_date`);

--
-- Indexes for table `state_lookup`
--
ALTER TABLE `state_lookup`
  ADD PRIMARY KEY (`state_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD KEY `state_code` (`state_code`), ADD KEY `city_index` (`city_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`state_code`) REFERENCES `state_lookup` (`state_code`),
ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`city_code`) REFERENCES `city_lookup` (`city_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
