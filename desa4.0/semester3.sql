-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Des 2018 pada 08.35
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `semester3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `nama_pengirim` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `nama_pengirim`, `tanggal`, `foto`, `deskripsi`) VALUES
(4, 'Dinas Pertanian Bondowoso Anggarkan Pengadaan Alat Penggiling Padi', 'sukimprit ardiansya, skom', '2018-12-02', 'blog1.jpg', 'Dinas Pertanian Kabupaten Bondowoso, Jawa Timur, akan menganggarkan dana pengadaan Rice Milling Unit atau mesin penggiling padi standar nasional agar segera mendapatkan sertifikat organik internasional.'),
(7, 'Bondowoso Kampayekan Penerapan Teknologi untuk Pacu Produktivitas Pertanian', 'Abdul Safarai Mukarromah,', '2018-12-13', 'blog2.jpg', 'Untuk memaksimalkan produktivitas pertanian, Dinas Pertanian (Disperta) Kabupaten Bondowoso menggelar Gelar Teknologi (Geltek) Pertanian yang dilaksanakan di desa Lojajar, Kecamatan Tenggarang, Bondowoso, Jawa Timur. '),
(8, 'Bondowoso Terus Kembangkan Pertanian Organik', 'H. Budiono', '2017-11-30', 'blog3.jpg', 'Pemerintah Kabupaten Bondowoso, Jawa Timur terus mengembangkan sektor pertanian organik di sejumlah titik, guna meningkatkan pendapatan para petani setempat. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(25) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `foto`, `deskripsi`, `tanggal`) VALUES
(7, 'da', 'blog2.jpg', 'dd', '2018-12-16'),
(8, 'am', 'a2.jpg', 'mdi', '2018-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kopi`
--

CREATE TABLE IF NOT EXISTS `kopi` (
  `id_kopi` int(11) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(15) NOT NULL,
  `luas_area1` int(11) NOT NULL,
  `kopi_arabika` int(11) NOT NULL,
  `tr1` int(11) NOT NULL,
  `luas_area2` int(11) NOT NULL,
  `kopi_robusta` int(11) NOT NULL,
  `tr2` int(11) NOT NULL,
  `total` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kopi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `kopi`
--

INSERT INTO `kopi` (`id_kopi`, `kecamatan`, `luas_area1`, `kopi_arabika`, `tr1`, `luas_area2`, `kopi_robusta`, `tr2`, `total`) VALUES
(48, 'pujer', 94, 11, 22, 11, 33, 43, '44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pegawai` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `id_pegawai`, `kecamatan`, `username`, `password`, `level`) VALUES
(2, 1, 'dinas', 'dinas', 'dinas', 'admin'),
(5, 351123433, 'sempol', 'sempol@gmail.com', '123456789', 'user'),
(6, 351190221, 'pujer', 'pujer@gmail.com', '123456789', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `padi`
--

CREATE TABLE IF NOT EXISTS `padi` (
  `id_padi` int(11) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(25) NOT NULL,
  `jumlah_tanam1` int(11) NOT NULL,
  `padi_hibrida` int(11) NOT NULL,
  `jumlah_tanam2` int(11) NOT NULL,
  `padi_inbrida` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kerusakan` int(11) NOT NULL,
  PRIMARY KEY (`id_padi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `padi`
--

INSERT INTO `padi` (`id_padi`, `kecamatan`, `jumlah_tanam1`, `padi_hibrida`, `jumlah_tanam2`, `padi_inbrida`, `total`, `kerusakan`) VALUES
(3, 'pujer', 250, 450, 88, 42, 492, 42),
(4, 'tenggarang', 250, 140, 32, 123, 263, 190),
(5, 'tenggarang', 59, 78, 52, 90, 168, 89),
(6, 'paskisan', 950, 58, 90, 20, 78, 902),
(7, 'paskisan', 2, 2, 2, 3, 5, 45),
(8, 'pujer', 550, 250, 110, 230, 480, 233),
(9, 'paskisan', 2, 259, 989, 23, 282, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `foto` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=351198322 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `telepon`, `alamat`, `kecamatan`, `foto`) VALUES
(1, 'Admin', 'Laki - Laki', '2018-01-01', '087857557513', 'JL. Tokyo Ghooul 97 Tenggarang', 'admin', 'nsw.png'),
(351123433, 'sukimprit julo', 'Perempuan', '2018-12-08', '089878798798', 'jjkhkjhkjhkjh', 'paskisan', 'foto-suenep.jpg'),
(351190221, 'Ir, Hassan Abu Nawas', 'Laki - Laki', '1995-07-13', '087857557551', 'Jl. Pujer No.5 Pujer', 'pujer', 'DSC_0001.jpg'),
(351198321, 'Abdul saskeh', 'Perempuan', '2018-12-12', '087857557751', 'desa konohagakure no sato', 'wonosari', '1420374_original.jpg');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
