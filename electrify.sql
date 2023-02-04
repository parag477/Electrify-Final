-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 01:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrify`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `ctime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `msg`, `ctime`) VALUES
(1, 'Niharika Gupta', 'niharikagupta1094@gm', 'lorem ipsum', '2023-02-03 00:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `sno` int(11) DEFAULT NULL,
  `total_earning` int(10) NOT NULL,
  `total_booking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `ctime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `host_details`
--

CREATE TABLE `host_details` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `acc_no` int(20) NOT NULL,
  `ifsc` varchar(15) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `cur_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `host_details`
--

INSERT INTO `host_details` (`sno`, `name`, `username`, `email`, `phone`, `address`, `acc_no`, `ifsc`, `holder_name`, `cur_time`) VALUES
(1, 'Parag Agrawal', '', '', '', 'Rajendra Nagar', 2434, 'dxv36543', 'Parag ', '2023-01-30 02:37:48'),
(2, 'Shivam', '', 'shivam@patidar.com', '1234567890', 'Pta Nhi', 12433252, 'dxv36543', 'Shivam', '2023-01-30 02:39:52'),
(3, 'Parag Agrawal', '', 'paragagrawal477@gmai', '07489918182', 'Rajendra Nagar', 1234, 'jngf', 'gfh', '2023-01-30 02:43:39'),
(4, 'Parag Agrawal', '', 'paragagrawal577@gmai', '07489918182', 'Gandhi Nagar34', 22, '435', '435', '2023-01-30 02:49:53'),
(5, 'Niharika Gupta', '', 'niharikagupta1094@gm', '+975 9752500460', 'Radhe Shree Girls Hostel', 1234, 'sfv', 'cvf', '2023-02-04 12:37:19'),
(6, 'Niharika Gupta', '', 'niharikagupta1094@gm', '+975 9752500460', 'Radhe Shree Girls Hostel', 1234, 'sfv', 'cvf', '2023-02-04 12:39:12'),
(7, 'Niharika Gupta', '', 'niharikagupta1094@gm', '+975 9752500460', 'Radhe Shree Girls Hostel', 123, 'bn', 'jkb', '2023-02-04 15:51:59'),
(8, 'Niharika', '', 'niharikagupta1094@gm', '+17898791577', '11/10 u block gurgaon', 11, '234', 'dfv', '2023-02-04 15:55:32'),
(9, 'Niharika', 'admi1n', 'niharikagupta1094@gm', '+17898791577', '11/10 u block gurgaon', 12, 'dv', 'sdc', '2023-02-04 15:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cur_time` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `cur_time`) VALUES
(1, 'admin', '$2y$10$I87V/8yJq1zxSnzs6JJErOFEvDkKQ1VIfwe08W1fQe64oIh8Sdadu', 2147483647),
(2, '', '$2y$10$v7qBmDFUd1.H4kv5RKAPXOJrzq0UI4bOGXk8RudxN58VwbQx0UZhO', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `host_details`
--
ALTER TABLE `host_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `host_details`
--
ALTER TABLE `host_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
