-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 06:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `comment` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `article_id`, `name`, `email`, `comment`, `date`) VALUES
(13, 0, 'rega', 'rega@gmail.com', 'web ini sangat bagus :v', '2018-11-03 11:35:52'),
(14, 0, 'pamukti', 'pamukti@gmail.com', 'Website yang cukup profesional dan baik', '2018-11-03 17:11:17'),
(15, 0, 'wahendra', 'aditya87@gmail.com', 'website ini bisa membantu kita untuk mengatahui baju" terbaru dan kita bisa menemukan baju yang bagus di sini', '2018-11-09 07:24:50'),
(16, 0, 'aji', 'aji@gmail.com', 'ini website yang bagus', '2018-11-14 20:21:49'),
(17, 0, 'sunya kania', 'sunyakania@yahoo.co.id', 'Web yang menarik', '2019-07-31 21:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama`, `harga`, `stock`, `keterangan`, `gambar`) VALUES
(1, 'Tanaman Hias Meja', 120000, '20', 'Dapat memperindah ruangan anda\r\n', 'hias1.jpg'),
(2, 'Tanaman Hias Meja', 100000, '22', 'Cocok untuk menghias meja anda, tanpa harus khawatir akan layu', 'hias2.jpg'),
(7, 'Daisy Crown Flower', 80000, '22', 'Design yang simple dan elegan cocok untuk berpergian santai dan juga pergi ke acara pernikahan\r\n', 'daisycrown.jpg'),
(8, 'Lily Crown Flower', 50000, '10', 'Didesign dengan bunga duplikat namun terlhat segar\r\n', 'crown.jpg'),
(9, 'Crown Flower', 100000, '10', 'Cocok untuk digunakan berfoto, menggunakan duplikat bunga mawar\r\n', 'crown1.jpg'),
(10, 'Rose Crown Flower', 120000, '10', 'Menggunakan duplikat bunga mawar dan dicampus dengan bunga baby''s breathe asli(hidup) cocok digunakan untuk pernikahan', 'rosecrown.jpg'),
(11, 'Tanaman Hias Meja', 100000, '10', 'Dapat membuant ruangan anda menjadi lebih sejuk dan damai', 'meja.jpg'),
(13, 'Tanaman Hias Meja', 80000, '10', 'Simple amun dapat membuat ruangan anda menjadi lebih indah dan hidup', 'meja2.jpg'),
(14, 'Sakura Crown Flower', 80000, '30', 'Simple dan Elegan, cocok digunakan kemana saja dan kapan saja', 'crown2.jpg'),
(17, 'Tanaman Hias Meja', 130000, '30', 'Sangat cocok untuk diletakkan disudut ruangan', 'meja3.jpg'),
(18, 'Tanaman Hias Meja', 75000, '30', 'Sangat cocok untuk anda yang menyukai benda benda yang mini\r\n', 'hias3.jpg'),
(26, 'Bouquet Babys Breath', 100000, '40', 'Bunga Babys Breathe memiliki makna cinta\r\n', 'babysbreath.jpg'),
(28, 'Bouquet Red Rose', 150000, '40', 'Terdiri dari mawar dan juga babys breath', 'mawar1.jpg'),
(29, 'Bouquet Mix Flower', 250000, '40', 'Bouquet ini terdiri dari macam macam bunga  \r\n', 'bouquetmix2.jpg'),
(30, 'Bouquet Mawar Pengantin', 180000, '40', 'Simple dan elegan, menggunakan bunga yang fresh\r\n', 'bouquetpengantin.jpg'),
(33, 'Tanaman Penghusir Nyamuk ', 100000, '50', 'Geranium sangat terkenal sebagai tanaman yang sangat dibenci nyamuk\r\n', 'geranium2.jpg'),
(34, 'Tanaman Penghusir Nyamuk ', 50000, '50', 'Rosemary juga tanaman yan ampu untuk menghusir nyamuk  dari rumah anda', 'rosemary.jpg'),
(35, 'Tanaman Peghusir Nyamuk', 120000, '50', 'Zodia  juga tanaman yan ampu untuk menghusir nyamuk  dari rumah anda\r\n', 'zodia.jpg'),
(36, 'Tanaman Penghusir Nyamuk', 130000, '50', 'Lavender sangat terkenal sebagai tanaman yang sangat dibenci nyamuk\r\n', 'lavender.jpg'),
(37, 'Tanaman Penghusir Nyamuk ', 80000, '50', 'Marigold juga tanaman yan ampu untuk menghusir nyamuk  dari rumah anda\r\n', 'marigold.jpg'),
(38, 'Tanaman Penghusir Nyamuk ', 190000, '50', 'Lady Diana memiliki aroma yang sangat menyengat sehingga nyamuk enggan mendekatinya', 'ladydiana.png'),
(39, 'Bunga Anggrek', 120000, '60', 'Kami meyediakan berbagai jenis bunga anggrek muai dari anggrek bulan, monyet, selop, tebu, sendok, kebutan, serat jingga, sikat gigi, berbulu hingga anggrek hitam', 'anggrek.jpg'),
(40, 'Bunga Lily', 130000, '60', 'Bunga Lily adalah satu dari sekian banyak jenis bunga yang paling disukai. Bahkan kepopulerannya telah mendunia, menjadikannya bunga yang cukup dicari oleh para pecinta bunga', 'amazonlily.jpg'),
(41, 'Bunga Aster', 100000, '60', 'bunga Aster yang cantik sangat cocok untuk ditanam di perkarangan rumah atau taman kecil depan rumah', 'aster1.jpg'),
(42, 'Bunga  Tulip', 120000, '60', 'Bunga tulip sangat terkenal sebagai bunga kasih sayang', 'tulip.jpg'),
(50, 'Bunga Daisy', 95000, '45', 'Bunga Daisy mirip sekali dengan bunga matahari, namun bunga ini memiliki arti lemah lembut', 'daisy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(24, 'admin', '$2y$10$2AfLgUyaqnb4X.peRwsG7.YYCHmGrfBPCzZBrHlflt4nNdYsDiyEe'),
(25, 'deci', '$2y$10$xobnkx8ifdEV9CNZmZu/.eMMa9YX9PVskfyhtRrlPCBUUHLgt2QxK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE IF NOT EXISTS `tb_hasil` (
`id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `pos` varchar(10) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `narek` varchar(20) NOT NULL,
  `bayar` varchar(100) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id`, `nama`, `username`, `password`, `email`, `alamat`, `pos`, `kota`, `tlp`, `norek`, `narek`, `bayar`, `bank`) VALUES
(41, 'rega', 'rega', 'rega', 'rega@gmail.com', 'karangan', '66361', 'trenggalek', '081234567890', '1212-212-1212', 'rega123', 'Rp. 90000,-', 'Bank Jabar'),
(44, 'wasito', 'wasito', 'wasito', 'ito@gmail.com', 'kampak', '66361', 'trenggalek', '081234567890', '1212-212-1212', 'wasito', 'Rp. 100000', 'BRI'),
(45, 'waannanada', 'waannja', 'nadanada12345', 'waannanada@gmail.com', 'Gondang', '66361', 'JawaTimur', '082332944211', '456376389390049', 'nada12', 'Rp 290000', 'BRI'),
(46, 'rega123', 'rega123', 'rega123', 'rega@gmail.com', 'karangan', '66361', 'trenggalek', '085235149501', '1212-212-1212', 'rega123', 'Rp. 90000,-', 'Mandiri'),
(47, 'aji123', 'rega', 'rega', 'rega@gmail.com', 'karangan', '66361', 'trenggalek', '085235149501', '1212-212-1212', 'rega123', 'Rp. 90000,-', 'Mandiri'),
(48, 'sunya kania', 'sunyakania', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '100000', 'BNI'),
(49, 'sunya kania', 'sunyakania', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '100000', 'BNI'),
(50, 'sunya kania', 'sunyakania', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '100000', 'BNI'),
(51, 'sunya kania', 'sunyakania', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '100000', 'BNI'),
(52, 'sunya kania', 'sunyakania', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '100000', 'BNI'),
(53, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(54, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(55, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(56, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(57, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(58, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(59, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(60, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(61, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(62, 'sunya kania', 'sunya', 'kaniamut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(63, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(64, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(65, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(66, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '120000', 'BNI'),
(67, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(68, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(69, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(70, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(71, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(72, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(73, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '420000', 'BCA'),
(74, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', '220000', 'BNI'),
(75, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', 'RP 220000', 'BNI'),
(76, 'sunya kania', 'sunya', 'kaniaimut', 'sunyakania@yahoo.co.id', 'jl. parkit IX', '22026', 'medan, sumatera utar', '087648361948', '197788384112123', 'sunya kania', 'RP. 220000', 'BNI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `username2` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `username2`, `email`, `password`, `password2`, `tlp`, `alamat`) VALUES
(32, 'sunya', 'kania', 'sunyakania@yahoo.co.id', '$2y$10$.dPeGwuWl5cJerEnRNyXdehJNo7PdEcaFwHSrkte9ydyskLdeSXEq', '$2y$10$0qHJxJASplhxm', '087648361948', 'Medan, Sumatera Utara\r\n'),
(33, 'daka', 'aryana', 'dakaaryana@gmail.com', '$2y$10$oHXB.yj.eEhJSPKcZN/x/O/SxkJQEiqmBbYPg/iPxNKZIcxVD2kTy', '$2y$10$pfPIYeI2p62t8', '0986545890743', 'Payabakung, Aceh\r\n'),
(36, 'rega', 'rega', 'rega@gmail.com', '$2y$10$QewEHUx5TQHSpOSD7VIPT.Xy4HHZ8JwE2BzorVFBveTmVMVB4jW1y', '$2y$10$0E5tyW2ir7lzW', '081234567890', 'Karangan, trenggalek\r\n'),
(37, 'andrie', 'agrah', 'andrieagrah96@gmail.com', '$2y$10$YGYUC.jDEcdb9YOOlkfu3.JbrYgY58Y739dm6K0CfOJSOoPf3GCg2', '$2y$10$KhhZba9tQ/.xx', '0822776589023', 'denpasar, bali'),
(38, 'waannja', 'wamanada', 'nadanada12345@gmail.com', '$2y$10$NRyRmecGP7a8.rrtGEKU9.76/IlYSvKccIi/y2iPcaWtbL.EBNMwC', '$2y$10$Va.nG/EXa8WFO', '082339449211', 'Gondal, jawa timur\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
