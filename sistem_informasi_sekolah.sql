-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 04:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(5) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `th_lulus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nisn`, `nama`, `alamat`, `th_lulus`) VALUES
(1, 1314981, 'Bonteng martelino', 'batuagung', '2021'),
(3, 1678355, 'Bao si\'alasjati', 'batuagung', '2011'),
(4, 28964620, 'Iksan ampas', 'batuagung', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama`, `alamat`, `pendidikan`, `mapel`, `foto`) VALUES
(2, '8623956386029', 'tosle', 'balapulang', 'laki-laki', 'PKN', 'default.jpg'),
(3, '12345263', 'bao', 'carul', 'Bahasa Indonesia', 'S2\"', 'default.jpg'),
(4, '1762879641', 'iksan', 'batuagung', 'D3\"', 'PKN', 'default.jpg'),
(5, '1762879641', 'Ilham', 'batuagung', 'SMA/SMK', 'Matematika', 'default.jpg'),
(6, '1111111111111111', 'jojo', 'cililin', 'S1\"', 'Bahasa Inggris ', 'default.jpg'),
(7, '20110150', 'Kiki Agustin', 'Jl. Salamungkal Raya Bandung Jawa Barat', 'S2\"', 'Bahasa Inggris', 'kikiagustin.jpg'),
(8, '889998009', 'Jeje Aja', 'Kp. Salamungkal Rt. 02 Rw.07 Desa. Karangtunggal Kec. Paseh Kab. Bandung Jawa Barat', 'SMA/SMK', 'SBK', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_misivisi`
--

CREATE TABLE `tb_misivisi` (
  `id_misi` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_misivisi`
--

INSERT INTO `tb_misivisi` (`id_misi`, `judul`, `isi`) VALUES
(1, 'visi', 'Alam Raya Sekolahku..'),
(2, 'misi', 'si ilham ko ganteng bett sih??');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `iai` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarahsekolah`
--

CREATE TABLE `tb_sejarahsekolah` (
  `id_sejarah` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama`, `ttl`, `alamat`, `jk`, `kelas`) VALUES
(17, 2147483647, 'tomi hoax', '2021-01-22', 'gfgfgfgf', 'laki-laki', 'XI ()Sembilan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `konfimasi_pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_misivisi`
--
ALTER TABLE `tb_misivisi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tb_sejarahsekolah`
--
ALTER TABLE `tb_sejarahsekolah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_misivisi`
--
ALTER TABLE `tb_misivisi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id_sejarah` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sejarahsekolah`
--
ALTER TABLE `tb_sejarahsekolah`
  MODIFY `id_sejarah` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
