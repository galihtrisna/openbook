-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2023 pada 08.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openbook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `ebook` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `judul`, `cover`, `ebook`, `tahun`, `penulis`, `penerbit`, `kategori`, `sinopsis`, `jumlah_halaman`, `ISBN`, `created_at`, `updated_at`) VALUES
(1, 'Dilan: Dia Adalah Dilanku Tahun 1990', 'PmYzYzg3LDPeHhaejhNo1oyz3coB04N0LFgYTii5.jpg', 'prcFChCsBIHr8EZU5r40002JqVM71TKLTlqn8WPZ.pdf', 2005, 'Pidi Baiq', 'PT Mizan Pustaka', 'fiksi', 'Novel Dilan ini menceritakan kisah cinta anak SMA yaitu Dilan. Ia adalah salah satu anak geng motor yang bersifat nakal, namun jika dilihat dari sisi lain akan ditemukan juga hal positif di dalam dirinya.\r\n\r\nSuatu ketika, Dilan jatuh cinta dengan anak baru di sekolahnya bernama Milea. Awalnya, gadis itu bingung dengan cara Dilan mengajaknya berkenalan.\r\n\r\nMilea merupakan murid baru yang pindah dari Jakarta. Ketika ia berjalan ke sekolah, Milea bertemu salah satu teman sekolahnya yang menjadi peramal.\r\n\r\nPeramal tersebut berkata kalau mereka nanti akan bertemu lagi di kantin. Milea pada mulanya mengabaikan peramal laki-laki itu, namun ia justru diganggu setiap hari. Milea pun memutuskan untuk mencari tahu identitasnya.  Akhirnya ia mengetahui peramal itu adalah Dilan.\r\n\r\nSuatu saat, Milea diikuti Dilan ketika pulang naik angkot. Dilan pun berkata kalau menurutnya Milea itu cantik, namun Dilan belum mencintainya. Tapi belum tahu nanti sore, tunggu saja.', 330, '9786027870413', '2023-03-11 08:40:34', '2023-03-11 08:40:34'),
(2, 'Tuhan Ada di Hatimu', 'aYkxcqcmhVkIJ00V4cScOQvytAA5uaPXN7mDOg5Q.jpg', '0WVIfPQeqkEN2lvmtxowPemKjOvRSQouH4fbLvZ3.pdf', 2020, 'Husein Ja\'far Al-Hadar', 'Noura Books', 'Pilih kategori', 'Membaca buku Tuhan Ada di Hatimu karya Husei  Ja\'far Al-Hadar, memberikan pandangan berbagai hal dari sudut pandang Islam yang indah. Termasuk dengan kondisi kekinian, yang semuanya dapat dijawab dengan ajaran dalam Islam sebagai agama yang tak pernah lekang oleh waktu.\r\n\r\n\"Akhlak adalah simpul keislaman seseorang. Orang yang berakhlak, berarti mengenal Allah SWT. dan Nabi. Sehingga ia berusaha menjadikan dirinya berahlak seperti Nabi, yang berahlak dengan akhlaknya Allah SWT. Dan orang yang berakhlak pastilah penuh cinta dan membahagiakan bagi semua manusia. Karena akhlak bukan hanya etiket (kesantunan), tapi kesantunan yang bersumber dari hati yang tulus sehingga akan juga dirasakan oleh hati yang lain. Santun saja, enak dipandang. Tapi kalau tak bersumber dari hati, ia tak terasa di hati. Ia bukan akhlak, tapi pencitraan\". (Halaman 105).', 203, '9786232421479', '2023-03-11 08:58:10', '2023-03-11 08:58:10'),
(3, 'Sejarah Dunia yang Disembunyikan', 'JgezX6CkJD7ys9CiwnCgIVnZjAowGjxdakN5n5Gj.png', 'MqAUgyYvZ1VlnD0k3TctUog2R2dft8ZwLnKHD32P.pdf', 2015, 'Jonathan Black', 'PT Pustaka Alvabet', 'sejarah', 'Buku Sejarah Dunia yang Disembunyikan adalah terjemahan dari karya Jonathan Black berjudul The Secret History of the World yang terbit tahun 2007. Buku yang diterjemahkan oleh Isma B. Soekanto dan Adi Toha ini jadi salah satu buku dari sekian banyaknya buku yang menceritakan tentang sejarah. Buku sejarah ini sangat menarik dan wajib untuk ditambahkan dalam koleksi bacaan sejarah karena topiknya yang menarik dan universal.\r\nBuku ini memberi pembanyanya banyak pengetahuan menarik tentang sejarah dunia yang mungkin saja belum banyak diketahui oleh publik. Atau bahkan mungkin saja sengaja memang sengaja disembunyikan oleh pihak-pihak yang tidak ingin sejarah tersebut diketahui oleh banyak orang. Dalam pembacaannya, buku sejarah ini didukung dengan berbagai fakta, mitos, dan cerita- cerita legenda tentang sejarah manusia. Itulah sebabnya topik yang terlihat berat dalam buku ini menjadi lebih menarik untuk dibaca.', 636, '97860291936711', '2023-03-11 23:36:42', '2023-03-11 23:36:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_10_032503_create_books_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@openbook.com', NULL, 'admin', '$2y$10$znfH8krRMGyzaVYra9sLKO6s4spteCISqmnlZxQTVGBtAM4ckOWsm', NULL, '2023-03-11 08:36:35', '2023-03-11 08:36:35'),
(2, 'Galih Trisna', 'galihtrisna666@gmail.com', NULL, 'user', '$2y$10$L8MBGhN0OtoIwtpAt4sA6.lrQ7C4z2rWR0PWyioLvwOv.nPDkwHha', NULL, '2023-03-11 23:03:40', '2023-03-11 23:03:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
