-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 15.30
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
(9, 'Muhamad Rafli Septian', 'Foto Gambar', 'Foto Bagus', '1.png', '21795', 'image/png', '2021-12-10 13:20:15', '90', '98', '2021-12-10 13:28:10');

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
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Rafli', 'Admin', '12345', 'admin'),
(5, 'Rafli', '2003018', '12345', 'peserta'),
(6, 'Tigin', '2003019', '12345', 'juri');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `karya`
--
ALTER TABLE `karya`
  MODIFY `id_karya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
