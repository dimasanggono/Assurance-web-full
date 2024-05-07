-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assurance-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `tand_tgn` varchar(50) DEFAULT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `email`, `password`, `tand_tgn`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'tanda_tgn.png', 1),
(3, 'Amelia', 'amel@gmail.com', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', NULL, 2),
(4, 'Dimas', 'dimas@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '1713157459_b73f434ede77babc2290.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaran`
--

CREATE TABLE `tbl_kendaran` (
  `id_kendaran` int(20) NOT NULL,
  `nopol` varchar(8) DEFAULT NULL,
  `norang` varchar(17) DEFAULT NULL,
  `nosin` varchar(12) DEFAULT NULL,
  `merk` varchar(10) DEFAULT NULL,
  `tipe` varchar(10) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `id_user` int(8) DEFAULT NULL,
  `warna` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kendaran`
--

INSERT INTO `tbl_kendaran` (`id_kendaran`, `nopol`, `norang`, `nosin`, `merk`, `tipe`, `tahun`, `id_user`, `warna`) VALUES
(1, 'B1234SAB', 'MJ346G56700000', 'H5U6HTHHYJYJ', 'Mazda CX-5', 'Sport Seda', 2022, 12, 'Merah'),
(16, 'D1343VRB', 'H676YTH767676HTH5', 'MJ346G567000', 'Hyundai', 'SUV', 2020, 10, 'Biru'),
(17, 'b2345SAC', 'DDER222R43F43T4T3', 'H676YTH76767', 'HondaCivic', 'Sport Seda', 2023, 13, 'Putih');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klaim`
--

CREATE TABLE `tbl_klaim` (
  `id_klaim` int(8) NOT NULL,
  `ktp` varchar(50) DEFAULT NULL,
  `sim` varchar(50) DEFAULT NULL,
  `stnk` varchar(255) DEFAULT NULL,
  `f_kendaraan` varchar(50) DEFAULT NULL,
  `kendaran_depan` varchar(255) DEFAULT NULL,
  `kendaran_belakang` varchar(255) DEFAULT NULL,
  `kendaran_samping` varchar(2555) DEFAULT NULL,
  `id_kendaran` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `tgl_update` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL,
  `bengkel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klaim`
--

INSERT INTO `tbl_klaim` (`id_klaim`, `ktp`, `sim`, `stnk`, `f_kendaraan`, `kendaran_depan`, `kendaran_belakang`, `kendaran_samping`, `id_kendaran`, `id_user`, `tgl_upload`, `tgl_update`, `status`, `deskripsi`, `id_admin`, `bengkel`) VALUES
(16, 'Section.jpg', 'homepage-csr-people.png', 'Section1.jpg', 'Section3.jpg', 'Section4.jpg', 'beat.png', 'pcx.png', 1, 12, '2024-05-02', '2024-05-04', 'Terima', '<ul><li>GANTI BAN </li><li>BODY PART GANTI</li><li>REPAINT BODY PART</li><li>KACA FILM </li></ul>', 1, 'BUROK JAYA MOTOR'),
(19, 'vesred.png', 'beat.png', 'beat1.png', 'avanza.jpg', '18907.jpg', 'soundragen.jpg', 'Ysl edp.jpg', 1, 12, '2024-05-06', '2024-05-06', 'Terima', '<ol><li>perganti body dashboard</li><li>repaint ulang</li><li>comstir</li></ol>', 1, 'JULIANA JAYA'),
(20, 'back.jpg', 'beat1.png', 'beat.png', 'issey miyake.gif', 'Hugo-Boss-Logo-before-2021-removebg-preview.png', 'HRV.jpg', 'the-cure-artist-topper.jpg', 17, 13, '2024-05-06', '2024-05-06', 'Terima', '', 1, 'Maju Jaya Motor'),
(21, 'beat.png', 'beat1.png', 'back.jpg', '18907.jpg', 'avanza.jpg', 'beat.png', 'Versace Eros.jpeg', 16, 10, '2024-05-07', '2024-05-07', 'Terima', '', 1, 'JULIANA JAYA'),
(22, '212 men.webp', '18907.jpg', 'avanza.jpg', 'back.jpg', 'beat1.png', 'BMTH.jpg', 'beat1.png', 17, 13, '2024-05-07', '2024-05-07', 'Tolak', '', 1, ''),
(23, 'beat.png', 'beat1.png', 'vesred.png', 'Ysl edp.jpg', 'Ysl edp.jpg', 'Versace Eros.jpeg', 'Ysl edp.jpg', 16, 10, '2024-05-07', NULL, 'Pending', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(8) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `roles` varchar(10) NOT NULL,
  `tand_tgn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `no_tlpn`, `email`, `password`, `roles`, `tand_tgn`) VALUES
(9, 'Danang', '08986857576', 'user@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'USER', NULL),
(10, 'dimas aji ', '0896757657567', 'dimasaji13@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'USER', NULL),
(11, 'Dandy', '089656546546', 'dandy@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'ADMIN', '1714791235_36da8062eb7753b9d75a.png'),
(12, 'Danang', '0898967858568', 'user1@gmail.com', '8fb5cfe922674e0f9faa46a92716f66bd67ad344', 'USER', NULL),
(13, 'Kumar', '0879757674674', 'kumar@gmail.com', '153fa238cec90e5a24b85a79109f91ebe68ca481', 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_kendaran`
--
ALTER TABLE `tbl_kendaran`
  ADD PRIMARY KEY (`id_kendaran`);

--
-- Indexes for table `tbl_klaim`
--
ALTER TABLE `tbl_klaim`
  ADD PRIMARY KEY (`id_klaim`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kendaran`
--
ALTER TABLE `tbl_kendaran`
  MODIFY `id_kendaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_klaim`
--
ALTER TABLE `tbl_klaim`
  MODIFY `id_klaim` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
