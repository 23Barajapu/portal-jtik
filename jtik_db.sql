-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2025 at 11:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jtik_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `kategori_berita_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cpls`
--

CREATE TABLE `cpls` (
  `id` bigint UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `nip`, `jabatan`, `foto`, `bidang_keahlian`, `created_at`, `updated_at`, `prodi`) VALUES
(1, 'Dwi Vernanda, S.T., M.Pd.', '199104302019032000', 'Ketua Jurusan', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(2, 'Haryati, S.Pd., M.Pd.', '199306142019032000', 'Sekretaris Jurusan', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(3, 'Lani Nurlani, S.T., M.Kom.', '198804032020032000', 'Kaprodi SI', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(4, 'Nunu Nugraha P., S.Pd., M.Kom', '197909152015041001', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(5, 'Rian Piarna, S.E., M.M.', '198709032019031009', 'Ka Lab MDI', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(6, 'Slamet Rahayu, S.Pd., M.Pd.', '170900045', 'Ka Lab JARKOM', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(7, 'Sari Azhariyah, S.Pd., M.Pd.T.', '199408182022032000', 'Ka Lab RPL', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(8, 'Chepy Perdana, S.Kom., M.Pd', '199109242022031000', 'Ka Lab UX', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(9, 'Usep Abdul Rosid, S.T., M.Kom.', '198905122022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(10, 'Masesa Angga Wijaya, S.Kom., M.Kom.', '198808132022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(11, 'Abd Rachman Mildan, M.Pd', '198910182024061000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(12, 'Rahmat Irsyada, M.Pd', '', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'SI'),
(13, 'Mohammad Iqbal, S.Kom., M.T.', '199001262019031000', 'Kaprodi TRPL', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(14, 'Taufan Abdurrachman, S.T., M.Kom.', '199311112022031000', 'Ka Lab SI', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(15, 'Nurfitria Khoirunnisa, S.Tr.Kom., M.Kom.', '199603112020122000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(16, 'Tri Herdiawan A., S.ST., M.T.', '198801052019031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(17, 'Erick Febriyanto, S.Kom., M.T.I.', '199002212024061000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(18, 'Willy Muhammad Fauzi, S.T., M.Kom.', '199004252022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(19, 'Agin Sugiwa M.Ak', '198909022024061000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'Akuntansi'),
(20, 'Arief budiman, M.Ak', '199107252022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'Akuntansi'),
(21, 'Liandy L Tobing, S.Pd., M.M.', '199104122022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(22, 'Ardhi Akmahudin Jadhira, S.Kom., M.Kom.', '199601132022056000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(23, 'Gilang Anka Dilang, S.Pd., M.M', '199601222022056000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(24, 'Rian Hermawan, S.Kom.,M.Kom', '199601222022056000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(25, 'Herdawati, S.E., M.Sc.', '199703222022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(26, 'Khaida Hamam, S.Pd., M.Ak.', '199703222022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL'),
(27, 'Muhammad Juwiansah Abdullah, S.Pd.,M.Pd', '199703222022031000', 'Dosen', NULL, NULL, '2025-07-29 03:04:04', '2025-07-29 03:04:04', 'TRPL');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_beritas`
--

CREATE TABLE `kategori_beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliahs`
--

CREATE TABLE `mata_kuliahs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int NOT NULL,
  `semester` int NOT NULL,
  `prodi_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_kuliahs`
--

INSERT INTO `mata_kuliahs` (`id`, `nama`, `kode`, `sks`, `semester`, `prodi_id`, `created_at`, `updated_at`) VALUES
(2, 'Pendidikan Agama', 'PMU0001', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(3, 'Pendidikan Pancasila', 'PMU0002', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(4, 'Pendidikan Kewarganegaraan', 'PMU0003', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(5, 'Bahasa Indonesia', 'PMU0004', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(6, 'Bahasa Inggris', 'PMU0005', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(7, 'Kewirausahaan', 'PMU0006', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(8, 'Bahasa Inggris Teknis 1', 'PMI0001', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(9, 'Bahasa Inggris Teknis 2', 'PMI0002', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(10, 'Etika Profesi', 'PMI0003', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(11, 'Projek 1', 'PMI0004', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(12, 'Projek 2', 'PMI0005', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(13, 'Praktek Kerja Lapangan', 'PMI0006', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(14, 'Proyek Akhir', 'PMI0007', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(15, 'Pengolahan Data dan Informasi', 'PSI3101', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(16, 'Pengantar Teknologi Infromasi dan Komunikasi', 'PSI3102', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(17, 'Matematika Diskrit', 'PSI3103', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(18, 'Pemrograman Dasar 1', 'PSI3104', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(19, 'Komunikasi Teknis', 'PSI3201', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(20, 'Matematika Terapan', 'PSI3202', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(21, 'Sistem Operasi', 'PSI3203', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(22, 'Pemrograman Dasar 2', 'PSI3204', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(23, 'Manajemen', 'PSI3205', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(24, 'Pengantar Akuntansi', 'PSI3206', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(25, 'Pemrograman Berbasis Objek', 'PSI3301', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(26, 'Basis Data 1', 'PSI3302', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(27, 'Sistem Informasi Manajemen', 'PSI3303', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(28, 'Sistem Informasi Akuntansi', 'PSI3304', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(29, 'Statistik dan Probabilitas', 'PSI3305', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(30, 'Komunikasi Data dan Jaringan', 'PSI3306', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(31, 'Analisis dan Perancangan Sistem Informasi 1', 'PSI3401', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(32, 'Basis Data 2', 'PSI3402', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(33, 'Pemrograman Web', 'PSI3403', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(34, 'Data Mining', 'PSI3404', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(35, 'Analisis dan Perancangan Sistem Informasi 2', 'PSI3501', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(36, 'Data Warehouse', 'PSI3502', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(37, 'Sistem Pengambil Keputusan', 'PSI3503', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(38, 'Perancangan Antar Muka', 'PSI3504', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(39, 'E-Commerce', 'PSI3601', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(40, 'Manajemen Proyek', 'PSI3602', 3, 1, 1, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(41, 'Pendidikan Agama', 'PMU0001', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(42, 'Pendidikan Pancasila', 'PMU0002', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(43, 'Pendidikan Kewarganegaraan', 'PMU0003', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(44, 'Bahasa Indonesia', 'PMU0004', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(45, 'Bahasa Inggris', 'PMU0005', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(46, 'Kewirausahaan', 'PMU0006', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(47, 'Bahasa Inggris Teknis 1', 'PMI0001', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(48, 'Bahasa Inggris Teknis 2', 'PMI0002', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(49, 'Etika Profesi', 'PMI0003', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(50, 'Projek 1', 'PMI0004', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(51, 'Projek 2', 'PMI0005', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(52, 'Praktek Kerja Lapangan', 'PMI0006', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(53, 'Proyek Akhir', 'PMI0007', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(54, 'Pengolahan Data dan Informasi', 'PSI3101', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(55, 'Pengantar Teknologi Infromasi dan Komunikasi', 'PSI3102', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(56, 'Matematika Diskrit', 'PSI3103', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(57, 'Pemrograman Dasar 1', 'PSI3104', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(58, 'Komunikasi Teknis', 'PSI3201', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(59, 'Matematika Terapan', 'PSI3202', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(60, 'Sistem Operasi', 'PSI3203', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(61, 'Pemrograman Dasar 2', 'PSI3204', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(62, 'Manajemen', 'PSI3205', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(63, 'Pengantar Akuntansi', 'PSI3206', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(64, 'Pemrograman Berbasis Objek', 'PSI3301', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(65, 'Basis Data 1', 'PSI3302', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(66, 'Sistem Informasi Manajemen', 'PSI3303', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(67, 'Sistem Informasi Akuntansi', 'PSI3304', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(68, 'Statistik dan Probabilitas', 'PSI3305', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(69, 'Komunikasi Data dan Jaringan', 'PSI3306', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(70, 'Analisis dan Perancangan Sistem Informasi 1', 'PSI3401', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(71, 'Basis Data 2', 'PSI3402', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(72, 'Pemrograman Web', 'PSI3403', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(73, 'Data Mining', 'PSI3404', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(74, 'Analisis dan Perancangan Sistem Informasi 2', 'PSI3501', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(75, 'Data Warehouse', 'PSI3502', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(76, 'Sistem Pengambil Keputusan', 'PSI3503', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(77, 'Perancangan Antar Muka', 'PSI3504', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(78, 'E-Commerce', 'PSI3601', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(79, 'Manajemen Proyek', 'PSI3602', 3, 1, 2, '2025-07-16 12:41:56', '2025-07-16 12:41:56'),
(80, 'Pendidikan Agama', 'PMU0001', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(81, 'Pendidikan Pancasila', 'PMU0002', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(82, 'Pendidikan Kewarganegaraan', 'PMU0003', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(83, 'Bahasa Indonesia', 'PMU0004', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(84, 'Bahasa Inggris', 'PMU0005', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(85, 'Kewirausahaan', 'PMU0006', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(86, 'Bahasa Inggris Teknis 1', 'PMI0001', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(87, 'Bahasa Inggris Teknis 2', 'PMI0002', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(88, 'Etika Profesi', 'PMI0003', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(89, 'Projek 1', 'PMI0004', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(90, 'Projek 2', 'PMI0005', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(91, 'Praktek Kerja Lapangan', 'PMI0006', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(92, 'Proyek Akhir', 'PMI0007', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(93, 'Pengolahan Data dan Informasi', 'PSI3101', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(94, 'Pengantar Teknologi Infromasi dan Komunikasi', 'PSI3102', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(95, 'Matematika Diskrit', 'PSI3103', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(96, 'Pemrograman Dasar 1', 'PSI3104', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(97, 'Komunikasi Teknis', 'PSI3201', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(98, 'Matematika Terapan', 'PSI3202', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(99, 'Sistem Operasi', 'PSI3203', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(100, 'Pemrograman Dasar 2', 'PSI3204', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(101, 'Manajemen', 'PSI3205', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(102, 'Pengantar Akuntansi', 'PSI3206', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(103, 'Pemrograman Berbasis Objek', 'PSI3301', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(104, 'Basis Data 1', 'PSI3302', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(105, 'Sistem Informasi Manajemen', 'PSI3303', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(106, 'Sistem Informasi Akuntansi', 'PSI3304', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(107, 'Statistik dan Probabilitas', 'PSI3305', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(108, 'Komunikasi Data dan Jaringan', 'PSI3306', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(109, 'Analisis dan Perancangan Sistem Informasi 1', 'PSI3401', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(110, 'Basis Data 2', 'PSI3402', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(111, 'Pemrograman Web', 'PSI3403', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(112, 'Data Mining', 'PSI3404', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(113, 'Analisis dan Perancangan Sistem Informasi 2', 'PSI3501', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(114, 'Data Warehouse', 'PSI3502', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(115, 'Sistem Pengambil Keputusan', 'PSI3503', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(116, 'Perancangan Antar Muka', 'PSI3504', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(117, 'E-Commerce', 'PSI3601', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(118, 'Manajemen Proyek', 'PSI3602', 3, 1, 1, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(119, 'Pendidikan Agama', 'PMU0001', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(120, 'Pendidikan Pancasila', 'PMU0002', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(121, 'Pendidikan Kewarganegaraan', 'PMU0003', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(122, 'Bahasa Indonesia', 'PMU0004', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(123, 'Bahasa Inggris', 'PMU0005', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(124, 'Kewirausahaan', 'PMU0006', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(125, 'Bahasa Inggris Teknis 1', 'PMI0001', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(126, 'Bahasa Inggris Teknis 2', 'PMI0002', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(127, 'Etika Profesi', 'PMI0003', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(128, 'Projek 1', 'PMI0004', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(129, 'Projek 2', 'PMI0005', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(130, 'Praktek Kerja Lapangan', 'PMI0006', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(131, 'Proyek Akhir', 'PMI0007', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(132, 'Pengolahan Data dan Informasi', 'PSI3101', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(133, 'Pengantar Teknologi Infromasi dan Komunikasi', 'PSI3102', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(134, 'Matematika Diskrit', 'PSI3103', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(135, 'Pemrograman Dasar 1', 'PSI3104', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(136, 'Komunikasi Teknis', 'PSI3201', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(137, 'Matematika Terapan', 'PSI3202', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(138, 'Sistem Operasi', 'PSI3203', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(139, 'Pemrograman Dasar 2', 'PSI3204', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(140, 'Manajemen', 'PSI3205', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(141, 'Pengantar Akuntansi', 'PSI3206', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(142, 'Pemrograman Berbasis Objek', 'PSI3301', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(143, 'Basis Data 1', 'PSI3302', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(144, 'Sistem Informasi Manajemen', 'PSI3303', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(145, 'Sistem Informasi Akuntansi', 'PSI3304', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(146, 'Statistik dan Probabilitas', 'PSI3305', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(147, 'Komunikasi Data dan Jaringan', 'PSI3306', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(148, 'Analisis dan Perancangan Sistem Informasi 1', 'PSI3401', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(149, 'Basis Data 2', 'PSI3402', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(150, 'Pemrograman Web', 'PSI3403', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(151, 'Data Mining', 'PSI3404', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(152, 'Analisis dan Perancangan Sistem Informasi 2', 'PSI3501', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(153, 'Data Warehouse', 'PSI3502', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(154, 'Sistem Pengambil Keputusan', 'PSI3503', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(155, 'Perancangan Antar Muka', 'PSI3504', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(156, 'E-Commerce', 'PSI3601', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(157, 'Manajemen Proyek', 'PSI3602', 3, 1, 2, '2025-07-16 13:21:56', '2025-07-16 13:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '0001_01_01_000000_create_users_table', 1),
(11, '0001_01_01_000001_create_cache_table', 1),
(12, '0001_01_01_000002_create_jobs_table', 1),
(13, '2025_07_16_175042_create_kategori_beritas_table', 1),
(14, '2025_07_16_175043_create_prodis_table', 1),
(15, '2025_07_16_175045_create_c_p_l_s_table', 1),
(16, '2025_07_16_175046_create_dosens_table', 1),
(17, '2025_07_16_175048_create_tendiks_table', 1),
(18, '2025_07_16_175049_create_beritas_table', 1),
(19, '2025_07_16_175051_create_cpls_table', 2),
(20, '2025_07_16_175052_create_mata_kuliahs_table', 3),
(21, '2025_07_29_100126_add_prodi_to_dosens_table', 4),
(22, '2025_07_29_101655_add_nip_prodi_to_tendiks_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `nama`, `jenjang`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi', 'D3', '2025-07-16 12:41:53', '2025-07-16 12:41:53'),
(2, 'Teknologi Rekayasa Perangkat Lunak', 'D4', '2025-07-16 12:41:53', '2025-07-16 12:41:53'),
(3, 'Sistem Informasi', 'D3', '2025-07-16 13:21:56', '2025-07-16 13:21:56'),
(4, 'Teknologi Rekayasa Perangkat Lunak', 'D4', '2025-07-16 13:21:56', '2025-07-16 13:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2Sas2NLdABk4KYxzfOJdaH0MpyR5k0BOgqsdEgIf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickVVcTloQ01NUm43d2RsWEFkVUN6czFMTERyQkg4RUdpS0VUUWNXRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753788012),
('2X3x4kjwWYpPEB93XCO4mikCzt0s6vP50n432nee', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWVWd1hUY1FMMmJTbkNxa3Rrd0JnVEVvV1NUTGxRRVdWRW1OeHE3RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753114883),
('GIdpf5Dtc4Ao0bqsSh2Qn266qIuHYwz6jlWhxcTI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnlJMVZBWUkzVmU4dVVFYzhaNHVjaVhONG5qazJoZFJ6V2hJbWJTMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753439481),
('kuSKzFcA7zBRmHD4zGzugTWepubokFyZDu6jivCO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1VDOVVzRVhJbDBoeU1iU1ZKYTh6MXIxM2ZhZ3g0U3k2amF1Q0t0cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753770367),
('Vu8ODrEdUxzUDhWKimtfipS3nalcGjCAJRU6HXnz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjFSUXZNdXFGUnhlcHlaRFYyalFNUlpCTFEzZkh5UlZ0VVVEV0FIeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753438914),
('zXAYucAk7t7HyYBOZ2FIJDIdf0VJ8eSCqFWGcIdG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWZlM0I4R0Z4amhnV1Z4YnViVk9iRHVGckJpS0w4N2tZYjlzSjNhSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752866828);

-- --------------------------------------------------------

--
-- Table structure for table `tendiks`
--

CREATE TABLE `tendiks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tendiks`
--

INSERT INTO `tendiks` (`id`, `nama`, `nip`, `jabatan`, `prodi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Wulan Siti Nurul Masriah, S.E.', '198508192021212000', 'PLP', 'TENDIK', NULL, '2025-07-29 03:17:42', '2025-07-29 03:17:42'),
(2, 'Erin Tri Rezqi Maudy, A.Md.Kom', '240100109', 'Teknisi', 'TENDIK', NULL, '2025-07-29 03:17:42', '2025-07-29 03:17:42'),
(3, 'Cica Rismawanti, A.Md.Kom', '199603122025062000', 'Admin', 'TENDIK', NULL, '2025-07-29 03:17:42', '2025-07-29 03:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-07-16 13:21:55', '$2y$12$/MzraoZsg8GfczdLFij3je/0pw7MktZDwI7j3Uq73BhhZNF6/yaPK', 'D4pBRq0kmD', '2025-07-16 13:21:55', '2025-07-16 13:21:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_kategori_berita_id_foreign` (`kategori_berita_id`);

--
-- Indexes for table `cpls`
--
ALTER TABLE `cpls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpls_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mata_kuliahs_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tendiks`
--
ALTER TABLE `tendiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cpls`
--
ALTER TABLE `cpls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tendiks`
--
ALTER TABLE `tendiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_kategori_berita_id_foreign` FOREIGN KEY (`kategori_berita_id`) REFERENCES `kategori_beritas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cpls`
--
ALTER TABLE `cpls`
  ADD CONSTRAINT `cpls_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD CONSTRAINT `mata_kuliahs_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
