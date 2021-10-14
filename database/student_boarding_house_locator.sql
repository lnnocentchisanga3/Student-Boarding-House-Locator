-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2021 at 07:18 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_boarding_house_locator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `bed_number` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boardinghouse`
--

DROP TABLE IF EXISTS `boardinghouse`;
CREATE TABLE IF NOT EXISTS `boardinghouse` (
  `bh_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `Landloard` int(11) NOT NULL,
  `loaction` varchar(30) NOT NULL,
  `house_number` varchar(30) NOT NULL,
  `Road` varchar(30) NOT NULL,
  `bh_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`bh_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

DROP TABLE IF EXISTS `landloard`;
CREATE TABLE IF NOT EXISTS `landloard` (
  `L_id` int(11) NOT NULL AUTO_INCREMENT,
  `L_name` int(11) NOT NULL,
  `F_name` int(11) NOT NULL,
  PRIMARY KEY (`L_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

DROP TABLE IF EXISTS `massage`;
CREATE TABLE IF NOT EXISTS `massage` (
  `m_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `Landloard` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reseration`
--

DROP TABLE IF EXISTS `reseration`;
CREATE TABLE IF NOT EXISTS `reseration` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `program` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `agree` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL COMMENT 'off',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `phone`, `role`, `pwd`, `agree`, `status`) VALUES
(1, 'Chisanga', 'Innocent', 'chisangainnocent@outlook.com', '0966367116', 'Student', '202cb962ac59075b964b07152d234b70', 'on', 'on'),
(2, 'Phiri', 'Everson', 'phiri@mail.com', '0978023093', '', 'f30824bacaaabc2fc3aa0b6d658a56e9', '', 'on'),
(3, 'vector', 'Maluine', 'admin@mail.com', '0967217926', 'Landlord', '21232f297a57a5a743894a0e4a801fc3', 'on', 'on'),
(4, 'zikani', 'kaira', 'zkaira7@gmaail.com', '0969328090', 'Student', '0350958ecb773bf1a53aefdf7c5ef18f', 'on', 'on'),
(5, 'Chishiba', 'Mwape', 'chishiba7@gmail.com', '0962227047', 'Student', '17a196c811f636f47e7f80c4599e72e4', 'on', 'on'),
(6, 'Peter', 'Mwape', 'chishiba1@gmail.com', '0979686965', 'Landlord', '17a196c811f636f47e7f80c4599e72e4', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

DROP TABLE IF EXISTS `user_images`;
CREATE TABLE IF NOT EXISTS `user_images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
