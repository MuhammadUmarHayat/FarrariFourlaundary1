-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 06:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farrarifourdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskit`
--

CREATE TABLE `baskit` (
  `id` int(11) NOT NULL,
  `itemcode` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baskit`
--

INSERT INTO `baskit` (`id`, `itemcode`, `qty`, `price`, `totalPrice`) VALUES
(9, 2, 3, 400, 400);

-- --------------------------------------------------------

--
-- Table structure for table `booking_items`
--

CREATE TABLE `booking_items` (
  `booking_No` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `customer_code` int(10) NOT NULL,
  `item_code` int(10) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `item_quantity` int(10) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `item_notes` varchar(100) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `advance` decimal(10,0) NOT NULL,
  `payable` decimal(10,0) NOT NULL,
  `rackNo` varchar(150) NOT NULL,
  `kNetNotes` varchar(250) NOT NULL,
  `comissionedEmployee` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `code` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`code`, `name`, `mobile`, `cnic`, `address`) VALUES
(1112, 'umar', '03334380922', '35202', 'lahore');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_code` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_code`, `title`, `category`, `price`, `status`) VALUES
(1, 'Shirts', 'Men', 120, 0),
(2, 'Burkah plain', 'Women', 400, 0),
(5, 'Qandora', 'Men', 360, 0),
(6, 'Vest', 'Men', 50, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskit`
--
ALTER TABLE `baskit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_items`
--
ALTER TABLE `booking_items`
  ADD PRIMARY KEY (`booking_No`(100));

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskit`
--
ALTER TABLE `baskit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
