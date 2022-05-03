-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 07:15 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'cd5ea73cd58f827fa78eef7197b8ee606c99b2e6');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `booking_id` int(11) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `booked_by` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `age` varchar(250) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `train_id` int(200) NOT NULL,
  `origin` text NOT NULL,
  `destination` text NOT NULL,
  `date` date NOT NULL,
  `arrivaltime` time NOT NULL,
  `departuretime` time NOT NULL,
  `class` set('General','Sleeper','AC') NOT NULL,
  `price` int(11) NOT NULL,
  `pass_no` int(1) NOT NULL,
  `tamount` int(11) NOT NULL,
  `cardno` int(16) NOT NULL,
  `noc` varchar(255) NOT NULL,
  `month` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `year` set('2020','2021','2022','2023','2024','2025','2026','2027') NOT NULL,
  `cardtype` set('Visa','MasterCard','Rupay','Maestro') NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`booking_id`, `passenger_id`, `booked_by`, `pname`, `age`, `gender`, `train_id`, `origin`, `destination`, `date`, `arrivaltime`, `departuretime`, `class`, `price`, `pass_no`, `tamount`, `cardno`, `noc`, `month`, `year`, `cardtype`, `cvv`) VALUES
(26213001, 695700, 'Suraj V Shetty', 'Suraj , Ambarish , Sunil , Vivek , Manoj', '21 , 21 , 21 , 21 , 21', 'Male , Male , Male , Male , Male', 212255, 'Hubli', 'Dudhsagar', '2020-07-06', '13:00:00', '11:00:00', 'AC', 100, 5, 500, 2147483647, 'Suraj Shetty', 'October', '2027', 'Rupay', 222);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `dest_id` int(10) UNSIGNED NOT NULL,
  `destination` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`dest_id`, `destination`) VALUES
(1, 'Sirsi'),
(2, 'Banglore'),
(3, 'Bagalkot'),
(4, 'Belgaum'),
(5, 'Ballari'),
(6, 'Bidar'),
(7, 'Bijapur'),
(8, 'Chamarajanagara'),
(9, 'Chikballapur'),
(10, 'Chikkamagaluru'),
(11, 'Chitradurga'),
(12, 'DakshinaKannada'),
(13, 'Davanagere'),
(14, 'Dharwad'),
(15, 'Gulbarga'),
(16, 'Hasan'),
(17, 'Haveri'),
(18, 'Kodagu'),
(19, 'Kolar'),
(20, 'Koppal'),
(21, 'Mandya'),
(22, 'Mysore'),
(23, 'Raichur'),
(24, 'Ramanagara'),
(25, 'Shivamogga'),
(26, 'Tumkur'),
(27, 'Udupi'),
(28, 'Uttara Kannada'),
(29, 'Yadgir'),
(38, 'Dudhsagar'),
(39, 'Hubli'),
(40, 'Manglore');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(300) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `mobile`, `email`, `feedback`) VALUES
(2, 'Rajunaik', 9876897234, 'raju@gmail.com', 'Journey was satisfying .thank you .'),
(3, 'sanjay kumar', 6654987291, 'sanjaykk@gmail.com', 'Very nice experience.thumbs up'),
(4, 'Sakshi', 8971232164, 'sakshisingh@gmail.com', 'Easy to book here.User friendy.'),
(5, 'Ritika', 7891629531, 'ritika@hotmail.com', 'Very nice Thank you.'),
(6, 'Steve', 7766981251, 'steeeve@yahoo.com', 'Need to improove .'),
(7, 'Nachiketh', 6512348123, 'nachi@zoho.com', 'Very happy.Thank you');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `origin_id` int(10) UNSIGNED NOT NULL,
  `origin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`origin_id`, `origin`) VALUES
(1, 'Manglore'),
(3, 'Karwar'),
(4, 'Mysore'),
(5, 'Hubli'),
(6, 'Dharwad'),
(7, 'Belgaum'),
(8, 'Bidar'),
(9, 'Banglore'),
(10, 'Bagalkot'),
(11, 'Ballari'),
(12, 'Chamrajnagar'),
(13, 'Chitradurga'),
(14, 'DakshinaKannada'),
(15, 'Davangere'),
(16, 'Gulbarga'),
(17, 'Kodagu'),
(18, 'Kolar'),
(19, 'Mandya'),
(20, 'Raichur'),
(21, 'Ramanagara'),
(24, 'Shivamogga'),
(25, 'Tumkur'),
(26, 'Udupi'),
(27, 'Yadgir'),
(28, 'Chikballapur'),
(29, 'Chikkamagaluru'),
(30, 'Sirsi'),
(58, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pword` varchar(300) NOT NULL,
  `confirmpword` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `fname`, `uname`, `dob`, `gender`, `mobile`, `city`, `email`, `pword`, `confirmpword`) VALUES
