-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 17.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `kode_alamat` varchar(50) NOT NULL,
  `no_rumah` char(3) NOT NULL,
  `kode_rt` varchar(6) NOT NULL,
  `kode_rw` varchar(6) NOT NULL,
  `kode_dusun` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`kode_alamat`, `no_rumah`, `kode_rt`, `kode_rw`, `kode_dusun`) VALUES
('SKM00100101', '01', 'RT.001', 'RW.001', 'SKM'),
('SKM00100225', '25', 'RT.001', 'RW.002', 'SKM'),
('SKM00200101', '01', 'RT.002', 'RW.001', 'SKM'),
('SKM00200102', '02', 'RT.002', 'RW.001', 'SKM'),
('SKM00200103', '03', 'RT.002', 'RW.001', 'SKM'),
('SKM00200104', '04', 'RT.002', 'RW.001', 'SKM'),
('SKM00200105', '05', 'RT.002', 'RW.001', 'SKM'),
('SKM00200106', '06', 'RT.002', 'RW.001', 'SKM'),
('SKM00200108', '08', 'RT.002', 'RW.001', 'SKM'),
('SKM00200109', '09', 'RT.002', 'RW.001', 'SKM'),
('SKM00300225', '25', 'RT.003', 'RW.002', 'SKM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `kode_dusun` varchar(6) NOT NULL,
  `nama_dusun` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dusun`
--

INSERT INTO `dusun` (`kode_dusun`, `nama_dusun`) VALUES
('PBR', 'Pabuaran'),
('SKM', 'Suka Maju'),
('SRG', 'Sarengseng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `penyebab_meninggal` varchar(50) NOT NULL,
  `tempat_meninggal` varchar(100) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `umur` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `nik`, `penyebab_meninggal`, `tempat_meninggal`, `tanggal_meninggal`, `umur`) VALUES
(3, '3671060705870003', 'Sakit', 'Rumah Sakit', '2023-05-23', '22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(15) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `status_keberadaan` varchar(10) NOT NULL DEFAULT 'ada',
  `kode_alamat` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `nama_ayah`, `nama_ibu`, `status_keberadaan`, `kode_alamat`, `foto`) VALUES
(16, '3213050403010000', 'Muhammad Jaja Royana', 'Laki-laki', 'Subang', '2001-03-04', 'Islam', 'S2/Sederajat', 'Wiraswasta', 'Belum menikah', 'Baharudin', 'Maemunah', 'ada', 'SKM00200104', 'WhatsApp_Image_2023-05-17_at_15_39_21.png'),
(25, '3215255911020007', 'Trina Ramadhian', 'Perempuan', 'Karawang', '2002-11-19', 'Islam', 'D3/Sederajat', 'PNS', 'Belum menikah', 'Ramadhan', 'Trina', 'ada', 'SKM00100101', 'default.jpg'),
(26, '3215251911990004', 'Ikhsan Permana Hadiansyah', 'Laki-laki', 'Subang', '1999-11-19', 'Islam', 'S1/Sederajat', 'Polri', 'Menikah', 'Hadi', 'Iim', 'ada', 'SKM00200102', 'default.jpg'),
(27, '3215130711020001', 'Bayu Prasetya Ramadhan', 'Laki-laki', 'Karawang', '2002-11-07', 'Islam', 'D3/Sederajat', 'Wiraswasta', 'Belum menikah', 'Bayu', 'Ramadhian', 'ada', 'SKM00300225', 'default.jpg'),
(37, '1111111111111116', 'Vanka Anzalna', 'Laki-laki', 'Karawang', '2000-01-11', 'Islam', 'Tamat SLTA/Sederajat', 'Wiraswasta', 'Belum menikah', 'Vicky', 'Diana', 'ada', 'SKM00200109', 'default.jpg'),
(38, '1111111111111117', 'Retha Akhiriana', 'Perempuan', 'Karawang', '1999-05-04', 'Islam', 'Tamat SLTA/Sederajat', 'Buruh', 'Belum menikah', 'Agus', 'Tini', 'ada', 'SKM00200101', 'Desain_tanpa_judul_(8).png'),
(39, '1111111111111118', 'Anggi Ayu Anggraeni', 'Perempuan', 'Karawang', '1999-11-11', 'Islam', 'D3/Sederajat', 'Buruh', 'Belum menikah', 'Budi', 'Yuli', 'ada', 'SKM00200103', 'default.jpg'),
(40, '1111111111111119', 'Widmaya', 'Perempuan', 'Karawang', '1999-05-21', 'Islam', 'Tamat SLTA/Sederajat', 'Belum bekerja', 'Menikah', 'Toni', 'Rani', 'ada', 'SKM00200105', 'default.jpg'),
(41, '1111111111111110', 'Vivian', 'Perempuan', 'Subang', '2001-12-11', 'Islam', 'Tamat SLTA/Sederajat', 'Belum bekerja', 'Belum menikah', 'Rendi', 'Nina', 'ada', 'SKM00200106', 'default.jpg'),
(42, '1111111111111121', 'Yuliani Nurhasanah', 'Perempuan', 'Subang', '2000-07-12', 'Islam', 'Tamat SLTA/Sederajat', 'Belum bekerja', 'Belum menikah', 'Rizky', 'Fani', 'ada', 'SKM00200108', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `kode_rt` char(6) NOT NULL,
  `no_rt` varchar(6) NOT NULL,
  `ketua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`kode_rt`, `no_rt`, `ketua`) VALUES
