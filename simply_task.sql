-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2022 at 11:55 AM
-- Server version: 8.0.24
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simply_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `file_isset` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `avatar`, `file_isset`, `created_at`) VALUES
(16, 'Սոնա', 'Ասատրյան', '1654073730.jpg', 0, '2022-06-01 08:55:30'),
(19, 'Ավետիս', 'Ավետիսյան', '1654075348.jpg', 1, '2022-06-01 09:22:28'),
(36, 'Անի', 'Աղաբեկյան', '1654264553.jpg', 0, '2022-06-03 08:42:07'),
(40, 'Ներսես', 'Ներսեսյան', '1654264755.jpg', 0, '2022-06-03 13:59:15'),
(41, 'Տիգրան', 'Մանասյան', '1654264789.png', 0, '2022-06-03 13:59:49'),
(42, 'Լիզա', 'Մինասյան', '1654677001.jpg', 0, '2022-06-08 08:28:21'),
(43, 'Կարեն', 'Դավթյան', '1655192517.jpg', 0, '2022-06-14 07:26:41'),
(45, 'Արսեն', 'Աբգարյան', '1655192353.jpg', 0, '2022-06-14 07:39:13'),
(47, 'Tom', 'Davtyan', '', 1, '2022-06-30 12:17:17'),
(48, 'Joe', 'Doe', '', 0, '2022-07-06 16:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `client_files`
--

CREATE TABLE `client_files` (
  `id` int NOT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `client_id` int DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `client_files`
--

INSERT INTO `client_files` (`id`, `file_name`, `client_id`, `uploaded_at`) VALUES
(48, 'Welcomehh.docx', 16, '2022-06-30 08:29:15'),
(51, '1657126295.pdf', 16, '2022-07-06 16:51:35'),
(52, '1657126329.docx', 19, '2022-07-06 16:52:09'),
(54, 'kkk.pdf', 47, '2022-07-06 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `curl_form`
--

CREATE TABLE `curl_form` (
  `Id` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel_phone` varchar(30) NOT NULL,
  `textarea` varchar(120) NOT NULL,
  `creted_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `curl_form`
--

INSERT INTO `curl_form` (`Id`, `email`, `tel_phone`, `textarea`, `creted_at`) VALUES
(1, 'tom@mail.ru', '+3745566522', 'asasdasd', '2022-06-15 12:23:25'),
(2, 'tom@mail.ru', '+3745566522', 'asasdasd', '2022-06-15 12:24:00'),
(3, 'tom@mail.ru', '+3745566522', 'kjhngfvcf', '2022-06-15 12:31:50'),
(4, '', '', '', '2022-06-15 12:54:19'),
(5, 'arsen@mail.ru', '+3745566522', 'P0O98765', '2022-06-16 08:37:00'),
(6, '', '', '', '2022-06-28 12:09:19'),
(7, '', '', '', '2022-06-28 12:09:32'),
(8, '', '', 'xsw', '2022-06-28 13:04:08'),
(9, '', '', 'Hello', '2022-06-29 17:37:58'),
(10, '', '', 'cfxdsz', '2022-06-30 07:54:52'),
(11, '', '', 'fcdj', '2022-07-06 16:38:16'),
(12, 'tom@mail.ru', '+3745566522', 'gvfghtcffrcdjgt', '2022-07-06 17:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `avatar`, `email`, `password`, `created_at`) VALUES
(1, '', '', '1653900180.png', '', 'd41d8cd98f00b204e9800998ecf8427e', '2022-05-30 08:43:00'),
(2, 'Tom', 'Smith', '1653900284.jpg', 'tom@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', '2022-05-30 08:44:44'),
(3, 'Arsen', 'Gevorgyan', '1653994360.jpg', 'arsen@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', '2022-05-31 10:52:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_files`
--
ALTER TABLE `client_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_files_ibfk_1` (`client_id`);

--
-- Indexes for table `curl_form`
--
ALTER TABLE `curl_form`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `client_files`
--
ALTER TABLE `client_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `curl_form`
--
ALTER TABLE `curl_form`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_files`
--
ALTER TABLE `client_files`
  ADD CONSTRAINT `client_files_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
