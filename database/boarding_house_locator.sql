-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2022 at 06:34 PM
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
-- Database: `boarding_house_locator`
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardinghouse`
--

INSERT INTO `boardinghouse` (`bh_id`, `name`, `Landloard_id`, `location`, `house_number`, `Road`, `bh_photo`) VALUES
(1, 'STK Excel', 2, 'Northrise', '35', 'Mwatiamvwa Road', 'FB_IMG_16396448447561234.jpg'),
(2, 'Zulu boarding house', 3, 'Northrise', '2040', 'Macha Rood', 'FB_IMG_16396464982021790.jpg'),
(3, 'Kangwa Boarding house', 5, 'Northrise', '8', 'Mwami Road', 'FB_IMG_16396463067141645.jpg');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

DROP TABLE IF EXISTS `massage`;
CREATE TABLE IF NOT EXISTS `massage` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `massage` longtext NOT NULL,
  `Date` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `amount` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `s_id`, `Landloard_id`, `date`, `room_id`, `amount`, `status`) VALUES
(6, 6, 5, '16/12/2021', 7, '500', 'pending'),
(20, 1, 3, '01/02/2022', 6, '600', 'approved');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `b_id`, `room_number`, `room_amount`, `room_capacity`, `room_image`) VALUES
(1, 1, 1, '500', 3, 'FB_IMG_16396448714602370.jpg'),
(4, 1, 2, '500', 2, 'FB_IMG_16396448650075547.jpg'),
(5, 2, 1, '600', 4, 'FB_IMG_16396464908096657.jpg'),
(6, 2, 2, '600', 6, 'FB_IMG_16396464646519529.jpg'),
(7, 3, 1, '500', 3, 'FB_IMG_16396464219472316.jpg'),
(8, 3, 2, '500', 4, 'FB_IMG_16396464178224897.jpg'),
(9, 3, 3, '550', 3, 'FB_IMG_16396464053790196.jpg'),
(10, 3, 4, '500', 3, 'FB_IMG_16396464116183095.jpg'),
(11, 2, 3, '450', 2, 'IMG-20210909-WA0012.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `phone`, `role`, `pwd`, `agree`, `status`) VALUES
(1, 'Malama', 'Francis', 'malama@gmail.com', '0908989785', 'Student', '202cb962ac59075b964b07152d234b70', 'on', 'on'),
(2, 'Foster', 'Musonda', 'foster@gmail.com', '0966367116', 'Landlord', '202cb962ac59075b964b07152d234b70', 'on', 'on'),
(3, 'Zulu', 'Chimwemwe', 'zulu@gmail.com', '097801928948', 'Landlord', '202cb962ac59075b964b07152d234b70', '', 'on'),
(5, 'kangwa', 'Musonda', 'kangwa@mail.com', '0966235202', 'Landlord', '202cb962ac59075b964b07152d234b70', 'on', 'on'),
(6, 'zikani ', 'Kaira', 'zikani@gmail.com', '0988784386', 'Student', '202cb962ac59075b964b07152d234b70', 'on', 'on');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`img_id`, `user_id`, `image`, `date_added`) VALUES
(1, 2, 'zictc.png', '16/12/2021'),
(2, 5, 'IMG-20210810-WA0101.jpg', '16/12/2021'),
(3, 3, 'bg3.jpg', '30/12/2021');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
