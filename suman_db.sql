-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 09:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suman_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `burned_calorie`
--

CREATE TABLE `burned_calorie` (
  `date` char(200) NOT NULL,
  `User_Name` char(200) NOT NULL,
  `Total_Calorie_Burned` int(200) NOT NULL,
  `Target_Calorie_Burned` int(200) NOT NULL,
  `Target_Acheived_Burned` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burned_calorie`
--

INSERT INTO `burned_calorie` (`date`, `User_Name`, `Total_Calorie_Burned`, `Target_Calorie_Burned`, `Target_Acheived_Burned`) VALUES
('2023-03-27', 'abhi', 38520, 800, 4815),
('2023-03-28', 'Chaitanya', 85335, 800, 10667),
('2023-03-30', 'Vamshi', 38490, 800, 4811);

-- --------------------------------------------------------

--
-- Table structure for table `intake_calorie`
--

CREATE TABLE `intake_calorie` (
  `date` char(200) NOT NULL,
  `User_Name` char(200) NOT NULL,
  `Total_Calorie_Intake` int(200) NOT NULL,
  `Target_Calorie_Intake` int(200) NOT NULL,
  `Target_Acheived_Intake` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intake_calorie`
--

INSERT INTO `intake_calorie` (`date`, `User_Name`, `Total_Calorie_Intake`, `Target_Calorie_Intake`, `Target_Acheived_Intake`) VALUES
('2023-03-27', 'abhi', 600, 1000, 60),
('2023-03-28', 'Chaitanya', 1300, 1000, 130),
('2023-03-30', 'Vamshi', 3600, 1000, 360);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `burned_calorie`
--
ALTER TABLE `burned_calorie`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `intake_calorie`
--
ALTER TABLE `intake_calorie`
  ADD PRIMARY KEY (`User_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
