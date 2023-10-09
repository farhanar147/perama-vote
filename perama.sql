-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 06:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perama`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jabatan`, `username`, `password`) VALUES
(1, 'farhan', 'IT', 'farhan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `calon_ketum`
--

CREATE TABLE `calon_ketum` (
  `id_ketum` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `hima` varchar(20) NOT NULL,
  `visi` text NOT NULL,
  `no_urut` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_ketum`
--

INSERT INTO `calon_ketum` (`id_ketum`, `nama`, `nim`, `tanggal_lahir`, `hima`, `visi`, `no_urut`, `foto`) VALUES
(1, 'Albin', 2009105104, '2001-10-08', 'himakom', 'Mewujudkan HIMA program studi terkait yang aktif, profesional dan solid dalam membangun kemajuan prodi bersama.', 1, 'calon.svg'),
(2, 'Yusuf', 1991111008, '2000-09-06', 'himak', 'Mewujudkan HIMA program studi sebagai organisasi yang memiliki keunggulan dan solidaritas tinggi..', 1, 'calon.svg'),
(3, 'Desmon', 2009105103, '2001-10-08', 'himakom', 'Menjadikan HIMAKOM berprinsip DIGITAL (Disiplin, Giat, dan Total) dengan menjaga konsistensi tanggung jawab dalam berorganisasi dan memelihara keharmonisan, menjadikan mahasiswa administrasi publik yang partisipatif serta adaptif.”', 2, 'calon.svg'),
(4, 'fadilah', 1991061002, '1999-09-01', 'hikom', 'Mewujudkan HIMA program studi terkait yang aktif, profesional dan solid dalam membangun kemajuan prodi bersama.', 1, 'calon.svg'),
(5, 'yozi', 1991061007, '1999-10-11', 'himen', 'Mewujudkan HIMA program studi terkait yang aktif, profesional dan solid dalam membangun kemajuan prodi bersama.', 1, 'calon.svg'),
(6, 'sheila', 1881061007, '2000-11-08', 'hikom', 'Mewujudkan HIMA program studi terkait yang aktif, profesional dan solid dalam membangun kemajuan prodi bersama.', 1, 'calon_1.svg'),
(8, 'aku', 100000, '2000-09-01', 'elsa', 'bhb', 3, 'jhjhjj');

-- --------------------------------------------------------

--
-- Table structure for table `calon_presma`
--

CREATE TABLE `calon_presma` (
  `id_presma` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_urut` int(5) NOT NULL,
  `visi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_presma`
--

INSERT INTO `calon_presma` (`id_presma`, `nama`, `nim`, `tanggal_lahir`, `no_urut`, `visi`, `foto`) VALUES
(4, 'Joe Biden', 1991061004, '1978-04-17', 1, 'Membentuk Badan Eksekutif Mahasiswa yang aktif sebagai pionir dalam pergerakan untuk mewujudkan mahasiswa yang berkompeten dan memiliki integritas terhadap problematika yang terjadi di tengah masyarakat.', 'joe-biden_1.jpg'),
(5, 'Barack Obama', 1881051004, '1918-06-04', 2, 'Menjadikan BEM sebagai wadah penerima aspirasi mahasiswa, sekaligus penggerak dan pelaksana aspirasi mahasiswa yang relevan bagi mahasiswa dan universitas, juga menciptakan BEM sebagai organisasi yang jujur, adil, disiplin, dan berakhlak mulia dalam lingkup masyarakat maupun kampus.', 'obama_1.jpg'),
(14, 'Donald Trump', 1991051001, '1995-10-22', 3, 'Membentuk Badan Eksekutif Mahasiswa yang aktif sebagai pionir dalam pergerakan untuk mewujudkan mahasiswa yang berkompeten dan memiliki integritas terhadap problematika yang terjadi di tengah masyarakat.', 'trump_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kotak_ketum`
--

CREATE TABLE `kotak_ketum` (
  `id_kotak` int(11) NOT NULL,
  `nim_pemilih` int(11) NOT NULL,
  `nama_ketum` varchar(100) NOT NULL,
  `nim_ketum` int(11) NOT NULL,
  `hima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kotak_presma`
--

CREATE TABLE `kotak_presma` (
  `id_kotak` int(11) NOT NULL,
  `nim_pemilih` int(11) NOT NULL,
  `nim_presma` int(11) NOT NULL,
  `nama_presma` varchar(100) NOT NULL,
  `suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kotak_presma`
--

INSERT INTO `kotak_presma` (`id_kotak`, `nim_pemilih`, `nim_presma`, `nama_presma`, `suara`) VALUES
(35, 1991051004, 1991051001, 'Donald Trump', 0);

--
-- Triggers `kotak_presma`
--
DELIMITER $$
CREATE TRIGGER `suara_presma` AFTER INSERT ON `kotak_presma` FOR EACH ROW BEGIN

INSERT INTO suara_presma SET nim_presma = NEW.nim_presma, jumlah_suara = new.suara ON DUPLICATE KEY UPDATE jumlah_suara = jumlah_suara + NEW.suara;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `misi_ketum`
--

CREATE TABLE `misi_ketum` (
  `id_misi` int(11) NOT NULL,
  `id_ketum` int(11) NOT NULL,
  `misi1` text DEFAULT NULL,
  `misi2` text DEFAULT NULL,
  `misi3` text DEFAULT NULL,
  `misi4` text DEFAULT NULL,
  `misi5` text DEFAULT NULL,
  `misi6` text DEFAULT NULL,
  `misi7` text DEFAULT NULL,
  `misi8` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `misi_ketum`
--

INSERT INTO `misi_ketum` (`id_misi`, `id_ketum`, `misi1`, `misi2`, `misi3`, `misi4`, `misi5`, `misi6`, `misi7`, `misi8`) VALUES
(7, 1, '1. Mewujudkan HIMA yang berisi pribadi amanah dan tanggung jawab.', '2. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '3. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', NULL, NULL, NULL, NULL, NULL),
(8, 3, '1. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '2. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '3. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', NULL, NULL, NULL, NULL, NULL),
(9, 4, '1. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '2. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '3. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', NULL, NULL, NULL, NULL, NULL),
(10, 6, '1. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '2. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '3. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', NULL, NULL, NULL, NULL, NULL),
(11, 5, '1. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '2. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '3. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', NULL, NULL, NULL, NULL, NULL),
(12, 2, '1. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '2. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', '3. Mampu membuat dan melaksanakan program HIMA yang bermanfaat secara luas.', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `misi_presma`
--

CREATE TABLE `misi_presma` (
  `id_misi` int(11) NOT NULL,
  `id_presma` int(11) NOT NULL,
  `misi1` text DEFAULT NULL,
  `misi2` text DEFAULT NULL,
  `misi3` text DEFAULT NULL,
  `misi4` text DEFAULT NULL,
  `misi5` text DEFAULT NULL,
  `misi6` text DEFAULT NULL,
  `misi7` text DEFAULT NULL,
  `misi8` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `misi_presma`
--

INSERT INTO `misi_presma` (`id_misi`, `id_presma`, `misi1`, `misi2`, `misi3`, `misi4`, `misi5`, `misi6`, `misi7`, `misi8`) VALUES
(3, 4, '1. Menjadikan lembaga yang solutif terhadap berbagai persoalan Riau dan Indonesia', '2. Membangun inovasi program kerja dan sistem advokasi berbasis ilmu pengetahuan dan teknologi', '3. Menjadikan kreator pembangun dan peningkatan sumber daya manusia yang kompetitif dan berdaya saing', '4. Menjadi pilar sinergi dan kolaborasi civitas akademika serta elemen yang peduli di bidang pendidikan dan sosial masyarakat', NULL, NULL, NULL, NULL),
(15, 5, '1. Memotivasi sesama rekan mahasiswa agar menumbuhkan daya saing yang tinggi dan produktivitas yang berdampak di era teknologi yang dinamis di tengah masyarakat.', '2. Menjadikan BEM sebagai mediator antara universitas dan mahasiswa dalam berkomunikasi dan berdiskusi, juga menjadi penampung dan pelaksana aspirasi mahasiswa.\r\n', '3. Mewujudkan BEM yang inklusif, bekerja dengan komitmen, dan memiliki tanggung jawab yang tinggi terhadap tugas yang diemban.', '', '', '', '', ''),
(16, 14, '1. Membuka diri terhadap masukan yang diberikan mahasiswa maupun universitas demi pengembangan diri BEM yang lebih baik untu ke depannya.', '2. Mendukung kemajuan organisasi/ UKM yang berada di bawah naungan universitas.', '3. Memastikan BEM memberikan pelayanan yang berkualitas secara konsisten baik kepada mahasiswa maupun unviersitas.', '4. Meningkatkan kinerja BEM secara berkesinambungan dari waktu ke waktu, guna pelayanan yang lebih baik lagi bagi mahasiswa maupun universitas.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `hima` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nama`, `nim`, `prodi`, `hima`, `tanggal_lahir`, `status`) VALUES
(19, 'Farhan', 1991051004, 'Sistem Informasi', 'himakom', '2000-11-08', 'active'),
(20, 'Budi', 1991061004, 'Sistem Informasi', 'himen', '2001-10-18', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `program_ketum`
--

CREATE TABLE `program_ketum` (
  `id_program` int(11) NOT NULL,
  `id_ketum` int(11) NOT NULL,
  `program1` varchar(100) DEFAULT NULL,
  `program2` varchar(100) DEFAULT NULL,
  `program3` varchar(100) DEFAULT NULL,
  `program4` varchar(100) DEFAULT NULL,
  `program5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_ketum`
--

INSERT INTO `program_ketum` (`id_program`, `id_ketum`, `program1`, `program2`, `program3`, `program4`, `program5`) VALUES
(6, 1, 'Seminar', 'Seminar', 'Seminar', NULL, NULL),
(7, 3, 'Seminar', 'Seminar', 'Seminar', NULL, NULL),
(8, 4, 'Seminar', 'Seminar', 'Seminar', NULL, NULL),
(9, 6, 'Seminar', 'Seminar', 'Seminar', NULL, NULL),
(10, 5, 'Seminar', 'Seminar', 'Seminar', NULL, NULL),
(11, 2, 'Seminar', 'Seminar', 'Seminar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_presma`
--

CREATE TABLE `program_presma` (
  `id_program` int(11) NOT NULL,
  `id_presma` int(11) NOT NULL,
  `program1` varchar(100) DEFAULT NULL,
  `program2` varchar(100) DEFAULT NULL,
  `program3` varchar(100) DEFAULT NULL,
  `program4` varchar(100) DEFAULT NULL,
  `program5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_presma`
--

INSERT INTO `program_presma` (`id_program`, `id_presma`, `program1`, `program2`, `program3`, `program4`, `program5`) VALUES
(2, 4, 'Study Trip', 'Seminar', 'Seminar', 'Seminar', NULL),
(3, 5, 'seminar', 'senimar', 'seminar', 'seminar', NULL),
(7, 14, 'Seminar', 'Mabar', 'Seminar', 'Seminar', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `hima` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `hima`, `role`) VALUES
(1, 'himakom', 'Active'),
(2, 'hikom', 'Non-active'),
(3, 'himak', 'Non-active'),
(4, 'himen', 'Non-active'),
(5, 'elsa', 'Non-active');

-- --------------------------------------------------------

--
-- Table structure for table `suara_presma`
--

CREATE TABLE `suara_presma` (
  `nim_presma` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `jumlah_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suara_presma`
--

INSERT INTO `suara_presma` (`nim_presma`, `nama`, `foto`, `jumlah_suara`) VALUES
(1881051004, 'Barack Obama', '', 0),
(1991051001, 'Donald Trump', '', 0),
(1991061004, 'Joe Biden', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `total_presma`
--

CREATE TABLE `total_presma` (
  `nim` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_presma`
--

INSERT INTO `total_presma` (`nim`, `foto`, `nama`, `total`) VALUES
('1991051004', '3_1.jpg', 'Farhan Ar Rasyid', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calon_ketum`
--
ALTER TABLE `calon_ketum`
  ADD PRIMARY KEY (`id_ketum`);

--
-- Indexes for table `calon_presma`
--
ALTER TABLE `calon_presma`
  ADD PRIMARY KEY (`id_presma`);

--
-- Indexes for table `kotak_ketum`
--
ALTER TABLE `kotak_ketum`
  ADD PRIMARY KEY (`id_kotak`);

--
-- Indexes for table `kotak_presma`
--
ALTER TABLE `kotak_presma`
  ADD PRIMARY KEY (`id_kotak`),
  ADD KEY `nim_presma` (`nim_presma`);

--
-- Indexes for table `misi_ketum`
--
ALTER TABLE `misi_ketum`
  ADD PRIMARY KEY (`id_misi`),
  ADD KEY `misi_ketum_ibfk_1` (`id_ketum`);

--
-- Indexes for table `misi_presma`
--
ALTER TABLE `misi_presma`
  ADD PRIMARY KEY (`id_misi`),
  ADD KEY `misi_presma_ibfk_1` (`id_presma`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `program_ketum`
--
ALTER TABLE `program_ketum`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `program_ketum_ibfk_1` (`id_ketum`);

--
-- Indexes for table `program_presma`
--
ALTER TABLE `program_presma`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `program_presma_ibfk_1` (`id_presma`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `suara_presma`
--
ALTER TABLE `suara_presma`
  ADD PRIMARY KEY (`nim_presma`);

--
-- Indexes for table `total_presma`
--
ALTER TABLE `total_presma`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calon_ketum`
--
ALTER TABLE `calon_ketum`
  MODIFY `id_ketum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `calon_presma`
--
ALTER TABLE `calon_presma`
  MODIFY `id_presma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kotak_ketum`
--
ALTER TABLE `kotak_ketum`
  MODIFY `id_kotak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kotak_presma`
--
ALTER TABLE `kotak_presma`
  MODIFY `id_kotak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `misi_ketum`
--
ALTER TABLE `misi_ketum`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `misi_presma`
--
ALTER TABLE `misi_presma`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `program_ketum`
--
ALTER TABLE `program_ketum`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `program_presma`
--
ALTER TABLE `program_presma`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kotak_presma`
--
ALTER TABLE `kotak_presma`
  ADD CONSTRAINT `kotak_presma_ibfk_1` FOREIGN KEY (`nim_presma`) REFERENCES `suara_presma` (`nim_presma`);

--
-- Constraints for table `misi_ketum`
--
ALTER TABLE `misi_ketum`
  ADD CONSTRAINT `misi_ketum_ibfk_1` FOREIGN KEY (`id_ketum`) REFERENCES `calon_ketum` (`id_ketum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `misi_presma`
--
ALTER TABLE `misi_presma`
  ADD CONSTRAINT `misi_presma_ibfk_1` FOREIGN KEY (`id_presma`) REFERENCES `calon_presma` (`id_presma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program_ketum`
--
ALTER TABLE `program_ketum`
  ADD CONSTRAINT `program_ketum_ibfk_1` FOREIGN KEY (`id_ketum`) REFERENCES `calon_ketum` (`id_ketum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program_presma`
--
ALTER TABLE `program_presma`
  ADD CONSTRAINT `program_presma_ibfk_1` FOREIGN KEY (`id_presma`) REFERENCES `calon_presma` (`id_presma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
