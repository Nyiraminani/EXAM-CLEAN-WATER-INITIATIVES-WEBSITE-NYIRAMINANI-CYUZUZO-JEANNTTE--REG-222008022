-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 09:56 AM
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
-- Database: `cyuzuzo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeannette`
--

CREATE TABLE `jeannette` (
  `id` int(11) NOT NULL,
  `user_id` bigint(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `telephone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jeannette`
--

INSERT INTO `jeannette` (`id`, `user_id`, `user_name`, `password`, `date`, `email`, `age`, `gender`, `country`, `telephone`) VALUES
(17, 66487, 'JEANNETTE', '$2y$10$K7k6IfMjc9az0pPoiHOVGuDIDl.NcLp3quWrOCpHyLbbkMuzoIWSK', '2024-05-18 10:01:21', 'jeannetten312@gmail.com', 23, 'female', 'Rwanda', 724090191),
(18, 6649, 'cyuzuzo', '$2y$10$aAgqaomv/m5QOqCpgH5RBOYnz7HaBDcFsta7ZtG3/DAml3VN55NwK', '2024-05-19 12:40:01', 'jeannetten312@gmail.com', 23, 'female', 'Rwanda', 724090191),
(19, 664, 'cyubahiro', '$2y$10$OAA7GAkts3DHFL0qLhvGiuB98bIOYZWuxAonQxzmO5vfv3ehhEQIi', '2024-05-23 06:40:42', 'icyubahiro@gmail.com', 8, 'male', 'Rwanda', 789683057);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeannette`
--
ALTER TABLE `jeannette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeannette`
--
ALTER TABLE `jeannette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
