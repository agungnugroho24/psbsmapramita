-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 05:34 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadm` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`idadm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadm`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `idguru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `posisi` varchar(5) NOT NULL,
  `nama_gurustaff` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jenkel` varchar(1) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  PRIMARY KEY (`idguru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `nip`, `posisi`, `nama_gurustaff`, `foto`, `jenkel`, `id_mapel`, `id_jabatan`, `alamat`, `status_kawin`, `tahun_masuk`, `pendidikan_terakhir`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`) VALUES
(23, '123456789', 'guru', 'Ari Rusmanto, S.Kom', 'arie.jpg', 'L', 1, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2008, 'Magister (S2)', 'mas@arirusmanto.com', '085741444348', 'Boyolali', '1990-01-01'),
(25, '987654321', 'guru', 'Tedy Ruswanta, S.Kom', 'tedy.jpg', 'L', 8, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Strata 1 (S1)', 'tedyruswanta@rocketmail.com', '087838992200', 'Gunung Kidul', '1986-11-11'),
(26, '123654789', 'guru', 'Suwarno, S.Pd', 'no_photo.jpg', 'L', 7, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2011, 'Strata 1 (S1)', 'lahar_jingga89@yahoo.com', '085865723740', 'Palembang', '1989-06-07'),
(27, '321456987', 'guru', 'Windi Febri Pratama', 'windi.jpg', 'L', 9, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2011, 'Strata 1 (S1)', 'windi.febri@gmail.com', '085643267147', 'Cilacap', '1989-02-04'),
(28, '147852369', 'guru', 'Tri Budiarto', 'masbudi.jpg', 'L', 10, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Duda', 2001, 'Magister (S2)', 'tri_budiarto86@yahoo.com', '08994108066', 'Cilacap', '1985-11-07'),
(29, '147258369', 'guru', 'Riski Setia Aji Wibowo', 'kebo.jpg', 'L', 2, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2010, 'Strata 1 (S1)', 'rizki@email.com', '081903296661', 'Cilacap', '1988-05-04'),
(30, '963258741', 'guru', 'Alfie Nur Rahmi', 'alfi.jpg', 'P', 6, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2009, 'Magister (S2)', 'alfie.nyun@gmail.com', '085742343248', 'Brebes', '1988-03-21'),
(31, '741258963', 'guru', 'Tri Kurniawati', 'no_photo.jpg', 'P', 5, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2009, 'Magister (S2)', 'trikurniyawati@rocketmail.com', '081329075750', 'Gunung Kudul', '1988-04-13'),
(32, '321654987', 'guru', 'Petrus Dwijoko Purnomo', 'no_photo.jpg', 'L', 8, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2009, 'Strata 1 (S1)', 'petrus@email.com', '085643749548', 'Yogyakarta', '1988-01-21'),
(33, '321456789', 'guru', 'Oscar Anindita', 'no_photo.jpg', 'L', 5, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Strata 1 (S1)', 'oscar@email.com', '085624573959', 'Bantul', '1989-07-20'),
(34, '147852963', 'guru', 'Hana Sartika', 'no_photo.jpg', 'P', 7, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2010, 'Diploma 3 (D3)', 'hana@email.com', '081802954314', 'Semarang', '1990-09-14'),
(35, '369258741', 'guru', 'Topan Heri Purwanto', 'no_photo.jpg', 'L', 1, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Duda', 2011, 'Strata 1 (S1)', 'topan@email.com', '087838978857', 'Brebes', '1989-08-18'),
(36, '123695847', 'guru', 'Ahmad Fauzi', 'fauji.jpg', 'L', 9, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Duda', 2008, 'Strata 1 (S1)', 'fauzi@email.com', '085647328868', 'Boyolali', '1989-12-13'),
(37, '789632541', 'guru', 'Prista Sahayadi', 'no_photo.jpg', 'L', 2, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Diploma 3 (D3)', 'prista@email.com', '081808212829', 'Tangerang', '1989-05-09'),
(38, '123456987', 'guru', 'Novita Pamungkas', 'no_photo.jpg', 'L', 5, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Duda', 2009, 'Diploma 3 (D3)', 'novita@email.com', '085743349967', 'Klaten', '1988-11-16'),
(39, '748596321', 'guru', 'Muhammad Umar Dhani', 'umar.jpg', 'L', 10, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2011, 'Diploma 3 (D3)', 'umar@email.com', '085728185184', 'Sragen', '1989-07-19'),
(40, '362514789', 'guru', 'Zaini Akhsan', 'no_photo.jpg', 'L', 8, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2010, 'Magister (S2)', 'zaini@email.com', '085640363836', 'Jepara', '1989-04-04'),
(41, '125478963', 'guru', 'Ayu Aprilia', 'no_photo.jpg', 'P', 6, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2011, 'Strata 1 (S1)', 'ayu@email.com', '087838242777', 'Cilacap', '1990-04-04'),
(42, '985632147', 'guru', 'Devita Purnamasari Agustine', 'no_photo.jpg', 'P', 9, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Diploma 3 (D3)', 'devita@email.com', '08123456987', 'Boyolali', '1990-08-14'),
(43, '632541789', 'guru', 'Tutik Rahayu', 'no_photo.jpg', 'P', 7, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2010, 'Diploma 3 (D3)', 'tutik@email.com', '085741332456', 'Boyolali', '1989-10-18'),
(44, '965874123', 'guru', 'Pratiwi Budi Amani', 'no_photo.jpg', 'P', 1, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2011, 'Strata 1 (S1)', 'pabuam@yahoo.com', '085640692331', 'Jakarta', '1988-08-22'),
(45, '785412369', 'guru', 'Vivi Verawati', 'pipi.jpg', 'P', 6, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2011, 'Diploma 3 (D3)', 'pipi@email.com', '08129658947', 'Jakarta', '1988-07-17'),
(46, '789652314', 'guru', 'Heri Siswanto', 'heri.jpg', 'L', 8, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Diploma 3 (D3)', 'heri@email.com', '085647512989', 'Boyolali', '1989-11-15'),
(47, '321659874', 'guru', 'Dwi Widiyanto', 'dwi.jpg', 'L', 9, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2010, 'Magister (S2)', 'dwi@email.com', '085643123654', 'Boyolali', '1987-12-27'),
(48, '986532147', 'guru', 'Dedik Pantoro', 'dedik.jpg', 'L', 1, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Diploma 3 (D3)', 'dedik@email.com', '085647148921', 'Boyolali', '1986-05-14'),
(49, '123645789', 'guru', 'M. Ardy Prabowo', 'banjar.jpg', 'L', 2, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Menikah', 2010, 'Diploma 3 (D3)', 'banjar@email.com', '085867410653', 'Boyolali', '1988-02-25'),
(50, '986532741', 'guru', 'Ardi Nurdiyansah', 'ardy.jpg', 'L', 7, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2011, 'Diploma 3 (D3)', 'ardy@email.com', '081329086589', 'Boyolali', '1988-10-08'),
(51, '875421963', 'guru', 'Alex Murti', 'alex.jpg', 'L', 7, 0, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum Menikah', 2010, 'Strata 1 (S1)', 'alex@email.com', '087726710520', 'Boyolali', '1988-05-11'),
(52, '326598741', 'staff', 'Tri Wahyudi', 'no_photo.jpg', 'L', 0, 5, 'Manggis, RT2/7, Tambak, Mojosongo, Boyolali 57371', 'Menikah', 2010, 'Diploma 2 (D2)', 'wahyudi@email.com', '08741325478', 'Boyolali', '1988-02-03'),
(53, '124577412', 'staff', 'Arifin Setiawan', 'no_photo.jpg', 'L', 0, 6, 'Manggis, RT2/7, Tambak, Mojosongo, Boyolali 57371', 'Menikah', 2010, 'Diploma 1 (D1)', 'arifin@email.com', '-', 'Surakarta', '1988-06-09'),
(54, '123456321', 'staff', 'Wawan Finu Prasetyo Budianto', 'no_photo.jpg', 'L', 0, 3, 'Boyolali, Jawa Tengah', 'Menikah', 2010, 'Strata 1 (S1)', 'wawan@email.com', '08564215478', 'Surakarta', '2011-05-03'),
(55, '789653256', 'staff', 'Rina Kurniawati', 'no_photo.jpg', 'P', 0, 5, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum menikah', 2011, 'Diploma 3 (D3)', 'rina@email.com', '08564075750', 'Semarang', '1989-11-02'),
(56, '123659866', 'staff', 'Bambang Wicaksono', 'no_photo.jpg', 'L', 0, 5, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum menikah', 2010, 'Diploma 3 (D3)', 'bambang@email.com', '085782084567', 'Boyolali', '1990-06-04'),
(57, '123123654', 'staff', 'Ebit Setianto', 'no_photo.jpg', 'L', 0, 4, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Duda', 2010, 'Diploma 3 (D3)', 'ebit@email.com', '085647202278', 'Boyolali', '1990-02-13'),
(58, '213014524', 'staff', 'Melinda Sukmawati', 'no_photo.jpg', 'P', 0, 5, 'Tegal Tapanrejo, RT 10/33, Maguwoharjo, Depok, Sleman, Yogyakarta', 'Belum menikah', 2011, 'Diploma 3 (D3)', 'melinda@email.com', '085640326559', 'Jombang', '1989-03-09'),
(59, '124578963', 'guru', 'Rifan Gozali', 'rifan.jpg', 'L', 6, 0, 'Jogja Saja', 'Belum Menikah', 2010, 'Strata 1 (S1)', 'rifan@email.com', '085640650829', 'Salatiga', '1987-11-03'),
(60, '895623741', 'guru', 'Koliq Nurvida', 'kolik.jpg', 'L', 10, 0, 'Cilcacap Indonesia', 'Belum Menikah', 2009, 'Diploma 3 (D3)', 'koliq@email.com', '08122547845', 'Cilacap', '1986-11-27'),
(61, '321465987', 'guru', 'M. Yanuar NR', 'nunu.jpg', 'L', 11, 0, 'Jogja Indonesia', 'Menikah', 2010, 'Strata 1 (S1)', 'yanuar_blink@yahoo.co.id', '087838290010', 'Kebumen', '1989-01-31'),
(62, '986532123', 'guru', 'Sugiyono', 'sugi.jpg', 'L', 11, 0, 'Kebumen Indonesia', 'Belum Menikah', 2010, 'Diploma 3 (D3)', 'sugi@email.com', '087739111170', 'Kebumen', '1989-04-05'),
(63, '789865412', 'guru', 'Widodo', 'widodo.jpg', 'L', 8, 0, 'Solo the spirit of Java', 'Belum Menikah', 2010, 'Strata 1 (S1)', 'widodo@email.com', '085725564376', 'Surakarta', '1988-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pendidikan`
--

