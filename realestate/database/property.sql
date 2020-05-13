-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 12:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(44) NOT NULL,
  `myusername` varchar(55) NOT NULL,
  `mypassword` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `myusername`, `mypassword`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_property` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `mobile_phone` varchar(11) NOT NULL,
  `cus_email` varchar(11) NOT NULL,
  `reason` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_property`, `name`, `mobile_phone`, `cus_email`, `reason`) VALUES
(44, 'Samarth Gup', '9826672059', 'samarth0174', ''),
(45, 'Samarth Gup', '9826672059', 'samarth0174', 'Pls contact asap'),
(48, 'saksham gup', '9826672059', 'fff@gmail.c', ''),
(53, 'Anuradha', '9826672059', 'samarth0174', 'ddasdsds');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id_property` int(5) NOT NULL,
  `name_property` varchar(250) NOT NULL,
  `type_property` varchar(255) NOT NULL,
  `add1` varchar(300) NOT NULL,
  `add2` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `price_type` varchar(300) NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `groos_floor_area` varchar(300) NOT NULL,
  `leasehold` varchar(300) NOT NULL,
  `beds` varchar(333) NOT NULL,
  `baths` varchar(333) NOT NULL,
  `contact_no` varchar(333) NOT NULL,
  `per_squre_feet` varchar(333) NOT NULL,
  `squre_feet` varchar(333) NOT NULL,
  `text` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id_property`, `name_property`, `type_property`, `add1`, `add2`, `price`, `price_type`, `land_area`, `groos_floor_area`, `leasehold`, `beds`, `baths`, `contact_no`, `per_squre_feet`, `squre_feet`, `text`) VALUES
(44, 'LakeView palace', 'Bungalow House', 'MAIN STREET', '343434343434', '5000000', 'Guide Price', 'jadna', '1890', '323', '3', '2', '9133142342', '293.2', '1500', ''),
(45, 'ganesh villa', 'Terraced House', 'Park Avenue', '343434343434', '23443431', 'Negotiable', 'jadna', '1700', '323', '2', '3', '9133142342', '293.2', '1500', ''),
(48, 'Antilla', 'Condominium', 'MAIN STREET', '', '5000000', '....', 'jadna', '', '323', '', '', '', '', '', ''),
(49, 'Lblock', 'Terraced House', 'MAIN STREET', '343434343434', '5000000', 'Guide Price', 'jadna', '', '323', '', '', '', '', '', ''),
(53, 'ganesh villa', 'Condominium', 'MENS HOSTEL', '343434343434', '5000000', 'Negotiable', 'jadna', '', '323', '', '', '', '', '', ''),
(54, 'qblock', 'Condominium', 'MAIN STREET', '', '5000000', '....', 'jadna', '', '323', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_prop`
--

CREATE TABLE `user_prop` (
  `id_property` int(5) NOT NULL,
  `name` varchar(26) NOT NULL,
  `email` varchar(26) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name_property` varchar(250) NOT NULL,
  `type_property` varchar(255) NOT NULL,
  `add1` varchar(300) NOT NULL,
  `add2` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `price_type` varchar(300) NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `groos_floor_area` varchar(300) NOT NULL,
  `leasehold` varchar(300) NOT NULL,
  `beds` varchar(333) NOT NULL,
  `baths` varchar(333) NOT NULL,
  `per_squre_feet` varchar(333) NOT NULL,
  `squre_feet` varchar(333) NOT NULL,
  `text` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_property`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id_property`);

--
-- Indexes for table `user_prop`
--
ALTER TABLE `user_prop`
  ADD PRIMARY KEY (`id_property`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id_property` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_prop`
--
ALTER TABLE `user_prop`
  MODIFY `id_property` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
