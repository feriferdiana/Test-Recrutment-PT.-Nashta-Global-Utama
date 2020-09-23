-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2020 pada 11.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_data_nilai`
--

DROP TABLE IF EXISTS `mhs_data_nilai`;
CREATE TABLE `mhs_data_nilai` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(3) NOT NULL,
  `id_mata_kuliah` int(3) NOT NULL,
  `nilai` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs_data_nilai`
--

INSERT INTO `mhs_data_nilai` (`id`, `id_mahasiswa`, `id_mata_kuliah`, `nilai`, `keterangan`) VALUES
(7, 4, 5, '72', ''),
(8, 4, 5, '85', ''),
(9, 4, 7, '65', ''),
(10, 4, 7, '84', ''),
(11, 5, 6, '88', ''),
(12, 5, 6, '65', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_mahasiswa`
--

DROP TABLE IF EXISTS `mhs_mahasiswa`;
CREATE TABLE `mhs_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs_mahasiswa`
--

INSERT INTO `mhs_mahasiswa` (`id`, `nama`, `alamat`) VALUES
(4, 'bila', 'bandung'),
(5, 'angel', 'jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_mata_kuliah`
--

DROP TABLE IF EXISTS `mhs_mata_kuliah`;
CREATE TABLE `mhs_mata_kuliah` (
  `id` int(11) NOT NULL,
  `nama_mata_kuliah` varchar(25) NOT NULL,
  `id_mahasiswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs_mata_kuliah`
--

INSERT INTO `mhs_mata_kuliah` (`id`, `nama_mata_kuliah`, `id_mahasiswa`) VALUES
(5, 'Inggris', 4),
(6, 'Jepang', 5),
(7, 'Indonesia', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs_data_nilai`
--
ALTER TABLE `mhs_data_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mhs_mahasiswa`
--
ALTER TABLE `mhs_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mhs_mata_kuliah`
--
ALTER TABLE `mhs_mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mhs_data_nilai`
--
ALTER TABLE `mhs_data_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `mhs_mahasiswa`
--
ALTER TABLE `mhs_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mhs_mata_kuliah`
--
ALTER TABLE `mhs_mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
