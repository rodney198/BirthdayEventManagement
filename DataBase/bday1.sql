-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 10:38 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bday1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phone`, `date`) VALUES
('mitali', 'anish.palkar@gmail.c', 1234567890, '2018-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobno` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`name`, `address`, `country`, `gender`, `email`, `mobno`, `username`, `pass1`) VALUES
('anish', 'abc', 'India', 'other', 'anish.palkar@gmail.c', 1234567890, 'anish', 'hi'),
('anish', 'borivali', 'India', 'male', 'anish.palkar@gmail.c', 2147483647, 'anish', '11'),
('mitali', 'gorai', 'India', 'female', 'anish.palkar@gmail.c', 2147483647, 'mitali', '11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mailid` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mailid`, `username`, `contact`, `password`) VALUES
('anish.palkar@gmail.com', 'anish', 9876543210, '12345'),
('ersdfdf', 'legendkiller007', 4578962130, 'dfggsdt'),
('erty@gmail.com', 'asdf', 34567899, '12345'),
('millyfrancis19@gmail.com', 'legendki007', 9920372509, 'dfxgxdf'),
('pintor083@gmail.com', 'rod123', 9619754788, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `mailid` (`mailid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
