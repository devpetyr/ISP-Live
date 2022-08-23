-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 01:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_application_form`
--

CREATE TABLE `student_application_form` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(16) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `is_reset` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role`, `status`, `is_active`, `is_reset`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', '$2a$12$8mAKc.Qz.X9vkxhQfjUl3OwSO9YG0tJJbiHbLVtzrODB1x7erGq1i', 1, 0, 0, 0, '2022-06-28 17:12:18', '2022-06-28 17:12:18'),
(15, 'pabiv82820@lodores.com', 'pabiv82820@lodores.com', '$2y$10$R3Xk6.5w3hmLQEwdv2Bc9uwOdBTHc2Qqsq5avZ6Y/3YEdj7XGdm8.', 3, 1, 1, 0, '2022-07-19 14:08:59', '2022-07-19 14:08:59'),
(16, 'vedor94522@lodores.com', 'vedor94522@lodores.com', '$2y$10$bZVf5NEQb1R7wFbU1x8ECePTwuUO9B2EYaQVTujwxHygfXDJ72jV.', 2, 1, 1, 0, '2022-07-19 14:09:30', '2022-07-19 14:09:49'),
(19, 'dev petyr', 'devpetyr911@gmail.com', '$2y$10$FCvN3NzIfqyeQHwiDmvYXu91OZEKB4G1GnRLdww0xC.T8iUpLmBUm', 2, 1, 1, 0, '2022-07-20 09:34:39', '2022-07-20 09:34:39'),
(20, 'gijejo', 'libi@mailinator.com', '$2y$10$kx8kFd//t9QVPxMNc5wH6eggJRhySdslBE1cFmfr7i8gjtBN/0ZkW', 2, 1, 0, 0, '2022-07-20 09:41:21', '2022-07-20 09:41:21'),
(21, 'dev', 'devpetyr9111@gmail.com', '$2y$10$G4jy6aGjB6kzLQaog6aP5OlJNnzw5I4orPfP4uksQJnOj6hSq5KFm', 3, 1, 1, 0, '2022-07-21 06:02:14', '2022-07-21 06:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-06-28 17:11:30', '2022-06-28 17:11:30'),
(2, 'Student', '2022-06-28 17:11:30', '2022-06-28 17:11:30'),
(3, 'Host', '2022-06-28 17:11:54', '2022-06-28 17:11:54'),
(4, 'Coordinator', '2022-06-28 17:11:54', '2022-06-28 17:11:54'),
(5, 'Driver', '2022-07-19 15:13:54', '2022-07-19 15:13:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_application_form`
--
ALTER TABLE `student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles` (`user_role`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_application_form`
--
ALTER TABLE `student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_roles` FOREIGN KEY (`user_role`) REFERENCES `user_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
