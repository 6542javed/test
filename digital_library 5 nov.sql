-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2019 at 08:08 AM
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
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `saved_as` varchar(200) NOT NULL,
  `type` varchar(1) NOT NULL,
  `thumbname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `author`, `saved_as`, `type`, `thumbname`) VALUES
(56, 'Summary on Ph.D Thesis', 'Research Cell, Kaliabor College', '37443c80214d4de55b72ed1cf13302c8_Golden_Book.pdf', 'c', 'Golden_Book'),
(57, 'Plant Physiology', 'Department of Botany, Kaliabor College', '61ad046bb4c7372abd8c295e88fb3ff4_Plant_Physiology.pdf', 'c', 'Plant_Physiology'),
(58, 'Mathematical excursion to Beta Distribution', 'Arun Mahanta, Dept. of Mathematics', '4bdcb2e4ea39c9c6dff7604bdb8ab255_Mathematical_Excursion_to_Beta_Distribution.pdf', 'c', 'Mathematical_Excursion_to_Beta_Distribution'),
(59, 'Mathematical excursion- Unit 1', 'Arun Mahanta, Dept. of Mathematics', '3915f7811dd4b642526931e54851c6d0_Mathematical_Excursion_to_Unit_1_of_Major_Paper_5_5.pdf', 'c', 'Mathematical_Excursion_to_Unit_1_of_Major_Paper_5_5'),
(63, 'College Campus', '6th Semester Students 2016, Kaliabor College', '0f2c650c093ce223e0a256727dc07cc5_College_Campus.pdf', 'c', 'College_Campus'),
(61, 'Saswat-News Bulletin 16-17', 'IQAC Kaliabor College', '487d08c4f138ebaab9b198c0b9a853ff_Saswat_16_17_News_Bulletin.pdf', 'c', 'Saswat_16_17_News_Bulletin'),
(62, 'Laboratory Manual for Life science students', 'Dept. of Botany, Kaliabor College', 'bcbdd8c3fe1e79a56e014a977d9943a3_Lab_manual_Life_sc.pdf', 'c', 'Lab_manual_Life_sc'),
(64, 'Constitution', 'Students Union , Kaliabor College', '70778a2fe6274de6d9b17b87b7ba0fff_constitution_students_union_kaliabor.pdf', 'c', 'constitution_students_union_kaliabor');

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
