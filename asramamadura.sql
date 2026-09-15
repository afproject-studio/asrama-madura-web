-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2026 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asramamadura`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$PfnHa/CcBTIJ5QrNAO282ONW2M6pTgQLuT.LKlhiTJwvrAYlX/4fi');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jenis` enum('berita','pengumuman') NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `foto`, `jenis`, `tanggal_upload`) VALUES
(18, 'Mahasiswa Madura Yogyakarta Aktif Dalam Kegiatan Kebudayaan', 'mahasiswa-madura-yogyakarta-aktif-dalam-kegiatan-kebudayaan', 'Mahasiswa Madura Yogyakarta Aktif dalam Kegiatan Kebudayaan\r\n\r\nMahasiswa Madura yang tergabung dalam Asrama Mahasiswa Madura Yogyakarta aktif berpartisipasi dalam berbagai kegiatan kebudayaan, baik di lingkungan asrama maupun di tingkat daerah dan nasional. Kegiatan tersebut meliputi pelestarian seni dan tradisi Madura, diskusi kebudayaan, serta partisipasi dalam acara budaya di Yogyakarta. Keaktifan ini menjadi wujud komitmen asrama dalam menjaga identitas budaya Madura sekaligus memperkenalkannya kepada masyarakat luas.', '1769329715_1769329715_5a5a1f0d74963e021b98.jpeg', 'berita', '2026-01-25'),
(19, 'Bhabinkamtibnas kel. tegalpanggung menghimbau penghuni asrama madura yogyakarta dalam menghadapi C3(Curat,Curat,Curanmor.)', 'bhabinkamtibnas-kel-tegalpanggung-menghimbau-penghuni-asrama-madura-yogyakarta-dalam-menghadapi-c3curatcuratcuranmor', 'Bhabinkamtibmas Kelurahan Tegalpanggung Himbau Penghuni Asrama Mahasiswa Madura Yogyakarta Waspada C3\r\n\r\nTegalpanggung, 24 Januari 2026 —\r\nBhabinkamtibmas Kelurahan Tegalpanggung memberikan himbauan kepada penghuni Asrama Mahasiswa Madura Yogyakarta agar meningkatkan kewaspadaan terhadap potensi tindak kejahatan C3 (Curat, Curas, dan Curanmor). Dalam kegiatan tersebut, Bhabinkamtibmas mengingatkan pentingnya menjaga keamanan lingkungan asrama, mengunci kendaraan dan barang berharga, serta meningkatkan kepedulian antar penghuni. Himbauan ini bertujuan untuk menciptakan situasi yang aman, tertib, dan kondusif di lingkungan asrama.', '1769329834_1769329834_c5c0e466ee7069674175.jpeg', 'berita', '2026-01-25'),
(20, 'kunjungan Prof Mahfud MD Ke Asrama Madura Yogyakarta Dalam Acara Mahasiswa Membangun Integeritas Dan Intelektualitas Dalam Peran Kebudayan', 'kunjungan-prof-mahfud-md-ke-asrama-madura-yogyakarta-dalam-acara-mahasiswa-membangun-integeritas-dan-intelektualitas-dalam-peran-kebudayan', 'Kunjungan Prof. Mahfud MD ke Asrama Mahasiswa Madura Yogyakarta dalam Acara “Mahasiswa Membangun Integritas dan Intelektualitas dalam Peran Kebudayaan”\r\n\r\nYogyakarta — Asrama Mahasiswa Madura Yogyakarta menerima kunjungan Prof. Mahfud MD dalam kegiatan bertema “Mahasiswa Membangun Integritas dan Intelektualitas dalam Peran Kebudayaan”. Kegiatan ini bertujuan untuk memberikan motivasi serta penguatan nilai integritas, intelektualitas, dan tanggung jawab kebudayaan kepada mahasiswa Madura di Yogyakarta. Dalam kesempatan tersebut, Prof. Mahfud MD menekankan pentingnya peran mahasiswa sebagai agen perubahan yang mampu menjaga nilai budaya, bersikap kritis, serta berkontribusi positif bagi bangsa dan negara.', '1769330577_1769330577_bdcc93eb47e62944078e.jpg', 'berita', '2026-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `foto`, `tanggal_upload`, `created_at`, `updated_at`) VALUES
(9, 'acara outbound saat makrab mahasiswa madura', 'Kegiatan outbound dilaksanakan sebagai bagian dari rangkaian Malam Keakraban (Makrab) Mahasiswa Madura untuk mempererat kebersamaan dan kerja sama antar peserta.', '1770184453_1770184453_c97a6eb17685715bd362.jpeg', '2026-02-04', '2026-02-04 05:26:50', '2026-02-04 06:42:39'),
(10, 'rapat mengenai keberlanjutan kepengurusan asrama', 'Rapat mengenai keberlanjutan kepengurusan asrama dilaksanakan sebagai forum musyawarah untuk membahas evaluasi dan perencanaan kepengurusan ke depan.', '1770183190_1770183190_662b2feb5bb3b8a06f5c.jpeg', '2026-02-04', '2026-02-04 05:33:10', '2026-02-04 05:33:10'),
(11, 'bakar bakar menyambut tahun baru mahasiswa-mahasiswi madura di asrama', 'menyambut tahun baru antusias temen-temen mahasiswa untuk menjalin kebersamaan dengan acara bakar-bakar di halaman asrama', '1770183276_1770183276_74fd73a8995391063ce5.jpeg', '2026-02-04', '2026-02-04 05:34:36', '2026-02-04 05:34:36'),
(12, 'acara doa bersama di rumah sesepuh asrama', 'untuk membersamai para senior asrama dan doa bersama agar menjalin keharmonisan antara sesepuh maupun mahasiswa', '1770183632_1770183632_baac473348a2c6f65204.jpeg', '2026-02-04', '2026-02-04 05:40:32', '2026-02-04 05:40:32'),
(13, 'kunjungan kerumah pengusha makanan senior madura', 'menyambung silatuhrahmi antara mahasiswa dan senior keluarga madura yogyakarta', '1770183810_1770183810_b2668d20346943da1019.jpeg', '2026-02-04', '2026-02-04 05:43:30', '2026-02-04 05:43:30'),
(14, 'diskusi bersma mahasiswa-mahasiswi madura', 'mempererat keyakinan kebersamaan dalam diskusi pada palam hari', '1770184524_1770184524_75be24a61a20cea13885.jpeg', '2026-02-04', '2026-02-04 05:55:24', '2026-02-04 05:58:29'),
(15, 'sharing dan ngumpul bersama ', 'menjadikan sebuah kedekatan kekeluarga dalam pertemuan 1 bulan 1 samapai 2 kali pertemuan', '1770184675_1770184675_fd36be26741ad3a7cd0d.jpeg', '2026-02-04', '2026-02-04 05:57:55', '2026-02-04 05:57:55'),
(16, 'peremuan mngumpul bareng besama senior KMY', 'Dengan adanya pertemuaan ini, mahasiwa belajar untuk cara membangun relasi kepada orang sudah sukses', '1770184913_1770184913_e54be212c1f9a2b3838a.jpeg', '2026-02-04', '2026-02-04 06:01:53', '2026-02-04 06:01:53'),
(17, 'penampilan pentas seni di acara keluarga madura yogyakarta', 'temen-temen mahasiswa berkontribusi dalam menjaga kelstarian budaya madura', '1770185368_1770185368_5ae3dbc8923226a4f0aa.jpeg', '2026-02-04', '2026-02-04 06:09:28', '2026-02-04 06:09:28'),
(18, 'ngopi bersama angara kepenguran maupun dan anggota asrama', 'di adakannya pertemuan ini agar menjalin kedekatan antara pengurus dan anggota\r\n', '1770185736_1770185736_e0e918b374df1287477d.jpeg', '2026-02-04', '2026-02-04 06:15:36', '2026-02-04 06:15:36'),
(19, 'acara kunjungan ke senior KMY', 'bersama sebagian temen-temen mahasiswa mahasiswi', '1770185857_1770185857_0bfed7e974b7b22c0294.jpeg', '2026-02-04', '2026-02-04 06:17:37', '2026-02-04 06:17:37'),
(20, 'berpartisipasi dalam acara kebudayaan ', 'menampilkan seni asli dari madura seperti silat dan tari, dan ada penampilan budaya lain seperti dari bali, banyuwangi dan masih banyak yang lain, madura salah satunya', '1770186212_1770186212_0a0accd41da0a639e3b4.jpeg', '2026-02-04', '2026-02-04 06:23:32', '2026-02-04 06:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_asrama`
--

CREATE TABLE `kegiatan_asrama` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `jenis_kegiatan` varchar(105) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_asrama`
--

INSERT INTO `kegiatan_asrama` (`id`, `nama_kegiatan`, `jenis_kegiatan`, `tanggal`, `deskripsi`, `foto`) VALUES
(7, 'makrab mahasiswa madura yogykarta', 'makrab mahasiswa madura yogykarta', '2025-12-11', 'Malam Keakraban (Makrab) Mahasiswa Madura Yogyakarta merupakan kegiatan yang bertujuan untuk mempererat tali silaturahmi dan kebersamaan antar mahasiswa Madura yang sedang menempuh pendidikan di Yogyakarta. Kegiatan ini menjadi wadah bagi mahasiswa untuk saling mengenal, berbagi pengalaman, serta membangun rasa kekeluargaan di perantauan. Melalui berbagai rangkaian acara seperti perkenalan, diskusi santai, permainan kebersamaan, dan kegiatan keagamaan, Makrab diharapkan mampu menumbuhkan rasa solidaritas, kekompakan, dan kepedulian antar sesama mahasiswa Madura. Kegiatan ini juga menjadi sarana untuk menanamkan nilai-nilai kebudayaan Madura serta memperkuat identitas dan rasa memiliki terhadap organisasi Mahasiswa Madura Yogyakarta.', '1770113585_123cf22a7824a2f85bc7.jpg'),
(8, 'pengajian malam jumat', 'rutinitas pengajian malam jumat', '2025-02-01', 'Pengajian malam Jumat merupakan salah satu rutinitas keagamaan yang dilaksanakan oleh mahasiswa Madura sebagai bentuk pelestarian tradisi dan penguatan nilai spiritual. Kegiatan ini biasanya dilakukan dengan berkunjung ke para sesepuh keluarga mahasiswa Madura, seperti tokoh masyarakat atau orang tua yang dituakan. Dalam pengajian tersebut, mahasiswa bersama-sama membaca tahlil, yasin, dan doa, serta mendengarkan nasihat keagamaan dari para sesepuh. Selain sebagai sarana ibadah, kegiatan ini juga menjadi wadah untuk mempererat rasa keakraban, silaturahmi, dan kebersamaan antara mahasiswa dengan keluarga serta sesepuh Madura. Tradisi ini mencerminkan nilai hormat kepada orang yang lebih tua sekaligus menjaga hubungan kekeluargaan di tengah kesibukan perkuliahan.', '1770113720_40ee3e704e6fadafccb8.jpg'),
(11, 'kebudayaan lintas suku dan budaya.', 'kebudayaan lintas suku dan budaya.', '2023-11-20', 'Karnaval Kebudayaan Lintas Suku, Ras, dan Budaya merupakan kegiatan yang menampilkan keberagaman budaya sebagai wujud persatuan dan toleransi dalam kehidupan bermasyarakat. Kegiatan ini diikuti oleh berbagai kelompok dengan latar belakang suku, ras, dan budaya yang berbeda, yang menampilkan ciri khas masing-masing melalui busana adat, kesenian, tarian, musik, serta simbol budaya lainnya. Karnaval ini menjadi sarana untuk saling mengenal, menghargai perbedaan, dan mempererat hubungan antarindividu dalam bingkai kebhinekaan. Melalui kegiatan ini, diharapkan tercipta rasa kebersamaan, saling menghormati, serta kesadaran akan pentingnya menjaga dan melestarikan kekayaan budaya Indonesia.', '1770114147_59a60627cfbfd1290b9c.jpg'),
(13, 'rutinitas futsal mingguan', 'rutinitas futsal mingguan', '2025-01-26', 'Kegiatan futsal merupakan salah satu rutinitas olahraga yang dilaksanakan oleh mahasiswa Madura sebagai sarana menjaga kebugaran fisik dan kesehatan tubuh. Kegiatan ini biasanya dilakukan secara bersama-sama di lapangan futsal dengan melibatkan mahasiswa dari berbagai angkatan. Dalam kegiatan futsal tersebut, mahasiswa dibagi ke dalam beberapa tim untuk melaksanakan pertandingan persahabatan yang menjunjung tinggi sportivitas dan kerja sama. Selain sebagai aktivitas olahraga, kegiatan ini juga menjadi wadah untuk mempererat rasa keakraban, solidaritas, dan kebersamaan antar mahasiswa Madura. Kegiatan futsal ini mencerminkan semangat kekompakan serta kebersamaan dalam menjaga hubungan sosial di tengah kesibukan perkuliahan.', '1770114528_d54c034ddbe4de0c037a.jpg'),
(14, 'persetengah bulan makan bersama mahasiswa madura', 'persetengah bulan makan bersama mahasiswa madura', '2025-03-20', 'Kegiatan makan bersama merupakan salah satu rutinitas yang dilaksanakan setiap pertengahan bulan oleh mahasiswa Madura sebagai bentuk kebersamaan dan kekeluargaan. Kegiatan ini biasanya dilakukan dengan berkumpul di satu tempat yang telah disepakati bersama oleh para mahasiswa. Dalam pelaksanaannya, mahasiswa membawa dan menyajikan makanan secara bersama-sama untuk kemudian dinikmati secara kolektif. Selain sebagai kegiatan makan, kegiatan ini juga menjadi sarana untuk mempererat rasa keakraban, silaturahmi, dan solidaritas antar mahasiswa Madura. Tradisi makan bersama ini mencerminkan nilai kebersamaan dan gotong royong yang tetap terjaga di tengah kesibukan perkuliahan.', '1770115080_ef6cfa32721c3522c19c.jpg'),
(15, 'rapat bulanan mahasiswa madura', 'rapat bulanan mahasiswa madura', '2025-06-19', 'Rapat bulanan merupakan salah satu kegiatan rutin yang dilaksanakan oleh mahasiswa Madura sebagai sarana koordinasi dan evaluasi program kerja. Kegiatan ini biasanya dihadiri oleh pengurus dan anggota untuk membahas perkembangan kegiatan yang telah dan akan dilaksanakan. Dalam rapat tersebut, mahasiswa menyampaikan laporan, saran, serta masukan terkait pelaksanaan program dan organisasi. Selain sebagai forum diskusi, rapat bulanan ini juga menjadi wadah untuk mempererat komunikasi, kebersamaan, dan rasa tanggung jawab antar mahasiswa Madura. Kegiatan ini mencerminkan komitmen bersama dalam menjaga solidaritas serta keberlangsungan organisasi di tengah aktivitas perkuliahan.', '1770115653_bf9fdb088b310740e965.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `status_penghuni` varchar(150) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `kamar` varchar(10) DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`id_penghuni`, `nama_lengkap`, `nim`, `status_penghuni`, `asal`, `kamar`, `angkatan`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'Mohammad Rizal', '11220541', 'Pengurus', 'Sampang', NULL, NULL, '1770125714_c497f403d77b8f247315.jpeg', '2026-01-25 09:37:14', '2026-02-08 01:36:36'),
(8, 'rizal abraham', '22478766', 'Pengurus', 'Bangkalan', NULL, NULL, '1770125632_cfbc01efca0f6a052277.jpeg', '2026-02-03 06:33:52', '2026-02-03 06:33:52'),
(9, 'Ahmad Fauzan', '22478756', 'Pengurus', 'Pamekasan', NULL, NULL, '1770126377_a808d008d0c22334d5ee.jpeg', '2026-02-03 06:46:17', '2026-02-03 06:46:17'),
(10, 'M. Hafidz Ramadhan', '22478789', 'Pengurus', 'Sumenep', NULL, NULL, '1770126431_ef070fdea345ce9ed248.jpeg', '2026-02-03 06:47:11', '2026-02-03 06:47:11'),
(11, 'Abdul Karim', '22478097', 'Pengurus', 'Bangkalan', NULL, NULL, '1770126476_f86d9089478c9f3d3ae9.jpeg', '2026-02-03 06:47:56', '2026-02-03 06:48:09'),
(12, 'Fathur Rahman', '22478896', 'Pengurus', 'Sampang', NULL, NULL, '1770126532_977eb2b1d9d85a2068fa.jpeg', '2026-02-03 06:48:52', '2026-02-03 06:48:52'),
(13, 'Lukman Hakim', '22478907', 'Pengurus', 'Pamekasan', NULL, NULL, '1770126741_aeebc47e8e52f50125a1.jpeg', '2026-02-03 06:52:21', '2026-02-03 06:52:21'),
(14, 'Syamsul Arifin', '22478379', 'Pengurus', 'Sumenep', NULL, NULL, '1770127143_752402cf34ec12061249.jpeg', '2026-02-03 06:59:03', '2026-02-03 06:59:03'),
(15, 'Ahmad fauzan fairus', '22479086', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770127347_d1e490065e4ba28f8efe.jpeg', '2026-02-03 07:02:27', '2026-02-03 07:02:27'),
(16, 'M. Ridho Pratama', '22478357', 'Mahasiswa', 'Sampang', NULL, NULL, '1770127401_0821608a35f5bd5c87ab.jpeg', '2026-02-03 07:03:21', '2026-02-03 07:03:21'),
(17, 'Fikri Maulana', '11220523', 'Mahasiswa', 'Pamekasan', NULL, NULL, '1770127970_de81815c98bc0e22e13b.jpeg', '2026-02-03 07:04:19', '2026-02-03 07:12:50'),
(18, 'Hasan Basri', '22478797', 'Mahasiswa', 'Pamekasan', NULL, NULL, '1770127505_e601d8c78c14caeb355d.jpeg', '2026-02-03 07:05:05', '2026-02-03 07:05:05'),
(19, 'Ali Imron', '224787643', 'Mahasiswa', 'Sumenep', NULL, NULL, '1770127545_d95b48ccf51ed73d419b.jpeg', '2026-02-03 07:05:45', '2026-02-03 07:05:45'),
(20, 'Farhan Adi Saputra', '112205415', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770127586_11d03b72a44d76e37961.jpeg', '2026-02-03 07:06:26', '2026-02-03 07:06:26'),
(21, 'M. Ilham Nur', '11220741', 'Mahasiswa', 'Sampang', NULL, NULL, '1770127629_d7733dcdf990fb3a6edd.jpeg', '2026-02-03 07:07:09', '2026-02-03 07:07:09'),
(22, 'Akmal Fauzi', '11220096', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770127675_83e729df89ce0eaf1902.jpeg', '2026-02-03 07:07:55', '2026-02-03 07:07:55'),
(23, 'Rofi’i Anshori', '11220876', 'Mahasiswa', 'Sampang', NULL, NULL, '1770127721_d972eb06799c6baa7a4d.jpeg', '2026-02-03 07:08:41', '2026-02-03 07:08:41'),
(24, 'Rizky afriansyah', '11220076', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770186447_efcaabd0ed1c10555e9d.jpeg', '2026-02-03 23:27:27', '2026-02-03 23:30:25'),
(25, 'Muhammad Reza', '11220425', 'Mahasiswa', 'Sampang', NULL, NULL, '1770186492_a9037c9291c02489a747.jpeg', '2026-02-03 23:28:12', '2026-02-03 23:28:12'),
(26, 'Fajar Hidayat', '11220914', 'Mahasiswa', 'Pamekasan', NULL, NULL, '1770186540_fc5d25ad40e71265b468.jpeg', '2026-02-03 23:29:00', '2026-02-03 23:29:00'),
(27, 'Syaiful Hadi', '22478041', 'Mahasiswa', 'Sumenep', NULL, NULL, '1770186719_2991f2d62c933a8e4693.jpeg', '2026-02-03 23:31:59', '2026-02-03 23:31:59'),
(28, 'Muh. Fathurrahman', '22478067', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770186789_3aa5ae4a08d34be52392.jpeg', '2026-02-03 23:33:09', '2026-02-03 23:33:09'),
(29, 'H. Zainal Abidin', '11220594', 'Mahasiswa', 'Pamekasan', NULL, NULL, '1770186864_cba829959ae6652a98d4.jpeg', '2026-02-03 23:34:24', '2026-02-03 23:34:24'),
(30, 'Muhammad Ali', '112205087', 'Mahasiswa', 'Sumenep', NULL, NULL, '1770186901_d9bdc5fcd71c993fbd79.jpeg', '2026-02-03 23:35:01', '2026-02-03 23:35:01'),
(31, 'Syarifuddin', '11220505', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770186943_b8982ad5e27dbabbdcf4.jpeg', '2026-02-03 23:35:43', '2026-02-03 23:35:43'),
(32, 'Saifulloh', '11220471', 'Mahasiswa', 'Sampang', NULL, NULL, '1770186981_fac7ffad84dcebe1f3cb.jpeg', '2026-02-03 23:36:21', '2026-02-03 23:36:21'),
(33, 'Abdul Hakam', '11220044', 'Mahasiswa', 'Bangkalan', NULL, NULL, '1770187070_2bf6d3841901ea69f4e8.jpeg', '2026-02-03 23:37:50', '2026-02-03 23:37:50'),
(34, 'Khoirul Anwar', '11220374', 'Mahasiswa', 'Sumenep', NULL, NULL, '1770187131_5d94314b0dd931c68c79.jpeg', '2026-02-03 23:38:51', '2026-02-03 23:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `judul`, `deskripsi`, `tanggal`, `foto`) VALUES
(3, 'Hisyam Afandi Raih Prestasi Internasional di IYEN12 Malaysia', 'Hisyam Afandi berhasil menorehkan prestasi pada ajang International Youth Excursion Network Malaysia (IYEN12). Dalam kegiatan tersebut, ia meraih Juara 1 The Most Innovative Delegate dan Juara 2 Best Presentation Project. Prestasi ini menunjukkan kemampuan inovasi, kreativitas, serta keterampilan presentasi yang kompetitif di tingkat internasional. Capaian ini menjadi bukti kualitas dan daya saing mahasiswa di kancah global. Keberhasilan ini turut mengharumkan nama institusi dan komunitas mahasiswa Madura Yogyakarta.', '2025-03-11', '1769430681_1769430681_685c66d143f83c9c9069.jpg'),
(0, 'Moh. Zhaid Abil Juara 1 Kategori Seni Solo Creative Dewasa Putra Tingkat Nasional (Kejuaraan Pencak Silat Diponegoro Championship 2', 'Juara 1 Kategori Seni Solo Creative Dewasa Putra Tingkat Nasional\r\nKejuaraan: Pencak Silat Diponegoro Championship 2\r\nAtas prestasinya, Moh. Zhaid Abil berhasil meraih juara pertama pada kategori Seni Solo Creative Dewasa Putra tingkat nasional, menampilkan teknik, kreativitas, dan penguasaan gerak pencak silat yang luar biasa, serta membuktikan kemampuan dan dedikasinya dalam olahraga pencak silat.', '2025-08-14', '1770187889_1770187889_4b0b53785b2b7d682183.png'),
(0, 'Hisyam Afandi  Juara 1 \"MQK kitab Tafsir As-Showi \" Se D.I.Y & Jateng', 'Juara 1 Lomba MQK Kitab Tafsir As-Showi\r\nTingkat: Se D.I.Y & Jawa Tengah\r\nAtas prestasinya, Hisyam Afandi berhasil meraih juara pertama dalam lomba MQK Kitab Tafsir As-Showi tingkat Daerah Istimewa Yogyakarta dan Jawa Tengah, menunjukkan penguasaan ilmu tafsir, kefasihan membaca, serta pemahaman mendalam terhadap kitab As-Showi.', '2025-02-11', '1770188520_1770188520_c7009da1393a5efff3cc.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_asrama`
--
ALTER TABLE `kegiatan_asrama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id_penghuni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kegiatan_asrama`
--
ALTER TABLE `kegiatan_asrama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id_penghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
