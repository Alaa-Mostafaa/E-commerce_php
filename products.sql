-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 07:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `brand`, `price`, `image`, `id`) VALUES
('Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12521d7115.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `Postal_code` int(10) NOT NULL,
  `phone` int(12) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address`, `city`, `Postal_code`, `phone`, `payment_type`, `user_id`) VALUES
(1, 'Alaa Mostafa', 'alan.mustafa.2002@gmail.com', '1 street of makka', 'Giza', 12621, 1124289993, 'Cash_on_Delivery', 4),
(2, 'Alaa Mostafa', 'alan.mustafa.2002@gmail.com', '1 street of makka', 'Giza', 12621, 1124289993, 'Cash_on_Delivery', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `price`, `image`, `user_id`) VALUES
(20, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c124f95f7f7.jpg', 4),
(21, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12507f1649.jpg', 4),
(22, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c1251573eb7.jpg', 4),
(23, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12521d7115.jpg', 4),
(24, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12531c1d6e.jpg', 4),
(25, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12540c8462.jpg', 4),
(26, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c1255a243d4.jpg', 4),
(27, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12567e8e75.jpg', 4),
(28, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c12575188a7.jpg', 4),
(29, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c125828353e.jpg', 4),
(30, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c1259267e2d.jpg', 4),
(31, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c125a1b10d6.jpg', 4),
(32, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c125b1c0b5b.jpg', 4),
(33, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c125c7d8607.jpg', 4),
(34, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c125d608e95.jpg', 4),
(35, 'Cartoon Astronaut T-Shirt', 'adidas', 78, '65c125e4dbea5.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Email`, `password`, `phone`, `Address`) VALUES
(3, 'Mohamed', 'mohamed@gmail.com', '$2y$10$Pt6rzxAQkzuSCN6cV97OgeudFswytBvQH1wGv9imXpTbtyu9meVai', 1124289993, '1 street of makka, 1 street of makka'),
(4, 'Montu', 'mo@gmail.com', '$2y$10$bUo0mCDc.q2tlQi05o34gue.fisXQ0QvgO5BBzqBzbn2AO4I6OFdy', 1124289993, '1 street of makka, 1 street of makka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Order` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PersonOrder` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_Order` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
