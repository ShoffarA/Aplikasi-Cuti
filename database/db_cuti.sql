-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2022 pada 13.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `telp_adm` varchar(15) NOT NULL,
  `user_adm` varchar(50) NOT NULL,
  `pass_adm` varchar(100) NOT NULL,
  `foto_adm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `telp_adm`, `user_adm`, `pass_adm`, `foto_adm`) VALUES
(1, 'Administrator', '08962878534', 'admin', 'admin', ''),
(2, 'Leader', '0897263572827', 'leader', 'leader', ''),
(3, 'Pegawai', '083728382', 'Pegawai', 'pegawai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `no_cuti` varchar(30) NOT NULL,
  `npp` varchar(20) NOT NULL,
  `tgl_pengajuan` text NOT NULL,
  `tgl_awal` text NOT NULL,
  `tgl_akhir` text NOT NULL,
  `durasi` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `leader` varchar(20) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `spv` varchar(20) NOT NULL,
  `stt_cuti` varchar(50) NOT NULL,
  `ket_reject` text NOT NULL,
  `hrd_app` int(2) NOT NULL,
  `lead_app` int(2) NOT NULL,
  `spv_app` int(2) NOT NULL,
  `mng_app` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`no_cuti`, `npp`, `tgl_pengajuan`, `tgl_awal`, `tgl_akhir`, `durasi`, `keterangan`, `leader`, `manager`, `spv`, `stt_cuti`, `ket_reject`, `hrd_app`, `lead_app`, `spv_app`, `mng_app`) VALUES
('01082022060312', '33333', '2022-08-01', '2022-08-01', '2022-08-01', 1, 'sakit', '', '', '', 'Menunggu Approval HRD', '', 0, 0, 0, 0),
('01082022060618', '11111', '2022-08-01', '2022-08-01', '2022-08-01', 1, 'sakit', '', '', '', 'Menunggu Approval Supervisor', '', 0, 0, 0, 0),
('01082022061535', '11111', '2022-08-01', '2022-08-01', '2022-08-01', 1, 'sakit', '', '', 'Supervisor', 'Menunggu Approval Supervisor', '', 0, 0, 0, 0),
('11052019221922', '12345', '11 Mei 2022', '12 Mei 2022', '13 Mei 2022', 2, 'sakit', '11111', '', '', 'Menunggu Approval Leader', '', 0, 0, 0, 0),
('12052019121722', '11111', '2019-05-12', '2019-05-14', '2019-05-14', 1, 'Menengok orang tua', '', '33333', '22222', 'Approved', '', 1, 0, 1, 1),
('12052019143232', '22222', '2019-05-12', '2019-05-16', '2019-05-16', 1, 'Jalan jalan', '', '33333', '', 'Approved', '', 1, 0, 0, 1),
('13052019195049', '33333', '2019-05-13', '2019-05-14', '2019-05-14', 1, 'asdakjd', '', '', '', 'Approved', '', 1, 0, 0, 0),
('14052019105620', '12345', '2019-05-14', '2019-05-16', '2019-05-17', 2, 'kjfsk', '11111', '33333', '22222', 'Approved', '', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `npp` varchar(20) NOT NULL,
  `nama_emp` varchar(100) NOT NULL,
  `jk_emp` varchar(20) NOT NULL,
  `telp_emp` varchar(20) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `jml_cuti` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_emp` text NOT NULL,
  `active` varchar(20) NOT NULL,
  `id_adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`npp`, `nama_emp`, `jk_emp`, `telp_emp`, `divisi`, `jabatan`, `alamat`, `hak_akses`, `jml_cuti`, `password`, `foto_emp`, `active`, `id_adm`) VALUES
('11111', 'Leader', 'Laki-Laki', '012381238', 'IT', 'Leader IT', 'Jakarta', 'Leader', 1, '123456', 'foto111110.png', 'Aktif', 2),
('12345', 'Test Pegawai', 'Laki-Laki', '0812983198', 'IT', 'Staff IT', 'Jakarta', 'Pegawai', 2, '12345', 'foto123451.png', 'Aktif', 1),
('22222', 'Test Supervisor', 'Laki-Laki', '08129181998', 'IT', 'Spv IT', 'Jakarta', 'Supervisor', 1, '22222', 'foto222221.png', 'Aktif', 1),
('312312312', 'Pegawai', 'Laki-Laki', '083728382', 'IT', 'Pegawai', 'bogor', 'Pegawai', 2, '1', 'foto14.png', 'Aktif', 1),
('33333', 'Test Manager', 'Laki-Laki', '081287189898', 'IT', 'Manager IT', 'Jakarta', 'Manager', 1, '33333', 'foto333334.jpg', 'Aktif', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`no_cuti`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`npp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
