-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2020 at 11:28 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivalwar_almazer`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `index` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `index`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(11, 2, 'Munas, Touring, Gathering Pertama Almazer', 'uploads/WhatsApp Image 2020-01-14 at 12.47.23.jpeg', '2020-01-15 07:30:26', '2020-02-22 21:15:18'),
(27, 1, 'Almazer Endurance Test - Stage 1', 'uploads/banner.jpeg', '2020-02-20 01:49:38', '2020-02-22 21:15:30'),
(14, 4, 'Bakti Sosial 2019', 'uploads/IMG-20191027-WA0076.jpg', '2020-02-02 18:14:42', '2020-02-22 21:02:37'),
(12, 3, 'Almazer Peduli Bencana 2020', 'uploads/WhatsApp Image 2020-01-15 at 20.48.57.jpeg', '2020-01-15 07:35:49', '2020-02-22 21:15:38'),
(31, 5, 'WEW 2019', 'uploads/IMG_20190928_120144_resize.jpg', '2020-02-22 21:13:44', '2020-02-22 21:13:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
