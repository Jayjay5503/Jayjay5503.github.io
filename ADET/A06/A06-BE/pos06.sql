-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 02:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos06`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(4) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Takoyaki'),
(2, 'Coffee'),
(3, 'Drinks'),
(4, 'Grilled'),
(5, 'Snacks'),
(6, 'Taiwanese Chicken'),
(7, 'Silog');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(4) NOT NULL,
  `categoryID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `isAvailable` varchar(6) NOT NULL DEFAULT 'true',
  `price` int(4) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `isAvailable`, `price`, `image`) VALUES
(1, 1, 'Baby Octupus', 'true', 150, 'takoyaki/babyocto'),
(2, 1, 'Cheesy Bacon', 'true', 120, 'takoyaki/cheesy'),
(3, 1, 'Shrimp and Veggies', 'true', 120, 'takoyaki/shrimp'),
(4, 1, 'Crab and Cheese', 'true', 120, 'takoyaki/crab'),
(5, 1, 'Octobits', 'true', 120, 'takoyaki/octobits'),
(6, 1, 'All Flavor (24pcs)', 'true', 700, 'takoyaki/allflavor'),
(7, 2, 'Iced Cafe Au Lait', 'true', 120, 'coffee/Aulait'),
(8, 2, 'Iced Cafe Americano', 'true', 110, 'coffee/americano'),
(9, 2, 'Iced Vietnamese Coffee', 'true', 120, 'coffee/vietnamese'),
(10, 2, 'Black Coffe (Hot)', 'true', 85, 'coffee/black'),
(11, 2, 'Brewed Coffee', 'true', 85, 'coffee/brewed'),
(12, 3, 'Coke (In-can)', 'true', 55, 'drinks/coke'),
(13, 3, 'Pineapple Juice (In-can)', 'true', 55, 'drinks/pineapple'),
(14, 3, 'Sprite (In-can)', 'true', 55, 'drinks/sprite'),
(15, 3, 'Iced Tea', 'true', 50, 'drinks/icedtea'),
(16, 3, 'San Mig Apple', 'true', 70, 'drinks/sanmig apple'),
(17, 3, 'Strong Zero', 'true', 70, 'drinks/strongzero'),
(18, 3, 'Bottled Water', 'true', 50, 'drinks/water'),
(19, 4, 'Grilled Chicken Half with Rice', 'true', 250, 'grilled/chicken-large'),
(20, 4, 'Grilled Chicken Whole', 'true', 400, 'grilled/whole'),
(21, 4, 'Grilled Liempo', 'true', 180, 'grilled/liempo'),
(22, 5, 'Bacon Fries Overload', 'true', 210, 'snack/bacon'),
(23, 5, 'Gyoza', 'true', 210, 'snack/gyoza'),
(24, 5, 'Cheesy Beef Nachos', 'true', 200, 'snack/nachos'),
(25, 5, 'Flavored Fries', 'true', 150, 'snack/flavoredfries'),
(26, 5, 'Kani Tempura', 'true', 210, 'snack/kani'),
(27, 5, 'Tempura', 'true', 210, 'snack/tempura'),
(29, 5, 'Cheesestick', 'true', 120, 'snack/cheesestick'),
(30, 6, 'Taiwanese Chicken Salad & Iced Tea', 'true', 190, 'TC/TCsalad'),
(31, 6, 'Taiwanese Chicken Rice & Iced Tea', 'true', 215, 'TC/TCrice'),
(32, 6, 'Taiwanese Chicken Fries & Drinks', 'true', 190, 'TC/TCfries'),
(33, 6, '6pcs. Taiwanese Chicken', 'true', 650, 'TC/TC6pcs'),
(34, 7, 'Longsilog', 'true', 130, 'silog/longsilog'),
(35, 7, 'Baconsilog', 'true', 150, 'silog/baconsilog'),
(36, 7, 'Samgyupsilog', 'true', 150, 'silog/samgyup'),
(37, 7, 'Sausagesilog', 'true', 120, 'silog/sausage'),
(38, 7, 'Shanghaisilog', 'true', 120, 'silog/shanghai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
