-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 12:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `verify_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `status`, `verify_token`, `created_at`) VALUES
(13, '123', '123, 1213 123', '$2y$10$G8p92njdCaRM9IEWO/QvJ.S4TxAkkgsScB9Y54NQerLGBxF74RmKG', 'user', '9eb1657cb1160b3dd7bdca694672a0d1', '2024-05-05 23:31:10'),
(14, 'mico@gmail.com', 'mico, m miv', '$2y$10$WPyG/S9uVmjZxLXKLm3Y1ejyksCPb04NF1XCCYQjPSMRGr2gtVfna', 'user', '98ae975ce58b7a82a20a68fa4ae58b27', '2024-05-06 07:28:21'),
(15, 'hdhsgdg', 'kass, Therese Aqcui', '$2y$10$.jQtb7i4awEy.hsSsT6p5.BuKvc.WlBgVNTqaDEzc1fL0.0gsYjNO', 'user', 'e4ddcbebd0cbcfa62af52c693f7defe8', '2024-05-06 10:49:13'),
(16, 'sasdf', 'mae, ann sator', '$2y$10$X9qVDBIlnzaL5x2k9X9RPeamWg2u7q.S93lH888JoRjN6gXlVFi66', 'user', 'c2c68b8e7954f62038ea98ea53b0a7eb', '2024-05-06 10:49:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
