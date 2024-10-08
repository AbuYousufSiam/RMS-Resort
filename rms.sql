-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 09:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `address`, `email`, `phone`, `password`) VALUES
(1, 'Maisha Islam', 'maisha', 'Bashabo, Dhaka.', 'maisha@gmail.com', '01712222222', 'admin'),
(2, 'Momtaj Hossain Mow', 'mow', 'Dhaka', 'momtajhossain2001@gmail.com', '01749121768', 'mow'),
(3, 'A.y. Siam', 'aysiam', 'Dhaka', 'aysiam@gmail.com', '94651364', 'aysiam');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `Review No` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Review` varchar(1000) NOT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`Review No`, `Name`, `Email`, `Review`, `Rating`) VALUES
(1, 'Naima Rahman', 'naimarahman@gmail.com', '', 5),
(2, 'Nirob Roy', 'nirobroy213@gmail.com', '', 4),
(3, 'Zarin Subah Ridi', 'zarinsubah@gmail.com', '', 5),
(4, 'Sharmin Jahan', 'sharminjahan@gmail.com', 'nice', 5),
(5, 'A B C D E', 'ayiuohskf@yahoo.com', 'Good enough', 5),
(6, 'A B C D E', 'ayiuohskf@yahoo.com', 'Good enough', 5);

-- --------------------------------------------------------

--
-- Table structure for table `employee-pass`
--

CREATE TABLE `employee-pass` (
  `Index` int(11) NOT NULL,
  `e-pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee-pass`
--

INSERT INTO `employee-pass` (`Index`, `e-pass`) VALUES
(1, '4567');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Type` varchar(100) NOT NULL,
  `Total Rooms` int(11) NOT NULL,
  `Available` int(11) NOT NULL,
  `Reserved` int(11) NOT NULL,
  `Room Capacity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Type`, `Total Rooms`, `Available`, `Reserved`, `Room Capacity`, `Rate`) VALUES
('Superior King', 18, 18, 0, 2, 1200),
('Premium King', 12, 12, 0, 2, 1400);

-- --------------------------------------------------------

--
-- Table structure for table `villas`
--

CREATE TABLE `villas` (
  `Type` varchar(100) NOT NULL,
  `Total Villas` int(11) NOT NULL,
  `Available` int(11) NOT NULL,
  `Reserved` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`Review No`);

--
-- Indexes for table `employee-pass`
--
ALTER TABLE `employee-pass`
  ADD PRIMARY KEY (`Index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `Review No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee-pass`
--
ALTER TABLE `employee-pass`
  MODIFY `Index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
