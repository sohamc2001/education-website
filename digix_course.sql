-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 09:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digix_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdb`
--

CREATE TABLE `contactdb` (
  `slno` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdb`
--

INSERT INTO `contactdb` (`slno`, `sname`, `Phone`, `email`, `msg`) VALUES
(1, 'ss', '1212567890', 's@s.c', 'dd'),
(2, 'w', '1234567890', '2@s.s', 'ss'),
(3, 'soham', '3434343434', 's@d.d', 'helloo'),
(4, 'amir', '4567893467', 'ami@jm.nm', 'hii'),
(5, 'sayan', '4567891010', 'sa@ya.nn', 'hey there'),
(6, 'raj', '4567890777', 'r@j.h', 'ohh'),
(7, 'sharmishtha', '3434343434', 'sh@c.c', 'hii hii'),
(8, 'sas', '4567891023', 's@c.v', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `enrolling_form`
--

CREATE TABLE `enrolling_form` (
  `slno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolling_form`
--

INSERT INTO `enrolling_form` (`slno`, `name`, `phone`, `email`, `course`) VALUES
(1, 'Ss', '2345678901', 'sc@hj.gm', 'C#'),
(2, 'dbam', '2345678955', 's23@hj.gh', 'Digital Marketing'),
(3, 'ghamly', '2345678934', 's23@hj.dfg', 'Digital Marketing'),
(4, 'sayan', '4567891010', 'sa@ya.n', 'PHP & SQL'),
(5, 'amir', '4567893467', 'ami@jm.nm', 'Web Development UI'),
(6, 'sd', '3456789012', 'sd@d.f', 'C#'),
(7, 'raj', '4567890777', 'r@j.kk', 'Digital Marketing'),
(8, 'raja', '4567890789', 'r@j.kj', 'Web Development UI'),
(9, '', '', '', ''),
(10, 'shamishtha', '4567678910', 'sh@v.c', 'Digital Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tstamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slnumber` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slnumber`, `name`, `email`, `password`) VALUES
(9, 'ss cc', 's@s.d', '$2y$10$UGVmimb5IGfmugQQzp7lqeToxTIHUaVVM70wIpTV6.mSfbsem8MGS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdb`
--
ALTER TABLE `contactdb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `enrolling_form`
--
ALTER TABLE `enrolling_form`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdb`
--
ALTER TABLE `contactdb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `enrolling_form`
--
ALTER TABLE `enrolling_form`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
