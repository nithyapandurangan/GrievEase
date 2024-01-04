-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2023 at 06:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_comp`
--

CREATE TABLE `tb_comp` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `rollNumber` int(8) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_comp`
--

INSERT INTO `tb_comp` (`id`, `FirstName`, `LastName`, `rollNumber`, `Department`, `Category`, `Description`) VALUES
(1, 'Sudiksaa', 'Senthilvelan', 21110209, 'CSE-IoT', 'LMS', '0'),
(2, 'Nithya', 'Pandurangan', 21110212, 'AIDS', 'hostel messs food', '0'),
(3, 'Nithya', 'Pandurangan', 21110212, 'AIDS', 'hostel messs food', 'helloooo'),
(4, 'Shrinithi', 'Vijaya', 21110208, 'B.COM', 'Bullying/ragging', 'hahah'),
(5, 'Sreya', 'Velan', 21110201, 'CYBERSECURITY', 'hostel messs food', 'not good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comp`
--
ALTER TABLE `tb_comp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comp`
--
ALTER TABLE `tb_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
