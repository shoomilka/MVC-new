-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 07:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `was_edited` tinyint(4) NOT NULL,
  `text` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `email`, `is_completed`, `was_edited`, `text`) VALUES
(1, 'dsvmvk', 'test@test.com', 0, 1, 'to do mvc site 1 edited1'),
(2, 'vfhnaegh', 'test@test.com', 1, 0, 'to make a config file'),
(3, 'dsvmvk', 'test@test.com', 0, 1, 'to find a perfect job'),
(4, 'admin', 'test@test.com', 1, 0, 'to send cv to companies'),
(5, 'dvgraer', 'test2@test.com', 0, 0, 'to create my own site'),
(6, 'vvaev', 'test@test.com', 0, 0, 'to push my site on github'),
(7, 'vmdkfv', 'test@test.com', 0, 0, 'to push mvc site to github'),
(8, 'vlad', 'test@test.com.ua', 1, 0, 'to publish mvc site'),
(9, 'nonemae', 'test@test.com', 1, 0, 'to write a letter about mvc site'),
(10, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'svsdvsdv'),
(11, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'fsdvsdvsdvs'),
(12, 'Uliana Shumilina', 'shoomilka@i.ua', 1, 0, '&lt;script&gt;alert(&lsquo;test&rsquo;);&lt;/script&gt;'),
(14, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'hsrhehh'),
(15, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'derer'),
(16, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'new task'),
(17, 'Uliana Shumilina', 'test@test.com', 0, 1, 'test'),
(18, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'cdsvssv'),
(19, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'cdsvssv'),
(20, 'Uliana Shumilina', 'shoomilka@i.ua', 0, 0, 'cdsvssv cds'),
(21, 'ALF', 'alf@i.ua', 0, 0, 'dsfergergg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$sRQXCjrCoEPKjnFkjcoz1OsivP5m0RYTy234j8250.SqNDWA/l.ia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
