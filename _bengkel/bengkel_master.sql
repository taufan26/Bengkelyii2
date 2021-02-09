-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 05:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '2I3LRH20zEKzXVngAkReBnPMIVR_UJG9', '$2y$13$Gt1mQ.MgMk4eME6XERaQy.EUU47C/.G.U7L/XesN/xd9JH/C0CGwy', NULL, 'taufanyusuf26@yahoo.co.id', 10, 1606113327, 1606113327, '0mlUvjXDwa8CFaHBnq8OSgM1ND0A7-ZG_1606113327');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `kondisi_barang` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `deskripsi`, `quantity`, `harga`, `stock`, `merek`, `model`, `kondisi_barang`, `image`, `status`, `create_at`) VALUES
(1, 'Ban', 'Ban Dalam', 4, '100000', 100, 'Toyota', 'Vtoyota', 'Baru', 'bandalem.jpg', 1, '2020-11-30 03:47:34'),
(2, 'Spion', 'Spion Jerman', 2, '10000', 100, 'Honda', 'Vhonda', 'Baru', 'spion.jpg', 1, '2020-11-30 06:45:39'),
(3, 'motorfan', 'motorfan buat honda jazz', 1, '100000', 100, 'Honda', 'Jazz', 'Baru', 'motorfan.jpg', 1, '2020-11-30 06:48:31'),
(5, 'Pipa', 'Pipa Jerman', 1, '250000', 100, 'Toyota', 'Vtoyota', 'Baru', 'pipa.jpg', 1, '2020-12-01 03:08:06'),
(6, 'Busi', 'B36 Busi Mobil Bosch', 1, '50000', 100, 'Toyota', 'Vtoyota', 'Baru', 'busi.jpg', 1, '2020-12-01 03:10:46'),
(7, 'Unik Turbo ', 'Unik Turbo vx', 1, '60000', 100, 'Toyota', 'Vtoyota', 'Baru', 'turbo.jpg', 1, '2020-12-01 04:29:39'),
(8, 'Bumper', 'Bumper Ingriis', 1, '70000', 100, 'Honda', 'Vhonda', 'Baru', 'bemper.jpg', 1, '2020-12-01 04:33:31'),
(9, 'Accord Cielo', 'Import jepang', 4, '780000', 100, 'Honda', 'Vhonda', 'Baru', 'accord.jpg', 1, '2020-12-08 02:15:56'),
(11, 'Grille', 'Untuk Dengfeng', 1, '663333', 100, 'Toyota', 'Vtoyota', 'Baru', 'grille.jpg', 1, '2021-01-05 06:25:08'),
(13, 'Pelek', 'Pelek Luar Mobil', 4, '8999999', 100, 'Toyota', 'vToyota', 'Baru', 'pelek.jpg', 1, '2021-01-21 03:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `email`, `tanggal`, `service_name`, `jam`, `status`, `create_at`) VALUES
(7, 'taufan', 'taufanyusuf26@yahoo.co.id', '2020-12-05', 'Derek service', '13:28', 'Terkonfirmasi', '2020-12-04 03:26:02'),
(8, 'taufan', 'taufanyusuf26@yahoo.co.id', '2020-12-12', 'Derek service', '15:00', 'Di Tolak', '2020-12-07 03:08:48'),
(9, 'taufan', 'taufanyusuf26@yahoo.co.id', '2020-12-12', 'Derek service', '15:00', 'Di Tolak', '2020-12-07 03:08:48'),
(10, 'yusuf', 'yusuf@gmail.com', '2020-12-08', 'Ganti Aki Baterai', '03:00', 'Terkonfirmasi', '2020-12-07 06:19:10'),
(11, 'yusuf', 'yusuf@gmail.com', '2020-12-18', 'Ganti Ban', '16:22', 'Terkonfirmasi', '2020-12-14 07:20:53'),
(12, 'nugroho', 'nugroho@gmail.com', '2020-12-15', 'Ganti Ban', '12:00', 'Terkonfirmasi', '2020-12-14 07:34:05'),
(13, 'megu', 'megu@gmail.com', '2020-12-24', 'Ganti Oli & Rem', '20:02', 'Menunggu Konfirmasi', '2020-12-21 06:57:59'),
(14, 'Taufan', 'test@gmail.com', '2021-01-25', 'Ganti Oli & Rem', '17:40', 'Terkonfirmasi', '2021-01-05 07:37:37'),
(15, 'taufan', 'taufanyusuf26@yahoo.co.id', '2021-01-08', 'Ganti Aki Baterai', '17:02', 'Terkonfirmasi', '2021-01-05 07:59:45'),
(16, 'taufan', 'taufanyusuf26@yahoo.co.id', '2021-01-07', 'Ganti Aki Baterai', '11:40', 'Terkonfirmasi', '2021-01-06 02:32:51'),
(17, 'megu', 'megu@gmail.com', '2021-01-15', 'Ganti Ban', '13:07', 'Terkonfirmasi', '2021-01-14 04:05:36'),
(18, 'bentel', 'bentel@gmail.com', '2021-01-23', 'Ganti Aki Baterai', '13:18', 'Di Tolak', '2021-01-22 06:54:18'),
(19, 'taufan', 'taufanyusuf26@yahoo.co.id', '2021-01-24', 'Derek service', '08:30', 'Terkonfirmasi', '2021-01-23 04:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `body`, `created_at`) VALUES
(1, 'Taufan Yusuf Nugroho', 'taufan@email.com', 'Sangat Bagus', 'Aku Suka', '2020-12-02 02:51:12'),
(2, 'Taufan', 'taudan@gmail.com', 'banyak error', 'Perbaiki woy', '2020-12-14 07:10:14'),
(3, 'Megumin', 'megu@gmail.com', 'error', 'di bagian cart', '2021-01-22 06:37:25'),
(4, 'Anzas', 'Anzas@gmail.com', 'error', 'Iya Tahu', '2021-01-22 06:38:50'),
(5, 'Bentel', 'Bentel@gmail.com', 'error', 'Ora Jelas', '2021-01-22 06:39:23'),
(6, 'Bentel 1', 'Bentel@gmail.com', 'error', 'Er', '2021-01-22 06:40:17'),
(7, 'Anzas', 'Anzas@gmail.com', 'bertanya', 'apa yang harus di penuhin untuk ke bengkel', '2021-01-23 04:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1606113090),
('m130524_201442_init', 1606113098),
('m190124_110200_add_verification_token_column_to_user_table', 1606113098);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `img_profile` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `email`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `note`, `img_profile`, `create_at`) VALUES
(1, 'taufan', 'taufanyusuf26@yahoo.co.id', 'Taufan Yusuf Nugroho', '2020-01-11', 'Laki-laki', 'Indramayu', 'Aku Seorang Manusia', 'man-one.jpg', '2020-12-10 06:28:33'),
(2, 'yusuf', 'yusuf@gmail.com', 'Yusuf Nugroho', '2020-12-01', 'Laki-laki', 'Kiajaran Wetan, Indramayu, Indonesia', 'Saya Manusia', '648557.jpg', '2020-12-11 07:02:52'),
(3, 'nugroho', 'nugroho@gmail.com', 'Nugroho', '2020-12-06', 'Laki-laki', 'Kiajaran Wetan, Indramayu', 'Aku Aku Aku', '14808.jpg', '2020-12-14 04:01:47'),
(4, 'megu', 'megu@gmail.com', 'Megumin', '2014-01-28', 'Laki-laki', 'Kiajaran Wetan, Indramayu', 'Akui', '649533.png', '2020-12-15 04:35:56'),
(5, 'bentel', 'bentel@gmail.com', 'Bentel Rizky', '2000-08-17', 'Laki-laki', 'Lelea', 'Bocah Ora jelas', 'bentel.jpg', '2021-01-22 06:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `nama`, `img`, `create_at`) VALUES
(1, 'Promo Tahun Baru', 'promo1.jpeg', '2021-01-25 04:32:17'),
(2, 'Promo Januari', 'promo2.jpg', '2021-01-25 04:34:40'),
(3, 'Promo 2021', 'promo3.jpg', '2021-01-25 04:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'taufan', '2I3LRH20zEKzXVngAkReBnPMIVR_UJG9', '$2y$13$Gt1mQ.MgMk4eME6XERaQy.EUU47C/.G.U7L/XesN/xd9JH/C0CGwy', NULL, 'taufanyusuf26@yahoo.co.id', 10, 1606113327, 1606113327, '0mlUvjXDwa8CFaHBnq8OSgM1ND0A7-ZG_1606113327'),
(2, 'yusuf', 'OjPpkAjZEEbfOk5hxg6Fhx8LELUBFG5N', '$2y$13$Zc1fbpyyfPbhonPo3.Bz4eKUTs220/b6CmngNxb5dTbLgTmUtW0lK', NULL, 'yusuf@gmail.com', 10, 1607314125, 1607314125, 'ycOebsKabsTuBabNc_VExyiW4tHJDun6_1607314125'),
(11, 'megu', '67E3gx2B098wJMpfkvvGtEiA_-1okX5-', '$2y$13$HLhrNyp.KHzl.e59OtJ2k.AiE3HLxFqsPKgNDosVjsbvMZAH./n6C', NULL, 'megu@gmail.com', 10, 1607589944, 1607589944, '0-PItiCB636RppGjN4R1tiQZDFCCS_Wz_1607589944'),
(12, 'nugroho', 'qEx_u1XMECYXzvufd2i2aAwTARiITAon', '$2y$13$GRa4pBd4AXnXrHApnCNQWuqoTU.lSyVyZk7GpqBcxbTlXnnkuXkTK', NULL, 'nugroho@gmail.com', 10, 1607590126, 1607590126, 'mhgHTa6vyz1VvS6bzUAJq4g7L9vfOuyv_1607590126'),
(13, 'taufan26', '-XSWb9kGsLw_gS2J66f1onJi4rjh2s8M', '$2y$13$GZ8XWEAT/IiG3DlOtT.2cusHzTM5W7er73BzKIQq0eFs17kH9b/cO', NULL, 'taufan@gmail.com', 10, 1607590208, 1607590208, 'oc_F84cawEmTMqpeckXoZN0Zg46qgFzK_1607590208'),
(14, 'bentel', 'b6oHcL_hK2rtK4_Pg-8xU41H5O0MLK_g', '$2y$13$fP0gJpzOnVrPeor.9cEkfupow3W8Wjj2iaHO3zCK1RCxDD19jNT0e', NULL, 'bentel@gmail.com', 10, 1611298179, 1611298179, 'aY2byMP35snMGQcZ8lThLAupFPXtCkzC_1611298179');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
