-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 05:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syndrome`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('Admin1', 'bb0ed6ad56f41c6de469776171261226');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `OrderId` int(6) NOT NULL,
  `CustName` varchar(45) NOT NULL,
  `CustPhoneNum` varchar(11) NOT NULL,
  `CustAdd` text NOT NULL,
  `ProdId` varchar(6) NOT NULL,
  `ProdName` varchar(35) NOT NULL,
  `ProdQtty` int(2) NOT NULL,
  `TotPrice` decimal(8,2) NOT NULL,
  `OrderStat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`OrderId`, `CustName`, `CustPhoneNum`, `CustAdd`, `ProdId`, `ProdName`, `ProdQtty`, `TotPrice`, `OrderStat`) VALUES
(21, 'alia', '0112123432', 'pendang', 'B11', 'Dahlia', 4, '48.00', 'Processing'),
(22, 'syafiq', '0198899266', 'taiping', 'B12', 'Chocolate Corn Flakes', 3, '48.00', ''),
(24, 'farah', '0122211778', 'damansara', 'B14', 'Pineapple Tart', 2, '26.00', ''),
(26, 'hani', '0187264212', 'jeniang', 'C17', 'Book', 1, '15.00', ''),
(28, 'Kouki', '0123465783', 'Melaka', 'C16', 'Handbag', 11, '330.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PId` varchar(6) NOT NULL,
  `PName` varchar(35) NOT NULL,
  `PPrice` decimal(3,0) NOT NULL,
  `PType` varchar(6) NOT NULL,
  `POrder` int(4) NOT NULL,
  `PPicture` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `PName`, `PPrice`, `PType`, `POrder`, `PPicture`) VALUES
('B10', 'Chocolate Cookies', '15', 'Bake', 0, 'img/COOKIES3.jpg'),
('B11', 'Dahlia', '12', 'Bake', 4, 'img/dahlia.jpg'),
('B12', 'Chocolate Corn Flakes', '16', 'Bake', 3, 'img/flakes.jpeg'),
('B13', 'Rainbow cookies', '15', 'Bake', 0, 'img/biskut pelangi.jpg'),
('B14', 'Pineapple tart', '13', 'Bake', 2, 'img/tart nenas.jpg'),
('C16', 'Handbag', '30', 'Craft', 11, 'img/purse.jpg'),
('C17', 'Book', '15', 'Craft', 1, 'img/bookCover.jpg'),
('C18', 'Laptop Bag', '27', 'Craft', 0, ''),
('C19', 'Pencil Box', '12', 'Craft', 0, 'img/pecilBox2.jpg'),
('C20', 'Arrangement Box', '13', 'Craft', 0, 'img/purse4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `ProdId` (`ProdId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `OrderId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
