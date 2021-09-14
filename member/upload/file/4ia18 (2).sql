-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 02:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
-- Table structure for table `infokelas`
--

CREATE TABLE `infokelas` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `matkul` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infokelas`
--

INSERT INTO `infokelas` (`id_status`, `nama`, `matkul`, `deskripsi`, `waktu`) VALUES
(1, 'Admin', 'RPL', 'Bapaknya vclass tanggal 32 Februari 2035', '2018-10-31 06:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `infolab`
--

CREATE TABLE `infolab` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `matkul` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infolab`
--

INSERT INTO `infolab` (`id_status`, `nama`, `matkul`, `deskripsi`, `waktu`) VALUES
(3, 'Admin', 'JARKOMLAN', 'LP: <br>\r\n1. Apa itu router? <br>\r\n2. Apa itu ip table? ', '2018-10-31 06:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `infotugas`
--

CREATE TABLE `infotugas` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `matkul` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infotugas`
--

INSERT INTO `infotugas` (`id_status`, `nama`, `matkul`, `deskripsi`, `waktu`) VALUES
(22, 'cszf', 'sdad', 'afsdfasda', '2018-10-16 14:55:14'),
(23, 'dfsdfasd', 'fgdfgd', 'sdfsdfsd', '2018-10-16 14:55:25'),
(24, 'aaaa', 'aaaa', 'aaaa', '2018-10-30 14:06:36'),
(25, 'bbbb', 'bbbbb', 'bbbbb', '2018-10-30 14:07:28'),
(26, 'cccc', 'cccc', 'cccc', '2018-10-30 14:09:38'),
(27, 'dddd', 'dddd', 'dddd', '2018-10-30 14:12:01'),
(28, 'eeee', 'eeee', 'eeee', '2018-10-30 14:14:50'),
(29, 'ffffff', 'ffffff', 'tugas apa ', '2018-10-31 03:14:33'),
(30, 'Admin', 'gggggg', 'gggggg', '2018-10-31 06:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mhs','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`username`, `password`, `level`) VALUES
('coba1', 'coba1', 'mhs'),
('coba2', 'coba2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_upload` int(3) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `nama_mhs` varchar(25) NOT NULL,
  `matkul` varchar(25) NOT NULL,
  `periode` int(2) NOT NULL,
  `file` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_upload`, `npm`, `nama_mhs`, `matkul`, `periode`, `file`, `deskripsi`, `tgl_upload`) VALUES
(2, 'coba2', 'coba2', 'coba2', 1, 'krs2.pdf', 'coba2', '2018-10-16'),
(5, 'coba1', 'intan', 'adad', 2, 'LEPKOM.pdf', 'adad', '2018-10-17'),
(7, 'coba1', 'sdas', 'asda', 4, 'logout.php', 'asda', '2018-10-31'),
(8, 'coba1', 'sadasdasas', 'sadadasd', 5, '4ia18.sql', 'adadas', '2018-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infokelas`
--
ALTER TABLE `infokelas`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `infolab`
--
ALTER TABLE `infolab`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `infotugas`
--
ALTER TABLE `infotugas`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infokelas`
--
ALTER TABLE `infokelas`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infolab`
--
ALTER TABLE `infolab`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infotugas`
--
ALTER TABLE `infotugas`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_upload` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
