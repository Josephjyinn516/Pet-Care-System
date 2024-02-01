-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2023 at 04:25 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointmentID` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `cusName`, `cusHP`, `cusAddress`, `cusEmail`, `petName`, `petSpecies`, `petBreed`, `petGender`, `Location`, `serviceType`, `appointmentDate`, `appointmentTime`, `status`, `sessionEmail`) VALUES
(1, 'Marcus', '+6018-2322551', 'No. 1309, Kuala Lumpur', 'marcus@gmail.com', 'Sesame', 'Cat', '-', 'Male', 'Kuala Lumpur', 'Flea Removal', '2023-05-20', '2.00 a.m. - 3.00 a.m.', '0', 'Marcus@gmail.com'),
(2, 'Elijah', '+6019-32543711', 'No. 1308, Seremban', 'elijah@gmail.com', 'Doggy', 'Dog', '-', 'Male', 'Seremban', 'Grooming', '2023-05-11', '3.00 a.m. - 4.00 a.m.', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(255) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
  `cusAge` int(11) NOT NULL,
  `cusGender` varchar(255) NOT NULL,
  `cusHP` varchar(255) NOT NULL,
  `cusPassword` varchar(255) NOT NULL,
  `petName` varchar(255) NOT NULL,
  `petSpecies` varchar(255) NOT NULL,
  `petBreed` varchar(255) NOT NULL,
  `petGender` varchar(255) NOT NULL,
  `petColour` varchar(255) NOT NULL,
  PRIMARY KEY (`cusEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `productID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `checkOutStatus` int(11) NOT NULL,
  `pickupStatus` int(11) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoppingorder`
--

INSERT INTO `shoppingorder` (`cartID`, `productID`, `emailAddress`, `quantity`, `checkOutStatus`, `pickupStatus`) VALUES
(1, 4, 'abc8017@mail.com', 1, 0, 0),
(2, 1, 'abc8017@mail.com', 1, 0, 0),
(3, 4, 'abc8017@mail.com', 1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
