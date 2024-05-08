-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boatel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `email` varchar(255) DEFAULT NULL,
  `hotelname` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`email`, `hotelname`, `Address`, `date`, `time`) VALUES
('om123@gmail.com', 'Bhooshan Hotel', 'Tingrenagar Road No-: 5', '2024-01-18', '03:24');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`email`, `password`) VALUES
('temp@gmail.com', '1234'),
('om@gmail.com', '1234'),
('abc@gmail.com', '1234'),
('om123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `t411001`
--

CREATE TABLE `t411001` (
  `id` int(11) DEFAULT NULL,
  `hotelname` varchar(255) DEFAULT NULL,
  `hoteladd` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t411001`
--

INSERT INTO `t411001` (`id`, `hotelname`, `hoteladd`, `price`) VALUES
(1, 'Hotel Samai Palace', 'Pune Station', 1499),
(2, 'Sandeep Hotel', 'JM Road', 999),
(3, 'Hotel SYSTA', 'Shivajinagar', 899);

-- --------------------------------------------------------

--
-- Table structure for table `t411015`
--

CREATE TABLE `t411015` (
  `id` int(11) DEFAULT NULL,
  `hotelname` varchar(255) DEFAULT NULL,
  `hoteladd` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t411015`
--

INSERT INTO `t411015` (`id`, `hotelname`, `hoteladd`, `price`) VALUES
(1, 'Bhooshan Hotel', 'Tingrenagar Road No-: 5', 999),
(2, 'Siesta Springs', 'Vishrantwadi', 799),
(3, 'TAJ Hotel', 'Dighi', 1499);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
