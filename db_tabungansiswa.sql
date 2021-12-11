-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 02:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tabungansiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_karyawan`
--

CREATE TABLE `history_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_karyawan`
--

INSERT INTO `history_karyawan` (`id`, `nama`, `info`, `tanggal`) VALUES
(580, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/08/2020 23:56:36'),
(581, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '22/08/2020 00:04:04'),
(582, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '22/08/2020 05:18:04'),
(583, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '22/08/2020 06:14:44'),
(584, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '22/08/2020 06:15:52'),
(585, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '22/08/2020 09:32:51'),
(586, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '22/08/2020 09:42:55'),
(587, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 05:21:54'),
(588, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:26:51'),
(589, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:27:04'),
(590, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:27:50'),
(591, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:29:15'),
(592, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:29:30'),
(593, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:29:59'),
(594, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:30:32'),
(595, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:30:45'),
(596, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:33:58'),
(597, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:34:18'),
(598, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:36:18'),
(599, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:36:45'),
(600, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:37:23'),
(601, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:38:24'),
(602, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:39:26'),
(603, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:39:55'),
(604, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:45:36'),
(605, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:52:09'),
(606, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:52:42'),
(607, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:52:57'),
(608, 'Muhammad Saeful Ramdan', ' Telah melakukan login', '23/08/2020 06:57:48'),
(609, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 06:59:17'),
(610, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 07:44:33'),
(611, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/08/2020 09:07:20'),
(612, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '02/09/2020 00:22:03'),
(613, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '02/09/2020 00:24:06'),
(614, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '02/09/2020 19:26:45'),
(615, 'Admin Aplikasi Tabungan', 'Admin Aplikasi Telah melakukan login', '23/09/2020 19:05:19'),
(616, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2020 08:21:47'),
(617, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '26/10/2020 08:05:58'),
(618, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '06/12/2020 15:14:55'),
(619, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '06/12/2020 15:19:45'),
(620, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '06/12/2020 15:19:46'),
(621, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '13/10/2021 13:17:24'),
(622, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '13/10/2021 23:42:01'),
(623, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '19/10/2021 08:13:09'),
(624, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '19/10/2021 10:58:58'),
(625, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '19/10/2021 11:06:01'),
(626, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '19/10/2021 11:08:32'),
(627, 'RANI AGUSTIANI', ' Telah melakukan login', '19/10/2021 11:10:24'),
(628, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 08:28:31'),
(629, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 09:19:57'),
(630, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 10:21:35'),
(631, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 10:45:37'),
(632, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 11:40:03'),
(633, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 11:44:23'),
(634, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 11:46:57'),
(635, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 11:49:22'),
(636, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '21/10/2021 11:56:40'),
(637, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '23/10/2021 08:29:40'),
(638, 'Admin Aplikasi Tabungan', ' Telah melakukan login', '07/12/2021 08:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `nama_kelas`) VALUES
(26, 'Kelas 6'),
(25, 'Kelas 5'),
(24, 'Kelas 4'),
(23, 'Kelas 3'),
(22, 'Kelas 2'),
(21, 'Kelas 1');

-- --------------------------------------------------------

--
-- Table structure for table `t_nasabah`
--

CREATE TABLE `t_nasabah` (
  `id_nasabah` int(50) NOT NULL,
  `kd_nasabah` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `orangtua` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nasabah`
--

