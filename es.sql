-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 10:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `es`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(100) NOT NULL,
  `p_img` varchar(1000) NOT NULL,
  `p_price` int(20) NOT NULL,
  `p_des` varchar(1000) NOT NULL,
  `p_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_title`, `p_img`, `p_price`, `p_des`, `p_category`) VALUES
(7, 'Dell Latitude E840', 'Dell Latitude E840.jpg', 50000, 'Dell Latitude E6330 Laptop vs HP Elitebook 840 G1 (J5Q17UT) Ultrabook (Core i5 4th Gen/4 GB/180 GB SSD/Windows 7)', 'Dell'),
(9, 'ASUS VivoBook S10', 'ASUS VivoBook S10.jpg', 55000, 'Asus X540YA laptop has AMD E1-6010 processor, 4GB RAM, 1TB hard disk drive, 15.6-inch screen, HD resolution,', 'ASUS'),
(15, 'HP ProBook', 'HP ProBook.jpg', 123, 'Built with a 180° hinge, the 15.6\" ProBook 450 G7 Laptop from HP is full featured, thin, and light. Offering reliable and essential commercial features for businesses, the ProBook 450 G7 delivers automatic security solutions, powerful performance, and a long battery life to help you remain productive. It is powered by a 1.6 GHz Intel Core i5-10210U Quad-Core.', 'Lenevo'),
(16, 'HP ProBook i7', 'hp probook i7.jpg', 58000, ' The laptop has a 15.6 Inches (39.62 cm) display for your daily needs. This laptop is powered by Intel Core i7-7500U (7th Gen) processor.', 'HP'),
(17, 'Core i5 10th Gen', 'Core i5 10th Gen.jpg', 252000, 'Intel 10th Generation Core i5-10600K Processor having the base frequency of 4.10 GHz that can be reached as max turbo frequency at 4.80 GHz', 'Intel'),
(18, 'AMR Ryzen 5', 'AMD Ryzen 5.jpg', 50000, 'AMD Processor', 'AMD'),
(20, 'and ryzen 5 3600', 'AMD Ryzen 5.jpg', 30000, 'amd [prosdh dfkdshkgasl  ', 'AMD'),
(21, 'AMD ryzen 7', 'AMD ryzen 7.jpg', 24600, 'AMD Ryzen™ 7 3800XT is a competition class gaming & streaming processor. It comes with powerful hardware for high-refresh, & high-res gaming.', 'AMD'),
(22, 'AMD ryzen 9', 'AMD9.jpg', 29500, 'AMD Ryzen™ 9 5900X. 12 cores to power through gaming, streaming and more.', 'AMD'),
(23, 'INTEL i9 9900k', 'intel9.jpg', 49000, 'Experience exceptional performance, immersive entertainment and simple convenience with 9th Gen Intel Core processors. The i9 9900K processor extends all the capabilities that users love from previous generation.', 'Intel'),
(24, 'INTEL i7 10700k', 'intel i7.png', 26000, 'Intel 9th Generation Core i7-10700K Processor having the base frequency of 3.80 GHz that can be reached as max turbo frequency at 5.10 GHz.', 'Intel'),
(25, 'acer aspire 5 i7', 'acer aspire 5 i7.jpg', 45600, 'Intel® Core™ i7 (i7 - 8565U, 1.80 GHz, 8 MB) - 39.6 cm (15.6\") LED - 16:9 Full HD - LCD - ComfyView - NVIDIA® GeForce® MX250 Up to 2 GB - 8 GB DDR4', 'Acer'),
(26, 'ASUS vivobook s15', 'ASUS vivobook s15.jpg', 62000, 'The latest price of ASUS VivoBook S15 S531FA Laptop in Bangladesh is 62,000৳. You can buy the ASUS VivoBook S15 S531FA Laptop at best price.', 'ASUS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `userfname` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_role` enum('superadmin','customer','sales') NOT NULL,
  `user_avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userfname`, `username`, `user_email`, `user_pass`, `user_role`, `user_avatar`) VALUES
(1, 'Super Admin', 'superadmin', 'superadmin@domain.com', '123', 'superadmin', ''),
(7, 'khan kamrul islam', 'arat', 'khankamrulislammoni123@gmail.c', '987', 'customer', '97615844_1326556930874325_4795762801995939840_o.jpg'),
(9, 'arat', 'arat', 'arat', '1234', 'customer', '1.PNG'),
(10, 'Asif', 'ark', 'asifrkb@gmail.com', '1234', 'customer', 'ark-removebg-preview.png'),
(11, 'M H A Kabbo', 'kabbojsr', 'kabbojsr@gmail.com', '123', 'sales', 'user.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
