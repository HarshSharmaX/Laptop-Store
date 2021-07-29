-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2020 at 02:48 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptopstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'jatin', 'jatinmax15@gmail.com', 'when will acer nitro 7 be available'),
(2, 'manish', 'mani65@gmail.com', 'when will products price drop a little bit');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `amazon` int(11) NOT NULL,
  `flipkart` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `images`, `amazon`, `flipkart`) VALUES
(1, 'Dell XPS 15', 185000, 'img/1.jpg', 187999, 186999),
(2, 'Dell XPS 13', 140000, 'img/2.jpg', 139000, 140990),
(3, 'Huawei Matebook 13', 72000, 'img/3.jpg', 75000, 70000),
(4, 'HP Elite Dragonfly', 200000, 'img/4.jpg', 200999, 199999),
(5, 'HP Envy x360 13', 83000, 'img/5.jpg', 81000, 84000),
(6, 'HP Spectre x360', 146000, 'img/6.jpg', 142000, 147000),
(7, 'Asus ROG Zephyrus G14', 110000, 'img/7.jpg', 112000, 111000),
(8, 'Asus TUF A15', 71000, 'img/8.jpg', 72000, 74000),
(9, 'Asus Chromebook Flip', 57000, 'img/9.jpg', 59000, 60000),
(10, 'Asus VivoBook S15', 53000, 'img/10.jpg', 51000, 55000),
(11, 'Acer Swift 3', 51990, 'img/11.jpg', 53999, 52990),
(12, 'Acer ConceptD 7', 99000, 'img/19.jpg', 100000, 100999),
(13, 'Apple MacBook Pro', 174000, 'img/13.jpg', 175000, 174999),
(14, 'Apple MacBook Air', 99999, 'img/14.jpg', 98000, 101000),
(15, 'Google Pixelbook GO', 116000, 'img/15.jpg', 115000, 160000),
(16, 'Lenovo Yoga C930', 121000, 'img/16.jpg', 124000, 125000),
(17, 'Lenovo Legion Y740', 143000, 'img/17.jpg', 145000, 146000),
(18, 'Microsoft Surface Laptop 3', 110800, 'img/18.jpg', 111000, 110900),
(19, 'Acer Aspire 5', 55000, 'img/30.jpg', 53000, 57000),
(20, 'Acer Nitro 5', 67000, 'img/31.jpg', 69000, 70000),
(21, 'Dell Inspiration 15 3000', 27000, 'img/32.jpg', 30000, 28000),
(22, 'Dell Vostro 5401', 70000, 'img/33.jpg', 71000, 70999),
(23, 'HP Pavilion x360', 60000, 'img/34.jpg', 62000, 59000),
(24, 'Lenovo Ideapad 320', 82000, 'img/35.jpg', 83000, 83999),
(25, 'Lenovo Thinkpad L460', 45000, 'img/36.jpg', 43000, 44999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(2, 'varun', 'vk14@gmail.com', '4c4bee913b6f0c60d95b19349c9edb00', '9154789630', 'delhi', 'st.36 shiva enclave'),
(3, 'jatin', 'jatinmax14@gmail.com', 'c5aa3124b1adad080927ce4d144c6b33', '9762541303', 'delhi', 'st.69 maharaja vihar'),
(4, 'nitin', 'nitinhun@gmail.com', 'bbad900e63b410d0e85bfa715b2f49d0', '7895631892', 'mumbai', 'apt-15 santa cruze'),
(8, 'manish', 'mani65@gmail.com', '145c07c7c8f1bd2def61500ccec6dc11', '7623489578', 'kolkata', 'h/no.54 havra bridge'),
(9, 'mohit', 'mohit@gmail.com', '5ebbb8c6dd4e31d78c2eadf6f5094143', '8546982896', 'delhi', '478 my city'),
(10, 'saurav', 'saurav1@gmail.com', '0d8a1c1d398413df2a1faaeb59578209', '9910258956', 'delhi', 'abcdfrgh'),
(11, 'manish', 'manish@gmail.com', '8a0ac37f964a88d95c96b626aeebcaff', '9911632147', 'delhi', 'dgduujdh');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(2, 2, 5, 'Confirmed'),
(3, 2, 1, 'Confirmed'),
(4, 2, 12, 'Added to cart'),
(5, 2, 5, 'Added to cart'),
(14, 3, 2, 'Confirmed'),
(15, 8, 12, 'Added to cart'),
(16, 8, 17, 'Added to cart'),
(27, 9, 4, 'Confirmed'),
(29, 11, 1, 'Added to cart');

-- --------------------------------------------------------

--
-- Table structure for table `users_items_compare`
--

DROP TABLE IF EXISTS `users_items_compare`;
CREATE TABLE IF NOT EXISTS `users_items_compare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `status` enum('Added to Compare') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`,`items_id`),
  KEY `items_id` (`items_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items_compare`
--

INSERT INTO `users_items_compare` (`id`, `users_id`, `items_id`, `status`) VALUES
(6, 9, 5, 'Added to Compare'),
(7, 9, 13, 'Added to Compare'),
(8, 11, 1, 'Added to Compare'),
(9, 11, 2, 'Added to Compare');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `users_items_compare`
--
ALTER TABLE `users_items_compare`
  ADD CONSTRAINT `users_items_compare_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_compare_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
