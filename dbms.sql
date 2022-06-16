-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2022 at 09:11 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `arm`
--

DROP TABLE IF EXISTS `arm`;
CREATE TABLE IF NOT EXISTS `arm` (
  `arm_id` int NOT NULL AUTO_INCREMENT,
  `arm_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`arm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arm`
--

INSERT INTO `arm` (`arm_id`, `arm_name`) VALUES
(1, 'A'),
(2, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `created_at`) VALUES
(1, 'Nursery I', '2022-05-18 14:18:14'),
(2, 'Nursery II', '2022-05-18 14:30:52'),
(3, 'Nursery III', '2022-05-27 11:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `classarm`
--

DROP TABLE IF EXISTS `classarm`;
CREATE TABLE IF NOT EXISTS `classarm` (
  `classarm_id` int NOT NULL AUTO_INCREMENT,
  `class_id` int NOT NULL,
  `arm_id` int NOT NULL,
  PRIMARY KEY (`classarm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classarm`
--

INSERT INTO `classarm` (`classarm_id`, `class_id`, `arm_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 2, 1),
(5, 3, 1),
(6, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_id` int NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `staff_id`, `date`, `time`) VALUES
(1, 'Heartland', 0, '19-05-2022', '12:11:54pm'),
(2, 'Landline', 0, '19-05-2022', '12:17:54 pm');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

DROP TABLE IF EXISTS `enroll`;
CREATE TABLE IF NOT EXISTS `enroll` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `class_id` int NOT NULL,
  `class_arm_id` int NOT NULL,
  `session_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `student_id`, `class_id`, `class_arm_id`, `session_id`, `created_at`) VALUES
