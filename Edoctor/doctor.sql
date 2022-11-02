-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 10:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminName`, `Email`, `password`) VALUES
('b', 'b@b.com', '21ad0bd836b90d08f4cf640b4c298e7c'),
('j', 'j@j.com', '363b122c528f54df4a0446b6bab05515'),
('c', 'c@c.com', '4a8a08f09d37b73795649038408b5f33'),
('a', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661'),
('ki', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
('p', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `DoctorName` varchar(255) NOT NULL,
  `disease` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`DoctorName`, `disease`) VALUES
('a', 'nose'),
('a', 'teeth');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorName`, `Email`, `password`, `speciality`, `Address`) VALUES
('a', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', 'Nose', 'mirpur'),
('b', 'b@b.com', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `doctormessage`
--

CREATE TABLE `doctormessage` (
  `DoctorName` varchar(255) NOT NULL,
  `Message` varchar(2000) NOT NULL,
  `PatientName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctormessage`
--

INSERT INTO `doctormessage` (`DoctorName`, `Message`, `PatientName`) VALUES
('kab', 'Yes I am free', 'mimo');

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `PatientName` varchar(255) NOT NULL,
  `Message` varchar(2000) NOT NULL,
  `DoctorName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p`
--

INSERT INTO `p` (`PatientName`, `Message`, `DoctorName`) VALUES
('a', 'Are you free?', 'sn2'),
('b', 'b', 'b'),
('a', 'Are you free?', 'a'),
('kab', 'hey', 'kab'),
('kab', 'asdad', 'Samir'),
('mimo', 'Are you free?', 'kab');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientName`, `Email`, `password`, `Address`) VALUES
('a', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', ''),
('b', 'b@b.com', '92eb5ffee6ae2fec3ad71c777531578f', 'mirpur'),
('j', 'j@j.com', '363b122c528f54df4a0446b6bab05515', 'j');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
