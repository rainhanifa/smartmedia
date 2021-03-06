-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 07:00 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id_announcement` int(11) NOT NULL,
  `title_announcement` varchar(50) DEFAULT NULL,
  `content_announcement` text,
  `date_announcement` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id_announcement`, `title_announcement`, `content_announcement`, `date_announcement`) VALUES
(14, 'Maintenance Information', 'Terima kasih atas kepercayaan anda akan layanan kami,\r\nUntuk semakin meningkatkan performa jaringan pada server \r\nmailserver yang anda gunakan, maka kami akan melakukan maintenance \r\nnetwork pada :<br><br>Hari / Tanggal : Jumat, 6 Juli 2017<br>Pukul : 22.00 - 06.00 WIB<br><br><span>Selama proses maintenance, jalur network akan berjalan \r\npada jalur network backup sehingga akan terjadi penurunan performa akses\r\n untuk sementara pada server anda tersebut.<br><br>Kami sangat memahami pentingnya aktivitas email anda dan kami upayakan untuk mempercepat proses maintenancenya.</span>\r\n<br><br><br><br>Demikian informasi maintenance kami.\r\nKami sampaikan terima kasih atas perhatian dan kerjasamanya.<br>', '2017-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1: admin, 2: staff, 3:user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id_users`, `username`, `fullname`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', 'John Doe', 'user@user.com', 'EE11CBB19052E40B07AAC0CA060C23EE', 3),
(3, 'customercare', 'Customer Care', 'customercare@smartmedia.com', 'E828400B3535C6353E8AA744BDAE8E14', 2),
(4, 'staff', 'Staff', 'staff@smartmedia.com', '1253208465B1EFA876F982D8A9E73EEF', 2),
(8, 'andrea@gmail.com', 'Andrea William', 'andrea@gmail.com', '1c42f9c1ca2f65441465b43cd9339d6c', 3),
(9, 'luqmanppmh@gmail.com', 'Luqman Hakim', 'luqmanppmh@gmail.com', '4781c13b4bf9b7288a343fd274ff0310', 3),
(10, 'tes@gmail', 'tes tes', 'tes@gmail', '21232f297a57a5a743894a0e4a801fc3', 3),
(11, 'ibnusuhaemy@gmail.com', 'Ibnu Suhaemy', 'ibnusuhaemy@gmail.com', '195ace8d50de761419faf08845304398', 3),
(12, 'andyzain@gmail.com', 'Andy Zain', 'andyzain@gmail.com', '15c4b113a3819762f3de99c270d082ab', 3),
(14, 'virdana20@gmail.com', 'Dimas Virdana', 'virdana20@gmail.com', NULL, 3),
(15, 'soroiku2@gmail.com', 'muhammad luqman', 'soroiku2@gmail.com', NULL, 3),
(16, 'soroiku@yahoo.co.id', 'muhammad luqman', 'soroiku@yahoo.co.id', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `title_articles` varchar(50) NOT NULL,
  `content_articles` text NOT NULL,
  `date_articles` date NOT NULL,
  `views_articles` int(11) NOT NULL DEFAULT '0',
  `category_articles` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_articles`, `title_articles`, `content_articles`, `date_articles`, `views_articles`, `category_articles`) VALUES
(1, 'Pembayaran Invoice Melalui Kartu Kredit', '<span>Panduan ini diperuntukkan bagi anda yang menggunakan kartu kredit<br><br>\r\n</span>Pembayaran via kartu kredit bisa mengikuti panduan berikut\r\n<ol><li>Login ke member area anda</li><li>Masuk ke menu My Invoice dan silakan anda pilih invoice yang hendak dibayarkan<img alt="cek invoice" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/1%20menu%20my%20invoice.png" width="1143" height="357"></li><li>Pada halaman invoice, silakan anda pilih metode pembayaran menjadi kartu kredit<img alt="metode pembayaran" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/2%20pilih%20pembayaran.png" width="622" height="220"><br>Apabila kartu kredit anda mendukung 3D Scure, maka silakan gunakan fitur dan beri tanda centang pada button Using 3D Secure. Bila sudah silakan lanjutkan dengan menggunakan tombol Pay Now.</li><li>Selanjutnya pembayaran anda akan diarahkan ke halaman payment gateway<img alt="payment dateway" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/3%20payment%20gateway.png" width="1056" height="516"></li><li>Silakan anda lengkapi kolom data informasi kartu kredit sesuai data Anda.<img alt="informasi credit card" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/4%20info%20kredit%20card.png" width="786" height="181"></li><li>Setelah data-data yang Anda isikan selesai, klik tombol Confirm Payment dan akan&nbsp; muncul detail informasi order yang Anda lakukan.<img alt="detail info kredit card" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/5%20detail%20info%20order.png" width="1059" height="512"></li><li>Apabila seluruh data telah sesuai maka klik tombol Pay yang ada di halaman tersebut.<img alt="pay" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/6%20pay.png" width="1067" height="306"></li><li>Untuk pembayaran menggunakan 3D Secure akan muncul sebuah halaman popout sebagai berikut<img alt="issue bank" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/7%20issue%20bank.png" width="765" height="556"></li><li>\r\n<span>Ketika halaman ini muncul, pada ponsel Anda akan mendapatkan popout \r\nmessage atau sms yang berisi kode konfirmasi. Silakan masukkan kode \r\nkonfirmasi pada halaman tersebut dan klik OK<img alt="complete" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/8%20complete.png" width="1037" height="303"><br><br></span>\r\n</li><li>Jika kode konfirmasi yang anda masukkan benar, maka akan muncul \r\npesan bahwa pembayaran anda telah berhasil dan silakan ditunggu untuk \r\nproses berikut.<img alt="setting" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/9%20pembayaran%20in%20proses.png" width="613" height="214"></li><li>Anda akan secara otomatis diarahkan ke halaman invoice anda sebelumnya dengan status invoice sudah terpaid&nbsp;<img alt="" src="https://assets.beon.co.id/files/WHMCS/knowledge%20base/Panduan%20Pembayaran%20Kartu%20Kredit/9%20status%20terpaid.png" width="798" height="580"></li></ol><br>', '2017-07-10', 5, 5),
(2, 'Cara Restore Website Melalui CPanel', '<h2>Pendahuluan</h2>Restore merupakan suatu fitur \r\nyang dapat membantu Anda untuk mengembalikan file yang sudah dilakukan \r\nbackup sebelumnya. File Restore akan menyamakan kondisi saat Anda \r\nmelakukan backup sehingga akan membantu Anda jika terjadi hal-hal yang \r\ntidak diinginkan.&nbsp;<h2>Persiapan</h2>Silahkan\r\n menyiapkan file backup yang telah dilakukan sebelumnya untuk \r\nmempermudah Anda dalam melakukan kegiatan restore website Anda.&nbsp;<h2>Cara Restore Website Melalui cPanel</h2>Berikut ini adalah langkah-langkah bagaimana Cara Restore Website Melalui cPanel&nbsp; IDCloudHost :<ol><li>Silahkan menuju Cpanel akun Website Anda dengan mangakses <span>“<a href="http://domainanda.com" target="" rel="nofollow">domainanda.com</a>/cpanel”</span><br><img alt="Login Cpanel IDcloudHost" src="https://idcloudhost.com/wp-content/uploads/2016/07/Login-Cpanel-IDcloudHost.png" width="333" height="401"></li><li>Kemudian, pada bagian <code>Files</code>, klik <code>Backup Wizard</code><br>\r\n<img alt="Cara Restore Website Melalui cPanel 2" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Restore-Website-Melalui-cPanel-2.png" width="100"></li><li>Ada beberapa Proses yang akan dilakukan untuk melakukan restore website Anda, yang pertama Silahkan pilih <code>Restore</code><br>\r\n<img alt="Cara Restore Website Melalui cPanel 3" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Restore-Website-Melalui-cPanel-3.png" width="100"></li><li>Kemudian, Silahkan memilih Tipe Restore yang telah Anda lakukan sesuai dengan file backup Anda (Home Directiory, My SQL Database, dan Email Forward / Filter)<br>\r\n<img alt="Cara Restore Website Melalui cPanel 4" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Restore-Website-Melalui-cPanel-4.png" width="100"></li><li>Lalu, pilih file backup Anda. Klik <code>Upload</code> untuk memulai proses restore.<br>\r\n<img alt="Cara Restore Website Melalui cPanel 5" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Restore-Website-Melalui-cPanel-5.png" width="100"></li><li>Sistem akan melakukan proses restore pada website Anda, Silahkan tunggu hingga selesai.</li></ol>&nbsp;<h2>Penutup</h2>Dalam\r\n melakukan proses restore, Anda membutuhkan waktu beberapa saat untuk \r\nmendapatkan hasilnya. Silahkan melakukan backup secara berkala untuk \r\nmenjamin keamanan Data dan informasi website Anda.<br>', '2017-08-30', 5, 1),
(3, 'Mengatur DNS di CPanel', '<h2>Pendahuluan</h2>DNS atau Domain Name System \r\nmerupakan distribusi penamaan system untuk computer, service, atau hanya\r\n connected resouse ke internet atau sebuah jaringan. DNS sangat erat \r\nkaitannya dengan domain, karena jika terjadi kesalahan dalam settingnya \r\nakan menyebabkan domain tidak bisa diakses atau bisa juga tidak bisa \r\nmenjalankan fungsi sebagaimana mestinya.&nbsp;<h2>Cara Setting DNS Melalui cPanel</h2>Berikut ini adalah langkah-langkah bagaimana Cara Setting DNS Melalui cPanel IDCloudHost :<ol><li>Silahkan menuju Cpanel akun Website Anda dengan mangakses <span>“<a href="http://domainanda.com" target="" rel="nofollow">domainanda.com</a>/cpanel”</span><br><img alt="Cara Setting DNS Melalui cPanel 1" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-1.png" width="304" height="418"></li><li>Jika sudah berhasil masuk ke cpanel, Pada bagian <code>Domains</code>, Klik <code>Advanced Zone Editor</code><br><img alt="Cara Setting DNS Melalui cPanel 2 copy" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-2-copy.png" width="1000" height="227"></li><li>Pada halaman Advance Zone Editor anda dapat memanage DNS record yang Anda inginkan.</li><li>Silahkan Pilih <code>Record</code> yang Anda Inginkan, terdapat beberapa tipe DNS diantaranya :<ul><li><code>A record</code>\r\n atau catatan alamat memetakan sebuah nama host ke alamat IP 32-bit \r\n(untuk IPv4). Pada bagian ini anda dapat mengisi nama domain, TTL (Time \r\nTo Live), dan alamat IP server anda. Lalu pilih Add record.<br>\r\n<img alt="Cara Setting DNS Melalui cPanel 3" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-3.png" width="100"></li><li><code>AAAA record</code>\r\n atau catatan alamat IPv6 memetakan sebuah nama host ke alamat IP \r\n128-bit (untuk IPv6). Pada bagian ini anda dapat mengisi nama domain, \r\nTTL dan IPV6 dari server. Kemudian pilih Add record.<br>\r\n<img alt="Cara Setting DNS Melalui cPanel 4" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-4.png" width="100"></li><li><code>CNAME record</code>\r\n atau catatan nama kanonik membuat alias untuk nama domain. Domain yang \r\ndi-alias-kan memiliki seluruh subdomain dan record DNS seperti aslinya. \r\nPada bagian ini anda dapat mengisi nama domain anda, isi TTL lalu isikan\r\n CNAME atau domain alias yang anda inginkan. Lalu pilih Add Record.<br>\r\n<img alt="Cara Setting DNS Melalui cPanel 5" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-5.png" width="100"></li><li><code>SRV record</code>\r\n adalah catatan lokasi secara umum. Pada bagian ini anda dapat mengisi \r\nnama domain, TTL, Priority, Weight, Port yang digunakan, dan Target \r\nalamat server. Lalu pilih Add Record.<br>\r\n<img alt="Cara Setting DNS Melalui cPanel 6" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-6.png" width="100"></li><li><code>Catatan TXT</code>\r\n mengijinkan administrator untuk memasukan data acak ke dalam catatan \r\nDNS, catatan ini juga digunakan di spesifikasi Sender Policy Framework. \r\nPada bagian ini anda dapat mengisi nama domain, TTL kemudian path server\r\n tersebut. Setelah itu pilih Add record.<br>\r\n<img alt="Cara Setting DNS Melalui cPanel 7" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-7.png" width="100"></li></ul></li><li>Anda dapat melihat recordsnya pada bagian bawah,<br>\r\n<img alt="Cara Setting DNS Melalui cPanel 9" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-9.png" width="100"></li><li>Anda juga dapat mengedit (klik <code>Edit</code>) dan menghapus (klik <code>Delete</code>) records pada tombol yang ada disebelah kanan list Records<br><img alt="Cara Setting DNS Melalui cPanel 10" src="https://idcloudhost.com/wp-content/uploads/2016/07/Cara-Setting-DNS-Melalui-cPanel-10.png" width="256" height="120"></li></ol>&nbsp;<h2>Penutup</h2>Mengatur\r\n DNS bertujuan untuk mengarahkan domain Name System Server ke bentuk IP \r\nAddress dan Domain. Hal itu akan mempermudah Anda melakukan pengaturan \r\nke server hosting<br>', '2017-08-30', 2, 2),
(4, 'Mengatasi Mercusuar Saat Akses Website', 'Pernahkan jika Anda mengakses suatu website malah muncul halaman \r\nMercusuar.info ? Biasanya Untuk tampilan website mercusuar adalah \r\ntampilan error dari pengguna koneksi Provider internet milik telkom \r\nseperti speedy atau indihome, sedangkan untuk network error dialami oleh\r\n pengguna koneksi internet selain provider milik telkom tersebut. Error \r\ntersebut kebanyakan terjadi karena sedang ada gangguan DNS di koneksi \r\ninternet yang anda gunakan.<img alt="" src="https://idcloudhost.com/wp-content/uploads/2017/02/Penyebab-dan-Mengatasi-Mercusuar-Info-Saat-Akses-Website.png" width="625" height="297">Cobalah beberapa hal berikut ini ketika hal tersebut terjadi:<ul><li>Refresh browser Anda beberapa kali</li><li>Hapus semua cache dan cookies pada browser Anda</li><li>Clear/flush\r\n DNS records komputer Anda. Jika Anda menggunakan Windows, klik Start, \r\nketik cmd pada kolom Search (masuk ke DOS Prompt), lalu ketik \r\nipconfig/renew</li><li>Coba Gunakan koneksi internet selain milik Provider Telkom</li></ul><br>', '2017-08-30', 4, 1),
(5, 'Metode Pembayaran Layanan Smartmedia', '<h2>Metode Pembayaran di IDCloudHost</h2>IDCloudHost\r\n menerima pembayaran melalui Transfer Bank (Bank Mandiri, Bank Mandiri \r\nSyariah, Bank BCA, Bank BNI, dan Bank BRI), PayPal, kartu kredit melalui\r\n PayPal, Bitcoin, Skrill, dan Western Union.<br><img alt="Metode Pembayaran IDCloudHost - PT Cloud Hosting Indonesia" src="https://idcloudhost.com/wp-content/uploads/2016/07/Metode-Pembayaran-IDCloudHost.png" width="396" height="213">&nbsp;<h2>Bagaimana Cara agar Layanan Otomatis Aktif?</h2>Layanan\r\n akan otomatis aktif jika Anda melakukan Transfer sesuai dengan jumlah \r\nyang ditransfer dan menuliskan berita acara dengan benar<br>', '2017-08-30', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id_category`, `name_category`) VALUES
(1, 'Hosting'),
(2, 'Domain'),
(3, 'Web Builders'),
(4, 'Email'),
(5, 'Pembayaran'),
(6, 'Manajemen Akun');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id_billing` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `address_1` varchar(50) DEFAULT NULL,
  `address_2` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(50) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id_billing`, `client_id`, `first_name`, `last_name`, `company_name`, `address_1`, `address_2`, `city`, `region`, `zip_code`, `email`, `phone`) VALUES
