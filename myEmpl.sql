-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2022 at 01:33 PM
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
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `course_name` varchar(255) NOT NULL,
  `contract_location` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `course_specialization` varchar(255) DEFAULT NULL,
  `course_plan` varchar(255) DEFAULT NULL,
  `quarter` varchar(255) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `no_of_days` varchar(100) DEFAULT NULL,
  `hours_per_day` varchar(100) DEFAULT NULL,
  `total_hours` varchar(100) DEFAULT NULL,
  `instructor_1` varchar(50) DEFAULT NULL,
  `hours_instructor_1` varchar(100) DEFAULT NULL,
  `instructor_2` varchar(50) DEFAULT NULL,
  `hours_instructor_2` varchar(100) DEFAULT NULL,
  `instructor_3` varchar(100) DEFAULT NULL,
  `hours_instructor_3` varchar(100) DEFAULT NULL,
  `instructor_4` varchar(100) DEFAULT NULL,
  `hours_instructor_4` varchar(100) DEFAULT NULL,
  `instructor_5` varchar(100) DEFAULT NULL,
  `hours_instructor_5` varchar(100) DEFAULT NULL,
  `instructor_6` varchar(100) DEFAULT NULL,
  `hours_instructor_6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `rank` varchar(25) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `general_management` varchar(125) DEFAULT NULL,
  `sub_management` varchar(125) DEFAULT NULL,
  `classification` varchar(125) DEFAULT NULL,
  `location_of_work` varchar(125) DEFAULT NULL,
  `nationality` varchar(25) DEFAULT NULL,
  `section` varchar(125) DEFAULT NULL,
  `category` varchar(125) DEFAULT NULL,
  `from_needs_list` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Enrolled`
--

CREATE TABLE `Enrolled` (
  `employee_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `exam_result` varchar(255) DEFAULT NULL,
  `pass_or_fail` varchar(10) DEFAULT NULL,
  `fail_reason` varchar(100) DEFAULT NULL,
  `notes` varchar(250) DEFAULT NULL,
  `date_of_resit` date DEFAULT NULL,
  `resit_result` varchar(25) DEFAULT NULL,
  `pass_fail_resit` varchar(25) DEFAULT NULL,
  `instructor_grade` varchar(100) DEFAULT NULL,
  `course_grade` varchar(100) DEFAULT NULL,
  `instructor_self_grade` varchar(100) DEFAULT NULL,
  `direct_manager_grade` varchar(100) DEFAULT NULL,
  `work_test` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Imported`
--

CREATE TABLE `Imported` (
  `rank` varchar(100) DEFAULT NULL,
  `employee_ID` int(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `general_management` varchar(100) DEFAULT NULL,
  `sub_management` varchar(100) DEFAULT NULL,
  `location_of_work` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `from_needs_list` varchar(100) DEFAULT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `contract_location` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `course_specialization` varchar(100) DEFAULT NULL,
  `course_plan` varchar(100) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `hourse_per_day` varchar(100) DEFAULT NULL,
  `total_hours` varchar(100) DEFAULT NULL,
  `instructor_1` varchar(100) DEFAULT NULL,
  `hours_instructor1` varchar(100) DEFAULT NULL,
  `instructor_2` varchar(100) DEFAULT NULL,
  `hours_instructor2` varchar(100) DEFAULT NULL,
  `exam_result` varchar(100) DEFAULT NULL,
  `pass_fail` varchar(100) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `date_of_resit` date DEFAULT NULL,
  `resit_result` varchar(100) DEFAULT NULL,
  `pass_fail_resit` varchar(100) DEFAULT NULL,
  `instructor_grade` varchar(100) DEFAULT NULL,
  `course_grade` varchar(100) DEFAULT NULL,
  `instructor_self_grade` varchar(100) DEFAULT NULL,
  `direct_manager_grade` varchar(100) DEFAULT NULL,
  `work_test` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_set` varchar(10) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_set`, `lang_id`) VALUES
('arabic', 1);

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
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD UNIQUE KEY `course_name` (`course_name`),
  ADD UNIQUE KEY `course_name_2` (`course_name`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `Enrolled`
--
ALTER TABLE `Enrolled`
  ADD PRIMARY KEY (`employee_id`,`course_name`) USING BTREE,
  ADD KEY `Enrolled_ibfk_2` (`course_name`,`employee_id`) USING BTREE;

--
-- Indexes for table `Imported`
--
ALTER TABLE `Imported`
  ADD UNIQUE KEY `employee_ID` (`employee_ID`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Enrolled`
--
ALTER TABLE `Enrolled`
  ADD CONSTRAINT `Enrolled_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `Employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enrolled_ibfk_2` FOREIGN KEY (`course_name`) REFERENCES `Course` (`course_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
