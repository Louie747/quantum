-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2023 at 02:52 AM
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
(1, 'jcdavid', '$2y$10$dlJKsZNPSpHqk41OxwUl1OAiWE7EYoK6J1QghuiJrSi2wpzzQEdbi'),
(3, 'jcdavid1', '$2y$10$hCLbcxau.G6jvBAmBQTmY.7dqPrbf/.5Lj7bUbOkMHY7gEDRuFXCO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details`
--

CREATE TABLE `tbl_details` (
  `account_id` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `gold` int(11) DEFAULT NULL,
  `skin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_details`
--

INSERT INTO `tbl_details` (`account_id`, `avatar`, `gold`, `skin`) VALUES
(1, NULL, 2, NULL),
(3, NULL, 1, NULL);

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
(1, 16),
(3, 10);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