CREATE TABLE IF NOT EXISTS `jenjang_pendidikan` (
  `idjenjang` int(11) NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`idjenjang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`idjenjang`, `jenjang`, `deskripsi`) VALUES
(5, 'SMA', '');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
  `idmatpel` int(11) NOT NULL AUTO_INCREMENT,
  `matpel` varchar(30) NOT NULL,
  PRIMARY KEY (`idmatpel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`idmatpel`, `matpel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(5, 'Penjaskes'),
(6, 'Pkn Sejarah'),
(7, 'Bahasa Inggris'),
(8, 'TIK'),
(9, 'Biologi'),
(10, 'Fisika'),
(11, 'Pendidikan Agama Islam'),
(12, 'Bahasa Sunda');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `idpembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `gelombang` int(11) NOT NULL,
  `idpsb` int(11) NOT NULL,
  `biayabangunan` varchar(20) NOT NULL,
  `biayaspp` varchar(20) NOT NULL,
  `biayaseragam` varchar(20) NOT NULL,
  `bpp` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  PRIMARY KEY (`idpembayaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `gelombang`, `idpsb`, `biayabangunan`, `biayaspp`, `biayaseragam`, `bpp`, `total`) VALUES
(5, 1, 5, 'Rp. 800.000', 'Rp. 200.000', 'Rp. 200.000', 'Rp. 2.300.000', 'Rp. 3.500.000');

-- --------------------------------------------------------

--
-- Table structure for table `setting_psb`
--

CREATE TABLE IF NOT EXISTS `setting_psb` (
  `idsetpsb` int(11) NOT NULL AUTO_INCREMENT,
  `idpsb` int(11) NOT NULL,
  `ket_psb` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL DEFAULT 'aktif',
  `tgl_mulai_g1` date NOT NULL,
  `tgl_akhir_g1` date NOT NULL,
  `tgl_mulai_g2` date NOT NULL,
  `tgl_akhir_g2` date NOT NULL,
  `tgl_mulai_g3` date NOT NULL,
  `tgl_akhir_g3` date NOT NULL,
  `tgl_mulai_g4` date NOT NULL,
  `tgl_akhir_g4` date NOT NULL,
  `quotaG1` int(11) NOT NULL,
  `quotaG2` int(11) NOT NULL,
  `quotaG3` int(11) NOT NULL,
  `quotaG4` int(11) NOT NULL,
  PRIMARY KEY (`idsetpsb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `setting_psb`
--

INSERT INTO `setting_psb` (`idsetpsb`, `idpsb`, `ket_psb`, `tahun_ajaran`, `status`, `tgl_mulai_g1`, `tgl_akhir_g1`, `tgl_mulai_g2`, `tgl_akhir_g2`, `tgl_mulai_g3`, `tgl_akhir_g3`, `tgl_mulai_g4`, `tgl_akhir_g4`, `quotaG1`, `quotaG2`, `quotaG3`, `quotaG4`) VALUES
(5, 5, 'PSB SMA', '2014/2015', 'aktif', '2015-05-12', '2015-05-12', '2015-06-12', '2015-06-13', '2015-07-12', '2015-07-13', '2015-08-12', '2015-08-13', 100, 50, 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_album_galeri` (
  `id_album` int(10) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(100) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_album_galeri`
--

INSERT INTO `tbl_album_galeri` (`id_album`, `nama_album`) VALUES
(1, 'Gerak Jalan Tradisional 2010'),
(2, 'Pelatihan Desain Grafis SMTA se-Banyuwangi'),
(3, 'LDK UKM Kamera dan UKM Kloso'),
(4, 'Pengenalan Lingkungan Kampus 2010'),
(5, 'Workshop Virtual OS dengan Linux'),
(6, 'Louis Orion Polos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `tipe_artikel` varchar(50) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `id_penulis` int(10) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `tipe_artikel`, `id_kategori`, `judul`, `isi`, `gambar`, `tanggal`, `waktu`, `id_penulis`) VALUES
(22, 'berita', 1, 'Tari tradisional', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', 'taritradisional.JPG', '2014-11-25', '01:16:04', 1),
(23, 'berita', 5, 'Pecinta alam Tiara Aksara', 'Tiba saat nya liburan Tiara Aksara mengadakan untuk mendaki gunung tertinggi. para pencinta alam Tiara Aksara beraksi, dengan mengadakan pendakian di beberapa penjuru dunia.<br><br>', 'pecinta_alam.JPG', '2014-12-04', '08:29:35', 1),
(24, 'berita', 1, 'Pengajian Jumat', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br>', 'pengajian_anak-anak.jpg', '2014-11-25', '01:15:16', 1),
(25, 'berita', 2, 'Sepeda Ontel', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br>', 'image8.jpg', '2014-11-25', '01:14:37', 1),
(27, 'berita', 1, 'Kegiatan Pramuka, Memperingati Hari Pramuka', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br>', 'DSCN7304.JPG', '2014-11-25', '01:13:33', 1),
(28, 'berita', 2, 'Marawis SMK Tiara Aksara', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', 'marawis_smk.JPG', '2014-11-25', '01:12:59', 1),
(29, 'berita', 1, 'Team Futsal Tiara Aksara Memenangkan Lomba', 'Tiba saat nya liburan Tiara Aksara mengadakan untuk mendaki gunung \r\ntertinggi. para pencinta alam Tiara Aksara beraksi, dengan mengadakan \r\npendakian di beberapa penjuru dunia.<br><br>Lorem Ipsum adalah contoh \r\nteks atau dummy dalam industri percetakan dan penataan huruf atau \r\ntypesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun \r\n1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah \r\nkumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia\r\n tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke \r\npenataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai \r\ndipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran \r\nLetraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring \r\nmunculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker \r\njuga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks \r\natau dummy dalam industri percetakan dan penataan huruf atau \r\ntypesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun \r\n1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah \r\nkumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia\r\n tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke \r\npenataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai \r\ndipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran \r\nLetraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring \r\nmunculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker \r\njuga memiliki versi Lorem Ipsum.', 'tim_futsal_SD.JPG', '2014-11-25', '01:17:10', 1),
(32, 'berita', 2, 'Pencak Silat', 'Pencak Silat adalah salah satu organisasi yang ada di Tiara Aksara dan sudah banyak memenangkan juara antar sekolah. Dan ini adalah Lomba Pencak silat antar sekolah yang di selenggarakan langsung di Tiara Aksara.', 'poencak_silat_41.JPG', '2014-12-04', '09:09:29', 1),
(31, 'berita', 1, 'Meriahnya Lomba 17 Agustus', 'Tiba saat nya liburan Tiara Aksara mengadakan untuk mendaki gunung \r\ntertinggi. para pencinta alam Tiara Aksara beraksi, dengan mengadakan \r\npendakian di beberapa penjuru dunia.<br><br>Lorem Ipsum adalah contoh \r\nteks atau dummy dalam industri percetakan dan penataan huruf atau \r\ntypesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun \r\n1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah \r\nkumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia\r\n tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke \r\npenataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai \r\ndipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran \r\nLetraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring \r\nmunculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker \r\njuga memiliki versi Lorem Ipsum.<br><br>Lorem Ipsum adalah contoh teks \r\natau dummy dalam industri percetakan dan penataan huruf atau \r\ntypesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun \r\n1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah \r\nkumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia\r\n tidak hanya bertahan selama 5 abad, tapi juga telah beralih<br>ke \r\npenataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai \r\ndipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran \r\nLetraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring \r\nmunculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker \r\njuga memiliki versi Lorem Ipsum.', 'lomba_17_agustus.JPG', '2014-12-04', '08:28:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE IF NOT EXISTS `tbl_data` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `data_id` varchar(10) NOT NULL,
  `author` varchar(20) NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id_data`, `title`, `content`, `data_id`, `author`) VALUES
(1, 'Sambutan Kepala Sekolah', '<p style="text-align: justify;"><span style="color: #333333; font-family: Arial,Tahoma,Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;">Assalam\r\n mu’alaikum wr. wb. Puji syukur rahmad dan karunia Allah SWT sehingga \r\nsaya mampu menuliskan kata sambutan Kepala sekolah dalam rangka \r\npenerbitan website sekolah YPSI Tiara Aksara sebagai sarana informasi \r\ndan komunikasi up date sekolah ini melalui dunia maya. Untuk itu saya \r\nmengucapkan banyak terima kasih kepada semua pihak yang mendukung \r\nterbitnya website ini, terutama kepada TIM ICT YPSI Tiara Aksara&nbsp;yang \r\nselalu berusaha meningkatkan layanan ICT-nya. Di era global dan pesatnya\r\n Teknologi Informasi ini, tidak dipungkiri bahwa keberadaan sebuah \r\nwebsite untuk suatu &nbsp;instansi seperti halnya di YPSI Tiara Aksara<span style="color: #333333; font-family: Arial, Tahoma, Verdana;">&nbsp;</span>sangatlah\r\n penting. Wahana website tersebut dapat digunakan sebagai sarana \r\ninformasi dan komunikasi pihak sekolah dengan siswa, alumni, dan stake \r\nholder secara luas. <br></span></p><p style="text-align: justify;"><span style="color: #333333; font-family: Arial,Tahoma,Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;">Selanjutnya, website sekolah dapat berfungsi sebagai\r\n media pembelajaran yang memuat blog-blog yang dibuat oleh guru-guru. Di\r\n dalam blog tersebut guru dapat menuliskan berbagai artikel tentang \r\npembelajaran atau materi penting pelajaran yang bersangkutan. Bahkan \r\nguru dapat memberikan tugas-tugas Mandiri kepada peserta didik melalui \r\nblog yang disiapkan, sehingga akan menunjang kegiatan pembelajaran \r\nberbasis Teknologi Informasi. Selain itu juga website juga dapat menjadi\r\n sarana promosi sekolah yang cukup efektif. Berdasarkan hal tersebut \r\nsaya harapkan nantinya berbagai kegiatan positip sekolah (intrakurikuler\r\n &amp; ekstrakurikuler) dapat diunggah dari website YPSI Tiara \r\nAksara&nbsp;ini, sehingga masyarakat dapat mengetahui kegiatan-kegiatan dan \r\nprestasi-prestasi yang telah berhasil diraih oleh sekolah ini. Akhirnya \r\nkami mengharapkan masukan dari berbagai pihak untuk website ini agar \r\nkami terus belajar dan meng-up date diri, sehingga tampilan, <br></span></p><p style="text-align: justify;"><span style="color: #333333; font-family: Arial,Tahoma,Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;">isi dan \r\nmutu website akan terus berkembang dan lebih baik nantinya. Oleh karena \r\nitu, saya memberikan dukungan sepenuhnya kepada TIM ICT YPSI Tiara \r\nAksaraselaku pengelola website sekolah agar terus mengembangkan website \r\ndengan penuh semangat tanpa mengenal menyerah. Terima kasih atas \r\nkerjasamanya, maju terus untuk mencapai <span style="color: #333333; font-family: Arial, Tahoma, Verdana;">SYPSI Tiara Aksara</span>&nbsp;yang lebih cerdas.</span></p>\r\n<p style="text-align: justify;"><span style="color: #333333; font-family: Arial,Tahoma,Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"> Wassalam mu’alaikum Wr. Wb. &nbsp; &nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="color: #333333; font-family: Arial,Tahoma,Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;">Tangerang, 20 Oktober 2014</span></p>', '1.1', 'admin'),
(2, 'Visi dan Misi', '<span style="font-weight: bold;">Visi</span><br><br>Menjadi sekolah kejuruan yang unggul dalam pemdidikan, menghasilkan \r\npeserta didik yang kompeten dan siap mengisi dunia kerja dengan \r\nberlandaskan akhlaq mulia dan karakter kebangsaan<br><br><span style="font-weight: bold;">Misi</span><br><br>Melaksanakan pendidikan yang berkarakter kebangsaan dan akhlaqul \r\nkarimah, menyelenggarakan pendidikan kejuruan berbasis kompetensi yang \r\nrelevan dengan kebutuhan dunia usaha / dunia industri, menyelenggarakan \r\npendidikan pendidikan kejuruan yang berbudaya dan bermoral <br>', '1.3', 'admin'),
(5, 'Hubungi Kami', '  <table>\r\n	<tr>\r\n	<td valign="top" width="100"><b>Kampus</b></td><td valign="top" width="20">:</td><td>JL. A.Yani No. 82 Banyuwangi, Jawa Timur<br/>Kode-Pos : 68416</td>	\r\n	</tr>\r\n\r\n	<tr>\r\n	<td valign="top"><b>Telp/Fax</b></td><td valign="top">:</td><td>(0333)7700669<br/>(0333) 417902</td>	\r\n	</tr>\r\n	<tr>\r\n	<td valign="top"><b>Email</b></td><td valign="top">:</td><td>stikom_pgri_bwi@yahoo.com</td>	\r\n	</tr>  \r\n  </table>\r\n', '13', 'admin'),
(7, 'Sasaran dan Tujuan', '<strong>SASARAN </strong><br />\r\n<ol>\r\n<li>Melengkapi dan mengganti peralatan-peralatan yang sudah usang dengan peralatan yang paling mutakhir.</li>\r\n<li>Melengkapi perangkat Pembelajaran agar sesuai dengan tuntutan zaman.</li>\r\n<li>Mencetak alumni-alumni (output) yang cukup representatif dalam memberikan solusi dibidang informatika, dan handal dalam mengantisipasi tugas-tugasnya.</li>\r\n<li>Menggalakkan penelitian dikalangan mahasiswa maupun jajaran staf dosen agar membuahkan inovasi-inovasi baru bidang informatika.</li>\r\n<li>Menyesuaikan kurikulum yang digunakan dengan dasar kurikulum dan APTIKOM.</li>\r\n</ol>\r\n\r\n<strong>TUJUAN INSTITUSI </strong><br><br>\r\nMenghasilkan sumber daya manusia yang handal, memiliki kadar intelektual yang tinggi, berbudi luhur dalam mengamalkan bidang ilmu informatika dan komputer.\r\nMemberi  kontribusi pada birokrat, politisi, businessman, masyarakat pada umumnya dalam membangun dan mengimplementasikan teknologi informatika dan komputer.<br><br>\r\n\r\n<strong>TUJUAN PROGRAM STUDI DIPLOMA III (D3) </strong><br />\r\n<ol>\r\n<li>Menghasilkan tenaga ahli yang mampu menerapkan, mengembangkan, memperkaya khasanah ilmu komputer dan informatika.</li>\r\n<li>Menghasilkan tenaga ahli yang mampu memberikan kontribusi untuk peningkatan kualitas kehidupan pribadi, keluarga, masyarakat, bangsa dan Negara.</li>\r\n<li>Menghasilkan tenaga ahli yang kreatif, inovatif dan berguna bagi kesejahteraan masyarakat</li>\r\n</ol>\r\n\r\n<strong>TUJUAN PROGRAM STUDI STRATA I (S1) </strong><br />\r\n<ol>\r\n<li>Meluluskan sarjana yang berkualitas dalam bidang teknologi informasi, dengan indeks prestasi rata-rata > 3.00.</li>\r\n<li>Mengembangkan dan mengaplikasikan teknologi informasi sehingga dapat memberikan konstribusi pada masyarakat dan bangsa.</li>\r\n<li>Menjadikan sarjana yang mampu mengembangkan penelitian dan pengabdian pada masyarakat dalam bidang teknologi informasi.</li>\r\n</ol>', '1.4', 'admin'),
(8, 'Struktur Organisasi', '<p style="text-align: justify;"><br></p><p style="text-align: center;"><span class="Apple-tab-span" style="white-space:pre"></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="line-height: 115%; "><span class="Apple-style-span" style="font-weight: bold;"><span class="Apple-style-span" style="font-size: small;"><span class="Apple-style-span" style="text-decoration: underline;">DEWAN PENDIRI</span></span></span></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN"></span></p><p class="MsoNormal" align="center" style="text-align:center"><u><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN">Drs.SAIPUL MILLAH</span></u></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN">KETUA YPSI TIARA AKSARA<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN"><br></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN"></span></p><p class="MsoNormal" align="center" style="text-align:center"><u><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN">HASANUDIN, M.Pd</span></u></p><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;\r\nfont-family:" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:="" in;mso-fareast-language:en-us;mso-bidi-language:ar-sa"=""><div style="text-align: center;">DEWAN PELAKSANA\r\nPENDIDIKAN</div></span><p></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;\r\nfont-family:" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:="" in;mso-fareast-language:en-us;mso-bidi-language:ar-sa"=""><br></span></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span style="font-size:7.0pt;mso-bidi-font-size:9.0pt;line-height:115%;\r\nfont-family:" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi;mso-ansi-language:="" in;mso-fareast-language:en-us;mso-bidi-language:ar-sa"=""></span></span></p><p class="MsoNormal" align="center" style="text-align:center"><u><span style="line-height: 115%; "><span class="Apple-style-span" style="font-size: small;"><span class="Apple-style-span" style="font-weight: bold;">PENGURUS PELAKSANA HARIAN</span></span></span></u></p><p class="MsoNormal" align="center" style="text-align:center"><span style="line-height: 115%; "><span class="Apple-style-span" style="font-size: small;"><span class="Apple-style-span" style="font-weight: bold;">YPSI TIARA AKSARA</span></span></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="line-height: 115%; "><span class="Apple-style-span" style="font-size: small;"><span class="Apple-style-span" style="font-weight: bold;"><br></span></span></span></p><p class="MsoNormal" align="center" style="text-align: justify;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"></span></p><p class="MsoNormal" align="center" style="text-align: justify;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">                                                                                                             <span class="Apple-style-span" style="text-decoration: underline;">FADILLAH SANDI, M.Pd</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">DEDI MULYADI, SE</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;\r\nline-height:115%;mso-ansi-language:IN"><span class="Apple-style-span" style="text-decoration: underline;">M.ALI MARASABESSY, BA</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">SUKMA SANJAYA, S.Kom</span>                  </span></span></span></span></p><p class="MsoNormal" align="center" style="text-align: justify;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">                                                                                                         KEPALA BAGIAN LITBANG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;KEPALA BAGIAN KEUANGAN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; KEPALA BAGIAN KEAGAMAAN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; KEPALA BAGIAN UMUM </span></span></p><p class="MsoNormal" align="center" style="text-align: justify;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><br></span></span></p><p class="MsoNormal" align="center" style="text-align: justify;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"></span></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">PIPIT PITRIYAH</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<o:p><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">EKO SETIOWATI, S.Pd </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;KARYAWAN / (ti) YPSI TIARA AKSARA &nbsp; &nbsp;&nbsp;<u><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">M. MU AMER KADHAFI, S.Sos</span></u></span></o:p></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">ADMINISTRASI &amp; KEUANGAN &nbsp; &nbsp;&nbsp;<o:p>ADMINISTRASI &amp; KEUANGAN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BAGIAN UMUM &amp; TATA USAHA</o:p></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><o:p><br></o:p></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">LISNAWATI, S.Pd</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<o:p><span style="font-size:7.0pt;line-height:115%;mso-ansi-language:IN"><span class="Apple-style-span" style="text-decoration: underline;">LISNAWATI, S.Pd </span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">SUKMA SANJAYA </span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"><span class="Apple-style-span" style="text-decoration: underline;">CECEN HIDAYAT, SE</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<u><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">DEDI MULYADI, SE</span></u></span></span></span></o:p></span></p>\r\n\r\n<p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">KEPALA TKQ / TPQ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-size:8.0pt;line-height:115%;\r\nmso-ansi-language:IN"><o:p><span class="Apple-style-span" style="line-height: 10px; font-size: 9px; ">KEPALA SEKOLAH TK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;KEPALA SD IT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;KEPALA SMP IT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;KEPALA SMK</span></o:p></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:8.0pt;line-height:115%;\r\nmso-ansi-language:IN"><o:p><span class="Apple-style-span" style="line-height: 10px; font-size: 9px; "><br></span></o:p></span></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:8.0pt;line-height:115%;\r\nmso-ansi-language:IN"><o:p><span class="Apple-style-span" style="line-height: 10px; font-size: 9px; "></span></o:p></span></p><p class="MsoNormal" align="center" style="text-align: center;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN">DEWAN GURU DAN TATA USAHA TPA/TK/SDIT/SMPIT/SMK<o:p></o:p></span></p><p></p><p></p><p></p><p></p><p class="MsoNormal" align="center" style="text-align: left;"><span style="font-size:7.0pt;mso-bidi-font-size:8.0pt;line-height:115%;mso-ansi-language:\r\nIN"></span></p><p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:9.0pt;line-height:115%;mso-ansi-language:IN">SISWA SISWI\r\nYAYASAN PENDIDIKAN DAN SOSIAL ISLAM TIARA AKSARA TANGERANG<o:p></o:p></span></p><p></p><p></p><p></p><p></p><p style="text-align: center;"><span class="Apple-tab-span" style="white-space:pre"></span></p>', '1.5', 'admin'),
(35, 'JUARA OLYMPIADE SAINS 2013 PRIMAGAMA', '<span class="Apple-style-span" style="font-family: Georgia, Verdana, Arial, serif; font-size: 12px; color: rgb(41, 48, 59); line-height: 18px; "><div><b><i><span class="Apple-style-span" style="font-style: normal; font-weight: normal; "><b><i><span class="Apple-style-span" style="font-style: normal; font-weight: normal; "><b><span class="Apple-style-span" style="font-weight: normal; "><b><a href="http://primagamajatiuwung.blogspot.com/" target="_blank" sl-processed="1" style="color: rgb(144, 157, 115); text-decoration: none; ">Primagama Jatiuwung</a></b>&nbsp;dan<a href="http://primagama-sangiang.blogspot.com/" target="_blank" sl-processed="1" style="color: rgb(144, 157, 115); text-decoration: none; "><b>Primagama Sangiang</b></a>&nbsp;telah melaksanakan kegiatan<b>&nbsp;OLYMPIADE SAINS 2013</b>tingkat 3 – 5 SD se-Tangerang pada tanggal&nbsp;<b>13 s.d. 28 Maret 2013</b>. Dengan jumlah peserta mencapai&nbsp;<b>1080 siswa</b>. Dan kami bersyukur, kegiatan ini dapat berlangsung dengan lancar dan sukses.</span></b></span></i></b></span></i></b></div><p style="margin-top: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; line-height: 1.5em; ">Adapun peraih Juara dari masing-masing jenjang adalah sebagai berikut:<br></p><p style="margin-top: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; line-height: 1.5em; "><br></p></span>', '3', 'admin'),
(36, 'Renang', 'Organisasi ini untuk para pencinta renang<br>', '4', 'admin'),
(19, 'Gedung', 'Di lokasi ini terdapat 2 lantai sebagai tempat perkuliahan maupun kegiatan kampus lainnya yang dilengkapi dengan berbagai fasilitas pendukung, seperti lapangan parkir yang luas, musholla dan sebagainya. Disetiap ruang kuliah yang berpendingin udara (AC) ini dilengkapi dengan komputer multimedia yang terhubung dengan Internet sehingga proses belajar mengajar dapat lebih interaktif.\r\n', '5.1', 'admin'),
(20, 'Laboratorium', 'Laboratorium merupakan sarana untuk meningkatkan kemampuan mahasiswa sesuai dengan program studi yang diambil mahasiswa, maka lembaga menyediakan beberapa laboratorium yang digunakan untuk praktikum dan riset mahasiswa S1 dan D3. Semua laboratorium dilengkapi dengan AC dan terhubung dengan network (internet), LCD proyektor akan disediakan jika diperlukan.\r\nLaboratorium yang tersedia meliputi: \r\n\r\n<ul>\r\n<li>Laboratorium Instalasi</li>\r\n<li>Laboratorium Jaringan</li>\r\n<li>Laboratorium Rekayasa Perangkat Lunak</li>\r\n<li>Laboratorium Pemrograman</li>\r\n<li>Laboratorium Multimedia</li>\r\n<li>Laboratorium Ai dan Citra</li>\r\n</ul>\r\n', '5.2', 'admin'),
(21, 'Kelas', 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '5.3', 'admin'),
(22, 'Perpustakaan', 'Perpustakaan merupakan sarana vital untuk mendukung proses belajar mengajar, penelitian dan pengembangan program pendidikan. Perpustakaan STIKOM BANYUWANGI SURABAYA, Sebagai perpustakaan modern, tersedia lebih dari 100 bahan pustaka berupa buku, jurnal , majalah komputer, yang dapat diakses oleh dosen dan mahasiswa. STAF PERPUSTAKAAN adalah Tintin Harlina,S.Kom dan Sardiana Dewi, SE.', '5.4', 'admin'),
(23, 'Koneksi Internet', 'Mahasiswa Stikom PGRI Banyuwangi diberikan hak akses internet gratis di dalam kampus, baik itu melalui internet wifi ataupun melalui ruang internet yang memang sudah disediakan kampus. Wifi Mahasiswa diaktifkan 24 jam penuh non-stop dan agar bisa terconnect diharapkan mahasiswa mendaftar terlebih dahulu ke admin Wifi (Bpk.Moh.Erda habiby, S.St) yang berada di ruang server.', '5.5', 'admin'),
(24, 'Sarana Umum', 'Sarana umum yang disediakan antara lain lapangan parkir, dan musholla. Musholla Stikom PGRI Banyuwangi dibagi menjadi 2 ruangan, ruangan pertama untuk wanita dan yang kedua untuk pria. Lokasi Musholla, ruangan pria disebelah tangga sedangkan ruangan wanita disebelahnya.', '5.6', 'admin'),
(30, 'Sejarah Tiara Aksara ', '<p style="text-align: justify;"><b></b></p><b><p class="MsoNormal" style="margin-left:63.8pt;text-align:justify;text-indent:\r\n1.0cm;line-height:200%;tab-stops:1.0cm 63.8pt 92.15pt"><span style="mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-ansi-language:IN"><span class="Apple-style-span" style="font-size: large;"><span class="Apple-style-span" style="font-weight: normal;">Yayasan Pendidikan dan Sosial\r\nIslam Tiara Aksara “YPSI-TA” atau lebih dikenal dengan Sekolah Tiara Aksara\r\nadalah salah satu lembaga pendidikan yang berdasarkan Islam dalam hal\r\npengajaran dan lain sebagainya dalam sekolah ini. Sekolah Tiara Aksara\r\nberalamatkan di Jl. H. Aning Sangiang Jaya, Kecamatan Periuk, Kota Tangerang –\r\nBanten. Sekolah Tiara Aksara berdiri pada tanggal 29 april 1997.<o:p></o:p></span></span></span></p>\r\n\r\n<p class="MsoNormal" style="margin-left:63.8pt;text-align:justify;text-indent:\r\n1.0cm;line-height:200%;tab-stops:1.0cm 63.8pt 92.15pt"><span style="mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-ansi-language:IN"><span class="Apple-style-span" style="font-size: large;"><span class="Apple-style-span" style="font-weight: normal;">Didalam Sekolah Tiara Aksara\r\nterdapat beberapa institusi pendidikan diataranya adalah Taman Pendidikan Al –\r\nQuran “TPQ”, Taman Kanak – Kanak Islam “TKI”, Sekolah Dasar Islam Terpadu\r\n“SDIT”, Sekolah Menengah Pertama Islam Terpadu “SMPIT” dan Sekolah Menengah\r\nKejuruan “SMK”. Dan untuk Sekolah Menengah Kejuruan “SMK” sendiri terdapat\r\nbeberapa peminatan didalamnya seperti Multimedia, Akutansi dan Administrasi\r\nPerkantoran.</span></span><o:p></o:p></span></p></b><p></p>', '1.2', 'admin'),
(37, 'Fasilitas Sekolah', '<div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Gedung Milik Sendiri</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Ruangan Ber AC</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Perpustakaan</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Mushola</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Sarana Olah Raga</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Meja Kursi/anak</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Air gallon/Kelas</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Catering</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Laboratorium Komputer</span></div><div style="text-align: justify;"><span class="Apple-style-span" style="font-size: large;">Kantin</span></div>', '5.1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `posting_date` date NOT NULL,
  `id_penulis` int(10) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `title`, `posting_date`, `id_penulis`, `content`, `type`) VALUES
(4, 'Seminar Pembekalan Etika dan Etos Kerja Pada Dunia Usaha dan Industri', '2014-12-04', 1, '<div style="text-align: justify;"><span class="Apple-style-span" style="font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 20px; "><span class="Apple-style-span" style="font-size: large;">Seminar ini diadakan untuk memberikan pembekalan kepada siswa-siswi SMK Tiara Aksara agar siap menghadapi Dunia Usaha dan Industri. Pada seminar ini para siswa diberikan materi oleh Team dari PT NASA</span></span></div>', 'agenda'),
(3, 'Peringatan Isra Mi''raj', '2014-12-04', 1, '<div style="text-align: justify;"><b><span class="Apple-style-span" style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; "><span class="Apple-style-span" style="font-size: large;">Dengan Memperingati Isra Mi''raj Nabi Muhammad SAW. Kita Tingkatkan Keimanan, Syukuri Kemerdekaan dan Sukseskan Kemerdekaan</span></span></b></div>', 'agenda'),
(15, 'Tanggal 25 Desember 2014 Libur Nata', '2014-11-25', 1, 'Liburan Natal telah tiba.. merry crhismes<br>', 'pengumuman'),
(14, 'Hasil Ulangan Tengah Semester', '2014-11-25', 1, 'Silahakan Hubungi Guru Yang bersangkutan untuk mengambil hasil Ulangan<br>', 'pengumuman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_foto` int(10) NOT NULL AUTO_INCREMENT,
  `id_album` int(10) NOT NULL,
  `foto_kecil` varchar(100) NOT NULL,
  `foto_besar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_foto`, `id_album`, `foto_kecil`, `foto_besar`) VALUES
(1, 1, 'kecil-841988532-956113708-dsc01911.jpg', '841988532-956113708-dsc01911.jpg'),
(2, 1, 'kecil-581645114-535304950-dsc01852.jpg', '581645114-535304950-dsc01852.jpg'),
(3, 1, 'kecil-607876096-418545546-dsc01928.jpg', '607876096-418545546-dsc01928.jpg'),
(4, 1, 'kecil-986574296-416467845-dsc01876.jpg', '986574296-416467845-dsc01876.jpg'),
(5, 1, 'kecil-878941938-395690830-dsc01850.jpg', '878941938-395690830-dsc01850.jpg'),
(6, 1, 'kecil-1039481480-289319933-dsc01920.jpg', '1039481480-289319933-dsc01920.jpg'),
(7, 1, 'kecil-45264211-40811993-dsc01896.jpg', '45264211-40811993-dsc01896.jpg'),
(8, 1, 'kecil-1125038260-27381137-dsc01854.jpg', '1125038260-27381137-dsc01854.jpg'),
(9, 1, 'kecil-866030507-15248844-dsc01908.jpg', '866030507-15248844-dsc01908.jpg'),
(10, 2, 'kecil-580717569-1210149818-_mg_7711.jpg', '580717569-1210149818-_mg_7711.jpg'),
(11, 2, 'kecil-781920698-1182879986-_mg_8261.jpg', '781920698-1182879986-_mg_8261.jpg'),
(12, 2, 'kecil-765113577-1169968555-_mg_8292.jpg', '765113577-1169968555-_mg_8292.jpg'),
(13, 2, 'kecil-952366425-1098658871-_mg_8257.jpg', '952366425-1098658871-_mg_8257.jpg'),
(14, 2, 'kecil-852191531-1050278108-_mg_7713.jpg', '852191531-1050278108-_mg_7713.jpg'),
(15, 2, 'kecil-538124688-1000190661-_mg_7722.jpg', '538124688-1000190661-_mg_7722.jpg'),
(16, 2, 'kecil-215153410-949991909-_mg_7727.jpg', '215153410-949991909-_mg_7727.jpg'),
(17, 2, 'kecil-759325694-911814144-_mg_7726.jpg', '759325694-911814144-_mg_7726.jpg'),
(18, 2, 'kecil-968542815-872337815-_mg_6244.jpg', '968542815-872337815-_mg_6244.jpg'),
(19, 2, 'kecil-274701819-852191531-_mg_8251.jpg', '274701819-852191531-_mg_8251.jpg'),
(20, 2, 'kecil-1013732822-851338189-_mg_7707.jpg', '1013732822-851338189-_mg_7707.jpg'),
(21, 2, 'kecil-1083595535-608581030-_mg_7719.jpg', '1083595535-608581030-_mg_7719.jpg'),
(22, 2, 'kecil-1153309841-527995893-_mg_7703.jpg', '1153309841-527995893-_mg_7703.jpg'),
(23, 2, 'kecil-132379267-322971277-_mg_6240.jpg', '132379267-322971277-_mg_6240.jpg'),
(24, 2, 'kecil-632177783-231775022-_mg_7737.jpg', '632177783-231775022-_mg_7737.jpg'),
(25, 2, 'kecil-560163165-213224116-_mg_8263.jpg', '560163165-213224116-_mg_8263.jpg'),
(26, 2, 'kecil-1088752687-127667336-_mg_8262.jpg', '1088752687-127667336-_mg_8262.jpg'),
(27, 2, 'kecil-1060963430-120580890-_mg_8248.jpg', '1060963430-120580890-_mg_8248.jpg'),
(28, 2, 'kecil-780139811-108337292-_mg_7730.jpg', '780139811-108337292-_mg_7730.jpg'),
(29, 2, 'kecil-1050649126-74760152-_mg_8258.jpg', '1050649126-74760152-_mg_8258.jpg'),
(30, 3, 'kecil-95685574-1196385045-dsc06728.jpg', '95685574-1196385045-dsc06728.jpg'),
(31, 3, 'kecil-563279717-1186627269-dsc06764.jpg', '563279717-1186627269-dsc06764.jpg'),
(32, 3, 'kecil-840170544-1096655373-dsc06566.jpg', '840170544-1096655373-dsc06566.jpg'),
(33, 3, 'kecil-527587773-1085636135-dsc06650.jpg', '527587773-1085636135-dsc06650.jpg'),
(34, 3, 'kecil-587507200-900423887-dsc06739.jpg', '587507200-900423887-dsc06739.jpg'),
(35, 3, 'kecil-529146049-620193897-dsc06541.jpg', '529146049-620193897-dsc06541.jpg'),
(36, 3, 'kecil-489632619-605946801-dsc06669.jpg', '489632619-605946801-dsc06669.jpg'),
(37, 3, 'kecil-366269093-558604889-dsc06743.jpg', '366269093-558604889-dsc06743.jpg'),
(38, 3, 'kecil-414909569-392722685-dsc06667.jpg', '414909569-392722685-dsc06667.jpg'),
(39, 3, 'kecil-138686575-328684956-dsc06548.jpg', '138686575-328684956-dsc06548.jpg'),
(40, 3, 'kecil-178125801-181464964-dsc06686.jpg', '178125801-181464964-dsc06686.jpg'),
(41, 3, 'kecil-1047458370-834531068-dsc02123.jpg', '1047458370-834531068-dsc02123.jpg'),
(42, 4, 'kecil-369979274-802957426-100_2200.jpg', '369979274-802957426-100_2200.jpg'),
(43, 4, 'kecil-934483351-790045995-100_2427.jpg', '934483351-790045995-100_2427.jpg'),
(44, 4, 'kecil-1024529450-766004020-100_2173.jpg', '1024529450-766004020-100_2173.jpg'),
(45, 4, 'kecil-1100180046-765261984-cimg4909.jpg', '1100180046-765261984-cimg4909.jpg'),
(46, 4, 'kecil-1153717961-659558920-100_2212.jpg', '1153717961-659558920-100_2212.jpg'),
(47, 4, 'kecil-396210255-602125315-cimg4876.jpg', '396210255-602125315-cimg4876.jpg'),
(48, 4, 'kecil-97429359-577155795-100_2261.jpg', '97429359-577155795-100_2261.jpg'),
(49, 4, 'kecil-916897092-235336796-cimg4914.jpg', '916897092-235336796-cimg4914.jpg'),
(50, 4, 'kecil-44967396-201722554-100_2183.jpg', '44967396-201722554-100_2183.jpg'),
(51, 4, 'kecil-159500691-137239604-100_2405.jpg', '159500691-137239604-100_2405.jpg'),
(52, 5, 'kecil-290581395-948544938-cimg5690.jpg', '290581395-948544938-cimg5690.jpg'),
(53, 5, 'kecil-1000524577-736248367-cimg5781.jpg', '1000524577-736248367-cimg5781.jpg'),
(54, 5, 'kecil-60624361-720257486-cimg5709.jpg', '60624361-720257486-cimg5709.jpg'),
(55, 5, 'kecil-333953414-714172788-cimg5753.jpg', '333953414-714172788-cimg5753.jpg'),
(56, 5, 'kecil-592219131-692356923-cimg5687.jpg', '592219131-692356923-cimg5687.jpg'),
(57, 5, 'kecil-812121573-674251238-cimg5746.jpg', '812121573-674251238-cimg5746.jpg'),
(58, 5, 'kecil-836571668-645386028-cimg5672.jpg', '836571668-645386028-cimg5672.jpg'),
(59, 5, 'kecil-285053225-624163791-cimg5720.jpg', '285053225-624163791-cimg5720.jpg'),
(60, 5, 'kecil-189887076-576858980-cimg5735.jpg', '189887076-576858980-cimg5735.jpg'),
(61, 5, 'kecil-783182160-536974532-cimg5733.jpg', '783182160-536974532-cimg5733.jpg'),
(62, 5, 'kecil-917453619-469857353-cimg5718.jpg', '917453619-469857353-cimg5718.jpg'),
(63, 5, 'kecil-183691073-453421250-cimg5773.jpg', '183691073-453421250-cimg5773.jpg'),
(64, 5, 'kecil-535527561-387454227-cimg5741.jpg', '535527561-387454227-cimg5741.jpg'),
(65, 5, 'kecil-1188779174-367382147-cimg5677.jpg', '1188779174-367382147-cimg5677.jpg'),
(66, 5, 'kecil-625536558-349053852-cimg5748.jpg', '625536558-349053852-cimg5748.jpg'),
(67, 5, 'kecil-687830501-259193262-cimg5751.jpg', '687830501-259193262-cimg5751.jpg'),
(68, 5, 'kecil-1059256746-184247600-cimg5745.jpg', '1059256746-184247600-cimg5745.jpg'),
(69, 5, 'kecil-1003121704-135644226-cimg5775.jpg', '1003121704-135644226-cimg5775.jpg'),
(70, 5, 'kecil-302750790-116499691-cimg5671.jpg', '302750790-116499691-cimg5671.jpg'),
(71, 5, 'kecil-467742550-101844475-cimg5782.jpg', '467742550-101844475-cimg5782.jpg'),
(80, 1, '201411031610317529.jpg', '201411031610317529.jpg'),
(81, 1, 'taritradisional.JPG', 'taritradisional.JPG'),
(82, 1, 'taritradisional1.JPG', 'taritradisional1.JPG'),
(83, 1, 'dadasfsafasr32wr34545.jpg', 'dadasfsafasr32wr34545.jpg'),
(84, 1, '', ''),
(85, 1, 'Struktur_Organisasi.jpg', 'Struktur_Organisasi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guestbook`
--

CREATE TABLE IF NOT EXISTS `tbl_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'N',
  `posted_date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_guestbook`
--

INSERT INTO `tbl_guestbook` (`id`, `nama`, `email`, `pesan`, `status`, `posted_date`) VALUES
(5, 'Ary Eko Prasetyo', 'Ary_Sagitarius_Boys@yahoo.com', 'wah klo kyk gini jadi tambah hot z ini...!!\nmaju trus ya My Campuz..!!!\nCaiyo Stikom..!!', 'N', '2010-12-20 00:00:00'),
(3, 'rachmat amienullah', 'rachmatamienullah@yahoo.co.id', 'ternyata web na uda ganti wajah, keren...\nsemoga akreditasi na dapet A biar ijazah ku semakin bonafit', 'N', '2010-12-17 00:00:00'),
(4, 'simbadda', 'indragunawan@windowslive.com', '<p>tidak memenuhi syarat sebagai mana fasilitas IT, kurang memadai fasilitas harap fasilitas di perbaiki dan harga spp di turunkan, serta klo download yang cepet masa cuma staff TU saja yang bisa tembus 200KB/sex tanpa IDM,...</p>', 'N', '2010-12-17 00:00:00'),
(6, 'Faudi Rusito', 'faudi73@gmail.com', 'Malam....\nSaya mau download materi ujian animasi grafis..... eh .... kok disuruh kunjungi beberapa saat... setelah saya kunjungi banyak saat.. lha tetep suruh kunjungi lagi...\nApa memang dibuat supaya penasaran?', 'N', '2011-01-06 00:00:00'),
(7, 'Kuntum Puri Dwita', 'kuntumpuridwita@yahoo.co.id', 'aslm\npak Erda,pak Faruk,pak Haris,,,,,\nweb nya karang lebih bagus,menarik,,,siep dah!!\nsemoga kalian sehat,banyak rizki dan jangan lupa bagi2..hee\nwslm', 'N', '2011-01-24 00:00:00'),
(8, 'rahasia', 'asasjj28@yahoo.com', 'Buat apa kalau bwt web isinya tidak update sama sekali..........\nZZZZZzzzzzzzzz....\n\nTutup aza \n\nBonek dan arema', 'N', '2011-01-29 00:00:00'),
(9, 'SerCom', 'admin@pesanggaran.com', 'Wah Kok Jadwale UAS Tidak Diupload Yaw :)', 'N', '2011-01-31 00:00:00'),
(10, 'wong ndeso', 'wong_ndeso@yahoo.com', '<p>kampus ta iki</p>', 'Y', '2011-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_artikel` (
  `id_kat` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id_kat`, `nama_kat`, `type`) VALUES
(1, 'Akademik', 'berita'),
(2, 'Kemahasiswaan', 'berita'),
(3, 'Pemrograman Web', 'tutorial'),
(4, 'Linux Open Source', 'tutorial'),
(5, 'Kegiatan', 'berita'),
(7, 'Desain Website', 'tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE IF NOT EXISTS `tbl_media` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_description` varchar(100) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `image_size` varchar(20) NOT NULL,
  `uploaded_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`id_file`, `title`, `image_description`, `image_url`, `file_type`, `image_size`, `uploaded_date`) VALUES
(1, 'ghghgh', 'Jadwal UAS Semester Genap 2011 Kelas Malam', 'media/file/Jadwal_UAS_Ganjil_2010_Kelas_Sore.pdf', 'file', '', '18-Feb-2011'),
(2, 'Jadwal UAS Semester Genap 2011 Kelas Pagi', 'Jadwal UAS Semester Genap 2011 Kelas Pagi', 'media/file/Jadwal_UAS_Ganjil_2010_Kelas_Pagi.pdf', 'file', '', '18-Feb-2011'),
(3, 'Workshop Linux', 'Workshop Linux', 'media/image/imgthumb/714172788-cimg5753.jpg', 'image', '460x320', '2011-02-20 09:02:09'),
(7, 'E-Book 11 Langkah Memahami C#', 'Cara memahami bahasa pemrograman C#', 'media/file/14670056611_langkah_memahami_Csharp.zip', 'file', '', '20-Feb-2011'),
(8, 'Penyerahan Buku ajar untuk peserta, Oleh Kepala Dinas Pendidikan Pemuda dan Olahraga & Ketua STIKOM ', 'Penyerahan Buku ajar untuk peserta, Oleh Kepala Dinas Pendidikan Pemuda dan Olahraga & Ketua STIKOM ', 'media/image/imgthumb/1000190661-_mg_7722.jpg', 'image', '460x320', '2011-02-20 12:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` char(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `id_parent` char(10) NOT NULL,
  `level` int(11) NOT NULL,
  `aktif` enum('act','nact') NOT NULL DEFAULT 'act',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `title`, `id_parent`, `level`, `aktif`) VALUES
('1', 'Profil Sekolah', '0', 0, 'act'),
('1.1', 'Sambutan Ketua', '1', 1, 'act'),
('1.2', 'Sejarah Tiara Aksara', '1', 1, 'act'),
('1.3', 'Visi dan Misi', '1', 1, 'act'),
('3', 'Prestasi Siswa/i', '0', 0, 'nact'),
('4', 'Organisasi Sekolah', '0', 0, 'nact'),
('5.1', 'Gedung', '5', 1, 'nact'),
('5.2', 'Laboratorium', '5', 1, 'nact'),
('5.3', 'Kelas', '5', 1, 'nact'),
('5.4', 'Perpustakaan', '5', 1, 'nact'),
('5.5', 'Koneksi Internet', '5', 1, 'nact'),
('5.6', 'Sarana Umum', '5', 1, 'nact'),
('6', 'Berita', '0', 10, 'nact'),
('7', 'Agenda', '0', 10, 'nact'),
('8', 'Pengumuman', '0', 10, 'nact'),
('9', 'Elearning', '0', 10, 'nact'),
('10', 'Galeri Kegiatan', '0', 10, 'nact'),
('11', 'Download', '0', 10, 'nact'),
('12', 'Guest Book', '0', 10, 'nact'),
('1.5', 'Struktur Organisasi', '1', 1, 'act'),
('13', 'Hubungi Kami', '0', 10, 'nact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pollingjawaban`
--

CREATE TABLE IF NOT EXISTS `tbl_pollingjawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_pollingjawaban`
--

INSERT INTO `tbl_pollingjawaban` (`id_jawaban`, `id_soal`, `jawaban`, `counter`) VALUES
(1, 1, 'Kurang', 42),
(2, 1, 'Cukup Bagus', 22),
(3, 1, 'Sangat Bagus', 40),
(4, 1, 'Tidak Tahu', 5),
(5, 4, 'Ya', 2),
(6, 4, 'Cukup', 1),
(7, 4, 'Kurang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pollingsoal`
--

CREATE TABLE IF NOT EXISTS `tbl_pollingsoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soal` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `dislike` int(11) NOT NULL,
  `liked` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_pollingsoal`
--

INSERT INTO `tbl_pollingsoal` (`id`, `soal`, `status`, `dislike`, `liked`, `average`) VALUES
(1, 'Bagaimana pelaksanaan proses akademik di semester genap ini?', 'Y', 120, 106, 111),
(4, 'Apakah tampilan website ini menarik?', 'N', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `pass` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`, `email`, `status`) VALUES
(1, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Administrator', 'admin@stikombanyuwangi.ac.id', 'administrator'),
(2, 'ekoheri', '511a80cd75663c51', 'Eko Heri Susanto', 'ekoheri@gmail.com', 'user'),
(3, 'erdda', '57658b6e3bd7ebe2', 'Erdda Habibi', 'admin@stikombanyuwangi.ac.id', 'administrator'),
(4, 'ukmkloso', '2d3166ce7b771bd4', 'UKM KLOSO', 'ekoheri@gmail.com', 'administrator'),
(5, 'ukmkamera', '6df4f18b1f69492c', 'UKM KAMERA', 'ekoheri@gmail.com', 'administrator'),
(6, 'gedelumbung', '*927B0C67BD41144B09E0F68050799BCB4F53CC4B', 'Gede Lumbung', 'gedelumbung@gmail.com', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_psb_data`
--

CREATE TABLE IF NOT EXISTS `tb_psb_data` (
  `nomor` int(5) NOT NULL AUTO_INCREMENT,
  `nopen` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bhs` varchar(150) NOT NULL,
  `no_sttb` int(15) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `kdk` varchar(15) NOT NULL,
  `jumsau` int(3) NOT NULL,
  `tglbrsama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `namaayah` varchar(150) NOT NULL,
  `namaibu` varchar(150) NOT NULL,
  `namawali` varchar(150) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `tlportu` varchar(12) NOT NULL,
  `pendidikan_ayah` varchar(10) NOT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `pendidikan_wali` varchar(10) NOT NULL,
  `pekerjaan_ayah` varchar(10) NOT NULL,
  `pekerjaan_ibu` varchar(10) NOT NULL,
  `pekerjaan_wali` varchar(10) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `alamat_ibu` text NOT NULL,
  `alamat_wali` text NOT NULL,
  `tdsd` varchar(15) DEFAULT NULL,
  `tk` varchar(30) DEFAULT NULL,
  `tglijazahtk` date DEFAULT NULL,
  `pindahansd` varchar(30) DEFAULT NULL,
  `nosurat` int(30) DEFAULT NULL,
  `diterima` varchar(30) DEFAULT NULL,
  `dikelas` int(10) DEFAULT NULL,
  `asalsekolah` varchar(30) DEFAULT NULL,
  `noijazah` int(15) DEFAULT NULL,
  `nilai` int(10) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `status_psb` int(1) DEFAULT NULL,
  `polling_psb` varchar(20) NOT NULL,
  `idpsb` int(11) NOT NULL,
  `status_pembayaran` enum('Lunas','Belum Bayar') NOT NULL DEFAULT 'Belum Bayar',
  `gelombang` int(11) NOT NULL,
  PRIMARY KEY (`nomor`),
  UNIQUE KEY `nopen` (`nopen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_psb_data`
--

INSERT INTO `tb_psb_data` (`nomor`, `nopen`, `password`, `password2`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `bhs`, `no_sttb`, `anak_ke`, `kdk`, `jumsau`, `tglbrsama`, `alamat`, `namaayah`, `namaibu`, `namawali`, `tlp`, `tlportu`, `pendidikan_ayah`, `pendidikan_ibu`, `pendidikan_wali`, `pekerjaan_ayah`, `pekerjaan_ibu`, `pekerjaan_wali`, `alamat_ayah`, `alamat_ibu`, `alamat_wali`, `tdsd`, `tk`, `tglijazahtk`, `pindahansd`, `nosurat`, `diterima`, `dikelas`, `asalsekolah`, `noijazah`, `nilai`, `jurusan`, `status_psb`, `polling_psb`, `idpsb`, `status_pembayaran`, `gelombang`) VALUES
(1, 12472, 'QWEQWE', 'QWEQWE', 'Adi Muwardi', 'L', 'Tangerang', '1990-06-22', 'Bahasa Indonesi', 2147483647, 2, 'Anak kandung', 2, 'Orang Tua', 'Jl. Nuri 3 Blok B 22 No 2 PD. Sejahtera Kota Baru ', 'Ismunandar', 'Iin Warsini S.P', '', '', '', 'SMA/SMK', 'D3/S1', '', 'Petani', 'Wiraswasta', 'Wiraswasta', 'Jl. Nuri 3 Blok B 22 No 2 PD. Sejahtera Kota Baru ', 'Jl. Nuri 3 Blok B 22 No 2 PD. Sejahtera Kota Baru ', '', '24-11-2014', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Media Cetak', 2, 'Belum Bayar', 1),
(2, 19090, 'nzxc', '', 'Agung Herkules', 'L', 'Jakarta', '2014-11-25', 'Indonesia', 2147483647, 3, 'Anak kandung', 3, 'Orang Tua', 'Jajksajdjad asjdasd j jb', 'asdad', 'asdasd', 'dasd', '', '', 'SMA/SMK', 'SMA/SMK', '', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'Jl. Nuri 3 Blok B 22 No 2 PD. Sejahtera Kota Baru Tangerang Banten', 'Jl. Nuri 3 Blok B 22 No 2 PD. Sejahtera Kota Baru Tangerang Banten', '', '0', '0', '0000-00-00', '0', 0, '25-11-2014', 2, 'sad', 2342, 0, '0', 1, 'Internet', 4, 'Belum Bayar', 1),
(3, 4632, '12345', '', 'rina', 'P', 'Tangerang', '2008-11-12', 'B.Indonesia', 12344, 0, 'Anak kandung', 0, 'Orang Tua', 'kp. kebon cau Rt 004/005', 'Ali Musa', 'Entim', 'Ade', '', '', 'SMP', 'SMP', 'SMA/SMK', 'Peg. Neger', 'Peg. Swast', 'Peg. Swast', 'keboncau', 'keboncau', 'keboncau', '2014-11-27', 'Matahul anwar', '0000-00-00', '', 0, '0', 0, '0', 0, 0, '0', 1, 'Media Cetak', 3, 'Lunas', 0),
(4, 19512, '123456', '', 'Rin3', 'P', 'Tangerang', '2011-12-08', 'b. Indonesia', 12345678, 3, 'Anak kandung', 5, 'orang tua', 'kp. kebon cau RT004/005', 'ali', 'entin', 'ade', '', '', 'SD', 'SMA/SMK', 'SMP', 'Peg. Swast', 'Ibu RT', 'Ibu RT', 'keboncau', 'keboncau', 'keboncau', '2014-12-04', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Media Cetak', 1, 'Belum Bayar', 0),
(5, 19004, '123456', '', 'rina', 'P', 'bandung', '2008-12-03', 'indo', 12345678, 5, 'Anak kandung', 6, 'orang tua', 'keboncau', 'ali', 'entin', 'ade', '', '', 'SMP', 'SMP', 'SMA/SMK', 'Peg. Neger', 'Peg. Swast', 'Peg. Swast', 'keboncau', 'keboncau', 'keboncau', '2014-12-04', 'tiara aksara', '0000-00-00', '', 0, '0', 0, '0', 0, 0, '0', 1, 'Internet', 3, 'Belum Bayar', 0),
(6, 18331, '123456', '', 'hafiz', 'L', 'tangerang', '2003-03-11', 'indonesia', 123456, 3, 'Anak kandung', 3, 'orang tua', 'keboncau', 'ali', 'entin', 'iwan', '', '', 'SMP', 'SMA/SMK', 'D3/S1', 'Peg. Swast', 'Ibu RT', 'Ibu RT', 'boncu', 'boncu', 'boncu', '2014-12-04', '0', '0000-00-00', '0', 0, '04-12-2014', 7, 'jatake 3', 1234567, 30, '0', 0, 'Teman', 4, 'Lunas', 0),
(7, 17015, '12345', '', 'farhan', 'L', 'tangerang', '2000-12-01', 'indo', 1234556, 3, 'Anak kandung', 3, 'orang tua', 'keboncau', 'ali', 'entin', 'ade', '', '', 'SMA/SMK', 'SMP', 'SMA/SMK', 'Peg. Swast', 'Ibu RT', 'Ibu RT', 'keboncau', 'keboncau', 'keboncau', '2014-12-04', '0', '0000-00-00', '0', 0, '04-12-2014', 0, 'smpn 8', 1233434, 30, 'Perkantoran', 0, 'Kerabat', 5, 'Lunas', 0),
(8, 7040, '123tes', '', 'tes', 'L', 'tangerang', '2014-12-01', 'indonesia', 123123, 1, 'Anak kandung', 1, 'ortu', 'qweqwe', 'qwe', 'qwe', 'qwe', '', '', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'qweqwe', 'qwqw', 'qwqwq', '2015-01-02', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Kerabat', 1, 'Belum Bayar', 0),
(9, 8324, '12345', '', ' vbkjdb', 'P', 'njdbckjbsdv', '2010-01-14', 'mnjl', 53564526, 2, 'Anak kandung', 2, 'm m mb kjb', 'm,n mn mnlnnklnm', 'mnn', 'mknlknkl', 'mnmln', '', '', 'SMP', 'SMP', 'SD', 'Peg. Neger', 'Ibu RT', 'Ibu RT', 'hjghjvjhvhjvj', 'hvhjvhvhv', 'hvhjvhjvhjv', '2015-01-02', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 1, 'Media Cetak', 2, 'Lunas', 0),
(10, 16624, 'gfshfdx', '', 'ghjfhjfhj', 'P', 'nbvhj', '2009-01-22', 'bnmjgjkg', 2147483647, 2, '', 2, 'vhgfhj', 'hfghdhdgh', 'hdcjdgghd', 'ghdghdghd', 'djhdgjdgh', '', '', 'SD', 'SD', 'SD', 'Wiraswasta', 'Peg. Swast', 'Peg. Swast', 'gfgfhjf', 'hfhjfh', 'fhfhhj', '2015-01-02', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Media Cetak', 1, 'Belum Bayar', 0),
(11, 22548, '12345', '', 'hkjhkuughiu', 'P', 'nbkjbkjbjk', '2010-01-06', 'nkjbkj', 2147483647, 2, 'Anak kandung', 2, 'orygh', 'jbbhhjvhvhvhj', 'jbvhjvjhv', 'hvhjvhjv', 'hvhjhjv', '', '', 'SMP', 'SD', 'SD', 'Peg. Neger', 'Peg. Swast', 'Peg. Swast', 'jkbhjbhuvhjvhu', 'hjbhjvhjbhbhv', 'hbvhvhvbjhb', '2015-01-06', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Media Cetak', 1, 'Belum Bayar', 0),
(12, 21713, '1234567', '', 'ginu', 'L', 'tangerang', '2011-01-05', 'indonesia', 989999999, 3, 'Anak kandung', 3, 'orangtua', 'kp. keboncau rt 004/005 tangerang', 'ali', 'entin', 'iwan', '', '', 'SMA/SMK', 'SMA/SMK', 'SMA/SMK', 'Peg. Neger', 'Peg. Neger', 'Peg. Neger', 'tangerang', 'tangerang', 'tangerang', '2015-01-16', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 1, 'Teman', 1, 'Belum Bayar', 0),
(13, 5260, '123', '0', 'tes', 'L', 'tangerang', '2015-01-19', 'indonesia', 123123, 12, 'Anak kandung', 1, 'ortu', 'alamat', 'ayah', 'ibu', 'wali', '000909090', '09090909', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'alamat', 'alamat', 'alamat', '2015-01-19', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 1, 'Media Cetak', 1, 'Lunas', 0),
(15, 115001, '123', '123', 'tes', 'L', 'tes', '2015-02-16', 'indo', 123, 2, 'Anak kandung', 2, 'ortu', 'alamat', 'ayah', 'ibu', 'wali', '0', '0', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'alamat', 'alamat', 'alamat', '2015-02-16', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Teman', 1, 'Belum Bayar', 0),
(16, 115002, '123', '123', 'tes', 'L', 'tes', '2015-02-17', 'indo', 123, 2, 'Anak kandung', 2, 'ortu ', 'alamat', 'ayah', 'ibu', 'wali', '090909090909', '0', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'ayah', 'ibu', 'wali', '2015-02-16', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Kerabat', 1, 'Belum Bayar', 0),
(17, 415003, '123', '123', 'tes', 'L', 'tes', '2015-02-17', 'indo', 123, 2, 'Anak kandung', 2, 'ortu ', 'alamat', 'ayah', 'ibu', 'wali', '010101010101', '010101010101', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'ayah', 'ibu', 'wali', '2015-02-16', '0', '0000-00-00', '0', 0, '16-02-2015', 2, 'SD', 112312, 23, '0', 0, 'Internet', 4, 'Belum Bayar', 0),
(18, 115004, 'tes', 'tes', 'tes', 'L', 'Tangerang', '2015-02-18', 'indo', 123123, 2, 'Anak kandung', 2, 'ortu ', 'alamat', 'ayah', 'ibu', 'wali', '020202020202', '030303030303', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'alamat', 'alamat', 'alamat', '2015-02-18', '0', '0000-00-00', '0', 0, '0', 0, '0', 0, 0, '0', 0, 'Kerabat', 1, 'Belum Bayar', 0),
(19, 515004, 'tes123', 'tes123', 'tes', 'L', 'jakarta', '2015-05-12', 'inodnesia', 23123231, 3, 'Anak kandung', 2, 'ortu ', 'tes1', 'teswesad', 'asdasd', 'asdasd', '123123123213', '123123123213', 'SD', 'SD', 'SD', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'kjasdjasdb', 'asdasdas', 'asdasdas', '2015-05-12', '0', '0000-00-00', '0', 0, '12-05-2015', 3, 'smptes', 12321, 12, 'Perkantoran', 0, 'Kerabat', 5, 'Belum Bayar', 0),
(20, 515005, '123123', '123123', 'tes', 'L', 'jakarta', '2015-05-19', 'indonesia', 2147483647, 2, '0', 2, 'ortu ', 'asdasjdajksdnajkn', 'ayah', 'ibu', '', '123123123123', '123123123123', 'SD', 'SD', '', 'Peg. Swast', 'Peg. Swast', 'Peg. Swast', 'alamat ayah', 'alamat ibu', '', '2015-05-19', '0', '0000-00-00', '0', 0, '19-05-2015', 0, 'smp asal', 123123123, 28, '0', 0, 'Internet', 5, 'Belum Bayar', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
