-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 11:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `password`) VALUES
(1, 'devi', 'devi'),
(2, 'walidi', 'walidi'),
(3, 'wahyu', 'wahyu'),
(4, 'pratama', 'pratama'),
(5, 'riska', 'riska'),
(6, 'idin', 'idin'),
(7, 'Arjunaldi', 'Arjunaldi'),
(8, 'jojo', 'jojo');

-- --------------------------------------------------------

--
-- Table structure for table `user_files`
--

CREATE TABLE `user_files` (
  `id_file` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `file_name` varchar(150) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `privasi` enum('publik','privat') DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_files`
--

INSERT INTO `user_files` (`id_file`, `id_user`, `file_name`, `size`, `privasi`, `file_type`) VALUES
(5, 2, 'gba1 (2).jpg', 9011195, 'publik', 'image/jpeg'),
(6, 2, 'gba1 (2)(1).jpg', 9011195, 'privat', 'image/jpeg'),
(57, 6, '123(3).png', 953186, 'privat', 'image/png'),
(59, 7, '10.png', 83408, 'privat', 'image/png'),
(69, 5, '24kGoldn - Mood (Lyrics) ft Iann Dior.mkv', 13722910, 'privat', 'application/octet-stream'),
(70, 5, '24kGoldn - Mood (Lyrics) ft Iann Dior(1).mkv', 13722910, 'privat', 'application/octet-stream'),
(71, 8, '24kGoldn - Mood (Lyrics) ft Iann Dior.mkv', 13722910, 'publik', 'application/octet-stream');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_files`
--
ALTER TABLE `user_files`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_files`
--
ALTER TABLE `user_files`
  MODIFY `id_file` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_files`
--
ALTER TABLE `user_files`
  ADD CONSTRAINT `user_files_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
