-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 09:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_sem4`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` char(25) NOT NULL,
  `email` char(30) NOT NULL,
  `dob` date NOT NULL,
  `clg` text NOT NULL,
  `sem` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `dept` text NOT NULL,
  `exp` char(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `dob`, `clg`, `sem`, `batch`, `dept`, `exp`, `comment`) VALUES
(10041, 'Samruddhi', 'sam@gmail.com', '2021-04-06', 'Faculty of Technology, Dharmsinh Desai University, Nadiad', 3, 2, 'Computer Engineering', 'Excellent', 'Over all a good experience'),
(10042, 'yesha', 'yesha@gmail.com', '2021-04-07', 'MSU', 6, 3, 'Civil Engineering', 'Good', 'Can work on faculty'),
(10043, 'Dhanraj', 'dhanraj@gmail.com', '2021-04-13', 'GTU', 5, 3, 'IT Engineering', 'Good', 'Can work on labs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10044;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
