-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2019 at 09:52 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `author`, `saved_as`, `type`, `thumbname`) VALUES
(56, 'Summary on Ph.D Thesis', 'Research Cell, Kaliabor College', '37443c80214d4de55b72ed1cf13302c8_Golden_Book.pdf', 'c', 'Golden_Book'),
(65, 'College PDF', 'Javed', '3a996c026244d7b3428c4b8c7cdc8f25_Binary Decision Programs.pdf', 'e', 'Binary Decision Programs'),
(57, 'Plant Physiology', 'Department of Botany, Kaliabor College', '61ad046bb4c7372abd8c295e88fb3ff4_Plant_Physiology.pdf', 'c', 'Plant_Physiology'),
(58, 'Mathematical excursion to Beta Distribution', 'Arun Mahanta, Dept. of Mathematics', '4bdcb2e4ea39c9c6dff7604bdb8ab255_Mathematical_Excursion_to_Beta_Distribution.pdf', 'c', 'Mathematical_Excursion_to_Beta_Distribution'),
(59, 'Mathematical excursion- Unit 1', 'Arun Mahanta, Dept. of Mathematics', '3915f7811dd4b642526931e54851c6d0_Mathematical_Excursion_to_Unit_1_of_Major_Paper_5_5.pdf', 'c', 'Mathematical_Excursion_to_Unit_1_of_Major_Paper_5_5'),
(63, 'College Campus', '6th Semester Students 2016, Kaliabor College', '0f2c650c093ce223e0a256727dc07cc5_College_Campus.pdf', 'c', 'College_Campus'),
(61, 'Saswat-News Bulletin 16-17', 'IQAC Kaliabor College', '487d08c4f138ebaab9b198c0b9a853ff_Saswat_16_17_News_Bulletin.pdf', 'c', 'Saswat_16_17_News_Bulletin'),
(62, 'Laboratory Manual for Life science students', 'Dept. of Botany, Kaliabor College', 'bcbdd8c3fe1e79a56e014a977d9943a3_Lab_manual_Life_sc.pdf', 'c', 'Lab_manual_Life_sc'),
(64, 'Constitution', 'Students Union , Kaliabor College', '70778a2fe6274de6d9b17b87b7ba0fff_constitution_students_union_kaliabor.pdf', 'c', 'constitution_students_union_kaliabor'),
(66, 'College PDF', 'Javed', '8cc90d97f50aae58cbee73f8e43ce463_BinaryDecisionPrograms.pdf', 'e', 'BinaryDecisionPrograms'),
(67, 'Test#67', 'Author#67', '37472651aff55b48327e80255dbd67b2_BinaryDecision-Programs.pdf', 'e', 'BinaryDecision-Programs'),
(68, 'Test#68', 'Author#68', '3b6ad5df7b0ab611107b362c0b9ee0d8_Binary Decision Programs.pdf', 'e', 'Binary-Decision-Programs'),
(69, 'Test#68', 'Author#68', 'e6654896238ecd0e7e75a4cbd4ae4278_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(70, 'Test#68', 'Author#68', 'f7f177cfdeb844d079d4149890a08ed0_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(71, 'Test#70', 'Author#70', 'ded84a50cbfe8a9fe90d49c568df6ae1_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(72, 'Test#70', 'Author#70', 'ef3324ebab46598fc630fe02ee58f7af_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(73, 'Test#70', 'Author#70', 'bd8280f5a0eac97d6cc59fd4fe9a46f8_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(74, 'Test#71', 'Author#71', '0bcd4dfd387d1af64a4268ed680e061c_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(75, 'Test#72', 'Author#72', '5631fec645df2036a86107900fb3e68a_Binary Decision Programs.pdf', 'e', 'BinaryDecisionPrograms'),
(83, 'College Campus', 'Students', '546c880956ad6ea75ae9f331f25994bf_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(82, 'College Campus', 'Students', '2173c204e22015cbecf811a45c49e5c5_CollegeCampus.pdf', 'e', 'CollegeCampus'),
(81, 'College Campus', 'Students', '9e59e8535c5ccb0d3e21063c60f27377_CollegeCampuspdf', 'e', 'CollegeCampus'),
(80, 'College Campus', 'Students', '64f33eb9fa9a1105105b0a9ef4f7a7e3_College_Campus.pdf', 'e', 'CollegeCampus'),
(84, 'College Campus3', 'Students', '2995ca184a88d9f39f2fefe1803e1038_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(85, 'College Campus 3', 'Students', '3983b4e6eb1e1c22cd6fa6146be6a083_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(86, 'College Campus 3', 'Students', '6df9b0a8241c2f2b874ad4e060fa0e6e_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(87, 'College Campus 3', 'Students', 'd41d8cd98f00b204e9800998ecf8427e_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(88, 'College Campus 3', 'Students', '31d59407c1baeb0e3d682c81104bf61d_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(89, 'College Campus 3', 'Students', 'd41d8cd98f_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(90, 'College Camples 61', 'Stude', 'c96aaa0373_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(91, 'College Campus ', 'Students', '90e69b2b98_CollegeCampus2.pdf', 'e', 'CollegeCampus2'),
(92, 'College Campus ', 'Students', '1a3e405cbb_E-MANUAL.pdf', 'e', 'E-MANUAL'),
(93, 'College Campus ', 'Students', '06019cf15a_E-MANUAL.pdf', 'e', 'E-MANUAL'),
(94, 'College Maths', 'Maths', '1ac8ef5ab0c339f025471a693d507b7a_E-MANUAL.pdf', 'e', 'E-MANUAL'),
(95, 'hello', 'helo2', 'cb80009f75636d2c0f982d07898e5153_Phagunar Kabita.pdf', 'e', 'Phagunar Kabita'),
(96, 'hello', 'helo2', '77a3f66b3b00799d06938b138175b5ea_PhagunarKabita.pdf', 'e', 'PhagunarKabita'),
(97, 'College Capus', 'kjsd', '1894224dc2e196e086806c6bd89b007c_CollegeCampus.pdf', 'e', 'CollegeCampus'),
(98, 'cole', 'fds', '3de39260762da49cfbf635fe50f082fc_CollegeCampus.pdf', 'e', 'CollegeCampus'),
(99, 'hel', 'okldjsf', '49bc275df5c2b0c1c1830c52b29417af_CollegeCampus.pdf', 'e', 'CollegeCampus'),
(100, 'hel', 'okldjsf', '2169ae3251be41aad0947804758f86ab_CollegeCampus.pdf', 'e', 'CollegeCampus'),
(101, 'hel', 'okldjsf', '1d485c0c0d6ac58ce601b0867516a8db_CollegeCampus.pdf', 'e', 'CollegeCampus'),
(102, 'Saswat 18', 'Kaliabor College', '6d08a78748a1a3384519cf442ddb7119_Saswat1617NewsBulletin.pdf', 'e', 'Saswat1617NewsBulletin'),
(103, 'Saswat 16-17', 'Kaliabor College', '0926e20d895285ea2f8790274b242b6f_Saswat1617NewsBulletin.pdf', 'e', 'Saswat1617NewsBulletin'),
(104, 'Saswat 16-17', 'Kaliabor College', '671c05072fe4d046a186de55d14eae1f_Saswat1617NewsBulletin.pdf', 'e', 'Saswat1617NewsBulletin'),
(105, 'Saswat 16-17', 'Kaliabor College', 'eabdb440b1a0ef525971b4c8fd44cee1_Saswat1617NewsBulletin.pdf', 'e', 'Saswat1617NewsBulletin'),
(106, 'sdkljf', 'jkljlds', '968447812c78a0f429ff7074be0d5dcc_Megazine1516.pdf', 'e', 'Megazine1516'),
(107, 'sdkljf', 'jkljlds', 'a20ba13907efd80d78eaf8936c7b3bf9_Megazine1516.pdf', 'e', 'Megazine1516'),
(108, 'skdjfklj', 'fkdsljflks', '2b35601a0aa91604d872101e1d851d72_PhagunarKabita.pdf', 'e', 'PhagunarKabita'),
(109, 'kj', 'fkasj', '627e3e67bac32acaaa31bbc89024bc5b_Megazine15162.pdf', 'e', 'Megazine15162');

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `saved_as`, `type`, `title`, `subject`, `speaker`, `course`, `semester`) VALUES
(21, 'd78cd922f14ae9d51cae62b7ef302023', '0', 'Introduction to Bootstrap', 'Web Designing', 'Bucky Roberts', 'BCA', '5th'),
(22, '3b4e1780076293dfb4c485fe5bd2e41f', '0', 'Grid System', 'Web designing', 'Bucky Roberts', 'BCA', '5th'),
(23, 'b8aa787c5c0241a40f39cd550dfa2d5a', '0', 'Text Styles', 'Bootstrap', 'Bucky Roberts', 'BCA', '5th'),
(26, 'e44fefb96f3ffaf529a20f57058d03ba', '1', 'Introduction', 'Deep Work', 'Javed', 'BSc', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

DROP TABLE IF EXISTS `question_papers`;
CREATE TABLE IF NOT EXISTS `question_papers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `year` varchar(4) NOT NULL,
  `c_type` varchar(6) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `num_pages` varchar(2) NOT NULL,
  `q_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_papers`
--

INSERT INTO `question_papers` (`id`, `subject`, `year`, `c_type`, `course`, `class`, `num_pages`, `q_id`) VALUES
(1, 'OOP', '2018', 'TDC', 'BCA', '3rd Semester', '5', '5200795324'),
(5, 'Introduction to C Programming', '2016', 'TDC', 'BCA', '1st Semester', '6', '8070736230');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
