-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2022 at 12:03 PM
-- Server version: 5.7.37
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haightk1_ProjectDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `CART`
--

CREATE TABLE `CART` (
  `ConfirmationID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CLIENT`
--

INSERT INTO `CLIENT` (`email`, `Password`, `Fname`, `Lname`, `Phone`, `Address`, `City`, `State`) VALUES
('demo@gmail.com', 'DEMO', 'Ken', 'Haight', 2013903283, '1 Normal Ave', 'Montclair', 'NJ');

-- --------------------------------------------------------

--
-- Table structure for table `CONTAINS`
--

CREATE TABLE `CONTAINS` (
  `ID` int(11) NOT NULL,
  `ModelNumber` varchar(5) NOT NULL,
  `Count` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EMPLOYEE`
--

CREATE TABLE `EMPLOYEE` (
  `EmployeeID` int(11) NOT NULL,
  `Username` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EMPLOYEE`
--

INSERT INTO `EMPLOYEE` (`EmployeeID`, `Username`, `Password`) VALUES
(111111120, 'DEMO', 'DEMO');

-- --------------------------------------------------------

--
-- Table structure for table `PART`
--

CREATE TABLE `PART` (
  `ProductType` varchar(15) NOT NULL,
  `Brand` varchar(10) DEFAULT NULL,
  `ModelNumber` varchar(5) NOT NULL,
  `Price` int(5) DEFAULT NULL,
  `StockCount` int(5) DEFAULT NULL,
  `EmployeeID` char(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PART`
--

INSERT INTO `PART` (`ProductType`, `Brand`, `ModelNumber`, `Price`, `StockCount`, `EmployeeID`) VALUES
('CPU', 'Sony', 'S1554', 200, 0, '000000001'),
('CPU', 'Sony', 'S1586', 300, 0, '000000001'),
('CPU', 'Intel', 'IFFEW', 150, 0, '000000001'),
('CPU', 'Intel', 'IFVML', 215, 0, '000000001'),
('CPU', 'Intel', 'IJIOC', 300, 1, '000000001'),
('CPU', 'Intel', 'IPEWM', 250, 5, '000000001'),
('CPU', 'Intel', 'IIEOP', 400, 3, '000000001'),
('GPU', 'Sony', 'S2464', 500, 3, '000000001'),
('GPU', 'Sony', 'S2905', 550, 2, '000000001'),
('GPU', 'Nvidia', 'NV456', 715, 6, '000000001'),
('GPU', 'Nvidia', 'NV887', 800, 8, '000000001'),
('GPU', 'Nvidia', 'NV156', 1000, 3, '000000001'),
('RAM', 'Corsair', '12GB7', 10, 30, '000000001'),
('RAM', 'Corsair', '16GB6', 25, 0, '000000001'),
('RAM', 'Corsair', '24GB6', 30, 20, '000000001'),
('RAM', 'Sony', '12GB5', 15, 0, '000000001'),
('RAM', 'Sony', '24GB2', 50, 4, '000000001'),
('RAM', 'Nvidia', 'NV9GB', 55, 0, '000000001'),
('RAM', 'Nvidia', 'NV6GB', 60, 0, '000000001'),
('MOTHERBOARD', 'Msi', '6H0KL', 250, 0, '000000001'),
('MOTHERBOARD', 'msi', '584LD', 325, 4, '000000001'),
('MOTHERBOARD', 'Asus', '3GHJP', 450, 5, '000000001'),
('MOTHERBOARD', 'Msi', '22WSD', 275, 2, '000000001'),
('MOTHERBOARD', 'Asus', '33RFO', 450, 3, '000000001'),
('TOWER', 'Corsair', '23474', 200, 3, '000000001'),
('TOWER', 'Nvidia', 'NV788', 150, 6, '000000001'),
('TOWER', 'Corsair', '02384', 100, 2, '000000001'),
('TOWER', 'Asus', 'FVYHG', 100, 2, '000000001'),
('TOWER', 'Nvidia', 'NV663', 300, 1, '000000001'),
('TOWER', 'Asus', 'DFCFH', 325, 0, '000000001');

-- --------------------------------------------------------

--
-- Table structure for table `SALE`
--

CREATE TABLE `SALE` (
  `SaleID` int(11) NOT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CartID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SALE`
--

INSERT INTO `SALE` (`SaleID`, `OrderTime`, `CartID`, `email`, `Price`) VALUES
(2, '2021-12-09 21:29:00', 32, 'demo@gmail.com', 1210),
(3, '2021-12-09 21:33:52', 35, 'demo@gmail.com', 1110),
(4, '2021-12-09 21:52:53', 36, 'demo@gmail.com', 600),
(5, '2021-12-09 21:55:51', 37, 'demo@gmail.com', 1030),
(6, '2021-12-11 01:11:52', 38, 'demo@gmail.com', 1200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CART`
--
ALTER TABLE `CART`
  ADD PRIMARY KEY (`ConfirmationID`),
  ADD KEY `email` (`email`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `CONTAINS`
--
ALTER TABLE `CONTAINS`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ModelNumber` (`ModelNumber`);

--
-- Indexes for table `EMPLOYEE`
--
ALTER TABLE `EMPLOYEE`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `PART`
--
ALTER TABLE `PART`
  ADD PRIMARY KEY (`ModelNumber`),
  ADD KEY `AdminID` (`EmployeeID`);

--
-- Indexes for table `SALE`
--
ALTER TABLE `SALE`
  ADD PRIMARY KEY (`SaleID`),
  ADD KEY `CartID` (`CartID`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CART`
--
ALTER TABLE `CART`
  MODIFY `ConfirmationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `CONTAINS`
--
ALTER TABLE `CONTAINS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `EMPLOYEE`
--
ALTER TABLE `EMPLOYEE`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111111121;

--
-- AUTO_INCREMENT for table `SALE`
--
ALTER TABLE `SALE`
  MODIFY `SaleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
