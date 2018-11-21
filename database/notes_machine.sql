-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 04:36 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notes_machine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'devgoel.bd@gmail.com', 'passwordiscool');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `trade_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `cover_image` varchar(100) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `subject`, `trade_id`, `sem_id`, `cover_image`, `link`) VALUES
(15, 'RD Sharma II', 'Maths', 6, 2, 'books/covers/Incredible Mixed Wallpaper (26).jpg', 'books/books/Syllabus-Scheme-of-ICD-3rd-Semester.pdf'),
(16, 'rd sharma', 'maths', 6, 2, 'books/covers/big_2d2abd7584af78f4aadb6ad2c177038558de1730.jpg', 'books/books/ICD-Syllabus-Ist-SEM.docx');

-- --------------------------------------------------------

--
-- Table structure for table `edit_page`
--

CREATE TABLE IF NOT EXISTS `edit_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `about` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_number` varchar(100) NOT NULL,
  `trade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `sem_number`, `trade_id`) VALUES
(2, 'sem_1', 1),
(3, 'sem_2', 1),
(4, 'sem_3', 1),
(5, 'sem_4', 1),
(6, 'sem_5', 1),
(7, 'sem_6', 1),
(8, 'sem_1', 2),
(9, 'sem_2', 2),
(10, 'sem_3', 2),
(11, 'sem_4', 2),
(12, 'sem_5', 2),
(13, 'sem_6', 2),
(14, 'sem_1', 3),
(15, 'sem_2', 3),
(16, 'sem_3', 3),
(17, 'sem_4', 3),
(18, 'sem_5', 3),
(19, 'sem_6', 3),
(20, 'sem_1', 4),
(21, 'sem_2', 4),
(22, 'sem_3', 4),
(23, 'sem_4', 4),
(24, 'sem_5', 4),
(25, 'sem_6', 4),
(26, 'sem_1', 5),
(27, 'sem_2', 5),
(28, 'sem_3', 5),
(29, 'sem_4', 5),
(30, 'sem_6', 5),
(31, 'sem_1', 6),
(32, 'sem_2', 6),
(33, 'sem_3', 6),
(34, 'sem_4', 6),
(35, 'sem_5', 6),
(36, 'sem_6', 6),
(37, 'sem_1', 7),
(38, 'sem_2', 7),
(39, 'sem_3', 7),
(40, 'sem_4', 7),
(41, 'sem_5', 7),
(42, 'sem_6', 7),
(43, 'sem_1', 8),
(44, 'sem_2', 8),
(45, 'sem_3', 8),
(46, 'sem_4', 8),
(47, 'sem_5', 8),
(48, 'sem_6', 8),
(49, 'sem_1', 9),
(50, 'sem_2', 9),
(51, 'sem_3', 9),
(52, 'sem_4', 9),
(53, 'sem_5', 9),
(54, 'sem_5', 9),
(55, 'sem_1', 10),
(56, 'sem_2', 10),
(57, 'sem_3', 10),
(58, 'sem_4', 10),
(59, 'sem_5', 10),
(60, 'sem_5', 10),
(61, 'sem_6', 10),
(62, 'sem_1', 11),
(63, 'sem_2', 11),
(64, 'sem_3', 11),
(65, 'sem_4', 11),
(66, 'sem_5', 11),
(67, 'sem_6', 11),
(68, 'sem_1', 12),
(69, 'sem_2', 12),
(70, 'sem_3', 12),
(71, 'sem_4', 12),
(72, 'sem_5', 12),
(73, 'sem_6', 12),
(74, 'sem_1', 13),
(75, 'sem_2', 13),
(76, 'sem_3', 13),
(77, 'sem_4', 13),
(78, 'sem_5', 13),
(79, 'sem_6', 13);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password2` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile_number` text NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `first_name`, `last_name`, `username`, `password`, `password2`, `dob`, `gender`, `mobile_number`, `image`) VALUES
(2, 'Bhaskar', 'Dev', 'bhaskardevgoel', 'passwordiscool', '', '10/Dec/1999', 'Male', '9780940895', 'images/IMG_20161120_164303.jpg'),
(3, 'Rajan', 'Garg', 'rajan', 'qwertyuiop', '', '16/June/1997', 'Male', '7696290454', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE IF NOT EXISTS `trade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `trade_name`) VALUES
(1, 'CAC'),
(2, 'CAF'),
(3, 'CFF'),
(4, 'CTD'),
(5, 'CWG'),
(6, 'CDE'),
(7, 'CSME'),
(8, 'CTV'),
(9, 'CEN'),
(10, 'CSMM'),
(11, 'CPT'),
(12, 'CPF'),
(13, 'CBM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
