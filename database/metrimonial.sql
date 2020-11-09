-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2020 at 01:43 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `fname` varchar(20) NOT NULL DEFAULT '',
  `lname` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `pass` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `cpass` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `pass`, `cpass`) VALUES
(57, 'admin', 'admin', 'admin@gmail.com', '12345', '12345'),
(59, 'naman', 'aman', 'astiksarathe575@gmail.com', '12345', '12345'),
(60, 'naman', 'aman', 'astiksarathe575@gmail.com', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `f_name` varchar(50) NOT NULL DEFAULT '',
  `occupation` varchar(100) NOT NULL DEFAULT '',
  `location` varchar(100) NOT NULL DEFAULT '',
  `education` varchar(100) NOT NULL DEFAULT '',
  `age` int NOT NULL,
  `dob` date NOT NULL,
  `martial status` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(15) NOT NULL DEFAULT '',
  `more_detail` varchar(300) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `f_name`, `occupation`, `location`, `education`, `age`, `dob`, `martial status`, `mobile`, `more_detail`) VALUES
(1, 'naman', 'naman', 'wrker', 'bhopal', 'jahil', 19, '2020-11-10', 'unmarried', '87999999165', 'sasadsasad');

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `id` int NOT NULL,
  `uname` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  `cpass` varchar(20) NOT NULL DEFAULT '',
  `f_name` varchar(50) NOT NULL DEFAULT '',
  `occupation` varchar(100) DEFAULT '',
  `location` varchar(100) NOT NULL DEFAULT '',
  `education` varchar(100) NOT NULL DEFAULT '',
  `age` int DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `mobile` varchar(15) NOT NULL DEFAULT '',
  `m_Detail` varchar(300) NOT NULL DEFAULT '',
  `gender` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `temp` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`id`, `uname`, `email`, `pass`, `cpass`, `f_name`, `occupation`, `location`, `education`, `age`, `dob`, `status`, `mobile`, `m_Detail`, `gender`, `temp`, `image`) VALUES
(2, 'naman', 'naman@gmail.com', '12345', '12345', 'Navenn Reddy', 'Social worker', 'Bhopal', 'Bca', 18, '2020-12-31', 'married', '78645312', '                                        \r\n                hello wolrd\r\n                ', 'male', '1604888882', '1604949330naman.jpeg'),
(7, 'admin', 'admin@gmail.com', 'admin', 'admin', 'naman', 'bachlors', 'bhopal', 'bca', 15, '2020-11-27', 'married', '12345', '                    lorem ipsun\r\n                ', 'male', '1604888824', '1604949628admin.webp'),
(17, 'deepika', 'depak@gmail.com', '12345', '12345', 'deepika abba', 'pata nhi', 'bhopal', 'illetrate', 18, '2020-11-28', 'married', '78645312', '                                        lorem ipsum\r\n                \r\n                ', 'female', '1604888859', '1604949911bride.jpg'),
(18, 'yogesh', 'yog@gmail.com', '12345', '12345', 'Navenn Reddys', 'Social worker', 'Bhopal', 'Bca', 18, '2020-12-01', 'married', '78645312', '                                                                                hello guys                    \r\n                \r\n                \r\n                \r\n                \r\n                ', 'male', '1604888590', '1604949958s7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
