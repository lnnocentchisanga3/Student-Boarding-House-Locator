-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2021 at 08:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `room_id` int(11) NOT NULL,
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
  `Landloard_id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `house_number` varchar(30) NOT NULL,
  `Road` varchar(30) NOT NULL,
  `bh_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`bh_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardinghouse`
--

INSERT INTO `boardinghouse` (`bh_id`, `name`, `Landloard_id`, `location`, `house_number`, `Road`, `bh_photo`) VALUES
(1, 'Green gate', 1, 'james Phiri', '2446', 'James Phiri', 'bg.jpg'),
(2, 'Kalewa Boarding house', 1, 'Nkwazi', '2644', 'James Phiri road', 'pexels-pixabay-221540.jpg'),
(3, 'Green gate', 1, 'Northrise', '2002A', 'Mwatayamvo', 'bg1.jpg'),
(4, 'Riverside', 2, 'ST Andrews', '2644', 'Kazembe', 'bg1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

DROP TABLE IF EXISTS `landloard`;
CREATE TABLE IF NOT EXISTS `landloard` (
  `L_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  PRIMARY KEY (`L_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landloard`
--

INSERT INTO `landloard` (`L_id`, `user_id`, `L_name`, `F_name`) VALUES
(1, 1, 'Innocent', 'Chisanga'),
(2, 2, 'Kabwe', 'richard');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

DROP TABLE IF EXISTS `massage`;
CREATE TABLE IF NOT EXISTS `massage` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `massage` longtext NOT NULL,
  `status` varchar(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`m_id`, `s_id`, `r_id`, `massage`, `status`, `Date`) VALUES
(1, 1, 1, 'hello people', 'unread', '14/10/2021');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(255) NOT NULL,
  `amount` varchar(10) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payid`, `student`, `amount`) VALUES
(1, 'zikani', '500'),
(2, 'Innocent', '200'),
(3, 'malama', '300'),
(4, 'Chishiba', '150');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `Landloard_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `room_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `s_id`, `Landloard_id`, `date`, `room_id`, `amount`) VALUES
(1, 1, 1, '09-02-2021', 1, 250);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `landlord_id` int(11) NOT NULL,
  `review` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
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
  `room_amount` varchar(11) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_image` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `b_id`, `room_number`, `room_amount`, `room_capacity`, `room_image`) VALUES
(1, 1, 1, '500', 3, 'bg2.jpg'),
(2, 2, 9, '500', 3, 'bg3.jpg'),
(3, 1, 10, '600', 6, '241294171_1492411737780233_2663789708796594164_n.jpg'),
(4, 2, 3, '400', 3, '1_ngkHgQq7ij1NBNr62er3zA.png');

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
-- Table structure for table `subject_score`
--

DROP TABLE IF EXISTS `subject_score`;
CREATE TABLE IF NOT EXISTS `subject_score` (
  `scoreid` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(255) NOT NULL,
  `test1` int(10) NOT NULL,
  `test 2` int(10) NOT NULL,
  `test 3` int(10) NOT NULL,
  PRIMARY KEY (`scoreid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_score`
--

INSERT INTO `subject_score` (`scoreid`, `student`, `test1`, `test 2`, `test 3`) VALUES
(1, 'zikani', 50, 70, 40),
(2, 'Malama', 80, 40, 65),
(3, 'Chishiba', 50, 75, 90),
(4, 'Innocent', 85, 55, 65);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `phone`, `role`, `pwd`, `agree`, `status`) VALUES
(1, 'Chisanga', 'Innocent', 'chisangainnocent@outlook.com', '0966367116', 'Landlord', '202cb962ac59075b964b07152d234b70', 'on', 'on'),
(2, 'richard', 'Kabwe', 'kundarichard2010@gmail.com', '0908989785', 'Landlord', '202cb962ac59075b964b07152d234b70', 'on', 'on'),
(3, 'Foster', 'Chikopela', 'fosterchikopela44@gmail.com', '0908989786', 'Student', '202cb962ac59075b964b07152d234b70', '', 'on');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`img_id`, `user_id`, `image`, `date_added`) VALUES
(1, 7, 'avatar1.jpg', '14/10/2021'),
(2, 3, 'IMG_20211004_102929 (2).jpg', '14/10/2021'),
(3, 1, 'avatar1.jpg', '14/10/2021'),
(4, 2, 'nodejs-1.png', '14/10/2021');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
