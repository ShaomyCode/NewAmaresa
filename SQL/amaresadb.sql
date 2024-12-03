-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 04:55 AM
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
-- Database: `amaresadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `TrackID` int(7) NOT NULL,
  `UserID` int(7) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `Logintime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`TrackID`, `UserID`, `Action`, `Logintime`) VALUES
(6, 36, 'User logged in ', '2024-10-30 11:25:48'),
(7, 35, 'User logged in ', '2024-10-30 11:25:54'),
(8, 38, 'User logged in ', '2024-10-30 11:26:10'),
(9, 36, 'User logged in ', '2024-10-30 11:29:10'),
(10, 35, 'User logged in ', '2024-10-30 11:29:27'),
(11, 36, 'User logged in ', '2024-10-30 11:29:54'),
(12, 36, 'User logged in ', '2024-10-30 11:30:04'),
(13, 36, 'User logged in ', '2024-10-30 11:42:14'),
(14, 36, 'User logged in ', '2024-10-30 11:44:56'),
(15, 36, 'User logged in ', '2024-10-30 11:49:08'),
(16, 36, 'User logged in ', '2024-10-30 15:08:57'),
(17, 36, 'User logged in ', '2024-10-30 15:59:20'),
(18, 35, 'User logged in ', '2024-10-30 16:01:26'),
(19, 36, 'User logged in ', '2024-10-30 17:24:20'),
(20, 36, 'User logged in ', '2024-10-30 19:36:40'),
(21, 39, 'New user signup: Admin admin', '2024-10-30 19:43:02'),
(22, 39, 'User logged in ', '2024-10-30 19:43:28'),
(23, 35, 'User logged in ', '2024-10-31 07:04:06'),
(24, 35, 'User logged in ', '2024-10-31 07:54:06'),
(25, 36, 'User logged in ', '2024-10-31 08:13:44'),
(26, 35, 'User logged in ', '2024-10-31 08:19:13'),
(27, 39, 'User logged in ', '2024-10-31 08:43:41'),
(28, 38, 'User logged in ', '2024-10-31 08:57:41'),
(29, 36, 'User logged in ', '2024-10-31 10:15:08'),
(30, 35, 'User logged in ', '2024-10-31 17:06:12'),
(31, 35, 'User logged in ', '2024-11-02 08:46:59'),
(32, 35, 'User logged in ', '2024-11-02 09:14:38'),
(33, 36, 'User logged in ', '2024-11-02 10:05:11'),
(34, 35, 'User logged in ', '2024-11-02 10:30:30'),
(35, 36, 'User logged in ', '2024-11-03 04:58:32'),
(36, 35, 'User logged in ', '2024-11-03 05:14:46'),
(37, 35, 'User logged in ', '2024-11-03 05:34:28'),
(38, 36, 'User logged in ', '2024-11-03 06:26:08'),
(39, 40, 'New user signup: asd ads', '2024-11-03 07:01:41'),
(40, 41, 'New user signup: Samuel Jamandron', '2024-11-03 07:08:14'),
(41, 42, 'New user signup: Samuel Jamandron', '2024-11-03 07:12:03'),
(42, 42, 'User logged in ', '2024-11-03 07:12:32'),
(43, 43, 'New user signup', '2024-11-03 08:26:39'),
(44, 43, 'User logged in ', '2024-11-03 08:27:38'),
(45, 36, 'User logged in ', '2024-11-03 14:51:31'),
(46, 35, 'User logged in ', '2024-11-04 12:31:26'),
(47, 35, 'User logged in ', '2024-11-04 12:31:38'),
(48, 35, 'User logged in ', '2024-11-04 12:34:16'),
(49, 36, 'User logged in ', '2024-11-04 12:35:39'),
(50, 35, 'User logged in ', '2024-11-04 12:36:38'),
(51, 36, 'User logged in ', '2024-11-06 04:15:04'),
(52, 35, 'User logged in ', '2024-11-06 08:00:12'),
(53, 35, 'User logged in ', '2024-11-06 08:00:37'),
(54, 36, 'User logged in ', '2024-11-06 08:00:48'),
(55, 44, 'New user signup  ', '2024-11-06 10:12:30'),
(56, 44, 'User logged in ', '2024-11-06 10:12:39'),
(57, 44, 'User logged in ', '2024-11-06 11:21:10'),
(58, 44, 'User logged in ', '2024-11-06 13:39:45'),
(59, 44, 'User logged in ', '2024-11-06 14:48:37'),
(60, 44, 'User logged in ', '2024-11-06 14:51:12'),
(61, 36, 'User logged in ', '2024-11-06 14:52:08'),
(62, 36, 'User logged in ', '2024-11-06 14:52:43'),
(63, 36, 'User logged in ', '2024-11-06 14:53:15'),
(64, 36, 'User logged in ', '2024-11-06 14:55:21'),
(65, 36, 'User logged in ', '2024-11-06 14:56:38'),
(66, 36, 'User logged in ', '2024-11-06 14:57:12'),
(67, 36, 'User logged in ', '2024-11-06 14:57:41'),
(68, 36, 'User logged in ', '2024-11-06 15:01:38'),
(69, 36, 'User logged in ', '2024-11-06 15:06:50'),
(70, 36, 'User logged in ', '2024-11-06 15:07:03'),
(71, 36, 'User logged in ', '2024-11-06 15:07:54'),
(72, 36, 'User logged in ', '2024-11-06 15:08:36'),
(73, 36, 'User logged in ', '2024-11-06 15:10:44'),
(74, 36, 'User logged in ', '2024-11-06 15:12:25'),
(75, 36, 'User logged in ', '2024-11-06 15:18:08'),
(76, 36, 'User logged in ', '2024-11-06 15:18:37'),
(77, 36, 'User logged in ', '2024-11-06 15:19:11'),
(78, 36, 'User logged in ', '2024-11-06 15:20:18'),
(79, 36, 'User logged in ', '2024-11-06 15:21:32'),
(80, 36, 'User logged in ', '2024-11-06 15:23:37'),
(81, 36, 'User logged in ', '2024-11-06 15:30:49'),
(82, 36, 'User logged in ', '2024-11-06 15:41:17'),
(83, 36, 'User logged in ', '2024-11-06 15:42:08'),
(84, 36, 'User logged in ', '2024-11-06 15:42:24'),
(85, 36, 'User logged in ', '2024-11-06 15:42:52'),
(86, 44, 'User logged in ', '2024-11-06 15:43:48'),
(87, 36, 'User logged in ', '2024-11-06 15:45:06'),
(88, 36, 'User logged in ', '2024-11-06 15:47:07'),
(89, 36, 'User logged in ', '2024-11-06 16:14:51'),
(90, 36, 'User logged in ', '2024-11-06 16:19:10'),
(91, 39, 'User logged in ', '2024-11-06 16:25:34'),
(92, 39, 'User logged in ', '2024-11-06 16:26:24'),
(93, 39, 'User logged in ', '2024-11-06 16:26:47'),
(94, 39, 'User logged in ', '2024-11-06 16:27:07'),
(95, 36, 'User logged in ', '2024-11-06 16:30:28'),
(96, 66, 'Admin/Staff logged in ', '2024-11-06 16:31:35'),
(97, 67, 'Admin/Staff logged in ', '2024-11-06 16:33:47'),
(98, 36, 'User logged in ', '2024-11-06 16:33:57'),
(99, 66, 'Admin/Staff logged in ', '2024-11-06 16:34:08'),
(100, 44, 'User logged ugh ', '2024-11-06 16:35:05'),
(101, 66, 'Admin/Staff logged in ', '2024-11-06 16:35:27'),
(102, 36, 'User logged in ', '2024-11-08 10:13:07'),
(103, 36, 'User logged in ', '2024-11-09 07:44:22'),
(104, 36, 'User logged in ', '2024-11-09 08:10:18'),
(105, 36, 'User logged in ', '2024-11-09 08:16:48'),
(106, 36, 'User logged in ', '2024-11-09 08:21:08'),
(107, 68, 'Admin/Staff logged in ', '2024-11-09 08:30:08'),
(108, 36, 'User logged in ', '2024-11-09 08:35:58'),
(109, 36, 'User logged in ', '2024-11-09 08:52:07'),
(110, 36, 'User logged in ', '2024-11-09 08:59:50'),
(111, 36, 'User logged in ', '2024-11-09 09:28:46'),
(112, 70, 'Admin/Staff logged in ', '2024-11-09 09:50:44'),
(113, 70, 'Admin/Staff logged in ', '2024-11-09 09:54:34'),
(114, 45, 'New user signup  ', '2024-11-09 09:55:44'),
(115, 45, 'User logged in ', '2024-11-09 09:56:01'),
(116, 70, 'Admin/Staff logged in ', '2024-11-09 09:56:14'),
(117, 45, 'User logged in ', '2024-11-09 09:57:25'),
(118, 45, 'User logged in ', '2024-11-09 09:58:34'),
(119, 45, 'User logged in ', '2024-11-09 10:02:48'),
(120, 45, 'User logged in ', '2024-11-09 10:03:27'),
(121, 70, 'Admin/Staff logged in ', '2024-11-09 10:05:53'),
(122, 71, 'Admin/Staff logged in ', '2024-11-09 10:08:21'),
(123, 71, 'Admin/Staff logged in ', '2024-11-09 10:08:53'),
(124, 71, 'Admin/Staff logged in ', '2024-11-09 10:09:29'),
(125, 72, 'Admin/Staff logged in ', '2024-11-09 10:09:29'),
(126, 71, 'Admin/Staff logged in ', '2024-11-09 10:09:47'),
(127, 72, 'Admin/Staff logged in ', '2024-11-09 10:09:47'),
(128, 45, 'User logged in ', '2024-11-09 10:10:46'),
(129, 70, 'Admin/Staff logged in ', '2024-11-09 11:18:47'),
(130, 45, 'User logged in ', '2024-11-09 17:02:34'),
(131, 45, 'User logged in ', '2024-11-09 17:13:56'),
(132, 70, 'Admin/Staff logged in ', '2024-11-09 17:18:43'),
(133, 70, 'Admin/Staff logged in ', '2024-11-09 17:29:31'),
(134, 45, 'User logged in ', '2024-11-09 17:37:27'),
(135, 45, 'User logged in ', '2024-11-09 18:20:59'),
(136, 70, 'Admin/Staff logged in ', '2024-11-11 04:13:51'),
(137, 45, 'User logged in ', '2024-11-11 04:17:16'),
(138, 45, 'User logged in ', '2024-11-11 11:02:37'),
(139, 45, 'User logged in ', '2024-11-11 11:12:36'),
(140, 70, 'Admin/Staff logged in ', '2024-11-11 11:18:19'),
(141, 45, 'User logged in ', '2024-11-11 11:23:31'),
(142, 45, 'User logged in ', '2024-11-11 12:04:00'),
(143, 45, 'User logged in ', '2024-11-12 02:54:09'),
(144, 45, 'User logged in ', '2024-11-12 03:00:51'),
(145, 70, 'Admin/Staff logged in ', '2024-11-12 03:09:53'),
(146, 45, 'User logged in ', '2024-11-12 03:10:23'),
(147, 45, 'User logged in ', '2024-11-12 11:15:38'),
(148, 45, 'User logged in ', '2024-11-12 14:56:48'),
(149, 46, 'New user signup', '2024-11-12 15:44:45'),
(150, 45, 'User logged in ', '2024-11-15 06:21:34'),
(151, 45, 'User logged in ', '2024-11-15 06:24:24'),
(152, 45, 'User logged in ', '2024-11-15 06:25:40'),
(153, 45, 'User logged in ', '2024-11-15 07:01:16'),
(154, 45, 'User logged in ', '2024-11-15 07:04:57'),
(155, 45, 'User logged in ', '2024-11-15 07:16:27'),
(156, 45, 'User logged in ', '2024-11-15 08:35:18'),
(157, 70, 'Admin/Staff logged in ', '2024-11-15 08:37:43'),
(158, 45, 'User logged in ', '2024-11-15 08:39:12'),
(159, 45, 'User logged in ', '2024-11-15 09:03:23'),
(160, 45, 'User logged in ', '2024-11-15 09:20:30'),
(161, 45, 'User logged in ', '2024-11-15 09:47:22'),
(162, 45, 'User logged in ', '2024-11-15 12:20:33'),
(163, 45, 'User logged in ', '2024-11-15 12:22:33'),
(164, 45, 'User logged in ', '2024-11-15 12:28:03'),
(165, 70, 'Admin/Staff logged in ', '2024-11-15 13:14:08'),
(166, 70, 'Admin/Staff logged in ', '2024-11-15 13:14:17'),
(167, 70, 'Admin/Staff logged in ', '2024-11-15 13:14:30'),
(168, 70, 'Admin/Staff logged in ', '2024-11-15 13:14:36'),
(169, 70, 'Admin/Staff logged in ', '2024-11-15 13:14:48'),
(170, 70, 'Admin/Staff logged in ', '2024-11-15 13:14:55'),
(171, 45, 'User logged in ', '2024-11-15 13:16:26'),
(172, 45, 'User logged in ', '2024-11-15 13:25:45'),
(173, 45, 'User logged in ', '2024-11-15 13:43:36'),
(174, 70, 'Admin/Staff logged in ', '2024-11-15 13:56:48'),
(175, 45, 'User logged in ', '2024-11-15 14:01:37'),
(176, 70, 'Admin/Staff logged in ', '2024-11-15 14:03:14'),
(177, 45, 'User logged in ', '2024-11-15 14:15:36'),
(178, 70, 'Admin/Staff logged in ', '2024-11-15 14:16:22'),
(179, 74, 'Admin/Staff logged in ', '2024-11-15 14:55:57'),
(180, 78, 'Admin/Staff logged in ', '2024-11-15 16:03:27'),
(181, 79, 'Admin/Staff logged in ', '2024-11-15 16:06:17'),
(182, 79, 'Admin/Staff logged in ', '2024-11-15 16:06:41'),
(183, 79, 'Admin/Staff logged in ', '2024-11-15 16:07:10'),
(184, 79, 'Admin/Staff logged in ', '2024-11-15 16:07:56'),
(185, 79, 'Admin/Staff logged in ', '2024-11-15 16:08:22'),
(186, 79, 'Admin/Staff logged in ', '2024-11-15 16:12:36'),
(187, 50, 'New user signup', '2024-11-15 16:13:03'),
(188, 79, 'Admin/Staff logged in ', '2024-11-15 16:19:07'),
(189, 51, 'New user signup', '2024-11-15 17:23:22'),
(190, 51, 'User logged in ', '2024-11-15 17:23:35'),
(191, 79, 'Admin/Staff logged in ', '2024-11-15 17:38:18'),
(192, 52, 'New user signup', '2024-11-17 09:54:00'),
(193, 52, 'User logged in ', '2024-11-17 09:54:08'),
(194, 53, 'New user signup', '2024-11-20 06:56:32'),
(195, 53, 'User logged in ', '2024-11-20 06:56:45'),
(196, 53, 'User logged in ', '2024-11-20 07:03:06'),
(197, 79, 'Admin/Staff logged in ', '2024-11-22 08:50:21'),
(198, 79, 'Admin/Staff logged in ', '2024-11-23 02:58:35'),
(199, 54, 'New user signup', '2024-11-23 03:00:21'),
(200, 54, 'User logged in ', '2024-11-23 03:02:52'),
(201, 79, 'Admin/Staff logged in ', '2024-11-25 06:52:00'),
(202, 79, 'Admin/Staff logged in ', '2024-11-25 07:11:57'),
(203, 87, 'Admin/Staff logged in ', '2024-11-25 07:24:36'),
(204, 88, 'Admin/Staff logged in ', '2024-11-25 07:24:50'),
(205, 88, 'Admin/Staff logged in ', '2024-11-25 07:25:18'),
(206, 88, 'Admin/Staff logged in ', '2024-11-25 08:31:13'),
(207, 60, 'New user signup', '2024-11-27 05:55:19'),
(208, 60, 'User logged in ', '2024-11-27 05:55:28'),
(209, 100, 'Admin/Staff logged in ', '2024-11-27 06:43:14'),
(210, 98, 'Admin/Staff logged in ', '2024-11-27 06:43:36'),
(211, 100, 'Admin/Staff logged in ', '2024-11-27 06:43:54'),
(212, 98, 'Admin/Staff logged in ', '2024-11-27 06:44:37'),
(213, 60, 'User logged in ', '2024-11-27 06:48:45'),
(214, 101, 'Admin/Staff logged in ', '2024-11-27 06:49:00'),
(215, 98, 'Admin/Staff logged in ', '2024-11-27 06:50:00'),
(216, 101, 'Admin/Staff logged in ', '2024-11-27 06:50:46'),
(217, 101, 'Admin/Staff logged in ', '2024-11-27 06:52:33'),
(218, 100, 'Admin/Staff logged in ', '2024-11-27 07:07:43'),
(219, 60, 'User logged in ', '2024-11-27 07:16:12'),
(220, 98, 'Admin/Staff logged in ', '2024-11-27 07:55:52'),
(221, 98, 'Admin/Staff logged in ', '2024-11-27 08:05:56'),
(222, 98, 'Admin/Staff logged in ', '2024-11-27 09:15:29'),
(223, 98, 'Admin/Staff logged in ', '2024-11-27 09:21:09'),
(224, 98, 'Admin/Staff logged in ', '2024-11-27 09:22:02'),
(225, 98, 'Admin/Staff logged in ', '2024-11-27 09:28:47'),
(226, 60, 'User logged in ', '2024-11-27 09:47:26'),
(227, 60, 'User logged in ', '2024-11-27 10:29:02'),
(228, 60, 'User logged in ', '2024-11-27 13:27:09'),
(229, 98, 'Admin/Staff logged in ', '2024-11-27 15:10:36'),
(230, 60, 'User logged in ', '2024-11-27 15:12:38'),
(231, 100, 'Admin/Staff logged in ', '2024-11-27 18:25:47'),
(232, 98, 'Admin/Staff logged in ', '2024-11-27 18:26:10'),
(233, 101, 'Admin/Staff logged in ', '2024-11-27 18:26:27'),
(234, 98, 'Admin/Staff logged in ', '2024-11-27 18:29:46'),
(235, 60, 'User logged in ', '2024-11-27 23:22:26'),
(236, 98, 'Admin/Staff logged in ', '2024-11-27 23:27:58'),
(237, 60, 'User logged in ', '2024-11-27 23:29:06'),
(238, 60, 'User logged in ', '2024-11-27 23:45:37'),
(239, 60, 'User logged in ', '2024-11-28 06:17:10'),
(240, 60, 'User logged in ', '2024-11-28 06:56:23'),
(241, 60, 'User logged in ', '2024-11-28 08:03:02'),
(242, 98, 'Admin/Staff logged in ', '2024-11-28 08:19:56'),
(243, 60, 'User logged in ', '2024-11-28 08:21:30'),
(244, 98, 'Admin/Staff logged in ', '2024-11-28 08:54:21'),
(245, 60, 'User logged in ', '2024-11-28 10:42:18'),
(246, 60, 'User logged in ', '2024-11-28 10:42:39'),
(247, 98, 'Admin/Staff logged in ', '2024-11-28 10:45:49'),
(248, 60, 'User logged in ', '2024-11-28 13:34:46'),
(249, 98, 'Admin/Staff logged in ', '2024-11-28 13:35:49'),
(250, 60, 'User logged in ', '2024-11-28 14:16:08'),
(251, 98, 'Admin/Staff logged in ', '2024-11-28 14:16:42'),
(252, 60, 'User logged in ', '2024-11-28 14:27:32'),
(253, 60, 'User logged in ', '2024-11-29 05:52:16'),
(254, 98, 'Admin/Staff logged in ', '2024-11-29 05:56:04'),
(255, 98, 'Admin/Staff logged in ', '2024-11-29 06:33:39'),
(256, 98, 'Admin/Staff logged in ', '2024-11-29 08:07:24'),
(257, 60, 'User logged in ', '2024-11-29 08:44:08'),
(258, 60, 'User logged in ', '2024-11-29 08:47:55'),
(259, 98, 'Admin/Staff logged in ', '2024-11-29 08:56:55'),
(260, 60, 'User logged in ', '2024-11-29 08:58:12'),
(261, 98, 'Admin/Staff logged in ', '2024-11-29 09:01:26'),
(262, 101, 'Admin/Staff logged in ', '2024-11-29 09:05:30'),
(263, 101, 'Admin/Staff logged in ', '2024-11-29 09:06:02'),
(264, 60, 'User logged in ', '2024-11-29 09:22:16'),
(265, 98, 'Admin/Staff logged in ', '2024-11-29 10:07:31'),
(266, 61, 'New user signup', '2024-11-29 10:08:23'),
(267, 61, 'User logged in ', '2024-11-29 10:08:36'),
(268, 60, 'User logged in ', '2024-11-29 10:20:10'),
(269, 98, 'Admin/Staff logged in ', '2024-11-29 11:30:07'),
(270, 60, 'User logged in ', '2024-11-29 11:31:26'),
(271, 61, 'User logged in ', '2024-11-29 11:45:26'),
(272, 98, 'Admin/Staff logged in ', '2024-11-29 11:50:32'),
(273, 60, 'User logged in ', '2024-11-29 11:50:50'),
(274, 98, 'Admin/Staff logged in ', '2024-11-29 11:51:22'),
(275, 60, 'User logged in ', '2024-11-29 11:52:15'),
(276, 60, 'User logged in ', '2024-11-29 14:17:15'),
(277, 98, 'Admin/Staff logged in ', '2024-11-29 14:18:06'),
(278, 60, 'User logged in ', '2024-11-29 15:26:07'),
(279, 98, 'Admin/Staff logged in ', '2024-11-29 15:26:20'),
(280, 60, 'User logged in ', '2024-11-29 15:27:02'),
(281, 98, 'Admin/Staff logged in ', '2024-11-29 15:27:15'),
(282, 101, 'Admin/Staff logged in ', '2024-11-29 16:49:49'),
(283, 98, 'Admin/Staff logged in ', '2024-11-29 16:50:17'),
(284, 98, 'Admin/Staff logged in ', '2024-11-29 18:16:46'),
(285, 98, 'Admin/Staff logged in ', '2024-11-29 18:59:31'),
(286, 60, 'User logged in ', '2024-11-30 03:14:47'),
(287, 98, 'Admin/Staff logged in ', '2024-11-30 03:16:36'),
(288, 62, 'New user signup', '2024-11-30 03:18:48'),
(289, 62, 'User logged in ', '2024-11-30 03:19:04'),
(290, 61, 'User logged in ', '2024-11-30 03:27:44'),
(291, 60, 'User logged in ', '2024-11-30 09:04:15'),
(292, 60, 'User logged in ', '2024-12-01 03:49:39'),
(293, 98, 'Admin/Staff logged in ', '2024-12-01 05:52:46'),
(294, 60, 'User logged in ', '2024-12-01 06:10:28'),
(295, 101, 'Admin/Staff logged in ', '2024-12-01 06:25:17'),
(296, 101, 'Admin/Staff logged in ', '2024-12-01 06:35:13'),
(297, 98, 'Admin/Staff logged in ', '2024-12-01 06:35:56'),
(298, 101, 'Admin/Staff logged in ', '2024-12-01 06:36:21'),
(299, 101, 'Admin/Staff logged in ', '2024-12-01 06:36:51'),
(300, 98, 'Admin/Staff logged in ', '2024-12-01 06:41:06'),
(301, 101, 'Admin/Staff logged in ', '2024-12-01 06:42:17'),
(302, 98, 'Admin/Staff logged in ', '2024-12-01 06:44:41'),
(303, 101, 'Admin/Staff logged in ', '2024-12-01 06:52:28'),
(304, 101, 'Admin/Staff logged in ', '2024-12-01 07:38:58'),
(305, 60, 'User logged in ', '2024-12-01 07:39:12'),
(306, 100, 'Admin/Staff logged in ', '2024-12-01 08:12:45'),
(307, 100, 'Admin/Staff logged in ', '2024-12-01 08:13:30'),
(308, 100, 'Admin/Staff logged in ', '2024-12-01 08:17:40'),
(309, 60, 'User logged in ', '2024-12-01 08:29:31'),
(310, 98, 'Admin/Staff logged in ', '2024-12-01 08:29:55'),
(311, 61, 'User logged in ', '2024-12-01 08:30:24'),
(312, 98, 'Admin/Staff logged in ', '2024-12-01 08:37:57'),
(313, 61, 'User logged in ', '2024-12-01 08:38:36'),
(314, 60, 'User logged in ', '2024-12-02 03:17:25'),
(315, 61, 'User logged in ', '2024-12-02 03:32:34'),
(316, 60, 'User logged in ', '2024-12-02 03:39:39'),
(317, 60, 'User logged in ', '2024-12-02 12:25:06'),
(318, 60, 'User logged in ', '2024-12-02 12:30:41'),
(319, 98, 'Admin/Staff logged in ', '2024-12-02 12:33:13'),
(320, 61, 'User logged in ', '2024-12-02 12:33:57'),
(321, 101, 'Admin/Staff logged in ', '2024-12-02 12:38:57'),
(322, 100, 'Admin/Staff logged in ', '2024-12-02 12:40:32'),
(323, 60, 'User logged in ', '2024-12-02 12:55:04'),
(324, 60, 'User logged in ', '2024-12-02 13:20:44'),
(325, 98, 'Admin/Staff logged in ', '2024-12-02 13:54:40'),
(326, 60, 'User logged in ', '2024-12-02 13:56:13'),
(327, 98, 'Admin/Staff logged in ', '2024-12-02 13:57:14'),
(328, 60, 'User logged in ', '2024-12-02 14:09:34'),
(329, 98, 'Admin/Staff logged in ', '2024-12-02 14:10:14'),
(330, 60, 'User logged in ', '2024-12-02 14:11:13'),
(331, 60, 'User logged in ', '2024-12-02 14:12:09'),
(332, 60, 'User logged in ', '2024-12-02 14:12:49'),
(333, 60, 'User logged in ', '2024-12-02 14:18:32'),
(334, 61, 'User logged in ', '2024-12-02 14:24:00'),
(335, 60, 'User logged in ', '2024-12-02 15:47:35'),
(336, 98, 'Admin/Staff logged in ', '2024-12-02 15:52:33'),
(337, 60, 'User logged in ', '2024-12-02 18:01:04'),
(338, 60, 'User logged in ', '2024-12-03 01:54:44'),
(339, 98, 'Admin/Staff logged in ', '2024-12-03 02:01:23'),
(340, 60, 'User logged in ', '2024-12-03 02:04:11'),
(341, 98, 'Admin/Staff logged in ', '2024-12-03 02:20:30'),
(342, 98, 'Admin/Staff logged in ', '2024-12-03 02:21:09'),
(343, 60, 'User logged in ', '2024-12-03 02:22:23'),
(344, 98, 'Admin/Staff logged in ', '2024-12-03 02:54:40'),
(345, 61, 'User logged in ', '2024-12-03 03:17:42'),
(346, 98, 'Admin/Staff logged in ', '2024-12-03 03:18:03'),
(347, 98, 'Admin/Staff logged in ', '2024-12-03 03:21:57'),
(348, 60, 'User logged in ', '2024-12-03 03:28:14'),
(349, 60, 'User logged in ', '2024-12-03 03:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ArchiveID` int(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Property` varchar(255) NOT NULL,
  `Script` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Bedrooms` int(7) NOT NULL,
  `Bathrooms` int(7) NOT NULL,
  `Lot` varchar(255) NOT NULL,
  `Block` varchar(255) NOT NULL,
  `Phase` varchar(255) NOT NULL,
  `Area_sqft` varchar(255) NOT NULL,
  `Virtual` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `IExterior` longblob NOT NULL,
  `IBedroom` longblob NOT NULL,
  `IBathroom` longblob NOT NULL,
  `IAttic` longblob NOT NULL,
  `IDining` longblob NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ArchiveID`, `Name`, `Description`, `Lastname`, `Firstname`, `Email`, `Phone`, `Address`, `Password`, `Date`, `Property`, `Script`, `Price`, `Bedrooms`, `Bathrooms`, `Lot`, `Block`, `Phase`, `Area_sqft`, `Virtual`, `Status`, `IExterior`, `IBedroom`, `IBathroom`, `IAttic`, `IDining`, `Role`) VALUES
