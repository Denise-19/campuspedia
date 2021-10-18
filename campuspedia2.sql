-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 22.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campuspedia2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_17_135105_create_pegawais_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `email`, `alamat`, `telepon`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(8, 'Hafshah Yance Purnawati', 'epuspasari@yahoo.co.id', 'Kpg. Supomo No. 773, Batu 55115, Sumsel', '0773 9294 1160', 'karyawan', NULL, NULL),
(9, 'Kunthara Narpati', 'qrahmawati@sihotang.com', 'Ds. Baranang No. 112, Serang 36406, Jatim', '0291 0992 784', 'karyawan', NULL, NULL),
(10, 'Cinthia Yuliarti', 'rahayu.intan@gmail.com', 'Ki. Moch. Toha No. 680, Palu 56926, NTB', '0470 4596 683', 'karyawan', NULL, NULL),
(11, 'Putri Hilda Padmasari S.E.I', 'nashiruddin.makara@yahoo.co.id', 'Kpg. Ronggowarsito No. 516, Padang 21006, Sumsel', '(+62) 772 0290 449', 'karyawan', NULL, NULL),
(12, 'Nurul Wahyuni', 'icha.ramadan@gmail.co.id', 'Jr. Jaksa No. 583, Palopo 65674, Kepri', '(+62) 22 6069 4787', 'karyawan', NULL, NULL),
(13, 'Vera Purwanti', 'csinaga@maheswara.in', 'Ds. Imam Bonjol No. 463, Tomohon 98392, Kalteng', '(+62) 668 7950 775', 'karyawan', NULL, NULL),
(14, 'Praba Pranowo S.I.Kom', 'riyanti.rahmi@kuswandari.sch.id', 'Dk. Kalimalang No. 907, Kendari 51125, Jatim', '0768 1674 647', 'karyawan', NULL, NULL),
(15, 'Restu Melani M.TI.', 'galih.widiastuti@yahoo.co.id', 'Jln. W.R. Supratman No. 221, Jambi 51246, Babel', '0951 4468 941', 'karyawan', NULL, NULL),
(16, 'Bakiono Santoso M.Pd', 'latika81@yahoo.co.id', 'Ds. Surapati No. 821, Bitung 99051, Sulut', '0828 530 750', 'karyawan', NULL, NULL),
(17, 'Nrima Tampubolon S.Ked', 'wacana.ratna@susanti.sch.id', 'Gg. Lembong No. 210, Sungai Penuh 26270, NTT', '0512 0578 9286', 'karyawan', NULL, NULL),
(18, 'Kasiyah Mardhiyah', 'mala74@yahoo.co.id', 'Ds. Bappenas No. 237, Medan 73064, Kalteng', '0699 0712 531', 'karyawan', NULL, NULL),
(19, 'Hafshah Winarsih', 'asmadi57@yahoo.com', 'Gg. Yos No. 501, Malang 16791, Banten', '(+62) 920 8090 1748', 'karyawan', NULL, NULL),
(20, 'Zalindra Intan Padmasari', 'kuswoyo.kayla@anggriawan.info', 'Dk. Ketandan No. 539, Makassar 48683, Kalbar', '0538 0342 189', 'karyawan', NULL, NULL),
(21, 'Denise Gratia Aruan', 'denisearuan19@uns.student.ac.id', 'Balige', 'denisearuan19@uns.student.ac.id', 'mahasiswa', '2021-10-17 13:05:39', '2021-10-17 13:05:39'),
(22, 'Denise Aruan', 'denisearuan19@uns.student.ac.id', 'Balige', 'denisearuan19@uns.student.ac.id', 'mahasiswa', '2021-10-18 13:13:32', '2021-10-18 13:13:32'),
(23, 'Denise Aruan', 'denisearuan19@uns.student.ac.id', 'Balige', 'denisearuan19@uns.student.ac.id', 'mahasiswa', '2021-10-18 13:13:34', '2021-10-18 13:13:34'),
(24, 'keke', 'gratia@gmail.com', 'Balige', 'gratia@gmail.com', 'mahasiswa', '2021-10-18 13:33:04', '2021-10-18 13:33:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
