-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 01.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(222, 'admin', 'Data Barang Keluar', 'Mengubah', 'buku', '2023-06-11 16:26:41'),
(223, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 17:00:22'),
(224, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-11 17:00:39'),
(225, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 17:01:09'),
(226, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-11 17:02:49'),
(227, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 17:02:53'),
(228, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-11 17:02:56'),
(229, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 17:02:58'),
(230, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-14 20:09:43'),
(231, 'admin', 'Data Barang Keluar', 'Menambah', 'buku', '2023-06-14 20:12:34'),
(232, 'admin', 'Data Barang Keluar', 'Menambah', 'buku', '2023-06-14 20:26:33'),
(233, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-14 20:38:42'),
(234, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'buku', '2023-06-14 20:55:52'),
(235, 'admin', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-14 20:55:52'),
(236, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'buku', '2023-06-14 21:02:46'),
(237, 'admin', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-14 21:02:46'),
(238, 'admin', 'Data Barang', 'Menambah', 'botol', '2023-06-14 21:17:48'),
(239, 'admin', 'Data Barang', 'Menambah', 'Jaket', '2023-06-14 21:23:21'),
(240, 'admin', 'Data Barang', 'Menambah', 'asdasd', '2023-06-14 21:23:56'),
(241, 'admin', 'Data Barang', 'Menambah', 'asdasd', '2023-06-14 21:24:41'),
(242, 'admin', 'Data Barang', 'Menambah', 'asdasd', '2023-06-14 21:26:55'),
(243, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-06-14 21:27:19'),
(244, 'admin', 'Data Barang', 'Mengubah', 'asdasd', '2023-06-14 21:30:39'),
(245, 'admin', 'Data Barang', 'Mengubah', 'Jaket', '2023-06-14 21:30:42'),
(246, 'admin', 'Data Barang', 'Mengubah', 'botol', '2023-06-14 21:30:44'),
(247, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-14 21:30:46'),
(248, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-14 22:56:29'),
(249, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-14 22:56:31'),
(250, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-14 22:56:38'),
(251, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-14 22:56:42'),
(252, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-14 23:24:46'),
(253, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-15 17:45:20'),
(254, 'admin', 'Data Peminjaman Aset', 'Mengubah', 'Resort Takisung', '2023-06-15 18:33:15'),
(255, 'admin', 'Data Asset', 'Menambah', 'Resort Batakan', '2023-06-15 19:15:15'),
(256, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-15 19:17:57'),
(257, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-15 19:49:47'),
(258, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-15 19:53:16'),
(259, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-06-15 20:22:11'),
(260, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 09:46:09'),
(261, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 09:47:25'),
(262, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 09:52:47'),
(263, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-07-03 09:54:17'),
(264, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 10:01:23'),
(265, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-03 10:57:32'),
(266, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-03 10:57:34'),
(267, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 18:57:47'),
(268, 'admin', 'Data Barang Masuk', 'Menambah', 'asdasd', '2023-07-05 19:05:32'),
(269, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 19:05:38'),
(270, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-05 19:05:40'),
(271, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'asdasd', '2023-07-05 19:05:46'),
(272, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-05 19:05:48'),
(273, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:05:51'),
(274, 'admin', 'Data Barang Keluar', 'Menambah', 'asdasd', '2023-07-05 19:11:58'),
(275, 'admin', 'Data Supplier', 'Mengubah', 'aji', '2023-07-05 19:18:02'),
(276, 'admin', 'Data Supplier', 'Mengubah', 'aji', '2023-07-05 19:18:07'),
(277, 'admin', 'Data Supplier', 'Mengubah', 'aji', '2023-07-05 19:18:10'),
(278, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:27:39'),
(279, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:34:23'),
(280, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:49:09'),
(281, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:50:57'),
(282, 'admin', 'Data Barang Masuk', 'Menambah', 'botol', '2023-07-05 20:05:08'),
(283, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 20:05:13'),
(284, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-05 20:05:16'),
(285, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'botol', '2023-07-05 20:05:20'),
(286, 'admin', 'Data Bidang', 'Menambah', 'Pemasaran', '2023-07-05 20:45:15'),
(287, 'admin', 'Data Bidang', 'Menambah', 'Sekretariat', '2023-07-05 20:46:08'),
(288, 'admin', 'Data Bidang', 'Menambah', 'Destinasi', '2023-07-05 20:46:15'),
(289, 'admin', 'Data bidang', 'Menghapus', 'Destinasi', '2023-07-05 20:46:17'),
(290, 'admin', 'Data Bidang', 'Menambah', 'Destinasi', '2023-07-05 20:46:21'),
(291, 'admin', 'Data Bidang', 'Mengubah', 'Destinasii', '2023-07-05 20:46:25'),
(292, 'admin', 'Data Bidang', 'Mengubah', 'Destinasi', '2023-07-05 20:46:28'),
(293, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 20:50:18'),
(294, 'admin', 'Data Barang Keluar', 'Menambah', 'botol', '2023-07-05 20:51:41'),
(295, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:57:26'),
(296, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:57:33'),
(297, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:58:18'),
(298, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:59:17'),
(299, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:59:38'),
(300, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 21:03:04'),
(301, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-07-05 21:16:29'),
(302, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-07-05 21:16:38'),
(303, 'admin', 'Data Barang', 'Menambah', 'Flashdisk', '2023-07-05 21:24:14'),
(304, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-05 21:24:24'),
(305, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:28:10'),
(306, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 21:28:16'),
(307, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:28:19'),
(308, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 21:28:22'),
(309, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:28:25'),
(310, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 21:37:25'),
(311, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-05 21:37:30'),
(312, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:41:57'),
(313, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-05 21:44:35'),
(314, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-05 21:44:46'),
(315, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:51:05'),
(316, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:53:21'),
(317, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-05 21:53:43'),
(318, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-05 21:57:48'),
(319, 'admin', 'Data Barang Keluar', 'Menambah', 'botol', '2023-07-05 22:44:42'),
(320, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'botol', '2023-07-05 23:03:38'),
(321, 'admin', 'Validasi Barang Masuk', 'Validasi', 'botol', '2023-07-05 23:03:38'),
(322, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-05 23:05:24'),
(323, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'Flashdisk', '2023-07-05 23:05:52'),
(324, 'admin', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-05 23:05:52'),
(325, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-05 23:06:22'),
(326, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:20:58'),
(327, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:13'),
(328, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:15'),
(329, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 06:39:16'),
(330, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:18'),
(331, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:19'),
(332, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 06:57:39'),
(333, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 06:57:45'),
(334, 'admin', 'Data Barang Masuk', 'Menambah', 'kertas A4', '2023-07-06 07:25:36'),
(335, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-06 07:25:40'),
(336, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 07:25:43'),
(337, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 07:25:45'),
(338, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'kertas A4', '2023-07-06 07:25:50'),
(339, 'admin', 'Data Bidang', 'Menambah', 'Ekonomi Kreatif', '2023-07-06 07:29:16'),
(340, 'admin', 'Data Bidang', 'Mengubah', 'Pengembangan sdm ekraf', '2023-07-06 07:37:52'),
(341, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 07:40:17'),
(342, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 07:52:25'),
(343, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 07:55:29'),
(344, 'admin', 'Data Peminjaman Aset', 'Mengubah', 'Resort Takisung', '2023-07-06 09:31:10'),
(345, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 09:31:23'),
(346, 'admin', 'Data Peminjaman Aset', 'Mengubah', 'Resort Takisung', '2023-07-06 09:31:36'),
(347, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-07-06 09:31:41'),
(348, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:06:12'),
(349, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:11:40'),
(350, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-07-06 15:11:55'),
(351, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:18:08'),
(352, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:23:15'),
(353, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:30:38'),
(354, 'admin', 'Data Peminjaman Asset', 'Menghapus', '1', '2023-07-06 15:30:40'),
(355, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:31:52'),
(356, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:32:02'),
(357, 'admin', 'Data Peminjaman Asset', 'Menghapus', '1', '2023-07-06 15:32:05'),
(358, 'admin', 'Data Peminjaman Asset', 'Menghapus', '10', '2023-07-06 15:32:38'),
(359, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:34:02'),
(360, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-07-06 15:39:12'),
(361, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:49:41'),
(362, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:51:07'),
(363, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:51:43'),
(364, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 15:56:43'),
(365, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:56:58'),
(366, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 15:58:35'),
(367, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:58:51'),
(368, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:00:53'),
(369, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:01:20'),
(370, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:05:29'),
(371, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:06:30'),
(372, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:06:49'),
(373, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-06 17:22:05'),
(374, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 17:22:31'),
(375, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 17:22:33'),
(376, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-06 17:39:35'),
(377, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 17:46:39'),
(378, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 19:49:21'),
(379, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 19:49:44'),
(380, 'admin', 'Data Barang Masuk', 'Menghapus', 'asdasd', '2023-07-06 19:52:29'),
(381, 'admin', 'Data Barang', 'Menghapus', 'asdasd', '2023-07-06 19:52:40'),
(382, 'admin', 'Data Barang', 'Menghapus', 'asdasd', '2023-07-06 19:52:42'),
(383, 'admin', 'Data Barang', 'Menghapus', 'asdasd', '2023-07-06 19:52:43'),
(384, 'admin', 'Data Barang', 'Menghapus', 'Jaket', '2023-07-06 19:52:47'),
(385, 'admin', 'Data Barang', 'Menghapus', 'kertas A4', '2023-07-06 19:52:48'),
(386, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 19:54:38'),
(387, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-06 19:54:48'),
(388, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-06 19:54:50'),
(389, 'admin', 'Data Barang', 'Menghapus', 'botol', '2023-07-06 19:55:19'),
(390, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-07-06 19:55:26'),
(391, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-06 19:56:25'),
(392, 'admin', 'Data Barang', 'Mengubah', 'Flashdisk', '2023-07-06 19:56:40'),
(393, 'admin', 'Data Barang', 'Mengubah', 'Flashdisk', '2023-07-06 19:56:50'),
(394, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-06 19:56:56'),
(395, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-07-06 19:57:00'),
(396, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-06 19:57:16'),
(397, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-06 19:57:24'),
(398, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-06 19:59:10'),
(399, 'admin', 'Data Barang Keluar', 'Mengubah', 'Flashdisk', '2023-07-06 19:59:24'),
(400, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 14:04:13'),
(401, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 19:00:07'),
(402, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-07 19:01:16'),
(403, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 19:01:30'),
(404, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-07-07 20:38:26'),
(405, 'admin', 'Data Barang Masuk', 'Menambah', 'Map', '2023-07-07 20:39:01'),
(406, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-07 20:39:28'),
(407, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Map', '2023-07-07 20:39:44'),
(408, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 20:57:37'),
(409, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-08 06:06:46'),
(410, 'admin', 'Data Barang Keluar', 'Menambah', 'Map', '2023-07-08 06:28:34'),
(411, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-08 06:34:18'),
(412, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-08 06:44:15'),
(413, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-08 06:48:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `validation_user_id` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `id_barang`, `id_bidang`, `nama_peminjam`, `tanggal_keluar`, `jumlah_barang`, `validation_user_id`, `created_at`) VALUES
(30, 29, 4, 'Achmad', '2023-07-08', 15, NULL, '2023-07-08 06:44:15'),
(31, 29, 5, 'Yasir', '2023-07-09', 10, NULL, '2023-07-08 06:48:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `validation_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_barang`, `tanggal_masuk`, `jumlah_barang`, `id_supplier`, `validation_at`, `created_at`) VALUES
(40, 29, '2023-07-06', 100, 1, '2023-07-06 13:57:24', '2023-07-06 19:57:16'),
(41, 30, '2023-07-07', 100, 1, '2023-07-07 14:39:44', '2023-07-07 20:39:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `nama_bidang`, `created_at`) VALUES
(1, 'Pemasaran', '2023-07-05 20:45:15'),
(2, 'Sekretariat', '2023-07-05 20:46:08'),
(4, 'Destinasi', '2023-07-05 20:46:21'),
(5, 'Pengembangan sdm ekraf', '2023-07-06 07:29:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asset`
--

CREATE TABLE `data_asset` (
  `id` int(11) NOT NULL,
  `nama_asset` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_asset`
--

INSERT INTO `data_asset` (`id`, `nama_asset`, `tempat`, `created_at`) VALUES
(1, 'Resort Takisung', 'Pantai Takisung, Pelaihari, Kab. Tanah Laut', '2023-06-10 17:05:11'),
(2, 'Resort Batakan', 'Pantai Batakan, Pelaihari, Kab. Tanah Laut', '2023-06-15 19:15:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `kode_barang`, `nama_barang`, `harga_barang`, `jenis_barang`, `created_at`) VALUES
(20, 10000000003, 'buku', 100000, 'Habis Pakai', '2023-06-11 14:14:37'),
(26, 10000000002, 'kertas A4', 10000, 'Habis Pakai', '2023-06-14 21:27:19'),
(29, 10000000001, 'Flashdisk', 50000, 'Tidak Habis', '2023-07-05 21:24:14'),
(30, 10000000004, 'Map', 5000, 'Habis Pakai', '2023-07-07 20:38:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `sequence` int(11) DEFAULT NULL,
  `parrent_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `icon`, `sequence`, `parrent_id`, `group_id`, `created_at`) VALUES
(1, 'Dashboard', 'dashboard', 'icon-home', 1, 0, 1, '2022-12-20 12:40:50'),
(2, 'Data Barang', 'data-barang', 'fas fa-archive', 2, 0, 1, '2022-12-20 12:40:50'),
(3, 'Barang Masuk', 'barang-masuk', 'fas fa-arrow-circle-down', 3, 0, 1, '2022-12-20 12:40:50'),
(4, 'Barang Keluar', 'barang-keluar', 'fas fa-arrow-alt-circle-up', 4, 0, 1, '2022-12-20 12:40:50'),
(5, 'Laporan', 'laporan', 'fas fa-clipboard', 10, 0, 1, '2022-12-20 12:40:50'),
(6, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 2, 5, 1, '2022-12-20 12:40:50'),
(7, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 3, 5, 1, '2022-02-05 15:07:06'),
(8, 'Laporan Data Barang', 'laporan-data-barang', '', 1, 5, 1, '2022-02-05 15:07:06'),
(9, 'Laporan Data User', 'laporan-data-user', '', 9, 5, 1, '2022-02-05 15:07:06'),
(10, 'Data User', 'data-user', 'fas fa-user', 9, 0, 1, '2022-12-20 12:40:50'),
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
(32, 'Laporan Data Asset', 'laporan-data-asset', '', 6, 5, 1, '2022-02-05 15:07:06'),
(33, 'Laporan Data Asset', 'laporan-data-asset', '', 0, 24, 3, '2022-02-05 15:07:06'),
(34, 'Laporan Barang Pending', 'laporan-barang-pending', '', 0, 24, 3, '2022-02-05 15:07:06'),
(37, 'Peminjaman Asset', 'peminjaman-asset', 'fas fa-box', 6, 0, 1, '2023-06-10 16:49:56'),
(38, 'Data Supplier', 'data-supplier', 'fas fa-archive', 7, 0, 1, '2022-12-20 12:40:50'),
(39, 'Data Bidang', 'data-bidang', 'fas fa-box', 7, 0, 1, '2023-06-10 16:49:56'),
(40, 'Laporan Supplier', 'laporan-data-supplier', '', 7, 5, 1, '2022-02-05 15:07:06'),
(41, 'Laporan Data Bidang', 'laporan-data-bidang', '', 8, 5, 1, '2022-02-05 15:07:06'),
(42, 'Laporan Barang Pending', 'laporan-barang-pending', '', 5, 5, 1, '2022-02-05 15:07:06'),
(43, 'Laporan Peminjaman Asset', 'laporan-data-peminjaman-asset', '', 7, 5, 1, '2022-02-05 15:07:06'),
(44, 'Laporan Penerimaan Asset', 'laporan-terima-data-peminjaman-asset', '', 7, 5, 1, '2022-02-05 15:07:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_asset`
--

CREATE TABLE `peminjaman_asset` (
  `id` int(11) NOT NULL,
  `id_asset` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `tgl_validation_pengembalian` datetime DEFAULT NULL,
  `validation_user_id` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman_asset`
--

INSERT INTO `peminjaman_asset` (`id`, `id_asset`, `nama_peminjam`, `tanggal_peminjaman`, `tanggal_pengembalian`, `tgl_validation_pengembalian`, `validation_user_id`, `created_at`) VALUES
(12, 1, 'Achmad', '2023-07-06', '2023-07-06', '2023-07-06 09:39:12', 1, '2023-07-06 15:34:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `no_telp`, `alamat`, `created_at`) VALUES
(1, 'wira', '081217762551', 'jl. perintis', '2023-07-03 10:22:24'),
(2, 'aji', '081217762551', 'jl. perintis', '2023-07-03 10:22:24');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD KEY `barang_keluar_id_barang_IDX` (`id_barang`) USING BTREE,
  ADD KEY `data_bidang_FK` (`id_bidang`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `peminjaman_asset`
--
ALTER TABLE `peminjaman_asset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_asset` (`id_asset`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_asset`
--
ALTER TABLE `data_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_asset`
--
ALTER TABLE `peminjaman_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `barang_keluar_FK` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_bidang_FK` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Ketidakleluasaan untuk tabel `peminjaman_asset`
--
ALTER TABLE `peminjaman_asset`
  ADD CONSTRAINT `foreign_key_asset` FOREIGN KEY (`id_asset`) REFERENCES `data_asset` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
