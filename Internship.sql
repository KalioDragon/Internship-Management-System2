-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 08:32 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `Allocation`
--

CREATE TABLE IF NOT EXISTS `Allocation` (
  `Stud_id` int(10) NOT NULL,
  `A_id` int(10) NOT NULL,
  `M_id` int(10) NOT NULL,
  `Allo_id` int(11) NOT NULL AUTO_INCREMENT,
  `R_id` int(10) NOT NULL,
  PRIMARY KEY (`Allo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Allocation`
--

INSERT INTO `Allocation` (`Stud_id`, `A_id`, `M_id`, `Allo_id`, `R_id`) VALUES
(1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `AreaOI`
--

CREATE TABLE IF NOT EXISTS `AreaOI` (
  `A_id` int(10) NOT NULL AUTO_INCREMENT,
  `Field_name` varchar(30) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `AreaOI`
--

INSERT INTO `AreaOI` (`A_id`, `Field_name`) VALUES
(1, 'Internet of things');

-- --------------------------------------------------------

--
-- Table structure for table `College`
--

CREATE TABLE IF NOT EXISTS `College` (
  `Clge_id` int(11) NOT NULL AUTO_INCREMENT,
  `Clge_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Clge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `College`
--

INSERT INTO `College` (`Clge_id`, `Clge_name`) VALUES
(1, 'PICT Pune'),
(2, 'Sinhgad College of Engineering'),
(3, 'Zeal College of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE IF NOT EXISTS `Company` (
  `C_id` int(10) NOT NULL AUTO_INCREMENT,
  `C_name` varchar(30) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Company`
--

INSERT INTO `Company` (`C_id`, `C_name`) VALUES
(1, 'Cognizent'),
(2, 'IBM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE IF NOT EXISTS `Manager` (
  `Man_id` int(10) NOT NULL AUTO_INCREMENT,
  `Man_name` varchar(20) NOT NULL,
  `C_id` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`Man_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`Man_id`, `Man_name`, `C_id`, `Email`, `pass`) VALUES
(1, 'Pranay Chandale', 0, 'pranaychandale@gmail.com', 'pranay@123');

-- --------------------------------------------------------

--
-- Table structure for table `Request`
--

CREATE TABLE IF NOT EXISTS `Request` (
  `R_id` int(10) NOT NULL AUTO_INCREMENT,
  `Stud_id` int(10) NOT NULL,
  `Stud_name` varchar(20) NOT NULL,
  `Status` varchar(3) NOT NULL,
  PRIMARY KEY (`R_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `Stud_id` int(10) NOT NULL AUTO_INCREMENT,
  `Stud_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mob` bigint(10) NOT NULL,
  `Clg_id` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`Stud_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Stud_id`, `Stud_name`, `Email`, `Mob`, `Clg_id`, `pass`) VALUES
(1, 'Mahesh Jadhav', 'maheshjadhav108@gmail.com', 8796817143, 1, 'mahesh@123'),
(2, 'Bhumi Kamble', 'bhumikamble@gmail.com', 8796827155, 1, 'bhumi@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
