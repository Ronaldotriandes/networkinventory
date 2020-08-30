-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 08:35 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminventarisjaringan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` text NOT NULL,
  `Nama` text NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Jabatan` text NOT NULL,
  `Email` text NOT NULL,
  `Hp` varchar(14) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colocation_server`
--

CREATE TABLE `colocation_server` (
  `IdColocation` varchar(10) NOT NULL,
  `Hostname` text NOT NULL,
  `Lokasi` text NOT NULL,
  `Merk` text NOT NULL,
  `Os` text NOT NULL,
  `Tahun` text NOT NULL,
  `Pemilik` text NOT NULL,
  `Kondisi` text NOT NULL,
  `Wan` text NOT NULL,
  `Lan` text NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colocation_server`
--

INSERT INTO `colocation_server` (`IdColocation`, `Hostname`, `Lokasi`, `Merk`, `Os`, `Tahun`, `Pemilik`, `Kondisi`, `Wan`, `Lan`, `Ket`) VALUES
('001', 'tv.jabarprov.go.id', 'RACK 4\r\n', 'DL 380P G8\r\n', 'Ubuntu\r\n', '2012', 'Humas jabar', 'Baik', '180.250.136.198', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `dataalokasiippublik`
--

CREATE TABLE `dataalokasiippublik` (
  `Idalokasi` varchar(10) NOT NULL,
  `Ipaddress` text NOT NULL,
  `Domain` text NOT NULL,
  `Network` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataalokasiippublik`
--

INSERT INTO `dataalokasiippublik` (`Idalokasi`, `Ipaddress`, `Domain`, `Network`) VALUES
('001', '118.97.186.209', 'gateway', 'Network : 118.97.186.208/28');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `IdVlan` varchar(10) NOT NULL,
  `Vlan Name` text NOT NULL,
  `IdDepartment` text NOT NULL,
  `NamaDepartment` text NOT NULL,
  `Ipaddress` text NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`IdVlan`, `Vlan Name`, `IdDepartment`, `NamaDepartment`, `Ipaddress`, `Ket`) VALUES
('01', 'default\r\n', '01', 'default', '10.15.1.0/24', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jaringantik`
--

CREATE TABLE `jaringantik` (
  `Id` varchar(10) NOT NULL,
  `Organisasi` text NOT NULL,
  `Alamat` text NOT NULL,
  `Kontak` text NOT NULL,
  `Koordinat` text NOT NULL,
  `Perangkatrouter` text NOT NULL,
  `IprouterLAN` text NOT NULL,
  `IprouterWAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringantik`
--

INSERT INTO `jaringantik` (`Id`, `Organisasi`, `Alamat`, `Kontak`, `Koordinat`, `Perangkatrouter`, `IprouterLAN`, `IprouterWAN`) VALUES
('01', 'SEKRETARIAT DAERAH	\r\n', 'JL. DIPONEGORO NO. 22 BANDUNG\r\n', 'Kiki/0822 1933 5183\r\n', '-6.902558, 107.618800\r\n', 'OPD\r\n', '10.11.0.1/16\r\n', '172.31.255.2\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nama`, `jabatan`, `username`, `password`) VALUES
('admin gante', 'Admin', 'admin', 'admin'),
('qwe', 'User', '12', '1'),
('11234', 'User', '1111', '12345'),
('11234', 'User', '1111', '12345'),
('Kasir', 'Kasir', 'kasir', 'kasir'),
('ronaldo', 'User', 'ronaldotriandes', 'jelassaja01'),
('purnomo sari', 'User', 'sari123', 'qwerty1'),
('triandes', 'User', 'trian12', 'qwerty1'),
('ronal', 'User', 'ron1', 'ronal'),
('sayanama', 'User', 'namasaya', '123'),
('sayanamasaya', 'User', 'saya123', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `Idserver` varchar(15) NOT NULL,
  `Tahun` text NOT NULL,
  `Merk` text NOT NULL,
  `Harddisk` text NOT NULL,
  `Memory` text NOT NULL,
  `Prosesor` text NOT NULL,
  `Os` text NOT NULL,
  `Hostname` text NOT NULL,
  `Pemilik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`Idserver`, `Tahun`, `Merk`, `Harddisk`, `Memory`, `Prosesor`, `Os`, `Hostname`, `Pemilik`) VALUES
('001', '2010', 'IBM X 3650 M3', '3 X 300 GB', '16 GB', ' Intel(R) Xeon(R) CPU E5645 @ 2.40GHz (2 Sockets)', 'OPENBSD 6.0', 'ns1.jabarprov.go.id [publik]', 'Diskominfo');

-- --------------------------------------------------------

--
-- Table structure for table `switch`
--

CREATE TABLE `switch` (
  `Idswitch` varchar(10) NOT NULL,
  `Hostname` text NOT NULL,
  `Lokasi` text NOT NULL,
  `Tahun` text NOT NULL,
  `Merk` text NOT NULL,
  `Os` text NOT NULL,
  `DMZ` text NOT NULL,
  `LAN` text NOT NULL,
  `Manage` text NOT NULL,
  `Pemilik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `switch`
--

INSERT INTO `switch` (`Idswitch`, `Hostname`, `Lokasi`, `Tahun`, `Merk`, `Os`, `DMZ`, `LAN`, `Manage`, `Pemilik`) VALUES
('01', 'L3 Switch	\r\n', 'Open Rack\r\n', '2010\r\n', 'cisco WS-C3560G-24TS\r\n', '-', '-', '-', '172.17.1.1\r\n', ''),
('02', 'KOMJBR-ASW-LAN-01	\r\n', 'Open Rack', '2016', 'juniper exex3300-24t', 'Junos 12.3R6.6', '', '', '172.17.1.20', ''),
('123a', '123', 'dsa1', 'asd123', 'sd1', '-', '-', '-', '172.17.1.1111', 'Diskominfo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataalokasiippublik`
--
ALTER TABLE `dataalokasiippublik`
  ADD PRIMARY KEY (`Idalokasi`);

--
-- Indexes for table `jaringantik`
--
ALTER TABLE `jaringantik`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`Idserver`);

--
-- Indexes for table `switch`
--
ALTER TABLE `switch`
  ADD PRIMARY KEY (`Idswitch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