(1, 6, 'Luqman', 'Hakim', 'Illiyin Studio', 'Jl. Gading Pesantren no. 38', 'Lowokwaru', 'Malang', 'Jawa Timur', 65115, 'luqmanppmh@gmail.com', '085941020493'),
(2, 6, 'Luqman', 'Hakim', 'Illiyin Studio', '', '', 'Malang', 'Jawa Timur', 65115, 'luqmanppmh@gmail.com', '085941020493'),
(3, 6, 'Luqman', 'Hakim', 'Illiyin Studio', 'Jl. Gading Pesantren no. 38', 'Lowokwaru', 'Malang', 'Jawa Timur', 65115, 'luqmanppmh@gmail.com', '085941020493'),
(4, 6, 'Luqman', 'Hakim', 'Illiyin Studio', 'Jl. Gading Pesantren no. 38', 'Lowokwaru', 'Malang', 'Jawa Timur', 65115, 'luqmanppmh@gmail.com', '085941020493');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address_1` varchar(50) DEFAULT NULL,
  `address_2` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `date_registered` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `user_id`, `first_name`, `last_name`, `company_name`, `phone`, `email`, `address_1`, `address_2`, `city`, `region`, `zip_code`, `country`, `date_registered`) VALUES
(3, 7, 'Rue', 'Roe', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '2017-08-09'),
(4, 2, 'User', 'Dummy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09'),
(5, 8, 'Andrea', 'William', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09'),
(6, 9, 'Luqman', 'Hakim', 'Illiyin Studio', '085941020493', NULL, '', '', 'Malang', 'Jawa Timur', '65115', 'Indonesia', '2017-07-10'),
(7, 10, 'tes', 'tes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09'),
(8, 11, 'Ibnu', 'Suhaemy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09'),
(9, 12, 'Andy', 'Zain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09'),
(11, 14, 'Dimas', 'Virdana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 15, 'muhammad', 'luqman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 16, 'muhammad', 'luqman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients_package`
--

