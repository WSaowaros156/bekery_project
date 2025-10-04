-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2025 at 02:19 PM
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
-- Database: `bakery_db`
--
CREATE DATABASE IF NOT EXISTS `bakery_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bakery_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(6, 'admin', '$2y$10$8EJZGAybtwHUh1HiTnL/3.h4kcWYNZnUtwBz2aJFbDRhYsEvyZdZu');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_code`) VALUES
(1, 'เค้ก', 'cake'),
(2, 'คุกกี้', 'cookie'),
(3, 'ขนมปัง', 'bread'),
(4, 'โดนัท', 'donut');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `phone`, `address`, `created_at`) VALUES
(8, 'คุณา', 'kkkkk@gmail.com', '$2y$10$3Ep19gacMROAPfT89OoFh.eGeR/3pMUXY9uCNpOdaiewEMSGHQbFy', '0650902406', 'aaaa', '2025-09-22 11:42:09'),
(9, 'โอม', 'ohm@gmail.com', '$2y$10$iOTImf5mW3ZeBaz.HtOt3u2PfdQJSi.yP4Y.QAaMmbtyyUUwKj1wW', '0650902406', 'aaaa', '2025-09-24 08:37:49'),
(10, 'มังกร1', 'mk1@gmail.com', '$2y$10$wCnyA7W4ALeumuyTgIesx.n985.3ipyMBCLLv34ZmywOJGtqXYJiC', '0650902406', 'aaaaa', '2025-09-24 12:35:48'),
(11, 'mangkorn', 'mk11@gmail.com', '$2y$10$SAJESCfQ/ovwiZyGAleA0exzGBjcApXjAkJ3ONJ7Wwbw5BnEpg7Hm', '0650902406', 'ff 31/74', '2025-09-27 15:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `status`) VALUES
(1, 9, '2025-09-24 15:59:47', 'กำลังดำเนินการ'),
(2, 9, '2025-09-24 16:00:36', 'กำลังดำเนินการ'),
(3, 9, '2025-09-24 16:01:20', 'กำลังดำเนินการ'),
(4, 9, '2025-09-24 18:03:33', 'กำลังดำเนินการ'),
(5, 9, '2025-09-24 18:05:33', 'กำลังดำเนินการ'),
(6, 8, '2025-09-24 18:09:12', 'กำลังดำเนินการ'),
(7, 8, '2025-09-24 18:09:17', 'กำลังดำเนินการ'),
(8, 8, '2025-09-24 18:20:46', 'กำลังดำเนินการ'),
(9, 8, '2025-09-24 18:25:13', 'กำลังดำเนินการ'),
(10, 8, '2025-09-24 18:25:28', 'กำลังดำเนินการ'),
(11, 8, '2025-09-24 18:40:22', 'กำลังดำเนินการ'),
(12, 9, '2025-09-24 19:24:58', 'กำลังดำเนินการ'),
(13, 8, '2025-09-24 19:29:53', 'กำลังดำเนินการ'),
(14, 8, '2025-09-24 19:31:21', 'กำลังดำเนินการ'),
(15, 10, '2025-09-24 19:36:56', 'กำลังดำเนินการ'),
(16, 9, '2025-09-27 21:47:44', 'กำลังดำเนินการ'),
(17, 9, '2025-09-27 21:47:54', 'กำลังดำเนินการ'),
(18, 9, '2025-09-27 21:48:25', 'กำลังดำเนินการ'),
(19, 9, '2025-09-27 21:58:27', 'กำลังดำเนินการ'),
(20, 9, '2025-09-27 21:59:14', 'กำลังดำเนินการ'),
(21, 9, '2025-09-27 22:06:41', 'กำลังดำเนินการ'),
(22, 9, '2025-09-27 22:11:29', 'กำลังดำเนินการ'),
(23, 9, '2025-09-27 22:11:40', 'กำลังดำเนินการ'),
(24, 11, '2025-09-27 22:32:55', 'กำลังดำเนินการ');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(7, 11, 12, 1, 30.00),
(8, 12, 8, 1, 58.00),
(9, 13, 35, 1, 28.00),
(10, 14, 12, 1, 30.00),
(11, 14, 33, 1, 30.00),
(12, 14, 38, 1, 38.00),
(13, 15, 34, 1, 32.00),
(14, 15, 11, 1, 35.00),
(15, 15, 15, 1, 38.00),
(16, 15, 30, 1, 30.00),
(23, 22, 2, 1, 70.00),
(24, 23, 22, 1, 49.00),
(25, 24, 28, 1, 45.00),
(26, 24, 39, 1, 33.00),
(27, 24, 16, 1, 42.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `price`, `stock`, `image`) VALUES
(1, 'เค้กสตรอเบอร์รี่', 'cake', 65.00, 20, 'c1.jpg'),
(2, 'เค้กช็อกโกแลต', 'cake', 70.00, 0, 'c2.jpg'),
(3, 'เค้กวนิลา', 'cake', 60.00, 0, 'c3.jpg'),
(4, 'เค้กใบเตย', 'cake', 55.00, 0, 'c4.jpg'),
(5, 'ชีสเค้ก', 'cake', 80.00, 0, 'c5.jpg'),
(6, 'เรดเวลเวท', 'cake', 85.00, 0, 'c006.jpg'),
(7, 'เค้กกาแฟ', 'cake', 68.00, 0, 'c7.jpg'),
(8, 'เค้กเลมอน', 'cake', 58.00, 0, 'c008.jpg'),
(9, 'เค้กกล้วยหอม', 'cake', 50.00, 0, 'c9.jpg'),
(10, 'เค้กแครอท', 'cake', 75.00, 0, 'c10.jpg'),
(11, 'คุกกี้ช็อกโกแลตชิพ', 'cookie', 35.00, 0, 'cookie1.jpg'),
(12, 'คุกกี้วนิลา', 'cookie', 30.00, 0, 'cookie2.jpg'),
(13, 'คุกกี้อัลมอนด์', 'cookie', 40.00, 0, 'cookie3.jpg'),
(14, 'คุกกี้มัทฉะ', 'cookie', 45.00, 0, 'cookie4.jpg'),
(15, 'คุกกี้สตรอเบอร์รี่', 'cookie', 38.00, 0, 'cookie5.jpg'),
(16, 'คุกกี้โอ๊ตมีล', 'cookie', 42.00, 0, 'cookie6.jpg'),
(17, 'คุกกี้ถั่วลิสง', 'cookie', 36.00, 0, 'cookie7.jpg'),
(18, 'คุกกี้เนยสด', 'cookie', 28.00, 0, 'cookie8.jpg'),
(19, 'คุกกี้เลมอน', 'cookie', 34.00, 0, 'cookie9.jpg'),
(20, 'คุกกี้มะพร้าว', 'cookie', 39.00, 0, 'cookie10.jpg'),
(21, 'บาแก็ตต์', 'bread', 25.00, 0, 'p1.jpg'),
(22, 'ชิโอปัง', 'bread', 49.00, 0, 'p2.jpg'),
(23, 'ขนมปังโฮลวีต', 'bread', 30.00, 0, 'p3.jpg'),
(24, 'ขนมปังโรล', 'bread', 22.00, 0, 'p4.jpg'),
(25, 'เบเกิล', 'bread', 28.00, 0, 'p5.jpg'),
(26, 'ครัวซองต์', 'bread', 35.00, 0, 'p6.jpg'),
(27, 'เซียบัตต้า', 'bread', 40.00, 0, 'p7.jpg'),
(28, 'บาแก็ตต์แซนด์วิช', 'bread', 45.00, 0, 'p8.jpg'),
(29, 'ขนมปังเนยสด', 'bread', 25.00, 0, 'p9.jpg'),
(30, 'ขนมปังลูกเกด', 'bread', 30.00, 0, 'p10.jpg'),
(31, 'ขนมปังซาวโดว์', 'bread', 50.00, 0, 'p11.jpg'),
(32, 'โดนัทน้ำตาล', 'donut', 25.00, 0, 'd1.jpg'),
(33, 'โดนัทช็อกโกแลต', 'donut', 30.00, 0, 'd2.jpg'),
(34, 'โดนัทสตรอว์เบอร์รี่', 'donut', 32.00, 0, 'd3.jpg'),
(35, 'โดนัทเกลซ', 'donut', 28.00, 0, 'd4.jpg'),
(36, 'โดนัทมัทฉะ', 'donut', 35.00, 0, 'd5.jpg'),
(37, 'โดนัทบลูเบอร์รี่', 'donut', 34.00, 0, 'd6.jpg'),
(38, 'โดนัทไส้ครีม', 'donut', 38.00, 0, 'd7.jpg'),
(39, 'โดนัทมะพร้าว', 'donut', 33.00, 0, 'd8.jpg'),
(40, 'โดนัทคาราเมล', 'donut', 36.00, 0, 'd9.jpg'),
(41, 'โดนัทโอรีโอ้', 'donut', 40.00, 0, 'd10.jpg'),
(42, 'โดนัททีรามิสุ', 'donut', 42.00, 0, 'd11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_code` (`category_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `fk_order_items_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_items_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
