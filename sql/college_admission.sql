-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 07:49 AM
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
  `college_mobile` varchar(20) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'college'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_master`
--

INSERT INTO `college_master` (`id`, `college_name`, `college_email`, `college_password`, `college_mobile`, `user_type`) VALUES
(2, 'sample college', 'samplecollegeemail@gmail.com', '123', '7896532174', 'college');

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `booked_seats` int(11) NOT NULL,
  `10avg_needed` decimal(5,2) NOT NULL,
  `12avg_needed` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`id`, `college_id`, `course_name`, `total_seats`, `booked_seats`, `10avg_needed`, `12avg_needed`) VALUES
(1, 2, 'computer science', 60, 0, '60.00', '60.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `password`, `mobile`, `user_type`) VALUES
(1, 'new stu', 'newstu@gmail.com', '111', '9595959559', 'student'),
(2, 'Aravindan Natarajan', 'aravindancadet@gmail.com', '111', '9597927183', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_master`
--
ALTER TABLE `college_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department_master`
--
ALTER TABLE `department_master`
  ADD CONSTRAINT `department_master_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college_master` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
