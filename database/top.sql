-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 12:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(4) NOT NULL,
  `issue_title` varchar(50) NOT NULL,
  `issue_description` varchar(100) NOT NULL,
  `member_id` int(4) NOT NULL,
  `issue_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `issue_title`, `issue_description`, `member_id`, `issue_date`) VALUES
(2, 'title', 'description', 2, '2020-05-24 23:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(4) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_user_name` varchar(50) NOT NULL,
  `member_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_email`, `member_user_name`, `member_password`) VALUES
(1, 'ahmadharisssa@gmail.com', 'ahmad', '1'),
(2, 'ahmadharisssa25@gmail.com', 'ahmad', '25');

-- --------------------------------------------------------

--
-- Table structure for table `search_data`
--

CREATE TABLE `search_data` (
  `search_data_id` int(4) NOT NULL,
  `search_data_name` varchar(100) NOT NULL,
  `search_data_description` varchar(500) NOT NULL,
  `search_data_image` varchar(500) NOT NULL,
  `search_data_download` varchar(500) NOT NULL,
  `search_data_language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_data`
--

INSERT INTO `search_data` (`search_data_id`, `search_data_name`, `search_data_description`, `search_data_image`, `search_data_download`, `search_data_language`) VALUES
(1, 'komodo', 'The Komodo dragon (Varanus komodoensis), also known as the Komodo monitor, is a species of lizard found in the Indonesian islands of Komodo, Rinca, Flores, and Gili Motang.', 'komodo.jpg', 'https://www.activestate.com/products/komodo-ide/download-ide/thank-you/?dl=https://downloads.activestate.com/Komodo/releases/12.0.1/Komodo-IDE-12.0.1-91869.msi', 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_email` (`member_email`);

--
-- Indexes for table `search_data`
--
ALTER TABLE `search_data`
  ADD PRIMARY KEY (`search_data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `search_data`
--
ALTER TABLE `search_data`
  MODIFY `search_data_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
