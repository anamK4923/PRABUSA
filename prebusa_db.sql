-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2023 pada 08.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prebusa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_penjualan`
--

CREATE TABLE `rekap_penjualan` (
  `no_faktur` varchar(7) NOT NULL,
  `tgl` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_prebusa`
--

CREATE TABLE `stok_prebusa` (
  `kode_barang` varchar(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_stok` enum('Shoope','Tiktok','Offline/wa') NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transjual`
--

CREATE TABLE `transjual` (
  `no_faktur` varchar(7) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rekap_penjualan`
--
ALTER TABLE `rekap_penjualan`
  ADD KEY `no_faktur` (`no_faktur`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `stok_prebusa`
--
ALTER TABLE `stok_prebusa`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `transjual`
--
ALTER TABLE `transjual`
  ADD PRIMARY KEY (`no_faktur`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekap_penjualan`
--
ALTER TABLE `rekap_penjualan`
  ADD CONSTRAINT `rekap_penjualan_ibfk_1` FOREIGN KEY (`no_faktur`) REFERENCES `transjual` (`no_faktur`),
  ADD CONSTRAINT `rekap_penjualan_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `transjual`
--
ALTER TABLE `transjual`
  ADD CONSTRAINT `transjual_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `stok_prebusa` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
