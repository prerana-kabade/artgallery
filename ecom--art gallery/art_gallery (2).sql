-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2021 at 03:34 AM
-- Server version: 8.0.18
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
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

DROP TABLE IF EXISTS `artwork`;
CREATE TABLE IF NOT EXISTS `artwork` (
  `paint_no` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `painting` varchar(100) NOT NULL,
  `artist_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`paint_no`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`paint_no`, `art_id`, `cate_id`, `title`, `painting`, `artist_name`, `price`) VALUES
(1, 1, 2, 'LADY', '', 'abc', 1500),
(2, 1, 2, 'MUSICAL INSTRUMENTS', '', '', 2300),
(3, 1, 2, 'VILLA', '', '', 1200),
(29, 2, 4, 'Abstract Women', './images/picasso.jpg', 'Pablo Picasso', 1500),
(5, 1, 2, 'CAT', '', '', 2000),
(6, 1, 2, 'MANDALA ART', '', '', 1900),
(7, 1, 2, 'BAMBI PRINT', '', '', 1800),
(8, 1, 2, 'ABSTRACT NATURE', '', '', 1180),
(9, 1, 1, 'FOGGY STROLE', './images/op1.jpg', '', 1500),
(10, 1, 1, 'INTRIGUING', './images/op2.jpg', '', 1300),
(11, 1, 1, '2 PEACOCKS', './images/op6.jpg', '', 1500),
(12, 1, 1, 'NATURE', './images/op9.jpg', '', 1400),
(13, 1, 1, 'GARDERN CAFE', './images/op8.jpg', '', 2000),
(14, 1, 1, 'BUDDHA OIL PAINTING', './images/op3.jpg', '', 1900),
(15, 1, 1, 'HOT TREE OIL PAINTING', './images/op4.jpg', '', 2300),
(16, 1, 1, 'PARIS EIFFEL TOWER', './images/op5.jpg', '', 1800),
(17, 1, 1, 'DANCE OF ANGELS', './images/op7.jpeg', '', 1300),
(18, 1, 1, '3 AFRICAN MODELS', './images/p7.jpg', '', 2300),
(19, 1, 1, 'FARM HOUSE', '/images/david5.jpg', '', 2000),
(20, 1, 8, 'ABDUL KALAM', './images/d.jpg', '', 1500),
(21, 1, 8, 'A WOMAN', './images/ravi6.jpg', 'Raja Ravi Verma', 2300),
(22, 1, 8, ' WOMAN 2', './images/ravi3.jpg', 'Raja Ravi Verma', 1200),
(23, 1, 3, 'SWEET HOME', './images/david2.jpg', '', 2300),
(24, 1, 3, 'LION', './images/p4.jpg', '', 1200),
(25, 1, 3, 'HORSE', './images/p2.jpg', '', 2000),
(26, 1, 3, 'A DREAMLAND', './images/david4.jpg', '', 1900),
(27, 1, 3, 'BUTTERFLY', './images/p3.jpg', '', 1800),
(28, 1, 3, 'BUDDHA RELICS', './images/p5.jpg', '', 11800),
(30, 2, 4, 'Gun Man', './images/picasso1.jpg', 'Pablo Picasso', 1400),
(31, 2, 4, 'Abstract Lady', './images/picasso3.jpg', 'Pablo Picasso', 2000),
(32, 2, 4, 'Abstract Girl', './images/picasso4.jpg', 'Pablo Picasso', 1900),
(33, 2, 4, '2-faced Women', './images/picasso7.jpg', 'Pablo Picasso', 1800),
(34, 2, 5, 'WILD WOOD', './images/david1.jpg', 'David Hockney', 1500),
(35, 2, 5, 'OLD COUPLE', './images/david2.jpg', 'David Hockney', 1300),
(36, 2, 5, 'BEDECKED', './images/david3.jpg', 'DavidHockney', 1500),
(37, 2, 5, 'ROUTINE', './images/david4.jpg', 'David HOCKNEY', 1400),
(38, 2, 5, 'FARM HOUSE', './images/david5.jpg', 'David Hockney', 2000),
(39, 2, 5, 'POOL HOUSE', './images/david6.jpeg', 'David Hockney', 1900),
(40, 2, 5, 'DAILY BASIS 1', './images/david7.jpg', 'David Hockney', 2300),
(41, 2, 6, 'LAKE SIDE', './images/ravi1.jpg', 'Ravi Verma', 1500),
(42, 2, 6, 'FOREST SIDE', './images/ravi2.jpg', 'Ravi Verma', 1300),
(43, 2, 6, 'POSE', './images/ravi3.jpg', 'Ravi Verma', 1500),
(44, 2, 6, 'PEACOCK ', './images/ravi4.jpg', 'Ravi Verma', 1400),
(45, 2, 6, 'GOD', './images/ravi5.jpg', 'Ravi Verma', 2000),
(46, 2, 6, 'WOMEN', './images/ravi6.jpg', 'Ravi Verma', 1900),
(47, 2, 6, 'LADY WITH SWAN', './images/ravi7.jpg', 'Ravi Verma', 1900),
(48, 2, 7, 'FIGURES AND FLOWERS', './images/arpita1.jpg', 'arpita singh', 1550),
(49, 2, 7, 'WHATEVER IS HERE ', './images/arpita2.jpg', 'arpita singh', 1300),
(50, 2, 7, 'THE NEWYORK TIMES ', './images/arpita3.jpg', 'arpita singh', 1500),
(51, 2, 7, 'SPRING ART AUCTION ', './images/arpita4.jpg', 'arpita singh', 1400),
(52, 2, 7, 'SHOW ON ARTSY', './images/arpita5.jpg', 'arpita singh', 2000),
(53, 2, 7, 'FIGURES AND FLOWERS', './images/arpita1.jpg', 'arpita singh', 1550),
(54, 2, 7, 'WHATEVER IS HERE ', './images/arpita2.jpg', 'arpita singh', 1300),
(55, 2, 7, 'THE NEWYORK TIMES ', './images/arpita3.jpg', 'arpita singh', 1500),
(56, 2, 7, 'SPRING ART AUCTION ', './images/arpita4.jpg', 'arpita singh', 1400),
(59, 1, 3, '3-AFRICAN MODEL', './images/p7.jpg', '', 2300),
(58, 1, 2, 'BUDDHA', './images/p5.jpg', '', 2000),
(57, 1, 1, 'BALLERINA BALLET DANCER', './images/p1.jpg', '', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `art_collection`
--

DROP TABLE IF EXISTS `art_collection`;
CREATE TABLE IF NOT EXISTS `art_collection` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`art_id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `art_collection`
--

INSERT INTO `art_collection` (`art_id`, `name`) VALUES
(1, 'Painting'),
(2, 'Artist');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  PRIMARY KEY (`cate_id`,`cate_name`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `art_id`, `cate_name`) VALUES
(1, 1, 'Oil Painting'),
(2, 1, 'Abstract'),
(3, 1, 'Pastel'),
(4, 2, 'Pablo Picasso'),
(5, 2, 'David Hockney'),
(6, 2, 'Ravi Raja Verma'),
(7, 2, 'Arpita Singh'),
(8, 1, 'portiature');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL,
  `paint_no` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `paint_no`, `title`, `qty`, `price`) VALUES
