-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 04:50 PM
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
(16, 36, 'User logged in ', '2024-10-30 15:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ArchiveID` int(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` int(8) NOT NULL,
  `ManagementID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ArchiveID`, `Name`, `Description`, `Date`, `UserID`, `ManagementID`, `PropertyID`) VALUES
(24, 'Admin 1', 'Staff', '2024-08-29 08:54:39', 0, 0, 0),
(29, 'Jamandron', 'Pending', '2024-08-31 06:57:21', 0, 0, 0),
(34, 'ads', 'Pending', '2024-09-14 10:38:15', 0, 0, 0),
(35, 'Jamandron', 'Pending', '2024-09-22 04:18:21', 0, 0, 0),
(36, 'Abacial', 'Pending', '2024-09-30 06:55:02', 0, 0, 0),
(38, 'ONLINE STORE', 'Pending', '2024-09-30 07:04:23', 0, 0, 0),
(39, 'ONLINE STORE', 'Pending', '2024-09-30 07:48:28', 0, 0, 0),
(40, 'ONLINE STORE', 'User', '2024-09-30 08:31:59', 0, 0, 0),
(42, 'Samuel', 'Pending', '2024-10-03 02:27:16', 0, 0, 0),
(44, 'ONLINE STORE', 'Pending', '2024-10-03 03:33:09', 0, 0, 0),
(45, 'Jamandron', 'Pending', '2024-10-03 08:08:42', 0, 0, 0),
(46, 'Jamadron', 'Pending', '2024-10-04 07:27:44', 0, 0, 0),
(47, 'Ilegan', 'Pending', '2024-10-04 07:27:49', 0, 0, 0),
(48, 'ONLINE STORE', 'Pending', '2024-10-04 07:27:54', 0, 0, 0),
(49, 'ONLINE STORE', 'Pending', '2024-10-04 07:28:04', 0, 0, 0),
(50, 'ONLINE STORE', 'Pending', '2024-10-04 07:28:09', 0, 0, 0),
(53, 'ONLINE STORE', 'Unpaid', '2024-10-04 07:29:42', 0, 0, 0),
(54, 'ONLINE STORE', 'User', '2024-10-04 07:30:01', 0, 0, 0),
(55, 'adsad', 'Paid', '2024-10-04 07:50:18', 0, 0, 0),
(56, 'ONLINE STORE', 'Pending', '2024-10-04 07:54:29', 0, 0, 0),
(58, 'Doe', 'Unpaid', '2024-10-04 07:58:06', 0, 0, 0),
(59, 'Shaoshao', 'Pending', '2024-10-04 08:00:15', 0, 0, 0),
(60, 'ONLINE STORE', 'Unpaid', '2024-10-04 08:00:34', 0, 0, 0),
(61, 'ONLINE STORE', 'Pending', '2024-10-04 08:00:56', 0, 0, 0),
(62, 'Alexandria', 'Property', '2024-10-23 07:35:24', 0, 0, 0),
(63, 'Jamandron', 'Unpaid', '2024-10-23 08:33:12', 0, 0, 0),
(64, 'brits', 'Paid', '2024-10-23 08:33:25', 0, 0, 0),
(65, ' batong bakal', 'Unpaid', '2024-10-23 08:33:38', 0, 0, 0),
(68, 'batong bakal', 'Unpaid', '2024-10-23 08:33:49', 0, 0, 0),
(69, 'Jamandron', 'Unpaid', '2024-10-23 08:33:51', 0, 0, 0),
(70, 'so sarap', 'Unpaid', '2024-10-23 08:33:54', 0, 0, 0),
(71, 'Abacial', 'Pending', '2024-10-23 08:34:25', 0, 0, 0),
(72, 'Jamandron', 'User', '2024-10-25 07:24:49', 0, 0, 0),
(73, 'Penaranda', 'User', '2024-10-25 07:24:52', 0, 0, 0),
(74, 'ONLINE STORE', 'User', '2024-10-25 07:24:56', 0, 0, 0),
(75, 'ONLINE STORE', 'User', '2024-10-25 07:24:59', 0, 0, 0),
(76, 'ONLINE STORE', 'User', '2024-10-25 07:25:03', 0, 0, 0),
(77, 'ONLINE STORE', 'User', '2024-10-25 07:25:05', 0, 0, 0),
(78, 'ONLINE STORE', 'User', '2024-10-25 07:25:09', 0, 0, 0),
(79, 'Jamandron', 'User', '2024-10-25 07:25:12', 0, 0, 0),
(80, 'Jamandron', 'Unpaid', '2024-10-26 07:11:42', 0, 0, 0),
(81, 'So sarap', 'Paid', '2024-10-26 07:28:00', 0, 0, 0),
(82, 'Destination', 'Unpaid', '2024-10-26 07:28:05', 0, 0, 0),
(83, 'Britania', 'Paid', '2024-10-26 07:28:07', 0, 0, 0),
(84, 'Britania', 'Unpaid', '2024-10-26 07:28:08', 0, 0, 0),
(85, 'Jamandron', 'Unpaid', '2024-10-26 07:28:09', 0, 0, 0),
(86, 'Jamandron', 'Paid', '2024-10-26 07:28:10', 0, 0, 0),
(87, 'Jamandron', 'Paid', '2024-10-26 07:28:11', 0, 0, 0),
(88, 'Jamandron', 'Paid', '2024-10-26 07:28:12', 0, 0, 0),
(89, 'Jamandron', 'Paid', '2024-10-26 07:42:06', 0, 0, 0),
(90, 'Jamandron', 'Paid', '2024-10-26 07:42:07', 0, 0, 0),
(91, 'Try', 'Unpaid', '2024-10-26 07:50:19', 0, 0, 0),
(92, 'try ulet', 'Paid', '2024-10-26 08:07:30', 0, 0, 0),
(93, 'Caleb house', 'Property', '2024-10-30 12:01:09', 0, 0, 0),
(94, 'Alexandria/index.html', 'Property', '2024-10-30 12:01:14', 0, 0, 0),
(95, 'Kayla Prime', 'Property', '2024-10-30 12:01:18', 0, 0, 0),
(96, 'Camillia', 'Property', '2024-10-30 12:02:11', 0, 0, 0),
(97, 'Selana Prime', 'Property', '2024-10-30 12:02:16', 0, 0, 0),
(98, 'Shao Tower', 'Property', '2024-10-30 12:02:20', 0, 0, 0),
(99, 'Illagan', 'Property', '2024-10-30 12:02:30', 0, 0, 0),
(100, 'Amara Expanded', 'Property', '2024-10-30 14:12:33', 0, 0, 0),
(101, 'asda', 'Property', '2024-10-30 14:12:47', 0, 0, 0);

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
(64, 'ONLINE STORE', 'SMART', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '$2y$10$Tlm.EaSntEwG0HLmKkdkc.6lJAnl5jdoPf5l8mDy6CXKkw0/mXTHu', 'Admin', '2024-09-10 08:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(8) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Rate` int(7) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `PendingID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `Sender`, `Rate`, `Message`, `Date`, `PendingID`) VALUES
(1, 'DavidAdmin', 0, 'MessageSent', '2024-08-23 07:33:48', 0),
(2, 'Samuel', 5, 'Hi', '2024-10-30 03:11:21', 0),
(3, 'Try nga', 4, 'hello', '2024-10-30 03:55:43', 0),
(4, 'John Samuel Jamandron', 4, 'This system is need a lot of improvement specially in the functions those function are lacking at validations, security, and fashion. I would like to say this is overall good.', '2024-10-30 03:57:31', 0),
(5, 'gfryt', 1, 'tfugyufh', '2024-10-30 03:58:56', 0),
(6, 'asd', 4, 'dasd', '2024-10-30 04:11:42', 0),
(7, 'asdsad', 2, 'two star', '2024-10-30 04:15:44', 0),
(8, 'one star', 1, 'one star', '2024-10-30 04:15:57', 0),
(9, 'David Britania', 5, 'If I have a chance to put an 6s I will put it', '2024-10-30 07:00:43', 0),
(10, 'Samuel', 1, 'asdada', '2024-10-30 11:43:56', 0),
(11, 'asdadas', 4, 'tama ba?', '2024-10-30 11:48:33', 0),
(12, 'Log out', 5, 'adsad', '2024-10-30 11:48:51', 0),
(13, 'Papasok na', 3, 'asdasdadada', '2024-10-30 11:49:19', 0);

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
  `Selected_Property` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Receipt` longblob NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` int(8) NOT NULL,
  `MessageID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`PendingID`, `Lastname`, `Firstname`, `Email`, `Phone`, `Message`, `Address`, `Selected_Property`, `Category`, `Receipt`, `Date`, `UserID`, `MessageID`, `PropertyID`) VALUES
(62, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '41412421241', 'asdadadada', 'STA. Maria', 'Cial Properties', 'Paid', 0x363731633963323130376331372d47636173682e6a7067, '2024-10-26 07:37:05', 0, 0, 0),
(63, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '41412421241', 'asd', 'STA. Maria', 'Amaresa Extended', 'Paid', 0x363731633963346161303361352d50726f70657274792d6c697374696e672e706e67, '2024-10-26 07:37:46', 0, 0, 0),
(64, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '41412421241', 'asd', 'STA. Maria', 'Cial Properties', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-10-26 07:50:31', 0, 0, 0),
(65, 'Abacial', 'Ryan', 'yangyang16@gmail.com', '09772375591', 'I want this', 'blk4 alot 27', 'Kayla Prime', 'Paid', 0x363731636236376638613034612d47636173682e6a7067, '2024-10-26 09:29:35', 0, 0, 0),
(66, 'Britania', 'David', 'david@gmail.com', '12313213213', 'I would like to buy this ', 'MINUYAN', 'Camillia', 'Paid', 0x363731643135383135653963352d47636173682e6a7067, '2024-10-26 16:14:57', 0, 0, 0),
(67, 'Britania', 'David', 'david@gmail.com', '12313213213', 'This house is I would like to get', 'MINUYAN', 'Cial Vivamax', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-10-26 18:50:29', 0, 0, 0),
(68, 'Britania', 'David', 'david@gmail.com', '12313213213', 'yay', 'MINUYAN', 'Amaresa Extended', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-10-26 18:51:37', 0, 0, 0),
(69, 'Britania', 'David', 'david@gmail.com', '12313213213', 'adasdas', 'MINUYAN', 'Camillia', 'Paid', 0x363731643361353465313331372d496d61676520322e6a7067, '2024-10-26 18:52:04', 0, 0, 0),
(70, 'Britania', 'David', 'david@gmail.com', '12313213213', 'asda', 'MINUYAN', 'Kayla Prime', 'Paid', 0x363731643361663633653962352d38633061623134326235376363313434373663396632636639383764653465302e6a7067, '2024-10-26 18:54:46', 0, 0, 0),
(71, 'Britania', 'David', 'david@gmail.com', '12313213213', 'asdsadasd', 'MINUYAN', 'Amaresa Extended', 'Paid', 0x363732316561646561633632622d363731643134323662346436362d7061796d656e742e706e67, '2024-10-30 08:14:22', 0, 0, 0),
(72, 'Britania', 'David', 'david@gmail.com', '12313213213', '', 'MINUYAN', 'Caleb house', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-10-30 08:17:34', 0, 0, 0);

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
  `Owner` varchar(255) NOT NULL,
  `Date_Purchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `PendingID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SaleID`, `Property`, `Owner`, `Date_Purchased`, `PendingID`, `PropertyID`) VALUES
