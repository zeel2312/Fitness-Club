-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:29 AM
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
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `sr.no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `date/time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`sr.no`, `name`, `mail`, `phone`, `message`, `date/time`) VALUES
(1, 'Rishi Patel', 'rishi@gmail.com', '9999561011', 'My Experience at gym is awesome. Trainer and support staff are excellent. Main Plus point is that its best fitness gym for ladies in ahmedabad. I have explore various Gym in Satellite, Ahmedabad buttis is one of the Best Gyms Near Satellite, Ahmedabad. I am happy to Join this Gym in prahladnagar, Satellite, Ahmedabad', '2021-04-15 13:28:38'),
(2, 'zeel thakkar', 'zeel@gmail.com', '9999561011', 'I had Visited Gym located at Satellite, Ahmedabad. I Have nearly got all the equipments for exercising various body muscles. Ambience too is comforting. Well equipped and well trained professional trainers. One of the best trainers in town, a person who help u to accomplish ur goals. Perfect Gym for Housewife, Ladies, Womens and Men.', '2021-04-15 13:32:28'),
(3, 'yug patel', 'yug@gmail.com', '9231231234', 'Very Rude Staff ', '2021-04-16 13:28:09'),
(4, 'Viraj Pathak', 'viraj@gmail.com', '9999561011', 'Best Gym with Great Services and Staff', '2021-04-22 11:59:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
