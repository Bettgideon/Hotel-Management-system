-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2024 at 12:42 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(50) NOT NULL,
  `admin_firstname` varchar(255) NOT NULL,
  `admin_lastname` varchar(255) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  `admin_rank` varchar(20) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `registration_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `admin_id`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_phone`, `admin_rank`, `admin_password`, `registration_timestamp`) VALUES
(1, 'CIM/00069/021', 'kirigo', 'evans', 'kipngenokirigo@gmail.com', '0758413462', 'super_admin', '4cb8e45bd18070ba7d3af01bd3f0f619', '2022-04-03 19:43:10'),
(2, 'MSU/00050/022', 'Caroline', 'Mwihoko', 'carolinem23@gmail.com', '0745973325', 'admin', '4e1a68f169ea4af35b8d980e2f67fa67', '2022-04-03 19:43:10'),
(3, 'MSU/00065/022', 'Martin', 'Mwai', 'mwaimartin@gmail.com', '0752658578', 'super_admin', '4e1a68f169ea4af35b8d980e2f67fa67', '2022-05-22 07:56:05'),
(4, 'MSU/00082/022', 'Grace', 'Kimanthi', 'kimathigrace2001@gmail.com', '0712547885', 'admin', '4e1a68f169ea4af35b8d980e2f67fa67', '2022-05-22 07:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_team`
--

CREATE TABLE `delivery_team` (
  `id` int(11) NOT NULL,
  `team_id` varchar(50) NOT NULL,
  `team_username` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_phone` int(15) NOT NULL,
  `team_email` varchar(50) NOT NULL,
  `team_password` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `registration_timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_team`
--

INSERT INTO `delivery_team` (`id`, `team_id`, `team_username`, `team_name`, `team_phone`, `team_email`, `team_password`, `password_reset_token`, `registration_timestamp`) VALUES
(1, 'TM01', 'HYDRO/022', 'Team Hydro', 786378542, 'letsgo@gmail.com', 'ebcfd5a11d7cf5ba89f838fc766be7a4', NULL, '2022-04-04 11:21:26'),
(2, 'TM02', 'CUTY/022', 'Team Cuty', 742975635, 'blinxcorporation@gmail.com', 'ebcfd5a11d7cf5ba89f838fc766be7a4', NULL, '2022-04-04 11:21:26'),
(3, 'TM03', 'SHIFTY/022', 'Team Shifty', 759753362, 'shifty@gmail.com', 'ebcfd5a11d7cf5ba89f838fc766be7a4', NULL, '2022-04-04 11:22:37'),
(4, 'TM04', 'LIONS/022', 'The Lions', 785415289, 'masenolions@gmail.com', '86aa71c6832f46e2d79134fe3d5080b7', NULL, '2022-05-21 23:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_team_members`
--

CREATE TABLE `delivery_team_members` (
  `id` int(20) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  `delivery_team_id` varchar(50) NOT NULL,
  `time_of_registration` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_team_members`
--

INSERT INTO `delivery_team_members` (`id`, `member_id`, `fname`, `lname`, `email`, `phone`, `role_id`, `delivery_team_id`, `time_of_registration`) VALUES
(1, 'MB01', 'Thomas', 'Kimeu', 'kimeuthomas@gmail.com', 712579874, 'MSU/001A/022', 'TM01', '2022-04-08 15:10:41'),
(2, 'MB02', 'David', 'Philip', 'davidphilip@gmail.com', 765248545, 'MSU/001B/022', 'TM02', '2022-04-08 15:10:41'),
(3, 'MB03', 'Duncan', 'Ondieki', 'ondiekiduncan@gmail.com', 779854258, 'MSU/001C/022', 'TM03', '2022-04-08 15:10:41'),
(4, 'MB04', 'Mwanzia', 'Kimani', 'kimanimwanzia20@gmail.com', 789542658, 'MSU/001A/022', 'TM02', '2022-04-08 16:03:35'),
(5, 'MB05', 'James', 'Patrick', 'patrickjames21@gmail.com', 745987456, 'MSU/001A/022', 'TM03', '2022-04-08 16:04:43'),
(6, 'MB06', 'Caroline', 'Murathe', 'murathercarol@gmail.com', 766879853, 'MSU/001B/022', 'TM01', '2022-04-08 16:06:59'),
(7, 'MB07', 'Jane', 'Odongo', 'odongojane25@gmail.com', 745783258, 'MSU/001B/022', 'TM03', '2022-04-08 16:07:53'),
(8, 'MB08', 'Mutia', 'Kioko', 'mutiakioko@gmai.com', 798959863, 'MSU/001C/022', 'TM01', '2022-04-08 16:09:32'),
(9, 'MB09', 'Angela', 'Mutuku', 'mutukuangie@gmail.com', 725627894, 'MSU/001C/022', 'TM02', '2022-04-08 16:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_team_tasks`
--

CREATE TABLE `delivery_team_tasks` (
  `id` int(10) NOT NULL,
  `food_order_code` varchar(50) NOT NULL,
  `delivery_team_id` varchar(50) NOT NULL,
  `assigning_admin_id` varchar(50) NOT NULL,
  `team_status` varchar(255) NOT NULL DEFAULT 'Unassigned',
  `assignment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `delivery_team_tasks`
--

INSERT INTO `delivery_team_tasks` (`id`, `food_order_code`, `delivery_team_id`, `assigning_admin_id`, `team_status`, `assignment_time`) VALUES
(25, 'D8FVMAT', 'TM01', 'CIM/00069/021', 'Assigned', '2022-11-30 09:59:16'),
(26, 'D8FVMAT', 'TM01', 'CIM/00069/021', 'Assigned', '2022-11-30 09:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_list`
--

CREATE TABLE `failed_list` (
  `id` int(20) NOT NULL,
  `users_ordercode` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request_status`
--

CREATE TABLE `request_status` (
  `id` int(20) NOT NULL,
  `orderID` varchar(50) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `request_latitude` varchar(50) NOT NULL DEFAULT '0',
  `request_longitude` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) DEFAULT 'Pending',
  `food_type` varchar(50) NOT NULL,
  `manual_directions` varchar(500) DEFAULT 'N/A',
  `food_description` varchar(255) DEFAULT 'No Description',
  `admNo` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_status`
--

INSERT INTO `request_status` (`id`, `orderID`, `ip_address`, `request_latitude`, `request_longitude`, `status`, `food_type`, `manual_directions`, `food_description`, `admNo`, `timestamp`) VALUES
(42, '99XPV9V', '192.107.70.4', '0', '0', 'Pending', 'sickness', 'werrettt', '', 'CIM/00069/021', '2024-03-01 04:40:30'),
(33, 'D8FVMAT', '165.105.70.4', '-1.2920659', '36.8219462', 'Assigned', 'sickness', 'N/A', 'Having headache', 'CIM/00069/021', '2022-11-30 12:40:11'),
(37, 'I01WV1J', '165.105.70.4', '-1.2920659', '36.8219462', 'Pending', 'other', 'N/A', '', 'CIM/00069/021', '2022-11-30 12:42:47'),
(34, 'MA12HDS', '165.105.70.4', '-1.2920659', '36.8219462', 'Pending', 'accident', 'N/A', '', 'CIM/00069/021', '2022-11-30 12:41:44'),
(41, 'QSAH78K', '192.107.70.4', '-1.2713984', '36.814848', 'Pending', 'sickness', 'N/A', 'tyyuuii', 'CIM/00069/021', '2024-02-29 15:35:24'),
(40, 'R3KVHWH', '165.105.70.4', '0', '0', 'Pending', 'accident', 'Maseno GSQ', 'playing football', 'CIM/00069/021', '2022-11-30 12:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_details`
--

CREATE TABLE `role_details` (
  `id` int(11) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `role_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_details`
--

INSERT INTO `role_details` (`id`, `role_id`, `role_name`, `role_description`) VALUES
(1, 'MSU/001A/022', 'Driver', 'Drive the assigned university vehicle'),
(2, 'MSU/001B/022', 'Paramedic', 'Provide emergency medical assistance, such as CPR or bandaging a wound. Quickly and efficiently assess a patient\'s condition and determine the best course of treatment.'),
(3, 'MSU/001C/022', 'Nurse', 'to ensure that every patient receives the direct and proper care they need.');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `name` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `room_type` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `success_list`
--

CREATE TABLE `success_list` (
  `id` int(20) NOT NULL,
  `users_ordercode` varchar(50) NOT NULL,
  `incident_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(20) NOT NULL,
  `regNum` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_reset_token` varchar(500) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `regNum`, `firstname`, `lastname`, `emailaddress`, `phonenumber`, `password`, `password_reset_token`, `date`) VALUES
(1, 'CIM/00069/021', 'kirigo', 'kipngeno', 'kipngenokirigo@gmail.com', '0711362472', '4cb8e45bd18070ba7d3af01bd3f0f619', NULL, '2022-05-20 09:30:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `uniq` (`id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `delivery_team`
--
ALTER TABLE `delivery_team`
  ADD PRIMARY KEY (`team_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `delivery_team_members`
--
ALTER TABLE `delivery_team_members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `delivery_team_id` (`delivery_team_id`) USING BTREE,
  ADD KEY `member_sno` (`id`);

--
-- Indexes for table `delivery_team_tasks`
--
ALTER TABLE `delivery_team_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigning_admin_id` (`assigning_admin_id`),
  ADD KEY `delivery_team_id` (`delivery_team_id`),
  ADD KEY `helpcode` (`food_order_code`);

--
-- Indexes for table `failed_list`
--
ALTER TABLE `failed_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_helpcode` (`users_ordercode`);

--
-- Indexes for table `request_status`
--
ALTER TABLE `request_status`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `admNo` (`admNo`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `role_details`
--
ALTER TABLE `role_details`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `success_list`
--
ALTER TABLE `success_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_helpcode` (`users_ordercode`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`regNum`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_team`
--
ALTER TABLE `delivery_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_team_members`
--
ALTER TABLE `delivery_team_members`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delivery_team_tasks`
--
ALTER TABLE `delivery_team_tasks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_list`
--
ALTER TABLE `failed_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_status`
--
ALTER TABLE `request_status`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `role_details`
--
ALTER TABLE `role_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `success_list`
--
ALTER TABLE `success_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery_team_members`
--
ALTER TABLE `delivery_team_members`
  ADD CONSTRAINT `member_role` FOREIGN KEY (`role_id`) REFERENCES `role_details` (`role_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_team` FOREIGN KEY (`delivery_team_id`) REFERENCES `delivery_team` (`team_id`) ON UPDATE CASCADE;

--
-- Constraints for table `delivery_team_tasks`
--
ALTER TABLE `delivery_team_tasks`
  ADD CONSTRAINT `adminid` FOREIGN KEY (`assigning_admin_id`) REFERENCES `admin_details` (`admin_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `helpid` FOREIGN KEY (`food_order_code`) REFERENCES `request_status` (`orderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teamid` FOREIGN KEY (`delivery_team_id`) REFERENCES `delivery_team` (`team_id`) ON UPDATE CASCADE;

--
-- Constraints for table `failed_list`
--
ALTER TABLE `failed_list`
  ADD CONSTRAINT `failed_list` FOREIGN KEY (`users_ordercode`) REFERENCES `request_status` (`orderID`) ON UPDATE CASCADE;

--
-- Constraints for table `request_status`
--
ALTER TABLE `request_status`
  ADD CONSTRAINT `student_user` FOREIGN KEY (`admNo`) REFERENCES `users_details` (`regNum`) ON UPDATE CASCADE;

--
-- Constraints for table `success_list`
--
ALTER TABLE `success_list`
  ADD CONSTRAINT `success_list_ibfk_1` FOREIGN KEY (`users_ordercode`) REFERENCES `request_status` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
