-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 09:16 AM
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
-- Database: `bbsdb`
--
CREATE DATABASE IF NOT EXISTS `bbsdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bbsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AdminuserName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UserType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UserType`) VALUES
(2, 'Admin', 'admin', 8956565656, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2024-08-31 18:30:00', 1),
(3, 'เดชา ขำแก้ว', 'user1', 1234567890, 'decha.k@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', '2024-09-10 18:30:00', 0),
(7, 'จิตสุภา ปราชเปรื่อง', 'user2', 7894561236, 'meenu@gmail.com', '7e58d63b60197ceb55a1c487989a3720', '2024-09-25 05:57:24', 0),
(9, 'mark kana', 'kotore', 968377738, 'vovozuza1234@gmail.com', '6822951732be44edf818dc5a97d32ca6', '2024-12-14 02:38:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblboat`
--

CREATE TABLE `tblboat` (
  `ID` int(5) NOT NULL,
  `BoatName` varchar(250) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Capacity` varchar(100) DEFAULT NULL,
  `Source` varchar(250) DEFAULT NULL,
  `Destination` varchar(250) DEFAULT NULL,
  `Route` varchar(250) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `AddedBy` int(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblboat`
--

INSERT INTO `tblboat` (`ID`, `BoatName`, `Image`, `Size`, `Capacity`, `Source`, `Destination`, `Route`, `Price`, `Description`, `AddedBy`, `CreationDate`) VALUES
(2, 'Motor1', '660abd2c2a99e6da52e3dd00b6ae07b11727416540.jpg', 'Small', '1-4', 'อดีด', 'อนาคต', 'ปัจจุบัน', 1000000, 'Test', 2, '2024-09-25 06:34:28'),
(3, 'Motor2', '26bfbf1fb11a6a2b31928abc063dc0181727416632.jpg', 'Medium', '1-8', 'กทม', 'สมุดสงขา', 'นครนายก', 2500, 'Test', 2, '2024-09-25 06:35:33'),
(4, 'Motor3', '7ac5bd980dbbc68164693cad0e43fbfd1727416688.jpg', 'Large', '1-15', 'ออฟเลน', 'เครีเลน', 'มิดเลน', 1100, 'Test', 2, '2024-09-25 06:36:33'),
(5, 'Motor4', '983e18b7880ce3f7f39bed9aab911b341727416755.jpg', 'Large', '1-20', 'ลพบุรี', 'อยุธยา', 'สิงบุรี', 1200, 'Bazare Motor Boat is run through motor having capacity 1-20 persons', 2, '2024-09-26 04:55:19'),
(6, 'Motor5', '660abd2c2a99e6da52e3dd00b6ae07b11727416787.jpg', 'Small', '1-6', 'มหาสารคราม', 'สมุยร', 'น้ำ', 2000, '<br />\r\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\r\n', 2, '2024-09-26 05:34:22'),
(7, 'Motor6', '7ac5bd980dbbc68164693cad0e43fbfd1727330194.jpg', 'Large', '1-10', 'บ้านนายเอ', 'บ้านนายบี', 'บ้านนายซี', 1500, '<br />\r\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\r\n', 2, '2024-09-26 05:35:12'),
(8, 'Motor7', 'd41d8cd98f00b204e9800998ecf8427e1727332206', 'Small', '1-4', 'บ้านผม', 'บ้านเพื่อน', 'ร้านเหล้า', 1000, '<br />\r\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\r\n', 2, '2024-09-26 06:30:06'),
(9, 'Motor8', 'd41d8cd98f00b204e9800998ecf8427e1727415693', 'Large', '1-20', 'แอดไวร์', 'จิน', 'ไอ แฮบ ซีพียู', 2000, '<br />\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\n', 2, '2024-09-27 05:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblbookings`
--

CREATE TABLE `tblbookings` (
  `ID` int(5) NOT NULL,
  `BoatID` int(10) DEFAULT NULL,
  `BookingNumber` bigint(12) DEFAULT NULL,
  `FullName` varchar(250) DEFAULT NULL,
  `EmailId` varchar(250) DEFAULT NULL,
  `PhoneNumber` bigint(12) DEFAULT NULL,
  `BookingDateFrom` varchar(250) DEFAULT NULL,
  `BookingDateTo` varchar(250) DEFAULT NULL,
  `BookingTime` varchar(100) DEFAULT NULL,
  `NumnerofPeople` int(5) DEFAULT NULL,
  `Notes` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(250) DEFAULT NULL,
  `BookingStatus` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbookings`
--

INSERT INTO `tblbookings` (`ID`, `BoatID`, `BookingNumber`, `FullName`, `EmailId`, `PhoneNumber`, `BookingDateFrom`, `BookingDateTo`, `BookingTime`, `NumnerofPeople`, `Notes`, `postingDate`, `AdminRemark`, `BookingStatus`, `UpdationDate`) VALUES
(1, 4, 2147483647, 'Anuj kumar', 'anujk@gmail.com', 1233211230, '2024-10-15', '2024-10-17', '10:00', 5, 'NA', '2024-10-08 17:14:58', 'NA', 'Accepted', '2024-10-10 17:46:17'),
(2, 2, 2147483647, 'Garima', 'garima123@gmail.com', 1231231230, '2024-11-01', '2024-11-05', '11:30', 4, 'NA', '2024-10-11 14:57:50', NULL, NULL, '2024-10-11 14:57:50'),
(4, 6, 5811679355, 'John ', 'john12@gmail.com', 4566541230, '2024-11-08', '2024-11-09', '10:30', 4, 'NA', '2024-10-14 15:11:02', 'Booking Appoved', 'Accepted', '2024-10-14 15:11:59'),
(5, 2, 368393738, 'mark kana', 'vovozuza1234@gmail.com', 968377738, '2024-12-20', '2024-12-22', '10:49', 968377738, 'lol', '2024-12-14 02:49:32', NULL, NULL, '2024-12-14 02:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblboat`
--
ALTER TABLE `tblboat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbookings`
--
ALTER TABLE `tblbookings`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `bid` (`BoatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblboat`
--
ALTER TABLE `tblboat`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblbookings`
--
ALTER TABLE `tblbookings`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbookings`
--
ALTER TABLE `tblbookings`
  ADD CONSTRAINT `bid` FOREIGN KEY (`BoatID`) REFERENCES `tblboat` (`ID`);
--
-- Database: `dbproject267`
--
CREATE DATABASE IF NOT EXISTS `dbproject267` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbproject267`;

-- --------------------------------------------------------

--
-- Table structure for table `tbbook`
--

CREATE TABLE `tbbook` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `booktypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbook`
--

INSERT INTO `tbbook` (`bookid`, `bookname`, `author`, `price`, `stock`, `booktypeid`) VALUES
(1, 'awda', 'awdawd', 0, 0, 1),
(2, 'awda', 'awdawd', 0, 0, 1),
(3, 'awda', 'awdawd', 0, 0, 1),
(4, 'awda', 'awdawd', 2131, 565, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbbooktype`
--

CREATE TABLE `tbbooktype` (
  `booktypeid` int(11) NOT NULL,
  `booktypename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbooktype`
--

INSERT INTO `tbbooktype` (`booktypeid`, `booktypename`) VALUES
(1, ''),
(2, 'awdawda'),
(3, 'adawdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbroom`
--

CREATE TABLE `tbroom` (
  `roomid` int(11) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `roomtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbroom`
--

INSERT INTO `tbroom` (`roomid`, `roomname`, `detail`, `roomtypeid`) VALUES
(1, '101', 'มีแต่ห้องไม่มีของ', 3),
(2, '102', 'มีของแต่ไม่มีห้องอยู่', 3),
(3, '103', 'ห้องติดสถานีรภไฟ', 1),
(4, '104', 'ติดร้านเจ๊แหม่ม', 1),
(5, '105', 'พักได้ 40k-50kคน', 2),
(6, '106', 'ทำเนียนขาว', 1),
(7, '101', 'ddd', 3),
(8, '102', 'ddsd', 2),
(9, '777', '-*-', 1),
(10, '888', ':)', 1),
(11, 'ฟไก', 'ฟหกฟไ', 2),
(35, 'sdawd', 'awdawd', 2),
(36, 'fhtfh1', 'awda', 3),
(37, 'asdaw2', 'dddd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbroomtype`
--

CREATE TABLE `tbroomtype` (
  `roomtypeid` int(11) NOT NULL,
  `roomtypename` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbroomtype`
--

INSERT INTO `tbroomtype` (`roomtypeid`, `roomtypename`, `price`) VALUES
(1, 'รัชดา บูทีค โฮเทล', 1200),
(2, 'โฮม สุขุมวิท34 กรุงเทพฯ - แบรนด์ในเครือบันยัน กรุ๊', 2000),
(3, 'แบรนด์ในเครือบันยันกรุ๊ป', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `STD_ID` int(11) NOT NULL,
  `FishName` varchar(30) NOT NULL,
  `LestName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`STD_ID`, `FishName`, `LestName`, `email`, `Address`) VALUES
(1, 'mark', 'kana', '', '11/55 pole Thai'),
(2, 'kana', 'mark', '', '55/44 lopbule thai'),
(3, 'kome', 'kama', '', '48/55 lotis thai'),
(4, 'lapo', 'kowe', '', '66/33 opgp thai'),
(5, 'pelawad', 'pumin', '', '46/23 kutap thai'),
(6, '', 'kana', 'awdawdasdwa@gmail.com', 'awdawdasdwa'),
(7, 'mark', 'kana', 'awdawdasdwa@gmail.com', 'awdawdasdwa'),
(8, 'mark', 'kana', 'awdawdasdwa@gmail.com', 'awdawdasdwa'),
(9, 'mark', 'kana', 'awdawdasdwa@gmail.com', 'awdawdasdwa');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `firsname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `firsname`, `lastname`, `username`, `password`) VALUES
(1, 'wda', 'awda', 'awd', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'wda', 'awda', 'awd', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'mark', 'kana', 'มอส', '6822951732be44edf818dc5a97d32ca6'),
(4, 'koko', 'yoyo', 'a2', '68053af2923e00204c3ca7c6a3150cf7');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fullName`, `emailAddress`, `city`, `country`, `created_at`) VALUES
(1, 'asdas', 'adawda@gmail.com', 'city', '103357e3e40a9c0e4e9d36110f7bbc7a', '0000-00-00 00:00:00'),
(2, 'asdas2', 'adawda2@gmail.com', 'city2', 'Thailand2', '2024-12-13 16:14:47'),
(3, 'asdas3', 'adawda@gmail.com', 'city', 'Thailand', '2024-12-13 16:24:42'),
(4, 'asdas4', 'adawda@gmail.com', 'city', 'Thailand', '2024-12-13 16:25:46'),
(5, 'awada', 'adawda@gmail.com', 'city', 'Thailand', '2024-12-13 17:12:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbook`
--
ALTER TABLE `tbbook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `tbbooktype`
--
ALTER TABLE `tbbooktype`
  ADD PRIMARY KEY (`booktypeid`);

--
-- Indexes for table `tbroom`
--
ALTER TABLE `tbroom`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tbroomtype`
--
ALTER TABLE `tbroomtype`
  ADD PRIMARY KEY (`roomtypeid`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`STD_ID`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbook`
--
ALTER TABLE `tbbook`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbbooktype`
--
ALTER TABLE `tbbooktype`
  MODIFY `booktypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbroom`
--
ALTER TABLE `tbroom`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbroomtype`
--
ALTER TABLE `tbroomtype`
  MODIFY `roomtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbstudent`
--
ALTER TABLE `tbstudent`
  MODIFY `STD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
