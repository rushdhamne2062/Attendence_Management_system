-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 04:40 AM
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
-- Database: `attendencemanagementsystemdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `admin_phone_no` int(10) NOT NULL,
  `admin_password` varchar(6) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth`) VALUES
(1, 'Rushabh', 'admin', 123456789, '159', 'Rush@gmail.com', '2023-07-10'),
(3, 'Abhijit', 'admin', 147258369, '147', 'abhi@gmail.com', '2023-07-19'),
(4, 'xdnbihdFbnsK', 'abhi', 2147483647, '123465', 'ihsrgiudghsu@gmail.com', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `id` int(100) NOT NULL,
  `user_Id` varchar(100) NOT NULL,
  `user_Name` varchar(100) NOT NULL,
  `user_Email` varchar(100) NOT NULL,
  `user_Phone_No` int(10) NOT NULL,
  `user_Project` varchar(100) NOT NULL,
  `user_Enrolled_Date` date NOT NULL,
  `user_Pass` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`id`, `user_Id`, `user_Name`, `user_Email`, `user_Phone_No`, `user_Project`, `user_Enrolled_Date`, `user_Pass`) VALUES
(3, 'user15', 'Rushabh ', 'uttam@gmail.com', 2147483647, 'sdfghjkl;lkjhgf', '2023-07-23', '123'),
(5, 'user15', 'Rushabh ', 'uttam@gmail.com', 2147483647, 'sdfghjkl;lkjhgf', '2023-07-23', '123'),
(8, 'user15', 'Rushabh ', 'uttam@gmail.com', 2147483647, 'sdfghjkl;lkjhgf', '2023-07-23', '123'),
(14, 'user15', 'Rushabh ', 'uttam@gmail.com', 2147483647, 'sdfghjkl;lkjhgf', '2023-07-23', '123'),
(15, 'user3', 'Uttam', 'uttam@gmail.com', 2147483647, 'sdfghjkl;lkjhgf', '2023-07-23', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
