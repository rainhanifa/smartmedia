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

-- Dumping data for table smartmedia.announcements: ~1 rows (approximately)
DELETE FROM `announcements`;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` (`id_announcement`, `title_announcement`, `content_announcement`, `date_announcement`) VALUES
	(14, 'Maintenance Information', 'Terima kasih atas kepercayaan anda akan layanan kami,\r\nUntuk semakin meningkatkan performa jaringan pada server \r\nmailserver yang anda gunakan, maka kami akan melakukan maintenance \r\nnetwork pada :<br><br>Hari / Tanggal : Jumat, 6 Juli 2017<br>Pukul : 22.00 - 06.00 WIB<br><br><span>Selama proses maintenance, jalur network akan berjalan \r\npada jalur network backup sehingga akan terjadi penurunan performa akses\r\n untuk sementara pada server anda tersebut.<br><br>Kami sangat memahami pentingnya aktivitas email anda dan kami upayakan untuk mempercepat proses maintenancenya.</span>\r\n<br><br><br><br>Demikian informasi maintenance kami.\r\nKami sampaikan terima kasih atas perhatian dan kerjasamanya.<br>', '2017-07-10');
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.app_users: ~4 rows (approximately)
DELETE FROM `app_users`;
/*!40000 ALTER TABLE `app_users` DISABLE KEYS */;
INSERT INTO `app_users` (`id_users`, `username`, `fullname`, `email`, `password`, `type`) VALUES
	(1, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'user', 'John Doe', 'user@user.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3),
	(3, 'customercare', 'Customer Care', 'customercare@smartmedia.com', 'E828400B3535C6353E8AA744BDAE8E14', 2),
	(4, 'staff', 'Staff', 'staff@smartmedia.com', '1253208465B1EFA876F982D8A9E73EEF', 2);
/*!40000 ALTER TABLE `app_users` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.articles: ~1 rows (approximately)
DELETE FROM `articles`;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id_articles`, `title_articles`, `content_articles`, `date_articles`, `views_articles`, `category_articles`) VALUES
	(1, 'Pembayaran Invoice Melalui Kartu Kredit', '<span>Panduan ini diperuntukkan bagi anda yang menggunakan kartu kredit<br><br>\r\n</span>Pembayaran via kartu kredit bisa mengikuti panduan berikut\r\n<ol><li>Login ke member area anda</li><li>Masuk ke menu My Invoice dan silakan anda pilih invoice yang hendak dibayarkan<img alt="cek invoice" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/1%20menu%20my%20invoice.png" width="1143" height="357"></li><li>Pada halaman invoice, silakan anda pilih metode pembayaran menjadi kartu kredit<img alt="metode pembayaran" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/2%20pilih%20pembayaran.png" width="622" height="220"><br>Apabila kartu kredit anda mendukung 3D Scure, maka silakan gunakan fitur dan beri tanda centang pada button Using 3D Secure. Bila sudah silakan lanjutkan dengan menggunakan tombol Pay Now.</li><li>Selanjutnya pembayaran anda akan diarahkan ke halaman payment gateway<img alt="payment dateway" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/3%20payment%20gateway.png" width="1056" height="516"></li><li>Silakan anda lengkapi kolom data informasi kartu kredit sesuai data Anda.<img alt="informasi credit card" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/4%20info%20kredit%20card.png" width="786" height="181"></li><li>Setelah data-data yang Anda isikan selesai, klik tombol Confirm Payment dan akan&nbsp; muncul detail informasi order yang Anda lakukan.<img alt="detail info kredit card" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/5%20detail%20info%20order.png" width="1059" height="512"></li><li>Apabila seluruh data telah sesuai maka klik tombol Pay yang ada di halaman tersebut.<img alt="pay" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/6%20pay.png" width="1067" height="306"></li><li>Untuk pembayaran menggunakan 3D Secure akan muncul sebuah halaman popout sebagai berikut<img alt="issue bank" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/7%20issue%20bank.png" width="765" height="556"></li><li>\r\n<span>Ketika halaman ini muncul, pada ponsel Anda akan mendapatkan popout \r\nmessage atau sms yang berisi kode konfirmasi. Silakan masukkan kode \r\nkonfirmasi pada halaman tersebut dan klik OK<img alt="complete" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/8%20complete.png" width="1037" height="303"><br><br></span>\r\n</li><li>Jika kode konfirmasi yang anda masukkan benar, maka akan muncul \r\npesan bahwa pembayaran anda telah berhasil dan silakan ditunggu untuk \r\nproses berikut.<img alt="setting" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/9%20pembayaran%20in%20proses.png" width="613" height="214"></li><li>Anda akan secara otomatis diarahkan ke halaman invoice anda sebelumnya dengan status invoice sudah terpaid&nbsp;<img alt="" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/9%20status%20terpaid.png" width="798" height="580"></li></ol><br>', '2017-07-10', 0, 5);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table smartmedia.article_category
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE IF NOT EXISTS `article_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table smartmedia.article_category: ~6 rows (approximately)
DELETE FROM `article_category`;
/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
INSERT INTO `article_category` (`id_category`, `name_category`) VALUES
	(1, 'Hosting'),
	(2, 'Domain'),
	(3, 'Web Builder'),
	(4, 'Email'),
	(5, 'Pembayaran'),
	(6, 'Account Management');
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.billing: ~0 rows (approximately)
DELETE FROM `billing`;
/*!40000 ALTER TABLE `billing` DISABLE KEYS */;
/*!40000 ALTER TABLE `billing` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.clients: ~0 rows (approximately)
DELETE FROM `clients`;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table smartmedia.departments
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id_department` int(11) NOT NULL AUTO_INCREMENT,
  `name_department` varchar(50) DEFAULT NULL,
  `description_department` text,
  PRIMARY KEY (`id_department`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table smartmedia.departments: ~3 rows (approximately)
DELETE FROM `departments`;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id_department`, `name_department`, `description_department`) VALUES
	(8, 'Technical Support', 'Pertanyaan mengenai permasalahan teknis layanan IDCloudHost.'),
	(9, 'Sales Department', 'Pertanyaan mengenai produk IDCloudHost dapat di tanyakan disini.'),
	(10, 'Billing Support', 'Pertanyaan seputar billing, upgrade paket, komfirmasi pembayaran dan biaya layanan');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.packages: ~0 rows (approximately)
DELETE FROM `packages`;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.payments: ~0 rows (approximately)
DELETE FROM `payments`;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.sites: ~0 rows (approximately)
DELETE FROM `sites`;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.theme: ~0 rows (approximately)
DELETE FROM `theme`;
/*!40000 ALTER TABLE `theme` DISABLE KEYS */;
/*!40000 ALTER TABLE `theme` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.tickets: ~2 rows (approximately)
DELETE FROM `tickets`;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` (`id`, `id_ticket`, `subject_ticket`, `sites`, `priority`, `date_ticket`, `department_id`, `client_id`, `description`, `status_ticket`, `answered_id`) VALUES
	(6, 0, 'Website saya kok ga muncul-muncul', 'ursite', 'High', '2017-07-10', 8, NULL, 'Website saya ga muncul-muncul, need help', 'unsolved', NULL),
	(7, 0, 'Sudah bayar invoice 123', 'mysite', 'High', '2017-07-10', 10, NULL, '', 'unsolved', NULL);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;

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

-- Dumping data for table smartmedia.vouchers: ~0 rows (approximately)
DELETE FROM `vouchers`;
/*!40000 ALTER TABLE `vouchers` DISABLE KEYS */;
/*!40000 ALTER TABLE `vouchers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
