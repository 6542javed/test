-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2019 at 02:25 AM
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
-- Database: `media`
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
('h5n0348gh', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `saved_as` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `speaker` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `saved_as`, `title`, `subject`, `speaker`, `course`, `semester`) VALUES
(1, '', 'sample', 'computer science', 'Donald Mahanta', 'BCA', 'semester 3'),
(2, '', 'sample', 'computer science', 'Donald Mahanta', 'BCA', 'semester 3'),
(3, '', 'sample', 'computer science', 'Donald Mahanta', 'BCA', 'semester 3'),
(4, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(5, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(6, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(7, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(8, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(9, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(10, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(11, '', 'asdfasdf', 'oood', 'Donald Mahanta', 'BCA ', 'asdfs'),
(12, '', 'what', 'son', 'sldjfl', 'BCA', 'jlkdfjgl'),
(13, 'f37d925aee93d39560cdc5b9e167b404', 'jh', 'kjh', 'hk', 'jh', 'kjh'),
(14, '6d7ae8f2bf0150cbafa08970e5675bce', 'Chapter 1', 'Deep Work', 'Cal Newport', 'Audiobook', 'Audiobook'),
(15, 'ec7df0164925d5c7270205c25ea41fc6', 'Chapter 1', 'Deep Work', 'Cal Newport', 'Audiobook', 'Audiobook'),
(16, '6354f89bc4822d20ea532cc5259a194f', 'Chapter 1', 'Deep Work', 'Cal Newport', 'Audiobook', 'Audiobook'),
(17, '2233f4d7d616eafe6e3e8166a1766f32', 'kj', 'lkj', 'kljkj', 'lkj', 'lkj'),
(18, '1f86c622e3d4dddad761f86d451e8c58', 'kj', 'lkj', 'kljkj', 'lkj', 'lkj'),
(19, '0101b371b1ee615925ed1240afa8287d', 'kj', 'lkj', 'kljkj', 'lkj', 'lkj'),
(20, 'f02024893fc77c7f0a80da15ec8d79ea', 'kl', 'jk', 'jk', 'jlj', 'kl');

-- --------------------------------------------------------

--
-- Table structure for table `collegepubs`
--

DROP TABLE IF EXISTS `collegepubs`;
CREATE TABLE IF NOT EXISTS `collegepubs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

DROP TABLE IF EXISTS `ebook`;
CREATE TABLE IF NOT EXISTS `ebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `name`, `author`) VALUES
(4, 'chem1', 'NCERT'),
(5, 'flamingo', 'NCERT'),
(6, 'kaleidoscope', 'NCERT'),
(7, 'labchem', 'NCERT'),
(8, 'maths1', 'NCERT'),
(9, 'maths2', 'NCERT'),
(21, 'chem2', 'NCERT'),
(18, 'physics1', 'NCERT'),
(17, 'physics2', 'NCERT'),
(22, 'labphysics', 'NCERT');

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
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_member`
--

INSERT INTO `lib_member` (`id`, `first_name`, `last_name`, `contact_no`, `address`, `user_id`, `password`) VALUES
(1, 'Donald', 'Mahanta', '9292892820', 'Village- Rangaloo, P.O- Jakhalabandha, District- Nagaon.', 'admin@gmail.com', 'admin123'),
(3, 'Javed', 'Ansari', '08136028282', 'Village- Seconee, P.O- Jakhalabandha, District- Nagaon.', 'donald@gmail.com', 'donald'),
(7, 'Donald', 'Mahanta', 'Kaliabor college boys hostel, kuwaritol.', '9984734343', 'donald_mahanta_1', 'member1');

-- --------------------------------------------------------

--
-- Table structure for table `localpubs`
--

DROP TABLE IF EXISTS `localpubs`;
CREATE TABLE IF NOT EXISTS `localpubs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `saved_as` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `speaker` varchar(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `saved_as`, `title`, `speaker`, `course`, `semester`, `Subject`) VALUES
(3, 'sample.mp4', 'sample', 'Donald Mahanta', 'BCA', 'semester 3', 'computer science'),
(4, '2316ccbd5fc42efc95167a619968cc33', 'lkJKLjkljKJkj', 'JL', 'KJLK', 'JLK', 'KLJ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
