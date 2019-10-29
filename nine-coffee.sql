-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2019 pada 17.36
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nine-coffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`Id`, `nama`, `username`, `password`, `role_id`) VALUES
(7, 'fabi', 'fabi', '$2y$10$7r1hfnnI.6vRT9Qc7zEzxO1lCLd8mU/UKISfszPn.MS', 1),
(8, 'riswanda', 'riswanda', '12345', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `Id` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `awards`
--

CREATE TABLE `awards` (
  `Id` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `awards`
--

INSERT INTO `awards` (`Id`, `judul`, `deskripsi`, `foto`, `tanggal`) VALUES
(2, 'nine coffee roastery', 'nine coffee juga pernah mengikuti lomba - lomba seperti brewing competition', '0', '2019-10-24'),
(3, 'nine coffee roastery', 'penanaman kopi terbaik harus mengetahui teknik tertentu untuk keberhasilan panen', '0', '2019-10-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barista`
--

CREATE TABLE `barista` (
  `Id` int(11) NOT NULL,
  `nama_barista` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barista`
--

INSERT INTO `barista` (`Id`, `nama_barista`, `deskripsi`, `foto`) VALUES
(4, 'Bopeng', 'Bopeng bergabung dengan nine coffee sudah sejak  3 thn lalu', 'barber_team_021.jpg'),
(5, 'ryan hahaha', 'ryan hahaha bergabung dengan nine coffee sudah sejak  3 thn lalu dia barista yang cukup pro', 'barber_team_031.jpg'),
(6, 'fabi putra ', 'salah satu pro peracik kopi di nine coffee dia sudah lama menggeluti profesi sebagai barista ', 'barber_team_022.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `Id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`Id`, `deskripsi`, `foto`, `tanggal`, `judul`) VALUES
(2, 'Kopi Bondowoso sangat terkenal dikalangan penikmat kopi diseluruh nusantara', 'arabica1.jpg', '2019-10-16', 'Kopi Bondowoso');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `Id` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`Id`, `nama_event`, `deskripsi`, `foto`, `tanggal`) VALUES
(4, 'FKN 4 Bondowoso', 'Festival Kopi Nusantara akan dilaksanakan pada tanggal 2 november', 'barber_team_033.jpg', '2019-10-27'),
(5, 'FKN 3 Bondowoso ', 'nine coffee juga pernah mengikuti lomba - lomba seperti brewing competition', 'barber_team_011.jpg', '2019-10-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `Id` int(11) NOT NULL,
  `nama_produk` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`Id`, `nama_produk`, `deskripsi`, `foto`, `sejarah`) VALUES
(2, 'robusta ijen speciality', 'penanaman kopi terbaik harus mengetahui teknik tertentu', 'Picture14-128.png', 'robusta pertama kali dibawa oleh para penjajah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `Id` int(11) NOT NULL,
  `judul` varchar(140) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `barista`
--
ALTER TABLE `barista`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `awards`
--
ALTER TABLE `awards`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `barista`
--
ALTER TABLE `barista`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