(1, 11, '2 PEACOCKS', 3, 1500),
(2, 35, 'OLD COUPLE', 2, 1300),
(3, 58, 'BUDDHA', 3, 2000),
(4, 24, 'LION', 3, 1200),
(5, 57, 'BALLERINA BALLET DANCER', 2, 1500),
(6, 24, 'LION', 2, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(600) NOT NULL,
  `payment mode` varchar(100) NOT NULL,
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_id`, `fullname`, `email`, `address`, `payment mode`) VALUES
(1, 'Ram', 'ram@gmail.com', 'rameshwara', 'cod'),
(2, 'shiv', 'shiv@yahoo.mail', 'Karnataka', 'COD'),
(3, 'abc', 'abcd@gmail.com', 'abcdefg', 'COD'),
(4, 'Rama', 'rama@gmail.com', 'bangalore', 'COD'),
(5, 'Rama', 'rama@gmail.com', 'Rameshwara', 'COD'),
(6, 'shiv', 'shiv@yahoo.mail', 'Rameshwara', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(6) NOT NULL,
  `confirmpassword` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `fullname`, `email`, `username`, `password`, `confirmpassword`) VALUES
(1, 'Rakshita', 'rakshiknaik211@gmail.com', 'rakshu', 'R@kshu', 'R@kshu'),
(2, 'Raman', 'ram@gmail.com', 'Ramasa', 'R@mas1', 'R@mas1'),
(3, 'shiv', 'shiv@yahoo.mail', 'abcdef', 'Shiv@3', 'Shiv@3'),
(9, 'Mahesh', 'mpag@gmail.com', 'mahesH', 'm@hesh', 'm@hesh'),
(10, 'Rama', 'rama@gmail.com', 'Ramare', 'R@ma11', 'R@ma11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
