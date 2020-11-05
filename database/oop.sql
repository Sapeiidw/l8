-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 06:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(10) NOT NULL,
  `id_course` int(10) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'open',
  `name` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `id_course`, `status`, `name`, `deskripsi`, `create_at`, `deadline`) VALUES
(14, 15, 'open', 'Mantap Soul', 'Mantap Soul', '2020-11-04 14:39:10', '2019-10-03 00:00:00'),
(16, 15, 'open', 'Tugas 1', 'merancang sebuah aplikasi menggunakan struktur data', '2020-11-05 04:19:19', '2019-10-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `id_matkul` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_matkul`, `id_user`, `name`) VALUES
(1, 3, 1, 'Struktur Data A '),
(3, 3, 1, 'Struktur Data C'),
(8, 3, 1, 'Struktur Data D'),
(13, 26, 11, 'Matkul 1 C'),
(14, 3, 1, 'Struktur Data B'),
(15, 3, 7, 'Struktur Data Nana');

-- --------------------------------------------------------

--
-- Table structure for table `courses_members`
--

CREATE TABLE `courses_members` (
  `id` int(10) NOT NULL,
  `id_courses` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_members`
--

INSERT INTO `courses_members` (`id`, `id_courses`, `id_member`, `created_at`) VALUES
(1, 1, 1, '2020-10-26 13:29:38'),
(9, 1, 7, '2020-10-31 08:28:36'),
(10, 1, 12, '2020-10-31 08:28:36'),
(11, 8, 7, '2020-10-31 09:00:46'),
(14, 1, 11, '2020-10-31 11:55:21'),
(21, 14, 20, '2020-11-01 10:55:37'),
(22, 15, 7, '2020-11-04 11:38:41'),
(23, 15, 12, '2020-11-04 11:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `kode`, `name`, `created_at`) VALUES
(1, 'JMTI', 'Jurusan Matematik dan Teknologi Informasi', '2020-10-26 11:14:05'),
(3, 'JSTPK', 'Jurusan Sains, Teknologi Pangan dan Kemaritiman', '2020-10-26 11:20:06'),
(4, 'JTIP', 'Jurusan Teknologi Industri dan Proses', '2020-10-26 11:50:42'),
(5, 'JTSP', 'Jurusan Teknik Sipil dan Perencanaan', '2020-10-26 11:52:23'),
(6, 'JIKL', 'Jurusan Ilmu Kebumian dan Lingkungan', '2020-10-26 11:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `matkuls`
--

CREATE TABLE `matkuls` (
  `id` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sks` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkuls`
--

INSERT INTO `matkuls` (`id`, `kode`, `name`, `sks`, `semester`) VALUES
(3, 'IF001', 'Struktur Data', '3', '2'),
(5, 'IF002', 'Pemrograman Berbasis Objek', '3', '4'),
(20, 'KU001', 'Wasbang', '2', '3'),
(21, 'KU002', 'Pengembangan', '2', '5'),
(22, 'IF003', 'Aljabar Linear', '3', '3'),
(23, 'WHM001', 'Wahams', '4', '5'),
(24, 'IF004', 'Startup Digital', '3', '5'),
(26, 'MK001', 'Matkul 1', '3', '3'),
(27, 'MK003', 'Matkul 4', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `prodies`
--

CREATE TABLE `prodies` (
  `id` int(10) NOT NULL,
  `id_departement` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodies`
--

INSERT INTO `prodies` (`id`, `id_departement`, `name`, `created_at`) VALUES
(1, 1, 'Informatika', '2020-10-26 11:15:59'),
(2, 1, 'Matematika', '2020-10-26 11:16:11'),
(3, 1, 'Sistem Informasi', '2020-10-26 11:16:26'),
(5, 3, 'Teknik Perkapalan', '2020-10-26 11:53:15'),
(6, 3, 'Teknik Kelautan', '2020-10-26 11:53:30'),
(7, 3, 'Fisika', '2020-10-26 11:53:42'),
(8, 4, 'Teknik Mesin', '2020-10-26 11:55:57'),
(9, 4, 'Teknik Elektro', '2020-10-26 11:56:12'),
(10, 4, 'Teknik Kimia', '2020-10-26 11:56:23'),
(11, 4, 'Teknik Industri', '2020-10-26 11:56:33'),
(12, 5, 'Teknik Sipil', '2020-10-26 11:57:06'),
(13, 5, 'Perencanaan Wilayah dan Kota', '2020-10-26 11:57:30'),
(14, 6, 'Teknik Material dan Metalurgi', '2020-10-26 11:57:51'),
(15, 6, 'Teknik Lingkungan', '2020-10-26 11:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(10) NOT NULL,
  `id_assignment` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'ungraded',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `id_assignment`, `id_user`, `name`, `status`, `create_at`) VALUES
(5, 14, 12, 'Tugas 1 Nana', '100', '2020-11-04 14:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', '2020-10-26 11:12:03'),
(2, 'user', 'user@gmail.com', 'user', 'user', '2020-10-28 12:12:35'),
(5, 'lala', 'lala@gmail.com', 'lala', 'user', '2020-10-29 15:16:41'),
(7, 'nana', 'nana@gmail.com', 'nana', 'user', '2020-10-29 15:23:16'),
(11, 'milo', 'milo@gmail.com', 'milo', 'user', '2020-10-29 15:28:31'),
(12, 'mila', 'mila@gmail.com', 'mila', 'user', '2020-10-29 15:28:31'),
(17, 'register', 'register@gmail.com', 'register', 'user', '2020-10-30 04:52:47'),
(19, 'flash', 'flash@gmail.com', 'flash', 'user', '2020-11-01 06:04:09'),
(20, 'nanti', 'nanti@gmail.com', 'nanti', 'user', '2020-11-01 08:32:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `courses_members`
--
ALTER TABLE `courses_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_courses` (`id_courses`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `matkuls`
--
ALTER TABLE `matkuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodies`
--
ALTER TABLE `prodies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `id_departement` (`id_departement`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_assignment` (`id_assignment`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses_members`
--
ALTER TABLE `courses_members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `matkuls`
--
ALTER TABLE `matkuls`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `prodies`
--
ALTER TABLE `prodies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkuls` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `courses_members`
--
ALTER TABLE `courses_members`
  ADD CONSTRAINT `courses_members_ibfk_1` FOREIGN KEY (`id_courses`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_members_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prodies`
--
ALTER TABLE `prodies`
  ADD CONSTRAINT `prodies_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`id_assignment`) REFERENCES `assignments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submissions_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
