-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2023 at 12:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snake_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`account_id`, `username`, `password`) VALUES
(1, 'jcdavid', '$2y$10$IeMlNJ3td.LP8drWCiAMkOloBavyA/eOV7u4Jci5OnqN6A6p7WqQS'),
(2, 'jcdavid1', '$2y$10$N898kJh0VkaCufjQRurtQeNC75hsp3ilF0YU5CAhGB8RGKbCquXn2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details`
--

CREATE TABLE `tbl_details` (
  `account_id` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `gold` int(11) DEFAULT 0,
  `skin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_details`
--

INSERT INTO `tbl_details` (`account_id`, `avatar`, `gold`, `skin`) VALUES
(1, '../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/JERRY_SAMPLE.jpg', 50, 'head-purple'),
(2, '../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/SUM_SAMPLE.jpg', 50, 'head-pink');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `account_id` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`account_id`, `score`) VALUES
(1, 3),
(2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skins`
--

CREATE TABLE `tbl_skins` (
  `account_id` int(11) NOT NULL,
  `skin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_skins`
--

INSERT INTO `tbl_skins` (`account_id`, `skin_name`) VALUES
(1, 'head-yellow'),
(1, 'head-blue'),
(1, 'head-pink'),
(2, 'head-yellow'),
(2, 'head-pink'),
(1, 'head-green'),
(1, 'head-purple'),
(1, 'head-red');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
