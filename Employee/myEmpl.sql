-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2022 at 06:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myEmpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(25) NOT NULL,
  `course_number` int(10) NOT NULL,
  `Course_name` varchar(25) NOT NULL,
  `plan` varchar(25) NOT NULL,
  `contract_location` varchar(25) NOT NULL,
  `course_specialization` varchar(25) NOT NULL,
  `course_plan` varchar(25) NOT NULL,
  `days` int(10) NOT NULL,
  `hours_per_days` int(10) NOT NULL,
  `total_hours` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custId` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custId`, `fname`, `lname`, `email`, `created`) VALUES
(1, 'Tiago', 'Sam', 'dornelas@studio8k.com', NULL),
(2, 'Anil', 'Kumar', 'ca.anil.kumar@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(25) NOT NULL,
  `rank` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `general_management` varchar(25) NOT NULL,
  `sub_management` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `special_heads` varchar(25) NOT NULL,
  `phone_number` int(25) NOT NULL,
  `location_of_work` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `rank`, `name`, `general_management`, `sub_management`, `category`, `section`, `special_heads`, `phone_number`, `location_of_work`) VALUES
(1, '2', 'testname', 'test_gen_mgmt', 'test_sub_mgmt', 'test_categoty', 'test_section', 'test_heads', 222, 'test_location'),
(2, '2', 'testname2', 'test_gen_mgmt2', 'test_sub_mgmt2', 'test_categoty2', 'test_section2', 'test_heads2', 222, 'test_location2');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_in_course`
--

CREATE TABLE `enrolled_in_course` (
  `employee_id` int(25) NOT NULL,
  `course_id` int(25) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `exam_result` varchar(10) NOT NULL,
  `exam_grade` varchar(10) NOT NULL,
  `notes` varchar(20) NOT NULL,
  `resit_date` varchar(10) NOT NULL,
  `resit_result` varchar(10) NOT NULL,
  `resit_grade` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `quarter` varchar(10) NOT NULL,
  `attendance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`) VALUES
('aa', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `enrolled_in_course`
--
ALTER TABLE `enrolled_in_course`
  ADD KEY `employee_id` (`employee_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrolled_in_course`
--
ALTER TABLE `enrolled_in_course`
  MODIFY `employee_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolled_in_course`
--
ALTER TABLE `enrolled_in_course`
  ADD CONSTRAINT `enrolled_in_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `enrolled_in_course_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
