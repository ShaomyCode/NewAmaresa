-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 11:43 AM
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
(128, 45, 'User logged in ', '2024-11-09 10:10:46');

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
(154, 'Jamandron', 'Admin', '2024-11-09 10:10:03');

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
(70, 'Molina', 'Jesus', 'jesusmolina@gmail.com', '09222222222', 'BSU', '$2y$10$zzu7RcEtZQU4UylMNGnyn.O8BwAQa1O44DSgsPIABSk0fuyVjKTQq', 'Admin', '2024-11-09 09:50:24'),
(71, 'Gojo Cruz', 'Essay', 'admin@gmail.com', '21313131313', 'San Jose Del Monte Bulacan', '$2y$10$g5vXXIdhABj9JjfOuXWM4uVg.6XiiyZDL2ZTUwmE2zDBs1Bj.RDCi', 'Staff', '2024-11-09 10:07:38');

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
(18, 'David', 5, 'Hi I would like it is impressive', '2024-11-09 09:53:56');

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
(132, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '09563326964', 'Hey can I have this house?', 'San Jose Del Monte Bulacan', 'Paid', 0x363732663332616532386139332d47636173682e6a7067, '2024-11-09 10:00:14', 'Pending', '', 45, 13),
(136, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '09563326964', 'haha', 'San Jose Del Monte Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-09 10:33:02', 'Pending', '', 45, 11),
(137, 'Jamandron', 'John Samuel', 'jamandron@gmail.com', '09563326964', 'buy ', 'San Jose Del Monte Bulacan', 'Unpaid', 0x4e6f20496d61676520417474616368, '2024-11-09 10:34:00', 'Declined', 'haha', 45, 22);

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
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PropertyID`, `Property`, `Description`, `Price`, `Bedrooms`, `Bathrooms`, `Lot`, `Block`, `Phase`, `Area_sqft`, `VirtualTour`, `Calendar`, `Status`, `IExterior`, `IBedroom`, `IBathroom`, `IAttic`, `IDining`, `Role`) VALUES
(1, 'David HOuse', 'haha', '2131', 2, 3, '1', '1', '1', '100sqm', '', '2024-11-09 10:21:45', 'Purchased', 0x363732663337623936343562322d416d61726142616e6e65722e706e67, 0x363732663337623936343739362d416d61726142616e6e65722e706e67, 0x363732663337623936346237632d416d61726142616e6e65722e706e67, 0x363732663337623936343865332d416d61726142616e6e65722e706e67, 0x363732663337623936346133382d416d61726142616e6e65722e706e67, 'Properties'),
(11, 'Amara Expanded', 'Two-Storey Single attached with attic  3 BR  3  T&B  Living Dining and kitchen Area  Maids room  Sliding door to lanel  carport withd deck addtional 16 sqm usable floor area at deck', '4,974,450.0', 3, 3, '1', '1', '1', '131sqm', 'Virtual/AmaraExpanded/index.html', '2024-11-09 07:31:24', 'Sale', 0x363732663066636330343933622d416d617261204578746572696f722e706e67, 0x363732663066636330356131392d4d61737465727320426564726f6f6d2e6a706567, 0x363732663066636330356534342d426564726f6f6d20322e6a706567, 0x363732663066636330356261622d4c6976696e6720526f6f6d2e6a706567, 0x363732663066636330356430632d44696e696e6720616e64204b69746368656e20417265612e6a706567, 'Property'),
(12, 'Arya Prime', 'Two-Storey * Single-Attached * 3 BR * 2 T&B * Family Room * Living, Dining and Kitchen Area * Carport with Deck (additional 15 sqm usable floor area at deck)', '5,962,300.00', 3, 2, '1', '1', '1', '89sqm', 'Virtual/AryaPrime/index.html', '2024-10-30 14:56:19', 'Sale', 0x363732323432653637343736342d41727961204578746572696f722e706e67, 0x363732323432653637343935392d426564726f6f6d2e6a7067, 0x363732323439313364303435372d4c6976696e6720726f6f6d20332e6a7067, 0x363732323432653637346332632d44696e696e6720417265612e6a7067, 0x363732323432653637346438332d, 'Property'),
(13, 'Alexandria', 'Two-Storey Single-Attached with Attic * 5 Br * 3 T&B * Living, Dining, and Kitchen Area * Sliding Door to Lanal * Carport with Deck (additional 15 sqm usable floor area at deck)', '9,548,280.00', 5, 3, '1', '1', '1', '130sqm', 'virtual/Alexandria/index.html', '2024-10-30 14:51:11', 'Sale', 0x363732323433653562616533612d416c6578616e64726961204578746572696f722e706e67, 0x363732323433653562623030392d426564726f6f6d20312e6a706567, 0x363732323437646632633366652d426564726f6f6d20322e6a706567, 0x363732323433653562623237352d44696e696e6720616e64204b69746368656e2e6a706567, 0x363732323433653562623361372d, 'Property'),
(14, 'Kayla Prime', 'Two-Storey * Single-Attached * 3 BR * 2 T&B * High-Celling Living Area * Dining and Kitchen Area * Carport with Deck (additional 15 sqm usable floor area at deck)', '5,721,410.00', 3, 2, '1', '1', '1', '89sqm', 'virtual/Kayla Prime/index.html', '2024-10-30 14:58:59', 'Sale', 0x363732323434616466336361632d4b61796c61205072696d652e706e67, 0x363732323436333537353662382d48696768204365696c696e67202d20486967686c696768742e6a706567, 0x363732323434616466336561632d4c6976696e6720726f6f6d2e6a706567, 0x363732323434616466343030372d44696e696e6720417265612e6a706567, 0x363732323434616466343135642d, 'Property'),
(22, 'Trial House', 'yay', '1234567890', 2, 3, '2', '2', '2', '123sqm', '', '2024-11-09 08:24:17', 'Purchased', 0x363732663163333138643665622d416d617261204578746572696f722e706e67, 0x363732663163333138643931642d416d617261204578746572696f722e706e67, 0x363732663163333138646161622d416d617261204578746572696f722e706e67, 0x363732663163333138646336312d416d617261204578746572696f722e706e67, 0x363732663163333138646462322d416d617261204578746572696f722e706e67, 'Property');

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
(16, 'Trial House', 'Britania', 'Jamandron', '2024-11-09 10:12:20', '2024-11-09 10:40:31'),
(17, 'David HOuse', 'Jamandron', '', '2024-11-09 10:31:28', '2024-11-09 10:31:28'),
(18, 'David HOuse', 'Jamandron', '', '2024-11-09 10:32:42', '2024-11-09 10:32:42'),
(19, 'Trial House', 'Jamandron', '', '2024-11-09 10:34:10', '2024-11-09 10:34:10');

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
(45, 'John Samuel', 'Jamandron', 'jamandron@gmail.com', '09563326964', 'San Jose Del Monte Bulacan', '$2y$10$2tTfwE0BAg0blAn6tGzm5u5rbUxh.8YR2KJr3AW2M3wsT45cobr0C', 'User', '2024-11-09 09:55:44');

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
  MODIFY `TrackID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ArchiveID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `ManagementID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `PendingID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SaleID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
