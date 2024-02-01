-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2023 at 01:51 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productImage`, `productPrice`, `categoryName`) VALUES
(1, 'TIN TUNA FILLET IN BROTH (GRAIN FREE) 70g', 'catTinTuna.jpg', 6, 'Cat'),
(2, 'TIN CHICKEN BREAST WITH HAM & VEGETABLE 156g', 'dogTinChicken.jpg', 11, 'Dog'),
(3, 'BIRD CAGE LUCIE (GREY) (SMALL)', 'birdCageLucie.jpg', 160, 'Bird'),
(4, '4 TIER WITH HOME & CRADLE- MODERN STYLE', 'catScratcher.jpg', 601, 'Cat'),
(9, 'ROAST CHICKEN VEGETABLE & GRAVY', 'roastedChicken.jpeg', 4, 'Dog'),
(7, 'TURTLE TANK - ARRICOT (BLUE)', 'turtleTank.jpg', 38, 'Reptile'),
(10, 'ASTRO GO LITE PET STROLLER', 'petStroller', 259, 'Dog'),
(11, 'DUCK 100g', 'burpDuck.jpeg', 4, 'Dog'),
(12, '(VETIQ) NUTRI VIT PLUS 70g', 'nutriPlus.jpeg', 41, 'Cat'),
(13, 'CAT TEASER-SPRING DOUBLE BUTTERFLIES', 'catButterflies.jpeg', 19, 'Cat'),
(14, 'WOODEN BIRD BRANCH (SMALL)', 'woodBranch', 29, 'Bird'),
(15, 'PRESTIGE PREMIUM AFRICAN PARROTS 1kg', 'africanParrot.jpeg', 42, 'Bird'),
(16, 'TREVI 4405 BIRD BATH', 'birdBath.jpeg', 43, 'Bird'),
(17, 'IGUANA BABY STICKS 53g', 'iguanaSticks.jpeg', 28, 'Reptile'),
(18, 'TURTLE STICK 500g', 'turtleSticks.jpeg', 16, 'Reptile'),
(19, 'TURTLE TANK - TORTUGAS', 'tortugas.jpeg', 99, 'Reptile'),
(20, 'MINERAL CHEW - BANANA SHAPE', 'mineralChew.jpeg', 11, 'Small Pet');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
