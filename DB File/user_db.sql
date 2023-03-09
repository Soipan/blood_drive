-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2022 at 08:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_drive`
--

CREATE TABLE `blood_drive` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT 'december'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_drive`
--

INSERT INTO `blood_drive` (`Id`, `name`, `email`, `password`, `blood_type`, `date`) VALUES
(5, 'Shirlene Soipan', 'test@test', '81dc9bdb52d04dc20036dbd8313ed055', '0+', 'january');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `Id` int(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `official_name` varchar(255) NOT NULL,
  `official_position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `blood_amount` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`Id`, `hospital_name`, `official_name`, `official_position`, `email`, `blood_type`, `blood_amount`, `status`) VALUES
(6, 'Aga Khan Hospital', 'Ivan', 'Manager', 'admin@gmail.com', 'AB', '100', 1),
(7, 'Aga Khan Hospital', 'Ivan', 'Manager', 'admin@gmail.com', 'AB', '100', 1),
(8, 'Aga Khan Hospital', 'Ivan', 'Manager', '', 'AB', '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` bigint(15) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `phone_number`, `user_type`) VALUES
(3, 'Shirlene', 'test@test', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 'user'),
(4, 'Leshan', 'lesh@test', '81dc9bdb52d04dc20036dbd8313ed055', 777696893, 'admin'),
(7, 'Ivan', 'ivan@test', '674f3c2c1a8a6f90461e8a66fb5550ba', 707169000, 'client'),
(8, 'Wanga', 'wanga@test', 'def7924e3199be5e18060bb3e1d547a7', 777696893, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_drive`
--
ALTER TABLE `blood_drive`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_drive`
--
ALTER TABLE `blood_drive`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
