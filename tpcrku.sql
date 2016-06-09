-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2016 at 03:40 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpcrku`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE IF NOT EXISTS `branch_master` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(255) DEFAULT NULL,
  `sch_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `syllabus-file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `campus_drive`
--

CREATE TABLE IF NOT EXISTS `campus_drive` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_details` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `skill_required` varchar(255) DEFAULT NULL,
  `eligibility` varchar(255) DEFAULT NULL,
  `postion` varchar(255) DEFAULT NULL,
  `CTC` varchar(255) DEFAULT NULL,
  `eligibleyear` int(11) DEFAULT NULL,
  `eligiblebranch` varchar(255) DEFAULT NULL,
  `bond_details` varchar(255) DEFAULT NULL,
  `reg_last_date` date DEFAULT NULL,
  `joing_date` date DEFAULT NULL,
  `drive_date` date DEFAULT NULL,
  `drive_vanue` varchar(255) DEFAULT NULL,
  `selection_process` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `other_info` varchar(255) DEFAULT NULL,
  `attacement` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `approve_date` datetime DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `approve_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `campus_drive`
--

INSERT INTO `campus_drive` (`c_id`, `company_id`, `type`, `job_title`, `job_details`, `location`, `skill_required`, `eligibility`, `postion`, `CTC`, `eligibleyear`, `eligiblebranch`, `bond_details`, `reg_last_date`, `joing_date`, `drive_date`, `drive_vanue`, `selection_process`, `contact_person`, `mobile`, `email`, `other_info`, `attacement`, `status`, `approve_date`, `post_date`, `post_by`, `approve_by`) VALUES
(1, 1, 'IT', 'Recurment Of Programmer', '5 .net Developer require with MVC', 'Surat', '.net Framework , MVC Strucrure', 'Above 60', 'Developer', '16000', 2016, 'MCA', 'NON', '2016-04-20', '2016-06-01', '2016-06-25', 'ON Campus', 'Aptitude Test,Personal interview,Technical', 'Nirav Bhatt', 978348733, 'nirav@rku.ac.in', 'we require good communication', 'document/drive.pdf', '1', '2016-04-14 00:00:00', '2016-04-16 00:00:00', 'RKU TPO', 'RKU TPO'),
(2, 1, 'IT', 'Recurment Of Programmer & Desinger', '10 .net Developer require with MVC', 'Baroda', '.net Framework , MVC Strucrure', 'Between 50 to 75', 'Developer & Designer', '17000', 2016, 'MCA', '6 Month Bond', '2016-04-23', '2016-06-05', '2016-06-03', 'ON Campus', 'Aptitude Test,Group Dicusstion,Personal interview', 'Hardik Mehta', 942710358, 'hardik@rku.ac.in', 'we require good communication', 'document/drive.pdf', '1', '2016-04-14 00:00:00', '2016-04-16 00:00:00', 'RKU TPO', 'RKU TPO');

-- --------------------------------------------------------

--
-- Table structure for table `company_master`
--

CREATE TABLE IF NOT EXISTS `company_master` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `prof_pic` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact1` int(11) DEFAULT NULL,
  `contact2` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `est_year` int(11) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `desg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `company_master`
--

INSERT INTO `company_master` (`company_id`, `name`, `prof_pic`, `city`, `contact1`, `contact2`, `email`, `website`, `domain`, `est_year`, `contact_person`, `details`, `desg`) VALUES
(1, 'Tata Consultancy services', 'company/01.png', 'Baroda', NULL, NULL, 'hr@tcs.com', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ATOS', 'company/05.png', 'juns', NULL, NULL, 'jhfd@g.c', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Jasmeen Solanki', 'img/default.png', 'dkffjk', NULL, NULL, 'solanki.jasmeen11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'admin', 'img/default/png', 'Junagadh', NULL, NULL, 'a@a.com', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ccompany', 'http://localhost/rkutpc_Part1/tpc_asset/company/prof/11.png', 'Junagadh', 123, 123, 'c@c.com', 'vfgvfv', 'xdsx', 2014, 'wwdw', 'ddsc', 'wds'),
(7, 'abc', '', 'botad', NULL, NULL, 'ad@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drive_participation`
--

