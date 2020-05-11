-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 13.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040127`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(2) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nama_makanan` char(15) DEFAULT NULL,
  `asal_daerah` char(15) DEFAULT NULL,
  `bahan_dasar` char(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `foto`, `nama_makanan`, `asal_daerah`, `bahan_dasar`, `harga`) VALUES
(1, 'pt.jpg', 'putu ayu', 'jawa tengah', 'terigu, kelapa gula dan vanili', 500),
(2, 'bika.jpg', 'bika ambon', 'medan', 'telor,santan, gula', 500),
(3, 'combro.jpg', 'combro', 'jawa barat', 'singkong,kelapa dan oncom', 500),
(4, 'pp.jpg', 'pempek', 'palembang', 'tapioka,terigu, tenggiri', 1500),
(5, 'bt.jpg', 'batagor', 'jawa barat', 'terigu, taioka, ikan, pangsit dan tahu', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan daerah`
--

CREATE TABLE `makanan daerah` (
  `id` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama makanan` varchar(15) NOT NULL,
  `asal daerah` varchar(15) NOT NULL,
  `bahan dasar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makanan daerah`
--
ALTER TABLE `makanan daerah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `makanan daerah`
--
ALTER TABLE `makanan daerah`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
