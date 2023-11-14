-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 08:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coop`
--

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(0, 'Eman', 'semandalisay@gmail.com', '$2y$10$.JDcFDNBUYYY3zXFjp.OoesPTvMVnchfKQ9q988i2xun3zYDMPFYi'),
(0, 'Lex Ortiz', 'lexyboy@gmail.com', '$2y$10$p6a6keLqcn2QIj0g73SsUeyx1f2CNqZrE7ZDyK592gAU/t5KXWhSG'),
(0, 'adamnskie', 'adam@gmail.com', '$2y$10$jjIVJzPk6Zvz8ROjN3WfWO6FzbnHDMNVVQ3hKHmEuLYfyxw6FvC0K'),
(0, 'admin', 'admin@gmail.com', '$2y$10$XTuqwGZl5Lq9MINlLrWASu22O69fgaS2/mxA4ob6TM3.UIQiL9w2W'),
(0, 'admin2', 'admin2@gmail.com', '$2y$10$akHQYmNMYHOudDgP9xDNvu/3ssCMwmQs.46gip0HJ4kuHIaT29UXW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
