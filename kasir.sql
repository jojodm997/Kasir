-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2024 at 11:11 AM
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
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administratir'),
(2, 'kasir', 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'Fauzan', NULL, '2024-02-05 15:11:03', 0),
(2, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 15:13:02', 1),
(3, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-05 15:42:19', 1),
(4, '127.0.0.1', 'Dobleh', NULL, '2024-02-05 15:48:03', 0),
(5, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-05 15:48:17', 1),
(6, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-05 16:02:27', 1),
(7, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 16:02:50', 1),
(8, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-05 16:08:59', 1),
(9, '127.0.0.1', 'Fauzan', NULL, '2024-02-05 16:14:41', 0),
(10, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 16:15:08', 1),
(11, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 16:15:46', 1),
(12, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-05 16:16:15', 1),
(13, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 16:22:58', 1),
(14, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 16:42:43', 1),
(15, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-05 16:46:05', 1),
(16, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-05 16:48:52', 1),
(17, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-07 03:37:09', 1),
(18, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-07 03:49:46', 1),
(19, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-07 03:50:28', 1),
(20, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-07 03:57:00', 1),
(21, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-07 04:08:26', 1),
(22, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-10 01:37:10', 1),
(23, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-10 08:06:26', 1),
(24, '127.0.0.1', 'Fauzan', NULL, '2024-02-10 12:17:23', 0),
(25, '127.0.0.1', 'Fauzan', NULL, '2024-02-10 12:17:39', 0),
(26, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-10 12:18:25', 1),
(27, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-11 10:39:28', 1),
(28, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-14 11:53:46', 1),
(29, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-14 11:56:38', 1),
(30, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-14 11:57:24', 1),
(31, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-14 11:58:06', 1),
(32, '127.0.0.1', 'dojesmanja@gmail.com', 8, '2024-02-14 11:58:21', 1),
(33, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-14 12:02:28', 1),
(34, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-15 03:29:58', 1),
(35, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-15 06:15:45', 1),
(36, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-15 15:01:03', 1),
(37, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-17 07:48:10', 1),
(38, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-19 02:08:52', 1),
(39, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-19 05:11:14', 1),
(40, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-19 09:28:35', 1),
(41, '127.0.0.1', 'ojantampan@gmail.com', 7, '2024-02-21 04:52:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `katid` int(11) NOT NULL,
  `katnama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`katid`, `katnama`) VALUES
(4, 'rokok\r\n'),
(6, 'semangat'),
(7, 'cdssssss'),
(8, 'cd'),
(20, 'ojandd'),
(22, 'sd'),
(23, 'dasda'),
(24, 'udud'),
(25, 'sfadfqfqw'),
(26, 'sdfsdfse'),
(27, 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1706882184, 1),
(2, '2021-02-23-084451', 'App\\Database\\Migrations\\Kategori', 'default', 'App', 1707909340, 2),
(3, '2021-02-23-085017', 'App\\Database\\Migrations\\Satuan', 'default', 'App', 1707909340, 2),
(4, '2021-02-23-091656', 'App\\Database\\Migrations\\Produk', 'default', 'App', 1707909340, 2),
(5, '2021-02-24-161052', 'App\\Database\\Migrations\\Supplier', 'default', 'App', 1707909340, 2),
(6, '2021-02-24-161641', 'App\\Database\\Migrations\\Pembelian', 'default', 'App', 1707909340, 2),
(7, '2021-02-24-163504', 'App\\Database\\Migrations\\Pembeliandetail', 'default', 'App', 1707909340, 2),
(8, '2021-02-24-170642', 'App\\Database\\Migrations\\Pelanggan', 'default', 'App', 1707909340, 2),
(9, '2021-02-24-170646', 'App\\Database\\Migrations\\Penjualan', 'default', 'App', 1707909340, 2),
(10, '2021-02-24-170649', 'App\\Database\\Migrations\\Penjualandetail', 'default', 'App', 1707909340, 2),
(11, '2021-02-24-170651', 'App\\Database\\Migrations\\Temppenjualan', 'default', 'App', 1707909340, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pel_kode` int(11) NOT NULL,
  `pel_nama` varchar(100) NOT NULL,
  `pel_alamat` text NOT NULL,
  `pel_telp` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `beli_faktur` char(20) NOT NULL,
  `beli_tgl` date NOT NULL,
  `beli_jenisbayar` enum('T','K') NOT NULL DEFAULT 'T',
  `beli_supkode` int(11) NOT NULL,
  `beli_dispersen` double(11,2) NOT NULL DEFAULT 0.00,
  `beli_disuang` double(11,2) NOT NULL DEFAULT 0.00,
  `beli_totalkotor` double(11,2) NOT NULL DEFAULT 0.00,
  `beli_totalbersih` double(11,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_detail`
--

CREATE TABLE `pembelian_detail` (
  `detbeli_id` bigint(11) NOT NULL,
  `detbeli_faktur` char(20) NOT NULL,
  `detbeli_kodebarcode` char(50) NOT NULL,
  `detbeli_hargabeli` double(11,2) NOT NULL DEFAULT 0.00,
  `detbeli_hargajual` double(11,2) NOT NULL DEFAULT 0.00,
  `detbeli_jml` double(11,2) NOT NULL DEFAULT 0.00,
  `detbeli_subtotal` double(11,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `jual_faktur` char(20) NOT NULL,
  `jual_tgl` date NOT NULL,
  `jual_pelkode` int(11) NOT NULL,
  `jual_dispersen` double(11,2) NOT NULL DEFAULT 0.00,
  `jual_disuang` double(11,2) NOT NULL DEFAULT 0.00,
  `jual_totalkotor` double(11,2) NOT NULL DEFAULT 0.00,
  `jual_totalbersih` double(11,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `detjual_id` bigint(11) NOT NULL,
  `detjual_faktur` char(20) NOT NULL,
  `detjual_kodebarcode` char(50) NOT NULL,
  `detjual_hargabeli` double(11,2) NOT NULL DEFAULT 0.00,
  `detjual_hargajual` double(11,2) NOT NULL DEFAULT 0.00,
  `detjual_jml` double(11,2) NOT NULL DEFAULT 0.00,
  `detjual_subtotal` double(11,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kodebarcode` char(50) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `produk_satid` int(11) NOT NULL,
  `produk_katid` int(11) NOT NULL,
  `stok_tersedia` double(11,2) NOT NULL DEFAULT 0.00,
  `harga_beli` double(11,2) NOT NULL DEFAULT 0.00,
  `harga_jual` double(11,2) NOT NULL DEFAULT 0.00,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `satid` int(11) NOT NULL,
  `satnama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`satid`, `satnama`) VALUES
(16, 'Akucsdcs'),
(18, 'csdcs'),
(19, 'orapopo'),
(20, 'csdcsd'),
(21, 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_kode` int(11) NOT NULL,
  `sup_nama` varchar(100) NOT NULL,
  `sup_alamat` text NOT NULL,
  `sup_telp` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_penjualan`
--

CREATE TABLE `temp_penjualan` (
  `detjual_id` bigint(11) NOT NULL,
  `detjual_faktur` char(20) NOT NULL,
  `detjual_kodebarcode` char(50) NOT NULL,
  `detjual_hargabeli` double(11,2) NOT NULL DEFAULT 0.00,
  `detjual_hargajual` double(11,2) NOT NULL DEFAULT 0.00,
  `detjual_jml` double(11,2) NOT NULL DEFAULT 0.00,
  `detjual_subtotal` double(11,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'people.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `userimage`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'ojantampan@gmail.com', 'Fauzan', NULL, 'people.png', '$2y$10$70Wmo/64gfnfCXOytyj/xu9L9L0oDgrCzvcxeSoa3zGWQOZtFgReS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-02-05 15:12:31', '2024-02-05 15:12:31', NULL),
(8, 'dojesmanja@gmail.com', 'Dobleh', NULL, 'people.png', '$2y$10$zhR3xy2C0/4dEQvlaHuMge4BAFtov9808XOFefcYYeuWqUCIvQOF6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-02-05 15:39:44', '2024-02-05 15:39:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`katid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pel_kode`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`beli_faktur`),
  ADD KEY `pembelian_beli_supkode_foreign` (`beli_supkode`);

--
-- Indexes for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD PRIMARY KEY (`detbeli_id`),
  ADD KEY `pembelian_detail_detbeli_faktur_foreign` (`detbeli_faktur`),
  ADD KEY `pembelian_detail_detbeli_kodebarcode_foreign` (`detbeli_kodebarcode`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`jual_faktur`),
  ADD KEY `penjualan_jual_pelkode_foreign` (`jual_pelkode`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`detjual_id`),
  ADD KEY `penjualan_detail_detjual_faktur_foreign` (`detjual_faktur`),
  ADD KEY `penjualan_detail_detjual_kodebarcode_foreign` (`detjual_kodebarcode`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kodebarcode`),
  ADD KEY `produk_produk_satid_foreign` (`produk_satid`),
  ADD KEY `produk_produk_katid_foreign` (`produk_katid`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`satid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_kode`);

--
-- Indexes for table `temp_penjualan`
--
ALTER TABLE `temp_penjualan`
  ADD PRIMARY KEY (`detjual_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `katid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pel_kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  MODIFY `detbeli_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `detjual_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `satid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_penjualan`
--
ALTER TABLE `temp_penjualan`
  MODIFY `detjual_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_beli_supkode_foreign` FOREIGN KEY (`beli_supkode`) REFERENCES `supplier` (`sup_kode`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD CONSTRAINT `pembelian_detail_detbeli_faktur_foreign` FOREIGN KEY (`detbeli_faktur`) REFERENCES `pembelian` (`beli_faktur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_detail_detbeli_kodebarcode_foreign` FOREIGN KEY (`detbeli_kodebarcode`) REFERENCES `produk` (`kodebarcode`) ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_jual_pelkode_foreign` FOREIGN KEY (`jual_pelkode`) REFERENCES `pelanggan` (`pel_kode`) ON UPDATE CASCADE;

--
-- Constraints for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD CONSTRAINT `penjualan_detail_detjual_faktur_foreign` FOREIGN KEY (`detjual_faktur`) REFERENCES `penjualan` (`jual_faktur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_detail_detjual_kodebarcode_foreign` FOREIGN KEY (`detjual_kodebarcode`) REFERENCES `produk` (`kodebarcode`) ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_produk_katid_foreign` FOREIGN KEY (`produk_katid`) REFERENCES `kategori` (`katid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_produk_satid_foreign` FOREIGN KEY (`produk_satid`) REFERENCES `satuan` (`satid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;