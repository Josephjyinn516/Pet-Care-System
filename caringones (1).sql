-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2023 at 03:01 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caringones`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`adminEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminEmail`, `adminPassword`) VALUES
('caringones@staff.my', 'caringones123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointmentID` int NOT NULL AUTO_INCREMENT,
  `cusName` varchar(255) NOT NULL,
  `cusHP` varchar(255) NOT NULL,
  `cusAddress` varchar(255) NOT NULL,
  `cusEmail` varchar(255) NOT NULL,
  `petName` varchar(255) NOT NULL,
  `petSpecies` varchar(255) NOT NULL,
  `petBreed` varchar(255) NOT NULL,
  `petGender` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `serviceType` varchar(255) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sessionEmail` varchar(255) NOT NULL,
  PRIMARY KEY (`appointmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `cusName`, `cusHP`, `cusAddress`, `cusEmail`, `petName`, `petSpecies`, `petBreed`, `petGender`, `Location`, `serviceType`, `appointmentDate`, `appointmentTime`, `status`, `sessionEmail`) VALUES
(6, 'Beatrice', '0179563838', 'OG Heights', 'beatrice@gmail.com', 'Johnny', 'Dog', 'German Shepherd', 'Male', 'Kuala Lumpur', 'Grooming', '2023-05-11', '3.00 p.m. - 4.00 p.m.', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Cat'),
(2, 'Dog'),
(8, 'Bird');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cusEmail` varchar(255) NOT NULL,
  `cusName` varchar(255) NOT NULL,
  `cusIC` varchar(255) NOT NULL,
  `cusAge` int NOT NULL,
  `cusGender` varchar(255) NOT NULL,
  `cusHP` varchar(255) NOT NULL,
  `cusPassword` varchar(255) NOT NULL,
  `petName` varchar(255) NOT NULL,
  `petSpecies` varchar(255) NOT NULL,
  `petBreed` varchar(255) NOT NULL,
  `petGender` varchar(255) NOT NULL,
  `petColour` varchar(255) NOT NULL,
  PRIMARY KEY (`cusEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusEmail`, `cusName`, `cusIC`, `cusAge`, `cusGender`, `cusHP`, `cusPassword`, `petName`, `petSpecies`, `petBreed`, `petGender`, `petColour`) VALUES
('hongkai@gmail.com', 'HongKong', '', 0, '', '', '1234', '', '', '', '', ''),
('tony@gmail.com', 'Kong', '030516', 23, 'Female', '01234456', 'jamie', 'Johnny', 'Dog', 'German Shepherd', 'Male', 'Brown'),
('jamie@gmail.com', 'Kong', '000407', 30, 'Female', '0169238383', 'jamie', 'Cake', 'Dog', 'German Shepherd', 'Female', 'White'),
('kongjunhinn@gmail.com', 'Kong', '030516060803', 20, 'Male', '', 'joseph', '', '', '', '', ''),
('beatrice@gmail.com', 'Beatrice', '030516060803', 20, 'Female', '0179563838', 'beatrice123', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `docEmail` varchar(255) NOT NULL,
  `docName` varchar(255) NOT NULL,
  `docIC` varchar(255) NOT NULL,
  `docAge` varchar(255) NOT NULL,
  `docGender` varchar(255) NOT NULL,
  `docHP` varchar(255) NOT NULL,
  `docPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`docEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docEmail`, `docName`, `docIC`, `docAge`, `docGender`, `docHP`, `docPassword`) VALUES
('Alyssa@gov.my', 'Alyssa', '1234567', '27', 'Female', '', '1234'),
('Aaron@gov.my', 'Aaron', '', '', '', '', '1234'),
('arial@gov.my', 'Arial', '', '', '', '', '1234'),
('beatrice@gov.my', 'Beatrice', '030516060803', '27', 'Female', '0199855647', 'beatrice123D');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productPrice` int NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productImage`, `productPrice`, `categoryName`) VALUES
(1, 'TIN TUNA FILLET IN BROTH (GRAIN FREE) 70g', 'catTinTuna.jpg', 6, 'Cat'),
(2, 'TIN CHICKEN BREAST WITH HAM & VEGETABLE 156g', 'dogTinChicken.jpg', 11, 'Dog'),
(3, 'BIRD CAGE LUCIE (GREY) (SMALL)', 'birdCageLucie.jpg', 160, 'Bird'),
(4, '4 TIER WITH HOME & CRADLE- MODERN STYLE', 'catScratcher.jpg', 601, 'Cat');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingorder`
--

DROP TABLE IF EXISTS `shoppingorder`;
CREATE TABLE IF NOT EXISTS `shoppingorder` (
  `cartID` int NOT NULL AUTO_INCREMENT,
  `productID` int NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `orderStatus` int NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `shoppingorder`
--

INSERT INTO `shoppingorder` (`cartID`, `productID`, `emailAddress`, `orderStatus`) VALUES
(27, 1, 'beatrice@gmail.com', 2),
(29, 3, 'beatrice@gmail.com', 2),
(30, 3, 'beatrice@gmail.com', 3),
(31, 1, 'kongjunhinn@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