(695700, 'Suraj V Shetty', 'suraj1234', '1999-05-21', 'Male', 9449304891, 'Sirsi', 'suraj57@yahoo.com', '8fd5cdbf79cb654755d142f3a35b8305376a34b9', '8fd5cdbf79cb654755d142f3a35b8305376a34b9'),
(695701, 'vivek krishna', 'vivek', '1999-11-17', 'Male', 9880234685, 'mundgod', 'vivek@gmail.com', '324cd0340dfd11dc6209841360d8bbadbcff73fc', '324cd0340dfd11dc6209841360d8bbadbcff73fc');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `train_id` int(200) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `arrivaltime` time NOT NULL,
  `departuretime` time NOT NULL,
  `class` set('General','Sleeper','AC') NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`train_id`, `origin`, `destination`, `date`, `arrivaltime`, `departuretime`, `class`, `price`) VALUES
(212200, 'Manglore', 'Sirsi', '2020-07-06', '06:00:00', '08:00:00', 'General', 150),
(212201, 'Manglore', 'Sirsi', '2020-07-06', '11:30:00', '13:00:00', 'Sleeper', 250),
(212202, 'Manglore', 'Sirsi', '2020-07-06', '09:30:00', '07:00:00', 'AC', 400),
(212203, 'Manglore', 'Banglore', '2020-07-06', '11:30:00', '17:00:00', 'General', 100),
(212204, 'Manglore', 'Banglore', '2020-07-06', '12:30:00', '18:00:00', 'Sleeper', 150),
(212205, 'Manglore', 'Banglore', '2020-07-06', '13:00:00', '16:30:00', 'Sleeper', 250),
(212206, 'Manglore', 'Bagalkot', '2020-07-06', '23:30:00', '08:30:00', 'General', 300),
(212207, 'Manglore', 'Bagalkot', '2020-07-06', '23:15:00', '08:00:00', 'Sleeper', 380),
(212208, 'Manglore', 'Bagalkot', '2020-07-06', '22:45:00', '07:30:00', 'AC', 450),
(212209, 'Manglore', 'Belgaum', '2020-07-06', '22:45:00', '16:30:00', 'General', 300),
(212210, 'Manglore', 'Belgaum', '2020-07-06', '23:45:00', '17:30:00', 'Sleeper', 370),
(212211, 'Manglore', 'Belgaum', '2020-07-06', '15:30:00', '08:30:00', 'AC', 440),
(212212, 'Manglore', 'Ballari', '2020-07-06', '19:00:00', '09:00:00', 'General', 325),
(212213, 'Manglore', 'Ballari', '2020-07-06', '18:00:00', '06:00:00', 'General', 325),
(212214, 'Manglore', 'Bidar', '2020-07-06', '23:45:00', '05:00:00', 'Sleeper', 600),
(212215, 'Manglore', 'Bijapur', '2020-07-06', '20:30:00', '10:00:00', 'AC', 420),
(212216, 'Manglore', 'Chamarajanagara', '2020-07-06', '16:30:00', '07:45:00', 'General', 250),
(212217, 'Manglore', 'Chamarajanagara', '2020-07-06', '15:15:00', '14:00:00', 'Sleeper', 330),
(212218, 'Manglore', 'Chikballapur', '2020-07-06', '10:15:00', '04:30:00', 'Sleeper', 365),
(212219, 'Manglore', 'Chikkamagaluru', '2020-07-06', '06:15:00', '11:30:00', 'AC', 170),
(212221, 'Manglore', 'Chikkamagaluru', '2020-07-06', '05:30:00', '10:30:00', 'AC', 180),
(212222, 'Manglore', 'Chitradurga', '2020-07-06', '14:30:00', '21:40:00', 'Sleeper', 245),
(212223, 'Manglore', 'DakshinaKannada', '2020-07-06', '09:30:00', '19:00:00', 'Sleeper', 50),
(212224, 'Manglore', 'DakshinaKannada', '2020-07-06', '09:30:00', '21:00:00', 'AC', 80),
(212225, 'Manglore', 'Davanagere', '2020-07-06', '09:00:00', '16:40:00', 'General', 260),
(212226, 'Manglore', 'Davanagere', '2020-07-06', '10:30:00', '17:00:00', 'AC', 325),
(212227, 'Manglore', 'Dharwad', '2020-07-06', '10:30:00', '17:00:00', 'General', 275),
(212228, 'Manglore', 'Dharwad', '2020-07-06', '10:30:00', '15:00:00', 'AC', 315),
(212229, 'Manglore', 'Gulbarga', '2020-07-06', '23:45:00', '15:00:00', 'Sleeper', 485),
(212230, 'Manglore', 'Gulbarga', '2020-07-06', '23:45:00', '15:15:00', 'AC', 565),
(212231, 'Manglore', 'Hasan', '2020-07-06', '11:00:00', '09:15:00', 'AC', 170),
(212232, 'Manglore', 'Hasan', '2020-07-06', '11:00:00', '10:15:00', 'Sleeper', 150),
(212233, 'Manglore', 'Haveri', '2020-07-06', '13:00:00', '14:15:00', 'AC', 280),
(212234, 'Manglore', 'Kodagu', '2020-07-06', '13:00:00', '19:15:00', 'AC', 100),
(212235, 'Manglore', 'Kolar', '2020-07-06', '18:00:00', '14:15:00', 'Sleeper', 245),
(212236, 'Manglore', 'Kolar', '2020-07-06', '18:00:00', '14:15:00', 'General', 200),
(212237, 'Manglore', 'Kolar', '2020-07-06', '18:00:00', '13:00:00', 'AC', 250),
(212238, 'Manglore', 'Koppal', '2020-07-06', '18:00:00', '11:40:00', 'AC', 390),
(212239, 'Manglore', 'Mandya', '2020-07-06', '20:00:00', '10:30:00', 'AC', 285),
(212240, 'Manglore', 'Mandya', '2020-07-06', '20:00:00', '10:30:00', 'General', 220),
(212241, 'Manglore', 'Mandya', '2020-07-06', '18:00:00', '08:00:00', 'General', 220),
(212242, 'Manglore', 'Mysore', '2020-07-06', '12:00:00', '09:30:00', 'General', 145),
(212243, 'Manglore', 'Raichur', '2020-07-06', '23:00:00', '05:00:00', 'General', 435),
(212244, 'Manglore', 'Raichur', '2020-07-06', '23:45:00', '05:30:00', 'Sleeper', 495),
(212245, 'Manglore', 'Ramanagara', '2020-07-06', '23:45:00', '05:30:00', 'Sleeper', 355),
(212246, 'Manglore', 'Shivamogga', '2020-07-06', '11:45:00', '17:30:00', 'Sleeper', 115),
(212247, 'Manglore', 'Tumkur', '2020-07-06', '19:45:00', '13:30:00', 'General', 224),
(212248, 'Manglore', 'Udupi', '2020-07-06', '19:45:00', '13:30:00', 'General', 50),
(212249, 'Manglore', 'Uttara', '2020-07-06', '16:45:00', '12:30:00', 'General', 175),
(212250, 'Manglore', 'Uttara', '2020-07-06', '16:45:00', '11:30:00', 'General', 175),
(212251, 'Manglore', 'Uttara', '2020-07-06', '16:30:00', '11:45:00', 'Sleeper', 205),
(212252, 'Manglore', 'Uttara', '2020-07-06', '16:30:00', '11:45:00', 'AC', 235),
(212253, 'Manglore', 'Yadgir', '2020-07-06', '23:55:00', '04:45:00', 'AC', 620),
(212254, 'Manglore', 'Yadgir', '2020-07-06', '23:55:00', '05:00:00', 'Sleeper', 578),
(212255, 'Hubli', 'Dudhsagar', '2020-07-06', '13:00:00', '11:00:00', 'AC', 100),
(212256, 'Hubli', 'Sirsi', '2020-07-06', '09:30:00', '07:00:00', 'AC', 400),
(212257, 'Hubli', 'Banglore', '2020-07-06', '11:30:00', '17:00:00', 'General', 100),
(212258, 'Hubli', 'Banglore', '2020-07-06', '12:30:00', '18:00:00', 'Sleeper', 390),
(212259, 'Hubli', 'Banglore', '2020-07-06', '13:00:00', '16:30:00', 'Sleeper', 390),
(212260, 'Hubli', 'Bagalkot', '2020-07-06', '23:30:00', '08:30:00', 'General', 180),
(212261, 'Hubli', 'Bagalkot', '2020-07-06', '22:45:00', '07:30:00', 'AC', 250),
(212262, 'Hubli', 'Belgaum', '2020-07-06', '23:45:00', '17:30:00', 'Sleeper', 135),
(212263, 'Hubli', 'Ballari', '2020-07-06', '19:00:00', '09:00:00', 'General', 154),
(212264, 'Hubli', 'Ballari', '2020-07-06', '18:00:00', '06:00:00', 'General', 194),
(212265, 'Hubli', 'Bidar', '2020-07-06', '23:45:00', '05:00:00', 'Sleeper', 340),
(212266, 'Hubli', 'Bijapur', '2020-07-06', '20:30:00', '10:00:00', 'AC', 410),
(212267, 'Hubli', 'Chamarajanagara', '2020-07-06', '15:15:00', '14:00:00', 'Sleeper', 275),
(212268, 'Hubli', 'Chikballapur', '2020-07-06', '10:15:00', '04:30:00', 'Sleeper', 230),
(212269, 'Hubli', 'Chikkamagaluru', '2020-07-06', '05:30:00', '10:30:00', 'AC', 180),
(212270, 'Hubli', 'Chitradurga', '2020-07-06', '14:30:00', '21:40:00', 'Sleeper', 145),
(212271, 'Hubli', 'DakshinaKannada', '2020-07-06', '09:30:00', '19:00:00', 'Sleeper', 150),
(212272, 'Hubli', 'DakshinaKannada', '2020-07-06', '09:30:00', '21:00:00', 'AC', 200),
(212273, 'Hubli', 'Davanagere', '2020-07-06', '10:30:00', '17:00:00', 'AC', 125),
(212274, 'Hubli', 'Dharwad', '2020-07-06', '10:30:00', '15:00:00', 'AC', 70),
(212275, 'Hubli', 'Gulbarga', '2020-07-06', '23:45:00', '15:15:00', 'AC', 300),
(212276, 'Hubli', 'Hasan', '2020-07-06', '11:00:00', '10:15:00', 'Sleeper', 170),
(212277, 'Hubli', 'Haveri', '2020-07-06', '13:00:00', '14:15:00', 'AC', 245),
(212278, 'Hubli', 'Kodagu', '2020-07-06', '13:00:00', '19:15:00', 'AC', 220),
(212279, 'Hubli', 'Kolar', '2020-07-06', '18:00:00', '14:15:00', 'General', 200),
(212280, 'Hubli', 'Koppal', '2020-07-06', '18:00:00', '11:40:00', 'AC', 265),
(212281, 'Hubli', 'Mandya', '2020-07-06', '18:00:00', '08:00:00', 'General', 130),
(212282, 'Hubli', 'Mysore', '2020-07-06', '12:00:00', '09:30:00', 'General', 160),
(212283, 'Hubli', 'Raichur', '2020-07-06', '23:00:00', '05:00:00', 'General', 315),
(212284, 'Hubli', 'Ramanagara', '2020-07-06', '23:45:00', '05:30:00', 'Sleeper', 355),
(212285, 'Hubli', 'Shivamogga', '2020-07-06', '11:45:00', '17:30:00', 'Sleeper', 150),
(212286, 'Hubli', 'Manglore', '2020-07-06', '23:30:00', '22:30:00', 'General', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`origin_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`train_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26213002;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `dest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `origin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passenger_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695702;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `train_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212287;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
