-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2014 at 04:19 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kyakin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  `ItemCount` int(11) NOT NULL DEFAULT '1',
  `Price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `currentuser`
--

CREATE TABLE IF NOT EXISTS `currentuser` (
  `Realname` text NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentuser`
--

INSERT INTO `currentuser` (`Realname`, `Address`, `Contact`, `Email`) VALUES
('Azizulaimran Bin Kamsol', '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '0172792972', 'azizulaimran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `InvoiceDate` date NOT NULL,
  `Product` text NOT NULL,
  `Price` decimal(15,2) NOT NULL,
  `Count` int(11) NOT NULL,
  `TotalPrice` decimal(15,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer` text NOT NULL,
  `Product` text NOT NULL,
  `Price` decimal(15,2) NOT NULL,
  `Count` int(11) NOT NULL,
  `Address` text NOT NULL,
  `OrderDate` date NOT NULL,
  `TotalPrice` decimal(15,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Customer`, `Product`, `Price`, `Count`, `Address`, `OrderDate`, `TotalPrice`) VALUES
(54, 'Azizulaimran Bin Kamsol', 'Americana Dining Room Oak Side Chair', '120.00', 2, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '240.00'),
(55, 'Azizulaimran Bin Kamsol', 'Craftmaster Living Room Loveseat', '450.00', 3, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '1350.00'),
(56, 'Azizulaimran Bin Kamsol', 'Best Home Furnishings Living Room Chair', '400.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '400.00'),
(57, 'Azizulaimran Bin Kamsol', 'Amisco Bedroom Bridge Queen Platform Bed', '350.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '350.00'),
(58, 'Azizulaimran Bin Kamsol', 'Best Home Furnishings Living Room Chair', '400.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '400.00'),
(59, 'Azizulaimran Bin Kamsol', 'Coast to Coast Imports Living Room Bookcase', '300.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '300.00'),
(60, 'Azizulaimran Bin Kamsol', 'Amisco Bedroom Bridge Queen Platform Bed', '350.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '350.00'),
(61, 'Azizulaimran Bin Kamsol', 'Americana Dining Room Oak Side Chair', '120.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-10', '120.00'),
(62, 'Azizulaimran Bin Kamsol', 'Best Home Furnishings Living Room Chair', '400.00', 1, '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '2014-09-16', '400.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` varchar(11) NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Category` text NOT NULL,
  `Price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Product`, `Description`, `Category`, `Price`) VALUES
('BR001', 'Amisco Bedroom Billboard Queen Platform Bed', 'The marvelous bed', 'BEDROOM', '200.00'),
('BR002', 'Amisco Bedroom Bridge Queen Platform Bed', '', 'BEDROOM', '350.00'),
('BR003', 'Amisco Bedroom Full Headboard', '', 'BEDROOM', '300.00'),
('BR004', 'Amisco Youth Bedroom Twin Headboard', '', 'BEDROOM', '900.00'),
('BR005', 'Leggett & Platt Bedroom Belmont Twin Headboard', '', 'BEDROOM', '2000.00'),
('BR006', 'Leggett & Platt Bedroom Sycamore Queen Headboard', '', 'BEDROOM', '1500.00'),
('BR007', 'Prime Design Youth Bedroom Twin Headboard With Toybox', '', 'BEDROOM', '900.00'),
('BR008', 'Signature Design Bedroom King Panel Bed', '', 'BEDROOM', '1000.00'),
('BR009', 'Signature Design Bedroom Twin Panel Headboard', '', 'BEDROOM', '1200.00'),
('BR010', 'Signature Design Youth Bedroom Twin Bunk Bed', '', 'BEDROOM', '800.00'),
('DR001', 'Americana Dining Room Oak Side Chair', '', 'DINING ROOM', '120.00'),
('DR002', 'Bassett Dining Room Sideboard', '', 'DINING ROOM', '1200.00'),
('DR003', 'Home Collection Dining Room Morton Side Chair', '', 'DINING ROOM', '130.00'),
('DR004', 'New Pacific Direct Dining Room Side Chair Cream', '', 'DINING ROOM', '150.00'),
('DR005', 'New Pacific Direct Dining Room Side Chair Pumpkin', '', 'DINING ROOM', '200.00'),
('DR006', 'Nuevo Dining Room Versailles Dining Table', '', 'DINING ROOM', '800.00'),
('DR007', 'Signature Design Dining Room 5-Piece Counter Height Set', '', 'DINING ROOM', '1200.00'),
('DR008', 'Signature Design Dining Room 6-Piece Dining Package', '', 'DINING ROOM', '1400.00'),
('DR009', 'Signature Design Dining Room 6-Piece Dining Packaged', '', 'DINING ROOM', '1600.00'),
('DR010', 'Signature Design Dining Room 6-Piece Dining Packaged', '', 'DINING ROOM', '1200.00'),
('LR001', 'Best Home Furnishings Living Room Chair', '', 'LIVING ROOM', '400.00'),
('LR002', 'Coast to Coast Imports Living Room Bookcase', '', 'LIVING ROOM', '300.00'),
('LR003', 'Coast to Coast Imports Living Room Rustic Cabinet', '', 'LIVING ROOM', '500.00'),
('LR004', 'Corinthian Living Room Chaise Exclusive', '', 'LIVING ROOM', '450.00'),
('LR005', 'Corinthian Living Room Loveseat', '', 'LIVING ROOM', '480.00'),
('LR006', 'Corinthian Living Room Loveseatt', '', 'LIVING ROOM', '400.00'),
('LR007', 'Corinthian Living Room Exclusive', '', 'LIVING ROOM', '560.00'),
('LR008', 'Craftmaster Living Room Loveseat', '', 'LIVING ROOM', '450.00'),
('LR009', 'Fusion Living Room Chaise Exclusive', '', 'LIVING ROOM', '250.00'),
('LR010', 'HM Richards Living Room Chair and a Half', '', 'LIVING ROOM', '600.00'),
('OF001', 'Modern Furniture Exclusive Bench\r\n', '', 'OUTDOOR FURNITURE', '500.00'),
('OF002', 'Corinthian Outdoor Loveseat Bench', '', 'OUTDOOR FURNITURE', '200.00'),
('OF003', 'Jofran Outdoor Modern Storage Bench', '', 'OUTDOOR FURNITURE', '1000.00'),
('OF004', 'Signature Design Sectional Bench', '', 'OUTDOOR FURNITURE', '150.00'),
('OF005', 'La-Z-Boy Outdoor Sectional Bench', '', 'OUTDOOR FURNITURE', '200.00'),
('OF006', 'Homestretch Outdoor Sectional Bench', '', 'OUTDOOR FURNITURE', '90.00'),
('OF007', 'Korean Style Outdoor Exclusive Chair', '', 'OUTDOOR FURNITURE', '100.00'),
('OF008', 'Harmonic Design Outdoor Bench', '', 'OUTDOOR FURNITURE', '900.00'),
('OF009', 'Cool and Steady Outdoor Bench', '', 'OUTDOOR FURNITURE', '800.00'),
('OF010', 'Old School Outdoor Style Bench', '', 'OUTDOOR FURNITURE', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` char(20) NOT NULL,
  `Password` text NOT NULL,
  `Role` text NOT NULL,
  `Realname` text NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Role`, `Realname`, `Address`, `Contact`, `Email`) VALUES
('admin', 'admin', 'Administrator', 'Alex Tan', '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '0172792900', 'jijol94@gmail.com'),
('ieyan', '123', 'User', 'Azizulaimran Bin Kamsol', '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '0172792972', 'azizulaimran@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
