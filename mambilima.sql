-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 09:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mambilima`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdf`
--

CREATE TABLE `cdf` (
  `id` int(255) NOT NULL,
  `fname` varchar(30) NOT NULL DEFAULT '0',
  `sname` varchar(30) NOT NULL DEFAULT '0',
  `email` varchar(30) NOT NULL DEFAULT '0',
  `g_id` int(3) NOT NULL,
  `gt_id` int(3) NOT NULL,
  `w_id` int(4) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT '0',
  `amount` varchar(250) NOT NULL DEFAULT '25,000',
  `project` varchar(250) NOT NULL DEFAULT 'unknown',
  `dst` varchar(50) NOT NULL DEFAULT 'mwense',
  `cdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cdf`
--

INSERT INTO `cdf` (`id`, `fname`, `sname`, `email`, `g_id`, `gt_id`, `w_id`, `address`, `amount`, `project`, `dst`, `cdate`) VALUES
(1, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2023-08-07 19:46:15'),
(2, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2022-08-07 19:48:35'),
(3, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2021-08-07 19:49:44'),
(4, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2021-08-07 19:50:06'),
(5, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2021-08-07 19:58:08'),
(6, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2021-08-07 19:59:26'),
(7, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2021-08-07 19:59:46'),
(8, 'Andrew ', 'Mwansa', 'corneliuskasokola101@gmail.com', 3, 3, 3, 'residential address', '25,000', 'unknown', 'mwense', '2022-08-08 00:51:29'),
(9, 'Andrew ', 'Kasokola', 'omaesoftware@gmail.com', 1, 3, 1, 'residential', '25,000', 'unknown', 'mwense', '2022-08-08 00:54:58'),
(10, 'Andrew ', 'Kasokola', 'omaesoftware@gmail.com', 1, 3, 1, 'residential', '25,000', 'unknown', 'mwense', '2020-08-08 00:56:40'),
(11, 'Andrew ', 'Kasokola', 'omaesoftware@gmail.com', 1, 3, 1, 'residential', '25,000', 'unknown', 'mwense', '2020-08-08 00:57:52'),
(12, 'Andrew ', 'Kasokola', 'omaesoftware@gmail.com', 1, 3, 1, 'residential', '25,000', 'unknown', 'mwense', '2023-08-08 00:58:13'),
(13, 'Andrew ', 'Kasokola', 'omaesoftware@gmail.com', 1, 3, 1, 'residential', '25,000', 'unknown', 'mwense', '2023-08-08 00:58:53'),
(14, 'Andrew ', 'Mwansa', 'motokazambia101@gmail.com', 2, 3, 2, 'residential address', '25,000', 'unknown', 'mwense', '2023-08-08 00:59:59'),
(15, '[object Object]', '[object Object]', '[object Object]', 1, 1, 1, '[object Object]', '25,000', 'unknown', 'mwense', '2023-08-08 01:01:53'),
(16, 'Corrnelius', 'Kasokola', 'corneliuskasokola101@gmail.com', 3, 2, 2, 'residential', '25,000', 'unknown', 'mwense', '2023-08-08 08:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fl_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `fl_name` int(255) NOT NULL DEFAULT 0,
  `flt` time NOT NULL DEFAULT current_timestamp(),
  `fld` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`fl_id`, `id`, `fl_name`, `flt`, `fld`) VALUES
(1, 5, 20201012, '19:58:08', '2023-08-07'),
(2, 5, 20201012, '19:58:08', '2023-08-07'),
(3, 5, 20201012, '19:58:09', '2023-08-07'),
(4, 5, 20201012, '19:58:09', '2023-08-07'),
(5, 6, 20201012, '19:59:26', '2023-08-07'),
(6, 6, 20201012, '19:59:26', '2023-08-07'),
(7, 6, 20201012, '19:59:26', '2023-08-07'),
(8, 6, 20201012, '19:59:26', '2023-08-07'),
(9, 7, 20201012, '19:59:46', '2023-08-07'),
(10, 7, 20201012, '19:59:46', '2023-08-07'),
(11, 7, 20201012, '19:59:46', '2023-08-07'),
(12, 7, 20201012, '19:59:46', '2023-08-07'),
(13, 16, 20201011, '08:09:48', '2023-08-08'),
(14, 16, 20201011, '08:09:48', '2023-08-08'),
(15, 16, 20201012, '08:09:48', '2023-08-08'),
(16, 16, 20201012, '08:09:48', '2023-08-08'),
(17, 16, 20201012, '08:09:48', '2023-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `g_id` int(255) NOT NULL,
  `g_name` varchar(8) NOT NULL DEFAULT '0',
  `gt` time NOT NULL DEFAULT current_timestamp(),
  `gd` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`g_id`, `g_name`, `gt`, `gd`) VALUES
(1, 'male', '17:38:55', '2023-08-07'),
(2, 'female', '17:38:55', '2023-08-07'),
(3, 'other', '17:38:55', '2023-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `grant`
--

CREATE TABLE `grant` (
  `gt_id` int(255) NOT NULL,
  `gt_name` varchar(255) NOT NULL DEFAULT '0',
  `gtt` time NOT NULL DEFAULT current_timestamp(),
  `gtd` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grant`
--

INSERT INTO `grant` (`gt_id`, `gt_name`, `gtt`, `gtd`) VALUES
(1, 'grant', '17:44:25', '2023-08-07'),
(2, 'loan', '17:44:25', '2023-08-07'),
(3, 'high school bursary', '17:44:25', '2023-08-07'),
(4, 'skill bursary', '17:44:25', '2023-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `w_id` int(255) NOT NULL,
  `w_name` varchar(255) NOT NULL DEFAULT '0',
  `wt` time NOT NULL DEFAULT current_timestamp(),
  `dd` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`w_id`, `w_name`, `wt`, `dd`) VALUES
(1, 'mambilima', '17:42:28', '2023-08-07'),
(2, 'musonda', '17:42:28', '2023-08-07'),
(3, 'munwa', '17:42:28', '2023-08-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdf`
--
ALTER TABLE `cdf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `gt_id` (`gt_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fl_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `grant`
--
ALTER TABLE `grant`
  ADD PRIMARY KEY (`gt_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cdf`
--
ALTER TABLE `cdf`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fl_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `g_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grant`
--
ALTER TABLE `grant`
  MODIFY `gt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `w_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cdf`
--
ALTER TABLE `cdf`
  ADD CONSTRAINT `cdf_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `gender` (`g_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cdf_ibfk_2` FOREIGN KEY (`gt_id`) REFERENCES `grant` (`gt_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cdf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