(1, 1, 1, 2, 3, '2022-05-24 14:49:25'),
(2, 2, 2, 3, 3, '2022-05-24 14:51:21'),
(3, 3, 3, 5, 3, '2022-06-10 11:38:00'),
(4, 4, 2, 4, 3, '2022-06-10 11:40:24'),
(5, 5, 1, 1, 1, '2022-06-10 11:47:58'),
(13, 13, 2, 2, 1, '2022-06-10 14:19:03'),
(14, 14, 1, 1, 3, '2022-06-14 12:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

DROP TABLE IF EXISTS `global_settings`;
CREATE TABLE IF NOT EXISTS `global_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(255) NOT NULL,
  `institution_code` varchar(255) NOT NULL,
  `reg_prefix` varchar(255) NOT NULL,
  `institute_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `currency_symbol` varchar(100) NOT NULL,
  `sms_service_provider` varchar(100) NOT NULL,
  `session_id` int NOT NULL,
  `translation` varchar(100) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `animations` varchar(100) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `date_format` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `cron_secret_key` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int NOT NULL AUTO_INCREMENT,
  `grade_name` varchar(255) NOT NULL,
  `grade_remark` text NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

DROP TABLE IF EXISTS `login_credential`;
CREATE TABLE IF NOT EXISTS `login_credential` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` tinyint NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1(active) 0(deactivate)',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `user_id`, `username`, `password`, `role`, `active`, `last_login`, `created_at`) VALUES
(1, 1, 'admin@admin.com', '64e1b8d34f425d19e1ee2ea7236d3028', 1, 1, NULL, '2020-05-31 13:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `othername` varchar(255) DEFAULT NULL,
  `occupation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `next_kin` varchar(255) NOT NULL,
  `next_mobile` varchar(255) NOT NULL,
  `home_address` text NOT NULL,
  `office_address` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint NOT NULL DEFAULT '0' COMMENT '0(active) 1(deactivate)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `title`, `surname`, `firstname`, `othername`, `occupation`, `email`, `mobileno`, `next_kin`, `next_mobile`, `home_address`, `office_address`, `photo`, `created_at`, `active`) VALUES
(1, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:38:00', 1),
(2, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:40:24', 1),
(3, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:40:59', 1),
(4, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:47:58', 1),
(5, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:49:12', 1),
(6, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:49:30', 1),
(7, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:54:40', 1),
(8, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:56:12', 1),
(9, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:56:55', 1),
(10, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 11:57:35', 1),
(11, '', 'okekeifechidere@gmail.com', '', '', '', '', '', '', '', '', '', '', '2022-06-10 14:19:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

DROP TABLE IF EXISTS `reset_password`;
CREATE TABLE IF NOT EXISTS `reset_password` (
  `key` longtext NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_credential_id` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

DROP TABLE IF EXISTS `schoolyear`;
CREATE TABLE IF NOT EXISTS `schoolyear` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_year` varchar(255) NOT NULL,
  `created_by` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`id`, `school_year`, `created_by`, `created_at`) VALUES
(1, 'First Term 2019/2020', 1, '2020-02-26 01:35:41'),
(3, 'Second Term 2019/2020', 1, '2020-02-26 01:35:41'),
(4, 'Third Term 2019/2020', 1, '2020-02-26 01:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `sport_house`
--

DROP TABLE IF EXISTS `sport_house`;
CREATE TABLE IF NOT EXISTS `sport_house` (
  `id` int NOT NULL AUTO_INCREMENT,
  `house_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport_house`
--

INSERT INTO `sport_house` (`id`, `house_name`, `color`) VALUES
(1, 'Blue', 'Blue'),
(2, 'Winners', 'Green'),
(3, 'Manchester', 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `other_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `birthday` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mobileno` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lga` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `home_address` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `role_id` int NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rank` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `grade` int NOT NULL,
  `step` int NOT NULL,
  `joining_date` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `appoint_date` varchar(250) NOT NULL,
  `posting_date` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `confirmation_date` varchar(250) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sporthouse_id` int DEFAULT NULL,
  `department_id` set('1','2','3') DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `title`, `first_name`, `last_name`, `other_name`, `gender`, `birthday`, `email`, `mobileno`, `state`, `lga`, `home_address`, `role_id`, `qualification`, `rank`, `grade`, `step`, `joining_date`, `appoint_date`, `posting_date`, `confirmation_date`, `photo`, `sporthouse_id`, `department_id`, `created_at`, `updated_at`, `hash`) VALUES
(1, '3597c7f', NULL, NULL, NULL, 'admin', 'F', '', 'admin@admin.com', '090777777', '', '', '0', 0, '', '0', 0, 0, '2020-05-31', '', '', '', NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(15, '924e4de0', 'Mr', 'sheddie', 'Okeke', 'King', 'M', '2017-01-01', 'okekeifechidere@gmail.com', '09077613898', 'Abia', 'Bende', 'Koko hebbi state', 1, 'Winer', 'o', 3, 3, '2017-01-01', '2017-01-01', '2017-01-01', '2017-01-01', 'pass', 2, '1', '2022-05-23 09:41:56', '2022-05-23 09:41:56', ''),
(22, '566015ca', 'Mr', 'Long', 'Okeke', 'Sean', 'F', '2010-01-04', 'okekeifechidere666@gmail.com', '09077613898', 'Adamawa', 'Ganye', 'Koko hebbi state', 1, 'Winer', '', 0, 0, '', '', '', '', 'pass', 0, '1', '2022-05-23 10:53:29', '2022-05-23 10:53:29', ''),
(27, '3d590757', 'Mrs', 'Doris', 'Okeke', 'Onyego', 'F', '2022-06-21', 'okekeifechidee666@gmail.com', '09077613898', 'Adamawa', 'Ganye', 'Koko Bauchi  state', 1, 'Winer', '', 0, 0, '2022-06-16', '', '', '', '3d590757.png', 2, '1', '2022-06-14 20:57:08', '2022-06-14 20:57:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `register_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admission_date` varchar(100) NOT NULL,
  `surname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `blood_group` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `genotype` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `place_birth` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `religion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lga` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state_origin` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lga_origin` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mobileno` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `home_address` text NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sporthouse_id` int NOT NULL DEFAULT '0',
  `previous_details` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `register_no`, `admission_date`, `surname`, `first_name`, `last_name`, `blood_group`, `genotype`, `birthday`, `place_birth`, `religion`, `gender`, `email`, `state`, `lga`, `state_origin`, `lga_origin`, `mobileno`, `home_address`, `photo`, `sporthouse_id`, `previous_details`, `created_at`) VALUES
(1, 'STM0000001', '05/24/22', 'Sean', 'Dean', 'Andrade', 'A-', 'AA', '2022-04-24', 'Koko', 'Islam', 'Female', 'okekeifechidere@gmail.com', 'Adamawa', 'Ganye', 'Anambra', 'Anambra East', '', '1', 'pass', 1, '{school_name :CSS Umuoba Anam,last_attended:2022-04-24}', '2022-05-24 13:49:24'),
(2, 'STM0000002', '05/24/22', 'Shadrach', 'Ifechidere', '', 'A-', 'SS', '2022-04-04', '', 'Islam', 'Female', 'okekeifechidere666@gmail.com', 'Anambra', 'Anambra West', 'Anambra', 'Awka North', '', '2', 'pass', 2, '{school_name:null,last_attended:null}', '2022-05-24 13:51:21'),
(3, 'STM0000003', '06/10/22', 'Alvaro', 'MIguel', 'Gonzalez', 'O+', 'AS', '2022-06-20', 'Koko', 'Islam', 'Female', 'okekeifechidere@gmail.com', 'Abia', 'Arochukwu', 'Abia', 'Aba South', '', '0', 'pp.jfif', 3, '{school_name:null,last_attended:null}', '2022-06-10 10:37:59'),
(4, 'STM0000004', '06/10/22', 'Conor', 'Coady', 'Dendoncker', 'B+', 'AA', '2022-06-20', 'Koko', 'Islam', 'Female', 'okekeifechidere@gmail.com', 'Anambra', 'Aguata', 'Adamawa', 'Gombi', '', '0', 'download.png', 2, '{school_name :CSS Umuoba Anam,last_attended:}', '2022-06-10 10:40:24'),
(5, 'STM0000005', '06/10/22', 'Seano', 'Deano', 'Arrdee', 'B+', 'AS', '2022-06-07', 'Koko', 'Islam', 'Male', 'okekeifechidere@gmail.com', 'AkwaIbom', 'Eket', 'AkwaIbom', 'Eastern Obolo', '', '0', NULL, 2, '{school_name :CSS Umuoba Anam,last_attended:2022-06-09}', '2022-06-10 10:47:57'),
(13, 'STM0000006', '06/10/22', 'long', 'john', 'alejandro', 'A+', 'AS', '2012-06-06', 'Koko', 'Christianity', 'Male', 'okekeifechidere@gmail.com', 'Adamawa', 'Fufure', 'AkwaIbom', 'Eket', '', '0', 'STM0000006.png', 2, '{school_name:null,last_attended:null}', '2022-06-10 13:19:03'),
(14, 'STM0000014', '06/14/22', 'Sean', 'Dean', 'Andrade', 'O+', 'AS', '2022-06-27', 'Koko', 'Islam', 'Male', 'okekeifechidere@gmail.com', 'Anambra', 'Anambra West', 'AkwaIbom', 'Esit Eket', '09012345678', 'home', 'STM0000014.jfif', 1, '{school_name :CSS Umuoba Anam,last_attended:2021-12-14}', '2022-06-14 11:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject_code` varchar(200) NOT NULL,
  `department_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_code`, `department_id`) VALUES
(1, 'Mathematics', 'MATHS', 1),
(2, 'English language', 'ENG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject_assign`
--

DROP TABLE IF EXISTS `subject_assign`;
CREATE TABLE IF NOT EXISTS `subject_assign` (
  `id` int NOT NULL AUTO_INCREMENT,
  `classarm_id` int NOT NULL,
  `subject_id` longtext NOT NULL,
  `teacher_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
