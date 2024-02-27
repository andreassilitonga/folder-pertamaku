-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2021 pada 08.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `id` int(11) NOT NULL,
  `nm_bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id`, `nm_bagian`) VALUES
(1, 'Bag. Tata Usaha'),
(2, 'Sub. Bagian Umum'),
(3, 'Sub. Bagian Perencanaan'),
(4, 'Bidang Infokom'),
(5, 'Bidang Penindakan'),
(6, 'Bidang Pemeriksaan'),
(7, 'Seksi Inspeksi'),
(8, 'Seksi Sertifikasi'),
(9, 'Bidang Pengujian'),
(10, 'Seksi Peng. Microbiologi'),
(11, 'Seksi Peng. Kimia'),
(12, 'Loka Toba Samosir'),
(13, 'Loka Tanjung Balai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(3, '2020-03-02', 'Aida_Fitri.rar', 11392190, 'rar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `nm_golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id`, `nm_golongan`) VALUES
(1, 'I/a'),
(2, 'I/b'),
(3, 'I/c'),
(4, 'I/d'),
(5, 'II/a'),
(6, 'II/b'),
(7, 'II/c'),
(8, 'II/d'),
(9, 'III/a'),
(10, 'III/b'),
(11, 'III/c'),
(12, 'III/d'),
(13, 'IV/a'),
(14, 'IV/b'),
(15, 'IV/c'),
(16, 'IV/d'),
(17, 'IV/e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nip` varchar(150) NOT NULL,
  `level` enum('pegawai','admin') NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tela` varchar(250) NOT NULL,
  `tala` date NOT NULL,
  `usia` varchar(250) NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `tmtcpns` date NOT NULL,
  `mkp` varchar(250) NOT NULL,
  `golongan` enum('I/a','I/b','I/c','I/d','II/a','II/b','II/c','II/d','III/a','III/b','III/c','III/d','IV/a','IV/b','IV/c','IV/d','IV/e') NOT NULL,
  `tmtgol` date NOT NULL,
  `mkg` varchar(250) NOT NULL,
  `eselon` enum('I','II','III','IV') NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `bagian` enum('Bag. Tata Usaha','Sub. Bagian Umum','Sub. Bagian Perencanaan','Bidang Infokom','Bidang Penindakan','Bidang Pemeriksaan','Seksi Inspeksi','Seksi Sertifikasi','Bidang Pengujian','Seksi Peng. Microbiologi','Seksi Peng. Kimia','Loka Toba Samosir','Loka Tanjung Balai') NOT NULL,
  `status` enum('PNS','CPNS') NOT NULL,
  `dikstruk` varchar(250) NOT NULL,
  `tadi` varchar(34) NOT NULL,
  `propen` varchar(250) NOT NULL,
  `prodi` varchar(250) NOT NULL,
  `nase` varchar(250) NOT NULL,
  `talu` year(4) NOT NULL,
  `agama` enum('ISLAM','KRISTEN PROTESTAN','KRISTEN KATOLIK','BUDDHA','HINDU','KONGHUCU') NOT NULL,
  `file1` varchar(200) NOT NULL,
  `file2` varchar(200) NOT NULL,
  `file3` varchar(200) NOT NULL,
  `file4` varchar(200) NOT NULL,
  `file5` varchar(200) NOT NULL,
  `file6` varchar(200) NOT NULL,
  `file7` varchar(200) NOT NULL,
  `file8` varchar(200) NOT NULL,
  `file9` varchar(200) NOT NULL,
  `file10` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nip`, `level`, `password`, `nama`, `tela`, `tala`, `usia`, `jenkel`, `tmtcpns`, `mkp`, `golongan`, `tmtgol`, `mkg`, `eselon`, `jabatan`, `bagian`, `status`, `dikstruk`, `tadi`, `propen`, `prodi`, `nase`, `talu`, `agama`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`, `file10`) VALUES
('217510010', 'admin', '7b02d117d11404f3a62c3fae7be4af3d', 'Andreas Silitonga', 'Medan', '2020-10-05', '20', 'Laki-Laki', '2020-10-22', '10', 'IV/b', '2020-10-19', '7', 'IV', 'IT', 'Seksi Sertifikasi', 'PNS', 'Ya', '2020', 'Ilmu Komputer', 'Teknik Informatika', 'Universitas Methodist Indonesia', 2020, 'KRISTEN PROTESTAN', '', '', '', '', '', '', '', '', '', ''),
('551010', 'pegawai', '1985603a43608a91f5d79a4b3dada652', 'Kevin', 'Medan', '2020-10-05', '20', 'Laki-Laki', '2020-10-22', '10', 'IV/b', '2020-10-19', '7', 'IV', 'IT', 'Seksi Sertifikasi', 'PNS', 'Ya', '2020', 'Ilmu Komputer', 'Teknik Informatika', 'Universitas Methodist Indonesia', 2020, 'KRISTEN PROTESTAN', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
