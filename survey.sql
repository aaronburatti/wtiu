-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 06:34 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(4) NOT NULL,
  `money` int(2) NOT NULL,
  `crumbs` int(2) NOT NULL,
  `pens` int(2) NOT NULL,
  `dust` int(2) NOT NULL,
  `nostalgia` int(2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `money`, `crumbs`, `pens`, `dust`, `nostalgia`, `date`) VALUES
(1, 12, 34, 34, 65, 44, '0000-00-00 00:00:00'),
(2, 11, 21, 32, 1, 42, '0000-00-00 00:00:00'),
(3, 21, 2, 32, 65, 1, '2018-01-25 17:43:05'),
(4, 22, 22, 22, 22, 22, '2018-01-25 17:43:15'),
(5, 22, 22, 22, 22, 22, '2018-01-25 17:44:55'),
(6, 22, 22, 22, 22, 22, '2018-01-25 17:48:28'),
(7, 22, 22, 22, 22, 22, '2018-01-25 17:49:09'),
(8, 34, 0, 0, 0, 0, '2018-01-25 17:54:49'),
(9, 33, 43, 21, 21, 3, '2018-01-25 17:57:58'),
(10, 33, 43, 21, 21, 3, '2018-01-25 17:58:36'),
(11, 33, 43, 21, 21, 3, '2018-01-25 17:59:01'),
(12, 33, 43, 21, 21, 3, '2018-01-25 17:59:09'),
(13, 33, 43, 21, 21, 3, '2018-01-25 17:59:46'),
(14, 33, 43, 21, 21, 3, '2018-01-25 18:00:35'),
(15, 33, 43, 21, 21, 3, '2018-01-25 18:01:48'),
(16, 33, 43, 21, 21, 3, '2018-01-25 18:01:55'),
(17, 33, 43, 21, 21, 3, '2018-01-25 18:02:02'),
(18, 33, 43, 21, 21, 3, '2018-01-25 18:02:13'),
(19, 33, 43, 21, 21, 3, '2018-01-25 18:02:39'),
(20, 33, 43, 21, 21, 3, '2018-01-25 18:02:49'),
(21, 33, 43, 21, 21, 3, '2018-01-25 18:03:02'),
(22, 33, 43, 21, 21, 3, '2018-01-25 18:03:26'),
(23, 33, 43, 21, 21, 3, '2018-01-25 18:03:58'),
(24, 33, 43, 21, 21, 3, '2018-01-25 18:11:23'),
(25, 33, 43, 21, 21, 3, '2018-01-25 18:11:43'),
(26, 33, 43, 21, 21, 3, '2018-01-25 18:11:52'),
(27, 33, 43, 21, 21, 3, '2018-01-25 18:14:42'),
(28, 33, 43, 21, 21, 3, '2018-01-25 18:15:02'),
(29, 33, 43, 21, 21, 3, '2018-01-25 18:15:18'),
(30, 33, 43, 21, 21, 3, '2018-01-25 18:15:47'),
(31, 33, 43, 21, 21, 3, '2018-01-25 18:16:22'),
(32, 33, 43, 21, 21, 3, '2018-01-25 18:17:49'),
(33, 33, 43, 21, 21, 3, '2018-01-25 18:18:16'),
(34, 6, 5, -4, 3, 3, '2018-01-25 18:18:34'),
(35, 22, 21, 20, 19, 18, '2018-01-25 18:18:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
