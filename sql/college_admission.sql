-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 08:36 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `student_mark`
--

CREATE TABLE `student_mark` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `10th_avg` decimal(5,2) NOT NULL,
  `12th_avg` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `student_mark`
--
ALTER TABLE `student_mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_mark`
--
ALTER TABLE `student_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

--
-- Constraints for table `student_mark`
--
ALTER TABLE `student_mark`
  ADD CONSTRAINT `student_mark_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
