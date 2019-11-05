-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2019 at 07:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('fsdf43vdz', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `saved_as` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `thumbname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `author`, `saved_as`, `type`, `thumbname`) VALUES
(43, 'Titile', 'Authoe', '741373bdd355be168b472bf525f4d629_maths2.pdf', 'e', 'maths2'),
(42, 'Titile', 'Authoe', 'b66063a0e6775f6c7053cdf5e3febbe3_maths2.pdf', 'e', 'maths2'),
(41, 'Titile', 'Authoe', '837abf8a5c2f4fbfb2001c22450a8664_physics2.pdf', 'e', 'physics2'),
(40, 'Maths2', 'Amths', 'ba3aef03dfb3d546fc5e43002b820d3e_maths2.pdf', 'e', 'maths2'),
(39, 'Chemistry', 'Author', '32d2097800103fff776f474e0f0465b3_maths1.pdf', 'e', 'maths1'),
(38, 'physics', 'Author', '57bd4e0df74a549cd36eb5224f0cfd5a_labphysics.pdf', 'e', 'labphysics'),
(37, 'upload', 'author', '1598771a8890da3d70bede23db8a3312_labchem.pdf', 'e', 'labchem'),
(36, 'permutation', 'combination', '199201289f66522a2e8c887711b81a8d_kaleidoscope.pdf', 'e', 'kaleidoscope'),
(35, 'Title', 'Amzaon', 'aa60193c3692b9f1dedc2d4cd949b677_flamingo.pdf', 'e', 'flamingo'),
(34, 'Chemistry', '2', '6ebe51da6176a4e17b38a380c7ff940e_chem2.pdf', 'e', 'chem2'),
(33, 'Maths', 'hey', 'f92e995aa5e52806fb462f84acc36a4a_chem1.pdf', 'e', 'chem1');

-- --------------------------------------------------------

--
-- Table structure for table `lib_member`
--

DROP TABLE IF EXISTS `lib_member`;
CREATE TABLE IF NOT EXISTS `lib_member` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_member`
--

INSERT INTO `lib_member` (`id`, `first_name`, `last_name`, `contact_no`, `address`, `username`, `password`) VALUES
(3, 'Javed', 'Ansari', '08136028282', 'Village- Seconee, P.O- Jakhalabandha, District- Nagaon.', 'donald@gmail.com', 'donald');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `saved_as` varchar(40) NOT NULL,
  `type` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `speaker` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `saved_as`, `type`, `title`, `subject`, `speaker`, `course`, `semester`) VALUES
(21, 'd78cd922f14ae9d51cae62b7ef302023', '0', 'Introduction to Bootstrap', 'Web Designing', 'Bucky Roberts', 'BCA', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

DROP TABLE IF EXISTS `question_papers`;
CREATE TABLE IF NOT EXISTS `question_papers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `year` varchar(4) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `page` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_papers`
--

INSERT INTO `question_papers` (`id`, `subject`, `year`, `course`, `class`, `page`) VALUES
(1, 'operating system', '2018', 'BCA', 'Semester 4', '1'),
(2, 'operating system', '2018', 'BCA', 'Semester 4', '2'),
(3, 'operating system', '2018', 'BCA', 'Semester 4', '3'),
(5, 'operating system', '2017', 'BCA', 'Semester 4', '1'),
(6, 'operating system', '2017', 'BCA', 'Semester 4', '2'),
(7, 'operating system', '2017', 'BCA', 'Semester 4', '3'),
(8, 'operating system', '2017', 'BCA', 'Semester 4', '4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
