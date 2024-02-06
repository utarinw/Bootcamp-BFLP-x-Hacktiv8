-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 11:24 AM
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
-- Database: `informasi_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_kategori`
--

CREATE TABLE `db_kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_kategori`
--

INSERT INTO `db_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Musik'),
(2, 'History'),
(3, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `db_komentar`
--

CREATE TABLE `db_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar_konten` text NOT NULL,
  `created_by` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_post`
--

CREATE TABLE `db_post` (
  `id_post` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `img_utama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_posts`
--

CREATE TABLE `db_posts` (
  `title` varchar(25) NOT NULL,
  `konten` text NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

CREATE TABLE `db_users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id_user`, `nama_user`, `email_user`, `pass_user`) VALUES
(1, 'Utari', 'utari@gmail.com', 'password'),
(2, 'Erlina', 'erlina@gmail.com', 'password'),
(6, 'Gilang', 'gilang@gmail.com', 'password'),
(7, 'Gilang', 'gilang@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_kategori`
--
ALTER TABLE `db_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `db_komentar`
--
ALTER TABLE `db_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `kategori` (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_kategori`
--
ALTER TABLE `db_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_komentar`
--
ALTER TABLE `db_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_post`
--
ALTER TABLE `db_post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_komentar`
--
ALTER TABLE `db_komentar`
  ADD CONSTRAINT `db_komentar_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `db_post` (`id_post`),
  ADD CONSTRAINT `db_komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `db_users` (`id_user`);

--
-- Constraints for table `db_post`
--
ALTER TABLE `db_post`
  ADD CONSTRAINT `db_post_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `db_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
