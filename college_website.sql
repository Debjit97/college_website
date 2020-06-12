-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 01:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `password`) VALUES
('admin1', 'pass1');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `Enrollment_no` int(50) NOT NULL,
  `first` float DEFAULT NULL,
  `second` float DEFAULT NULL,
  `third` float DEFAULT NULL,
  `fourth` float DEFAULT NULL,
  `fifth` float DEFAULT NULL,
  `sixth` float DEFAULT NULL,
  `seventh` float DEFAULT NULL,
  `eight` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`Enrollment_no`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `seventh`, `eight`) VALUES
(1001, 8.86, 8.71, 9, 0, 0, 0, 0, 0),
(1002, 9.1, 8.71, 7.81, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `iemjee_login`
--

CREATE TABLE `iemjee_login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iemjee_login`
--

INSERT INTO `iemjee_login` (`email`, `password`) VALUES
('abc1@gmail.com', 'pass1'),
('abc2@gmail.com', 'pass2'),
('abc3@gmail.com', 'pass3');

-- --------------------------------------------------------

--
-- Table structure for table `iemjee_student_basicinfo`
--

CREATE TABLE `iemjee_student_basicinfo` (
  `First_name` varchar(60) NOT NULL,
  `Last_name` varchar(60) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` varchar(80) NOT NULL,
  `course` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `10th` int(50) NOT NULL,
  `12th` int(50) NOT NULL,
  `father` varchar(100) NOT NULL,
  `city` varchar(80) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iemjee_student_basicinfo`
--

INSERT INTO `iemjee_student_basicinfo` (`First_name`, `Last_name`, `photo`, `emailid`, `phone`, `dob`, `course`, `stream`, `10th`, `12th`, `father`, `city`, `address`, `pin`, `password`) VALUES
('DEBJIT', 'CHAKRABORTY', 'uploads/2075.jpg', 'abc1@gmail.com', '1234567890', '22-12-1997', 'BCA', 'BACHELOR OF COMPUTER APPLICATION', 87, 76, 'AJIT KUMAR CHAKRABORTY', 'KOLKATA', 'ABC ROAD,KOLKATA', '700002', 'pass1'),
('DEBAJYOTI', 'DE', 'uploads/logo.jpg', 'abc2@gmail.com', '1234567890', '15-09-1996', 'BTECH', 'ECE', 90, 85, 'TUFAN DE', 'KOLKATA', 'ABC ROAD,KOLKATA', '700001', 'pass2'),
('ADITYA', 'MITRA', 'uploads/profilepic.jpg', 'abc3@gmail.com', '1236547890', '30-04-1997', 'BTECH', 'ECE', 80, 79, 'ABC MITRA', 'SALTLAKE', 'ABC ROAD,KOLKATA', '700008', 'pass3');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`email`, `subject`, `query`) VALUES
('abc1@gmail.com', 'xyz', ''),
('abc2@gmail.com', 'xyz', 'abc'),
('abc3@gmail.com', 'xyz', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `student_basicinfo`
--

CREATE TABLE `student_basicinfo` (
  `Enrollment_no` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `photo` varchar(80) NOT NULL,
  `course` varchar(20) NOT NULL,
  `startingdate` year(4) NOT NULL,
  `endingdate` year(4) NOT NULL,
  `mailid` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `stream` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_basicinfo`
--

INSERT INTO `student_basicinfo` (`Enrollment_no`, `first_name`, `last_name`, `photo`, `course`, `startingdate`, `endingdate`, `mailid`, `phoneno`, `city`, `address`, `stream`) VALUES
(1001, 'Debjit', 'Chakraborty', 'uploads/10457716_1713252145567933_3040843970034948098_o.jpg', 'BCA', 2015, 2016, 'something@gmail.com', '1234567890', 'Kolkata', 'Adc road,kolkata-700001', 'Bachelor Of Computer Application'),
(1002, 'DEBAJYOTI', 'DE', 'uploads/images.png', 'BTECH', 2015, 2016, 'abc2@gmail.com', '111111111', 'KOLKATA', 'ABC ROAD,KOKATA-700004', 'ECE'),
(1003, 'ADITYA', 'MITRA', 'uploads/images.png', 'BTECH', 2015, 2018, 'something1@gmail.com', '1236547890', 'KOLKATA', 'ABC ROAD,KOKATA-700004', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Enrollment_no` int(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Enrollment_no`, `password`) VALUES
(1001, 'pass1'),
(1002, 'PASS2'),
(1003, 'pass3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `iemjee_login`
--
ALTER TABLE `iemjee_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `iemjee_student_basicinfo`
--
ALTER TABLE `iemjee_student_basicinfo`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student_basicinfo`
--
ALTER TABLE `student_basicinfo`
  ADD PRIMARY KEY (`Enrollment_no`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Enrollment_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
