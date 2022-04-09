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
-- Database: `tlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `sr.no` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `lpassword` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `payday` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`sr.no`, `fullname`, `username`, `mail`, `number`, `lpassword`, `salary`, `payday`, `created_at`) VALUES
(1, 'Rishi Patel', 'patelrishi23', 'rishi@gmail.com', '9876543210', '1234567890', 5000, '2021-04-30', '2021-04-15 13:52:49'),
(2, 'Vijay Bharwad', 'vijay23', 'vijay@gmail.com', '9898561080', '1234567890', 4000, '2021-04-28', '2021-04-22 11:49:09'),
(3, 'Zeel Thakkar', 'zeel23', 'zeel@mail.com', '9899976896', '1234567890', 8000, '2021-04-23', '2021-04-22 11:50:41'),
(5, 'Manarth Patel', 'manarth23', 'manarth@gmail.com', '9089765676', '1234567890', 3000, '2021-04-29', '2021-04-22 12:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
