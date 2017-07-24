-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19-0ubuntu0.16.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for illiyin_sips
CREATE DATABASE IF NOT EXISTS `illiyin_sips` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `illiyin_sips`;

-- Dumping structure for table illiyin_sips.class
CREATE TABLE IF NOT EXISTS `class` (
  `id_class` int(11) NOT NULL AUTO_INCREMENT,
  `name_class` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.class: ~0 rows (approximately)
DELETE FROM `class`;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contacts` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_contacts`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.contacts: ~0 rows (approximately)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.inbox
CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_letter` varchar(50) NOT NULL,
  `date_letter` date NOT NULL,
  `date_registered` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `files` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.inbox: ~0 rows (approximately)
DELETE FROM `inbox`;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.invoice
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_letter` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.invoice: ~0 rows (approximately)
DELETE FROM `invoice`;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.outbox
CREATE TABLE IF NOT EXISTS `outbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_letter` varchar(50) NOT NULL DEFAULT '0',
  `code_letter` varchar(50) NOT NULL DEFAULT '/DUMMY/IS/VII/2017',
  `date` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `recipient_id` varchar(50) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.outbox: ~0 rows (approximately)
DELETE FROM `outbox`;
/*!40000 ALTER TABLE `outbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `outbox` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.payroll
CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_letter` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table illiyin_sips.payroll: ~0 rows (approximately)
DELETE FROM `payroll`;
/*!40000 ALTER TABLE `payroll` DISABLE KEYS */;
/*!40000 ALTER TABLE `payroll` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id_project` int(11) DEFAULT NULL,
  `name_project` varchar(50) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.projects: ~0 rows (approximately)
DELETE FROM `projects`;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.receipt
CREATE TABLE IF NOT EXISTS `receipt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_letter` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table illiyin_sips.receipt: ~0 rows (approximately)
DELETE FROM `receipt`;
/*!40000 ALTER TABLE `receipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `receipt` ENABLE KEYS */;

-- Dumping structure for table illiyin_sips.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '1: super admin, 2: persuratan, 3: manager',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table illiyin_sips.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
