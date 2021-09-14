-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2018 pada 15.17
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4ia18`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infotugas`
--

CREATE TABLE `infotugas` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `matkul` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `infotugas`
--

INSERT INTO `infotugas` (`id_status`, `nama`, `matkul`, `deskripsi`, `waktu`) VALUES
(22, 'cszf', 'sdad', 'afsdfasda', '2018-10-16 14:55:14'),
(23, 'dfsdfasd', 'fgdfgd', 'sdfsdfsd', '2018-10-16 14:55:25'),
(24, 'aaaa', 'aaaa', 'aaaa', '2018-10-30 14:06:36'),
(25, 'bbbb', 'bbbbb', 'bbbbb', '2018-10-30 14:07:28'),
(26, 'cccc', 'cccc', 'cccc', '2018-10-30 14:09:38'),
(27, 'dddd', 'dddd', 'dddd', '2018-10-30 14:12:01'),
(28, 'eeee', 'eeee', 'eeee', '2018-10-30 14:14:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `people`
--

CREATE TABLE `people` (
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mhs','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `people`
--

INSERT INTO `people` (`username`, `password`, `level`) VALUES
('coba1', 'coba1', 'mhs'),
('coba2', 'coba2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `infotugas`
--
ALTER TABLE `infotugas`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `infotugas`
--
ALTER TABLE `infotugas`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
