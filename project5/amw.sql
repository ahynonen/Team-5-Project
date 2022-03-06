-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2022 at 06:04 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amw`
--

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `Email` varchar(100) NOT NULL,
  `Status` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL
) ENGINE=InnoDB DEFAULT ;

--
-- Dumping data for table `Newsletter`
--

INSERT INTO `Newsletter` (`Email`, `Status`) VALUES
('test@email.com', NULL),
('test@email.com', NULL),
('test@gmail.com', NULL),
('test@email.com', NULL),
('test@email.com', NULL),
('test@email.com', NULL),
('test@email.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'sjjs', 'sjjs', 'salam.labass@labass.com', 'password'),
(2, 'sjjs', 'sjjs', 'salam.labass2@labass.com', 'password'),
(3, 'hey', 'vigi', 'salam.salam@labass.com', 'password'),
(4, 'S', 'S', 'S@GMAIL.COM', 'password'),
(5, 'test', 'test1', 'test11@test.test', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
