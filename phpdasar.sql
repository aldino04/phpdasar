-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2021 pada 06.09
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(18, '41818010132', 'Muhammad satria Aldino', 'satria.aldino491@gmail.co.id', 'Sistem Informasi', 'aldino.png'),
(19, '41818010071', 'Fahmy Umarsyahh', 'fahmy@gmail.co.id', 'Teknik Industri', '60f16d4db5e3a.png'),
(20, '41818010077', 'Muhamad Audi Airlangga', 'audi@gmail.com', 'Teknik Mesin', 'audi.png'),
(21, '41818010100', 'Nadia Tri Setiowati', 'nadia@gmail.com', 'Akuntansi', '60f547f28c536.png'),
(29, '41818010110', 'Leonardo Octorio', 'leonardo@gmail.com', 'Teknik Informatika', '60f5522682d27.png'),
(30, '4181801001', 'Ali Chandra', 'ali@gmail.com', 'Sistem Informasi', '60f55259e5011.png'),
(31, '41818010002', 'Afra Sausan', 'afra@gmail.com', 'Sistem Informasi', '60f5529664ad6.png'),
(32, '41818010003', 'Naufal Bagaskara', 'naufal@gmail.com', 'Teknik Informatika', '60f552b860b9b.png'),
(33, '41818010010', 'Muhammad Zidan Qaf', 'zidan@gmail.com', 'Sistem Informasi', '60f552f12c51b.png'),
(34, '41818010011', 'Rachman Maulana', 'rachman@gmail.com', 'Sistem Informasi', '60f55314e1dd9.png'),
(35, '41818010012', 'Adittya Alifi', 'adittya@gmail.com', 'Sistem Informasi', '60f553349a76b.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'satriaaldino', '$2y$10$zKtgdEFyjGQWITJY5bd0vexqU7u3w6U4MUk.8t9ed.KREL6Srx6rC'),
(2, 'admin', '$2y$10$2Ku0tQVk3iDoKV4BEtm1l.WfJKcjQ924NKkzNaFVTOSKj7WERZM02'),
(3, 'fahmy', '$2y$10$MShKqIEf9AfHXzRLnlTXr.BiActMoAHLRSTlqD4S8N4E78KD26uxu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nim`,`nama`),
  ADD KEY `nim` (`nim`,`nama`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
