-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2020 at 11:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educheck_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
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
  `admin_who_add_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `tbl_deped` (
  `grade_id` int(11) NOT NULL,
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
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partnership_requests`
--

CREATE TABLE `tbl_partnership_requests` (
  `request_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `request_status` varchar(255) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_partnership_requests`
--

INSERT INTO `tbl_partnership_requests` (`request_id`, `firstname`, `lastname`, `occupation`, `email`, `contact`, `school_name`, `school_address`, `request_status`, `request_date`) VALUES
(12, 'Gary', 'Senoc', 'Programmer', 'garysenoc@gmail.com', '0092398726', 'San Jose National High School', 'Bgy. San Jose PPC, PALAWAN', 'pending', '2020-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_caption` varchar(255) NOT NULL,
  `post_attach_file` varchar(255) NOT NULL,
  `post_privacy` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_views` int(11) NOT NULL,
  `post_likes` int(11) NOT NULL,
  `post_comments` int(11) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schools`
--

CREATE TABLE `tbl_schools` (
  `school_id` int(11) NOT NULL,
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
  `edu_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schools`
--

INSERT INTO `tbl_schools` (`school_id`, `school_name`, `school_address`, `school_level`, `sadmin_firstname`, `sadmin_lastname`, `sadmin_id_number`, `sadmin_username`, `sadmin_password`, `sadmin_email`, `sadmin_contact`, `school_logo`, `subscription_status`, `sadmin_img`, `account_date`, `edu_admin_id`) VALUES
(9, 'San Jose National High School', 'Bgy. San Jose PPC, PALAWAN', 'Secondary', 'Rachel', 'Adon', 'Admin2017-3-323', 'Admin2017-3-323', '647275ad20eae13751ebc2db3384a004', 'sanjose@gmail.com', '0980945254', '953635.jpeg', '2 Years', '', '2020-08-20', 1),
(11, 'PALAWAN STATE UNIVERSITY LABORATORY HIGHSCHOOL', 'Bgy. Tiniguiban PPC, PALAWAN', 'Secondary', 'Gary ', 'Chua', 'Admin2017-3-323', 'Admin2017-3-323', 'e506dac3e25c0c63c10869ddb48d7434', 'psulab@gmail.com', '0980945254', '22946.png', '2 Years', '', '2020-08-20', 1),
(12, '2San Jose National High School', 'Bgy. San Jose PPC, PALAWAN', '', '', '', '123', '123', '84b927dad17da0fd988797ce2a5ccddc', '', '', '405477.png', '', '', '2020-08-21', 1),
(13, 'NEW SCHOOL HIGH SCHOOL', '', '', '', '', 'school', 'school', 'c6fa58bc472c68bd8a05ca5b657cc55b', '', '', 'user.png', '', '', '2020-08-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `stud_id` int(11) NOT NULL,
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
  `stud_account_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(44, 34234, 'qwe', 'qwe', 'asas', 'b5ffe0d3ad6fa1b15eb75c6dfdefb618', 'asas', 'f', 'sf', 'fas', 'f', 'user.png', 'as', 'as', '1', '2020-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `teacher_id` int(11) NOT NULL,
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
  `teacher_account_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(23, 34234, 'qwe', 'qwe', 'asas', 'a9ac6aec8292cbb4b08a93a1e96f13b1', 'asas', 'f', 'fas', 'user.png', 'f', 'as', '1', '2020-08-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deped`
--
ALTER TABLE `tbl_deped`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `tbl_partnership_requests`
--
ALTER TABLE `tbl_partnership_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_schools`
--
ALTER TABLE `tbl_schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_deped`
--
ALTER TABLE `tbl_deped`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_partnership_requests`
--
ALTER TABLE `tbl_partnership_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_schools`
--
ALTER TABLE `tbl_schools`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
