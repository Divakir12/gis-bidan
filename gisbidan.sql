-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2022 pada 02.20
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gisbidan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidan`
--

CREATE TABLE `bidan` (
  `id_bidan` int(6) NOT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidan`
--

INSERT INTO `bidan` (`id_bidan`, `tempat`, `no_telepon`, `alamat`, `latitude`, `longitude`, `deskripsi`) VALUES
(1, 'Bidan Parwati', '081327638132', 'Jl. Yos Sudarso Gg. Sawunggalih II No.9, Dusun I, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53135', '-7.4208933118332885', '109.20677117684794', 'Buka setiap hari pukul 07.00 - 21.00'),
(2, 'Bidan Aswiningrum NS, S.ST', '0281627491', 'Jl. Balai Kambang No.46, Pasiraja Lor, Bantarsoka, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53133', '-7.422207429383986', '109.21626138865511', 'Buka setiap hari pukul 07.00 - 21.00'),
(3, 'PMB (Praktek Mandiri Bidan) Ny. Nur Hidayati', '08156970197', 'Dukuh, Rejasari, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53134', '-7.423630386924781', '109.21341568984782', 'Buka setiap hari pukul 07.00 - 21.00'),
(4, 'Bidan S Haryani', '081542765200', 'Jl. Sidodadi Jl. DI Panjaitan No.3, Samudra, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147', '-7.4305871811410125', '109.24997421761182', 'Buka setiap hari pada pukul 07.00 - 21.00'),
(5, 'RSIA Bunda Arif', '0281636555', 'Jl. Jatiwinangun No.16, Kebondalem, Purwokerto Lor, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53114', '-7.420671765362843', '109.24327942391065', 'Buka setiap hari 24 jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Diva', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidan`
--
ALTER TABLE `bidan`
  MODIFY `id_bidan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
