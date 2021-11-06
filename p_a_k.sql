-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 11:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_a_k`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `gambar` varchar(119) NOT NULL,
  `nama_anggota` varchar(51) NOT NULL,
  `username` varchar(51) NOT NULL,
  `alamat` varchar(199) NOT NULL,
  `gender` varchar(33) NOT NULL,
  `no_telepon` int(14) NOT NULL,
  `email` varchar(31) NOT NULL,
  `password` varchar(399) NOT NULL,
  `role_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `gambar`, `nama_anggota`, `username`, `alamat`, `gender`, `no_telepon`, `email`, `password`, `role_id`) VALUES
(1, 'Lilys11.PNG', 'Nelson', 'a', 'Watoone', 'Perempuan', 1, 'Donatuspalyama@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 2),
(2, 'Narys.jpg', 'Narys', 'b', 'Narys', 'Laki-laki', 98879889, 'Yustinaaraa1@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', 1),
(6, '16441599_1832865936972079_382929002_n.jpg', 'Yustina', 'd', 'Watoone', 'Perempuan', 798787, 'Yustinaaraa1@gmail.com', '8277e0910d750195b448797616e091ad', 2),
(7, 'DSC_0005.JPG', 'Reni', 'e', 'Watoone', 'Perempuan', 98879889, 'Narys@gmail.com', 'e1671797c52e15f763380b45e841ec32', 2),
(8, '', 'Narys', 'Simon', 'Witihama', 'Laki-laki', 798787, 'Narys@gmail.com', '78843575bf3437d87361a2aba0a3fdea', 2),
(9, 'DSC_0006.JPG', 'Nary', 'f', 'Watowaeng', 'Laki-laki', 98879889, 'donatuspalyama58@gmail.com', '8fa14cdd754f91cc6554c9e71929cce7', 2),
(10, 'DSC_0003.JPG', 'Benci', 'g', 'Watoone', 'Laki-laki', 98879889, 'Narys@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d', 2),
(11, 'Narys5.jpeg', 'Kasim', 'v', 'Waiwerang', 'Laki-laki', 457476645, 'abdulkasim466@gmail.com', '9e3669d19b675bd57058fd4664205d2a', 2);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_jenis` varchar(99) NOT NULL,
  `judul_buku` varchar(99) NOT NULL,
  `pengarang` varchar(51) NOT NULL,
  `penerbit` varchar(51) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `tahun_cetak` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_jenis`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `tahun_cetak`, `status`) VALUES
(2, 'NRS', 'Si Buaya', 'Narys', 'Erlangga', 1998, 1999, 1),
(3, 'NVL', 'Si Kancil', 'Simon', 'Tribun Larantuka', 1989, 1989, 0),
(5, 'NRS', 'rew', 'Reny', 'Erlangga', 1998, 1999, 0),
(6, 'NVL', 'Kupu-kupi', 'Reny', 'Erlangga', 2005, 2006, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `kode_jenis` varchar(99) NOT NULL,
  `nama_jenis` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `kode_jenis`, `nama_jenis`) VALUES
(1, 'NVL', 'Novel'),
(5, 'NRS', 'NARYS');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_saran`
--

CREATE TABLE `pesan_saran` (
  `id_pesan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `gambar` varchar(99) NOT NULL,
  `pesan` longtext NOT NULL,
  `email` varchar(119) NOT NULL,
  `nama_anggota` varchar(119) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_saran`
--

INSERT INTO `pesan_saran` (`id_pesan`, `id_anggota`, `gambar`, `pesan`, `email`, `nama_anggota`) VALUES
(10, 6, '16441599_1832865936972079_382929002_n.jpg', 'Untuk Pelayan saat melayani jangan terlalu cuek', 'Yustinaaraa1@gmail.com', 'Yustina'),
(11, 1, 'Lilys11.PNG', 'Tolong tambahin buku novel\r\n', '-@gmail.com', '-'),
(12, 1, 'Lilys11.PNG', 'Tolong perpanjang perpinjaman buku sampai tanggal 4 november', '-@gmail.com', '-'),
(13, 1, 'Lilys11.PNG', 'minta tambah waktu sampai tanggal 5 november', '-@gmail.com', '-'),
(14, 6, '16441599_1832865936972079_382929002_n.jpg', 'Tolong diperpanjang pinjaman buku dengan judul rew sampai tanggal 5 november\r\nterimakasih ', 'Yustinaaraa1@gmail.com', 'Yustina'),
(15, 1, 'Lilys11.PNG', 'Perpanjang waktu ', '-@gmail.com', '-'),
(16, 1, 'Lilys11.PNG', 'nvnbv', 'Donatuspalyama@gmail.com', 'Nelson'),
(17, 1, 'Lilys11.PNG', 'mnbn', 'Donatuspalyama@gmail.com', 'Nelson'),
(18, 1, 'Lilys11.PNG', 'mnbn', 'Donatuspalyama@gmail.com', 'Nelson'),
(19, 1, 'Lilys11.PNG', 'asdaf', 'Donatuspalyama@gmail.com', 'Nelson'),
(20, 1, 'Lilys11.PNG', 'kjhk', 'Donatuspalyama@gmail.com', 'Nelson');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pinjam` int(11) NOT NULL,
  `id_anggota` varchar(4) NOT NULL,
  `id_buku` varchar(4) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` int(9) NOT NULL,
  `total_denda` int(9) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pinjam`, `id_anggota`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`) VALUES
(4, '6', '5', '2021-10-18', '2021-10-21', 500, 2000, '2021-10-25', 1),
(21, '2', '6', '2021-10-22', '2021-10-25', 500, 2500, '2021-10-30', 1),
(27, '1', '5', '2021-10-25', '2021-10-31', 500, 0, '0000-00-00', 0),
(28, '9', '3', '2021-10-29', '2021-10-30', 500, 0, '0000-00-00', 0),
(30, '11', '6', '2021-10-30', '2021-10-31', 500, 0, '0000-00-00', 0);

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
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pesan_saran`
--
ALTER TABLE `pesan_saran`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan_saran`
--
ALTER TABLE `pesan_saran`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