(193, 'Jamandron', 'Staff', 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '09563326964', 'Bulacan', '$2y$10$wNpO06R8h8RTRedqHsriUeRQmmres7enaTJb4NEjSgUFGMw1aO.6m', '2024-11-25 08:34:46', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(194, 'a', 'User', 'a', 'a', 'a@gmail.com', '23132132132', 'Bulacan', '$2y$10$UKvEQ3HRMITcgoMGbwJ5aOhmDgnjclevr4wVDioPrISnsfXQdbHnS', '2024-11-25 08:37:23', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(199, 'ilagan', 'Admin', 'ilagan', 'caleb', 'caleb@gmail.com', '09563326964', 'Bulacan', '$2y$10$96KrCEUEFQHouyQwtCarr.w1z0246QQe2e4In0QkjP5Fq.SriEpny', '2024-11-25 08:45:13', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(200, 'Britania', 'User', 'Britania', 'Admin', 'user@gmail.com', '41141241421', 'BULACAN', '$2y$10$8HbJ7kSfBzlaN2gM598KPeOH0iZFidf.In.nOecdOx0mmh49BMBwK', '2024-11-25 08:46:44', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(204, 'trya', 'Property', '', '', '', '', '', '', '2024-11-28 08:20:09', 'trya', 'asdadsassdas', '34123412', 2, 2, '5', '4', '6', '98-100sqm', '', 'Sale', 0x363734373336386662633835662d47636173682e504e47, 0x363734373336386662636132312d47636173682e504e47, 0x363734373336386662636238332d47636173682e504e47, 0x363734373336386662636362612d47636173682e504e47, 0x363734373336386662636531632d47636173682e504e47, 'Property'),
(205, 'gagagz', 'Property', '', '', '', '', '', '', '2024-11-28 08:20:13', 'gagagz', '', '2311', 2, 3, '5', '3', '4', '98-100sqm', '', 'Sale', 0x363734366536363134316235632d, 0x363734366536363134316332382d, 0x363734366536363134316334352d, 0x363734366536363134316335632d, 0x363734366536363134316337322d, 'Property'),
(206, 'gahaha', 'Property', '', '', '', '', '', '', '2024-11-28 08:20:17', 'gahaha', 'haha', '2431', 2, 2, '2', '3', '2', '131sqm', '', 'Sale', 0x363734366534643231383363662d, 0x363734366534643231383436302d, 0x363734366534643231383437372d, 0x363734366534643231383438622d, 0x363734366534643231383439642d, 'Property'),
(207, 'haha', 'Property', '', '', '', '', '', '', '2024-11-28 08:20:21', 'haha', 'aga', '24', 3, 3, '2', '24', '2', '98-100sqm', '', 'Sale', 0x363734366534396535316332622d, 0x363734366534396535323137632d, 0x363734366534396535323139392d, 0x363734366534396535323161622d, 0x363734366534396535323162622d, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientID` int(7) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ocular` date NOT NULL,
  `Stages` varchar(255) NOT NULL,
  `Payment` float NOT NULL,
  `GovermentID1` longblob DEFAULT NULL,
  `GovermentID2` longblob DEFAULT NULL,
  `Billing` longblob DEFAULT NULL,
  `Income` longblob DEFAULT NULL,
  `Reservation` longblob NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PropertyID` int(8) NOT NULL,
  `UserID` int(8) NOT NULL,
  `ManagementID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ClientID`, `Firstname`, `lastname`, `phone`, `email`, `address`, `ocular`, `Stages`, `Payment`, `GovermentID1`, `GovermentID2`, `Billing`, `Income`, `Reservation`, `Date`, `PropertyID`, `UserID`, `ManagementID`) VALUES
(23, 'John Samuel', 'Jamandron', '14124141421', 'johnsamueljamandron@gmail.com', 'Bulacan', '2024-11-30', 'Stage 2', 20000, 0x363734383762336664313737652d, 0x363734383762336664313830342d, 0x363734383762336664313831392d, 0x363734383762336664313832632d, 0x363734383762336664313833652d, '2024-12-01 06:36:05', 30, 60, 101),
(26, 'John Samuel', 'Jamandron', '14124141421', 'johnsamueljamandron@gmail.com', 'Bulacan', '2024-11-30', 'Stage 2', 2000, 0x363734396464373861633730392d, 0x363734396464373861633737322d, 0x363734396464373861633738352d, 0x363734396464373861633739362d, 0x363734396464373861633761362d, '2024-12-01 06:08:14', 11, 60, 101),
(27, 'John Samuel', 'Jamandron', '14124141421', 'johnsamueljamandron@gmail.com', 'Bulacan', '0000-00-00', 'Stage 2', 0, 0x363734396464616334396339342d, 0x363734396464616334396362342d, 0x363734396464616334396363362d, 0x363734396464616334396364372d, 0x363734396464616334396365362d, '2024-11-29 19:14:26', 11, 60, 102),
(28, 'John Samuel', 'Jamandron', '14124141421', 'johnsamueljamandron@gmail.com', 'Bulacan', '2024-11-30', 'Stage 2', 25252, 0x363734396465336339623866662d38633061623134326235376363313434373663396632636639383764653465302e6a7067, 0x363734396465336339626163662d616d6172657361202e706e67, 0x363734396465336339626334322d426c6f672e6a7067, 0x363734396465336339626536342d426f6f6b2e6a7067, 0x363734396465336339633032362d496d61676520312e6a7067, '2024-12-01 06:36:12', 11, 60, 101),
(31, 'John Samuel', 'Jamandron', '14124141421', 'johnsamueljamandron@gmail.com', 'Bulacan', '2024-11-30', 'Stage 2', 20000, 0x363734613833386336616633372d496d61676520312e6a7067, 0x363734613833386336623334302d496d61676520322e6a7067, 0x363734613833386336623535302d496d61676520312e6a7067, 0x363734613833386336623732622d496d61676520322e6a7067, 0x363734613833386336623936362d, '2024-11-30 03:17:26', 11, 60, 103),
(34, 'david', 'Britania', '14141414152', 'britania@gmail.com', 'MINUYAN', '2024-12-19', 'Stage 2', 0, 0x363734633232313163633733342d, 0x363734633232313163633739322d, 0x363734633232313163633761342d, 0x363734633232313163633762342d, 0x363734633232313163633763322d, '2024-12-01 08:47:38', 11, 61, 0);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `ManagementID` int(8) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`ManagementID`, `Lastname`, `Firstname`, `Email`, `Phone`, `Address`, `Password`, `Role`, `Date`) VALUES
(98, 'Molina', 'Jesus', 'admin@gmail.com', '21313213131', 'BULACAN', '$2y$10$ghEWZsh37PXYTypFBxqbce2N.IDXNee75n/iC/4aLnOTFwbrTsip6', 'Admin', '2024-11-25 09:12:46'),
(99, 'joshua', 'David', 'joshua@gmail.com', '09363308179', 'Minuyan', '$2y$10$ic1WrX6qlQU7UMB16j.xU.af05GwyGbVUEmc71oY84FeSx7M/W1JG', 'Admin', '2024-11-25 09:12:56'),
(100, 'Jamandron', 'John Samuel', 'staff@gmail.com', '12321321312', 'BULACAN', '$2y$10$I3rWDlG9YPJcj.C/w9QEYOpQ2/MrJiHyicwlcC7iKSzVN7Gbx6skC', 'Staff', '2024-11-27 06:43:03'),
(101, 'Abacial', 'Ryan ', 'agent@gmail.com', '35151515151', 'BULACAN', '$2y$10$E.JZ75SEfTFyMpJuE1egGuzHyxeiEYTqv.Li0NENT7a91.gOZVJ8y', 'Agent', '2024-11-27 06:46:48'),
(102, 'jamandron', 'agent kaz', 'agentakira@gmail.com', '46363636636', 'LA UNION', '$2y$10$XPVN5N7pyerYf6kVA6H9P.OP5p8955jz47puEpe0q/FeyG3iz20JK', 'Agent', '2024-11-28 13:40:03'),
(103, 'Britania', 'david', 'gag@gmail.com', '14114143143', 'STA. Maria', '$2y$10$b3mbeBbzEspeebcOi1wmfeQhYscbtGlf6VR5phHWmBZgLD3gcSuGi', 'Agent', '2024-11-29 05:57:33'),
(104, 'Jamandron', 'John Samuel', 'johnsamueljamandron@gmail.com', '09563326964', 'San Jose Del Monte Bulacan', '$2y$10$QNqvXv1c9N6jQXrjOa5wLuhWsDMW5Oc5.2EbWAi80jKUtUVUk7ePC', 'Agent', '2024-12-02 13:55:57'),
(105, 'Viejo', 'Merric', 'merric.viejo@gmail.com', '14214214214', 'CALOKS', '$2y$10$jYcG/zByPxP8vhQ4VpWad.LORZKr/o/VEGCBJ.5gyySzGvrXllNBC', 'Agent', '2024-12-02 14:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(8) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Rate` int(7) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `Sender`, `Rate`, `Message`, `Date`) VALUES
(20, 'hahaha', 4, 'haha', '2024-11-15 04:52:59'),
(25, 'haha', 3, 'haha', '2024-11-15 13:31:30'),
(26, 'John Samuel Jamadron', 1, 'Ayoko dito', '2024-12-02 12:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `PendingID` int(8) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ocular` date NOT NULL,
  `Stage` varchar(255) NOT NULL,
  `Payment` bigint(8) NOT NULL,
  `GovermentID1` longblob NOT NULL,
  `GovermentID2` longblob NOT NULL,
  `Billing` longblob NOT NULL,
  `Income` longblob NOT NULL,
  `Reservation` longblob NOT NULL,
  `UserID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`PendingID`, `Lastname`, `Firstname`, `Email`, `Phone`, `Message`, `Address`, `Date`, `ocular`, `Stage`, `Payment`, `GovermentID1`, `GovermentID2`, `Billing`, `Income`, `Reservation`, `UserID`, `PropertyID`) VALUES
(233, 'Jamandron', 'John Samuel', 'johnsamueljamandron@gmail.com', '14124141421', '', 'Bulacan', '2024-12-02 03:23:36', '0000-00-00', 'Stage 1', 0, '', '', '', '', '', 60, 11),
(234, 'Jamandron', 'John Samuel', 'johnsamueljamandron@gmail.com', '14124141421', '', 'Bulacan', '2024-12-02 03:28:54', '0000-00-00', 'Stage 1', 0, 0x363734643239373665616337392d, 0x363734643239373665616364632d, 0x363734643239373665616365652d, 0x363734643239373665616366662d, 0x363734643239373665616430662d, 60, 25),
(237, 'Britania', 'david', 'britania@gmail.com', '14141414152', '', 'MINUYAN', '2024-12-02 14:29:06', '0000-00-00', 'Stage 1', 0, 0x363734646334333261663737612d, 0x363734646334333261663830332d, 0x363734646334333261663831392d, 0x363734646334333261663832632d, 0x363734646334333261663833652d, 61, 11),
(238, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '14124141421', '', 'Bulacan', '2024-12-02 16:52:58', '0000-00-00', 'Stage 1', 0, 0x363734646535656131653438302d, 0x363734646535656131653530652d, 0x363734646535656131653532332d, 0x363734646535656131653533362d, 0x363734646535656131653534392d, 60, 11),
(239, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '14124141421', 'gagaga', 'Bulacan', '2024-12-02 17:52:51', '2024-12-27', 'Stage 1', 20000, 0x363734646633663365313835392d, 0x363734646633663365313862642d, 0x363734646633663365313863662d, 0x363734646633663365313864662d, 0x363734646633663365313865662d, 60, 11),
(240, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '14124141421', 'Yowyow', 'Bulacan', '2024-12-02 18:03:46', '2024-12-21', 'Stage 1', 124214, 0x363734646636383231346535312d3436373736303538395f313931383834303737383539373833315f363533353131373330373637333533383936365f6e2e6a7067, 0x363734646636383231353034302d686168612e6a7067, 0x363734646636383231353161332d496d61676520322e6a7067, 0x363734646636383231353330382d496d61676520312e6a7067, 0x363734646636383231353435642d70656b746f722e6a7067, 60, 11),
(241, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '14124141421', 'haha', 'Bulacan', '2024-12-03 02:48:50', '2024-12-28', 'Stage 1', 522203, 0x363734653731393265393465352d426f6f6b2e6a7067, 0x363734653731393265393730662d426f6f6b2e6a7067, 0x363734653731393265393863372d426f6f6b2e6a7067, 0x363734653731393265396162652d426f6f6b2e6a7067, 0x363734653731393265396335362d426f6f6b2e6a7067, 60, 11),
(242, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '14124141421', '', 'Bulacan', '2024-12-03 02:49:26', '0000-00-00', 'Stage 1', 0, 0x363734653731623633616330322d, 0x363734653731623633616338322d, 0x363734653731623633616339342d, 0x363734653731623633616361342d, 0x363734653731623633616362342d, 60, 11);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PropertyID` int(8) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Bedrooms` int(8) NOT NULL,
  `Bathrooms` int(8) NOT NULL,
  `Lot` varchar(255) NOT NULL,
  `Block` varchar(255) NOT NULL,
  `Phase` varchar(255) NOT NULL,
  `Area_sqft` varchar(255) NOT NULL,
  `VirtualTour` varchar(255) NOT NULL,
  `Calendar` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(255) NOT NULL,
  `IExterior` longblob DEFAULT NULL,
  `IBedroom` longblob DEFAULT NULL,
  `IBathroom` longblob DEFAULT NULL,
  `IAttic` longblob DEFAULT NULL,
  `IDining` longblob DEFAULT NULL,
  `Role` varchar(255) NOT NULL,
  `ManagementID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PropertyID`, `Property`, `Description`, `Price`, `Bedrooms`, `Bathrooms`, `Lot`, `Block`, `Phase`, `Area_sqft`, `VirtualTour`, `Calendar`, `Status`, `IExterior`, `IBedroom`, `IBathroom`, `IAttic`, `IDining`, `Role`, `ManagementID`) VALUES
(11, 'Amara Expanded', 'Two-Storey Single attached with attic  3 BR  3  T&B  Living Dining and kitchen Area  Maids room  Sliding door to lanel  carport withd deck addtional 16 sqm usable floor area at deck', 4501520, 3, 3, '1', '4', '1', '131sqm', 'Virtual/AmaraExpanded/index.html', '2024-11-15 08:38:35', 'Purchased', 0x363733373038386231663830332d416d617261204578746572696f722e706e67, 0x363733373038386232303237612d4d61737465727320426564726f6f6d2e6a706567, 0x363733373038386232303664312d426564726f6f6d2e6a706567, 0x363733373038386232303363392d4c6976696e6720526f6f6d2e6a706567, 0x363733373038386232303561302d44696e696e6720616e64204b69746368656e20417265612e6a706567, 'Property', 0),
(12, 'Arya Prime', 'Two-Storey * Single-Attached * 3 BR * 2 T&B * Family Room * Living, Dining and Kitchen Area * Carport with Deck (additional 15 sqm usable floor area at deck)', 5, 3, 2, '1', '2', '1', '89sqm', 'Virtual/AryaPrime/index.html', '2024-10-30 14:56:19', 'Purchased', 0x363732323432653637343736342d41727961204578746572696f722e706e67, 0x363732323432653637343935392d426564726f6f6d2e6a7067, 0x363732323439313364303435372d4c6976696e6720726f6f6d20332e6a7067, 0x363732323432653637346332632d44696e696e6720417265612e6a7067, 0x363732323432653637346438332d, 'Property', 0),
(24, 'Alexandria', 'Two-Storey Single-Attached with Attic * 5 Br * 3 T&B * Living, Dining, and Kitchen Area * Sliding Door to Lanal * Carport with Deck (additional 15 sqm usable floor area at deck)', 9, 5, 3, '1', '1', '1', '130sqm', 'virtual/Alexandria/index.html', '2024-11-25 07:57:04', 'Purchased', 0x363732323433653562616533612d416c6578616e64726961204578746572696f722e706e67, 0x363732323433653562623030392d426564726f6f6d20312e6a706567, 0x363732323437646632633366652d426564726f6f6d20322e6a706567, 0x363732323433653562623237352d44696e696e6720616e64204b69746368656e2e6a706567, 0x363732323433653562623361372d, 'Property', 0),
(25, 'Kayla Prime', 'Two-Storey * Single-Attached * 3 BR * 2 T&B * High-Celling Living Area * Dining and Kitchen Area * Carport with Deck (additional 15 sqm usable floor area at deck)', 5, 3, 2, '1', '3', '1', '89sqm', 'virtual/Kayla Prime/index.html', '2024-11-25 07:58:02', 'Sale', 0x363732323434616466336361632d4b61796c61205072696d652e706e67, 0x363732323436333537353662382d48696768204365696c696e67202d20486967686c696768742e6a706567, 0x363732323434616466336561632d4c6976696e6720726f6f6d2e6a706567, 0x363732323434616466343030372d44696e696e6720417265612e6a706567, 0x363732323434616466343135642d, 'Property', 0),
(30, 'gahaha', 'aahaah', 14212100, 2, 3, '6', '5', '7', '98-100sqm', '', '2024-11-28 08:20:43', 'Purchased', 0x363734383237646261636134352d, 0x363734383237646261636235642d, 0x363734383237646261636239312d, 0x363734383237646261636262372d, 0x363734383237646261636263642d, 'Property', 0),
(31, 'Viejo', 'hahaha', 4214140, 4, 4, '2', '2', '2', '98-100sqm', '', '2024-12-03 03:24:38', 'Sale', 0x363734653739663664316334312d, 0x363734653739663664316432372d, 0x363734653739663664316434312d, 0x363734653739663664316435392d, 0x363734653739663664316437312d, 'Property', 98);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SaleID` int(8) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `CurrentOwner` varchar(255) NOT NULL,
  `PreviousOwner` varchar(255) NOT NULL,
  `Agent` varchar(255) NOT NULL,
  `Date_Purchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `TransactionDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL,
  `ManagementID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SaleID`, `Property`, `CurrentOwner`, `PreviousOwner`, `Agent`, `Date_Purchased`, `TransactionDate`, `UserID`, `PropertyID`, `ManagementID`) VALUES
(23, 'Amara Expanded', 'Jamandron', '', 'Viejo', '2024-12-03 03:15:03', '2024-12-03 03:15:03', 60, 11, 105),
(24, 'Amara Expanded', 'Britania', '', 'Abacial', '2024-12-03 03:15:18', '2024-12-03 03:15:18', 61, 11, 101),
(25, 'Amara Expanded', 'Britania', '', '101', '2024-12-03 03:16:35', '2024-12-03 03:16:35', 61, 11, 101),
(26, 'gahaha', 'Britania', '', 'jamandron', '2024-12-03 03:18:21', '2024-12-03 03:18:21', 61, 30, 102);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(8) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Date_Joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Firstname`, `Lastname`, `Email`, `Phone`, `Address`, `Password`, `Role`, `Date_Joined`) VALUES
(47, 'mark', 'delacruz', 'mark@gmail.com', '12313213213', 'sanjose', '4321', 'User', '2024-11-15 14:57:42'),
(59, 'Princess Kazandra', 'Babas', 'babas@gmail.com', '23013013013', 'LA UNION', '$2y$10$kq5kLwUkWyMK.EhM7O0O2OC/9G0/eEH0gpYgwuGekcT3DMpZ3fosi', 'User', '2024-11-25 08:52:22'),
(60, 'John Samuel', 'Jamandron', 'jamandron@gmail.com', '14124141421', 'Bulacan', '$2y$10$tmZSYXPQL8QKe/5Gdr7gPeuvq.JsdzYPGQOXrDko5N9o1Om1K5oF.', 'User', '2024-11-27 05:55:19'),
(61, 'david', 'Britania', 'britania@gmail.com', '14141414152', 'MINUYAN', '$2y$10$hJUybDX3Zft/0ePCldWt4eXSUOh1XRWVfBGo5M24DzQ3afkvLEnoi', 'User', '2024-11-29 10:08:23'),
(62, 'dabid', 'joshua', 'david@gmail.com', '12321512512', 'Minuyan', '$2y$10$ZG2G0M3M8VyTIUvkSPD1qOVUotCe3ACCsUPvENXgB2gFjXEdTdncu', 'User', '2024-11-30 03:18:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`TrackID`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`ArchiveID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`ManagementID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`PendingID`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PropertyID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SaleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `TrackID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ArchiveID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ClientID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `ManagementID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `PendingID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SaleID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
