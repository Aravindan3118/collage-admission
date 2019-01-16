-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 08:34 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_master`
--

CREATE TABLE `college_master` (
  `id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_email` varchar(255) NOT NULL,
  `college_password` varchar(255) NOT NULL,
  `college_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_master`
--

INSERT INTO `college_master` (`id`, `college_name`, `college_email`, `college_password`, `college_mobile`) VALUES
(2, 'sample college', 'samplecollegeemail@gmail.com', '123', '7896532174');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `10_avg` decimal(5,2) NOT NULL,
  `12_avg` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`id`, `student_name`, `email`, `password`, `mobile`, `dob`, `10_avg`, `12_avg`) VALUES
(5, 'Aravindan Natarajan', 'aravindancadet@gmail.com', '111', '9597927183', '2019-01-11', '77.00', '87.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_master`
--
ALTER TABLE `college_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_master`
--
ALTER TABLE `college_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
