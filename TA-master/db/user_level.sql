-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 08.03
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_level`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_juri`
--

CREATE TABLE `admin_juri` (
  `id_admin_juri` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_juri`
--

INSERT INTO `admin_juri` (`id_admin_juri`, `username`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin_satu', 'adminnn', 'admin1@gmail.com', '12345', 'admin'),
(2, 'admin_dua', 'admin_dua', 'admin2@gmail.com', '12345', 'admin'),
(3, 'juri_satu', 'juriii', 'juri1@gmail.com', '12345', 'juri'),
(4, 'juri_dua', 'jurii', 'juri2@gmail.com', '12345', 'juri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya`
--

CREATE TABLE `karya` (
  `id_karya` int(10) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `nilai` varchar(255) NOT NULL,
  `nilai_2` varchar(255) NOT NULL,
  `tanggal_ditanggapi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karya`
--

INSERT INTO `karya` (`id_karya`, `nama_peserta`, `judul`, `deskripsi`, `nama`, `ukuran`, `tipe`, `tanggal`, `nilai`, `nilai_2`, `tanggal_ditanggapi`) VALUES
(17, 'Muhamad Qolbu', 'Lomba Fotografi', 'ini deskripsi', 'testkarya.png', '67495', 'image/png', '2021-12-11 06:58:47', '99', '88', '2021-12-11 06:59:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(10) NOT NULL,
  `judul_konten` varchar(255) NOT NULL,
  `isi_konten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul_konten`, `isi_konten`) VALUES
(5, 'Kebakaran', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sed magnam nisi tempora aut officia culpa, mollitia nesciunt! Ratione recusandae dolor delectus dicta odio. Saepe esse quaerat nam perferendis quas!'),
(6, 'Kecelelakaan', 'lOREM IPSUMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `level`) VALUES
(7, '2003018', 'Muhamad Rafli Septian', 'rafliseptiannn25@gmail.com', '$2y$10$BvZb0vM1Mau1YgvQwL7KXeYcMsLWGRRD0Ko6gRQWV6jkcNgmpS3KC', 'peserta'),
(8, '2002018', 'Qolbu', 'aksara@gmail.com', '$2y$10$Cvqh0aNzEy5CQHAnQOEp5eltHaWZY/HXii5bWiZJQYi6hYF4LnONq', 'peserta'),
(9, '2003015', 'Asoy', 'tegargebleg@gmail.com', '$2y$10$aECvFfuFFlLo1J0iTGKs/OglovWOEkzN5GqY.F/.pQPuZRZT/5tWe', 'peserta'),
(10, '2003001', 'Abad', 'abad@gmail.com', '$2y$10$A4gRHp4JCFDVhG8seVACFeIQnxL2m2e3f72kV9kOUYZBdahWCdPMy', 'peserta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_juri`
--
ALTER TABLE `admin_juri`
  ADD PRIMARY KEY (`id_admin_juri`);

--
-- Indeks untuk tabel `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_juri`
--
ALTER TABLE `admin_juri`
  MODIFY `id_admin_juri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `karya`
--
ALTER TABLE `karya`
  MODIFY `id_karya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
