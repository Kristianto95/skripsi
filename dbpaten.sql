-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 09:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpaten`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `akses` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nik`, `nama`, `alamat`, `akses`) VALUES
(5, 'kristianto', 'kristianto', '1111111111111144', 'asd', 'aa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_ho`
--

CREATE TABLE IF NOT EXISTS `ijin_ho` (
  `id_ho` int(4) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(50) NOT NULL,
  `perihal` enum('Izin Gangguan Mendirikian Usaha','Pembaharuan Izin Gangguan Usaha') NOT NULL,
  `daftar_ke` int(3) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `namausaha` varchar(100) NOT NULL,
  `jenisusaha` varchar(100) NOT NULL,
  `alamatusaha` text NOT NULL,
  `luas` int(5) NOT NULL,
  `modal` varchar(25) NOT NULL,
  `karyawan` int(5) NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_ho` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_ho`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `ijin_ho`
--

INSERT INTO `ijin_ho` (`id_ho`, `registrasi`, `perihal`, `daftar_ke`, `noktp`, `nama`, `alamat`, `pekerjaan`, `nohp`, `namausaha`, `jenisusaha`, `alamatusaha`, `luas`, `modal`, `karyawan`, `pendaftaran`, `proses`, `no_ho`, `terbit`, `paraf`) VALUES
(93, '013/Reg_HO/PATEN/Bojong/KabPekalongan/I/2017', 'Izin Gangguan Mendirikian Usaha', 1, '2303091299011123', 'Kristianto Satrio Utomo', 'Jl Damar Dalam I no 53, Pekalongan', 'Mahasiswa', '085740260600', 'Rumah Makan Andalas', 'Rumah Makan', 'Jl Damar Dalam I no 54 Pekalongan', 72, '30000000', 5, '2017-01-18', 'Dalam Proses', '', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_imb`
--

CREATE TABLE IF NOT EXISTS `ijin_imb` (
  `id_imb` int(4) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(50) NOT NULL,
  `daftar_ke` int(3) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maksud` varchar(255) NOT NULL,
  `penggunaan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `luastanah` int(5) NOT NULL,
  `luasbangunan` int(5) NOT NULL,
  `status` text NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_imb` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_imb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `ijin_imb`
--

INSERT INTO `ijin_imb` (`id_imb`, `registrasi`, `daftar_ke`, `noktp`, `nama`, `alamat`, `maksud`, `penggunaan`, `lokasi`, `nohp`, `luastanah`, `luasbangunan`, `status`, `pendaftaran`, `proses`, `no_imb`, `terbit`, `paraf`) VALUES
(21, '021/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 1, '2303091299011123', 'Kristianto Satrio Utomo', 'Jl Damar Dalam I no 53, Pekalongan', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', 'Jl Damar Dalam I no 53, Pekalongan', '085740260600', 75, 60, 'Milik Sendiri', '2017-01-18', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(22, '022/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 1, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '1', ' ', 1, 1, '1', '2017-01-19', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(23, '023/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 12, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '2', ' ', 1, 1, '1', '2017-01-19', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(24, '024/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 234, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '1213121', ' ', 1212, 1212, '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(25, '025/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 131, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '1', ' ', 1, 1, '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(26, '026/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 543, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '1', ' ', 1, 1, '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(27, '027/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 542, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '1', ' ', 1, 1, '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(28, '028/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 421, ' ', ' ', ' ', 'Mendirikan Bangunan Baru', 'Rumah Tinggal', '1', ' ', 1, 1, '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(29, '029/Reg_IMB/PATEN/Bojong/KabPekalongan/I/2017', 1, ' ', ' ', ' ', 'Membaharui Izin Bangunan', 'Tempat Usaha', '1', ' ', 1, 1, '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_iumk`
--

CREATE TABLE IF NOT EXISTS `ijin_iumk` (
  `id_iumk` int(11) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(50) NOT NULL,
  `daftar_ke` int(3) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `namapemohon` varchar(75) NOT NULL,
  `alamatpemohon` text NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `namausaha` varchar(75) NOT NULL,
  `jenisusaha` enum('Apotek','Bengkel Kendaraan / Las / Sejenisnya','Bimbingan Belajar / Kursus','Bidang Keagamaan','Foto Copy','Konter HP','konveksi','Pengololaan Limbah','Percetakan','Persewaan Barang / Jasa / Kendaraan','Rumah Makan','Studio Musik','Studio Photo','Tempat Hiburan','Tempat Olahraga','Toko Aksesories','Toko Aksesories','Toko Bangunan','Toko Buku','Toko Elektronik','Toko Kelontong','Toko Pakaian','Toko Sembako') NOT NULL,
  `bentukusaha` enum('Perorangan','Kelompok') NOT NULL,
  `saranausaha` enum('Sewa','Milik Sendiri') NOT NULL,
  `alamatusaha` text NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `modal` varchar(15) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_iumk` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_iumk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ijin_iumk`
--

INSERT INTO `ijin_iumk` (`id_iumk`, `registrasi`, `daftar_ke`, `noktp`, `namapemohon`, `alamatpemohon`, `nohp`, `namausaha`, `jenisusaha`, `bentukusaha`, `saranausaha`, `alamatusaha`, `notelp`, `modal`, `npwp`, `pendaftaran`, `proses`, `no_iumk`, `terbit`, `paraf`) VALUES
(1, '001/Reg_IUMK/PATEN/Bojong/KabPekalongan/I/2017', 1, '2303091299011123', 'Kristianto Satrio Utomo', 'Jl Damar Dalam I no 53, Pekalongan', '085740260600', 'Andrepato', 'Studio Photo', 'Perorangan', 'Sewa', 'Jl Damar Dalam I no 54 Pekalongan', '0285426143', '30000000', '09902111111111111111', '2017-01-18', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Form'),
(2, '002/Reg_IUMK/PATEN/Bojong/KabPekalongan/I/2017', 231323, ' ', ' ', '', ' ', '2', 'Apotek', 'Perorangan', 'Milik Sendiri', '2', '22', '2', '2', '2017-01-25', 'Dalam Proses', '', '0000-00-00', 'Validasi Formulir'),
(3, '003/Reg_IUMK/PATEN/Bojong/KabPekalongan/I/2017', 231323, ' ', ' ', '', ' ', '22', 'Apotek', 'Perorangan', 'Milik Sendiri', '2', '22', '2', '2', '2017-01-25', 'Dalam Proses', '', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_siup`
--

CREATE TABLE IF NOT EXISTS `ijin_siup` (
  `id_siup` int(4) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(50) NOT NULL,
  `daftar_ke` int(3) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `namapemohon` varchar(50) NOT NULL,
  `alamatpemohon` text NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `namaperusahaan` text NOT NULL,
  `jenis` enum('PT','PK','PO','Koperasi','BUL','Fa') NOT NULL,
  `alamatperusahaan` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `nofax` varchar(12) NOT NULL,
  `modal` varchar(25) NOT NULL,
  `carapemasaran` text NOT NULL,
  `kbli` varchar(5) NOT NULL,
  `barjas` text NOT NULL,
  `masber` date NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_siup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `ijin_siup`
--

INSERT INTO `ijin_siup` (`id_siup`, `registrasi`, `daftar_ke`, `noktp`, `namapemohon`, `alamatpemohon`, `nohp`, `namaperusahaan`, `jenis`, `alamatperusahaan`, `jabatan`, `notelp`, `nofax`, `modal`, `carapemasaran`, `kbli`, `barjas`, `masber`, `pendaftaran`, `proses`, `no_siup`, `terbit`, `paraf`) VALUES
(26, '008/Reg_SIUP/PATEN/Bojong/KabPekalongan/I/2017', 1, '1230309129901112', 'Kristianto Satrio Utomo', 'Jl Damar Dalam I no 53, Pekalongan', ' 08574026060', 'Andrepati', 'PT', 'Jl Damar Dalam I no 53, Pekalongan', 'Pimpinan', '0285426143', '0285426143', '200000000', 'Eceran Ke Pedagang Kecil', ' ', 'Pakaian Jadi', '0000-00-00', '2017-01-18', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(27, '009/Reg_SIUP/PATEN/Bojong/KabPekalongan/I/2017', 1, ' ', ' ', ' ', ' ', '1', 'PT', '1', '1', '1', '1', '1', '1', '1', '1', '0000-00-00', '2017-01-19', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(28, '010/Reg_SIUP/PATEN/Bojong/KabPekalongan/I/2017', 121, ' ', ' ', ' ', ' ', '1', 'PT', '11', '1', '1', '1', '1', '1', '1', '1', '0000-00-00', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(29, '011/Reg_SIUP/PATEN/Bojong/KabPekalongan/I/2017', 122, ' ', ' ', ' ', ' ', '1', 'PT', '11', '1', '1', '1', '1', '1', '1', '1', '0000-00-00', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_tdi`
--

CREATE TABLE IF NOT EXISTS `ijin_tdi` (
  `id_tdi` int(4) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(50) NOT NULL,
  `daftar_ke` int(3) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `namaperusahaan` text NOT NULL,
  `alamatperusahaan` text NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `nofax` varchar(12) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nipik` int(20) NOT NULL,
  `lokasi` text NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` varchar(11) NOT NULL,
  `kepemilikan` enum('Milik Sendiri','Sewa') NOT NULL,
  `luasbangunan` varchar(5) NOT NULL,
  `luastanah` varchar(5) NOT NULL,
  `mesinutama` varchar(100) NOT NULL,
  `mesinpembantu` varchar(100) NOT NULL,
  `tenaga` varchar(50) NOT NULL,
  `kbli` varchar(100) NOT NULL,
  `komoditi` varchar(100) NOT NULL,
  `kapasitas` varchar(7) NOT NULL,
  `kebutuhan` text NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `laki` varchar(5) NOT NULL,
  `wanita` varchar(5) NOT NULL,
  `nilai` varchar(25) NOT NULL,
  `merk` enum('Milik Sendiri','Lisensi') NOT NULL,
  `nomerk` varchar(50) NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_tdi` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_tdi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `ijin_tdi`
--

INSERT INTO `ijin_tdi` (`id_tdi`, `registrasi`, `daftar_ke`, `noktp`, `nama`, `alamat`, `nohp`, `namaperusahaan`, `alamatperusahaan`, `notelp`, `nofax`, `npwp`, `nipik`, `lokasi`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kepemilikan`, `luasbangunan`, `luastanah`, `mesinutama`, `mesinpembantu`, `tenaga`, `kbli`, `komoditi`, `kapasitas`, `kebutuhan`, `jumlah`, `laki`, `wanita`, `nilai`, `merk`, `nomerk`, `pendaftaran`, `proses`, `no_tdi`, `terbit`, `paraf`) VALUES
(51, '015/TDI/PATEN/Bojong/KabPekalongan/I/2017', 1, '2303091299011123', 'Kristianto Satrio Utomo', 'Jl Damar Dalam I no 53, Pekalongan', '085740260600', 'Andrepati', 'Jl Damar Dalam I no 53, Pekalongan', '0285426143', '0285426143', '211111111111', 2147483647, 'Jl Damar Dalam I no 53, Pekalongan', 'Bojongminggir', 'Bojong', 'Pekalongan', 'Jawa Tengah', 'Milik Sendiri', '100', '90', 'Mesin Jahit, Mesin Bordri', 'Gunting, Benang, Pengintal', 'Listrik', '20', 'Kaos', '2000', 'Bahan Cotton Combed 30s dan 24s', '20', '10', '10', '150000000', 'Milik Sendiri', '09383712121291817', '2017-01-18', 'Dalam Proses', '', '0000-00-00', 'Validasi Formulir'),
(52, '016/TDI/PATEN/Bojong/KabPekalongan/I/2017', 1, ' ', ' ', ' ', ' ', '1', '1', '1435234', '1', '1', 1, '1', '1', '1', 'Pekalongan', 'Jawa Tengah', 'Milik Sendiri', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', 'Milik Sendiri', '1', '2017-01-19', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(53, '017/TDI/PATEN/Bojong/KabPekalongan/I/2017', 231323, ' ', ' ', ' ', ' ', '132134124', '1', '122121', '1', '121212', 1, '1', '1', '1', 'Pekalongan', 'Jawa Tengah', 'Milik Sendiri', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Milik Sendiri', '1', '2017-01-19', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(54, '018/TDI/PATEN/Bojong/KabPekalongan/I/2017', 2147483647, ' ', ' ', ' ', ' ', '21', '11', '1', '1', '1', 1, '11', '1', '1', 'Pekalongan', 'Jawa Tengah', 'Milik Sendiri', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Milik Sendiri', '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_tdp`
--

CREATE TABLE IF NOT EXISTS `ijin_tdp` (
  `id_tdp` int(11) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(50) NOT NULL,
  `daftar_ke` int(3) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `nama` int(75) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `desapemohon` varchar(35) NOT NULL,
  `kecamatanpemohon` varchar(35) NOT NULL,
  `kabpemohon` varchar(35) NOT NULL,
  `provinsipemohon` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `namaperusahaan` varchar(100) NOT NULL,
  `alamatperusahaan` text NOT NULL,
  `desa` varchar(35) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kab` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `nofax` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namakelompok` varchar(100) NOT NULL,
  `statusperusahaan` enum('Kantor Tunggal','Kantor Pusat','Kantor Cabang','Kantor Pembantu','Perwakilan') NOT NULL,
  `namainduk` varchar(100) NOT NULL,
  `tdp_no` varchar(100) NOT NULL,
  `alper` text NOT NULL,
  `kelper` varchar(35) NOT NULL,
  `kecper` varchar(35) NOT NULL,
  `kabper` varchar(35) NOT NULL,
  `provper` varchar(25) NOT NULL,
  `lokasi` text NOT NULL,
  `desapab` varchar(35) NOT NULL,
  `kecamatanpab` varchar(35) NOT NULL,
  `kabpab` varchar(35) NOT NULL,
  `provinsipab` varchar(35) NOT NULL,
  `bank1` varchar(100) NOT NULL,
  `bank2` varchar(100) NOT NULL,
  `jumlahbank` varchar(3) NOT NULL,
  `npwp` varchar(22) NOT NULL,
  `bentukmodal` enum('PMA','PMDN') NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jangka` int(3) NOT NULL,
  `kerjasama` text NOT NULL,
  `merk` varchar(100) NOT NULL,
  `nomerk` varchar(100) NOT NULL,
  `hakpaten` varchar(100) NOT NULL,
  `nohakpaten` varchar(100) NOT NULL,
  `hakcipta` varchar(100) NOT NULL,
  `nohakcipta` int(100) NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_tdp` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` int(11) NOT NULL,
  PRIMARY KEY (`id_tdp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nonijin_dispensasi`
--

CREATE TABLE IF NOT EXISTS `nonijin_dispensasi` (
  `id_dispensasi` int(4) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(100) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `namapemohon` varchar(50) NOT NULL,
  `alamatpemohon` text NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `kades` enum('Bukur','Kalipancur','Sumurjomblangbogo','Pantianom','Randumuktiwaren','Legokclile','Bojongwetan','Duwet','Wangandowo','Ketitangkidul','Menjangan','Ketitanglor','Rejosari','Bojonglor','Bojongminggir','Wiroditan','Kemasan','Jajarwayang','Babalanlor','Babalankidul','Karangsari','Sembungjambu') NOT NULL,
  `tgldes` date NOT NULL,
  `nodes` varchar(50) NOT NULL,
  `namawanita` varchar(50) NOT NULL,
  `tempatwanita` varchar(20) NOT NULL,
  `tanggalwanita` date NOT NULL,
  `usiawanita` varchar(3) NOT NULL,
  `pekerjaanwanita` varchar(25) NOT NULL,
  `statuswanita` enum('Perawan','Janda') NOT NULL,
  `alamatwanita` text NOT NULL,
  `namapria` varchar(50) NOT NULL,
  `tempatpria` varchar(20) NOT NULL,
  `tanggalpria` date NOT NULL,
  `usiapria` varchar(3) NOT NULL,
  `pekerjaanpria` varchar(25) NOT NULL,
  `statuspria` enum('Perjaka','Duda') NOT NULL,
  `alamatpria` text NOT NULL,
  `tanggalakad` date NOT NULL,
  `tempatakad` text NOT NULL,
  `alasan` text NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_dispensasi` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_dispensasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `nonijin_dispensasi`
--

INSERT INTO `nonijin_dispensasi` (`id_dispensasi`, `registrasi`, `noktp`, `namapemohon`, `alamatpemohon`, `nohp`, `kades`, `tgldes`, `nodes`, `namawanita`, `tempatwanita`, `tanggalwanita`, `usiawanita`, `pekerjaanwanita`, `statuswanita`, `alamatwanita`, `namapria`, `tempatpria`, `tanggalpria`, `usiapria`, `pekerjaanpria`, `statuspria`, `alamatpria`, `tanggalakad`, `tempatakad`, `alasan`, `pendaftaran`, `proses`, `no_dispensasi`, `terbit`, `paraf`) VALUES
(36, '017/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', '2303091299011123', 'Kristianto Satrio Utomo', 'Jl Damar Dalam I no 53, Pekalongan', ' 08574026060', 'Bukur', '0000-00-00', '', 'Rianawati', 'Pekalongan', '1994-04-07', '21', 'Mahasiswa', 'Perawan', 'Talun', 'Kristianto Satrio Utomo', 'Pekalongan', '1995-05-26', '21', 'Mahasiswa', 'Perjaka', 'Slamaran', '2017-01-27', 'Rumah Mempelai Wanita', 'Pulang dari Perantauan', '2017-01-18', 'Dalam Proses', '', '0000-00-00', 'Validasi Formulir'),
(37, '018/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', '', '', '0000-00-00', '', '', 'Perawan', '', '', '', '0000-00-00', '', '', 'Perjaka', '', '0000-00-00', '', '', '2017-01-22', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(38, '019/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', 'd', '', '0000-00-00', '', '', 'Perawan', '', '', '', '0000-00-00', '', '', 'Perjaka', '', '0000-00-00', '', '', '2017-01-22', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(39, '020/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', '21', '', '0000-00-00', '', '', 'Perawan', '', '', '', '0000-00-00', '', '', 'Perjaka', '', '0000-00-00', '', '', '2017-01-22', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(40, '021/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', '2', '', '0000-00-00', '', '', 'Perawan', '', '', '', '0000-00-00', '', '', 'Perjaka', '', '0000-00-00', '', '', '2017-01-22', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(41, '022/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', '3', '', '0000-00-00', '', '', 'Perawan', '', '', '', '0000-00-00', '', '', 'Perjaka', '', '0000-00-00', '', '', '2017-01-22', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(42, '023/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', '1', '1', '0001-01-01', '1', '1', 'Perawan', '1', '1', '1', '0001-01-01', '1', '1', 'Perjaka', '1', '0011-01-01', '1', '1', '2017-01-22', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(43, '024/Reg_Dispensasi/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', ' ', ' ', '', '0000-00-00', ' ', '242321312', '11', '0111-11-11', '1', '1', 'Perawan', '1', '121', '1', '1111-01-01', '1', '1', 'Perjaka', '1', '0001-01-01', '11', '1', '2017-01-25', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `nonijin_domisili`
--

CREATE TABLE IF NOT EXISTS `nonijin_domisili` (
  `id_domisili` int(11) NOT NULL AUTO_INCREMENT,
  `registrasi` varchar(100) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jekel` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `kabupaten` varchar(10) NOT NULL,
  `provinsi` varchar(11) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghucu') NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `status` enum('Belum Nikah','Nikah') NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `pendaftaran` date NOT NULL,
  `proses` enum('Dalam Proses','Gagal','Selesai') NOT NULL,
  `no_domisili` varchar(100) NOT NULL,
  `terbit` date NOT NULL,
  `paraf` text NOT NULL,
  PRIMARY KEY (`id_domisili`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `nonijin_domisili`
--

INSERT INTO `nonijin_domisili` (`id_domisili`, `registrasi`, `noktp`, `nama`, `tempat`, `tanggal`, `jekel`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `agama`, `pekerjaan`, `status`, `kewarganegaraan`, `nohp`, `pendaftaran`, `proses`, `no_domisili`, `terbit`, `paraf`) VALUES
(1, '001/Reg_domisili/PATEN/Bojong/KabPekalongan/I/2017', '2303091299011123', 'Kristianto Satrio Utomo', 'Pekalongan', '2017-01-17', 'Perempuan', 'Jl Damar Dalam I no 53, Pekalongan', 4, 9, 'Bojongminggir', 'Bojong', 'Pekalongan', 'Jawa Tengah', 'Kristen', 'Mahasiswa', 'Belum Nikah', 'Indonesia', '085740260600', '2017-01-18', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir'),
(8, '002/Reg_domisili/PATEN/Bojong/KabPekalongan/I/2017', ' ', ' ', '', '0000-00-00', 'Laki - Laki', '', 0, 0, '', '', 'Pekalongan', 'Jawa Tengah', 'Islam', '', 'Belum Nikah', '', '', '2017-01-19', 'Dalam Proses', ' ', '0000-00-00', 'Validasi Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE IF NOT EXISTS `pemohon` (
  `noktp` varchar(16) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`noktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`noktp`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `npwp`, `nohp`, `username`, `password`) VALUES
('1111111333333333', '1', '1', '1', '0011-01-01', '1', '11', 'coba', 'coba');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
