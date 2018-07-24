-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 09:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `ID PELAJAR` varchar(10) NOT NULL,
  `NAMA PELAJAR` varchar(100) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`ID PELAJAR`, `NAMA PELAJAR`, `userid`, `password`) VALUES
('0', 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jadual komposit penuh pelajar`
--

CREATE TABLE `jadual komposit penuh pelajar` (
  `ID PELAJAR` varchar(10) NOT NULL,
  `NAMA PELAJAR` varchar(30) NOT NULL,
  `KOD TINGKATAN` varchar(6) NOT NULL,
  `KELAS` varchar(50) NOT NULL,
  `PERTANDINGAN` varchar(50) NOT NULL,
  `KOD PENGLIBATAN` varchar(20) NOT NULL,
  `PENGLIBATAN` varchar(20) NOT NULL,
  `MARKAH PENGLIBATAN` int(2) NOT NULL,
  `KOD PENCAPAIAN` varchar(6) NOT NULL,
  `PENCAPAIAN` varchar(20) NOT NULL,
  `MARKAH PENCAPAIAN` int(2) NOT NULL,
  `KOD JAWATAN` varchar(6) NOT NULL,
  `JAWATAN` varchar(20) NOT NULL,
  `MARKAH JAWATAN` int(2) NOT NULL,
  `KEHADIRAN` int(4) NOT NULL,
  `KOD MARKAH` varchar(6) NOT NULL,
  `PERATUS MARKAH` int(3) NOT NULL,
  `GRED MARKAH` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawatan`
--

CREATE TABLE `jawatan` (
  `KOD JAWATAN` varchar(3) NOT NULL,
  `NAMA JAWATAN` varchar(20) NOT NULL,
  `MARKAH JAWATAN` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawatan`
--

INSERT INTO `jawatan` (`KOD JAWATAN`, `NAMA JAWATAN`, `MARKAH JAWATAN`) VALUES
('J01', 'PENGERUSI', 10),
('J02', 'NAIB PENGERUSI', 8),
('J03', 'BENDAHARI', 7),
('J04', 'SETIAUSAHA', 6),
('J05', 'AJK FORM 5', 5),
('J06', 'AJK FORM 4', 4),
('J07', 'AHLI BIASA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `markah pencapaian`
--

CREATE TABLE `markah pencapaian` (
  `KOD PENCAPAIAN` varchar(3) NOT NULL,
  `NAMA PENCAPAIAN` varchar(30) NOT NULL,
  `MARKAH` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markah pencapaian`
--

INSERT INTO `markah pencapaian` (`KOD PENCAPAIAN`, `NAMA PENCAPAIAN`, `MARKAH`) VALUES
('B01', 'JOHAN ANTARABANGSA', 20),
('B02', 'NAIB JOHAN ANTARABANGSA', 19),
('B03', 'KETIGA ANTARABANGSA', 18),
('B04', 'JOHAN KEBANGSAAN', 17),
('B05', 'NAIB JOHAN KEBANGSAAN', 16),
('B06', 'KETIGA KEBANGSAAN', 15),
('B07', 'JOHAN NEGERI', 14),
('B08', 'NAIB JOHAN NEGERI', 13),
('B09', 'KETIGA NEGERI', 12),
('B10', 'JOHAN DAERAH', 11),
('B11', 'NAIB JOHAN DAERAH', 10),
('B12', 'KETIGA DAERAH', 9),
('B13', 'JOHAN SEKOLAH', 8),
('B14', 'NAIB JOHAN SEKOLAH', 7),
('B15', 'KETIGA SEKOLAH', 6);

-- --------------------------------------------------------

--
-- Table structure for table `markah penglibatan`
--

CREATE TABLE `markah penglibatan` (
  `KOD PERINGKAT` varchar(3) NOT NULL,
  `NAMA PERINGKAT` varchar(20) NOT NULL,
  `MARKAH PERINGKAT` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markah penglibatan`
--

INSERT INTO `markah penglibatan` (`KOD PERINGKAT`, `NAMA PERINGKAT`, `MARKAH PERINGKAT`) VALUES
('A01', 'ANTARABANGSA', 20),
('A02', 'KEBANGSAAN', 17),
('A03', 'NEGERI', 14),
('A04', 'ZON/DAERAH', 11),
('A05', 'SEKOLAH', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `ID PELAJAR` varchar(10) NOT NULL,
  `NAMA PELAJAR` varchar(100) NOT NULL,
  `UMUR` varchar(3) NOT NULL,
  `JANTINA` varchar(10) NOT NULL,
  `NO IC` varchar(12) NOT NULL,
  `NAMA TINGKATAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemarkahan`
--

CREATE TABLE `pemarkahan` (
  `KOD MARKAH` varchar(6) NOT NULL,
  `RANGE MARKAH` varchar(6) NOT NULL,
  `GRED` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemarkahan`
--

INSERT INTO `pemarkahan` (`KOD MARKAH`, `RANGE MARKAH`, `GRED`) VALUES
('M01', '85-100', 'A'),
('M02', '70-84', 'B'),
('M03', '60-69', 'C'),
('M04', '50-59', 'D'),
('M05', '40-49', 'E'),
('M06', '00-39', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tingkatan`
--

CREATE TABLE `tingkatan` (
  `Kod Tingkatan` varchar(7) NOT NULL,
  `Nama Tingkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkatan`
--

INSERT INTO `tingkatan` (`Kod Tingkatan`, `Nama Tingkatan`) VALUES
('T401', '4PD'),
('T402', '4PT'),
('T403', '4PS'),
('T404', '4CM'),
('T501', '5PD'),
('T502', '5PT'),
('T503', '5PS'),
('T504', '5CM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`ID PELAJAR`);

--
-- Indexes for table `jadual komposit penuh pelajar`
--
ALTER TABLE `jadual komposit penuh pelajar`
  ADD PRIMARY KEY (`ID PELAJAR`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`KOD JAWATAN`);

--
-- Indexes for table `markah pencapaian`
--
ALTER TABLE `markah pencapaian`
  ADD PRIMARY KEY (`KOD PENCAPAIAN`);

--
-- Indexes for table `markah penglibatan`
--
ALTER TABLE `markah penglibatan`
  ADD PRIMARY KEY (`KOD PERINGKAT`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`ID PELAJAR`);

--
-- Indexes for table `pemarkahan`
--
ALTER TABLE `pemarkahan`
  ADD PRIMARY KEY (`KOD MARKAH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
