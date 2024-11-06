-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 05:38 PM
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
(101, 66, 'Admin/Staff logged in ', '2024-11-06 16:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ArchiveID` int(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ArchiveID`, `Name`, `Description`, `Date`) VALUES
(87, 'Jamandron', 'Paid', '2024-10-26 07:28:11'),
(92, 'try ulet', 'Paid', '2024-10-26 08:07:30'),
(93, 'Caleb house', 'Property', '2024-10-30 12:01:09'),
(94, 'Alexandria/index.html', 'Property', '2024-10-30 12:01:14'),
(95, 'Kayla Prime', 'Property', '2024-10-30 12:01:18'),
(96, 'Camillia', 'Property', '2024-10-30 12:02:11'),
(97, 'Selana Prime', 'Property', '2024-10-30 12:02:16'),
(98, 'Shao Tower', 'Property', '2024-10-30 12:02:20'),
(99, 'Illagan', 'Property', '2024-10-30 12:02:30'),
(100, 'Amara Expanded', 'Property', '2024-10-30 14:12:33'),
(101, 'asda', 'Property', '2024-10-30 14:12:47'),
(102, 'Jamandron', 'Paid', '2024-11-02 10:07:19'),
(103, 'Jamandron', 'Paid', '2024-11-02 10:07:21'),
(104, 'Jamandron', 'Unpaid', '2024-11-02 10:07:22'),
(105, 'Abacial', 'Paid', '2024-11-02 10:07:22'),
(106, 'Britania', 'Paid', '2024-11-02 10:07:23'),
(107, 'Britania', 'Unpaid', '2024-11-02 10:07:23'),
(108, 'Britania', 'Unpaid', '2024-11-02 10:07:24'),
(109, 'Britania', 'Paid', '2024-11-02 10:07:25'),
(111, 'Britania', 'Paid', '2024-11-02 10:07:27'),
(112, 'Britania', 'Unpaid', '2024-11-02 10:07:27'),
(113, 'admin', 'Unpaid', '2024-11-02 10:07:28'),
(114, 'Claen', 'Paid', '2024-11-02 10:07:29'),
(115, 'Britania', 'Paid', '2024-11-02 10:07:29'),
(116, 'Jamandron', 'Unpaid', '2024-11-02 10:07:30'),
(117, 'Jamandron', 'Unpaid', '2024-11-02 10:07:31'),
(118, 'Britania', 'Unpaid', '2024-11-02 10:07:31'),
(119, 'No 3D villa', 'Property', '2024-11-03 07:31:57'),
(120, 'sample', 'Property', '2024-11-03 09:19:51'),
(121, 'ahm', 'Property', '2024-11-03 09:21:48'),
(122, 'ONE MORE HILL', 'Property', '2024-11-03 09:25:02'),
(123, 'Bago', 'Unpaid', '2024-11-03 09:26:32'),
(124, 'asda', 'Property', '2024-11-03 09:26:39'),
(125, 'Jesus', 'Property', '2024-11-04 12:38:53'),
(126, 'Britania', 'Unpaid', '2024-11-06 08:11:16'),
(127, 'Bago', 'Unpaid', '2024-11-06 08:16:28'),
(128, 'Britania', 'Unpaid', '2024-11-06 08:26:56'),
(129, 'ads', 'User', '2024-11-06 10:10:57'),
(130, 'Pen', 'User', '2024-11-06 10:11:01'),
(131, 'Jamandron', 'User', '2024-11-06 10:11:33'),
(132, 'Kengkoy', 'Property', '2024-11-06 10:15:58');

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
(62, 'Shaori', 'Admin Shao', 'amaresa@gmail.com', '151515', 'BLK 3 LOT 6 SEC 7 PHASE 1 Pabahay 2000', '$2y$10$Z0qzmYshj91gf3G3j.BSq.wEYrMNrnW0MJwNmXV.llt9dDVntnMdy', 'Admin', '2024-08-31 10:38:50'),
(63, 'ONLINE STORE', 'SMART', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '$2y$10$BKlgzbNdm8p0g9Ko7eFqq.BbGJslLqn3DKf9dwmsSphSIdycBe/yy', 'Staff', '2024-09-10 07:08:50'),
(64, 'ONLINE STORE', 'SMART', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '$2y$10$Tlm.EaSntEwG0HLmKkdkc.6lJAnl5jdoPf5l8mDy6CXKkw0/mXTHu', 'Admin', '2024-09-10 08:52:40'),
(66, 'Jamandron', 'John Samuel', 'admin@gmail.com', '09563326964', 'BULACAN', '$2y$10$TzdwTJ3EM7yoZsXdR0WioexJN87UW3fiqfb8AjjiyB/ADEE/Fes9O', 'Admin', '2024-11-06 16:21:20'),
(67, 'Duenas', 'Kim', 'kimduenas17@gmail.com', '09350478829', 'Bulacan', '$2y$10$m/ZBdZ9eciIOtZ1ULcZyyec7KNVn.6caLGzCGVIWczzu6VZRuJWs6', 'Admin', '2024-11-06 16:33:13');

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
(3, 'Try nga', 4, 'hello', '2024-10-30 03:55:43'),
(4, 'John Samuel Jamandron', 4, 'This system is need a lot of improvement specially in the functions those function are lacking at validations, security, and fashion. I would like to say this is overall good.', '2024-10-30 03:57:31'),
(5, 'gfryt', 1, 'tfugyufh', '2024-10-30 03:58:56'),
(6, 'asd', 4, 'dasd', '2024-10-30 04:11:42'),
(7, 'asdsad', 2, 'two star', '2024-10-30 04:15:44'),
(9, 'David Britania', 5, 'If I have a chance to put an 6s I will put it', '2024-10-30 07:00:43'),
(11, 'asdadas', 4, 'tama ba?', '2024-10-30 11:48:33'),
(12, 'Log out', 5, 'adsad', '2024-10-30 11:48:51'),
(13, 'Papasok na', 3, 'asdasdadada', '2024-10-30 11:49:19'),
(14, 'Samuel', 5, 'hahahahahahaha', '2024-11-02 10:29:48'),
(15, 'Jesus', 2, 'adsassdada', '2024-11-04 12:33:00');

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
  `Category` varchar(255) NOT NULL,
  `Receipt` longblob NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(255) NOT NULL,
  `Requirements` varchar(255) NOT NULL,
  `UserID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`PendingID`, `Lastname`, `Firstname`, `Email`, `Phone`, `Message`, `Address`, `Category`, `Receipt`, `Date`, `Status`, `Requirements`, `UserID`, `PropertyID`) VALUES
(104, 'Bago', 'Bago', 'Bago@gmail.com', '12313', 'asdada', 'STA. Maria', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-03 09:20:52', 'Pending', '', 43, 16),
(122, 'Jamandron', 'Samuel', 'jamandron@gmail.com', '123', 'asdda', 'Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-06 14:09:06', 'Verified', 'Yoww b', 44, 12),
(123, 'Jamandron', 'Samuel', 'jamandron@gmail.com', '123', 'asd', 'Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-06 14:25:08', 'Pending', '', 44, 11),
(124, 'asfdasfd', 'Kim', 'jamandron@gmail.com', '121213213', 'ok', 'Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-06 14:36:28', 'Pending', '', 0, 0),
(125, 'Jamandron', 'Samuel', 'jamandron@gmail.com', '12313', 'asd', 'Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-06 14:37:05', 'Pending', '', 0, 0),
(126, 'Jamandron', 'Samuel', 'jamandron@gmail.com', '123', 'asdsadas', 'Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-06 14:50:12', 'Pending', '', 44, 11),
(127, 'Britania', 'Davinchi', 'david@gmail.com', '04014014141', 'Yay', 'MINUYAN', 'Paid', 0x363732623937313433306538302d6164612e6a7067, '2024-11-06 16:19:32', 'Pending', '', 36, 14);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PropertyID` int(8) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
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
  `UserID` int(7) NOT NULL COMMENT 'Foreign key of User table'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PropertyID`, `Property`, `Description`, `Price`, `Bedrooms`, `Bathrooms`, `Lot`, `Block`, `Phase`, `Area_sqft`, `VirtualTour`, `Calendar`, `Status`, `IExterior`, `IBedroom`, `IBathroom`, `IAttic`, `IDining`, `Role`, `UserID`) VALUES
(11, 'Amara Expanded', 'Two-Storey Single attached with attic  3 BR  3  T&B  Living Dining and kitchen Area  Maids room  Sliding door to lanel  carport withd deck addtional 16 sqm usable floor area at deck ', '4,974,450.0', 3, 3, '1', '1', '1', '131sqm', 'Virtual/AmaraExpanded/index.html', '2024-10-30 14:11:38', 'Sale', 0x363732323365396131353465322d416d617261204578746572696f722e706e67, 0x363732323365396131633138352d4d61737465727320426564726f6f6d2e6a706567, 0x363732323365396131653937642d426564726f6f6d2e6a706567, 0x363732323365396131646463362d4c6976696e6720526f6f6d2e6a706567, 0x363732323365396131653761662d44696e696e6720616e64204b69746368656e20417265612e6a706567, 'Property', 0),
(12, 'Arya Prime', 'Two-Storey * Single-Attached * 3 BR * 2 T&B * Family Room * Living, Dining and Kitchen Area * Carport with Deck (additional 15 sqm usable floor area at deck)', '5,962,300.00', 3, 2, '1', '1', '1', '89sqm', 'Virtual/AryaPrime/index.html', '2024-10-30 14:56:19', 'Sale', 0x363732323432653637343736342d41727961204578746572696f722e706e67, 0x363732323432653637343935392d426564726f6f6d2e6a7067, 0x363732323439313364303435372d4c6976696e6720726f6f6d20332e6a7067, 0x363732323432653637346332632d44696e696e6720417265612e6a7067, 0x363732323432653637346438332d, 'Property', 0),
(13, 'Alexandria', 'Two-Storey Single-Attached with Attic * 5 Br * 3 T&B * Living, Dining, and Kitchen Area * Sliding Door to Lanal * Carport with Deck (additional 15 sqm usable floor area at deck)', '9,548,280.00', 5, 3, '1', '1', '1', '130sqm', 'virtual/Alexandria/index.html', '2024-10-30 14:51:11', 'Sale', 0x363732323433653562616533612d416c6578616e64726961204578746572696f722e706e67, 0x363732323433653562623030392d426564726f6f6d20312e6a706567, 0x363732323437646632633366652d426564726f6f6d20322e6a706567, 0x363732323433653562623237352d44696e696e6720616e64204b69746368656e2e6a706567, 0x363732323433653562623361372d, 'Property', 0),
(14, 'Kayla Prime', 'Two-Storey * Single-Attached * 3 BR * 2 T&B * High-Celling Living Area * Dining and Kitchen Area * Carport with Deck (additional 15 sqm usable floor area at deck)', '5,721,410.00', 3, 2, '1', '1', '1', '89sqm', 'virtual/Kayla Prime/index.html', '2024-10-30 14:58:59', 'Sale', 0x363732323434616466336361632d4b61796c61205072696d652e706e67, 0x363732323436333537353662382d48696768204365696c696e67202d20486967686c696768742e6a706567, 0x363732323434616466336561632d4c6976696e6720726f6f6d2e6a706567, 0x363732323434616466343030372d44696e696e6720417265612e6a706567, 0x363732323434616466343135642d, 'Property', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SaleID` int(8) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `CurrentOwner` varchar(255) NOT NULL,
  `PreviousOwner` varchar(255) NOT NULL,
  `Date_Purchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `TransactionDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SaleID`, `Property`, `CurrentOwner`, `PreviousOwner`, `Date_Purchased`, `TransactionDate`) VALUES
(1, 'Arya Prime', 'Abacial', 'Sam', '2024-08-23 08:50:08', '2024-11-06 10:10:12'),
(2, 'Pen', 'asdas', 'Sam', '2024-11-06 07:49:44', '2024-11-06 10:09:09'),
(3, 'Bago', 'Abacial', 'Sam', '2024-11-06 07:50:47', '2024-11-06 10:15:35'),
(4, 'Arya Prime', '', '', '2024-11-06 07:51:58', '2024-11-06 10:06:12'),
(5, 'Amara Expanded', 'fafafa', 'Bago', '2024-11-06 07:54:35', '2024-11-06 10:08:34'),
(6, 'Arya Prime', 'Bago', '', '2024-11-06 07:54:54', '2024-11-06 09:29:32'),
(7, 'Amara Expanded', 'Abacial', 'Pen', '2024-11-06 07:58:07', '2024-11-06 14:27:26'),
(8, 'Amara Expanded', 'Pen', '', '2024-11-06 07:58:43', '2024-11-06 09:29:32'),
(9, 'Amara Expanded', 'Pen', '', '2024-11-06 07:59:22', '2024-11-06 09:29:32'),
(10, 'Kengkoy', 'Britania', '', '2024-11-06 08:01:49', '2024-11-06 09:29:32'),
(11, 'Kengkoy', 'Britania', '', '2024-11-06 08:03:22', '2024-11-06 09:29:32'),
(12, 'Kengkoy', 'Britania', '', '2024-11-06 08:20:24', '2024-11-06 09:29:32'),
(13, 'Arya Prime', 'Bago', '', '2024-11-06 08:27:09', '2024-11-06 09:29:32'),
(14, 'Amara Expanded', 'Bago', '', '2024-11-06 09:30:54', '2024-11-06 09:30:54'),
(15, 'Arya Prime', 'Jamandron', '', '2024-11-06 14:08:07', '2024-11-06 14:08:07');

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
(36, 'Davinchi', 'Britania', 'david@gmail.com', '04014014141', 'MINUYAN', '$2y$10$PVSA6QcJQQMCkpKUCm99I.fd8JUBXFl6Jcbf8UJEaQp6wW/rsy2su', 'User', '2024-11-06 16:19:10'),
(37, 'Ryan', 'Abacial', 'yangyang16@gmail.com', '09772375591', 'blk4 alot 27', '$2y$10$h2z6RDYsja/VAaNYEFo8z.ofTOe0cOmx/IdArTwjs8vzO783jy1qC', 'User', '2024-10-26 09:27:52'),
(38, 'New Caleb', 'Claen', 'caleb@gmail.com', '41241414141', 'MINUYAN', '$2y$10$gYrJka.miNj2SbXaq9HHY.kdyAd13A/MvsAz472DcRPmIXe2QisUm', 'User', '2024-10-31 08:57:41'),
(39, 'Admin', 'admin', 'admin@gmail.com', '31221421414', 'Bulacan', '$2y$10$BHCYwhYq0zlJkITDGUMjOenGTnjHLCA48CxenB1lKekT1kiRW44uC', 'User', '2024-11-06 16:27:07'),
(42, 'Samuel', 'Jamandron', 'pen@gmail.com', '2', 'STA. Maria', '$2y$10$.9GPXPbc.BlTZtS7hlWOvOwRPUkF3La9EEj/IEmOsqfL3dHrQG2bu', 'User', '2024-11-03 07:12:32'),
(43, 'Bago', 'Bago', 'Bago@gmail.com', '12313', 'STA. Maria', '$2y$10$FLCwnulyE3Q6OqpcWM2RU.ka/Bj1y7uLzt1QoxEAzodxBi5HHQLLa', 'User', '2024-11-03 08:27:38'),
(44, 'Samuel', 'Jamandron', 'jamandron@gmail.com', '123', 'Bulacan', '$2y$10$0Oo1fwwB7yWg1Lj91mGdi.HGJiWXeWPKSkBr8aQuVDHbwKp4sXoWO', 'User', '2024-11-06 15:43:48');

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
  MODIFY `TrackID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ArchiveID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `ManagementID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `PendingID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SaleID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