INSERT INTO `t_nasabah` (`id_nasabah`, `kd_nasabah`, `nama`, `alamat`, `id_kelas`, `notelp`, `orangtua`) VALUES
(56, '212201001', 'ALISA MAHARANI', 'Kp. Ciputat', 21, '', 'Aah Mutropah'),
(57, '212201002', 'EDIS SAPUTRA', 'Kp. Gandasari', 21, '', 'Adah'),
(58, '212201003', 'HASNA LUTHFIA YASMIN', 'Kp. Bojong', 21, '', 'Siti Hanifah Mutoharoh'),
(59, '212201004', 'HELMI MAHARANI', 'Kp. Bojong', 21, '', ''),
(60, '212201005', 'JULI RAMADANI', 'Kp. Ciputat', 21, '', 'Ida Maryani'),
(61, '212201006', 'LALAN MAULANA RAKHMAN', 'Kp. Rancabakung', 21, '', 'Ida Purnawati'),
(62, '212201007', 'LAURA RISMAYANTI', 'Kp. Gandasari', 21, '', 'Aning'),
(63, '212201008', 'MUHAMAD ABDUL JAMIL', 'Kp. Gandasari', 21, '', 'Mamay'),
(64, '212201009', 'NAZWA NUR ANISA', 'Kp. Gandasari', 21, '', 'D. Nia'),
(65, '212201010', 'RIZA ALFATIH', 'Kp. Samaguna', 21, '', 'Rini Jumiarti'),
(55, '', '', '', 21, '', ''),
(66, '212201011', 'SAFIRA KHOIRUNISA', 'Kp. Gandasari', 21, '', 'Mulyani'),
(67, '202101001', 'AFINA HAMDA SYAKHIRA', 'Kp. Bojong', 22, '', ''),
(68, '202101002', 'AHSANUL FAIZ', 'Kp. Gandasari', 22, '', ''),
(69, '202101003', 'AKSANAN NASA', 'Kp Gandasari', 22, '', ''),
(70, '202101004', 'ANDINI AULIA', 'Kp Gandasari', 22, '', ''),
(71, '202101005', 'ANISA KURNIAWAN', 'Kp Gandasari', 22, '', ''),
(72, '202101006', 'ANITA FEBRIYANI', 'Kp. Bojong gandasari', 22, '', ''),
(73, '202101007', 'AZKA ABDUL RAHMAN', 'Kp ciputat', 22, '', ''),
(74, '202101008', 'FAUZAN ZAENURIN', 'Kp.Cicariang', 22, '', ''),
(75, '202101009', 'GINA NURHUDA', 'Kp Gandasari', 22, '', ''),
(76, '202101010', 'IQBAL', 'Kp.Cicariang', 22, '', ''),
(77, '202101011', 'ISNA AMALIA', 'Kp. Ciputat', 22, '', ''),
(78, '202101012', 'M AKHSAN FAUJI', 'Kp. Ciputat', 22, '', ''),
(79, '202101013', 'MUHAMMAD RAFKA NABIHAN KHOLIQ', 'Kp Gandasari', 22, '', ''),
(80, '202101014', 'MUHAMMAD RIZKI PRATAMA', 'Kp. Ciputat', 22, '', ''),
(81, '202101015', 'NAIZAR MUAFA SAID', 'Kp. Bojong', 22, '', ''),
(82, '202101016', 'NIZAM', 'Kp. Gandasari', 22, '', ''),
(83, '202101017', 'NOVAL KAYSAN', 'Kp. Ciputat', 22, '', ''),
(84, '202101018', 'RADIT RADIANSYAH', 'Kp. Cicariang', 22, '', ''),
(85, '202101019', 'RESTU KIRANA', 'Kp. Samaguna', 22, '', ''),
(86, '202101020', 'REVITA NUR ISTIQOMAH', 'Kp ciputat', 22, '', ''),
(87, '202101021', 'SANDI AULANI', 'Kp Gandasari', 22, '', ''),
(88, '202101022', 'SATRIO', 'Kp. Samaguna', 22, '', ''),
(89, '202101023', 'SOLAHUDIN', 'Kp Gandasari', 22, '', ''),
(90, '202101024', 'WANDI ASKAR', 'Kp Gandasari', 22, '', ''),
(91, '192001001', 'Abdulloh Khoerul Azam', 'Kp. Ciputat', 23, '', ''),
(92, '192001002', 'Amanda Widaningsih', 'Kp. Gandasari', 23, '', ''),
(93, '192001003', 'Anggia Puspita', 'Kp. Gandasari', 23, '', ''),
(94, '192001004', 'Deni Nanda Saputra', 'Kp. Gandasari', 23, '', ''),
(95, '192001005', 'Elvira Nurfadilah', 'Kp. Ciputat', 23, '', ''),
(96, '192001006', 'Hendra Maulana', 'Kp. Ciputat', 23, '', ''),
(97, '192001007', 'Ilham Nur Hidayat', 'Kp. Gandasari', 23, '', ''),
(98, '192001008', 'M. Riyandi Ramadan', 'Kp. Gandasari', 23, '', ''),
(99, '192001009', 'Muhamad Ilham Hamdani', 'Kp. Gandasari', 23, '', ''),
(100, '192001010', 'Nabila Septianingsih', 'Kp. Ciputat', 23, '', ''),
(101, '192001011', 'Raina Azzahra', 'Kp. Ciputat', 23, '', ''),
(102, '192001012', 'Risma Ayu Lestari', 'Kp. Bojong Gandasari', 23, '', ''),
(103, '192001013', 'Sanusi Rahmatul Padjri', 'Ciputat', 23, '', ''),
(104, '192001014', 'Shinta Tiara', 'Kp. Bojong', 23, '', ''),
(105, '192001015', 'Sultan Pagar Alam', 'Kp. Gandasari', 23, '', ''),
(106, '192001016', 'Syahril Abdullah Rifansyah', 'Kp. Bojong Gandasari', 23, '', ''),
(107, '192001017', 'Tiara Dewi', 'Kp. Gandasari', 23, '', ''),
(108, '192001018', 'Ziddan Yajid Romdhoni', 'Kp. Ciputat', 23, '', ''),
(109, '181901001', 'Ali Pirdaus', '', 24, '', ''),
(110, '181901003', 'Aris Nesa Pradana', '', 24, '', ''),
(111, '181901004', 'Chelsy Ramadhani', '', 24, '', ''),
(112, '181901005', 'Dede Ikbal', '', 24, '', ''),
(113, '181901006', 'Dian Ardiansah', '', 24, '', ''),
(114, '181901007', 'Khoerul Anam', '', 24, '', ''),
(115, '181901008', 'Melda Maulidina', '', 24, '', ''),
(116, '181901009', 'Muhamad Al Fariz', '', 24, '', ''),
(117, '181901010', 'Nurul Aulia', '', 24, '', ''),
(118, '181901011', 'Rafa Fauzi Anugrah', '', 24, '', ''),
(119, '181901012', 'Rizki Aditia', '', 24, '', ''),
(120, '181901013', 'Santi', '', 24, '', ''),
(121, '181901014', 'Siti Tazkiah Nur Inayah', '', 24, '', ''),
(122, '171801003', 'Alman Ali Abrisyam', '', 25, '', ''),
(123, '192003021', 'A. Fajar Bajir', '', 25, '', ''),
(124, '171801002', 'Aldi', '', 25, '', ''),
(125, '171801004', 'Anisa Maharani', '', 25, '', ''),
(126, '171801005', 'Aulia', '', 25, '', ''),
(127, '171801006', 'Deni', '', 25, '', ''),
(128, '171801008', 'Lina Nuramalia', '', 25, '', ''),
(129, '171801009', 'M. Sopandi', '', 25, '', ''),
(130, '171801010', 'Muhammad Arfit Ardiansyah', '', 25, '', ''),
(131, '171801012', 'Reza Herdiansyah Nugraha', '', 25, '', ''),
(132, '171801013', 'Sigit Paujan', '', 25, '', ''),
(133, '171801015', 'Vita Deswita', '', 25, '', ''),
(134, '171801014', 'Wildan Muhamad Dipar', '', 25, '', ''),
(135, '161701001', 'Afdal Kurniawan', '', 26, '', ''),
(136, '161701002', 'Agus Septian', '', 26, '', ''),
(137, '181903026', 'AINA SHAHIDA TUSSOLIHAH', '', 26, '', ''),
(138, '161701003', 'Alea Natasya', '', 26, '', ''),
(139, '161701004', 'Angga Saputra', '', 26, '', ''),
(140, '161701005', 'Anggi Maptuh Nurhuda', '', 26, '', ''),
(141, '181903027', 'Claricha Olivia', '', 26, '', ''),
(142, '161701006', 'Derista Nurgiana', '', 26, '', ''),
(143, '161701007', 'Desti Yupti Aspiah', '', 26, '', ''),
(144, '161701008', 'Dimas Raya Rabbani', '', 26, '', ''),
(145, '161701009', 'Epan Sopyan', '', 26, '', ''),
(146, '161701010', 'Kustian', '', 26, '', ''),
(147, '161701011', 'Leli Liani', '', 26, '', ''),
(148, '161701012', 'Melati Amelia', '', 26, '', ''),
(149, '202105025', 'MOH. ARDIYANA JAENAL MUTAKIN', '', 26, '', ''),
(150, '161701013', 'Muhamad Rizki Maulana', '', 26, '', ''),
(151, '161703025', 'Muhammad Yusril Bagja Nugraha', '', 26, '', ''),
(152, '161701014', 'Naila', '', 26, '', ''),
(153, '161701015', 'Nazril Rafael', '', 26, '', ''),
(154, '161701016', 'Raditia Ramadan', '', 26, '', ''),
(155, '161701017', 'Rahman Saleh', '', 26, '', ''),
(156, '161701018', 'Restu Setiadi', '', 26, '', ''),
(157, '161701019', 'Salsabila', '', 26, '', ''),
(158, '161701020', 'Selvita', '', 26, '', ''),
(159, '161701021', 'Sintya Maulani', '', 26, '', ''),
(160, '161701022', 'Syifa Fadillah', '', 26, '', ''),
(161, '161701023', 'Yogi Aditya Supendi', '', 26, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kd_nasabah` varchar(100) NOT NULL,
  `jenis_trans` enum('Setor','Tarik') NOT NULL,
  `value` double NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `anggota_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `level` char(1) DEFAULT 'U',
  `is_aktive` enum('1','2') NOT NULL,
  `tgl_gabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`anggota_id`, `username`, `password`, `nama_anggota`, `email`, `alamat`, `telepon`, `level`, `is_aktive`, `tgl_gabung`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'Admin Aplikasi Tabungan', 'ajat.tea@gmail.com', 'Sukabumi', '083874731480', 'A', '1', '0000-00-00'),
(8, '6', '1679091c5a880faf6fb5e6087eb1b2dc', 'RANI AGUSTIANI', 'raniagustiani876@gmail.com', 'Tasikmalaya', '082316359697', 'U', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tabungan_kelas`
-- (See below for the actual view)
--
CREATE TABLE `v_tabungan_kelas` (
`id_kelas` int(10)
,`total_tabungan` double
,`pengeluaran` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tabungan_siswa`
-- (See below for the actual view)
--
CREATE TABLE `v_tabungan_siswa` (
`kd_nasabah` varchar(100)
,`total_tabungan` double
,`pengeluaran` double
);

-- --------------------------------------------------------

--
-- Structure for view `v_tabungan_kelas`
--
DROP TABLE IF EXISTS `v_tabungan_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tabungan_kelas`  AS SELECT `t_nasabah`.`id_kelas` AS `id_kelas`, sum(if(`t_transaksi`.`jenis_trans` like 'Setor%',`t_transaksi`.`value`,0)) AS `total_tabungan`, sum(if(`t_transaksi`.`jenis_trans` like 'Tarik%',`t_transaksi`.`value`,0)) AS `pengeluaran` FROM (`t_transaksi` join `t_nasabah` on(`t_nasabah`.`kd_nasabah` = `t_transaksi`.`kd_nasabah`)) GROUP BY `t_nasabah`.`id_kelas` ;

-- --------------------------------------------------------

--
-- Structure for view `v_tabungan_siswa`
--
DROP TABLE IF EXISTS `v_tabungan_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tabungan_siswa`  AS SELECT `t_transaksi`.`kd_nasabah` AS `kd_nasabah`, sum(if(`t_transaksi`.`jenis_trans` like 'Setor%',`t_transaksi`.`value`,0)) AS `total_tabungan`, sum(if(`t_transaksi`.`jenis_trans` like 'Tarik%',`t_transaksi`.`value`,0)) AS `pengeluaran` FROM `t_transaksi` GROUP BY `t_transaksi`.`kd_nasabah` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `nama_kelas` (`nama_kelas`);

--
-- Indexes for table `t_nasabah`
--
ALTER TABLE `t_nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`anggota_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;

--
-- AUTO_INCREMENT for table `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `t_nasabah`
--
ALTER TABLE `t_nasabah`
  MODIFY `id_nasabah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `anggota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
