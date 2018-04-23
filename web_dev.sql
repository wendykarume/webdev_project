-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 09:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(60) NOT NULL,
  `courseName` varchar(60) NOT NULL,
  `unitID` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courseunit`
--

CREATE TABLE `courseunit` (
  `courseID` int(60) NOT NULL,
  `unitId` int(60) NOT NULL,
  `courseName` varchar(60) NOT NULL,
  `unitName` varchar(60) NOT NULL,
  `numberOfStudents` int(60) NOT NULL,
  `numberOfLecturers` int(60) NOT NULL,
  `courseUnitId` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyId` int(60) NOT NULL,
  `Faculty name` varchar(60) NOT NULL,
  `Courses` varchar(60) NOT NULL,
  `Number of staff` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `Description` char(1) NOT NULL,
  `Status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unitId` int(60) NOT NULL,
  `unitName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `eMail` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `gender` char(1) NOT NULL,
  `userType` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `Student` varchar(60) NOT NULL,
  `Lecturer` varchar(60) NOT NULL,
  `Administrator` varchar(60) NOT NULL,
  `Dean` varchar(60) NOT NULL,
  `Admission` varchar(60) NOT NULL,
  `Library` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `courseunit`
--
ALTER TABLE `courseunit`
  ADD PRIMARY KEY (`courseUnitId`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyId`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unitId`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courseunit`
--
ALTER TABLE `courseunit`
  MODIFY `courseUnitId` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultyId` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unitId` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
