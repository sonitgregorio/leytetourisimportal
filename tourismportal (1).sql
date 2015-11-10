-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2015 at 12:49 PM
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
  `tme` time NOT NULL,
  `filename` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`id`, `announcement`, `uid`, `dte`, `tme`, `filename`, `status`) VALUES
(24, 'thank you for visiting our website!!\r\nhave a nice trip.. ENJOY :)', 1, '2015-09-25', '11:23:33', 'b35db55c2dc91979bf39d36c51606e56.jpg', 1),
(25, 'this is our website. enjoy and have fun', 1, '2015-09-25', '01:58:02', '', 1),
(26, 'fhhgiroiurgouojg', 1, '2015-09-25', '01:59:43', '2104ade8e155f3bfd65f6b58bbe961ca.jpg', 0),
(27, 'special moron', 5, '2015-09-25', '02:35:15', 'b6b317b6cba30922ab2dee8c063262c2.jpg', 1),
(28, 'hello', 1, '2015-10-20', '09:45:20', 'cb826b2f0f4d45e354d082b3caac5918.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city`, `contact`, `filename`) VALUES
(1, 'Palo, Leyte', '09094094059', 'a949fd2a25c78e1b065753f772fcd8f2.png'),
(5, 'Tacloban City', '09090909090', 'f872b9d79952dca37046a4ebee449d65.jpg'),
(7, 'Ormoc City', '09090909090', 'ebda8dcf85395f1bfb5762fc5ae1a715.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `spot` int(11) NOT NULL,
  `descr` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `filename`, `spot`, `descr`) VALUES
(1, 'cc9312717a30035dcdfb753db31e97f9.jpg', 2, 'Church'),
(2, '6cfcd6d32114f7c29fc7bc42d53e4b05.jpg', 2, 'ada');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `hotel`, `information`, `contact`, `address`, `tourist`, `filename`, `owned`) VALUES
(2, 'GV Hotels', 'xD', '09090909090', 'Baras,  Palo Leyte', 1, 'b7764f43f90312f720e110e4e3647922.jpg', 0),
(3, 'GV Hotel', '', '09090909090', 'Tacloban City', 2, '27864be3b89d346a761c2d816ed76d4f.jpg', 0),
(4, 'GV Hotel', '', '09090090990', 'Avenida Veteranos cor. Juan Luna Street, Tacloban ', 5, 'ab477413456c38226872e2915c82f358.jpg', 0),
(5, 'Asia Star', '', '0909099099', 'Tacloban City', 5, 'd18086dd9cc675914fd75c8c8a8ec5e1.jpg', 0),
(6, 'La Rica', '', '0909099099', 'Tacloban City', 5, '3d657bd828c504126fc2735fdf5b86ad.jpg', 0),
(7, 'Grande Hotel', '', '09090909090', 'Tacloban City', 5, '0f60f6aa06563b303d0088b956168fec.jpg', 0),
(8, 'ad', '', '0909', 'asd', 4, '69bfb4c41605bdbd40fefeae527014c2.jpg', 0),
(9, 'The Oriental', 'asd', '09090909090', 'Baras, Palo Leyte', 1, 'a9b5a7fc457c5f49f84e16b001cbe9ff.jpg', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel_room`
--

INSERT INTO `tbl_hotel_room` (`id`, `description`, `rate`, `uid`, `filename`, `roomno`) VALUES
(3, 'Master Bed', '250.00', 3, '540edfbdd57a5539174be3b7f3be803e.jpg', '#69'),
(4, 'dsdg', '120.00', 3, '530070d8e48eaa779cb46e214302f813.jpg', '23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE IF NOT EXISTS `tbl_logs` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `tstamp` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `uid`, `description`, `date`, `tstamp`) VALUES
(1, 1, 'Approve Announcement', '2015-10-20', '17:21:15'),
(2, 1, 'Approve Announcement', '2015-10-20', '11:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `filename`, `uid`) VALUES
(1, '091ff16b38d9eeddd1e0b351e375796d.jpg', 2),
(2, 'd901ac3ca7b59bef6ac59c308ce351b4.jpg', 3),
(3, '019788224d1063ee1ccf4f198b4bc922.jpg', 3),
(4, '0bf8e4d40b32a80c468f11f9686c8baa.jpg', 5),
(5, 'e66c3c715f02b5378084e9f0bb4dd499.jpg', 1);

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
  `datereserve` date NOT NULL,
  `check_out` date NOT NULL,
  `no_days` int(11) NOT NULL,
  `stats` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reserve`
--

INSERT INTO `tbl_reserve` (`id`, `hid`, `fullname`, `emailaddress`, `contact`, `datereserve`, `check_out`, `no_days`, `stats`) VALUES
(6, 1, 'Gregorio L Sonit', 'sonitgregorio@gmail.com', 'x', '2015-09-23', '2015-09-24', 1, ''),
(7, 1, 'Oliver Lacabe', 'iyot@yahoo.com', '09094094059', '2015-09-22', '2015-09-28', 6, 'Pending'),
(8, 1, 'Oliver Lacabe', 'iyot@yahoo.com', '09094094059', '2015-09-22', '2015-09-28', 6, 'Confirm'),
(9, 1, 'ad', 'ad@yahoo.com', '09094094059', '2015-09-24', '2015-09-26', 2, 'Pending'),
(10, 1, 'asas', 'asas@yahoo.com', '123546', '2015-09-26', '2015-09-28', 2, 'Pending'),
(11, 1, 'Gregorio Sonit', 'sonitgregorio@gmail.com', '09094094059', '2015-09-28', '2015-09-30', 2, 'Confirmed'),
(12, 1, 'Gregorio Sonit', 'sonitgregorio@gmail.com', '09094094059', '2015-09-01', '2015-09-02', 1, 'Pending'),
(13, 3, 'Gregorio Sonit', 'sonitgregorio@gmail.com', '09090909090', '2016-09-25', '2016-09-28', 3, 'Confirmed'),
(14, 3, 'nizza', 'nmducducan@gmail.com', '09090909090', '2015-05-25', '2015-06-25', 31, 'Confirmed'),
(15, 3, 'nizza', 'nmducducan@gmail.com', '0909090909', '2015-08-25', '2015-08-26', 1, 'Pending');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_gallery`
--

INSERT INTO `tbl_room_gallery` (`id`, `filename`, `description`, `uid`, `roomid`) VALUES
(3, '30bb8b2cd3657908fd76b337e4f27d1d.jpg', 'Master Bed', 3, 1),
(6, '0e1b8ac7db2e3e25e210825c3deacda8.jpg', 'CR la ini', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE IF NOT EXISTS `tbl_route` (
  `id` int(11) NOT NULL,
  `frm` varchar(60) NOT NULL,
  `tos` varchar(60) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `owned` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_route`
--

INSERT INTO `tbl_route` (`id`, `frm`, `tos`, `rate`, `owned`) VALUES
(14, 'Taclobans', 'Palo', '25', 4),
(16, 'Tacloban', 'Palos', '25', 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_touristspot`
--

INSERT INTO `tbl_touristspot` (`id`, `tourist`, `address`, `contact`, `information`, `filename`, `city`, `owned`) VALUES
(7, 'Patio Victoria', 'San Jose', '09090909090', 'asd', '5a972bf7dc447703a7874907f4354fa2.jpg', 5, 1),
(8, 'MacArthur ', 'Baras,  Palo Leyte', '09090909090', 'mafmasfs', '9c58b195d58563ec965c8547b537ecae.jpg', 1, 1),
(9, 'Cathedral', 'palo', '09090909090', 'fabiotaw;ubt', '0ea46be55735524cc49624db21347f5e.jpg', 6, 8),
(10, 'astrodome', 'asdas', '09090909090', 'asdassdfsdf', 'd1a06ee878ab53f8bef1961c594d8426.jpg', 1, 2),
(11, 'astrodome', 'Tacloban City', '09090909090', 'dgsa n', '58a5cc82736b6aa023d61e4b1238b8fd.jpg', 5, 7),
(12, 'vsu', 'ormoc city', '0009999', 'beauty', 'bf8448814ae6887909f5ad2b89ca9953.jpg', 7, 1),
(13, 'EVSU Tacloban', 'quarry dist. tacloban city', '09090090990', '35yw', 'cea7561340f330af0077f00d16f8a74d.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transpo`
--

CREATE TABLE IF NOT EXISTS `tbl_transpo` (
  `id` int(11) NOT NULL,
  `transpo` varchar(50) NOT NULL,
  `information` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` int(11) NOT NULL,
  `filename` text NOT NULL,
  `owned` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transpo`
--

INSERT INTO `tbl_transpo` (`id`, `transpo`, `information`, `contact`, `address`, `city`, `filename`, `owned`) VALUES
(1, 'Van Vans', 'Lorem', '09094094059', 'Tacloban City', 1, 'fb36ee4cd1386b64ce809a9cae604711.jpg', 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `email`, `username`, `password`, `usertype`) VALUES
(1, 'Joemar', 'Dosal', 'D', '09094094059', 'jomardosal@gmail.com', 'joemar', 'dosal', 4),
(2, 'Nizza', 'Ducducan', 'M', '09094094059', 'nizza@yahoo.com', 'nizza', 'nizza', 3),
(3, 'Sharmain', 'Morden', 'M', '09090909090', 'hotel@yahoo.com', 'sharmaine', 'hotel', 1),
(4, 'Jessie', 'Paragas', 'R', '09094094059', 'alphaphidang@yahoo.com', 'jessie', 'transpo', 2),
(5, 'asd', 'asd', 'asd', '09090909090', 'asd@yahoo.com', 'sad', 'asd', 5),
(6, 'asd', 'asd', 'asd', '09090909090', 'asd@yahoo.com', 'asd', 'asd', 1),
(7, 'aaa', 'aaa', 'aaa', '09090909090', 'sonitgregorio@gmail.com', 'aa', 'aa', 3),
(8, 'juan', 'Tamad', 't', '09090909090', 'example@yahoo.com', 'juan', 'asd', 3);

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
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
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
-- Indexes for table `tbl_route`
--
ALTER TABLE `tbl_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_touristspot`
--
ALTER TABLE `tbl_touristspot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transpo`
--
ALTER TABLE `tbl_transpo`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_hotel_room`
--
ALTER TABLE `tbl_hotel_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_reserve`
--
ALTER TABLE `tbl_reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_room_gallery`
--
ALTER TABLE `tbl_room_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_route`
--
ALTER TABLE `tbl_route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_touristspot`
--
ALTER TABLE `tbl_touristspot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_transpo`
--
ALTER TABLE `tbl_transpo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
