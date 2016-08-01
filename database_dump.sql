-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 13, 2015 at 09:46 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(5) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `day` varchar(255) NOT NULL,
  `dayindex` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `code`, `name`, `start`, `end`, `day`, `dayindex`) VALUES
(6, 'CSL356', 'Analysis of Algorithms', '09:55:00', '10:45:00', 'Monday', 1),
(7, 'CSL333', 'Operating Systems', '10:50:00', '11:40:00', 'Monday', 1),
(8, 'CSL461', 'Image Processing', '11:45:00', '12:35:00', 'Monday', 1),
(9, 'CSL333(Lab)', 'Operating Systems', '15:20:00', '18:00:00', 'Monday', 1),
(10, 'CSL461', 'Image Processing', '09:00:00', '09:50:00', 'Tuesday', 2),
(11, 'CSL356', 'Analysis of Algorithms', '10:50:00', '11:40:00', 'Tuesday', 2),
(12, 'CSL333', 'Operating Systems', '11:45:00', '12:35:00', 'Tuesday', 2),
(13, 'CSL461', 'Image Processing(Lab)', '13:30:00', '15:15:00', 'Tuesday', 2),
(14, 'CSL356(T)', 'Analysis of Algorithms', '08:00:00', '08:50:00', 'Wednesday', 3),
(15, 'CSL333', 'Operating Systems', '09:00:00', '09:50:00', 'Wednesday', 3),
(16, 'CSL461', 'Image Processing', '09:55:00', '10:45:00', 'Wednesday', 3),
(17, 'CSL356', 'Analysis of Algorithms', '11:45:00', '12:35:00', 'Wednesday', 3),
(18, 'HUL463', 'Financial Institutions', '13:30:00', '14:20:00', 'Wednesday', 3),
(19, 'CSL709', 'Network Science', '14:25:00', '15:15:00', 'Wednesday', 3),
(20, 'MAL455', 'Operations Research', '15:20:00', '16:10:00', 'Wednesday', 3),
(21, 'CYL414', 'Biochemistry', '16:15:00', '17:05:00', 'Wednesday', 3),
(22, 'HUL463(T)', 'Financial Institutions', '17:10:00', '18:00:00', 'Wednesday', 3),
(23, 'CYL414', 'Biochemistry', '13:30:00', '14:20:00', 'Thursday', 4),
(24, 'HUL463', 'Financial Institutions', '14:25:00', '15:15:00', 'Thursday', 4),
(25, 'CSL709', 'Network Science', '15:20:00', '16:10:00', 'Thursday', 4),
(26, 'MAL455', 'Operations Research', '16:15:00', '17:05:00', 'Thursday', 4),
(27, 'MAL455', 'Operations Research', '13:30:00', '14:20:00', 'Friday', 5),
(28, 'CYL414', 'Biochemistry', '14:25:00', '15:15:00', 'Friday', 5),
(29, 'CSL709', 'Network Science', '16:15:00', '17:05:00', 'Friday', 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_compact`
--

CREATE TABLE `course_compact` (
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_compact`
--

INSERT INTO `course_compact` (`code`, `name`, `id`) VALUES
('CSL333', 'Operating Systems', 1),
('CSL356', 'Analysis of Algorithms', 2),
('CSL461', 'Image Processing', 3),
('MAL455', 'Operations Research', 4),
('HUL463', 'Financial Institutions', 5),
('CYL414', 'Biochemistry', 6),
('CSL709', 'Network Science', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
  