CREATE TABLE IF NOT EXISTS `drive_participation` (
  `d_part_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `Atest` varchar(10) NOT NULL,
  `techinal` varchar(10) NOT NULL,
  `gd` varchar(10) NOT NULL,
  `PI` varchar(10) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`d_part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE IF NOT EXISTS `event_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `event_details` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `event_date` date NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`id`, `event_name`, `img`, `event_details`, `post_date`, `event_date`, `is_active`) VALUES
(1, ' Techno Plant 2016', '', 'A National Level Event Of Engg. & Computer Science of Different College and Many Mor Fun. ', '2016-04-22', '2016-06-20', 1),
(2, ' Techno Plant 2015', '', 'A National Level Event Of Engg. & Computer Science of Different College and Many Mor Fun. ', '2016-04-08', '2015-05-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `last-login` datetime DEFAULT NULL,
  `state` varchar(255) DEFAULT '1',
  `ipaddress` varchar(255) DEFAULT NULL,
  `is_approved` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `type`, `user_id`, `last-login`, `state`, `ipaddress`, `is_approved`) VALUES
(1, 'TCS', '439ed537979d8e831561964dbbbd7413', 'company', NULL, NULL, '1', NULL, 0),
(2, 'Jasmeen Solanki', 'd41d8cd98f00b204e9800998ecf8427e', 'company', NULL, NULL, '1', NULL, 0),
(3, 'solanki.jasmeen11@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'institute', NULL, NULL, '1', NULL, 0),
(4, 'a@a.com', 'd41d8cd98f00b204e9800998ecf8427e', 'company', NULL, NULL, '1', NULL, 0),
(5, 'harsh@g.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'student', 'h@g.com', NULL, '1', NULL, 0),
(6, '', 'd41d8cd98f00b204e9800998ecf8427e', 'company', NULL, NULL, '1', NULL, 0),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', 'institute', NULL, NULL, '1', NULL, 0),
(8, 'h@g.com', 'd4e3730e8cba214f85cddae5f9331d74', 'student', NULL, NULL, '1', NULL, 1),
(9, 'r@p.com', '439ed537979d8e831561964dbbbd7413', 'student', NULL, NULL, '1', NULL, 1),
(10, 'c@c.com', '3691308f2a4c2f6983f2880d32e29c84', 'company', NULL, NULL, '1', NULL, 1),
(11, 'ad@gmail.com', '523af537946b79c4f8369ed39ba78605', 'company', NULL, NULL, '1', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `postby` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `enable` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `title`, `details`, `photo`, `postby`, `date`, `enable`) VALUES
(1, 'Gallor Event is Goiing ON ..... . ', 'RK University''s "Galore" is Saurasthra''s Largest Cultural and Sports Fest which held on 14th Feb 2016 #HamuGadhvi Hall-Rajkot gujrat', 'rkuga.jpg', 'RKU TPO', '2016-05-12 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_master`
--

CREATE TABLE IF NOT EXISTS `school_master` (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `establish_date` datetime DEFAULT NULL,
  `conn_university` varchar(255) DEFAULT NULL,
  `schooltype` varchar(255) DEFAULT NULL,
  `deptment` varchar(40) NOT NULL,
  `manageby` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact1` int(11) DEFAULT NULL,
  `contact2` int(11) DEFAULT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school_master`
--

INSERT INTO `school_master` (`sch_id`, `sch_name`, `address`, `city`, `state`, `country`, `establish_date`, `conn_university`, `schooltype`, `deptment`, `manageby`, `name`, `email`, `contact1`, `contact2`) VALUES
(1, 'kasmin', NULL, 'jhdf', NULL, NULL, NULL, NULL, 'Private', '', NULL, NULL, 'solanki.jasmeen11@gmail.com', NULL, NULL),
(2, '', NULL, '', NULL, NULL, NULL, NULL, 'Private', '', NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_view`
--

CREATE TABLE IF NOT EXISTS `student_view` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `View_details` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_academy`
--

CREATE TABLE IF NOT EXISTS `stud_academy` (
  `stud_acd_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(20) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `sch_clg_name` varchar(50) NOT NULL,
  `board_uni` varchar(50) NOT NULL,
  `attempt` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `stud_id` int(11) NOT NULL,
  PRIMARY KEY (`stud_acd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stud_achievement`
--

CREATE TABLE IF NOT EXISTS `stud_achievement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `acti_name` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `sch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `acti_name` (`acti_name`),
  KEY `sch_id` (`sch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stud_certi`
--

CREATE TABLE IF NOT EXISTS `stud_certi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certi_name` varchar(50) NOT NULL,
  `issue_by` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `certi_img` varchar(200) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stud_master`
--

CREATE TABLE IF NOT EXISTS `stud_master` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `enno` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `father_nm` varchar(50) NOT NULL,
  `mother_nm` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mobile1` int(12) NOT NULL,
  `mobile2` int(12) NOT NULL,
  `email` varchar(70) NOT NULL,
  `website` varchar(50) NOT NULL,
  `per_addr` text NOT NULL,
  `lcl_addr` text NOT NULL,
  `nativ_city` varchar(20) NOT NULL,
  `strength` text NOT NULL,
  `weaknes` text NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes',
  `sch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `batch_start` int(4) NOT NULL,
  `batch_end` int(4) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stud_master`
--

INSERT INTO `stud_master` (`stud_id`, `enno`, `fname`, `mname`, `lname`, `photo`, `father_nm`, `mother_nm`, `gender`, `mobile1`, `mobile2`, `email`, `website`, `per_addr`, `lcl_addr`, `nativ_city`, `strength`, `weaknes`, `active`, `sch_id`, `branch_id`, `batch_start`, `batch_end`) VALUES
(1, '', 'Harsh', '', 'Bhatt', '5.jpg', '', '', 'male', 0, 0, 'h@g.com', '', '', '', 'junagadh', '', '', 'yes', 0, 0, 0, 0),
(2, '', 'Radhika', '', 'Patel', '4.png', '', '', 'male', 0, 0, 'r@p.com', '', '', '', 'rajkot', '', '', 'yes', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
