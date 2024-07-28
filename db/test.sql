-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 04:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `vehicle` enum('City13mt','City13pros','City15asp','Civic18','Civic18Oriel','Civic15tx','BRV15mt','BRV15s','Vezel15X','Vezel15G','Vezel15hb') NOT NULL,
  `city` enum('lhr','isb','fsb','mlt','kht','qta') NOT NULL,
  `tax` enum('y','n','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `fullname`, `emailid`, `cnic`, `contact`, `vehicle`, `city`, `tax`) VALUES
(1, 'Muhammad Rabi', 'muhammadrabi@gmail.c', '3520298823135', 2147483647, 'City13mt', 'lhr', 'n'),
(2, 'Asif Ali', 'aliasif33@gmail.com', '3530436823152', 2147483647, 'BRV15mt', 'lhr', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `fullname`, `emailid`, `description`) VALUES
(1, 'Muhammad Rabi', 'muhammadrabi@gmail.c', 'I love honda');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `sno` int(11) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_type` varchar(20) NOT NULL,
  `vehicle_variant` varchar(20) NOT NULL,
  `vehicle_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`sno`, `vehicle_name`, `vehicle_type`, `vehicle_variant`, `vehicle_price`) VALUES
(1, 'Honda City', 'Sedan', '1.3 MT', '4200000'),
(2, 'Honda City', 'Sedan', '1.3 Pros', '4450000'),
(3, 'Honda City', 'Sedan', '1.5 Aspire', '4500000'),
(4, 'Honda Civic', 'Sedan', '1.8 Pros', '6700000'),
(5, 'Honda Civic', 'Sedan', '1.8 Oriel', '7200000'),
(6, 'Honda Civic', 'Sedan', '1.5 Turbo', '9100000'),
(7, 'Honda Vezel', 'SUV', '1.5 G', '740000'),
(8, 'Honda City', 'SUV', '1.5 Hybrid', '8000000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `byear` int(11) NOT NULL,
  `bmonth` int(11) NOT NULL,
  `bdate` int(11) NOT NULL,
  `gender` enum('m','f','o','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `fname`, `lname`, `emailid`, `pass`, `byear`, `bmonth`, `bdate`, `gender`) VALUES
(1, '0', 'khan', 'mrabi@gmail.com', 'student123', 1998, 11, 23, ''),
(2, 'rabi', 'khan', 'muhammadrabi@gmail.c', 'student123', 12, 7, 2000, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
