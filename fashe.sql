-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 10:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashe`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu-tbl`
--

CREATE TABLE `menu-tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `chid` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu-tbl`
--

INSERT INTO `menu-tbl` (`id`, `title`, `url`, `chid`, `status`, `sort`) VALUES
(3, 'شام خوردی11', '##', 8, '0', 55),
(4, 'تست', '###', 0, '0', 5),
(8, 'آموزش python3', '###000', 0, '0', 55),
(9, 'bhg', 'hbb', 4, '1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `title`, `body`) VALUES
(30, 'آموزش python', '<p>this is a test</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `procat_tbl`
--

CREATE TABLE `procat_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `chid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `procat_tbl`
--

INSERT INTO `procat_tbl` (`id`, `title`, `chid`) VALUES
(1, 'HOME', 0),
(2, 'HOME1', 1),
(6, 'HOME2', 1),
(8, 'STORE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pro_tbl`
--

CREATE TABLE `pro_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `image1` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image2` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image3` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pro_tbl`
--

INSERT INTO `pro_tbl` (`id`, `title`, `text`, `image1`, `image2`, `image3`, `cat_id`, `count`, `price`) VALUES
(13, 'تیشرت', '<p>this is a firs tishert</p>\r\n', '../public/uploader/1869053764.jpg', '', '', 2, 22, 220000),
(14, 'آموزش python', '<p>dthxd</p>\r\n', '../public/uploader/413421358.jpg', '', '', 2, 55, 0),
(15, 'شام خوردی', '<p>salam salam&nbsp;</p>\r\n', '../public/uploader/346054355.jpg', '', '', 1, 454, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `password`, `lastname`, `city`) VALUES
(10, 'siyamak', 'e698741dad4bba322a7cb11c5b642580cc91b07e', '', 0),
(13, 'siyamak1981', 'siyamak1981', 'siyamak1981', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu-tbl`
--
ALTER TABLE `menu-tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procat_tbl`
--
ALTER TABLE `procat_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_tbl`
--
ALTER TABLE `pro_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu-tbl`
--
ALTER TABLE `menu-tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `procat_tbl`
--
ALTER TABLE `procat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pro_tbl`
--
ALTER TABLE `pro_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
