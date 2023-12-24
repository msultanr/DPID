-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for archivehub_dpid
CREATE DATABASE IF NOT EXISTS `archivehub_dpid` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `archivehub_dpid`;

-- Dumping structure for table archivehub_dpid.mst_user_dpid
CREATE TABLE IF NOT EXISTS `mst_user_dpid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `FLAG_ACTIVE` varchar(2) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table archivehub_dpid.mst_user_vendor
CREATE TABLE IF NOT EXISTS `mst_user_vendor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_VENDOR` int(5) DEFAULT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL_VENDOR` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `FLAG_ACTIVE` varchar(1) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table archivehub_dpid.mst_vendor
CREATE TABLE IF NOT EXISTS `mst_vendor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VENDOR_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `FLAG_ACTIVE` varchar(1) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table archivehub_dpid.trn_files_dpid
CREATE TABLE IF NOT EXISTS `trn_files_dpid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `ID_VENDOR` int(11) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `FILE_NAME` varchar(200) NOT NULL,
  `FILE_PATH` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table archivehub_dpid.trn_files_vendor
CREATE TABLE IF NOT EXISTS `trn_files_vendor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `SUBJECT` varchar(250) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `FILE_NAME` varchar(250) NOT NULL,
  `FILE_PATH` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
