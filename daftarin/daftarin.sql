-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:56 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftarin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'diah@gmail.com', 'admin1'),
(2, 'tiara@gmail.com', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_hima`
--

CREATE TABLE `anggota_hima` (
  `id_ahima` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` varchar(40) NOT NULL,
  `domisili` varchar(40) NOT NULL,
  `alamat_ktp` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `wa` varchar(30) NOT NULL,
  `passion` varchar(50) NOT NULL,
  `organisasi` text NOT NULL,
  `prestasi` text NOT NULL,
  `dept1` varchar(50) NOT NULL,
  `dept2` varchar(50) NOT NULL,
  `alasan_dept` text NOT NULL,
  `alasan_hima` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_hima`
--

INSERT INTO `anggota_hima` (`id_ahima`, `nama_lengkap`, `nama_panggilan`, `npm`, `angkatan`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `domisili`, `alamat_ktp`, `agama`, `email`, `id_line`, `wa`, `passion`, `organisasi`, `prestasi`, `dept1`, `dept2`, `alasan_dept`, `alasan_hima`) VALUES
(1, 'Diah Fatmawati', 'Diah', '18082010012', 2018, 'Perempuan', 'Surabaya', '2000-07-19', 'Jalan Lontar Baru RT 4 RW 2 D24', 'Islam', 'Surabaya', 'fadiahachmad@gmail.com', '@fadiahachmad', '083857667563', 'Presenter, Editing (Photoshop, Camtasia 2019)', 'Science Club (2016-2018), English Club (2016-2018)', 'menambah relasi dan ingin menjadi mahasiswi yang aktif', 'Kewirausahaan', 'Litbang', 'banyak yang bilang saya cocok jualan alias lambe dagang hehehe', 'menambah relasi dan ingin menjadi mahasiswi yang aktif');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_iscom`
--

CREATE TABLE `anggota_iscom` (
  `id_aiscom` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` varchar(40) NOT NULL,
  `domisili` varchar(40) NOT NULL,
  `alamat_ktp` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `wa` varchar(30) NOT NULL,
  `passion` varchar(50) NOT NULL,
  `organisasi` text NOT NULL,
  `prestasi` text NOT NULL,
  `div1` varchar(50) NOT NULL,
  `div2` varchar(50) NOT NULL,
  `alasan_div` text NOT NULL,
  `alasan_iscom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_iscom`
--

INSERT INTO `anggota_iscom` (`id_aiscom`, `nama_lengkap`, `nama_panggilan`, `npm`, `angkatan`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `domisili`, `alamat_ktp`, `agama`, `email`, `id_line`, `wa`, `passion`, `organisasi`, `prestasi`, `div1`, `div2`, `alasan_div`, `alasan_iscom`) VALUES
(1, 'Diah Fatmawati', 'Diah', '18082010012', 2018, 'Perempuan', 'Surabaya', '2000-07-19', 'Jalan Lontar Baru RT 4 RW 2 D24', 'Islam', 'Surabaya', 'fadiahachmad@gmail.com', '@fadiahachmad', '083857667563', 'Presenter, Editing (Photoshop, Camtasia 2019)', 'Science Club (2016-2018), English Club (2016-2018)', '15 besar Lomba Penelitian Belia (Center for Young Scientist)', 'Divisi Web', 'Divisi Desktop', 'I LOV WEB N DESKTOP PROGRAMMING', 'menambah relasi dan ingin menjadi mahasiswi yang aktif');

-- --------------------------------------------------------

--
-- Table structure for table `blj`
--

CREATE TABLE `blj` (
  `id_blj` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` int(40) NOT NULL,
  `domisili` varchar(40) NOT NULL,
  `alamat_ktp` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `wa` varchar(30) NOT NULL,
  `passion` varchar(50) NOT NULL,
  `organisasi` text NOT NULL,
  `prestasi` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blj`
--

INSERT INTO `blj` (`id_blj`, `nama_lengkap`, `nama_panggilan`, `npm`, `angkatan`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `domisili`, `alamat_ktp`, `agama`, `email`, `id_line`, `wa`, `passion`, `organisasi`, `prestasi`, `alasan`) VALUES
(1, 'Diah Fatmawati', 'Diah', '18082010012', 2018, 'Perempuan', 'Surabaya', 2000, 'Jalan Lontar Baru RT 4 RW 2 D24', 'Islam', 'Surabaya', 'fadiahachmad@gmail.com', '@fadiahachmad', '083857667563', 'Presenter, Editing (Photoshop, Camtasia 2019)', 'Science Club (2016-2018), English Club (2016-2018)', '15 besar Lomba Penelitian Belia (Center for Young Scientist).', 'menambah relasi dan ingin menjadi mahasiswi yang akti');

-- --------------------------------------------------------

--
-- Table structure for table `panitia_hima`
--

CREATE TABLE `panitia_hima` (
  `id_phima` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `domisili` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `wa` varchar(30) NOT NULL,
  `divisi1` varchar(50) NOT NULL,
  `divisi2` varchar(50) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia_hima`
--

INSERT INTO `panitia_hima` (`id_phima`, `nama`, `npm`, `angkatan`, `jenis_kelamin`, `domisili`, `email`, `id_line`, `wa`, `divisi1`, `divisi2`, `alasan`) VALUES
(1, 'Diah Fatmawati', '18082010012', 2018, 'Perempuan', 'Surabaya', 'fadiahachmad@gmail.com', '@fadiahachmad', '083857667563', 'Divisi Kesahatan', 'Divisi PDD', 'ingin berkontribusi pada program kerja himasifo dan menambah relasi dengan maba.');

-- --------------------------------------------------------

--
-- Table structure for table `panitia_iscom`
--

CREATE TABLE `panitia_iscom` (
  `id_piscom` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `domisili` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `wa` varchar(30) NOT NULL,
  `divisi1` varchar(50) NOT NULL,
  `divisi2` varchar(50) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia_iscom`
--

INSERT INTO `panitia_iscom` (`id_piscom`, `nama`, `npm`, `angkatan`, `jenis_kelamin`, `domisili`, `email`, `id_line`, `wa`, `divisi1`, `divisi2`, `alasan`) VALUES
(1, 'Diah Fatmawati', '18082010012', 2018, 'Perempuan', 'Surabaya', 'fadiahachmad@gmail.com', '@fadiahachmad', '083857667563', 'Divisi Kesahatan', 'Divisi Konsumsi', 'ingin berkontribusi pada program kerja iscom');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `angkatan`, `saran`) VALUES
(1, 'Diah Fatmawati', 2018, 'Website daftar.in keren banget.'),
(2, 'Diah Fatmawati', 2018, 'Web-nya oke banget kakak, top dah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_hima`
--
ALTER TABLE `anggota_hima`
  ADD PRIMARY KEY (`id_ahima`);

--
-- Indexes for table `anggota_iscom`
--
ALTER TABLE `anggota_iscom`
  ADD PRIMARY KEY (`id_aiscom`);

--
-- Indexes for table `blj`
--
ALTER TABLE `blj`
  ADD PRIMARY KEY (`id_blj`);

--
-- Indexes for table `panitia_hima`
--
ALTER TABLE `panitia_hima`
  ADD PRIMARY KEY (`id_phima`);

--
-- Indexes for table `panitia_iscom`
--
ALTER TABLE `panitia_iscom`
  ADD PRIMARY KEY (`id_piscom`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota_hima`
--
ALTER TABLE `anggota_hima`
  MODIFY `id_ahima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota_iscom`
--
ALTER TABLE `anggota_iscom`
  MODIFY `id_aiscom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blj`
--
ALTER TABLE `blj`
  MODIFY `id_blj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia_hima`
--
ALTER TABLE `panitia_hima`
  MODIFY `id_phima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia_iscom`
--
ALTER TABLE `panitia_iscom`
  MODIFY `id_piscom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
