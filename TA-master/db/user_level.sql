-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 13.35
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
(17, 'Muhamad Qolbu', 'Lomba Fotografi', 'ini deskripsi', 'testkarya.png', '67495', 'image/png', '2021-12-11 06:58:47', '99', '88', '2021-12-11 06:59:39'),
(18, 'Muhamad Rafli Septian', 'Foto Gambar', 'Foto Bagus', 'seminar.png', '745741', 'image/png', '2021-12-11 11:06:26', '80', '96', '2021-12-11 11:20:40'),
(19, 'Muhamad Rafli Septian', 'seminar', 'test_karya', '1.jpg', '14260', 'image/jpeg', '2021-12-11 11:43:01', '90', '89', '2021-12-11 11:45:18'),
(20, 'Andra', 'sekolah', 'bagus', '2.jpg', '6484', 'image/jpeg', '2021-12-11 12:01:02', '80', '86', '2021-12-11 12:03:49'),
(21, 'rafli', 'bango', 'Foto Bagus', '1.png', '21795', 'image/png', '2021-12-11 12:18:38', '86', '86', '2021-12-11 12:25:05');

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
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilai_2` varchar(255) NOT NULL,
  `tanggal_ditanggapi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(25, '2003001', 'Messi', 'messi@gmail.com', '$2y$10$k5D6bO9vFFQThL1.Jw47EuDD07Y3RElYytstGBvUYy0hVjfIfHPJ6', 'peserta'),
(26, '2003002', 'ronaldo', 'ronaldo@gmail.com', '$2y$10$iVEjaBCwOxyIij3aN3Nb/egolT1nrhlJGyaZuz5DFYPf9lnlhX3z6', 'admin'),
(27, '2003003', 'neymar', 'neymar@gmail.com', '$2y$10$1V7tcqeWlU4B8stHXC/UX.AiyTTG70Uq1oK0JDs2YOfriUqDQLXvW', 'juri'),
(28, '2003004', 'naruto', 'naruto@gmail.com', '$2y$10$lK9ckiavVswZte6HYmqGceWVjgGAUk8jY6dm8Af0OuHS6iCtkvz.W', 'juri');

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
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

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
  MODIFY `id_karya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
