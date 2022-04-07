-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 04:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `geccontact`
--

CREATE TABLE `geccontact` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geccontact`
--

INSERT INTO `geccontact` (`id`, `user`, `email`, `contact`, `query`) VALUES
(1, 'Pratik', 'pk4789218@gmail.com', '07004458803', 'how i can do this'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'pratik bhatt', '1234'),
(2, 'pratik bhatt', '1234'),
(3, 'pratik bhatt', '1234'),
(4, 'pratik bhatt', '1234'),
(5, 'pratik bhatt', '1234'),
(6, 'pratik bhatt', '1234'),
(7, 'pratik bhatt', '1234'),
(8, 'pratik bhatt', '1234'),
(9, 'pratik bhatt', '1234'),
(10, 'pratik bhatt', '1234'),
(11, 'pratik bhatt', '1234'),
(12, 'pratik bhatt', '1234'),
(13, 'pratik bhatt', '1234'),
(14, 'pratik bhatt', '1234'),
(15, 'pratik bhatt', '1234'),
(16, 'pratik bhatt', '1234'),
(17, 'pratik bhatt', '1234'),
(18, 'pratik bhatt', '1234'),
(19, 'info', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `logincmp`
--

CREATE TABLE `logincmp` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logincmp`
--

INSERT INTO `logincmp` (`id`, `user`, `password`) VALUES
(1, 'Sanket bera', 'pratik123');

-- --------------------------------------------------------

--
-- Table structure for table `registerwithcompany`
--

CREATE TABLE `registerwithcompany` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `website` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerwithcompany`
--

INSERT INTO `registerwithcompany` (`id`, `user`, `email`, `contact`, `year`, `website`, `location`) VALUES
(1, 'inofsys', 'info@mail', '3425235', 0000, 'info.com', 'noida'),
(2, 'NVIDIA', 'nvidia@gmail.com', '987456231', 2000, 'nvidia.in', 'noida');

-- --------------------------------------------------------

--
-- Table structure for table `registerwithinstuition`
--

CREATE TABLE `registerwithinstuition` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `year` year(4) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerwithinstuition`
--

INSERT INTO `registerwithinstuition` (`id`, `user`, `email`, `contact`, `year`, `website`) VALUES
(1, 'GEC', 'gec@gmail.com', '458975688', 2003, 'www.gec.in'),
(3, '', '', '', 0000, '');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `user`, `email`, `password`, `cpassword`) VALUES
(1, 'pratik bhatt', 'sanketbera@gmail.com', '12345', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geccontact`
--
ALTER TABLE `geccontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logincmp`
--
ALTER TABLE `logincmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerwithcompany`
--
ALTER TABLE `registerwithcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerwithinstuition`
--
ALTER TABLE `registerwithinstuition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geccontact`
--
ALTER TABLE `geccontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `logincmp`
--
ALTER TABLE `logincmp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registerwithcompany`
--
ALTER TABLE `registerwithcompany`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registerwithinstuition`
--
ALTER TABLE `registerwithinstuition`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
