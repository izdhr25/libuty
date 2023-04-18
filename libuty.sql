-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2023 pada 01.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libuty`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tulis` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'buku.jpg',
  `kode_qr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `halaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tersedia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `image`, `kode_qr`, `kategori`, `rak`, `isbn`, `judul`, `penerbit`, `tahun_terbit`, `penulis`, `sinopsis`, `halaman`, `edisi`, `status`, `created_at`, `updated_at`) VALUES
(2, 'pedagangdarah.jpeg', '9786020339191', '110', '2', '9786020339191', 'Kisah Seorang Pedagang Darah (Chronicle of a Blood Merchant)', 'Gramedia Pustaka Utama', '2017', 'Yu Hua', '<p>Sebagai pendorong kereta di pabrik sutra dengan upah yang sangat rendah, Xu Sanguan mencoba mencari tambahan uang dengan sering menjual darahnya. Ia berjuang menafkahi istrinya dan tiga putranya di masa Revolusi Kebudayaan, tanpa menghiraukan nyawanya semakin terancam. Ia terguncang ketika mengetahui putra kesayangannya ternyata terlahir sebagai hasil perselingkuhan antara istrinya dan seorang tetangga. Kewibawaannya tercederai, sementara istrinya dihukum oleh masyarakat sebagai pelacur. Meskipun kemiskinan dan pengkhianatan rezim Mao telah memeras habis segalanya, Xu Sanguan akhirnya menemukan kekuatan dalam ikatan darah keluarganya. Dengan intensitas emosional yang luar biasa, penggambaran tempat dan waktu apa adanya yang mencekam, serta pemahaman yang sangat jelas, Yu Hua mengisahkan seorang laki-laki yang akrab dengan kehidupan yang sulit setiap harinya.</p>', '288', '1', 'Tersedia', '2023-03-24 08:17:57', '2023-03-24 08:18:47'),
(3, 'dose.jpeg', '9786020631738', '200', '2', '9786020631738', 'Daily Dose of Light', 'Gramedia Pustaka Utama', '2019', 'Ahmad Fuadi', 'Buku Daily Dose Of Light ini adalah lanjutan dari buku Daily Dose of Shine. Memiliki konsep yang sama, buku berisi ilustrasi yang menarik dan potongan kalimat yang bisa menjadi moodbooster kamu sehari hari.\n\nKalau di buku sebelumnya memuat kalimat inspiratif dari syair berbahasa Arab, maka Daily Dose Of Light ini memuat potongan ayat ayat Al Qur’an yang ketika membacanya akan membuat hati terenyuh. Buku ini tentu berisi segelintir dari ribuan ayat yang bersinar sinar kemilau memasuki jiwa kita, dalam kondisi kita membuka diri.\n\nKebanyakan kutipan adalah potongan pendek dari ayat ayat Al Qur’an yang lebih panjang dan lengkap, Lalu kenapa di potong? Sengaja. Agar teman teman penasaran dengan keindahan ayat Allah dan terpanggil untuk menelusuri sendiri sesuai nomor ayat dan nama surat. Semoga buku ini dapat menjadi mood booster kamu sehari hari, dan semoga setiap halaman dari buku ini bisa menjadi jembatan untuk mendalami ayat ayat yang lebih lengkap di dalam Al Qur’an dan akan membuat hidup kita lebih terang, tenang, senang, dan lapang.\n\n“Barangsiapa memelihara kehidupan seorang manusia, maka seolah olah dia telah memelihara kehidupan semua manusia,” QS. Al Maidah : 32\n\n“Barang siapa mengerjakan amal saleh maka (pahalanya) untuk dirinya sendiri dan barang siapa mengerjakan perbuatan jahat maka (dosanya) untuk dirinya sendiri,” QS Fushilat : 46', '120', '1', 'Tersedia', '2023-03-24 08:17:57', '2023-03-24 23:36:23'),
(4, 'beranitidakdisukai2.jpeg', '9786020633213', '150', '2', '9786020633213', 'Berani Tidak Disukai', 'Gramedia Pustaka Utama', '2019', 'Ichiro Kishimi dan Fumitake Koga', 'Berani Tidak Disukai memiliki judul asli \"The Courage to be Disliked: How to Free Yourself, Change Your Life and Achieve Real Happiness\". Buku karangan Ichiro kishimi dan Fumitake Koga ini telah terjual sebanyak lebih dari 3,5 juta eksemplar. Buku ini laris di pasaran hingga diterjemahkan ke dalam berbagai bahasa, salah satunya bahasa Indonesia. Berani Tidak Disukai merupakan buku yang berisikan dialog antara seorang filsuf dengan seorang pemuda. Dialog yang dilakukan selama lima malam ini, berisi percakapan dari seorang pemuda yang tidak puas dengan kehidupannya dan seorang filsuf yang mengajarkannya tentang bagaimana cara mendapatkan kebahagiaan di dunia. Dialog-dialog tersebut dibingkai menjadi lima percakapan yang tiap percakapannya memuat satu inti menarik tentang hidup. Dalam buku ini, pembaca akan merasakan bahwa seluruh rangkaian kata yang ada di dalam-nya seperti sebuah kutipan. Hampir semuanya berisikan makna indah dan membuat pembaca berpikir tentang bagaimana cara untuk berubah menjadi lebih baik. Berani Tidak Disukai membantu para pembaca untuk menggali kekuatan di dalam dirinya sebagai bekal meraih kebahagiaan yang diinginkan. Ada banyak hal baru yang akan membuat pembaca sadar bahwa beberapa hal seharusnya tidak dilakukan saat ini karena hal tersebut bisa saja menghambat kebahagiaan pada masa depan. Salah satu contohnya adalah mengenang trauma masa lalu dan menjadikan kehidupan orang lain sebagai standar kebahagiaan. Setelah membaca buku ini, pikiran pembaca menjadi semakin terbuka pada langkah baru untuk mengubah hidup menjadi lebih baik lewat tindakan berani untuk tidak disukai oleh orang lain. Bagian menarik dari buku ini ialah ketika seorang filsuf berbicara menurut pandangannya tanpa berusaha menggurui si pemuda. Namun, pandangan dari sang filsuf tersebut justru dapat menjadi pembelajaran bagi pembaca.', '352', '1', 'Tersedia', '2023-03-24 08:17:57', '2023-03-25 00:02:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kode_kategori`, `nama`, `created_at`, `updated_at`) VALUES
(1, '000', 'Publikasi Umum, informasi umum dan komputer', NULL, NULL),
(2, '010', 'Bibiliografi', NULL, NULL),
(3, '020', 'Perpustakaan dan informasi', NULL, NULL),
(4, '030', 'Ensiklopedia dan buku yang memuat fakta-fakta', NULL, NULL),
(5, '040', 'Tidak ada klasifikasi', NULL, NULL),
(6, '050', 'Majalah dan Jurnal', NULL, NULL),
(7, '060', 'Asosiasi, Organisasi dan Museum', NULL, NULL),
(8, '070', 'Media massa, junalisme dan publikasi', NULL, NULL),
(9, '080', 'Kutipan', NULL, NULL),
(10, '090', 'Manuskrip dan buku langka', NULL, NULL),
(11, '100', 'Filsafat dan psikologi', NULL, NULL),
(12, '110', 'Metafisika', NULL, NULL),
(13, '120', 'Epistimologi', NULL, NULL),
(14, '130', 'Parapsikologi dan Okultisme', NULL, NULL),
(15, '140', 'Pemikiran Filosofis', NULL, NULL),
(16, '150', 'Psikologi', NULL, NULL),
(17, '160', 'Filosofis Logis', NULL, NULL),
(18, '170', 'Etik', NULL, NULL),
(19, '180', 'Filosofi kuno, zaman pertengahan, dan filosofi ketimuran', NULL, NULL),
(20, '190', 'Filosofi barat modern', NULL, NULL),
(21, '200', 'Agama', NULL, NULL),
(22, '300', 'Ilmu sosial, sosiologi dan antropologi', NULL, NULL),
(23, '310', 'Statistik', NULL, NULL),
(24, '320', 'Ilmu politik', NULL, NULL),
(25, '330', 'Ekonomi', NULL, NULL),
(26, '340', 'Hukum', NULL, NULL),
(27, '350', 'Administrasi publik dan ilmu kemiliteran', NULL, NULL),
(28, '360', 'Masalah dan layanan sosial', NULL, NULL),
(29, '370', 'Pendidikan', NULL, NULL),
(30, '380', 'Perdagangan, komunikasi dan transportasi', NULL, NULL),
(31, '390', 'Norma, etika dan tradisi\r\n', NULL, NULL),
(32, '400', 'Bahasa', NULL, NULL),
(33, '500', 'Sains', NULL, NULL),
(34, '510', 'Matematika', NULL, NULL),
(35, '520', 'Astronomi', NULL, NULL),
(36, '530', 'Fisika', NULL, NULL),
(37, '540', 'Kimia', NULL, NULL),
(38, '550', 'Ilmu kebumian dan geologi', NULL, NULL),
(39, '560', 'Fosil dan kehidupan prasejarah', NULL, NULL),
(40, '570', 'Biologi', NULL, NULL),
(41, '580', 'Tanaman', NULL, NULL),
(42, '590', 'Zoologi', NULL, NULL),
(43, '600', 'Teknologi\r\n', NULL, NULL),
(44, '610', 'Kesehatan dan Obat-Obatan', NULL, NULL),
(45, '620', 'Teknik', NULL, NULL),
(46, '630', 'Pertanian', NULL, NULL),
(47, '640', 'Manajemen Rumah Tangga dan Keluarga', NULL, NULL),
(48, '650', 'Manajemen dan Hubungan dengan Publik', NULL, NULL),
(49, '660', 'Teknik Kimia', NULL, NULL),
(50, '670', 'Manufaktur', NULL, NULL),
(51, '680', 'Manufaktur untuk Keperluan Khusus', NULL, NULL),
(52, '690', 'Konstruksi', NULL, NULL),
(53, '700', 'Kesenian dan rekreasi', NULL, NULL),
(54, '710', 'Perencanaan dan Arsitektur Lanskap', NULL, NULL),
(55, '720', 'Arsitektur', NULL, NULL),
(56, '730', 'Patung, Keramik dan Seni Metal', NULL, NULL),
(57, '740', 'Seni Grafis dan Dekoratif', NULL, NULL),
(58, '750', 'Lukisan', NULL, NULL),
(59, '760', 'Percetakan', NULL, NULL),
(60, '770', 'Fotografi, Film, Video', NULL, NULL),
(61, '780', 'Musik', NULL, NULL),
(62, '790', 'Olahraga, Permainan dan Hiburan', NULL, NULL),
(63, '800', 'Literatur, Sastra, Retorika dan Kritik', NULL, NULL),
(64, '900', 'Sejarah', NULL, NULL),
(65, '910', 'Geografi dan Perjalanan', NULL, NULL),
(66, '920', 'Biografi dan Asal-Usul', NULL, NULL),
(67, '910', 'Geografi dan Perjalanan', NULL, NULL),
(68, '920', 'Biografi dan Asal-Usul', NULL, NULL),
(69, '930', 'Sejarah Dunia Lama', NULL, NULL),
(70, '940', 'Asal–Usul Eropa', NULL, NULL),
(71, '950', 'Asal-Usul Asia', NULL, NULL),
(72, '960', 'Asal-Usul Afrika', NULL, NULL),
(73, '970', 'Asal-Usul Amerika Utara', NULL, NULL),
(74, '980', 'Asal-Usul Amerika Selatanl', NULL, NULL),
(75, '990', 'Asal-Usul Wilayah Lain', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriberita`
--

CREATE TABLE `kategoriberita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoriberita`
--

INSERT INTO `kategoriberita` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Politik', NULL, NULL),
(2, 'Ekonomi', NULL, NULL),
(3, 'Olahraga', NULL, NULL),
(4, 'Hiburan', NULL, NULL),
(5, 'Teknologi', NULL, NULL),
(6, 'Astronomi', NULL, NULL),
(7, 'Kesehatan', NULL, NULL),
(8, 'Pendidikan', NULL, NULL),
(9, 'Pengetahuan Umum', NULL, NULL),
(10, 'Lingkungan', NULL, NULL),
(11, 'Sejarah', NULL, NULL),
(12, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `LogoDash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LogoWeb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `LogoDash`, `LogoWeb`, `telepon`, `fax`, `website`, `instagram`, `youtube`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'libutyberwarna.png', 'libutyputihnoslogan.png', '087868191540', '(021) 82597121', 'https://web.smkn2kotabekasi.sch.id/', 'https://www.instagram.com/smkn2.kotabks/', 'https://www.youtube.com/c/SMKN2KOTABEKASI', 'smknduakotabekasi@gmail.com', 'Jl. Lap. Bola Rw. Butun, RT.001/RW.006, Ciketing Udik, Kec. Bantar Gebang, Kota Bks, Jawa Barat 17153', '2023-03-24 08:17:17', '2023-03-24 08:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_rfid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis_nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `kode_rfid`, `nis_nip`, `nama`, `waktu`, `role_id`, `created_at`, `updated_at`) VALUES
(1, '0750719908', '202110356', 'Siti Miftahul Hikmah', '2023-03-24 08:17:17', '2', '2023-03-24 08:17:17', '2023-03-24 08:17:17'),
(7, '0752530628', '202110340', 'Izdihar Fazrianti', '2023-03-24 23:30:39', '2', '2023-03-24 23:30:39', '2023-03-24 23:30:39'),
(8, '0753055732', '202110351', 'Puji Wahyuningtias', '2023-03-25 00:07:56', '2', '2023-03-25 00:07:56', '2023-03-25 00:07:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_12_07_203705_create_roles_table', 1),
(6, '2022_12_07_203808_create_buku_table', 1),
(7, '2022_12_07_203823_create_kategori_table', 1),
(8, '2022_12_07_204005_create_peminjaman_table', 1),
(9, '2022_12_30_110426_create_kunjungan_table', 1),
(10, '2023_02_23_053731_create_kontak_table', 1),
(11, '2023_03_03_170830_create_berita_table', 1),
(12, '2023_03_03_171126_create_kategoriberita_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rfid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinjam` date DEFAULT NULL,
  `kembali` date DEFAULT NULL,
  `kembali_asli` date DEFAULT NULL,
  `telat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_pinjam`, `kode_rfid`, `nip_nis`, `name`, `judul`, `isbn`, `pinjam`, `kembali`, `kembali_asli`, `telat`, `denda`, `bayaran`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LBCeP1B', '202110356', '202110356', 'Siti Miftahul Hikmah', 'Daily Dose of Light', '9786020631738', '2023-03-24', '2023-03-24', '2023-03-25', '1', '1000', 'Denda Lunas', 'Terlambat', '2023-03-24 08:17:17', '2023-03-25 00:08:55'),
(2, 'LBCLFz9', '0752530628', '202110340', 'Izdihar Fazrianti', 'Berani Tidak Disukai', '9786020633213', '2023-03-25', '2023-04-01', '2023-03-25', '-7', '0', 'Denda Lunas', 'Dikembalikan', '2023-03-24 23:31:41', '2023-03-25 00:12:31'),
(3, 'LBCBHFR', '0753494452', '202110360', 'Tiara Azmi', 'Berani Tidak Disukai', '9786020633213', '2023-03-25', '2023-04-01', '2023-04-05', '4', '4000', 'Denda Lunas', 'Terlambat', '2023-03-25 00:01:04', '2023-03-25 00:12:31'),
(4, 'LBCluKW', '0753055732', '202110351', 'Puji Wahyuningtias', 'Daily Dose of Light', '9786020631738', '2023-03-25', '2023-04-01', '2023-03-25', '-7', '0', NULL, 'Dikembalikan', '2023-03-25 00:08:35', '2023-03-25 00:09:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pustakawan', '2023-03-24 08:17:17', '2023-03-24 08:17:17'),
(2, 'Siswa/i', '2023-03-24 08:17:17', '2023-03-24 08:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip_nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_rfid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile2.jpg',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip_nis`, `kode_rfid`, `image`, `name`, `jk`, `email`, `password`, `telepon`, `kelas`, `alamat`, `status`, `role_id`, `created_at`, `updated_at`) VALUES
(2, '20231741', '20231741', 'profile2.jpg', 'Admin', 'Laki - laki', 'admin@gmail.com', '$2y$10$.P33sPgeSmrrw2DFh6H4Eux0YTqjt7klfjZNEjJ/G90s7jwrolBEC', '087868191540', NULL, 'Butun', 'Active', '1', '2023-03-24 08:17:17', '2023-03-24 08:17:17'),
(17, '202110338', '0752943764', 'elis.jpg', 'Eli Siyana Martin', 'Perempuan', 'elis@gmail.com', '$2y$10$WU5c/Mw0gNHF3gwBayxQ.uuAEUF1K7slfG5FGDfyrzCXMWilvpNhm', '0895332520224', 'XII RPL 2', 'Limus Pratama Regency', 'Active', '2', '2023-03-24 23:28:22', '2023-03-24 23:28:22'),
(18, '202110340', '0752530628', 'izdihar.jpg', 'Izdihar Fazrianti', 'Perempuan', 'izdihar@gmail.com', '$2y$10$WdfmuL0xlJy34RTSd/oFdO8TitEZAbbSJd7vYyy4jkmVpcdZRHvIO', '0895332520225', 'XII RPL 2', 'Perum. GAS', 'Active', '2', '2023-03-24 23:28:22', '2023-03-24 23:28:22'),
(19, '202110351', '0753055732', 'puji.jpg', 'Puji Wahyuningtias', 'Perempuan', 'puji@gmail.com', '$2y$10$bAgapg8m.zXiOzFlfoTtsu7yaQ5RVB4iugZpEL4US9mruShlZJcyG', '0895332520226', 'XII RPL 2', 'Kp. Ciketing Barat', 'Active', '2', '2023-03-24 23:28:23', '2023-03-24 23:28:23'),
(20, '202110356', '0750719908', 'siti.jpg', 'Siti Miftahul Hikmah', 'Perempuan', 'siti@gmail.com', '$2y$10$EsSSE/OUBik/VqneFG01beaxi384a52WM34H4gNYHLNyreTzVdr0.', '0895332520227', 'XII RPL 2', 'Kp. Cisalak', 'Active', '2', '2023-03-24 23:28:23', '2023-03-24 23:28:23'),
(21, '202110360', '0753494452', 'tiara.jpg', 'Tiara Azmi', 'Perempuan', 'tiara@gmail.com', '$2y$10$KBBYIJBhHc8szMNFpRe.BOhYmGed1HWOgcC93ElDkA5ZwvVoWt8Jy', '0895332520228', 'XII RPL 2', 'Kp. Cikiwul', 'Active', '2', '2023-03-24 23:28:23', '2023-03-24 23:28:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buku_isbn_unique` (`isbn`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoriberita`
--
ALTER TABLE `kategoriberita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
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
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peminjaman_kode_pinjam_unique` (`kode_pinjam`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_kode_rfid_unique` (`kode_rfid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `kategoriberita`
--
ALTER TABLE `kategoriberita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
