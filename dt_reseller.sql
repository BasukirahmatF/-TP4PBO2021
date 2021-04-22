-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 07.02
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dt_reseller`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mic_datapasok`
--

CREATE TABLE `mic_datapasok` (
  `id` int(25) NOT NULL,
  `nama_mic` varchar(225) NOT NULL,
  `plug_type` varchar(225) NOT NULL,
  `jenis_mic` varchar(225) NOT NULL,
  `toko` varchar(225) NOT NULL,
  `status_brg` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mic_datapasok`
--

INSERT INTO `mic_datapasok` (`id`, `nama_mic`, `plug_type`, `jenis_mic`, `toko`, `status_brg`) VALUES
(24, 'Soundtech', 'USB', 'Dynamic Microphone', 'Port', 'Belum Terdaftar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mic_datapasok`
--
ALTER TABLE `mic_datapasok`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
