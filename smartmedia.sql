-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18-0ubuntu0.16.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for smartmedia
DROP DATABASE IF EXISTS `smartmedia`;
CREATE DATABASE IF NOT EXISTS `smartmedia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `smartmedia`;

-- Dumping structure for table smartmedia.announcements
DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `id_announcement` int(11) NOT NULL AUTO_INCREMENT,
  `title_announcement` varchar(50) DEFAULT NULL,
  `content_announcement` text,
  `date_announcement` date DEFAULT NULL,
  PRIMARY KEY (`id_announcement`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.app_users
DROP TABLE IF EXISTS `app_users`;
CREATE TABLE IF NOT EXISTS `app_users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1: admin, 2: staff, 3:user',
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.articles
DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_articles` int(11) NOT NULL AUTO_INCREMENT,
  `title_articles` varchar(50) NOT NULL,
  `content_articles` text NOT NULL,
  `date_articles` date NOT NULL,
  `views_articles` int(11) NOT NULL DEFAULT '0',
  `category_articles` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_articles`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.article_category
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE IF NOT EXISTS `article_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.billing
DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `id_billing` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL,
  `code_bank` int(11) DEFAULT NULL,
  `name_bank` int(11) DEFAULT NULL,
  `no_bank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_billing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.clients
DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) NOT NULL DEFAULT '0',
  `company_name` varchar(50) NOT NULL DEFAULT '0',
  `phone_number` varchar(50) NOT NULL DEFAULT '0',
  `address_1` varchar(50) NOT NULL DEFAULT '0',
  `address_2` varchar(50) NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL DEFAULT '0',
  `region` varchar(50) NOT NULL DEFAULT '0',
  `zip_code` varchar(50) NOT NULL DEFAULT '0',
  `country` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.departments
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id_department` int(11) NOT NULL AUTO_INCREMENT,
  `name_department` varchar(50) DEFAULT NULL,
  `description_department` text,
  PRIMARY KEY (`id_department`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.packages
DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id_package` int(11) NOT NULL AUTO_INCREMENT,
  `name_package` varchar(50) DEFAULT NULL,
  `detail_package` text,
  `price_package` int(11) DEFAULT NULL,
  `active_period` int(11) DEFAULT NULL,
  `domain` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `bandwidth` int(11) DEFAULT NULL,
  `storage` int(11) DEFAULT NULL,
  `category_package` int(11) DEFAULT NULL COMMENT '1: quota, 2: extension, 3: new package',
  PRIMARY KEY (`id_package`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.payments
DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `due_payment` date DEFAULT NULL,
  `total_payment` int(11) DEFAULT NULL,
  `method_payment` int(11) DEFAULT NULL,
  `detail_payment` text,
  `status_payment` int(11) DEFAULT NULL COMMENT '1:confirmed, 0: not confirmed',
  `verified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.sites
DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `id_site` int(11) NOT NULL AUTO_INCREMENT,
  `name_site` varchar(50) DEFAULT NULL,
  `address_site` varchar(100) DEFAULT NULL,
  `description_site` text,
  `client_id` text,
  `active_package` text,
  `date_registered` date DEFAULT NULL,
  PRIMARY KEY (`id_site`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.theme
DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(11) NOT NULL AUTO_INCREMENT,
  `name_theme` varchar(50) DEFAULT NULL,
  `description_theme` text,
  `preview_1` text,
  `preview_2` text,
  `preview_3` text,
  `file_theme` text,
  PRIMARY KEY (`id_theme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.tickets
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_ticket` int(11) NOT NULL DEFAULT '0',
  `subject_ticket` char(40) DEFAULT NULL,
  `sites` char(40) DEFAULT NULL,
  `priority` varchar(40) NOT NULL,
  `date_ticket` date DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `description` text,
  `status_ticket` char(10) DEFAULT NULL,
  `answered_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table smartmedia.vouchers
DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE IF NOT EXISTS `vouchers` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `code_voucher` varchar(50) DEFAULT NULL,
  `name_voucher` varchar(50) DEFAULT NULL,
  `id_package` int(11) DEFAULT NULL,
  `price_voucher` int(11) DEFAULT NULL,
  `active_voucher` int(11) DEFAULT NULL COMMENT '0: not activated, 1: active, 2: used, 3: expired',
  PRIMARY KEY (`id_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