('RT.001', '001', 'Wijoyo Kusumo'),
('RT.002', '002', 'Bambang Herlambang'),
('RT.003', '003', 'Wijoyo Kusumo'),
('RT.004', '004', 'Jumisan'),
('RT.005', '005', 'Wijoyo Kusumo'),
('RT.006', '006', 'Jumisan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `kode_rw` char(6) NOT NULL,
  `no_rw` varchar(6) NOT NULL,
  `ketua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`kode_rw`, `no_rw`, `ketua`) VALUES
('RW.001', '001', 'Joni Iskandar'),
('RW.002', '002', 'Jumisan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `no_surat` int(25) NOT NULL,
  `nik` char(16) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`no_surat`, `nik`, `jenis`, `tanggal`, `keperluan`, `status`) VALUES
(1, '3213050403010000', 'SP', '0000-00-00', 'untuk persyaratan pembuatan SKCK', '0'),
(2, '3213050403010000', 'SP', '0000-00-00', 'SKCK', '0'),
(3, '3213050403010000', 'SP', '2023-05-27', 'sadsdas', '0'),
(4, '3213050403010000', 'SKTM', '0000-00-00', 'Untuk persyaratan pengajuan beasiswa', '2'),
(5, '3213050403010000', 'SP', '0000-00-00', 'Melamar  Pekerjaan', '2'),
(6, '3213050403010000', 'SP', '2023-05-31', 'Pindahan domisili', '2'),
(7, '3215255911020007', 'SP', '2023-06-02', 'Melamar Pekerjaan', '2'),
(8, '3215255911020007', 'SP', '2023-06-02', 'Bikin ktp', '1'),
(9, '3215251911990004', 'SP', '2023-06-02', 'Pindah Rumah', '2'),
(10, '3215251911990004', 'SKTM', '2023-06-02', '...', '0'),
(11, '1111111111111117', 'SP', '2023-06-06', 'Membuat Kartu Tanda Penduduk', '1'),
(12, '1111111111111117', 'SKTM', '2023-06-06', 'Pengajuan beasiswa', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `keluarga_tujuan` varchar(115) NOT NULL,
  `kode_rt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama`, `tanggal`, `ktp`, `alamat`, `keperluan`, `keluarga_tujuan`, `kode_rt`) VALUES
(2, 'Jaja Royana', '2023-06-07', 'ktp1.png', 'Kp Babaka', 'Silaturahmi', 'Bambang', 'RT.002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `password`, `role`) VALUES
(1, '3213050403010000', '$2y$10$rnsJx6ixXcBST0I3gAjvJul3v/IoCKb0RxCny5yIfIox5QO62RJe.', 'admin'),
(10, '3215255911020007', '$2y$10$i8D4QOruDxAB.N35XfrUCedtB0C.LQnaPUS4DdIutLJhNVt5heKTG', 'ketua_rt'),
(11, '3215251911990004', '$2y$10$zkHU5YhShjCMJ68HLFivEeBmXEDcC7tkYoMQM1xG/6qzFOkih6PzO', 'ketua_rt'),
(12, '3215130711020001', '$2y$10$LlYrNYRiiu7biS2JECgKVOeRQtW2Mycw4nzew/vRziTRRaiErJZaq', 'penduduk'),
(22, '1111111111111116', '$2y$10$zoE0BTv8KKk.gCIFRcdl9.b6ED71S8uelE4GfoTTaF3HqHrYmni0q', 'penduduk'),
(23, '1111111111111117', '$2y$10$k4qfcLCERJQM4VV/CakUO.7IA9fdqM5utfrl3ubiZmDKIcq3jV.Qy', 'penduduk'),
(24, '1111111111111118', '$2y$10$4Q6zQ8Ip/q5W.9I2NDV7FedwgsLuZCBzb/9KlR8FAoAmWQcF/WEBK', 'penduduk'),
(25, '1111111111111119', '$2y$10$vOYNTCuCxBCa7TfcxNiXIe.PIFdVMMX0kAnAzxTRWZyk0yLRU2Gyi', 'penduduk'),
(26, '1111111111111110', '$2y$10$ZVyc8ypDNCBe0W4l4bC2Eexd1oZ0LTBzNJfyB8fVPktnTB5cdbZX2', 'penduduk'),
(27, '1111111111111121', '$2y$10$TTtUz1m6lPXb1GQtwPWU2e8/U3Q6yp1mKc3n3a0OPNRIWNdbZnS0e', 'penduduk');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`kode_alamat`);

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`kode_dusun`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`kode_rt`);

--
-- Indeks untuk tabel `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`kode_rw`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `no_surat` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
