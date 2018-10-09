-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2018 pada 11.58
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `regdata`
--

CREATE TABLE `regdata` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regdata`
--

INSERT INTO `regdata` (`nama`, `nim`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('', '', '', '', '', '', ''),
('diangendut', '6701170006', 'D3MI-41-01', 'Male', 'Drama', 'FIT', 'lampung'),
('adityaapriyanti', '6701174035', 'D3MI-41-03', 'Male', 'Array', 'FIT', 'aaaaa'),
('tiara', '6701174078', 'D3MI-41-02', 'Female', 'Array', 'FTE', 'telkom'),
('adityaapriyanti', '6701175076', 'D3MI-41-02', 'Male', 'Tidur, Drama', 'FTE', 'tanggerang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `regdata`
--
ALTER TABLE `regdata`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
