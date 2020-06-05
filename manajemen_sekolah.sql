-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 12:35 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kode_guru` int(3) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jumlah_jam` int(2) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kode_guru`, `nama_guru`, `jumlah_jam`, `alamat`, `telp`, `email`) VALUES
(1, 'Venus Yuliana', 4, 'Jl. Agus Salim No. 10 Malang', '081234567890122', 'venusyuliana33@gmail.com'),
(2, 'Uswatun Hasanah', 2, 'Jl. Tanjung No. 17 Kepanjen', '082213476809825', 'uswatunhasanah10@gmail.com'),
(3, 'Hariyadi', 2, 'Jl. S.Supriyadi No. 15 Malang', '083214568279075', 'hariyadiputra34@gmail.com'),
(4, 'Surtini', 2, 'Jl. Melati No. 21 Bululawang', '089356879215376', 'surtini1234@gmail.com'),
(5, 'Ulfiana Diba', 3, 'Jl. Bandung No. 23 Malang', '081235670982345', 'ulfianadiba507@gmail.com'),
(6, 'Choirul Huda', 2, 'Jl. Sugondo No.01 Kebonagung', '098765432167543', 'hudabaru23@gmail.com'),
(8, 'Sri Hartini', 2, 'Jl. Kolonel Sugiono Malang', '089764123675438', 'srihartinish@gmail.com'),
(9, 'Gatot Haryono', 3, 'Jl. Talang Agung No.1 Kepanjen', '098765432123456', 'gatothar12345@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `kode_mapel` char(3) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `alokasi_waktu` int(2) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `kode_guru` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`kode_mapel`, `mapel`, `alokasi_waktu`, `semester`, `kode_guru`) VALUES
('A09', 'Bahasa Inggris', 5, 2, 2),
('B07', 'Ilmu Pengetahuan Alam', 4, 2, 3),
('B14', 'Biologi', 4, 2, 9),
('c07', 'sisop', 0, 0, 1),
('C12', 'Olahraga dan Kesehatan', 2, 2, 4),
('D01', 'Matematika', 5, 2, 5),
('D12', 'Pendidikan Kewarganegaraan', 2, 1, 6),
('E22', 'Pendidikan Agama Islam', 4, 1, 8),
('k11', 'sakjkajlkfj', 6, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'admin1', 'admin1'),
(4, 'admin2', 'admin2'),
(5, 'admin3', 'admin3'),
(6, 'chintya', 'chintya'),
(7, 'tria', 'tria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `kode_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD CONSTRAINT `matapelajaran_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `guru` (`kode_guru`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
