-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 07:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeepartpaysep2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `Id` int(11) NOT NULL,
  `EmpCode` varchar(10) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Designation` varchar(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `TotalAmount` float NOT NULL,
  `PaidAmount` float NOT NULL,
  `DueAmount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`Id`, `EmpCode`, `FirstName`, `LastName`, `Department`, `Designation`, `Phone`, `TotalAmount`, `PaidAmount`, `DueAmount`) VALUES
(1, 'UBI001', 'Allie', 'Grater', 'Finance', 'Accountant', '8654721036', 10000, 2000, 8000),
(2, 'UBI002', 'Olive', 'Dactyl', 'Admin', 'Superviser', '5698741320', 6000, 5500.5, 499.5),
(3, 'UBI003', 'Amanda', 'Kewshun', 'Technical', 'Technical ', '8547896023', 12000, 6000, 6000),
(4, 'UBI004', 'Roy', 'Thettick', 'Management', 'Manager', '5786012369', 9500, 2500, 7000),
(5, 'UBI005', 'Rod', 'Knee', 'Management', 'Assistant ', '8746320891', 2000, 1500, 500),
(6, 'UBI006', 'Dee', 'Mandingbos', 'Technical', 'Developer', '6578941023', 1200, 800, 400),
(7, 'UBI007', 'Willie', 'Clowd', 'Technical', 'Developer', '4258963248', 3000, 0, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `EmpCode` (`EmpCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeemaster`
--
ALTER TABLE `employeemaster`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
