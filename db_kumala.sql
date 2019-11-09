-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2019 at 09:23 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kumala`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('550bh7p7aechppiugeqrt32f00i7vhpl', '::1', 1573286538, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238363533383b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('b0klebd7in877j30h2a1424de6urrh08', '::1', 1573286843, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238363834333b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('p1vafm7u4nbt3bueo10igtvrqgfrhak7', '::1', 1573287238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238373233383b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('ldqmlef44ujdnbfn9ntfl0j3ij9pfk3v', '::1', 1573287569, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238373536393b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('roiaqttvpu0j3bn4662ndfmlkpk4mu09', '::1', 1573287891, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238373839313b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('43afldu3000fv53lr3qhsb27he3gvqn7', '::1', 1573288206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238383230363b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('4ohsvmj22sk2o1l9bq16lssv424hd4ht', '::1', 1573288518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238383531383b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('qdg9vfmlfrpdsamgni3en0ee38o4m6dh', '::1', 1573288830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238383833303b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('211jk0q7e7eqhjkp5389fmqbah6ughiu', '::1', 1573289144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238393134343b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('chec4d1tmjr8ahfi67r7hit8074snrl4', '::1', 1573289507, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238393530373b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('sqb6dcvehnleie9tbjfn5dro4nr8rspv', '::1', 1573289888, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333238393838383b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('ecipkpms9p6vh42kqnjc8uoo7esrotor', '::1', 1573290237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333239303233373b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('978agnccufiubfbi1le8r67e6hqphu0f', '::1', 1573290694, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333239303639343b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b),
('lld2uj7pb515olfu6f0f683gsjgt593g', '::1', 1573291000, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333239313030303b69645f757365727c733a313a2231223b6e616d615f757365727c733a353a2261646d696e223b6e616d615f6c656e676b61707c733a31333a2261646d696e6973747261746f72223b726f6c657c733a353a2261646d696e223b6176617461727c733a32313a222e2f6176617461722f7a65642d6c6f676f2e706e67223b);

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `id` int(11) NOT NULL,
  `departemen` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`id`, `departemen`, `created_at`, `modified_at`) VALUES
(1, 'Engineering', '2018-01-24 10:18:20', '2018-01-24 10:19:24'),
(2, 'IT', '2018-01-24 10:18:20', '2018-01-24 10:19:24'),
(3, 'Finance', '2018-01-24 10:18:20', '2018-01-24 10:19:24'),
(4, 'Production Facilities', '2018-01-24 10:18:20', '2018-01-24 10:19:24'),
(5, 'Creative and Show', '2018-01-24 10:18:20', '2018-01-24 10:19:24'),
(6, 'Food and Beverages', '2018-01-24 10:18:20', '2018-01-24 10:19:24'),
(7, 'Purchasing', '2018-08-30 05:56:24', '2018-08-30 05:56:24'),
(8, 'HRD', '2018-08-30 05:56:42', '2018-08-30 05:56:42'),
(9, 'Operation', '2018-08-30 05:56:48', '2018-08-30 05:56:48'),
(10, 'GA', '2018-08-30 05:57:01', '2018-08-30 05:57:01'),
(11, 'Sales Edutainment', '2018-08-30 05:58:10', '2018-08-30 05:58:10'),
(12, 'MarComm', '2018-08-30 05:58:24', '2018-08-30 05:58:24'),
(13, 'Sales Corporate', '2018-08-30 05:58:33', '2018-08-30 05:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id`, `lokasi`, `created_at`, `modified_at`) VALUES
(1, 'Office Atas', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(2, 'Office Bawah', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(3, 'Ruang IT', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(4, 'Panel Lost City', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(5, 'Panel Cartoon City', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(6, 'Panel Magic Corner', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(7, 'Show Basement', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(8, 'Kitchen Basement', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(9, 'Gudang Basement', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(10, 'Studio Mie', '2018-01-24 10:21:43', '2018-01-24 10:21:43'),
(15, 'Studio FriedChicken', '2018-01-31 08:25:10', '2018-01-31 08:25:10'),
(16, 'FOH', '2018-03-17 09:04:53', '2018-03-17 09:04:53'),
(17, 'MainGates', '2018-06-03 08:07:49', '2018-06-03 08:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `departemen` int(3) NOT NULL,
  `lokasi` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `catatan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nama`, `nik`, `departemen`, `lokasi`, `alamat`, `no_telp`, `catatan`, `created_at`, `modified_at`) VALUES
(5, 'Hendra', '555', 3, 1, 'jalan', '0852', 'catatan kuuu', '2018-08-30 06:22:42', '2018-08-30 06:22:42'),
(6, 'Hendra2', '666', 3, 1, '', '', '', '2018-09-01 07:19:47', '2018-09-01 07:19:47'),
(7, 'Arty', '', 13, 1, '', '', '', '2018-09-01 08:42:43', '2018-09-01 08:42:43'),
(8, 'Andi', '', 13, 1, '', '', '', '2018-09-01 08:48:57', '2018-09-01 08:48:57'),
(9, 'Admin', '', 12, 1, '', '', '', '2018-09-01 08:51:42', '2018-09-01 08:51:42'),
(10, 'Rudi', '', 11, 1, '', '', '', '2018-09-01 09:39:04', '2018-09-01 09:39:04'),
(11, 'Ira', '', 11, 1, '', '', '', '2018-09-01 09:47:13', '2018-09-01 09:47:13'),
(12, 'Awan', '', 12, 1, '', '', '', '2018-09-02 06:08:15', '2018-09-02 06:08:15'),
(13, 'Oldy', '', 12, 1, '', '', '', '2018-09-02 06:16:29', '2018-09-02 06:16:29'),
(15, 'Teten', '', 11, 1, '', '', '', '2018-09-02 06:22:42', '2018-09-02 06:22:42'),
(16, 'Rusmin', '', 8, 1, '', '', '', '2018-09-02 06:23:36', '2018-09-02 06:23:36'),
(17, 'Karin', '', 8, 1, '', '', '', '2018-09-02 06:23:50', '2018-09-02 06:23:50'),
(18, 'Reni', '', 8, 1, '', '', '', '2018-09-02 06:24:20', '2018-09-02 06:24:20'),
(19, 'Ricko', '', 8, 1, '', '', '', '2018-09-02 06:24:41', '2018-09-02 06:24:41'),
(20, 'Irma', '', 8, 1, '', '', '', '2018-09-02 06:24:55', '2018-09-02 06:24:55'),
(21, 'Dame', '', 8, 1, '', '', '', '2018-09-02 06:25:08', '2018-09-02 06:25:08'),
(22, 'Eka', '', 1, 2, '', '', '', '2018-09-16 06:36:07', '2018-09-16 06:36:07'),
(23, 'Zahara', '', 4, 2, '', '', '', '2018-09-16 06:43:46', '2018-09-16 06:43:46'),
(24, 'Nugie', '', 4, 2, '', '', '', '2018-10-05 03:18:55', '2018-10-05 03:18:55'),
(25, 'Ano', '', 1, 2, '', '', 'CCTV/TS', '2018-10-05 06:27:26', '2018-10-05 06:27:26'),
(26, 'fachri', '', 7, 2, '', '', '', '2018-10-05 08:08:18', '2018-10-05 08:08:18'),
(27, 'kiki', '', 7, 2, '', '', '', '2018-10-05 08:08:52', '2018-10-05 08:08:52'),
(28, 'Itho', '', 7, 2, '', '', '', '2018-10-05 08:10:00', '2018-10-05 08:10:00'),
(30, 'Sam', '', 9, 2, '', '', '', '2018-10-05 08:34:19', '2018-10-05 08:34:19'),
(31, 'Leni', '', 9, 2, '', '', '', '2018-10-05 08:34:54', '2018-10-05 08:34:54'),
(32, 'Hadrah', '', 9, 2, '', '', '', '2018-10-05 08:35:19', '2018-10-05 08:35:19'),
(33, 'Spv Operation', '', 9, 2, '', '', '', '2018-10-06 03:10:21', '2018-10-06 03:10:21'),
(34, 'Maingate/FO', '', 9, 2, '', '', '', '2018-10-06 03:15:10', '2018-10-06 03:15:10'),
(35, 'Atik ', '', 5, 7, '', '', '', '2018-10-06 03:16:56', '2018-10-06 03:16:56'),
(36, 'Iin', '', 5, 7, '', '', '', '2018-10-06 03:17:16', '2018-10-06 03:17:16'),
(37, 'Arif', '', 5, 2, '', '', '', '2018-10-06 03:17:59', '2018-10-06 03:17:59'),
(38, 'Spv', '', 6, 8, '', '', '', '2019-04-04 08:47:10', '2019-04-04 08:47:10'),
(39, 'Hasni', '', 6, 8, '', '', '', '2019-04-04 08:47:22', '2019-04-04 08:47:22'),
(40, 'Fais', '', 3, 8, '', '', '', '2019-04-04 08:49:00', '2019-04-04 08:49:00'),
(41, 'Kemal', '', 3, 8, '', '', '', '2019-04-04 08:49:12', '2019-04-04 08:49:12'),
(42, 'Kasir', '', 3, 2, '', '', '', '2019-04-04 09:11:59', '2019-04-04 09:11:59'),
(43, 'joni', '123123', 1, 9, 'aaa', '123', 'acc', '2019-11-07 11:37:55', '2019-11-07 11:37:55'),
(44, 'faaizse', '123w', 5, 16, 'alamat', '123123', 'catatann', '2019-11-07 11:38:29', '2019-11-07 11:38:29'),
(45, 'wer', 'wer', 5, 16, '', 'e', '', '2019-11-07 11:44:13', '2019-11-07 11:44:13'),
(46, 'wer', 'wer', 5, 16, '', 'r', '', '2019-11-07 11:44:43', '2019-11-07 11:44:43'),
(62, 'Joni', '111', 1, 3, '222', '22', '222', '2019-11-09 09:00:17', '2019-11-09 09:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `pass_user` varchar(40) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `role` enum('admin','it','ts') NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `pass_user`, `nama_lengkap`, `role`, `avatar`) VALUES
(1, 'admin', 'a8f5f167f44f4964e6c998dee827110c', 'administrator', 'admin', './avatar/zed-logo.png'),
(2, 'fajri', 'c50abf382228ef317ffe892e7c8a91ec', 'fajri', 'it', './avatar/avatar5.png'),
(3, 'ano', 'a8f5f167f44f4964e6c998dee827110c', 'anokasss', 'ts', './avatar/avatar1.png'),
(4, 'dino', 'a8f5f167f44f4964e6c998dee827110c', 'mardino santos', 'it', './avatar/zed-logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
