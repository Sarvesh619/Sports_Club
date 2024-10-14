-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 11:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sarvesh', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `price` int(15) NOT NULL,
  `day` int(3) NOT NULL,
  `bookdate` date DEFAULT NULL,
  `payment_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `user`, `sname`, `cname`, `type`, `price`, `day`, `bookdate`, `payment_detail`) VALUES
(30, 'sarvesh22', 'Tennis', 'Pranav', 'Gold', 1500, 45, '2023-08-01', 'a:4:{s:11:\"card_holder\";s:7:\"sarvesh\";s:11:\"card_number\";s:10:\"4554245554\";s:10:\"cvv_number\";s:2:\"45\";s:11:\"expiry_date\";s:7:\"2023-12\";}');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `eid` int(11) DEFAULT NULL,
  `cname` varchar(30) NOT NULL,
  `des` varchar(30) DEFAULT NULL,
  `fee` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `eid`, `cname`, `des`, `fee`, `days`) VALUES
(3, 1, 'Expert Batting ', 'Batting Training, To improve b', 500, 15),
(4, 3, 'Expert Bowling', 'Improve your Bowling Skills', 600, 20),
(5, 4, 'Tennis Expertise', 'Improve your tennis Skills', 2000, 60),
(6, 1, 'Football Forward Training', 'Improve Striker Skills', 1500, 45),
(7, 3, 'Fielding Expertise', 'Improve fielding Skills ', 500, 45),
(10, 6, 'Teenis', 'fsddsf', 50000, 90);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` int(11) NOT NULL,
  `ename` varchar(40) NOT NULL,
  `role` varchar(30) NOT NULL,
  `sport` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `ename`, `role`, `sport`) VALUES
(1, 'sapna', 'abc', '3'),
(3, 'Sarvesh Salvikar', 'Coach', '15'),
(4, 'Chris Patt', 'Coach', '23'),
(5, 'Suraj linghate', 'Coach', '17'),
(6, 'Hrishi Mandule', 'Batting Coach', '19'),
(7, 'Chris Evans', 'Coach', '16');

-- --------------------------------------------------------

--
-- Table structure for table `enrollc`
--

CREATE TABLE `enrollc` (
  `eid` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `cid` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `enrolldate` date NOT NULL,
  `payment_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollc`
--

INSERT INTO `enrollc` (`eid`, `user`, `cid`, `fee`, `enrolldate`, `payment_detail`) VALUES
(1, 'sapna', 3, 500, '2023-07-05', 'a:4:{s:11:\"card_holder\";s:5:\"sapna\";s:11:\"card_number\";s:9:\"131234214\";s:10:\"cvv_number\";s:3:\"123\";s:11:\"expiry_date\";s:7:\"2023-08\";}'),
(2, 'sapna', 4, 600, '2023-07-05', 'a:4:{s:11:\"card_holder\";s:5:\"sapna\";s:11:\"card_number\";s:10:\"2142134235\";s:10:\"cvv_number\";s:3:\"345\";s:11:\"expiry_date\";s:7:\"2023-12\";}'),
(3, 'sarvesh22', 5, 2000, '2023-08-01', 'a:4:{s:11:\"card_holder\";s:7:\"sarvesh\";s:11:\"card_number\";s:9:\"256325555\";s:10:\"cvv_number\";s:2:\"45\";s:11:\"expiry_date\";s:7:\"2023-11\";}');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` int(15) NOT NULL,
  `day` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`pid`, `sid`, `type`, `price`, `day`) VALUES
(19, 15, 'Gold', 1200, 60),
(21, 15, 'Platinum', 1600, 60),
(22, 19, 'Gold', 1000, 45),
(23, 15, 'Gold', 1500, 45);

-- --------------------------------------------------------

--
-- Table structure for table `sch`
--

CREATE TABLE `sch` (
  `scid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sch`
--

INSERT INTO `sch` (`scid`, `sid`, `time`, `day`) VALUES
(14, 15, '11:00', 'Monday'),
(15, 15, '11:15', 'Tuesday'),
(16, 15, '10:14', 'Wednesday'),
(17, 15, '12:14', 'Thrusday'),
(18, 15, '11:14', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sid`, `sname`, `cname`, `img`) VALUES
(15, 'Tennis', 'Pranav', 'Tennis.jpg'),
(16, 'Wrestling', 'suraj', 'wrestling.jpg'),
(17, 'Football', 'sarvesh', 'footballpic.jpg'),
(19, 'Cricket', 'Rahul', 'cricket3.jpg'),
(23, 'baseball', 'chris', 'cricket3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tid` int(11) NOT NULL,
  `tname` varchar(35) NOT NULL,
  `sid` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tid`, `tname`, `sid`, `sdate`, `edate`) VALUES
(2, 'xyz', 15, '2023-06-29', '2023-07-01'),
(6, 'Wrestling Tournament', 16, '2023-07-07', '2023-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `tourres`
--

CREATE TABLE `tourres` (
  `toid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `matchno` int(11) NOT NULL,
  `date` date NOT NULL,
  `matchdes` text NOT NULL,
  `Result` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourres`
--

INSERT INTO `tourres` (`toid`, `tid`, `matchno`, `date`, `matchdes`, `Result`) VALUES
(2, 2, 101, '2023-06-29', 'Pune vs Gujarat', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `mobile`, `password`, `gender`) VALUES
(12, 'hrishikesh mandule', 'hrishi', 'hrishi@gmail.com', 7788965873, 'hrishi123', 'male'),
(17, 'rahul desai', 'rahul22', 'rahul@gmail.com', 9021999466, '12345', 'male'),
(19, 'sapna', 'sapna', 'sapna@gmail.com', 8999276988, 'Sms12345', 'female'),
(20, 'SarveshSalvikar', 'sarvesh22', 'sarvesh@gmail.com', 7888222598, 'Sarvesh@22', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `enrollc`
--
ALTER TABLE `enrollc`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sch`
--
ALTER TABLE `sch`
  ADD PRIMARY KEY (`scid`),
  ADD UNIQUE KEY `time` (`time`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `sname` (`sname`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tourres`
--
ALTER TABLE `tourres`
  ADD PRIMARY KEY (`toid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enrollc`
--
ALTER TABLE `enrollc`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sch`
--
ALTER TABLE `sch`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tourres`
--
ALTER TABLE `tourres`
  MODIFY `toid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
