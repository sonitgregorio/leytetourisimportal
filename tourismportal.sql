-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2015 at 03:33 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourismportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE IF NOT EXISTS `tbl_announcement` (
  `id` int(11) NOT NULL,
  `announcement` text NOT NULL,
  `uid` int(11) NOT NULL,
  `dte` date NOT NULL,
  `tme` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`id`, `announcement`, `uid`, `dte`, `tme`) VALUES
(1, 'Samples ', 2, '2015-09-18', '02:06:34'),
(2, 'Lols', 1, '2015-09-18', '06:22:54'),
(3, 'GG', 3, '2015-09-19', '04:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city`, `contact`, `filename`) VALUES
(1, 'Palo, Leyte', '09094094059', 'a949fd2a25c78e1b065753f772fcd8f2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `spot` int(11) NOT NULL,
  `descr` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `filename`, `spot`, `descr`) VALUES
(1, 'cc9312717a30035dcdfb753db31e97f9.jpg', 2, 'Church');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel` (
  `id` int(11) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `information` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tourist` int(11) NOT NULL,
  `filename` text NOT NULL,
  `owned` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `hotel`, `information`, `contact`, `address`, `tourist`, `filename`, `owned`) VALUES
(1, 'The Oriental', 'The definition of a word is any string of characters that is immediately after any character listed in the delimiters parameter (By default these are: space, form-feed, newline, carriage return, horizontal tab, and vertical tab).', '09094094059', 'Baras, Palo Leyte', 1, 'd37c83c1e3d641814ae9544185be2897.jpg', 3),
(2, 'GV Hotels', 'xD', '09090909090', 'Baras,  Palo Leyte', 1, 'b7764f43f90312f720e110e4e3647922.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_room`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel_room` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `rate` decimal(11,2) NOT NULL,
  `uid` int(11) NOT NULL,
  `filename` text NOT NULL,
  `roomno` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel_room`
--

INSERT INTO `tbl_hotel_room` (`id`, `description`, `rate`, `uid`, `filename`, `roomno`) VALUES
(1, 'Luxury', '120.00', 3, 'eff7fc1f674e24f4916c2fcee94dd7f8.jpg', 'R813x'),
(2, 'Luxury', '124.00', 3, '1231957adfe85fb00e41336244cf90f6.jpg', 'R9d');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `filename`, `uid`) VALUES
(1, '091ff16b38d9eeddd1e0b351e375796d.jpg', 2),
(2, 'd901ac3ca7b59bef6ac59c308ce351b4.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reserve`
--

CREATE TABLE IF NOT EXISTS `tbl_reserve` (
  `id` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `datereserve` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reserve`
--

INSERT INTO `tbl_reserve` (`id`, `hid`, `fullname`, `emailaddress`, `contact`, `datereserve`) VALUES
(3, 2, 'asd', 'asd@yahoo.com', 'asd', '2015-09-20'),
(4, 1, 'asd', 'asd@yahoo.com', '123123', '2015-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_room_gallery` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `roomid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_gallery`
--

INSERT INTO `tbl_room_gallery` (`id`, `filename`, `description`, `uid`, `roomid`) VALUES
(3, '30bb8b2cd3657908fd76b337e4f27d1d.jpg', 'Master Bed', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_touristspot`
--

CREATE TABLE IF NOT EXISTS `tbl_touristspot` (
  `id` int(11) NOT NULL,
  `tourist` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `information` text NOT NULL,
  `filename` text NOT NULL,
  `city` int(11) NOT NULL,
  `owned` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_touristspot`
--

INSERT INTO `tbl_touristspot` (`id`, `tourist`, `address`, `contact`, `information`, `filename`, `city`, `owned`) VALUES
(1, 'MacArthur', 'Baras, Palo Leyte', '09094094059', 'They were more than life-sized statues; they were larger than life. Former US General Douglas MacArthur, his landing party, and then President Sergio Osmeña and General Carlos Romulo, towered close to the combined height of two people at Red Beach, Palo, Leyte. Shining proud and golden under the sunlight, they are forever frozen in the moment of MacArthur’s historic return to the Philippines almost 70 years ago. And the way they walked on Philippine soil again – by wading to the shore – is also portrayed through the shallow pool where the bronze statues stand.', 'c65347a615197c5f7b875d424bb39e41.jpg', 1, 1),
(2, 'Cathedral', 'Palo Leyte', '09094094059', 'Palo Cathedral Church', '7b35cadb598851a478f8ec796dae5c19.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `email`, `username`, `password`, `usertype`) VALUES
(1, 'Joemar', 'Dosal', 'D', '09094094059', 'jomardosal@gmail.com', 'joemar', 'dosal', 4),
(2, 'Nizza', 'Ducducan', 'M', '09094094059', 'nizza@yahoo.com', 'nizza', 'nizza', 3),
(3, 'Sharmain', 'Morden', 'M', '09090909090', 'hotel@yahoo.com', 'sharmaine', 'hotel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE IF NOT EXISTS `tbl_usertype` (
  `id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`id`, `description`) VALUES
(1, 'Hotel'),
(2, 'Transportation'),
(3, 'Tourist Spot'),
(4, 'Admin'),
(5, 'Guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotel_room`
--
ALTER TABLE `tbl_hotel_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reserve`
--
ALTER TABLE `tbl_reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_gallery`
--
ALTER TABLE `tbl_room_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_touristspot`
--
ALTER TABLE `tbl_touristspot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_hotel_room`
--
ALTER TABLE `tbl_hotel_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_reserve`
--
ALTER TABLE `tbl_reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_room_gallery`
--
ALTER TABLE `tbl_room_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_touristspot`
--
ALTER TABLE `tbl_touristspot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
