-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230131.8d968c66c7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 02:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archivehub_dpid`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_user_dpid`
--

CREATE TABLE `mst_user_dpid` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `FLAG_ACTIVE` varchar(2) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_user_dpid`
--

INSERT INTO `mst_user_dpid` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `FLAG_ACTIVE`, `DATE_ADDED`) VALUES
(1, 'sultan', 'sultan', 'sultan@email.com', 'Y', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user_vendor`
--

CREATE TABLE `mst_user_vendor` (
  `ID` int(11) NOT NULL,
  `ID VENDOR` int(5) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `FLAG_ACTIVE` varchar(1) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_user_vendor`
--

INSERT INTO `mst_user_vendor` (`ID`, `ID VENDOR`, `NAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `FLAG_ACTIVE`, `DATE_ADDED`) VALUES
(1, 1, 'Jordi', 'jordi', 'jordi@dpid.com', 'jordi', 'Y', '1/12/2023 22:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `mst_vendor`
--

CREATE TABLE `mst_vendor` (
  `ID` int(11) NOT NULL,
  `VENDOR_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `FLAG_ACTIVE` varchar(1) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_vendor`
--

INSERT INTO `mst_vendor` (`ID`, `VENDOR_NAME`, `EMAIL`, `ALAMAT`, `FLAG_ACTIVE`, `DATE_ADDED`) VALUES
(1, 'Microsoft', 'microsoft@microsoft.com', 'Jakarta', 'Y', '2023-12-09'),
(2, 'Cisco', 'cisco@cisco.com', 'Jakarta', 'Y', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `trn_files_dpid`
--

CREATE TABLE `trn_files_dpid` (
  `ID` int(11) NOT NULL,
  `ID_VENDOR` int(11) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `FILE_NAME` varchar(200) NOT NULL,
  `FILE_PATH` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trn_files_vendor`
--

CREATE TABLE `trn_files_vendor` (
  `ID` int(11) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `SUBJECT` varchar(250) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `FILE_NAME` varchar(250) NOT NULL,
  `FILE_PATH` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_user_dpid`
--
ALTER TABLE `mst_user_dpid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mst_user_vendor`
--
ALTER TABLE `mst_user_vendor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mst_vendor`
--
ALTER TABLE `mst_vendor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `trn_files_dpid`
--
ALTER TABLE `trn_files_dpid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `trn_files_vendor`
--
ALTER TABLE `trn_files_vendor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_user_dpid`
--
ALTER TABLE `mst_user_dpid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_user_vendor`
--
ALTER TABLE `mst_user_vendor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_vendor`
--
ALTER TABLE `mst_vendor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trn_files_dpid`
--
ALTER TABLE `trn_files_dpid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trn_files_vendor`
--
ALTER TABLE `trn_files_vendor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
