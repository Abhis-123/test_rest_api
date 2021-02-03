-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 05:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `teacher_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `age`, `city`, `image`) VALUES
(1, 'abhishek', 25, 'Delhi', ''),
(2, 'dheeraj', 18, 'chennai', ''),
(3, 'Shahid', 24, 'chennai', ''),
(4, 'Juhi', 26, 'chennai', ''),
(5, 'kapil', 25, 'chennai', ''),
(19, 'Abhishek', 15, 'kaithal', 'https://localhost/dashboard/php-rest-api/images/beard.pngee9122ca3827d73e9612398c0d7b398b.jpg'),
(21, 'Abhis', 13, 'sdffa', 'https://localhost/dashboard/php-rest-api/images/beard.pngd8473684ce532a7d25e392c4f1a35404.jpg'),
(22, 'Abhis', 13, 'sdffa', 'https://localhost/dashboard/php-rest-api/images/dd756925e8d98b44418524083683fab8.jpg'),
(23, 'Abhis', 13, 'sdffa', 'https://localhost/dashboard/php-rest-api/images/e721f34cdb6c413f080076c5dbda63b5.jpg'),
(24, 'Abhis', 13, 'sdffa', 'https://localhost/dashboard/php-rest-api/images/f143b15e2c14118f241a30c88249c8b1.jpg'),
(25, 'Abhis', 13, 'sdffa', 'https://localhost/dashboard/php-rest-api/images/55dd6f6796c13f75c7cf37c1d39d5233.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `subjects` text NOT NULL,
  `joiningdate` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `name`, `subjects`, `joiningdate`, `image`) VALUES
(1, 'sdfg', 'd', '0000-00-00', ''),
(2, 'sdfg', 'd', '0000-00-00', 'https:localhost/dashboard/php-rest-api/images/beard.jpg'),
(3, 'sdfg', 'd', '0000-00-00', 'https:localhost/dashboard/php-rest-api/images/beard.jpg'),
(4, 'sdfg', 'd', '0000-00-00', 'https://localhost/dashboard/php-rest-api/images/beard.jpg'),
(5, 'sdfg', 'd', '0000-00-00', 'https://localhost/dashboard/php-rest-api/images/beard.jpg'),
(6, 'sdfg', 'd', '0000-00-00', 'https://localhost/dashboard/php-rest-api/images/beard.jpg'),
(7, '', 'd', '0000-00-00', 'https://localhost/dashboard/php-rest-api/images/beard.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
