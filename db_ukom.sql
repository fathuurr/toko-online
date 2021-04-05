-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2021 pada 04.59
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `jenis` varchar(256) NOT NULL,
  `seri` varchar(256) NOT NULL,
  `tahun` varchar(256) NOT NULL,
  `harga` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `jenis`, `seri`, `tahun`, `harga`, `keterangan`, `gambar`, `time`) VALUES
(15, 'SONY', '11212', '2003', '10000', '\"SEBUAH PRINTER YANG CUKUP BAGUS DAN AWET\"\r\n', '', '2021-04-03 08:16:38'),
(16, 'ACER', '11202', '2021', '10002', 'SEBUAH PRINTER DENGAN PERFORMA YANG MANTAP\r\n\r\n', '', '2021-04-03 08:21:58'),
(24, 'HP', '11202', '2021', '10002', '\"SEBUAH PRINTER YANG CUKUP BAGUS DAN AWET\"', '', '2021-04-03 08:22:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `telepon` varchar(256) NOT NULL,
  `tipe` varchar(256) NOT NULL,
  `harga` varchar(256) NOT NULL,
  `bayar` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `nama`, `email`, `alamat`, `telepon`, `tipe`, `harga`, `bayar`, `time`, `status`) VALUES
(4, 'FITTO AJIRA', 'fittoajira@gmail.com', 'JLN KARTINI 13 DALAM', '081384467900', 'hp', '10002', 'Tunai', '2021-04-02 14:55:55', 'Lunas'),
(6, 'Rosi', 'samakami568@gmail.com', 'JLN KARTINI 13 DALAM', '081384467900', 'hp', '10002', 'Tunai', '2021-04-03 04:46:48', 'Batal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `role`, `time`) VALUES
(17, 'fitto', '123', 1, '2021-04-01 12:34:04'),
(18, 'fitto', '1234', 2, '2021-04-01 12:46:11'),
(19, 'dani', '123', 2, '2021-04-01 14:08:42'),
(20, 'fitto', '123', 2, '2021-04-02 12:58:25'),
(21, 'fitto', '567', 2, '2021-04-03 19:05:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
