-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 12:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `contact`, `password`) VALUES
(4, 'Singh Saurabh', 'saucom99@gmail.com', '6387454414', 'saurabh4828'),
(8, 'Gaurav', 'saurabh@gmail.com', '6387454416', 'saurabh'),
(10, 'Singh Saurabh', 'xyz@gmail.com', '6387454417', 'saurabh'),
(11, 'Singh Saurabh', 'wxyz@gmail.com', '6387454410', 'sau'),
(15, 'Singh Saurabh1', 'saucom999@gmail.com', '6387454422', 'saucom'),
(17, 'Singh Saurabh12', 'saucom9129@gmail.com', '6387454444', 'sau'),
(20, 'Singh Saurabh Radhemohan', 'talktoosaurabh@gmail.com', '9026472660', '$2y$10$nqHPLAbJD00e6HeS1gSdjOPwCtCkKzR3TX9J.SM5cy8'),
(21, 'Gaurav Singh', 'gauravsngh@gmail.com', '9695029136', '$2y$10$o8nWpgKUXFez4NQ.PM/yd.9Vo5xylK0OgBpKRDfIceO'),
(22, 'Rohan', 'rohan@gmail.com', '9695023196', '$2y$10$XRAlG8Sv2XqBC.ocBWgbDu3zO24tlVs0EmYT8fYww88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
