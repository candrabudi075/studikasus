-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2023 pada 08.40
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `merek` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `merek`, `kondisi`, `harga`, `tgl_masuk`) VALUES
(0, 'realme', 'C11', 'Bagus', 1050000, '2023-05-10'),
(1, 'xiaomi', 'note 8', 'bagus', 1000000, '2023-03-01'),
(2, 'infinix', 'hot 10s', 'bagus', 900000, '2023-04-28'),
(3, 'realme', '8 5G', 'Bagus', 1800000, '2023-05-15'),
(4, 'infinix', 'note 12', 'bagus', 2700000, '2023-05-25'),
(5, 'xiaomi', 'note 9 pro', 'bagus', 1400000, '2023-05-08'),
(6, 'xiaomi', 'note 12', 'bagus', 2000000, '2023-04-01'),
(7, 'realme', 'c55', 'bagus', 1850000, '2023-05-15'),
(8, 'realme', 'GT neo 2', 'bagus', 4700000, '2023-01-01'),
(9, 'xiaomi', 'note 11 pro', 'bagus', 3000000, '2023-04-28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
