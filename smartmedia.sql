-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 11:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
`id_announcement` int(11) NOT NULL,
  `title_announcement` varchar(50) DEFAULT NULL,
  `content_announcement` text,
  `date_announcement` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id_announcement`, `title_announcement`, `content_announcement`, `date_announcement`) VALUES
(9, 'yehethh', 'hello world!', '2017-07-06'),
(10, 'ye', 'yeyeyeeye', '2017-07-06'),
(11, 'hhh', 'hhhhh', '2017-07-06'),
(12, 'hhh', 'hhhhh', '2017-07-06'),
(13, 'hihhhii', 'cjshdniaksnd', '2017-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
`id_users` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1: admin, 2: cs, 3:user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id_articles` int(11) NOT NULL,
  `title_articles` varchar(50) NOT NULL,
  `content_articles` text NOT NULL,
  `date_articles` date NOT NULL,
  `views_articles` int(11) NOT NULL DEFAULT '0',
  `category_articles` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE IF NOT EXISTS `article_category` (
`id_category` int(11) NOT NULL,
  `name_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
`id_billing` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `code_bank` int(11) DEFAULT NULL,
  `name_bank` int(11) DEFAULT NULL,
  `no_bank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id_client` int(11) NOT NULL,
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
  `country` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`id_department` int(11) NOT NULL,
  `name_department` varchar(50) DEFAULT NULL,
  `description_department` text
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id_department`, `name_department`, `description_department`) VALUES
(2, 'cvdtgfc', 'gvhtgjhn'),
(3, 'cvfdf', 'mnhjhbnfzcb bhg'),
(6, 'Nur A''yuni Ramadhani', 'zsdsf'),
(7, 'rawr', 'hahahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
`id_package` int(11) NOT NULL,
  `name_package` varchar(50) DEFAULT NULL,
  `detail_package` text,
  `price_package` int(11) DEFAULT NULL,
  `active_period` int(11) DEFAULT NULL,
  `domain` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `bandwidth` int(11) DEFAULT NULL,
  `storage` int(11) DEFAULT NULL,
  `category_package` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`id_payment` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `due_payment` date DEFAULT NULL,
  `total_payment` int(11) DEFAULT NULL,
  `method_payment` int(11) DEFAULT NULL,
  `detail_payment` text,
  `status_payment` int(11) DEFAULT NULL COMMENT '1:confirmed, 0: not confirmed',
  `verified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
`id_site` int(11) NOT NULL,
  `name_site` varchar(50) DEFAULT NULL,
  `address_site` varchar(100) DEFAULT NULL,
  `description_site` text,
  `client_id` text,
  `active_package` text,
  `date_registered` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
`id_theme` int(11) NOT NULL,
  `name_theme` varchar(50) DEFAULT NULL,
  `description_theme` text,
  `preview_1` text,
  `preview_2` text,
  `preview_3` text,
  `file_theme` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
`id` int(10) NOT NULL,
  `id_ticket` int(11) NOT NULL DEFAULT '0',
  `subject_ticket` char(40) DEFAULT NULL,
  `sites` char(40) DEFAULT NULL,
  `priority` varchar(40) NOT NULL,
  `date_ticket` date DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `description` text,
  `status_ticket` char(10) DEFAULT NULL,
  `answered_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `id_ticket`, `subject_ticket`, `sites`, `priority`, `date_ticket`, `department_id`, `client_id`, `description`, `status_ticket`, `answered_id`) VALUES
(1, 1, 'Invoice 73149', NULL, '', '2017-07-03', 0, 0, 'this client is really xzdczsczsdxzx', 'unsolved', 0),
(2, 2, 'Invoice 78972', NULL, '', '2017-07-01', 0, 0, 'this client is really Wowowow', 'solved', 0),
(3, 3, 'Invoice 72372', NULL, '', '2017-06-12', 0, 0, 'this client is really blablablabalablaaaa', 'unpaid', 0),
(4, 0, 'daesfs', 'ursite', 'High', '2017-07-07', 6, NULL, 'afssrfrfg', NULL, NULL),
(5, 0, 'sadasdfd', 'mysite', 'High', '2017-07-07', 3, NULL, 'daefdcedfsdc', 'unsolved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE IF NOT EXISTS `vouchers` (
`id_voucher` int(11) NOT NULL,
  `code_voucher` varchar(50) DEFAULT NULL,
  `name_voucher` varchar(50) DEFAULT NULL,
  `id_package` int(11) DEFAULT NULL,
  `price_voucher` int(11) DEFAULT NULL,
  `active_voucher` int(11) DEFAULT NULL COMMENT '0: not activated, 1: active, 2: used, 3: expired'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
 ADD PRIMARY KEY (`id_announcement`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
 ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id_articles`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
 ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
 ADD PRIMARY KEY (`id_billing`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
 ADD PRIMARY KEY (`id_package`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
 ADD PRIMARY KEY (`id_site`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
 ADD PRIMARY KEY (`id_theme`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
 ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
MODIFY `id_billing` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
