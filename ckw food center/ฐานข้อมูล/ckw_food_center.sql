-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 11:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckw food center`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkuseradmin`
--

CREATE TABLE `checkuseradmin` (
  `ID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  `Vat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkuseradmin`
--

INSERT INTO `checkuseradmin` (`ID`, `Name`, `Username`, `Password`, `Total`, `Vat`) VALUES
(1, 'มืด ปาคเกอร์', 'admin', '154021', '80', '8');

-- --------------------------------------------------------

--
-- Table structure for table `checkuserstudent`
--

CREATE TABLE `checkuserstudent` (
  `Number` int(7) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Secure code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkuserstudent`
--

INSERT INTO `checkuserstudent` (`Number`, `Password`, `Secure code`) VALUES
(28074, '1234', '1234'),
(28081, '1234', '1234'),
(28082, '1234', ''),
(30073, '1234', '1234'),
(30076, '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `checkvendor`
--

CREATE TABLE `checkvendor` (
  `ID` int(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkvendor`
--

INSERT INTO `checkvendor` (`ID`, `Username`, `Password`) VALUES
(3, 'ckwvendor1', '115012'),
(4, 'ckwvendor2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Number` int(7) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CardId` varchar(30) NOT NULL,
  `Balance` int(10) NOT NULL,
  `Statuscard` varchar(25) NOT NULL,
  `Secure code` varchar(10) NOT NULL,
  `Status free` varchar(10) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `line token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Number`, `Name`, `CardId`, `Balance`, `Statuscard`, `Secure code`, `Status free`, `imagename`, `image`, `line token`) VALUES
(28074, 'ดุลภากร แสงเรือง', '0011026268', 0, 'สามารถใช้งานได้', '1234', 'ปิด', 'student.png', '', ''),
(28081, 'พีรพัฒน์ จรูญชาติ', '1', 0, 'สามารถใช้งานได้', '1234', 'เปิด', '28082.jpg', '', ''),
(28082, 'สมหมาย เงินสั่งได้', '0011026268', 100, 'สามารถใช้งานได้', '1234', 'เปิด', '', '', ''),
(30073, 'ดาริกา แสงศรีจันทร์', '0011251174', 120, 'สามารถใช้งานได้', '1234', 'ปิด', 'student.png', '', 'OiAN3IP7ddRu0MiDYfa4UxnvMrTCjN8e9bML60n5j5O');

-- --------------------------------------------------------

--
-- Table structure for table `totalperday`
--

CREATE TABLE `totalperday` (
  `Day` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  `Vat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `totalperday`
--

INSERT INTO `totalperday` (`Day`, `Total`, `Vat`) VALUES
('2019-08-28', '2370', '237'),
('2019-08-31', '0', '0'),
('2019-09-01', '0', '0'),
('2019-09-02', '100', '10'),
('2019-09-03', '1270', '127'),
('2019-09-04', '62240', '6224'),
('2019-09-05', '405', '40.5');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `Id` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Income` varchar(10) NOT NULL,
  `Sale10` varchar(7) NOT NULL,
  `Sale20` varchar(4) NOT NULL,
  `Sale25` varchar(5) NOT NULL,
  `Vat food center` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`Id`, `Name`, `Income`, `Sale10`, `Sale20`, `Sale25`, `Vat food center`) VALUES
(3, 'สมหมาย เงินติดล้อ', '0', '0', '0', '0', '0'),
(4, 'ประยุทธ์ จันทร์อังคาร', '10', '1', '0', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkuseradmin`
--
ALTER TABLE `checkuseradmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `checkuserstudent`
--
ALTER TABLE `checkuserstudent`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `checkvendor`
--
ALTER TABLE `checkvendor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `totalperday`
--
ALTER TABLE `totalperday`
  ADD PRIMARY KEY (`Day`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkuseradmin`
--
ALTER TABLE `checkuseradmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkvendor`
--
ALTER TABLE `checkvendor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
