-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyma`
--
-- --------------------------------------------------------

--
-- Table structure for table `assigning`
--

CREATE TABLE `assigning` (
  `assignDate` date DEFAULT NULL,
  `assignDescription` varchar(100) NOT NULL,
  `trainerId` int(11) DEFAULT NULL,
  `planId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    course VARCHAR(50) NOT NULL,
    contact VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memebrId` int(11) NOT NULL,
  `memebrName` varchar(60) DEFAULT NULL,
  `memebrPhone` varchar(15) DEFAULT NULL,
  `memebrEmail` varchar(60) DEFAULT NULL,
  `memebrPassword` varchar(20) DEFAULT NULL,
  `memebrDOB` date DEFAULT NULL,
  `memberStatus` tinyint(1) DEFAULT NULL,
  `ownerId` int(11) DEFAULT NULL,
  `planId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerId` int(11) NOT NULL,
  `ownerName` varchar(60) DEFAULT NULL,
  `ownerDOB` date DEFAULT NULL,
  `ownerPassword` varchar(20) DEFAULT NULL,
  `ownerEmail` varchar(60) DEFAULT NULL,
  `ownerPhone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `planId` int(11) NOT NULL,
  `planName` varchar(60) NOT NULL,
  `planDescription` varchar(500) NOT NULL,
  `planDuration` varchar(15) NOT NULL,
  `planMembers` int(11) NOT NULL,
  `planCost` varchar(10) NOT NULL,
  `planTrainers` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `plan` (`planName`,`planDescription`,`planDuration`,`planMembers`,`planCost`,`planTrainers`,`ownerId`) 
VALUES ('super','begu','1','12','1000','Abang','1')";
-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainerId` int(11) NOT NULL,
  `trainerName` varchar(60) DEFAULT NULL,
  `trainerPhone` varchar(15) DEFAULT NULL,
  `trainerEmail` varchar(60) DEFAULT NULL,
  `trainerPassword` varchar(20) DEFAULT NULL,
  `jopType` varchar(10) DEFAULT NULL,
  `trainerDOB` date DEFAULT NULL,
  `trainerSalary` varchar(5) DEFAULT NULL,
  `yearOfExperince` varchar(5) DEFAULT NULL,
  `ownerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigning`
--
ALTER TABLE `assigning`
  ADD KEY `trainerId` (`trainerId`),
  ADD KEY `planId` (`planId`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memebrId`),
  ADD KEY `ownerId` (`ownerId`),
  ADD KEY `planId` (`planId`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerId`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`planId`),
  ADD KEY `plan` (`ownerId`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainerId`),
  ADD KEY `id` (`ownerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memebrId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `planId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigning`
--
ALTER TABLE `assigning`
  ADD CONSTRAINT `assigning_ibfk_1` FOREIGN KEY (`trainerId`) REFERENCES `trainer` (`trainerId`),
  ADD CONSTRAINT `planId` FOREIGN KEY (`planId`) REFERENCES `plan` (`planId`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`planId`) REFERENCES `plan` (`planId`),
  ADD CONSTRAINT `ownerId` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `id` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
