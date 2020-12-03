-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 07.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkelmaster`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `deskripsi`, `quantity`, `harga`, `stock`, `merek`, `model`, `kondisi_barang`, `image`, `status`, `create_at`) VALUES
(1, 'Ban', 'Ban Dalam', 5, '100000', 100, 'Toyota', 'Vtoyota', 'Baru', 'ban.jpg', 1, '2020-11-30 03:47:34'),
(2, 'Spion', 'Spion Jerman', 2, '10000', 100, 'Honda', 'Vhonda', 'Baru', 'spion.jpg', 1, '2020-11-30 06:45:39'),
(3, 'motorfan', 'motorfan buat honda jazz', 1, '100000', 100, 'Honda', 'Jazz', 'Baru', 'motorfan.jpg', 1, '2020-11-30 06:48:31'),
(4, 'Gear', 'Gear Tamiya', 5, '1000000', 100, 'Honda', 'Vhonda', 'Baru', 'gear.jpg', 1, '2020-11-30 07:06:47'),
(5, 'Pipa', 'Pipa Jerman', 1, '250000', 100, 'Toyota', 'Vtoyota', 'Baru', 'pipa.jpg', 1, '2020-12-01 03:08:06'),
(6, 'Busi', 'B36 Busi Mobil Bosch', 1, '50000', 100, 'Toyota', 'Vtoyota', 'Baru', 'busi.jpg', 1, '2020-12-01 03:10:46'),
(7, 'Unik Turbo ', 'Unik Turbo vx', 1, '60000', 100, 'Toyota', 'Vtoyota', 'Baru', 'turbo.jpg', 1, '2020-12-01 04:29:39'),
(8, 'Bumper', 'Bumper Ingriis', 1, '70000', 100, 'Honda', 'Vhonda', 'Baru', 'bemper.jpg', 1, '2020-12-01 04:33:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `nama`, `email`, `tanggal`, `service_name`, `jam`, `create_at`) VALUES
(6, 'Taufan', 'taufanyusuf25@gmail.com', '2020-12-04', 'Ganti Aki Baterai', '08:00 PM', '2020-12-02 09:00:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_form`
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
-- Dumping data untuk tabel `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `body`, `created_at`) VALUES
(1, 'Taufan Yusuf Nugroho', 'taufan@email.com', 'Sangat Bagus', 'Aku Suka', '2020-12-02 02:51:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1606113090),
('m130524_201442_init', 1606113098),
('m190124_110200_add_verification_token_column_to_user_table', 1606113098);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'taufan', '2I3LRH20zEKzXVngAkReBnPMIVR_UJG9', '$2y$13$Gt1mQ.MgMk4eME6XERaQy.EUU47C/.G.U7L/XesN/xd9JH/C0CGwy', NULL, 'taufanyusuf26@yahoo.co.id', 10, 1606113327, 1606113327, '0mlUvjXDwa8CFaHBnq8OSgM1ND0A7-ZG_1606113327');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
