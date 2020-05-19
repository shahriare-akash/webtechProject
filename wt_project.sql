-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `status`) VALUES
(1, 'Chicken', 'Active'),
(2, 'Vegetables', 'Active'),
(13, 'Beef', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `cId` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `chargeAmount` float NOT NULL,
  `vatCharge` float NOT NULL,
  `cAddress` varchar(100) NOT NULL,
  `cphoneNo` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`cId`, `cName`, `chargeAmount`, `vatCharge`, `cAddress`, `cphoneNo`, `country`, `currency`, `message`) VALUES
(1, 'ABC Restaurant', 7, 10, 'Mirpur-1,Dhaka-1216,Bangladesh', 1727770124, 'Bangladesh', 'TK', ' Welcome to ABC Restaurants official website.           ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `productDescription` varchar(500) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `price`, `productDescription`, `categoryId`, `storeId`, `status`) VALUES
(1, 'Chicken Masala', 350, 'Chicken tikka masala is a dish of chunks of roasted marinated chicken (chicken tikka) in a spiced curry sauce.  ', 1, 1, 'Active'),
(3, 'Beef Kala Bhuna', 450, '  Authentic Meat', 13, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `storeId` int(11) NOT NULL,
  `storeName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`storeId`, `storeName`, `status`) VALUES
(1, 'Store 1', 'Active'),
(2, 'Store 2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `storetable`
--

CREATE TABLE `storetable` (
  `tableId` int(11) NOT NULL,
  `tableName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storetable`
--

INSERT INTO `storetable` (`tableId`, `tableName`, `status`) VALUES
(1, 'Table 1', 'Active'),
(2, 'Table 2', 'Active'),
(3, 'Table 3', 'Active'),
(5, 'Table 4', 'Active'),
(7, 'Table 5', 'Deactivate');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `groupId` int(11) NOT NULL,
  `groupName` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`groupId`, `groupName`, `description`, `status`) VALUES
(1, 'Admin', 'This group of users will have full access.', 'Activate'),
(2, 'Stuff', 'This group of users will have limited access.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL,
  `firstName` varchar(80) NOT NULL,
  `lastName` varchar(80) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `groupId` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `firstName`, `lastName`, `email`, `password`, `groupId`, `gender`, `phoneNo`) VALUES
(1, 'Shahriar', 'Akash', 'sadmanshahriare.akash@gmail.com', '123', 1, 'Male', 1727770124),
(2, 'Rabeya', 'Bushra', 'bushrakhan007@gmail.com', '12345', 2, 'Female', 1613727673);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `storeId` (`storeId`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`storeId`);

--
-- Indexes for table `storetable`
--
ALTER TABLE `storetable`
  ADD PRIMARY KEY (`tableId`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`groupId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `groupId` (`groupId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `storeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `storetable`
--
ALTER TABLE `storetable`
  MODIFY `tableId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`storeId`) REFERENCES `store` (`storeId`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `usergroup` (`groupId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
