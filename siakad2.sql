-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2022 pada 20.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama_alumni` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_keahlian`
--

CREATE TABLE `bidang_keahlian` (
  `id_bidang` int(11) NOT NULL,
  `bidang_keahlian` varchar(100) NOT NULL,
  `program_keahlian` varchar(100) NOT NULL,
  `kompetensi_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang_keahlian`
--

INSERT INTO `bidang_keahlian` (`id_bidang`, `bidang_keahlian`, `program_keahlian`, `kompetensi_keahlian`) VALUES
(1, 'Kesehatan dan Pekerjaan Sosial', 'Farmasi', 'Farmasi Klinis dan Komunitas'),
(2, 'Kesehatan dan Pekerjaan Sosial', 'Keperawatan', 'Asisten Keperawatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'Guru',
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Budha','Hindu','Khonghucu') NOT NULL,
  `pendidikan_terakhir` enum('SMA/SMK','S1','S2','S3') NOT NULL,
  `bidang_studi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `username`, `password`, `level`, `nip`, `nama_guru`, `gambar`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pendidikan_terakhir`, `bidang_studi`) VALUES
(8, 'ami', '6c5b7de29192b42ed9cc6c7f635c92e0', 'Guru', '1', 'Ami Siti Rachmiati, S.Pd.', 'default.png', 'Pontianak', '1990-01-01', 'Perempuan', 'Jl. Ayani', 'Islam', 'S1', 'Bahasa Indonesia'),
(9, 'junia', '1139b9a6efaf8fae3dbc8bd19a08f401', 'Guru', '2', 'Junia, S.pd.', 'default.png', 'Pontianak', '1991-01-01', 'Perempuan', 'Jl. Purnama 1', 'Islam', 'S1', 'Biologi'),
(10, 'qiftiani', '02d4dda1d53e36063ec71da02ee0fa02', 'Guru', '3', 'Qiftiani Pratiwi, S.Kep., Ners', 'default.png', 'Pontianak', '1993-03-03', 'Perempuan', 'Jl. Imam Bonjol', 'Islam', 'S1', 'Anatomi dan Fisiologi'),
(11, 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'Guru', '4', 'Ade Rahayu, S.Kep., Ners', 'default.png', 'Pontianak', '1994-04-04', 'Perempuan', 'Jl. Sui Jawi', 'Islam', 'S1', 'Konsep Dasar Keperawatan'),
(12, 'pri', 'e060bb629c10e1b143614cc1e9ccdc67', 'Guru', '5', 'Priyono, S.Kep., Ners', 'default.png', 'Pontianak', '1995-05-05', 'Laki-laki', 'Jl. Kota Baru', 'Islam', 'S1', 'Ilmu Penyakit dan Pemeriksaan Diasnostik'),
(13, 'yossi', '0ed50bc5986fc64475f03c1e049d33e0', 'Guru', '6', 'Yossi Dea Firmanda, M.Pd.', 'default.png', 'Pontianak', '1996-06-06', 'Perempuan', 'Jl. Siantan', 'Kristen Katolik', 'S2', 'Kimia'),
(14, 'paulus', '962488411942f34adc83f1ea3de27cc5', 'Guru', '7', 'Paulus Laja', 'default.png', 'Bengkayang', '1997-07-07', 'Laki-laki', 'Jl. Sui Jawi', 'Kristen Protestan', 'S1', 'Sejarah Indonesia'),
(15, 'julianto', '0940c0f66e74623aee4102acdf3f916e', 'Guru', '8', 'Julianto, S.pd', 'default.png', 'Jawa Timur', '1998-08-08', 'Laki-laki', 'Jl. Kota Baru 1', 'Islam', 'S1', 'Olahraga'),
(16, 'desi', '069e2dd171f61ecffb845190a7adf425', 'Guru', '9', 'Desi Eviana, S.pd', 'default.png', 'Pontianak', '1999-09-09', 'Perempuan', 'Jl. Merdeka', 'Islam', 'S1', 'Bimbingan Konseling'),
(17, 'ririn', 'b84a4059d1af6c8b50bb7a28290dbd63', 'Guru', '10', 'Ririn', 'default.png', 'p', '1992-10-10', 'Perempuan', 'Jl. Johar', 'Islam', 'S1', 'Komunikasi Keperawatan'),
(18, 'elisabeth', 'f11d689dda4227953e50a0c4ee2ed3f2', 'Guru', '11', 'Elisabeth Tuty, SKM', 'default.png', 'Bengkayang', '1991-11-11', 'Perempuan', 'Jl. Urai Bawadi', 'Kristen Katolik', 'S1', 'Ilmu Kesehatan Masyarakat'),
(19, 'bumbunan', '332ce7458cc31ab9f826f9227569eb99', 'Guru', '12', 'Dr Bumbunan Sitorus, M. Sos', 'default.png', 'Sintang', '1990-12-12', 'Laki-laki', 'Jl. Purnama 2', 'Kristen Katolik', 'S3', 'Pengembangan Diri'),
(20, 'aryadi', '4a36050b7f686fb51adb311daf8284a9', 'Guru', '13', 'Aryadi, S. Pd', 'default.png', 'Pontianak', '1995-12-01', 'Laki-laki', 'Jl. Purnama 1', 'Islam', 'S1', 'Matematika'),
(21, 'eny', '95c29d0768d7a61171cd6b798eb4169a', 'Guru', '14', 'Eny', 'default.png', 'Pontianak', '1994-12-04', 'Perempuan', 'Jl. Sutoyo', 'Islam', 'S1', 'Seni Budaya dan Keterampilan'),
(22, 'melinda', '19b63690a34f20c95317571ff354868f', 'Guru', '15', 'Melinda Prawati, M. Pd', 'default.png', 'Pontianak', '1992-12-05', 'Perempuan', 'Jl. Adi Sucipto', 'Islam', 'S2', 'Bahasa Inggris'),
(23, 'neli', 'df5eeea04a846abfbb001a651215545f', 'Guru', '16', 'Neli Yuanita, S. Kep,. Ners', 'default.png', 'Pontianak', '1992-01-05', 'Perempuan', 'Jl. Pancasila', 'Islam', 'S2', 'KWU XI & XII'),
(24, 'ramlah', '77b9e9830442c9dd5548670882a2f5ff', 'Guru', '17', 'Ramlah', 'default.png', 'Pontianak', '1890-02-02', 'Perempuan', 'Jl. M. Sohor', 'Islam', 'S1', 'Agama Islam'),
(25, 'lestari', 'f3bab21fe648634117ba2e1d70b09740', 'Guru', '18', 'Lestari', 'default.png', 'Bengkayang', '1889-03-03', 'Perempuan', 'Jl. Tanjung Hulu', 'Kristen Protestan', 'S1', 'Agama Protestan'),
(26, 'mariata', '72516f846e1eb751b06691555870ad1d', 'Guru', '19', 'Mariata', 'default.png', 'Landak', '1884-04-04', 'Perempuan', 'Jl. Setia Budi', 'Kristen Katolik', 'S1', 'Agama Katolik'),
(27, 'novita', '463f4921608f04a290b70bb391c2b74d', 'Guru', '20', 'Novita Laraswati, S. Farm,. Apt.', 'default.png', 'Sintang', '1992-05-05', 'Perempuan', 'Jl. Paris 1', 'Islam', 'S1', 'Yanfar (Pelayanan Kefarmasian)'),
(28, 'narimo', 'becea5c0c24c16a574046d82fd292445', 'Guru', '21', 'Narimo, S. Farm', 'default.png', 'Jawa Timur', '1990-05-04', 'Laki-laki', 'Jl. Sepakat 2', 'Islam', 'S1', 'Farmakognosi X'),
(29, 'feny', 'a2f091b88b3975f3185ef4c21b7a45e5', 'Guru', '22', 'Feny Novia Sari, S.Pd', 'default.png', 'Pontianak', '1990-03-12', 'Perempuan', 'Jl. Tanjung Sari', 'Islam', 'S1', 'PKN'),
(30, 'enggi', '3715655b7d1f1c8e728fdd147480b568', 'Guru', '23', 'Enggi', 'default.png', 'Pontianak', '1990-02-02', 'Perempuan', 'Jl. BLKI', 'Islam', 'S1', 'Dasar-dasar Farmasi'),
(31, 'andri', '6bd3108684ccc9dfd40b126877f850b0', 'Guru', '24', 'Andri Hermawan, S.Pd.', 'default.png', 'Pontianak', '1990-04-11', 'Laki-laki', 'Jl. Purnama 1', 'Islam', 'S1', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'Siswa',
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama_siswa` varchar(150) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Budha','Hindu','Khonghucu') NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pend_terakhir_ayah` enum('Tidak Sekolah','SD','SMP','SMA/SMK','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `pend_terakhir_ibu` enum('Tidak Sekolah','SD','SMP','SMA/SMK','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat_orgtua` text NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `alamat_wali` text NOT NULL,
  `no_telp_orgtua` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `username`, `password`, `level`, `nisn`, `nik`, `asal_sekolah`, `id_bidang`, `id_kelas`, `nama_siswa`, `tahun_masuk`, `gambar`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `nama_ayah`, `nama_ibu`, `pend_terakhir_ayah`, `pend_terakhir_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_orgtua`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `no_telp_orgtua`) VALUES
(20, 'andika', '7e51eea5fa101ed4dade9ad3a7a072bb', 'Siswa', '1', '1', 'SMP N 21 Terpadu', 2, 7, 'Andika Primadya Azwari', 2016, 'default.png', 'Pontianak', '2001-01-01', 'Laki-laki', ' Jl. Tanjung Raya 2    ', 'Islam', 'Zainul Azwar', 'Lilis Suriyani', 'SMA/SMK', 'SMA/SMK', 'Tidak Bekerja', 'Ibu Rumah Tangga', ' Jl. Tanjung Raya 2    ', 'Zainul Azwar', 'Tidak Bekerja', ' Jl. Tanjung Raya 2    ', '0811111111111'),
(21, 'ria', 'd42a9ad09e9778b177d409f5716ac621', 'Siswa', '2', '2', 'SMP N 1 Ambawang', 1, 14, 'Ria Ningsih', 2016, 'default.png', 'Pontianak', '2002-02-02', 'Perempuan', ' Jl. Ambawang   ', 'Kristen Katolik', 'ayah', 'Ibu', 'SD', 'SMP', 'Tidak Bekerja', 'Ibu Rumah Tangga', ' JL. Ambawang   ', 'Wali', 'Tidak Bekerja', 'Jl. Ambawang    ', '0822222222222'),
(22, 'cindy', 'cc4b2066cfef89f2475de1d4da4b29c7', 'Siswa', '3', '3', 'SMP N 21 Terpadu', 2, 7, 'Raveena Cindy Azwari', 2016, 'default.png', 'Pontianak', '2004-03-30', 'Perempuan', ' Jl. Tanjung Raya 2 ', 'Islam', 'Zainul Azwar', 'Lilis Suriyani', 'SMA/SMK', 'SMA/SMK', 'Tidak Bekerja', 'Ibu Rumah Tangga', ' Jl. Tanjung Raya 2 ', 'Zainul Azwar', 'Tidak Bekerja', ' Jl. Tanjung Raya 2 ', '0833333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal` int(11) NOT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_selesai` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_jadwal`, `id_mata_pelajaran`, `id_bidang`, `id_guru`, `id_kelas`, `id_tahun_ajaran`, `hari`, `jam_mulai`, `jam_selesai`, `keterangan`, `created`) VALUES
(18, 8, 2, 10, 7, 6, 'Senin', '07:00', '08:00', '', '2022-07-12 09:11:46'),
(19, 14, 2, 15, 7, 6, 'Senin', '08:00', '09:00', '', '2022-07-12 09:11:23'),
(20, NULL, NULL, NULL, 7, NULL, 'Senin', '09:00', '09:40', 'Istirahat', '2022-07-12 09:34:27'),
(21, 37, 2, NULL, 7, 6, 'Senin', '09:40', '11:10', '', '2022-07-12 09:14:56'),
(23, NULL, NULL, NULL, 7, 6, 'Senin', '11:10', '11:50', 'Istirahat', '2022-07-12 09:34:18'),
(24, 20, 2, 22, 7, 6, 'Senin', '11:50', '12:20', '', '2022-07-12 09:18:13'),
(25, 15, 2, 20, 7, 6, 'Senin', '12:20', '13:50', '', '2022-07-12 09:19:30'),
(26, 14, 1, 15, 14, 6, 'Senin', '07:00', '08:00', '', '2022-07-12 09:23:32'),
(27, 7, 1, 9, 14, 6, 'Senin', '08:00', '09:00', '', '2022-07-12 09:24:49'),
(28, NULL, NULL, NULL, 14, 6, 'Senin', '09:00', '09:40', 'Istirahat', '2022-07-12 09:34:07'),
(29, 2, 1, 30, 14, 6, 'Senin', '09:40', '10:40', '', '2022-07-12 09:26:49'),
(30, 26, 1, 28, 14, 6, 'Senin', '11:40', '11:10', '', '2022-07-12 09:28:13'),
(31, NULL, NULL, NULL, 14, 6, 'Senin', '11:10', '11:50', 'Istirahat', '2022-07-12 09:33:55'),
(32, 26, 1, 28, 14, 6, 'Senin', '11:50', '12:20', '', '2022-07-12 09:32:04'),
(33, 20, 1, 22, 14, 6, 'Senin', '12:20', '13:20', '', '2022-07-12 09:31:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_bidang`, `id_tahun_ajaran`, `id_guru`, `kelas`) VALUES
(7, 2, 6, 8, 'X Kep'),
(10, 2, 6, 8, 'XI Kep '),
(12, 2, 6, 8, 'XII Kep A'),
(13, 2, 6, 8, 'XII Kep B'),
(14, 1, 6, 9, 'X Far '),
(17, 1, 6, 9, 'XI Far '),
(18, 1, 6, 9, 'XII Far A'),
(19, 1, 6, 9, 'XII Far B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_siswa` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `kode_matpel` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `kode_matpel`, `nama_pelajaran`) VALUES
(2, 'I', 'Dasar-dasar Farmasi'),
(3, 'A', 'Bahasa Indonesia'),
(5, 'U', 'Bahasa Inggris'),
(7, 'B', 'Biologi'),
(8, 'C', 'Anfis'),
(9, 'D', 'Konsep Dasar Keperawatan (KDK)'),
(10, 'E', 'Ilmu Penyakit dan Pemeriksaan Diasnostik (IPPD)'),
(11, 'F', 'Kimia'),
(12, 'G', 'SBK'),
(13, 'GG', 'Sejarah Indonesia'),
(14, 'H', 'Olahraga'),
(15, 'J', 'Matematika'),
(16, 'M', 'Bimbingan Konseling'),
(17, 'N', 'Komunikasi Keperawatan (Komkep)'),
(18, 'O', 'IKM'),
(19, 'W', 'Pengembangan Diri'),
(20, 'K', 'Bahasa Inggris'),
(21, 'L', 'KWU XI & XII'),
(22, 'P', 'Agama Islam'),
(23, 'Q', 'Agama Protestan'),
(24, 'R', 'Agama Katolik'),
(25, 'S', 'Yanfar XI'),
(26, 'T', 'Farmakognosi X'),
(27, 'V', 'PKN'),
(28, 'CC', 'Ilmu Penyakit dan Pemeriksaan Diagnostik (IPPD)'),
(29, 'DD', 'Kebutuhan Dasar Manusia (KDM)'),
(30, 'DDD', 'Ilmu Penyakit dan Pemeriksaan Diagnostik (IPPD)'),
(31, 'D4', 'Prakarya dan Kewirausahaan (PWKU)'),
(32, 'FF', 'Fisika'),
(33, 'FFF', 'Kimia Farmasi (KIMFAR)'),
(34, 'II', 'Farmakologi XI'),
(35, 'III', 'Farmakologi XII'),
(36, 'I4', 'Kimia Farmasi (KIMFAR)'),
(37, 'MM', 'Simulasi Digital'),
(38, 'NN', 'Kebutuhan Dasar Manusia (KDM)'),
(39, 'OO', 'Kesehatan, Keselamatan, Kerja dan Lingkungan Hidup (K3LH)'),
(40, 'OOO', 'Undang-Undang Kesehatan (UUK)'),
(41, 'O4', 'Konsep Dasar Tindakan Keperawatan (KDTK)'),
(42, 'SS', 'Yanfar XII'),
(43, 'TT', 'Farmakognosi XI'),
(44, 'TTT', 'KWU XI'),
(45, 'T4', 'KWU XII'),
(46, 'T5', 'Farmakognosi XII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapor`
--

CREATE TABLE `rapor` (
  `id_rapor` int(11) NOT NULL,
  `id_jadwal_pelajaran` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai_pengetahuan` int(11) NOT NULL DEFAULT 0,
  `nilai_keterampilan` int(11) NOT NULL DEFAULT 0,
  `nilai_akhir` int(11) NOT NULL DEFAULT 0,
  `nilai_predikat` varchar(11) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rapor`
--

INSERT INTO `rapor` (`id_rapor`, `id_jadwal_pelajaran`, `id_siswa`, `nilai_pengetahuan`, `nilai_keterampilan`, `nilai_akhir`, `nilai_predikat`) VALUES
(2, NULL, NULL, 23, 55, 66, 'D'),
(5, NULL, NULL, 567, 44, 343, 'S'),
(8, NULL, NULL, 32, 32, 32, 'd'),
(10, 29, 21, 83, 85, 86, 'B+'),
(11, 24, 22, 66, 77, 0, 'E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL,
  `semester` enum('Ganjil','Genap') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`, `semester`) VALUES
(6, '2021/2022', 'Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL COMMENT 'Admin:admin, Guru:guru, Kepala Sekolah:kepala_sekolah, Bendahara:bendahara, Siswa:siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Cindy', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(3, 'Rika Nugraha', 'kepala sekolah', '8561863b55faf85b9ad67c52b3b851ac', 'Kepala Sekolah'),
(4, 'Mayangsari', 'guru2', '440a21bd2b3a7c686cf3238883dd34e9', 'Guru'),
(5, 'maemunah', 'bendahara', 'c9ccd7f3c1145515a9d3f7415d5bcbea', 'Bendahara'),
(6, 'Maemunah', 'siswa1', '013f0f67779f3b1686c604db150d12ea', 'Siswa'),
(7, 'Naruto', 'siswa', 'admin', 'Siswa'),
(8, 'Guru Guru', 'guru1', '92afb435ceb16630e9827f54330c59c9', 'Guru'),
(9, 'Kepala Sekolah', 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'Kepala Sekolah'),
(10, 'Bendahara', 'bendahara1', '6055f5e3a07e8afbe2c365a4a89a4cc2', 'Bendahara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- Indeks untuk tabel `bidang_keahlian`
--
ALTER TABLE `bidang_keahlian`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mata_pelajaran` (`id_mata_pelajaran`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kelas_ibfk_1` (`id_bidang`),
  ADD KEY `kelas_ibfk_2` (`id_guru`),
  ADD KEY `kelas_ibfk_3` (`id_tahun_ajaran`);

--
-- Indeks untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indeks untuk tabel `rapor`
--
ALTER TABLE `rapor`
  ADD PRIMARY KEY (`id_rapor`),
  ADD KEY `id_jadwal_pelajaran` (`id_jadwal_pelajaran`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `bidang_keahlian`
--
ALTER TABLE `bidang_keahlian`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `rapor`
--
ALTER TABLE `rapor`
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_2` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_keahlian` (`id_bidang`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_keahlian` (`id_bidang`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `data_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `data_guru` (`id_guru`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_3` FOREIGN KEY (`id_mata_pelajaran`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_4` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_5` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_keahlian` (`id_bidang`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_keahlian` (`id_bidang`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `data_guru` (`id_guru`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `kelas_ibfk_3` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `rapor`
--
ALTER TABLE `rapor`
  ADD CONSTRAINT `rapor_ibfk_1` FOREIGN KEY (`id_jadwal_pelajaran`) REFERENCES `jadwal_pelajaran` (`id_jadwal`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `rapor_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
