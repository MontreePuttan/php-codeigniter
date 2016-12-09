-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 05:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE `tb_member` (
  `id` int(10) NOT NULL,
  `member_name` varchar(80) NOT NULL,
  `member_tel` varchar(80) NOT NULL,
  `member_address` text NOT NULL,
  `member_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `member_name`, `member_tel`, `member_address`, `member_status`) VALUES
(12, '11', '11', '11', 1),
(13, '22', '22', '22', 1),
(14, '33', '33', '33', 1),
(15, '44', '44', '44', 1),
(16, '55', '55', '55', 1),
(17, '66', '66', '66', 1),
(18, '77', '77', '77', 1),
(19, '88', '88', '88', 1),
(20, '99', '99', '99', 1),
(21, '10', '10', '10', 1),
(22, '11', '11', '11', 1),
(23, '12', '12', '12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
