-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 05, 2026 at 11:57 AM
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
-- Database: `wt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`) VALUES
(1, 'Black Denim Shirt ', 'Mens Top Wear', 800, 'Screenshot 2026-04-29 004803.png'),
(2, 'Red TShirt Regular', 'Mens Top Wear', 500, 'Screenshot 2026-04-29 005155.png'),
(3, 'Blue Full Sleeve Shirt', 'Mens Top Wear', 1100, 'Screenshot 2026-04-29 005015.png'),
(4, 'Yellow Strip Tshirt', 'Mens Top Wear', 600, 'Screenshot 2026-04-29 005220.png'),
(5, 'Blue Knot Top', 'Ladies Top Wear', 700, 'Screenshot 2026-04-29 005320.png'),
(6, 'Olive Balloon Top', 'Ladies Top Wear', 900, 'Screenshot 2026-04-29 005343.png'),
(7, 'Regular Pink Top', 'Ladies Top Wear', 400, 'Screenshot 2026-04-29 005414.png'),
(8, 'Golden Flared Top', 'Ladies Top Wear', 1100, 'Screenshot 2026-04-29 005449.png'),
(9, 'Purple Highneck Top', 'Ladies Top Wear', 500, 'Screenshot 2026-04-29 005506.png'),
(10, 'Brown Ruffle Top', 'Ladies Top Wear', 1500, 'Screenshot 2026-04-29 005554.png'),
(11, 'Black Football shoes', 'Footwear', 1900, 'Screenshot 2026-04-29 010011.png'),
(12, 'White heels', 'Footwear', 1500, 'Screenshot 2026-04-29 010134.png'),
(13, 'Strap Sandals', 'Footwear', 900, 'Screenshot 2026-04-29 010054.png'),
(14, 'Brown Fabric Heels', 'Footwear', 1600, 'Screenshot 2026-04-29 010158.png'),
(15, 'Metalic Golden Bag', 'Goggles & Purses', 900, 'Screenshot 2026-04-29 010221.png'),
(16, 'Wine Shoulder Bag', 'Goggles & Purses', 1200, 'Screenshot 2026-04-29 010312.png'),
(17, 'Black  Square Goggles', 'Goggles & Purses', 300, 'moss_magic_polarized_square_sunglasses_base_21-9-2023_700x700.jpg'),
(18, 'Black jeans', 'Jeans', 1536, 'Screenshot 2026-04-29 005815.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'mahajansamiksha411@gmail.com', '123', NULL, NULL),
(2, 'mahajansamiksha411@gmail.com', '123', NULL, NULL),
(3, 's_omiksha_', '123', 'samiksha mahajan', 'mahajansamiksha411@gmail.com'),
(4, 's_omiksha_', '123', 'samiksha mahajan', 'mahajansamiksha411@gmail.com'),
(5, 's_omiksha_', '123', 'samiksha mahajan', 'mahajansamiksha411@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
