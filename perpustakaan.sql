-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 02:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` varchar(35) NOT NULL,
  `jen_kel` enum('laki-laki','perempuan','','') NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nisn`, `nama`, `kelas`, `jurusan`, `jen_kel`, `no_hp`) VALUES
(1, '999985857', 'nindi', 'XII', 'Rekayasa Perangkat Lunak', 'perempuan', '08564600174'),
(2, '9999746422', 'Ifa Sulviana', 'XI', 'Multimedia', 'perempuan', '0867745774'),
(3, '99956656', 'Rofik', 'XII', 'Jasa Boga', 'laki-laki', '0856636373'),
(5, '999782782', 'Nurul', 'XI', 'Multimedia', 'laki-laki', '0321883973'),
(7, '9998234616', 'Arshanti', 'X', 'Akomodasi Perhotelan', 'perempuan', '08456344632'),
(8, '9998882823', 'Aimul Yakin', 'XII', 'Jasa Boga', 'laki-laki', '085646072861'),
(9, '9992823781', 'Mahfiroh', 'XII', 'Rekayasa Perangkat Lunak', 'perempuan', '082139555736'),
(10, '9998324532', 'Nuramdan', 'XII', 'Multimedia', 'laki-laki', '085646828829'),
(12, '17515060111019', 'Nurul', 'XI', 'Teknik Komputer Dan Jaringan', 'perempuan', '085753838556'),
(13, '986342', 'Aku', 'XII', 'Teknik Komputer Dan Jaringan', 'laki-laki', '082142788992'),
(14, '123', 'NINDI', 'XII', 'Multimedia', 'perempuan', '0879887563879');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `stok_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penerbit`, `id_kategori`, `id_rak`, `stok_buku`) VALUES
(6, 'Sejarah Indonesia', 'Zahra', 3, 5, 675),
(8, '101,5 Kecerdasan Emosional Anak Muda', ' Raih Asa Sukses', 1, 3, 78),
(9, '16 Modul Latihan Pemulihan Kecanduan Narkoba Berba', 'BP', 2, 5, 65),
(10, ' Aku Jago Menggambar Alat Transportasi + Bangunan', 'Cerdas Interaktif', 4, 4, 45),
(11, 'Arti Pendidikan Terpadu Bagi Saya', 'Pustaka Baru', 1, 1, 67),
(12, 'Algoritma', 'Asa dinanta', 5, 6, 34),
(14, 'Pendidikan Kewarganegaraan', 'Gramedia', 1, 3, 54),
(15, 'Sejarah pulau kapuk', 'kartika', 3, 5, 56),
(16, 'Legenda Banyuwangi', 'sutijo', 4, 2, 65),
(18, 'apa yang terjadi ?', 'kamina', 3, 5, 67),
(19, 'Putri Duyung', 'zahra', 4, 5, 59),
(20, 'Kun Anta', 'ana', 4, 4, 32),
(21, 'Cinderella', 'fatin', 4, 2, 87),
(22, 'wawasan Nusantara', 'nyah', 1, 6, 76),
(24, 'Basis Data', 'Arfitkoo', 2, 4, 5),
(25, 'AKU', 'langga', 2, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pengetahuan'),
(2, 'Umum'),
(3, 'Sejarah'),
(4, 'Cerita/Novel'),
(5, 'Produktif');

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `id_kembali` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `nama_pinjam` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kembali`
--

INSERT INTO `kembali` (`id_kembali`, `id_pinjam`, `nama_buku`, `nama_pinjam`, `tgl_pinjam`, `tgl_kembali`, `denda`) VALUES
(1, 5, 'Algoritma', 'Nurul', '2017-01-30', '2017-01-31', 0),
(5, 2, '16 Modul Latihan Pemulihan Kecanduan Narkoba Berba', 'Ifa Sulviana', '2017-01-30', '2017-01-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `jen_kel` enum('laki-laki','perempuan','','') NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `password`, `jen_kel`, `no_hp`) VALUES
(1, 'admin', 'admin', 'perempuan', '0857538888');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_anggota`, `id_buku`, `jumlah`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 1, 6, 1, '2017-01-30', '2017-01-31', 'sudah'),
(2, 1, 9, 1, '2017-01-30', '2017-01-31', 'sudah'),
(5, 3, 12, 1, '2017-01-30', '2017-01-31', 'sudah'),
(6, 2, 8, 1, '2017-01-30', '2017-01-31', 'sudah'),
(7, 8, 18, 1, '2017-01-30', '2017-02-01', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `rak_buku`
--

CREATE TABLE `rak_buku` (
  `id_rak` int(11) NOT NULL,
  `tempat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak_buku`
--

INSERT INTO `rak_buku` (`id_rak`, `tempat`) VALUES
(1, 'A01'),
(2, 'A02'),
(3, 'A03'),
(4, 'A04'),
(5, 'BT1'),
(6, 'BT2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `id_pinjam` (`id_pinjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `rak_buku`
--
ALTER TABLE `rak_buku`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kembali`
--
ALTER TABLE `kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rak_buku`
--
ALTER TABLE `rak_buku`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `buku` (`id_kategori`);

--
-- Constraints for table `kembali`
--
ALTER TABLE `kembali`
  ADD CONSTRAINT `kembali_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `rak_buku`
--
ALTER TABLE `rak_buku`
  ADD CONSTRAINT `rak_buku_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `buku` (`id_rak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