(1, 'Arya Prime', 'David', '2024-08-23 08:50:08', 0, 0);

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
(35, 'John Samuel', 'Jamandron', 'jamandron@gmail.com', '41412421241', 'STA. Maria', '$2y$10$HVB2T/PwhgwSdmrQDxHnoOJWhu0R6xWqU2MLcA8NJPgoraHq7zgiC', 'User', '2024-10-30 11:29:27'),
(36, 'David', 'Britania', 'david@gmail.com', '12313213213', 'MINUYAN', '$2y$10$Clf/WVT2tBG9cyOUFFwL3O3YOsUT.ktygYhG9EqdzGMN4fQkXYMm6', 'User', '2024-10-30 15:08:57'),
(37, 'Ryan', 'Abacial', 'yangyang16@gmail.com', '09772375591', 'blk4 alot 27', '$2y$10$h2z6RDYsja/VAaNYEFo8z.ofTOe0cOmx/IdArTwjs8vzO783jy1qC', 'User', '2024-10-26 09:27:52'),
(38, 'New Caleb', 'Claen', 'caleb@gmail.com', '41241414141', 'MINUYAN', '$2y$10$gYrJka.miNj2SbXaq9HHY.kdyAd13A/MvsAz472DcRPmIXe2QisUm', 'User', '2024-10-30 11:26:10');

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
  MODIFY `TrackID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ArchiveID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `ManagementID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `PendingID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SaleID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
