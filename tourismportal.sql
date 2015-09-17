-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 01:45 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`id`, `announcement`, `uid`, `dte`, `tme`) VALUES
(7, 'ad', 7, '2015-09-17', '08:25:34'),
(8, 'lorem', 7, '2015-09-17', '08:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city`, `contact`, `filename`) VALUES
(1, 'asd', 'asd', 'f6c20874295fc31212c82a06ed3f0e49.jpg'),
(2, 'dd', 'dd', '3b2e7a38d677593e9f39278e4a9456a6.jpg'),
(3, 'Palo Leyte', '090909090', 'df3b46800cfb3bb84eda3cd51a231d47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `spot` int(11) NOT NULL,
  `descr` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `filename`, `spot`, `descr`) VALUES
(2, 'e07c43f9185b42e3c9ff627eddc8efad.jpg', 4, 'xad'),
(3, 'b1fb68bb95d4ed9dc2a71ac3b2b13da1.jpg', 4, 'ddda'),
(4, '6dc1fb765966f6586a4a582108b33f03.jpg', 4, 'ddd'),
(5, '11c8e911f4057a6cef2a82b08237fe8a.jpg', 4, 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel` (
  `id` int(11) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tourist` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `hotel`, `contact`, `address`, `tourist`, `filename`) VALUES
(1, 'Oriental Hotel', '090909009', 'Baras, Palo Leyte', 1, '858d11c34421136e4a09514c75459012.jpg'),
(2, 'GV Hotel', '456789', 'tacloban city', 1, '5ad924a21f933cb9d4b0f7767550259f.jpg');

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
(1, 'c9a321f4eefc6e1ca7def3e58626520a.jpg', 7),
(2, '0363e72c3bb0fd1a0c9a385a21086331.jpg', 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_touristspot`
--

INSERT INTO `tbl_touristspot` (`id`, `tourist`, `address`, `contact`, `information`, `filename`, `city`, `owned`) VALUES
(1, 'MacArthur ', 'Baras,  Palo Leyte', '0909090909', 'For Your information', '3be365a3ffa5292ef5b6d162d3bdc5fd.jpg', 3, 0),
(2, 'Cathedral', 'asd', 'asd', 'asd', 'd9cd79370acb87b3f3982f9a0c06cbf6.jpg', 1, 5),
(3, 'Ritz Tower De Leytes', 'Baras,  Palo Leyte', '09090909090', 'ada', '80a6c6b0648e1d98ea08a1c394230e35.jpg', 1, 6),
(4, 'Andoks', 'Campetic', '09090909090', 'Food and Beverage', '057875c721ed210a18eec722bfc1fe3e.jpg', 3, 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `email`, `username`, `password`, `usertype`) VALUES
(3, 'Joe', 'Dosal', 'Mar', '0909090909', 'joemar@yahoo.com', 'joemardosal', 'dosal', 4),
(4, 'Joe', 'Dosal', 'Mar', '0909090909', 'joemar@yahoo.com', 'joemardosals', 'dosal', 4),
(5, 'tor', 'tor', 'tor', '090909090', 'tor@yahoo.com', 'tor', 'tor', 3),
(6, 'x', 'x', 'x', '123123', 'x@yahoo.com', 'a', 'a', 3),
(7, 'Nizza ', 'Ducducan', 'F', '0909023133', 'nizza@yahoo.com', 'nizzaducducan', 'nizza', 3);

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
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_touristspot`
--
ALTER TABLE `tbl_touristspot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
