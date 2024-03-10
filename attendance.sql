-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 02:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Abdulla', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `student_register_no` varchar(30) NOT NULL,
  `attendance` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `day_order` varchar(30) NOT NULL,
  `hour` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `class_id`, `student_register_no`, `attendance`, `date`, `day_order`, `hour`) VALUES
(1, 9, 'P22270801', 0, '2024-02-03', 'I', '(10:00-10:55)'),
(2, 9, 'P22270803', 0, '2024-02-03', 'I', '(10:00-10:55)'),
(3, 9, 'P22270805', 0, '2024-02-03', 'I', '(10:00-10:55)'),
(4, 9, 'P22270807', 0, '2024-02-03', 'I', '(10:00-10:55)'),
(5, 9, 'P22270807', 0, '2024-02-03', 'I', '(10:00-10:55)'),
(6, 9, 'P22270811', 0, '2024-02-03', 'I', '(10:00-10:55)');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_register`
--

CREATE TABLE `attendance_register` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `open_attendance` int(11) NOT NULL,
  `close_attendance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_register`
--

INSERT INTO `attendance_register` (`id`, `date`, `month`, `year`, `staff_id`, `class_id`, `open_attendance`, `close_attendance`) VALUES
(1, 2, 2, 2024, 18, 9, 1, 1),
(2, 2, 2, 2024, 18, 13, 1, 1),
(3, 2, 2, 2024, 18, 14, 1, 1),
(4, 2, 2, 2024, 18, 12, 1, 1),
(5, 2, 2, 2024, 18, 11, 1, 1),
(6, 2, 2, 2024, 18, 9, 1, 0),
(7, 3, 2, 2024, 18, 9, 1, 1),
(8, 3, 2, 2024, 18, 9, 1, 1),
(9, 3, 2, 2024, 18, 9, 1, 1),
(10, 3, 2, 2024, 18, 11, 1, 1),
(11, 3, 2, 2024, 18, 11, 1, 0),
(12, 3, 2, 2024, 18, 9, 1, 0),
(13, 3, 2, 2024, 18, 13, 1, 0),
(14, 3, 2, 2024, 18, 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `incharge_staff_id` int(30) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `is_available` tinyint(1) DEFAULT NULL,
  `no_of_students` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `incharge_staff_id`, `department_name`, `semester`, `academic_year`, `is_available`, `no_of_students`) VALUES
(9, 'II MSC COMPUTER SCIENCE', 18, 'CS', 'IV', '2023-2024', 1, 0),
(11, 'I MSC COMPUTER SCIENCE', 18, 'CS', 'II', '2023-2024', 1, 0),
(12, 'III BSC COMPUTER SCIENCE T/M', 18, 'CS', 'VI', '2023-2024', 0, 0),
(13, 'III BSC COMPUTER SCIENCE SHIFT I', 18, 'CS', 'I', '2023-2024', 1, 0),
(14, 'III BSC COMPUTER SCIENCE SHIFT II', 18, 'CS', 'VI', '2023-2024', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `alias`, `email`, `password`) VALUES
(16, 'M.GNANASEGARAN', 'M.G', 'MG@gmail.com', '123'),
(18, 'R.JAYABHARATHI', 'R.J', 'RJ@gmail.com', '123'),
(19, 'D.JAYADHURGA', 'D.J', 'DJ@gmail.com', '123'),
(20, 'G.KAVITHA', 'G.K', 'GK@gmail.com', '123'),
(21, 'B.DONKEY', 'B.D', 'BD@gmail.com', '123'),
(22, 'G.VATHANA', 'G.A', 'GA@gmail.com', '123'),
(28, 'DEVI', 'D', 'D@gmail.com', '123'),
(29, 'T.BHUVENESHWARI', 'TB', 'TB@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE `staff_attendance` (
  `id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `attendance_staff_id` int(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `day_order` varchar(30) NOT NULL,
  `hour` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`id`, `class_id`, `attendance_staff_id`, `subject`, `topic`, `date`, `day_order`, `hour`) VALUES
(1, 9, 18, 'Test', 'Test', '2024-02-03', 'I', '(10:00-10:55)');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll_no` int(40) DEFAULT NULL,
  `register_no` varchar(50) NOT NULL,
  `class_id` int(30) NOT NULL,
  `staff_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll_no`, `register_no`, `class_id`, `staff_id`) VALUES
(50, 'AARTHI.K', 222401, 'P22270801', 9, 18),
(51, 'ABIMANYU.J', 222402, 'P22270802', 9, 18),
(52, 'ABINAYA.M', 222403, 'P22270803', 9, 18),
(53, 'ABIRAMI.R', 222404, 'P22270804', 9, 18),
(54, 'AISHWARYA.M', 222405, 'P22270805', 9, 18),
(55, 'AKALYA.M', 222406, 'P22270806', 9, 18),
(56, 'AKILA.V', 222407, 'P22270807', 9, 18),
(57, 'ANUSYA.S', 222408, 'P22270808', 9, 18),
(58, 'BHUVANESHWARI.P', 222410, 'P22270810', 9, 18),
(59, 'DHARANI.R', 222411, 'P22270811', 9, 18),
(60, 'DHIVYA.V', 222412, 'P22270812', 9, 18),
(61, 'JAYASEELAN.P', 222413, 'P22270813', 9, 18),
(62, 'KARTHIKA.P', 222414, 'P22270814', 9, 18),
(63, 'LAVANYA.M', 222415, 'P22270815', 9, 18),
(64, 'MANIKADAN.M', 222416, 'P22270816', 9, 18),
(65, 'MATHAVANRAJ.S', 222417, 'P22270817', 9, 18),
(66, 'MEENATCHI.T', 222418, 'P22270818', 9, 18),
(67, 'MOHAMED ABDULLA.J', 222419, 'P22270819', 9, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_register`
--
ALTER TABLE `attendance_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incharge_staff_id` (`incharge_staff_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email` (`email`),
  ADD UNIQUE KEY `staff_alias` (`alias`);

--
-- Indexes for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance_register`
--
ALTER TABLE `attendance_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
