-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 10.34
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
-- Database: `inventarisasi`
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
(122, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-22 09:47:27'),
(123, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:03:58'),
(124, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:04:01'),
(125, 'Operator', 'Melakukan Login', 'Login', 'Operator', '2023-03-08 08:04:05'),
(126, 'Operator', 'Melakukan Logout', 'Logout', 'Operator', '2023-03-08 08:04:14'),
(127, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-03-08 08:04:17'),
(128, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-03-08 08:04:59'),
(129, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:05:02'),
(130, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:09:13'),
(131, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-03-08 08:09:15'),
(132, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-03-08 08:09:22'),
(133, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:09:25'),
(134, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:10:09'),
(135, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:35:58'),
(136, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:40:35'),
(137, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-03-08 08:40:39'),
(138, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-03-08 08:41:25'),
(139, 'Operator', 'Melakukan Login', 'Login', 'Operator', '2023-03-08 08:41:28'),
(140, 'Operator', 'Melakukan Logout', 'Logout', 'Operator', '2023-03-08 08:41:52'),
(141, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:41:55'),
(142, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 14:02:48'),
(143, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 14:29:47'),
(144, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 14:29:49'),
(145, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 14:39:38'),
(146, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-06-10 14:39:41'),
(147, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-06-10 14:44:39'),
(148, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 14:44:41'),
(149, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 14:45:26'),
(150, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:16:03'),
(151, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:16:40'),
(152, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:17:31'),
(153, 'kadis', 'Data Barang Masuk', 'Reject', 'stapless', '2023-06-10 15:36:21'),
(154, 'kadis', 'Data Barang Masuk', 'Reject', 'kertas', '2023-06-10 15:37:26'),
(155, 'kadis', 'Data Barang Masuk', 'Reject', 'pulpen', '2023-06-10 15:37:46'),
(156, 'admin', 'Data Barang', 'Menghapus', 'kertas A4', '2023-06-10 15:37:59'),
(157, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:59:30'),
(158, 'admin', 'Data Barang', 'Menambah', 'Remot', '2023-06-10 16:00:47'),
(159, 'admin', 'Data Barang', 'Menambah', 'Remote', '2023-06-10 16:02:53'),
(160, 'admin', 'Data Barang', 'Mengubah', 'Remote', '2023-06-10 16:04:27'),
(161, 'admin', 'Data Barang', 'Mengubah', 'Remote', '2023-06-10 16:05:27'),
(162, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 16:26:20'),
(163, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 16:26:22'),
(164, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 16:29:15'),
(165, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 16:29:17'),
(166, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 16:31:43'),
(167, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 16:31:46'),
(168, 'admin', 'Data Asset', 'Menambah', 'Resort Takisung', '2023-06-10 17:05:11'),
(169, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-06-10 17:18:33'),
(170, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-06-10 17:18:41'),
(171, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-06-10 17:18:44'),
(172, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 18:16:00'),
(173, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 18:16:03'),
(174, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 18:23:18'),
(175, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 18:23:21'),
(176, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 18:43:51'),
(177, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 18:43:54'),
(178, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 07:53:22'),
(179, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-11 07:53:24'),
(180, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 07:53:28'),
(181, 'admin', 'Data Barang', 'Menambah', 'Mesin', '2023-06-11 07:54:13'),
(182, 'admin', 'Data Barang', 'Menghapus', 'pulpen', '2023-06-11 08:03:18'),
(183, 'admin', 'Data Barang', 'Menghapus', 'pensil', '2023-06-11 08:03:19'),
(184, 'admin', 'Data Barang', 'Menghapus', 'kertas', '2023-06-11 08:03:19'),
(185, 'admin', 'Data Barang', 'Menghapus', 'stapless', '2023-06-11 08:03:20'),
(186, 'admin', 'Data Barang', 'Menghapus', 'tipe-x', '2023-06-11 08:03:20'),
(187, 'admin', 'Data Barang', 'Menghapus', 'buku', '2023-06-11 08:03:20'),
(188, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-06-11 08:03:21'),
(189, 'admin', 'Data Barang', 'Menghapus', 'Kertas F4', '2023-06-11 08:03:21'),
(190, 'admin', 'Data Barang', 'Menghapus', 'Stabilo', '2023-06-11 08:03:21'),
(191, 'admin', 'Data Barang', 'Menghapus', 'Remot', '2023-06-11 08:03:21'),
(192, 'admin', 'Data Barang', 'Menghapus', 'Remote', '2023-06-11 08:03:21'),
(193, 'admin', 'Data Barang', 'Menghapus', 'Mesin', '2023-06-11 08:03:22'),
(194, 'admin', 'Data Barang', 'Menambah', 'buku', '2023-06-11 08:03:39'),
(195, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 08:03:59'),
(196, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 08:04:32'),
(197, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 08:04:42'),
(198, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-11 08:05:02'),
(199, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-06-11 08:05:20'),
(200, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-06-11 08:05:27'),
(201, 'admin', 'Data Barang', 'Menghapus', 'buku', '2023-06-11 08:07:45'),
(202, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-11 14:14:23'),
(203, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 14:14:24'),
(204, 'admin', 'Data Barang', 'Menambah', 'buku', '2023-06-11 14:14:37'),
(205, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 14:32:06'),
(206, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 14:32:26'),
(207, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-11 14:32:40'),
(208, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-11 14:39:14'),
(209, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 14:47:05'),
(210, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 14:47:43'),
(211, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:46:22'),
(212, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:46:37'),
(213, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:47:49'),
(214, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:51:10'),
(215, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:54:49'),
(216, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 16:06:11'),
(217, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 16:17:59'),
(218, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 16:21:48'),
(219, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 16:22:28'),
(220, 'admin', 'Data Barang Keluar', 'Menambah', 'buku', '2023-06-11 16:23:14'),
(221, 'admin', 'Data Barang Keluar', 'Mengubah', 'buku', '2023-06-11 16:25:31'),
(222, 'admin', 'Data Barang Keluar', 'Mengubah', 'buku', '2023-06-11 16:26:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `id_barang`, `tanggal_peminjaman`, `tanggal_pengembalian`, `jumlah_barang`, `created_at`) VALUES
(17, 20, '2023-06-11', '2023-06-17', 4, '2023-06-11 16:23:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `validation_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_barang`, `tanggal_masuk`, `jumlah_barang`, `validation_at`, `created_at`) VALUES
(25, 20, '2023-06-11', 10, '2023-06-11 08:39:14', '2023-06-11 14:32:06'),
(26, 20, '2023-06-11', 5, NULL, '2023-06-11 14:47:05'),
(27, 20, '2023-06-06', 12, NULL, '2023-06-11 16:06:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asset`
--

CREATE TABLE `data_asset` (
  `id` int(11) NOT NULL,
  `nama_asset` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_asset`
--

INSERT INTO `data_asset` (`id`, `nama_asset`, `tempat`, `created_at`) VALUES
(1, 'Resort Takisung', 'Pantai Takisung, Pelaihari, Kab. Tanah Laut', '2023-06-10 17:05:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `kode_barang`, `nama_barang`, `harga_barang`, `nama_supplier`, `created_at`) VALUES
(20, 8992761002039, 'buku', 10000, 'achmad', '2023-06-11 14:14:37');

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
(13, 'Dashboard', 'dashboard', 'icon-home', 1, 0, 2, '2022-12-20 12:40:50'),
(14, 'Data Barang', 'data-barang', 'fas fa-archive', 2, 0, 2, '2022-12-20 12:40:50'),
(15, 'Barang Masuk', 'barang-masuk', 'fas fa-arrow-circle-down', 3, 0, 2, '2022-12-20 12:40:50'),
(16, 'Barang Keluar', 'barang-keluar', 'fas fa-arrow-alt-circle-up', 4, 0, 2, '2022-12-20 12:40:50'),
(17, 'Laporan', 'laporan', 'fas fa-clipboard', 6, 0, 2, '2022-12-20 12:40:50'),
(18, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 0, 17, 2, '2022-02-05 15:07:06'),
(19, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 0, 17, 2, '2022-02-05 15:07:06'),
(20, 'Laporan Data Barang', 'laporan-data-barang', '', 0, 17, 2, '2022-02-05 15:07:06'),
(23, 'Dashboard', 'dashboard', 'icon-home', 0, 0, 3, '2022-12-20 12:40:50'),
(24, 'Laporan', 'laporan', 'fas fa-clipboard', 2, 0, 3, '2022-12-20 12:40:50'),
(25, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 0, 24, 3, '2022-02-05 15:07:06'),
(26, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 0, 24, 3, '2022-02-05 15:07:06'),
(27, 'Laporan Data Barang', 'laporan-data-barang', '', 0, 24, 3, '2022-02-05 15:07:06'),
(28, 'Laporan Data User', 'laporan-data-user', '', 0, 24, 3, '2022-02-05 15:07:06'),
(30, 'Validasi Barang Masuk', 'validasi-barang-masuk', 'icon-check', 1, 0, 3, '2022-12-20 12:40:50'),
(31, 'Data Asset', 'data-asset', 'fas fa-box', 5, 0, 1, '2023-06-10 16:49:56'),
(32, 'Laporan Data Asset', 'laporan-data-asset', '', 0, 5, 1, '2022-02-05 15:07:06'),
(33, 'Laporan Data Asset', 'laporan-data-asset', '', 0, 24, 3, '2022-02-05 15:07:06'),
(34, 'Laporan Barang Pending', 'laporan-barang-pending', '', 0, 24, 3, '2022-02-05 15:07:06');

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
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `data_asset`
--
ALTER TABLE `data_asset`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `data_asset`
--
ALTER TABLE `data_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  ADD CONSTRAINT `foreign_key_barang` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id`) ON DELETE CASCADE;

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
