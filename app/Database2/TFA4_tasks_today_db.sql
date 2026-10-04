-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2026 at 08:36 PM
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
-- Database: `tasks_today_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Juan Marlon', 'jaun123@gmail.com', '6917231234', '2026-10-01 01:16:11'),
(2, 'Kayla Moar', 'kay123@gmail.com', '12581235', '2026-10-01 01:16:16'),
(3, 'TestCustomer 12312', 'testcustome@gmai.com', '0945712352', '2026-10-01 02:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Finish Web System Assignment', 'pending', '2026-09-24', '2026-09-24 00:21:24'),
(2, 'Review CodeIgniter Models', 'completed', '2026-09-24', '2026-09-24 00:21:24'),
(3, 'Test Task Management System', 'pending', '2026-09-24', '2026-09-24 00:21:24'),
(4, 'Create Database Schema', 'completed', '2026-09-23', '2026-09-24 00:21:24'),
(5, 'Configure CodeIgniter Project', 'completed', '2026-09-23', '2026-09-24 00:21:24'),
(6, 'Prepare Project Documentation', 'pending', '2026-09-23', '2026-09-24 00:21:24'),
(7, 'Review Previous Lessons', 'completed', '2026-09-22', '2026-09-24 00:21:24'),
(8, 'Organize Project Files', 'pending', '2026-09-22', '2026-09-24 00:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `avatar`, `email`, `created_at`) VALUES
(1, 'test_user', '$2y$10$sOVfboeT0LoFKTzGqXWJMuDWHRN/hhjzSBszBTBoFsudVBZdUIYFq', 'Nicole Lacsamana', '1790794146_d6e2f78a0ccfc8cf25fb.jpg', 'testuser@example.com', '2026-09-24 00:23:27'),
(2, 'Juan123', '$2y$10$sOVfboeT0LoFKTzGqXWJMuDWHRN/hhjzSBszBTBoFsudVBZdUIYFq', 'Juan Marlon', NULL, '', '2026-10-01 01:50:44'),
(3, 'Test User', '$2y$10$sOVfboeT0LoFKTzGqXWJMuDWHRN/hhjzSBszBTBoFsudVBZdUIYFq', 'TestUserUse', NULL, '', '2026-10-01 01:51:28'),
(4, 'testuser', '$2y$10$..riA5K5uNABwKIYbWAPEuQNx8ruGqstDHdZbQQYv9K4Y/.bfkSxC', 'Updated Test User', NULL, '', '2026-10-01 02:55:33'),
(5, 'Cathy', '', 'Catherine Rubio', NULL, '', '2026-10-04 02:17:29'),
(6, 'Ridel', '$2y$10$UMmoaLK8SAmmjgGZgYQGK.XgVZ4LDjx4Fwwm2SmrD9Sy2ZVH.6Pge', 'Ridel Gonzales', NULL, '', '2026-10-04 02:20:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
