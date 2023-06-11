-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 12.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `log_user` varchar(50) NOT NULL,
  `log_type` varchar(50) NOT NULL,
  `log_action` varchar(50) NOT NULL,
  `log_item` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `log_user`, `log_type`, `log_action`, `log_item`, `created_at`) VALUES
(1, 'administrator', 'Melakukan Login', 'Login', 'admin', '2022-12-20 20:51:06'),
(2, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 20:52:16'),
(3, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 20:53:34'),
(4, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 20:53:41'),
(5, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 20:53:46'),
(6, 'administrator', 'Data Barang', 'Menambah', 'Jaket', '2022-12-20 20:54:12'),
(7, 'administrator', 'Data Barang', 'Mengubah', 'Jaket', '2022-12-20 20:54:45'),
(8, 'administrator', 'Data Barang', 'Menambah', 'Jaket', '2022-12-20 20:56:33'),
(9, 'administrator', 'Data Barang', 'Menghapus', 'Jaket', '2022-12-20 20:56:40'),
(10, 'administrator', 'Data Barang', 'Menambah', 'Jaket', '2022-12-20 20:57:12'),
(11, 'administrator', 'Data Barang', 'Menambah', 'Hoodie', '2022-12-20 20:58:50'),
(12, 'administrator', 'Data Barang Masuk', 'Menambah', 'Hoodie', '2022-12-20 20:59:08'),
(13, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 21:31:59'),
(14, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-20 21:32:16'),
(15, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-20 21:34:18'),
(16, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 21:34:21'),
(17, 'administrator', 'Data User', 'Mengubah', 'sekretaris', '2022-12-20 21:35:26'),
(18, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 21:35:43'),
(19, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-20 21:35:45'),
(20, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-20 21:36:27'),
(21, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 21:36:30'),
(22, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 18:53:51'),
(23, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 18:53:55'),
(24, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 18:54:15'),
(25, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:24:45'),
(26, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:24:47'),
(27, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:25:10'),
(28, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:25:12'),
(29, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:25:15'),
(30, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-26 19:25:17'),
(31, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-26 19:28:56'),
(32, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-26 19:28:58'),
(33, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:41:42'),
(34, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:41:45'),
(35, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-26 19:41:47'),
(36, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-26 19:42:35'),
(37, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:43:06'),
(38, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 16:09:34'),
(39, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-07 16:09:38'),
(40, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 16:28:51'),
(41, 'administrator', 'Data Barang Masuk', 'Menambah', 'baju batik', '2023-01-07 16:45:02'),
(42, 'administrator', 'Data Barang Masuk', 'Menambah', 'sepatu', '2023-01-07 16:45:36'),
(43, 'administrator', 'Data Barang Masuk', 'Menambah', 'baju batik', '2023-01-07 16:54:31'),
(44, 'administrator', 'Data Barang Masuk', 'Menambah', 'Jaket', '2023-01-07 16:57:21'),
(45, 'administrator', 'Data Barang Masuk', 'Menambah', 'sepatu', '2023-01-07 16:57:47'),
(46, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2023-01-07 16:58:09'),
(47, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 17:09:31'),
(48, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2023-01-07 17:09:52'),
(49, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 17:10:01'),
(50, 'administrator', 'Data User', 'Menghapus', 'aulia', '2023-01-07 17:20:17'),
(51, 'administrator', 'Data User', 'Menghapus', 'kadis', '2023-01-07 17:25:28'),
(52, 'administrator', 'Data User', 'Menambah', 'kadis', '2023-01-07 17:25:42'),
(53, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2023-01-07 17:26:02'),
(54, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-07 17:26:07'),
(55, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-07 18:14:17'),
(56, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-07 18:17:30'),
(57, 'admin', 'Data User', 'Menambah', 'sekretaris', '2023-01-07 18:18:09'),
(58, 'admin', 'Data User', 'Menambah', 'kadis', '2023-01-07 18:18:28'),
(59, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-07 18:18:32'),
(60, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-07 18:18:34'),
(61, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-07 18:18:37'),
(62, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-07 18:18:45'),
(63, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-07 18:18:53'),
(64, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-07 18:18:55'),
(65, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-10 23:17:11'),
(66, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-11 13:48:31'),
(67, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-11 14:43:44'),
(68, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-11 14:43:47'),
(69, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-12 19:50:41'),
(70, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-12 20:57:29'),
(71, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-12 20:57:32'),
(72, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-17 19:41:40'),
(73, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-17 19:41:45'),
(74, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-17 19:41:47'),
(75, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-17 19:48:44'),
(76, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-17 19:48:49'),
(77, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-24 12:08:42'),
(78, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-24 12:11:50'),
(79, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-24 12:11:53'),
(80, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-24 12:11:54'),
(81, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-24 12:11:57'),
(82, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-24 12:12:03'),
(83, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-24 12:12:09'),
(84, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-24 12:16:22'),
(85, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-24 12:16:23'),
(86, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-24 12:16:58'),
(87, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-24 12:18:14'),
(88, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-24 12:18:19'),
(89, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-24 12:18:22'),
(90, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-25 19:36:39'),
(91, 'admin', 'Data Barang', 'Mengubah', 'pulpen', '2023-01-25 19:41:29'),
(92, 'admin', 'Data Barang', 'Mengubah', 'pensil', '2023-01-25 19:41:36'),
(93, 'admin', 'Data Barang', 'Mengubah', 'kertas', '2023-01-25 19:41:42'),
(94, 'admin', 'Data Barang', 'Mengubah', 'stapless', '2023-01-25 19:41:52'),
(95, 'admin', 'Data Barang', 'Mengubah', 'tipe-x', '2023-01-25 19:42:09'),
(96, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-25 19:47:55'),
(97, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-25 19:47:57'),
(98, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-25 19:48:37'),
(99, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-25 19:48:40'),
(100, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-25 19:54:52'),
(101, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-25 19:54:55'),
(102, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-05 10:14:36'),
(103, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-05 10:14:54'),
(104, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-02-05 10:19:01'),
(105, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-05 10:19:37'),
(106, 'admin', 'Data Barang', 'Menambah', 'buku', '2023-02-05 10:20:55'),
(107, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-02-05 10:21:24'),
(108, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-02-05 10:21:57'),
(109, 'admin', 'Data Barang', 'Menambah', 'Kertas F4', '2023-02-05 10:22:23'),
(110, 'admin', 'Data Barang', 'Menambah', 'Stabilo', '2023-02-05 10:22:53'),
(111, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-02-05 10:23:04'),
(112, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-11 20:50:30'),
(113, 'admin', 'Data Supplier', 'Menambah', 'achmad', '2023-02-11 20:50:49'),
(114, 'admin', 'Data Supplier', 'Menambah', 'aji', '2023-02-11 20:51:02'),
(115, 'admin', 'Data Supplier', 'Menambah', 'Muhammad', '2023-02-11 20:52:10'),
(116, 'admin', 'Data Supplier', 'Menambah', 'Siti', '2023-02-11 20:52:31'),
(117, 'admin', 'Data User', 'Menambah', 'Operator', '2023-02-11 20:54:27'),
(118, 'admin', 'Data User', 'Menambah', 'Operator2', '2023-02-11 20:55:06'),
(119, 'admin', 'Data Barang Keluar', 'Menambah', 'tipe-x', '2023-02-11 20:56:22'),
(120, 'admin', 'Data Barang Masuk', 'Menambah', 'kertas A4', '2023-02-11 20:56:56'),
(121, 'admin', 'Data Barang Keluar', 'Menambah', 'kertas A4', '2023-02-11 20:57:11'),
(122, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-22 09:47:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `id_barang`, `tanggal_keluar`, `jumlah_barang`, `created_at`) VALUES
(12, 1, '2022-09-24', 10, '2022-09-24 21:39:18'),
(13, 1, '2022-10-24', 15, '2022-09-24 21:55:13'),
(14, 2, '2022-08-24', 30, '2022-09-24 21:55:49'),
(15, 9, '2023-02-11', 5, '2023-02-11 20:56:22'),
(16, 12, '2023-02-11', 5, '2023-02-11 20:57:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_barang`, `tanggal_masuk`, `jumlah_barang`, `id_supplier`, `created_at`) VALUES
(12, 1, '2022-09-24', 10, 1, '2022-09-24 21:38:50'),
(13, 1, '2022-09-24', 5, 1, '2022-09-24 21:39:05'),
(14, 1, '2022-02-24', 10, 1, '2022-09-24 21:40:33'),
(15, 1, '2022-05-24', 10, 1, '2022-09-24 21:54:59'),
(16, 2, '2022-09-24', 50, 1, '2022-09-24 21:55:36'),
(17, 9, '2022-12-20', 15, 1, '2022-12-20 20:59:08'),
(18, 1, '2023-01-09', 10, 1, '2023-01-07 16:45:02'),
(19, 3, '2023-01-07', 20, 1, '2023-01-07 16:45:36'),
(20, 1, '2024-06-04', 100, 1, '2023-01-07 16:54:31'),
(21, 8, '2023-01-07', 50, 1, '2023-01-07 16:57:21'),
(22, 3, '2023-01-07', 10, 1, '2023-01-07 16:57:47'),
(23, 12, '2023-02-11', 50, 3, '2023-02-11 20:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `kode_barang`, `nama_barang`, `harga_barang`, `created_at`) VALUES
(1, 213, 'pulpen', 2000000, '2022-02-05 15:37:54'),
(2, 2133, 'pensil', 2000000, '2022-02-05 15:37:54'),
(3, 2132, 'kertas', 1500000, '2022-02-05 16:25:06'),
(8, 123, 'stapless', 150000, '2022-12-20 20:57:12'),
(9, 12333, 'tipe-x', 200000, '2022-12-20 20:58:50'),
(10, 934, 'buku', 4000, '2023-02-05 10:20:55'),
(11, 985, 'Map', 200, '2023-02-05 10:21:24'),
(12, 687, 'kertas A4', 25000, '2023-02-05 10:21:57'),
(13, 546, 'Kertas F4', 20000, '2023-02-05 10:22:23'),
(14, 563, 'Stabilo', 4000, '2023-02-05 10:22:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Administrator', 'admin', '0000-00-00 00:00:00'),
(2, 'Sekretaris', 'sekretaris', '0000-00-00 00:00:00'),
(3, 'Kadis', 'kadis', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `slug` varchar(25) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `sequence` int(11) DEFAULT NULL,
  `parrent_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `icon`, `sequence`, `parrent_id`, `group_id`, `created_at`) VALUES
(1, 'Dashboard', 'dashboard', 'icon-home', 1, 0, 1, '2022-12-20 12:40:50'),
(2, 'Data Barang', 'data-barang', 'fas fa-archive', 2, 0, 1, '2022-12-20 12:40:50'),
(3, 'Barang Masuk', 'barang-masuk', 'fas fa-arrow-circle-down', 3, 0, 1, '2022-12-20 12:40:50'),
(4, 'Barang Keluar', 'barang-keluar', 'fas fa-arrow-alt-circle-up', 4, 0, 1, '2022-12-20 12:40:50'),
(5, 'Laporan', 'laporan', 'fas fa-clipboard', 7, 0, 1, '2022-12-20 12:40:50'),
(6, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 0, 5, 1, '2022-12-20 12:40:50'),
(7, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 0, 5, 1, '2022-02-05 15:07:06'),
(8, 'Laporan Data Barang', 'laporan-data-barang', '', 0, 5, 1, '2022-02-05 15:07:06'),
(9, 'Laporan Data User', 'laporan-data-user', '', 0, 5, 1, '2022-02-05 15:07:06'),
(10, 'Data User', 'data-user', 'fas fa-user', 5, 0, 1, '2022-12-20 12:40:50'),
(11, 'Data Supplier', 'data-supplier', 'fas fa-archive', 6, 0, 1, '2022-12-20 12:40:50'),
(12, 'Laporan Data Supplier', 'laporan-data-supplier', '', NULL, 5, 1, '2022-12-20 12:49:32'),
(13, 'Dashboard', 'dashboard', 'icon-home', 1, 0, 2, '2022-12-20 12:40:50'),
(14, 'Data Barang', 'data-barang', 'fas fa-archive', 2, 0, 2, '2022-12-20 12:40:50'),
(15, 'Barang Masuk', 'barang-masuk', 'fas fa-arrow-circle-down', 3, 0, 2, '2022-12-20 12:40:50'),
(16, 'Barang Keluar', 'barang-keluar', 'fas fa-arrow-alt-circle-up', 4, 0, 2, '2022-12-20 12:40:50'),
(17, 'Laporan', 'laporan', 'fas fa-clipboard', 6, 0, 2, '2022-12-20 12:40:50'),
(18, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 0, 17, 2, '2022-02-05 15:07:06'),
(19, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 0, 17, 2, '2022-02-05 15:07:06'),
(20, 'Laporan Data Barang', 'laporan-data-barang', '', 0, 17, 2, '2022-02-05 15:07:06'),
(21, 'Data Supplier', 'data-supplier', 'fas fa-archive', 5, 0, 2, '2022-12-20 12:40:50'),
(22, 'Laporan Data Supplier', 'laporan-data-supplier', '', NULL, 17, 2, '2022-12-20 12:49:32'),
(23, 'Dashboard', 'dashboard', 'icon-home', 0, 0, 3, '2022-12-20 12:40:50'),
(24, 'Laporan', 'laporan', 'fas fa-clipboard', 0, 0, 3, '2022-12-20 12:40:50'),
(25, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 0, 24, 3, '2022-02-05 15:07:06'),
(26, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 0, 24, 3, '2022-02-05 15:07:06'),
(27, 'Laporan Data Barang', 'laporan-data-barang', '', 0, 24, 3, '2022-02-05 15:07:06'),
(28, 'Laporan Data User', 'laporan-data-user', '', 0, 24, 3, '2022-02-05 15:07:06'),
(29, 'Laporan Data Supplier', 'laporan-data-supplier', '', NULL, 24, 3, '2022-12-20 12:49:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `no_telp`, `alamat`, `created_at`) VALUES
(1, 'wirra', '081217762', 'perintis', '2022-12-20 12:44:19'),
(2, 'achmad', '091287392', 'Jl. Turih', '2023-02-11 20:50:49'),
(3, 'aji', '0812312322', 'Jl. Sapir', '2023-02-11 20:51:02'),
(4, 'Muhammad', '0813012931', 'Jl. Ayani', '2023-02-11 20:52:10'),
(5, 'Siti', '0812039811', 'Jl. Terang', '2023-02-11 20:52:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `group_id` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `cookie` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama_lengkap`, `group_id`, `foto`, `cookie`, `status`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$gAa4QPXY1FeIxWwY871TfuslCbeAICd123s27jwv4wdIWyIvSZs2e', 'admin', 1, NULL, '0', 1, '2023-01-07 18:17:22'),
(3, 'sekretaris', 'sekretaris@gmail.com', '$2y$10$GfgZntl0UEepR2whknSom.GmXXrl5sQTGSrgXhooNAH270uE7awxm', 'sekretaris', 2, 'sekretaris.png', NULL, 1, '2023-01-07 18:18:09'),
(4, 'kadis', 'kadis@gmail.com', '$2y$10$S1LynmGpeuN0xTAugLQ5NuY6q/ycN7gAhtO5/HRYP.1lJOMJNuheG', 'kadis', 3, 'kadis.png', NULL, 1, '2023-01-07 18:18:28'),
(5, 'operator', 'operator@operator.com', '$2y$10$0ZBTK3nLbVziE7mgsja/guaLeySRH.U2w/KZcgslXJjXvNwlrfQsy', 'Operator', 2, 'operator.png', NULL, 1, '2023-02-11 20:54:27'),
(6, 'operator2', 'operator2@operator.com', '$2y$10$eTDazmagmr9GANk/66DFaeJ1aN/fvj4i6n3R4cJRcTiTjrSZ1ktby', 'Operator2', 2, 'operator2.png', NULL, 1, '2023-02-11 20:55:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `barang_keluar_id_barang_IDX` (`id_barang`) USING BTREE;

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `barang_masuk_id_supplier_IDX` (`id_supplier`) USING BTREE;

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_group_id_IDX` (`group_id`) USING BTREE;

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_group_id_IDX` (`group_id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_FK` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_FK` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_FK` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
