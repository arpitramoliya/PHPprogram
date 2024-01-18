-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 02:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'creative99@gmail.com', 'creative99132');

-- --------------------------------------------------------

--
-- Table structure for table `office_form`
--

CREATE TABLE `office_form` (
  `id` int(5) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(15) DEFAULT NULL,
  `joindate` varchar(10) NOT NULL,
  `enddate` varchar(10) NOT NULL,
  `courseduration` varchar(10) NOT NULL,
  `instscheme` varchar(30) NOT NULL,
  `totalfees` varchar(8) NOT NULL,
  `books` varchar(40) NOT NULL,
  `certificate` varchar(30) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office_form`
--

INSERT INTO `office_form` (`id`, `student_id`, `course`, `batch`, `joindate`, `enddate`, `courseduration`, `instscheme`, `totalfees`, `books`, `certificate`, `comments`, `created_at`, `updated_at`) VALUES
(1, 1, 'Garphic designing', '05:00 to 06:00 ', '2024-01-01', '2024-04-25', '4 Month', '3500/- Pay on 01/01/2024', '35,000', '', 'yes', 'something..', '2024-01-06 14:02:27', '2024-01-06 14:02:27'),
(2, 2, 'Web Development', '06:00 to 08:00 ', '2024-01-05', '2024-05-25', '5 Month', '3500/- Pay on 05/02/2024', '30,000', '', '', 'something.', '2024-01-06 14:04:11', '2024-01-06 14:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `parenetcontact` varchar(12) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `activity` varchar(60) NOT NULL,
  `otheractivity` varchar(60) NOT NULL,
  `course` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_form`
--

INSERT INTO `student_form` (`id`, `name`, `address`, `contact`, `parenetcontact`, `dob`, `qualification`, `activity`, `otheractivity`, `course`, `created_at`, `updated_at`) VALUES
(1, 'Arpit Ramoliya', 'Sandhvaya,\r\nKotda Snagani, \r\nRajkot.', '9510865548', '9978290635', '2005-02-08', '12 Complate', 'BCA', 'Sport \r\nKho-kho', 'Garphic designing', '2024-01-06 14:00:48', '2024-01-06 14:00:48'),
(2, 'Kadivar Heet', 'Mavdi,\r\nRajkot.', '7567355945', '9825149734', '2005-02-21', '12 Complate', 'BCA Running', 'cricket', 'Web Development', '2024-01-06 14:03:17', '2024-01-06 14:03:17'),
(3, 'Satyam Ramoliya', 'Sandhvaya,\r\nKotda Sangani,\r\nRajkot.\r\n', '9510865548', '9510865548', '2003-05-23', 'Bco', 'Business', '', ' Accounting Tally', '2024-01-08 10:42:33', '2024-01-08 10:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_form`
--
ALTER TABLE `office_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office_form`
--
ALTER TABLE `office_form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_form`
--
ALTER TABLE `student_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
