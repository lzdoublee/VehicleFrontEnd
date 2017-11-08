-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 02:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehiclesentalsystem`
--
CREATE DATABASE IF NOT EXISTS `vehiclesentalsystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vehiclesentalsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `Billing_ID` bigint(32) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  `vehicleID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`Billing_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookingID` bigint(11) NOT NULL AUTO_INCREMENT,
  `pickupDate` varchar(255) NOT NULL,
  `returnDate` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `vehicleID` bigint(32) NOT NULL,
  PRIMARY KEY (`bookingID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `pickupDate`, `returnDate`, `duration`, `vehicleID`) VALUES
(1, '01-11-17', '01-12-17', 31, 2),
(2, '15-12-17', '4-01-18', 40, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` bigint(32) NOT NULL AUTO_INCREMENT,
  `customerFirstName` varchar(255) NOT NULL,
  `customerLastName` varchar(255) NOT NULL,
  `customerAddressStreet` varchar(255) NOT NULL,
  `customerAddressArea` varchar(255) NOT NULL,
  `customerAddressCity` varchar(255) NOT NULL,
  `customerAddressCode` varchar(255) NOT NULL,
  `customerContactNumber` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerAccPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerFirstName`, `customerLastName`, `customerAddressStreet`, `customerAddressArea`, `customerAddressCity`, `customerAddressCode`, `customerContactNumber`, `customerEmail`, `customerAccPassword`) VALUES
(2, 'Lutho', 'Sanda', '6 Browning road', 'Observatory', 'Cape Town', '7925', '0730744292', 'Luthosanda@gmail.com', 'pass'),
(3, 'John', 'Wick', '10 Jan smuts road', 'City Center', 'Cape Town', '7925', '0837654321', 'wickJohn@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `vehicleID` bigint(32) NOT NULL AUTO_INCREMENT,
  `vehicleRegNum` varchar(255) NOT NULL,
  `vehicleMake` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  PRIMARY KEY (`vehicleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicleID`, `vehicleRegNum`, `vehicleMake`, `availability`) VALUES
(1, 'SKZ-373-GP', 'Sedan', 1),
(2, 'FKS-311-GP', 'SUV', 1),
(3, 'CA-457-890', 'Bakkie', 1),
(5, 'CA-000-123', 'LandCruiser', 1),
(6, 'BCS-499-023', 'Sedan', 1),
(7, 'GHK-666-089', 'Limousine', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
