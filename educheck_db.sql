-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2020 at 03:35 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educheck_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_date` date NOT NULL,
  `admin_who_add_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `lastname`, `firstname`, `username`, `password`, `role`, `status`, `img`, `contact`, `email`, `account_date`, `admin_who_add_id`) VALUES
(2, 'Senoc', 'Gary', 'gary', '202cb962ac59075b964b07152d234b70', 'Admin', 'active', '412646.jpg', '0993846732', 'garylloydsenoc@yahoo.com', '2020-08-21', 1),
(3, 'Cosicol', 'Marcelito', 'mars', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'active', '911795.jpg', '0049839875', 'mcosicoljr@yahoo.com', '2020-08-21', 1),
(4, 'COSICOL', 'MARCELITO', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'active', '807497.jpg', '0993846732', 'mars@yahoo.com', '2020-08-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deped`
--

CREATE TABLE IF NOT EXISTS `tbl_deped` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `w1` int(11) NOT NULL,
  `w2` int(11) NOT NULL,
  `w3` int(11) NOT NULL,
  `w4` int(11) NOT NULL,
  `w5` int(11) NOT NULL,
  `w6` int(11) NOT NULL,
  `w7` int(11) NOT NULL,
  `w8` int(11) NOT NULL,
  `w9` int(11) NOT NULL,
  `w10` int(11) NOT NULL,
  `w_total` int(11) NOT NULL,
  `w_ps` int(11) NOT NULL,
  `w_ws` int(11) NOT NULL,
  `qa1` int(11) NOT NULL,
  `qps` int(11) NOT NULL,
  `qws` int(11) NOT NULL,
  `pt1` int(11) NOT NULL,
  `pt2` int(11) NOT NULL,
  `pt3` int(11) NOT NULL,
  `pt4` int(11) NOT NULL,
  `pt5` int(11) NOT NULL,
  `pt6` int(11) NOT NULL,
  `pt7` int(11) NOT NULL,
  `pt8` int(11) NOT NULL,
  `pt9` int(11) NOT NULL,
  `pt10` int(11) NOT NULL,
  `pt_total` int(11) NOT NULL,
  `pt_ps` int(11) NOT NULL,
  `pt_ws` int(11) NOT NULL,
  `initial_grade` int(11) NOT NULL,
  `quarterly_grade` int(11) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `excel_id` int(11) NOT NULL,
  `excel_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partnership_requests`
--

CREATE TABLE IF NOT EXISTS `tbl_partnership_requests` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `request_status` varchar(255) NOT NULL,
  `request_date` date NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_partnership_requests`
--

INSERT INTO `tbl_partnership_requests` (`request_id`, `firstname`, `lastname`, `occupation`, `email`, `contact`, `school_name`, `school_address`, `request_status`, `request_date`) VALUES
(12, 'Gary', 'Senoc', 'Programmer', 'garysenoc@gmail.com', '0092398726', 'San Jose National High School', 'Bgy. San Jose PPC, PALAWAN', 'pending', '2020-08-20'),
(13, '', '', '', '', '', '', '', 'pending', '2020-08-22'),
(14, '', '', '', '', '', '', '', 'pending', '2020-08-22'),
(15, '', '', '', '', '', '', '', 'pending', '2020-08-22'),
(16, '', '', '', '', '', '', '', 'pending', '2020-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_caption` varchar(255) NOT NULL,
  `post_attach_file` varchar(255) NOT NULL,
  `post_privacy` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_views` int(11) NOT NULL,
  `post_likes` int(11) NOT NULL,
  `post_comments` int(11) NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schools`
--

CREATE TABLE IF NOT EXISTS `tbl_schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `school_level` varchar(255) NOT NULL,
  `sadmin_firstname` varchar(255) NOT NULL,
  `sadmin_lastname` varchar(255) NOT NULL,
  `sadmin_id_number` varchar(255) NOT NULL,
  `sadmin_username` varchar(255) NOT NULL,
  `sadmin_password` varchar(255) NOT NULL,
  `sadmin_email` varchar(255) NOT NULL,
  `sadmin_contact` varchar(255) NOT NULL,
  `school_logo` varchar(255) NOT NULL,
  `subscription_status` varchar(255) NOT NULL,
  `sadmin_img` varchar(255) NOT NULL,
  `account_date` date NOT NULL,
  `edu_admin_id` int(11) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_schools`
--

INSERT INTO `tbl_schools` (`school_id`, `school_name`, `school_address`, `school_level`, `sadmin_firstname`, `sadmin_lastname`, `sadmin_id_number`, `sadmin_username`, `sadmin_password`, `sadmin_email`, `sadmin_contact`, `school_logo`, `subscription_status`, `sadmin_img`, `account_date`, `edu_admin_id`) VALUES
(9, 'San Jose National High School', 'Bgy. San Jose PPC, PALAWAN', 'Secondary', 'Rachel', 'Adon', 'Admin2017-3-323', 'Admin2017-3-323', '647275ad20eae13751ebc2db3384a004', 'sanjose@gmail.com', '0980945254', '953635.jpeg', '2 Years', '', '2020-08-20', 1),
(11, 'PALAWAN STATE UNIVERSITY LABORATORY HIGHSCHOOL', 'Bgy. Tiniguiban PPC, PALAWAN', 'Secondary', 'Gary ', 'Chua', 'Admin2017-3-323', 'Admin2017-3-323', 'e506dac3e25c0c63c10869ddb48d7434', 'psulab@gmail.com', '0980945254', '22946.png', '2 Years', '', '2020-08-20', 1),
(12, '2San Jose National High School', 'Bgy. San Jose PPC, PALAWAN', '', '', '', '123', '123', '84b927dad17da0fd988797ce2a5ccddc', '', '', '405477.png', '', '', '2020-08-21', 1),
(13, 'NEW SCHOOL HIGH SCHOOL', '', '', '', '', 'school', 'school', 'c6fa58bc472c68bd8a05ca5b657cc55b', '', '', 'user.png', '', '', '2020-08-21', 1),
(14, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'David', 'Omabaw', 'sadmin', 'sadmin', 'c263420db0703129c0f43dfbfc019e43', 'omabaw@gmail.com', '094943224', '486171.png', '2 years', 'user.png', '2020-08-22', 1),
(15, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'David', 'Omabaw', 'sadmin', 'sadmin', '7914c6eaf0c0b3c117d1602f55d24d3a', 'omabaw@gmail.com', '094943224', '903905.png', '2 years', 'user.png', '2020-08-22', 1),
(16, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'Jason', 'Cruz', 'sadmin', 'sadmin', 'de6a628ba0352814db146b16d1063ef3', 'omabaw@gmail.com', '0934343454', '534341.png', '2 years', 'gar.jpg', '2020-08-22', 1),
(17, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'Redemple', 'Marcelo', '23', '23', 'd6957495dc09c1607a9055c0e882211b', 'redemple@gmail.com', '', '265201.jpg', '', 'user.png', '2020-08-22', 1),
(18, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'Redemple', 'Marcelo', '12345', '12345', '52e64157c5c3171f125155bc915947a9', 'redemple@gmail.com', '0934343454', '640832.jpg', '2 years', 'user.png', '2020-08-22', 1),
(19, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'Redemple', 'Marcelo', '23456', '23456', 'dd0aff107b290001ef93181b6efb2366', 'redemple@gmail.com', '0934343454', 'user.png', '2 years', 'user.png', '2020-08-22', 1),
(20, 'Palawan State University Laboratory High School', 'Bgy. Tiniguiban PPC PALAWAN', 'Secondary', 'Redemple', 'Marcelo', '12345', '12345', 'd4be0c3e77cfdb6e1a1cd3953cf95ab6', 'redemple@gmail.com', '0934343454', '140722.jpg', '2 years', 'user.png', '2020-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE IF NOT EXISTS `tbl_students` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_school_id` int(11) NOT NULL,
  `stud_firstname` varchar(255) NOT NULL,
  `stud_lastname` varchar(255) NOT NULL,
  `stud_username` varchar(255) NOT NULL,
  `stud_password` varchar(255) NOT NULL,
  `stud_school_id_number` varchar(255) NOT NULL,
  `stud_address` varchar(255) NOT NULL,
  `stud_year_level` varchar(255) NOT NULL,
  `stud_course` varchar(255) NOT NULL,
  `stud_block` varchar(255) NOT NULL,
  `stud_img` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_contact` varchar(255) NOT NULL,
  `stud_status` varchar(255) NOT NULL,
  `stud_account_date` date NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`stud_id`, `stud_school_id`, `stud_firstname`, `stud_lastname`, `stud_username`, `stud_password`, `stud_school_id_number`, `stud_address`, `stud_year_level`, `stud_course`, `stud_block`, `stud_img`, `stud_email`, `stud_contact`, `stud_status`, `stud_account_date`) VALUES
(15, 12434, 'REDEMPLE', 'MARCELO', '123', '7660f5474131b7200527940606028caf', '123', 'TAGBUROS', '', '', '', '', '', '', '1', '2020-08-21'),
(16, 12434, '', '', '', '6e297c0db336cddd93607c97fb931bcd', '', '', '', '', '', '', '', '', '1', '2020-08-21'),
(17, 34234, 'wqweqwqweeq', 'we', 'qwe', 'e19784b54f5b4e87ec071441552b59cc', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(18, 34234, 'qwe', 'qwe', 'asas', '029c47a7ba862a8fc9fcc7e6e1e12a07', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(19, 34234, 'wqweqwqweeq', 'we', 'qwe', '00d593ed5267c75735aa25cc370b7722', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(20, 34234, 'qwe', 'qwe', 'asas', 'b04b801670993096abb2c4420e30d252', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(21, 34234, 'wqweqwqweeq', 'we', 'qwe', '02e2b2acdfba0d10ded6e706137eb8eb', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(22, 34234, 'qwe', 'qwe', 'asas', '9d90f0e104bb6272b8c04d3169bdbb03', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(23, 34234, 'wqweqwqweeq', 'we', 'qwe', '532472a89f46d71c561b19abed63a9c0', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(24, 34234, 'qwe', 'qwe', 'asas', '5d86a43fec6052030a41640653fb777a', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(25, 34234, 'wqweqwqweeq', 'we', 'qwe', '679edb164799d2583f87f6bb15102917', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(26, 34234, 'qwe', 'qwe', 'asas', '659c81dbb1ca8f5994161dabf4087469', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(27, 34234, 'wqweqwqweeq', 'we', 'qwe', '4c96df72c0ec9deb1653c83d0294e9d4', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(28, 34234, 'qwe', 'qwe', 'asas', '3200f9f7a3d53884154d91cf9332b8e3', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(29, 34234, 'wqweqwqweeq', 'we', 'qwe', '907712a2bdcb98d25b7707c0fff735e9', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(30, 34234, 'qwe', 'qwe', 'asas', 'bb0f28e4277a8df1d77b3875ad3ee023', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(31, 34234, 'wqweqwqweeq', 'we', 'qwe', '2eaf57d5d5a13d16357d4f8af7b06234', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(32, 34234, 'qwe', 'qwe', 'asas', '5e6fb558c8c94c74e06d5327b9b6cd11', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(33, 34234, 'wqweqwqweeq', 'we', 'qwe', '03683f61d1108d2941a38f9fff16fd27', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(34, 34234, 'qwe', 'qwe', 'asas', '689ab75868c938bff5f11777a7f44d2f', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(35, 34234, 'wqweqwqweeq', 'we', 'qwe', '02825faf2877ce25a374b75c3d0dee8d', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(36, 34234, 'qwe', 'qwe', 'asas', '0afb8992c16af44d155eb86a13fea813', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(37, 34234, 'wqweqwqweeq', 'we', 'qwe', '0bea9f48e64c3fc33bd0edef2c150e65', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(38, 34234, 'qwe', 'qwe', 'asas', '845845212aaa452f989ecfa6f7a4fa12', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(39, 34234, 'wqweqwqweeq', 'we', 'qwe', 'b90316583831299f77b175a60ead1832', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(40, 34234, 'qwe', 'qwe', 'asas', '775a0ef7a32fb975a40a4e0e9a0b8384', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(41, 34234, 'wqweqwqweeq', 'we', 'qwe', '54de041c8fa7c1346b61c999decb6791', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(42, 34234, 'qwe', 'qwe', 'asas', '982d39c1f6f1eadefbc83f9a031c834b', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(43, 34234, 'wqweqwqweeq', 'we', 'qwe', '25f49c7b910869d585c3356be8971d7a', 'qwe', 'as', 'f', 'fas', 'as', 'user.png', 'f', 'fas', '1', '2020-08-21'),
(44, 34234, 'qwe', 'qwe', 'asas', 'b5ffe0d3ad6fa1b15eb75c6dfdefb618', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21'),
(45, 12434, 'David', 'Omabaw', '', '3b344c6ae777a58cbc8cf4cf86b0d463', '', 'Bgy. Tiniguiban PPC PALAWAN', '', '', '', '', 'omabaw@gmail.com', '', '1', '2020-08-22'),
(46, 12434, '', '', '', '54d1135e0d236240e53f1d3206ada227', '', '', '', '', '', '', '', '', '1', '2020-08-22'),
(47, 12434, 'Marcelito', 'Cosicol', '', 'a3131d4233ce94b6fa0524c93a1214ff', '', 'Bgy, Tagburos Puerto Princesa City, Palawan', '', '', '', 'user.png', 'amaictdcosicol@gmail.com', '', '1', '2020-08-22'),
(48, 12434, '', '', '', '4a0984572dd8018451ba9305e13fc13e', '', '', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(49, 12434, '', '', 'swdswede', '59143295699d04e0ae29c1377efa6581', 'swdswede', '', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(50, 12434, 'dede', 'dede', 'eded', '7eb6c3eb2c9720f2aa0599aaa834b545', 'eded', 'dedde', '', '', '', 'user.png', 'fef', 'fefefe', '1', '2020-08-22'),
(51, 12434, 'sss', '', '213323', 'c52b705b06e8b5e0a002481c862ec077', '213323', '', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(52, 12434, '', '', '123', '7a9f875446793b5f52742e3fceed8c07', '123', '', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(53, 12434, 'David', 'Omabaw', 'student', '2fe5e0769c70701a900db36bb3122e44', 'student', 'Bgy. Tiniguiban PPC PALAWAN', '', '', '', 'user.png', 'omabaw@gmail.com', '', '1', '2020-08-22'),
(54, 12434, '', '', '', 'd38bc23a9a4ffd6eb8e2a2d5ffe7c765', '', '', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(55, 34234, 'Redemple', ' Marcelo', '122-123-123', '74293c004c2a485c21ac8c79a1599ab1', '122-123-123', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'marceloredemple332@gmail.com', '9504671008', '1', '2020-08-22'),
(56, 34234, 'Melvina', 'Â Gilpin', '325-234-23', '89640e83cea5a62a18c4cde800a2d2ad', '325-234-23', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'Â france@gmail.com', '9504671008', '1', '2020-08-22'),
(57, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', '3fbfb078e0e29206df946534bbf764c0', '345-452-654', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'carl@gmai.com', '9504671008', '1', '2020-08-22'),
(58, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '4490f294f4b0f06612dfc8f225be839e', '456-456-234', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'jhin@gmail.com', '9504671008', '1', '2020-08-22'),
(59, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', '273aad59cad344711a738eec4e977113', '234-234-123', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'ple@gmail.com', '9504671008', '1', '2020-08-22'),
(60, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', '0110cb8231a22755e59825861f53046c', '875-675-232', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'ben@gmail.com', '9504671008', '1', '2020-08-22'),
(61, 34234, 'KevinÂ ', 'Ayres', '345-123-867', '8a45f6e0189acc6537fe29d94aa77b6e', '345-123-867', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'tan@gmail.com', '9504671008', '1', '2020-08-22'),
(62, 34234, 'Zulema', 'Â Crean', '456-876-345', '463daf81dff26c47e1d4563bc80d3fd1', '456-876-345', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'bambi@gmail.com', '9504671008', '1', '2020-08-22'),
(63, 34234, 'NitaÂ ', 'Tall', '765-453-678', 'f7f673d130465375ee12b6d7839e8ecb', '765-453-678', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'carl3@gmai.com', '9504671008', '1', '2020-08-22'),
(64, 34234, 'OnaÂ ', 'Womble', '078-563-675', '4e4dd24253f3fbc2bf3a379387a64c04', '078-563-675', 'Sta.monica', '12', 'Comsice', '2', 'user.png', 'Ona@gmail.com', '9504671008', '1', '2020-08-22'),
(65, 12434, 'Redemple', 'Marcelo', '456789', '88f3e53ba49f7ae1b1057dbd2754a752', '456789', 'Bgy. Tiniguiban PPC PALAWAN', '', '', '', 'user.png', 'redemple@gmail.com', '0954645443', '1', '2020-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE IF NOT EXISTS `tbl_teachers` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_school_id` int(11) NOT NULL,
  `teacher_firstname` varchar(255) NOT NULL,
  `teacher_lastname` varchar(255) NOT NULL,
  `teacher_username` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `teacher_id_number` varchar(255) NOT NULL,
  `teacher_address` varchar(255) NOT NULL,
  `teacher_department` varchar(255) NOT NULL,
  `teacher_img` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_contact` varchar(255) NOT NULL,
  `teacher_status` varchar(255) NOT NULL,
  `teacher_account_date` date NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`teacher_id`, `teacher_school_id`, `teacher_firstname`, `teacher_lastname`, `teacher_username`, `teacher_password`, `teacher_id_number`, `teacher_address`, `teacher_department`, `teacher_img`, `teacher_email`, `teacher_contact`, `teacher_status`, `teacher_account_date`) VALUES
(11, 34234, 'wqweqwqweeq', 'we', 'qwe', 'a41911080d2986883c7bf1af90f98c4d', 'qwe', 'as', 'fas', 'user.png', 'as', 'f', '1', '2020-08-20'),
(12, 34234, 'qwe', 'qwe', 'asas', '2e1482ade0d7439715328764976a1a94', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-20'),
(13, 34234, 'wqweqwqweeq', 'we', 'qwe', '897192571acaf034a645ed38c358d331', 'qwe', 'as', 'fas', 'user.png', 'as', 'f', '1', '2020-08-20'),
(14, 34234, 'qwe', 'qwe', 'asas', '3d8329211a0e6c962035e200cf7514ec', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-20'),
(15, 34234, 'wqweqwqweeq', 'we', 'qwe', 'd5f5e228923449dccf56427a29b66424', 'qwe', 'as', 'fas', 'user.png', 'as', 'f', '1', '2020-08-20'),
(16, 34234, 'qwe', 'qwe', 'asas', '70f2770f2272c6fc1913c1895c5bc960', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-20'),
(17, 34234, 'wqweqwqweeq', 'we', 'qwe', '8f782a9f95940e487dba19ac93506b7e', 'qwe', 'as', 'fas', 'user.png', 'as', 'f', '1', '2020-08-20'),
(18, 34234, 'qwe', 'qwe', 'asas', '061a2efe056f2ec5ec63a1d97f328f1f', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-20'),
(19, 34234, 'Jason', 'Abello', 'teacher', '3d86fd11ac7294370a335c1f0b7bf5cc', 'teacher', 'Bgy. Tagburos', 'Math Department', 'user.png', '', '', '1', '2020-08-21'),
(20, 34234, 'wqweqwqweeq', 'we', 'qwe', '7cfd34b47da5f97a1d4b8d0f0ef8f7f5', 'qwe', 'as', 'fas', 'user.png', 'as', 'f', '1', '2020-08-21'),
(21, 34234, 'qwe', 'qwe', 'asas', 'e8de2ee49d2030a117d25133e1908570', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-21'),
(22, 34234, 'wqweqwqweeq', 'we', 'qwe', 'af78105f991883305d055f824d090355', 'qwe', 'as', 'fas', 'user.png', 'as', 'f', '1', '2020-08-21'),
(23, 34234, 'qwe', 'qwe', 'asas', 'a9ac6aec8292cbb4b08a93a1e96f13b1', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-21'),
(24, 34234, 'Redemple', 'Marcelo', '123456', 'd451de0873875abab2eb1ee734360010', '123456', 'Bgy. Tiniguiban PPC PALAWAN', 'ICT DEPARTMENT', 'user.png', 'redemple@gmail.com', '094374635', '1', '2020-08-22'),
(25, 34234, 'Redemple', 'Marcelo', '123456', '6613dfc6b8e1e8cf4aa15d90ad1ce1e4', '123456', 'Bgy. Tiniguiban PPC PALAWAN', 'ICT DEPARTMENT', 'user.png', 'redemple@gmail.com', '094374635', '1', '2020-08-22'),
(26, 34234, '', '', '', '88a44b097af9ad74ea683bd13176b046', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(27, 34234, '', '', '', '229c0d757f462ede1a3e2ed786656220', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(28, 34234, '', '', '', 'a7a57cab17ab794d8ab08946dcd615d1', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(29, 34234, '', '', 'swdwd', 'd643724f2ca8965f5b77b0796a68a4ef', 'swdwd', '', '', 'user.png', '', '', '1', '2020-08-22'),
(30, 34234, '', '', '', '836c14f5ee6df95e42888c62ee51a63a', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(31, 34234, '', '', '12', '87aac71b88ad87055f1ca511357417a6', '12', '', '', 'user.png', '', '', '1', '2020-08-22'),
(32, 34234, '', '', '545', 'c5cc812497cf70ac4664f20183c0a06f', '545', '', '', 'user.png', '', '', '1', '2020-08-22'),
(33, 34234, '', '', 'swdwd', '439d53cc879c556648975c2997667a39', 'swdwd', '', '', 'user.png', '', '', '1', '2020-08-22'),
(34, 34234, '', '', 'defge', 'cef9c8bc8da72b0c35e76f33a9fa599d', 'defge', '', '', 'user.png', '', '', '1', '2020-08-22'),
(35, 34234, '', '', 'rhtj5', 'ffad6d46fa8f27a20a07466b6f57ed0e', 'rhtj5', '', '', 'user.png', '', '', '1', '2020-08-22'),
(36, 34234, '', '', 'jyjjy', 'eae30a527954422e1126ba826600bc13', 'jyjjy', '', '', 'user.png', '', '', '1', '2020-08-22'),
(37, 34234, '', '', 'jytjy', 'f7d3b97839a35bac41bdf75f99bc50e6', 'jytjy', '', '', 'user.png', '', '', '1', '2020-08-22'),
(38, 34234, 'Marcelito', 'Cosicol', 'asdf', '0345341339d1e0ad753a9c2d42e99478', 'asdf', 'Bgy, Tagburos Puerto Princesa City, Palawan', '', 'user.png', 'amaictdcosicol@gmail.com', '', '1', '2020-08-22'),
(39, 34234, '', '', '', '712eb8352d2ed065b6c67d8d9945ca97', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(40, 34234, 'Redemple', 'Marcelo', 'swdwd', '0d0852172b9f21cec78f19e4055b567c', 'swdwd', 'Bgy. Tiniguiban PPC PALAWAN', '', 'user.png', 'redemple@gmail.com', '', '1', '2020-08-22'),
(41, 34234, '', '', '', '0e8776623b5d874e3d48e7d939e5f221', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(42, 34234, 'Redemple', 'Marcelo', '', '68ee4b1d8bf9d153bb72b296779efb3f', '', 'Bgy. Tiniguiban PPC PALAWAN', '', 'user.png', 'redemple@gmail.com', '', '1', '2020-08-22'),
(43, 34234, '', '', '', '6ebcdd8cea5d7db2743e0e5df89fee32', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(44, 34234, 'Redemple', 'Marcelo', 'teacher', '985cac74cb8c61e9d9680c9912ebfe1f', 'teacher', 'Bgy. Tiniguiban PPC PALAWAN', '', 'user.png', 'redemple@gmail.com', '', '1', '2020-08-22'),
(45, 34234, 'Redemple', 'Marcelo', '12345', '8e73a303021d85c0566c5488a26ebeec', '12345', 'Bgy. Tiniguiban PPC PALAWAN', '', 'user.png', 'redemple@gmail.com', '', '1', '2020-08-22'),
(46, 34234, 'Redemple', ' Marcelo', '122-123-123', 'e4d71bee330938f5808e611ad7fbff9f', '122-123-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'marceloredemple332@gmail.com', '1', '2020-08-22'),
(47, 34234, 'Melvina', 'Â Gilpin', '325-234-23', '4712817cd17a512f4bfe1b4508c7adf3', '325-234-23', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Â france@gmail.com', '1', '2020-08-22'),
(48, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', '8fde04c75457ada54f760fa3def98305', '345-452-654', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl@gmai.com', '1', '2020-08-22'),
(49, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', 'eb5dd0d8624d79702e202606b22dbcd5', '456-456-234', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'jhin@gmail.com', '1', '2020-08-22'),
(50, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', 'd7a4f4d520bd21eea5090f1ddbd2c5a3', '234-234-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ple@gmail.com', '1', '2020-08-22'),
(51, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', '2f3eebc3b30fc127d47ed67ca211c517', '875-675-232', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ben@gmail.com', '1', '2020-08-22'),
(52, 34234, 'KevinÂ ', 'Ayres', '345-123-867', 'c33c74e4d3aa3919b5657580ea02face', '345-123-867', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'tan@gmail.com', '1', '2020-08-22'),
(53, 34234, 'Zulema', 'Â Crean', '456-876-345', '0c270d72fa002d493da7cf5eb11e28ce', '456-876-345', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'bambi@gmail.com', '1', '2020-08-22'),
(54, 34234, 'NitaÂ ', 'Tall', '765-453-678', '9a25c8b4a98bc40524228fc55c76b252', '765-453-678', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl3@gmai.com', '1', '2020-08-22'),
(55, 34234, 'OnaÂ ', 'Womble', '078-563-675', '4df9b25850a80124686530e576719f91', '078-563-675', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Ona@gmail.com', '1', '2020-08-22'),
(56, 34234, '', '', '', '16587cc6f6dd3dadee168167b9017ee7', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(57, 34234, '', '', '', '792c9b3950aab3d84e67a6bd7ff2c0b0', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(58, 34234, '', '', '', '0f7f3a888ae327aa32e096eeb9da4fb3', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(59, 34234, '', '', '', '2c471d445ed77f4bed6390ef78531c75', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(60, 34234, '', '', '', 'c8f63bf4739ba85f9608ce9d16c8a106', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(61, 34234, '', '', '', '9db7f20131a32dd694d17b2ba0d065b9', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(62, 34234, '', '', '', '37a46fdd792c1c09567d25443dfd2c56', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(63, 34234, '', '', '', '3a47369ed931bbf7c6fab64f3880ef5f', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(64, 34234, '', '', '', '9b0854c8d1f2c9803d45bf7e05c50877', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(65, 34234, '', '', '', '763b5d771184d9f6d281f8fcb7a92e93', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(66, 34234, '', '', '', '6454cae27cf02306db45e2b033d65b97', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(67, 34234, 'Redemple', ' Marcelo', '122-123-123', '62fa21525ec4ecf24d9972a7896fc9f7', '122-123-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'marceloredemple332@gmail.com', '1', '2020-08-22'),
(68, 34234, 'Melvina', 'Â Gilpin', '325-234-23', '9a11e1ebda8baaebea9b636afa919177', '325-234-23', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Â france@gmail.com', '1', '2020-08-22'),
(69, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', 'e4704f62304e2b42498a61fc661a516a', '345-452-654', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl@gmai.com', '1', '2020-08-22'),
(70, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '6b89f67ddc2ab5c705480000235d2e45', '456-456-234', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'jhin@gmail.com', '1', '2020-08-22'),
(71, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', '93d717ddb05d3a7508521aa02e671e80', '234-234-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ple@gmail.com', '1', '2020-08-22'),
(72, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', '70026d06f3825a142d0082a017621d73', '875-675-232', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ben@gmail.com', '1', '2020-08-22'),
(73, 34234, 'KevinÂ ', 'Ayres', '345-123-867', '252577a4fc5593570c2bfb4072a0ffaa', '345-123-867', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'tan@gmail.com', '1', '2020-08-22'),
(74, 34234, 'Zulema', 'Â Crean', '456-876-345', 'cf8616191ddc0c7ba1ea8a0086733a8b', '456-876-345', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'bambi@gmail.com', '1', '2020-08-22'),
(75, 34234, 'NitaÂ ', 'Tall', '765-453-678', 'f8326887861eb0754ff489076d91210b', '765-453-678', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl3@gmai.com', '1', '2020-08-22'),
(76, 34234, 'OnaÂ ', 'Womble', '078-563-675', '3d6780ba8b6374323dfdbfc0e51b84e9', '078-563-675', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Ona@gmail.com', '1', '2020-08-22'),
(77, 34234, '', '', '', 'b0aeae30713da61a9e98bc03feedb52a', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(78, 34234, '', '', '', '5c94903b7de7a54e385757fea2675b8f', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(79, 34234, '', '', '', '73550d0ee5c77f00460c00aec569d3ff', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(80, 34234, '', '', '', '39c3a983b3b43d00b1fc99aded1640b3', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(81, 34234, '', '', '', '7249aa8e6b8cb706cebfb5b3e0a95270', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(82, 34234, '', '', '', '29b16808eba0c2065b18a86adb0bf76e', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(83, 34234, '', '', '', 'ea7df27af953f0ded13482200f5100f9', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(84, 34234, '', '', '', '321efe185864eaab92f9921e816f9f32', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(85, 34234, '', '', '', 'b89205d03f96983c32c630c6476efce1', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(86, 34234, '', '', '', '9bfd3748df507a07a58da9bf6b86b235', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(87, 34234, '', '', '', '8457322d68bda848eba6c93eb250f09f', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(88, 34234, 'Redemple', ' Marcelo', '122-123-123', 'c83ea9d3418a143f921db638fbeda736', '122-123-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'marceloredemple332@gmail.com', '1', '2020-08-22'),
(89, 34234, 'Melvina', 'Â Gilpin', '325-234-23', '00ae279648ed3c1d3ff67c3e238cd76d', '325-234-23', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Â france@gmail.com', '1', '2020-08-22'),
(90, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', 'dc51e4e7a5d85d459ae2a7b6b827f003', '345-452-654', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl@gmai.com', '1', '2020-08-22'),
(91, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '261ee69beb2117e9d6b586cbc7720c32', '456-456-234', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'jhin@gmail.com', '1', '2020-08-22'),
(92, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', 'f0ebdc8242ba42a01303f6b6fd302128', '234-234-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ple@gmail.com', '1', '2020-08-22'),
(93, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', 'a6d8b9e4752ec27a958eb265453fe73a', '875-675-232', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ben@gmail.com', '1', '2020-08-22'),
(94, 34234, 'KevinÂ ', 'Ayres', '345-123-867', '848ca97372fd59f69388a5ebd42b0c71', '345-123-867', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'tan@gmail.com', '1', '2020-08-22'),
(95, 34234, 'Zulema', 'Â Crean', '456-876-345', '071d5f9f0cbddd0611dc570c7e1da78c', '456-876-345', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'bambi@gmail.com', '1', '2020-08-22'),
(96, 34234, 'NitaÂ ', 'Tall', '765-453-678', '40734393c65497ac6c135a64232ed113', '765-453-678', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl3@gmai.com', '1', '2020-08-22'),
(97, 34234, 'OnaÂ ', 'Womble', '078-563-675', '04fde4ee0c2f8f4ab8007feb3e72d974', '078-563-675', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Ona@gmail.com', '1', '2020-08-22'),
(98, 34234, '', '', '', '564e68b76629a06f3b1c8e7b1e586649', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(99, 34234, '', '', '', 'b1193a0684b62a2b502a4974b8671273', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(100, 34234, '', '', '', '0ec3aeda6bd1cad4946127d128ce7c99', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(101, 34234, '', '', '', '26dd6f1effc2d1267fa03e69a24de601', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(102, 34234, '', '', '', '6e85c32d61e0407635d94a2a0136f945', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(103, 34234, '', '', '', '07db3136f4d4ed09d672eef9147d194c', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(104, 34234, '', '', '', '897d91694dd37792ac7ef2c6193f2d7c', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(105, 34234, '', '', '', 'b8fe736dda62b9aad6ac5b1b4b667d05', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(106, 34234, '', '', '', 'e6c386b38bdf3ab4f8434a8adc60cfa9', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(107, 34234, '', '', '', '1b40e9d71dea69723332f43c41d9cfdb', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(108, 34234, '', '', '', 'de37aa7d1137770014692599657cb9ea', '', '', '', 'user.png', '', '', '1', '2020-08-22'),
(109, 34234, 'Redemple', ' Marcelo', '122-123-123', '97b0a1c9fbc008c1140aa4f760f5737d', '122-123-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'marceloredemple332@gmail.com', '1', '2020-08-22'),
(110, 34234, 'Melvina', 'Â Gilpin', '325-234-23', 'f571b3737a55387a4ed45dc0376b60c0', '325-234-23', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Â france@gmail.com', '1', '2020-08-22'),
(111, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', '87e70480cda21acb4848d355d175e999', '345-452-654', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl@gmai.com', '1', '2020-08-22'),
(112, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '04b140e01c0931f68778022b35dadacf', '456-456-234', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'jhin@gmail.com', '1', '2020-08-22'),
(113, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', '953b420d46436cf1b5cf349cae9f44d7', '234-234-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ple@gmail.com', '1', '2020-08-22'),
(114, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', 'a9b9c7229f6fd4237fa11575a0e90e2a', '875-675-232', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ben@gmail.com', '1', '2020-08-22'),
(115, 34234, 'KevinÂ ', 'Ayres', '345-123-867', '99f5778fb238596222ba36244e5aa9ae', '345-123-867', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'tan@gmail.com', '1', '2020-08-22'),
(116, 34234, 'Zulema', 'Â Crean', '456-876-345', '0ef33a1f3a9db5c98d3d8038fdfe3422', '456-876-345', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'bambi@gmail.com', '1', '2020-08-22'),
(117, 34234, 'NitaÂ ', 'Tall', '765-453-678', '9f458b996e0c85b654fed393252c8c8c', '765-453-678', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl3@gmai.com', '1', '2020-08-22'),
(118, 34234, 'OnaÂ ', 'Womble', '078-563-675', 'b92909d5bad59ff2c7c07ff3b3ae013c', '078-563-675', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Ona@gmail.com', '1', '2020-08-22'),
(119, 34234, 'Redemple', ' Marcelo', '122-123-123', '00b3fe638347cfcbe274561ea01aa46b', '122-123-123', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(120, 34234, 'Melvina', 'Â Gilpin', '325-234-23', 'db57d5d1aac39b3dbbdf2e1e64fdc56a', '325-234-23', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(121, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', 'c81fcd99f994ecd1df68f4000aa05eec', '345-452-654', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(122, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '7815465f1ba6209f00011f024ff23491', '456-456-234', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(123, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', '3205a85315293d5860f4b2f8557bf515', '234-234-123', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(124, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', '00f6fbdf7f485461512a325ec2d1960d', '875-675-232', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(125, 34234, 'KevinÂ ', 'Ayres', '345-123-867', '4c0e7737f69732d304f40d678df81c60', '345-123-867', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(126, 34234, 'Zulema', 'Â Crean', '456-876-345', 'cdefd46720f6b6cbcfac18d907f0b271', '456-876-345', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(127, 34234, 'NitaÂ ', 'Tall', '765-453-678', '8be335529b00a3b22621354ba9a49101', '765-453-678', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(128, 34234, 'OnaÂ ', 'Womble', '078-563-675', '7ad9ff56a25f4465f6022428b4f1d178', '078-563-675', 'Sta.monica', '12', 'user.png', 'Comsice', '2', '1', '2020-08-22'),
(129, 34234, 'Redemple', 'Marcelo', '12', '58015db07227f86032242c64f33bcea1', '12', 'Bgy. Tiniguiban PPC PALAWAN', '', 'user.png', 'redemple@gmail.com', '', '1', '2020-08-22'),
(130, 34234, 'Redemple', ' Marcelo', '122-123-123', '7bdfc8fb74a1941a9ad125ca8c0652c0', '122-123-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'marceloredemple332@gmail.com', '1', '2020-08-22'),
(131, 34234, 'Melvina', 'Â Gilpin', '325-234-23', 'd5f343a655673a2ed7d75c001dd7b173', '325-234-23', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Â france@gmail.com', '1', '2020-08-22'),
(132, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', '4e04c240bf18ec612eeff585ca4d9230', '345-452-654', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl@gmai.com', '1', '2020-08-22'),
(133, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '7ec7322e48afe2426614cf5269d0b673', '456-456-234', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'jhin@gmail.com', '1', '2020-08-22'),
(134, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', '9db7b174f09d950d7b9bbeb7ca881345', '234-234-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ple@gmail.com', '1', '2020-08-22'),
(135, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', '24950f542d0dc7a10cc1102394aef1e4', '875-675-232', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ben@gmail.com', '1', '2020-08-22'),
(136, 34234, 'KevinÂ ', 'Ayres', '345-123-867', 'e782eedf6c67b63e88f7872afacc556d', '345-123-867', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'tan@gmail.com', '1', '2020-08-22'),
(137, 34234, 'Zulema', 'Â Crean', '456-876-345', '254c815c91dcf32e32c3ca5b2bcd5bf3', '456-876-345', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'bambi@gmail.com', '1', '2020-08-22'),
(138, 34234, 'NitaÂ ', 'Tall', '765-453-678', '625357b7c52ae3b172ce94e1c3eeab02', '765-453-678', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl3@gmai.com', '1', '2020-08-22'),
(139, 34234, 'OnaÂ ', 'Womble', '078-563-675', 'ab14946bf0abeb9d949cad881f61fa41', '078-563-675', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Ona@gmail.com', '1', '2020-08-22'),
(140, 34234, 'Redemple', 'Marcelo', '123456', 'f6cabbc96947e605aeb0844c2196f356', '123456', 'Bgy. Tiniguiban PPC PALAWAN', 'ICT DEPARTMENT', 'user.png', 'redemple@gmail.com', '0898766754', '1', '2020-08-22'),
(141, 34234, 'Redemple', ' Marcelo', '122-123-123', '841024462e2c4b8088816260c7111dd5', '122-123-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'marceloredemple332@gmail.com', '1', '2020-08-22'),
(142, 34234, 'Melvina', 'Â Gilpin', '325-234-23', '9c857bf47f9a2efe217b2ee60466db44', '325-234-23', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Â france@gmail.com', '1', '2020-08-22'),
(143, 34234, 'KazukoÂ ', 'Caplinger', '345-452-654', 'fac26d8ba152ecefb956d03ed5d446ce', '345-452-654', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl@gmai.com', '1', '2020-08-22'),
(144, 34234, 'KeenaÂ ', 'Sauders', '456-456-234', '6add494f36812fd41d38d593ea56b01d', '456-456-234', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'jhin@gmail.com', '1', '2020-08-22'),
(145, 34234, 'AlainaÂ ', 'Griswold', '234-234-123', '98755d618ccb2359be32faee281cf965', '234-234-123', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ple@gmail.com', '1', '2020-08-22'),
(146, 34234, 'DeltaÂ ', 'Gaughan', '875-675-232', '58968e52c3ea82e9be5babfb999d2ea8', '875-675-232', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'ben@gmail.com', '1', '2020-08-22'),
(147, 34234, 'KevinÂ ', 'Ayres', '345-123-867', '97ae21898716742b96e455d4c50a98e9', '345-123-867', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'tan@gmail.com', '1', '2020-08-22'),
(148, 34234, 'Zulema', 'Â Crean', '456-876-345', '132eb1cc06cd5a16d7bb8c286816f8b6', '456-876-345', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'bambi@gmail.com', '1', '2020-08-22'),
(149, 34234, 'NitaÂ ', 'Tall', '765-453-678', 'b498130ab2f19c7486099d89935a99a2', '765-453-678', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'carl3@gmai.com', '1', '2020-08-22'),
(150, 34234, 'OnaÂ ', 'Womble', '078-563-675', 'd276632f5e109c37cfcdc850473d209d', '078-563-675', 'Sta.monica', 'EDUCATION', 'user.png', 'Comsice', 'Ona@gmail.com', '1', '2020-08-22'),
(151, 34234, 'Redemple', 'Marcelo', '2468', '80bcaf5b89f9b9c31edb77a324f869ef', '2468', 'Bgy. Tiniguiban PPC PALAWAN', 'ICT DEPARTMENT', 'user.png', 'redemple@gmail.com', '0898766754', '1', '2020-08-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
