-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2019 at 08:42 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `media`
--
CREATE DATABASE IF NOT EXISTS `media` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `media`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(1) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `user_type`, `course`, `semester`, `contact_no`, `institution`, `name`) VALUES
(1, 'admin@gmail.com', 'admin', '0', 'BCA', '5', '9292892820', 'kaliabor college', 'dj'),
(2, 'example@gmail.com', 'password', '2', 'BCA', '5', '9000022202', 'Kaliabor College', 'Donald Mahanta'),
(3, 'donald@gmail.com', 'donald', '2', 'BCA', '0', '08136028282', 'Kaliabor College', 'Donald Mahanta'),
(4, 'donald1@gmail.com', 'def', '2', 'BBA', '0', '08136028282', 'Kaliabor College', 'Donald Mahanta');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `saved_as` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `speaker` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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

CREATE TABLE IF NOT EXISTS `collegepubs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE IF NOT EXISTS `ebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
-- Table structure for table `localpubs`
--

CREATE TABLE IF NOT EXISTS `localpubs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

CREATE TABLE IF NOT EXISTS `question_papers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `year` varchar(4) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `page` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `saved_as` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `speaker` varchar(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `saved_as`, `title`, `speaker`, `course`, `semester`, `Subject`) VALUES
(3, 'sample.mp4', 'sample', 'Donald Mahanta', 'BCA', 'semester 3', 'computer science'),
(4, '2316ccbd5fc42efc95167a619968cc33', 'lkJKLjkljKJkj', 'JL', 'KJLK', 'JLK', 'KLJ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
