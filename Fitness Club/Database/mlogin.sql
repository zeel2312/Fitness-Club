-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `sr.no` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `lpassword` varchar(20) NOT NULL,
  `payment` int(11) NOT NULL,
  `validity` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sr.no`, `fullname`, `username`, `mail`, `number`, `lpassword`, `payment`, `validity`, `created_at`) VALUES
(1, 'Yug Patel', 'yug23', 'yug@gmail.com', '9898561080', '1234567890', 4000, '2021-04-30', '2021-04-22 11:51:58'),
(2, 'Viraj Pathak', 'viraj23', 'viraj@gmail.com', '7043232309', '1234567890', 8000, '2021-04-30', '2021-04-22 11:54:09'),
(3, 'Arjav Gandhi', 'gandhi23', 'gandhi@gmail.com', '9898567050', '1234567890', 2000, '2021-05-11', '2021-04-22 11:55:36'),
(4, 'Kirtan Gohil', 'kirtan23', 'kirtan@gmail.com', '9876543210', '1234567890', 5000, '2021-04-27', '2021-04-22 12:11:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