CREATE TABLE `clients_package` (
  `id_package` int(11) NOT NULL,
  `client_id` int(11) NOT NULL DEFAULT '0',
  `domain` int(11) NOT NULL DEFAULT '0',
  `email` int(11) NOT NULL DEFAULT '0',
  `bandwidth` int(11) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `active_period` int(11) NOT NULL DEFAULT '0',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_package`
--

INSERT INTO `clients_package` (`id_package`, `client_id`, `domain`, `email`, `bandwidth`, `storage`, `active_period`, `start_date`, `end_date`) VALUES
(1, 6, 6, 1, 200, 200, 51, '2017-08-02', '2017-08-31'),
(2, 8, 1, 1, 200, 200, 7, '2017-08-03', '2017-08-10'),
(3, 9, 1, 1, 200, 200, 7, '2017-08-03', '2017-08-10'),
(4, 11, 1, 1, 200, 200, 7, '2017-10-03', '1970-01-01'),
(5, 12, 1, 1, 200, 200, 30, '2017-10-04', '1970-01-01'),
(6, 13, 3, 3, 1, 1024, 90, '2017-10-04', '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id_department` int(11) NOT NULL,
  `name_department` varchar(50) DEFAULT NULL,
  `description_department` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id_department`, `name_department`, `description_department`) VALUES
(8, 'Technical Support', 'Pertanyaan mengenai permasalahan teknis layanan IDCloudHost.'),
(9, 'Sales Department', 'Pertanyaan mengenai produk IDCloudHost dapat di tanyakan disini.'),
(10, 'Billing Support', 'Pertanyaan seputar billing, upgrade paket, komfirmasi pembayaran dan biaya layanan');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id_package` int(11) NOT NULL,
  `name_package` varchar(50) DEFAULT NULL,
  `detail_package` text,
  `price_package` int(11) DEFAULT NULL,
  `active_period` int(11) DEFAULT NULL,
  `domain` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `bandwidth` int(11) DEFAULT NULL,
  `storage` int(11) DEFAULT NULL,
  `category_package` int(11) DEFAULT NULL COMMENT '0: quota, 1: extension, 2: new package'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id_package`, `name_package`, `detail_package`, `price_package`, `active_period`, `domain`, `email`, `bandwidth`, `storage`, `category_package`) VALUES
(1, 'Personal', 'personal package', 50000, 30, 1, 1, 200, 200, 2),
(2, 'Enterprise', 'Package for enterprise', 189000, 90, 3, 3, 1, 1024, 2),
(3, 'Free Trial', 'Paket gratis untuk percobaan', 0, 7, 1, 1, 200, 200, 2),
(4, 'Masa Aktif 30 Hari', 'Paket perpanjangan masa aktif', 30000, 30, 0, 0, 0, 0, 1),
(5, 'Masa Aktif 90 Hari', '', 75000, 90, 0, 0, 0, 0, 1),
(6, 'Masa Aktif 6 bulan', 'Masa aktif 6 bulan (180 hari)', 150000, 180, 0, 0, 0, 0, 1),
(7, 'Masa Aktif 1 Tahun', 'Masa aktif 365 hari', 300000, 365, 0, 0, 0, 0, 1),
(8, 'Kuota++ 200 MB', 'Tambah storage 200 MB', 50000, 0, 0, 0, 0, 200, 0),
(9, 'Masa Aktif 7 Hari', 'Perpanjangan 7 hari', 10000, 7, 0, 0, 0, 0, 1),
(10, 'Kuota++ 500 MB', 'Tambah storage 500 MB', 90000, 0, 0, 0, 0, 500, 0),
(11, 'Irit 25.000', 'Paket irit menambah 1 domain dan masa aktif 7 hari ', 25000, 7, 1, 0, 0, 0, 0),
(12, 'Irit 35.000', 'Paket irit menambah 1 domain dan 14 hari masa aktif', 35000, 14, 1, 0, 0, 0, 0),
(13, 'Irit 70.000', '', 50000, 30, 1, 0, 0, 0, 0),
(14, 'Happy 50.000', '', 50000, 7, 2, 0, 0, 0, 0),
(15, 'Happy 75.000', '', 75000, 14, 2, 0, 0, 0, 0),
(16, 'Happy 100.000', '', 100000, 30, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id_site` int(11) NOT NULL,
  `name_site` varchar(50) DEFAULT NULL,
  `address_site` varchar(100) DEFAULT NULL,
  `description_site` text,
  `client_id` text,
  `date_registered` date DEFAULT NULL,
  `status_site` int(11) DEFAULT NULL COMMENT '0: non active ; 1: active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id_site`, `name_site`, `address_site`, `description_site`, `client_id`, `date_registered`, `status_site`) VALUES
(1, 'John Doe\'s Site', 'johndoe', 'John Doe\'s Site', '1', '2017-08-09', NULL),
(2, 'John Doe\'s Site', 'johndoe', 'John Doe\'s Site', '2', '2017-08-09', NULL),
(3, 'Dummy', 'dummysite', 'Dummy Website', NULL, '2017-07-26', NULL),
(4, 'Second Site', 'second', 'Second Website', NULL, '2017-07-26', NULL),
(5, 'Beni Website', 'mhandharbeni', 'Website milik beni', NULL, '2017-08-09', NULL),
(6, 'Cakmen', 'cakmenajah', 'Cakmen AJah', '6', '2017-07-31', NULL),
(7, 'Website Tes', 'tesweb', 'Website Tes', '7', '2017-08-01', NULL),
(8, 'Ibnu Suhaemy', 'ibnusuhaemy', 'Website Pribadi Ibnu Suhaemy', '8', '2017-08-03', NULL),
(9, 'Andy Robot', 'andyzain', 'Website jualan robot Andy Zain', '9', '2017-08-03', NULL),
(10, 'Dimas Gundam', 'dimasgundam', '', NULL, '2017-10-04', NULL),
(11, 'websiteku', 'websiteku', 'tesss', '12', '2017-10-04', NULL),
(12, 'jhonken', 'testing', '', '13', '2017-10-04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_mails`
--

CREATE TABLE `site_mails` (
  `id_mail` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `address_mail` varchar(50) NOT NULL,
  `date_registered` date NOT NULL,
  `date_expired` datetime NOT NULL,
  `status_mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id_staff` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_staff` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id_theme` int(11) NOT NULL,
  `name_theme` varchar(50) DEFAULT NULL,
  `description_theme` text,
  `preview_1` text,
  `preview_2` text,
  `preview_3` text,
  `file_theme` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id_theme`, `name_theme`, `description_theme`, `preview_1`, `preview_2`, `preview_3`, `file_theme`) VALUES
(1, 'Photography', 'an elegant theme for photography', 'upload/theme/1.jpg', 'upload/theme/1a.jpg', 'upload/theme/11.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(10) NOT NULL,
  `subject_ticket` char(40) DEFAULT NULL,
  `priority_ticket` tinyint(40) NOT NULL COMMENT '0: low, 1: normal/medium, 2: high',
  `date_open_ticket` datetime DEFAULT NULL,
  `date_close_ticket` datetime NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `status_ticket` tinyint(10) DEFAULT NULL COMMENT '0: open, 1: answered, 2: customer reply, 3: closed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `subject_ticket`, `priority_ticket`, `date_open_ticket`, `date_close_ticket`, `department_id`, `client_id`, `site_id`, `status_ticket`) VALUES
(1, 'Konfirmasi Pembayaran Paket Happy', 0, '2017-08-21 00:00:00', '2017-08-24 00:00:00', 10, 6, 6, 3),
(2, 'masalah tampilan', 0, '2017-10-04 09:21:39', '0000-00-00 00:00:00', 8, 12, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_attachments`
--

CREATE TABLE `ticket_attachments` (
  `id_attachment` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `file_attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `id_detail` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_detail` datetime NOT NULL,
  `message_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`id_detail`, `ticket_id`, `user_id`, `date_detail`, `message_detail`) VALUES
(1, 1, 9, '2017-08-21 00:00:00', 'saya udah bayar paket happy tapi pas dicek belum dikonfirmasi. mohon bantuannya soalnya website saya mau habis masa aktifnya, makasih<br>'),
(2, 1, 1, '2017-08-22 13:49:31', 'Kami akan segera melakukan konfirmasi untuk pembayaran Anda<br>'),
(3, 1, 1, '2017-08-22 13:57:51', 'Terima kasih atas kesabarannya, kami telah melakukan konfirmasi pada pesanan Anda. Selamat menikmati :)<br><br>Admin<br>Smartmedia<br>'),
(4, 2, 15, '2017-10-04 09:21:39', 'tess');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date_transaction` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `method` int(11) DEFAULT NULL COMMENT '0: unpaid, 1: voucher, 2: transfer, 3: veritrans',
  `detail` text,
  `billing_id` int(11) DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `status_payment` int(11) DEFAULT NULL COMMENT '0: unpaid, 1: paid not confirmed, 2: paid confirmed, 3: voucher, 4: canceled, 5: cancelled',
  `verified_by` int(11) DEFAULT NULL,
  `verified_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `client_id`, `date_transaction`, `due_date`, `total`, `method`, `detail`, `billing_id`, `date_payment`, `status_payment`, `verified_by`, `verified_date`) VALUES
(1, 6, '2017-08-02', '2017-08-02', 55000, 1, 'AO81231557771', 1, '2017-08-02', 2, 1, '2017-08-11'),
(2, 8, '2017-08-03', '2017-08-03', 0, 1, 'PAKETHORE7', NULL, '2017-08-03', 2, 1, '2017-08-10'),
(3, 9, '2017-08-03', '2017-08-03', 0, 1, 'PAKETHORE7', NULL, '2017-08-03', 2, 1, '2017-08-03'),
(5, 6, '2017-08-11', '2017-11-09', 50000, 0, 'Pembelian Happy 50.000 via web', 1, '2017-08-11', 2, 1, '2017-08-23'),
(6, 6, '2017-08-11', '2017-11-09', 100000, 2, 'Pembelian Happy 100.000 via web', 2, '2017-08-11', 1, NULL, NULL),
(7, 6, '2017-08-11', '2017-11-09', 30000, 2, 'Pembelian Masa Aktif 30 Hari via web', 3, '2017-08-11', 2, 1, '2017-08-11'),
(8, 6, '2017-08-11', '2017-11-09', 50000, 2, 'Pembelian Irit 70.000 via web', 4, NULL, 0, NULL, NULL),
(9, 11, '2017-10-03', '2017-10-03', 0, 1, 'FREETRIAL7', NULL, '2017-10-03', 2, 1, NULL),
(10, 12, '2017-10-04', '2017-10-04', 50000, 1, 'STARTERMERDEKA', NULL, '2017-10-04', 2, 1, NULL),
(11, 13, '2017-10-04', '2017-10-04', 189000, 1, 'STARTERENTERPRISE', NULL, '2017-10-04', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id_voucher` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_package` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0: not activated, 1: active, 2: used, 3: expired',
  `expired_date` datetime DEFAULT NULL,
  `used_at` datetime DEFAULT NULL,
  `used_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id_voucher`, `code`, `name`, `id_package`, `price`, `status`, `expired_date`, `used_at`, `used_by`) VALUES
(2, 'AO81231557772', 'Starter Personal', 1, 50000, 1, NULL, '2017-07-31 13:07:02', 0),
(3, 'PAKETHORE7', 'Voucher Paket Hore 7 Hari', 3, 0, 1, NULL, '2017-08-01 15:07:49', 9),
(4, 'PAKETHORE7', 'Voucher Paket Hore 7 Hari', 3, 0, 1, NULL, '2017-08-02 15:05:11', 8),
(5, 'PAKETHORE7', 'Voucher Paket Hore 7 Hari', 3, 0, 1, NULL, '2017-08-03 08:04:20', NULL),
(6, 'KUOTA200MB', 'Kuota 200 MB', 8, 30000, 0, NULL, NULL, NULL),
(7, 'KUOTA200MB', 'Kuota 200 MB', 8, 30000, 0, '2017-10-03 21:00:00', NULL, NULL),
(8, 'KUOTA200MB', 'Kuota++ 200 MB', 8, 30000, 0, '2017-12-31 23:59:59', NULL, NULL),
(9, 'TAMBAH30HARI', 'Tambah 30 Hari', 4, 25000, 0, '2018-12-31 23:59:59', NULL, NULL),
(10, 'PAKETHORE7', 'Free Trial Paket Hore 7 Hari', 3, 0, 1, NULL, '2017-08-03 15:24:22', NULL),
(11, 'TAMBAH90HARI', 'Voucher Extension 90 hari', 5, 90000, 0, '2018-12-31 23:59:59', NULL, NULL),
(12, 'AO81231557771', '', 1, 50000, 0, NULL, NULL, NULL),
(13, 'AO81231557773', 'Starter', 1, 50000, 0, '2017-12-31 23:59:59', NULL, NULL),
(14, 'AO81231557774', 'Starter Enterprise', 2, 100000, 0, '2017-12-31 23:59:59', NULL, NULL),
(15, 'STARTERMERDEKA', 'Starter Merdeka', 1, 150000, 1, '2017-12-31 23:59:59', '2017-10-04 09:15:45', 12),
(16, 'FREETRIAL7', 'FREE TRIAL', 3, 0, 1, '2017-12-31 23:59:59', '2017-10-03 19:37:47', 11),
(17, 'STARTERENTERPRISE', 'Starter Ultimate', 2, 1000000, 1, '2018-12-31 23:59:59', '2017-10-04 09:36:35', 13);

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
-- Indexes for table `clients_package`
--
ALTER TABLE `clients_package`
  ADD PRIMARY KEY (`id_package`);

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
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id_site`);

--
-- Indexes for table `site_mails`
--
ALTER TABLE `site_mails`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD PRIMARY KEY (`id_attachment`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`);

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
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id_billing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `clients_package`
--
ALTER TABLE `clients_package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `site_mails`
--
ALTER TABLE `site_mails`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  MODIFY `id_attachment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket_details`
--
ALTER TABLE `ticket_details`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
