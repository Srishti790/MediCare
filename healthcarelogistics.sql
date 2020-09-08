-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 07:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcarelogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(25) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `tname` varchar(256) NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `types` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `booking_status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `cname`, `tname`, `pincode`, `mobile`, `types`, `date`, `booking_status`) VALUES
(1, 'abhishek', 'abhishek', 834003, '9470940928', 'Erythrocyte count', '2020-03-31', 0),
(2, 'puja', 'sallu', 834003, '9470940924', 'Blood Test', '2020-05-21', 0),
(3, 'kakashi', 'goku', 988677, '9470940987', 'Blood Test', '2020-07-02', 0),
(4, 'codogram', 'priyanshu', 987654, '9431340567', 'Erythrocyte count', '2020-06-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `id` int(11) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `tname` varchar(256) NOT NULL,
  `typeoftest` varchar(256) NOT NULL,
  `sampletype` varchar(256) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`id`, `cname`, `tname`, `typeoftest`, `sampletype`, `cost`) VALUES
(1, 'abhishek', 'abhishek', 'Erythrocyte count', 'Hair', 10000),
(2, 'abhishek', 'abhishek', 'Erythrocyte count', 'Blood', 20000),
(3, 'abhishek', 'abhishek', 'Erythrocyte count', 'Blood', 5000),
(4, 'codogram', 'priyanshu', 'Erythrocyte count', 'Hair', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `pincode` int(11) NOT NULL,
  `cnumber` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `username`, `password`, `email`, `location`, `pincode`, `cnumber`) VALUES
(1, 'Abhishek Kesri', 'abhishek', '$2y$10$PQb1JKlhxaF9P.1gPnewEeh1YFMc2YyncNcx2MQxDDWlQNfyZxYA2', 'abhi987@gmail.com', 'Hatia', 834003, '9470940928'),
(2, 'Puja', 'puja', '$2y$10$0xXkW5NHXQZg6diABuoTb.8BCG6m70z7ztxD4deduFATmWaepXWjC', 'chotadon123@gmail.com', 'Ekta Nagar', 834003, '9470940924'),
(3, 'Hatake Kakashi', 'kakashi', '$2y$10$b/p9L.NcxiDAx.vvzoakQuKYnyMWta8QTqOLsawnxlyiNpgBYY5LC', 'obito3455@gmail.com', 'Land of fire', 988677, '9987876565454'),
(4, 'Mohit Kumar', 'codogram', '$2y$10$MdPF8CdsTlJeSfH6rLvVmeEacJBd03CCluT3NCbu8jUlzTdrBCrnG', 'mohit123@gmail.com', 'hatia', 987654, '4767576547');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `cname` varchar(100) DEFAULT NULL,
  `types` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `addedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`cname`, `types`, `email`, `mobile`, `addedby`) VALUES
('krish', 'Blood', 'shiva@gmail.com', '789456120', 'shiva');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `Quantity` int(25) NOT NULL DEFAULT '0',
  `Price` int(25) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `image`, `Quantity`, `Price`) VALUES
(1, 'Sterile glass or plastic tube with rubber caps', 'tube.PNG', 1000, 25),
(2, 'Injections', 'injections.PNG', 5000, 35),
(3, 'Specimen collection container', 'specimen.PNG', 2000, 20),
(4, 'Zip lock bags', 'ziplock.PNG', 6000, 10),
(5, 'Scissors', 'available.PNG', 1000, 50),
(6, 'ironman', '4716538-the_avengers___ironman_by_stephencanlas-d4zpaxl.jpg', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(25) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `pincode` int(11) NOT NULL,
  `cnumber` int(12) NOT NULL,
  `timings` varchar(25) NOT NULL,
  `flag` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `fullname`, `username`, `password`, `email`, `location`, `pincode`, `cnumber`, `timings`, `flag`) VALUES
(1, 'Abhishek Kesri', 'abhishek', '$2y$10$BhDrFaVPdWpG84Soho74ruJg6IVCkVV.msIBGkv6KPAz2tXF1uDHS', 'abhi987@gmail.com', 'Hatia', 834003, 2147483647, '12pm-2pm', 1),
(2, 'salman', 'sallu', '$2y$10$bKf/jh6cF.hujiEqZ2wSt.qYCyZ0DJM8h/DEP9eSRR5wqOLbPoDBO', 'sallu123@gmail.com', 'mumbai', 834003, 2147483647, '8am-10am', 0),
(5, 'Ankit Raj', 'ankit', '$2y$10$SAegLrtsW8sKUDlshH4Yu.RQQwyugwoQk7NeGLV5gvYKebzqq82ma', 'archana456@gmail.com', 'hatia ranchi', 834003, 999999999, '2pm - 5pm', 0),
(6, 'jhfh', 'ankit', '$2y$10$0tlTWSh4G0sFDS2GVcpdpuyOGctUy7blfXU7ZmHTFfdqnA7dwHgDK', 'amitraj200raj@gmail.com', 'dhurwa', 876544, 2147483647, '2pm - 5pm', 0),
(7, 'Amit raj', 'goku', '$2y$10$otEWs0f6KfVqa6sljBneVOrFNTimIfsUZlfjr1FQMTiUq8PaUcrR6', 'amitraj200raj@gmail.com', 'hata tahg', 988677, 2147483647, '2pm-8pm', 0),
(8, 'Naruto Uzumaki', 'naruto', '$2y$10$AU9EAT/k8D83/9VU3UFVgOZWTvoSwKKwNQGV38AbQI4WPE3JMoBVW', 'rasengan123@gmail.com', 'Konoha Village', 123456, 2147483647, '4pm-8px', 0),
(9, 'Priyanshu Kumar', 'priyanshu', '$2y$10$O2mcD5QVLJH99IwPY1yE1uZu/zYNKWehuRQiLLEcHlazlbS3.m2g6', 'dofey123@gmail.com', 'kadru', 987654, 948364853, '10am-1pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Price` int(25) NOT NULL DEFAULT '1000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `Price`) VALUES
(1, 'Blood Test', 1000),
(2, 'corona test', 1000),
(3, 'cancer test', 10000),
(4, 'Erythrocyte count', 1000),
(5, 'ECG', 5000),
(6, 'MRI', 4000),
(7, 'Haemoglobin Test', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
