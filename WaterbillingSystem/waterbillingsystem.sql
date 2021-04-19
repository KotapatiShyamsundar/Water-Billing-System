-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 08:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterbillingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(20) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `prev` varchar(200) NOT NULL,
  `pres` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `dates` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `customer_id`, `prev`, `pres`, `price`, `dates`) VALUES
(3, 2, '1', '15', '5', '21/04/11'),
(4, 2, '1', '20', '8', '21/04/11'),
(5, 1, '2', '4', '6', '21/04/12'),
(6, 4, '5', '15', '7', '21/04/13');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Phoneno` varchar(20) NOT NULL,
  `Addss` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Firstname`, `Lastname`, `Phoneno`, `Addss`) VALUES
(1, 'T.Naga', 'Jayasree', '06302532052', 'D. No:42/514-10 '),
(4, 'Noushi', 'Mothukuri', '9848308197', 'Eluru'),
(5, 'Manish', 'Guduri', '56348955', 'Hyderabad'),
(6, 'Sathya', 'Madhuri', '963247893258', 'Vijayawada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Fullname` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Fullname`, `Pass`) VALUES
(1, 'Nithin', 'Naganithin', 'Shyam123'),
(2, 'shyam', 'shyamsundar', '123'),
(3, 'Narsi', 'Venkata narasamma', '12345'),
(4, 'Jaya', 'Jayasree', 'papa'),
(7, 'Madhuri', 'Satha madhuri', '896896');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
