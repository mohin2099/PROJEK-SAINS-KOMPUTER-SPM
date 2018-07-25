-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2018 at 07:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

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
-- Table structure for table `CREDENTIALS`
--

CREATE TABLE `CREDENTIALS` (
  `ID PELAJAR` varchar(10) NOT NULL,
  `NAMA PELAJAR` varchar(100) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CREDENTIALS`
--

INSERT INTO `CREDENTIALS` (`ID PELAJAR`, `NAMA PELAJAR`, `userid`, `password`) VALUES
('0', 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `JADUAL KOMPOSIT PENUH PELAJAR`
--

CREATE TABLE `JADUAL KOMPOSIT PENUH PELAJAR` (
  `ID PELAJAR` varchar(10) NOT NULL,
  `NAMA PELAJAR` varchar(30) NOT NULL,
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
  `PERATUS MARKAH` int(3) NOT NULL,
  `GRED MARKAH` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `JAWATAN`
--

CREATE TABLE `JAWATAN` (
  `KOD JAWATAN` varchar(3) NOT NULL,
  `NAMA JAWATAN` varchar(20) NOT NULL,
  `MARKAH JAWATAN` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `JAWATAN`
--

INSERT INTO `JAWATAN` (`KOD JAWATAN`, `NAMA JAWATAN`, `MARKAH JAWATAN`) VALUES
('J01', 'PENGERUSI', 10),
('J02', 'NAIB PENGERUSI', 8),
('J03', 'BENDAHARI', 7),
('J04', 'SETIAUSAHA', 6),
('J05', 'AJK FORM 5', 5),
('J06', 'AJK FORM 4', 4),
('J07', 'AHLI BIASA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `MARKAH PENCAPAIAN`
--

CREATE TABLE `MARKAH PENCAPAIAN` (
  `KOD PENCAPAIAN` varchar(3) NOT NULL,
  `NAMA PENCAPAIAN` varchar(30) NOT NULL,
  `MARKAH` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MARKAH PENCAPAIAN`
--

INSERT INTO `MARKAH PENCAPAIAN` (`KOD PENCAPAIAN`, `NAMA PENCAPAIAN`, `MARKAH`) VALUES
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
-- Table structure for table `MARKAH PENGLIBATAN`
--

CREATE TABLE `MARKAH PENGLIBATAN` (
  `KOD PERINGKAT` varchar(3) NOT NULL,
  `NAMA PERINGKAT` varchar(20) NOT NULL,
  `MARKAH PERINGKAT` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MARKAH PENGLIBATAN`
--

INSERT INTO `MARKAH PENGLIBATAN` (`KOD PERINGKAT`, `NAMA PERINGKAT`, `MARKAH PERINGKAT`) VALUES
('A01', 'ANTARABANGSA', 20),
('A02', 'KEBANGSAAN', 17),
('A03', 'NEGERI', 14),
('A04', 'ZON/DAERAH', 11),
('A05', 'SEKOLAH', 8);

-- --------------------------------------------------------

--
-- Table structure for table `PELAJAR`
--

CREATE TABLE `PELAJAR` (
  `ID PELAJAR` varchar(10) NOT NULL,
  `NAMA PELAJAR` varchar(100) NOT NULL,
  `UMUR` varchar(3) NOT NULL,
  `JANTINA` varchar(10) NOT NULL,
  `NO IC` varchar(12) NOT NULL,
  `NAMA TINGKATAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PELAJAR`
--

INSERT INTO `PELAJAR` (`ID PELAJAR`, `NAMA PELAJAR`, `UMUR`, `JANTINA`, `NO IC`, `NAMA TINGKATAN`) VALUES
('0', 'admin', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `PEMARKAHAN`
--

CREATE TABLE `PEMARKAHAN` (
  `KOD MARKAH` varchar(6) NOT NULL,
  `RANGE MARKAH` varchar(6) NOT NULL,
  `GRED` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PEMARKAHAN`
--

INSERT INTO `PEMARKAHAN` (`KOD MARKAH`, `RANGE MARKAH`, `GRED`) VALUES
('M01', '85-100', 'A'),
('M02', '70-84', 'B'),
('M03', '60-69', 'C'),
('M04', '50-59', 'D'),
('M05', '40-49', 'E'),
('M06', '00-39', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `Tingkatan`
--

CREATE TABLE `Tingkatan` (
  `Kod Tingkatan` varchar(7) NOT NULL,
  `Nama Tingkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tingkatan`
--

INSERT INTO `Tingkatan` (`Kod Tingkatan`, `Nama Tingkatan`) VALUES
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
-- Indexes for table `CREDENTIALS`
--
ALTER TABLE `CREDENTIALS`
  ADD PRIMARY KEY (`ID PELAJAR`);

--
-- Indexes for table `JADUAL KOMPOSIT PENUH PELAJAR`
--
ALTER TABLE `JADUAL KOMPOSIT PENUH PELAJAR`
  ADD PRIMARY KEY (`ID PELAJAR`);

--
-- Indexes for table `JAWATAN`
--
ALTER TABLE `JAWATAN`
  ADD PRIMARY KEY (`KOD JAWATAN`);

--
-- Indexes for table `MARKAH PENCAPAIAN`
--
ALTER TABLE `MARKAH PENCAPAIAN`
  ADD PRIMARY KEY (`KOD PENCAPAIAN`);

--
-- Indexes for table `MARKAH PENGLIBATAN`
--
ALTER TABLE `MARKAH PENGLIBATAN`
  ADD PRIMARY KEY (`KOD PERINGKAT`);

--
-- Indexes for table `PELAJAR`
--
ALTER TABLE `PELAJAR`
  ADD PRIMARY KEY (`ID PELAJAR`);

--
-- Indexes for table `PEMARKAHAN`
--
ALTER TABLE `PEMARKAHAN`
  ADD PRIMARY KEY (`KOD MARKAH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
