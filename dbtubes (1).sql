-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 05:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `idCafe` bigint(20) UNSIGNED NOT NULL,
  `namaCafe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jamBuka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rangeHarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`idCafe`, `namaCafe`, `deskripsi`, `alamat`, `jamBuka`, `rangeHarga`, `gambar`) VALUES
(2, 'Diagram Cafe', 'Diagram Cafe merupakan sebuah obyek wisata terbaru berupa sajian kuliner dengan tempat nongkrong atau cafe baru yang memiliki konsep klasik.', 'Jl. Telekomunikasi No.237, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40267', '09:00 - 22:00 WIB', 'Rp20.000 - Rp75.000', 'https://drive.google.com/uc?export=view&id=1bKMfi_uVIQyiz3RTDs1YIa8k9ayBsSeG'),
(3, 'Kinokimi Backyard', 'Kinokimi Backyard adalah kedai kopi di Bandung yang merupakan cabang ketiga dari @kinokimicoffee', 'Jl. Buah Batu No.132, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40262', '07:00 - 22:00 WIB', 'Rp30.000 - Rp100.000', 'https://drive.google.com/uc?export=view&id=1cd_PwXhxHBB9fmpJfCKOaSC2FRBjLjQ9'),
(4, 'Jati Kopi', 'Tempat minum kopi ditemani dengan roti bakar khas jati cafe. tempatnya unik, ada yang di dalam ruangan dan di luar dengan tema kayu dan batu. ', 'Jl. Talaga Bodas No. 44, Burangrang, Bandung, Jawa Barat, 40262', '07:00 - 22:00 WIB', 'Rp30.000 - Rp100.000', 'https://drive.google.com/uc?export=view&id=1TBL5Nbt9aTpCrsZSxttYtk7T7EUTABAi'),
(5, 'Eskalasi Space', 'Koffie, Pastry & Relaxing Spot', 'Jl. Cijagra IB No.8, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265', '08:00 - 22:00 WIB', 'Rp25.000 - Rp75.000', 'https://drive.google.com/uc?export=view&id=147orqG-UdpqmA5wAygJVPGgJpQkHD6lC'),
(6, 'Temanlama Cihapit', 'Daya tarik utama dari Temanlama Cendana Cihapit adalah desain bangunannya yang mengusung konsep minimalis modern berlantai 2 yang unik.', 'Jl. Cendana No.10, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114', '08:00 - 22:00 WIB', 'Rp30.000 - Rp100.000', 'https://drive.google.com/uc?export=view&id=1oAT-EgwLENPbCavR3e09JAWsAD_Z4T3u'),
(7, 'Lalana Social Space', 'A Healing & Sunset Space Inside Bojongsoang.', 'Jl. Cikoneng, Bojongsari, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40288', '08:00 - 22:00 WIB', 'Rp30.000 - Rp100.000', 'https://drive.google.com/uc?export=view&id=1OrXpMBy35nIMO-o00fFr-EOj7VUxUFqr'),
(8, 'Kopi Toko Djawa Buah Batu', 'Kopi Toko Djawa merupakan sebuah brand yang menjual berbagai sajian kopi. Salah satu sajian khas yang ditawarkan yaitu Es Kopi Toko Djawa.', 'Jl. Buah Batu No. 163, Buah Batu, Bandung', '08:00 - 22:00 WIB', 'Rp25.000 - Rp75.000', 'https://drive.google.com/uc?export=view&id=1sxL2jy-hiIzjs9oVpIS-dmEMtvWOMbhh'),
(9, 'Bagi Kopi Buah Batu', 'Bagi Kopi merupakan salah satu coffee chain company yang berkembang pesat bergerak di bidang food & beverage yang memiliki tujuan untuk menjadi salah satu brand kopi terbesar di Indonesia yang mengusung konsep Social & Community Hub.', 'Jl. Reog No. 10, Buah Batu, Bandung', '08:00 - 22:00 WIB', 'Rp20.000 - Rp50.000', 'https://drive.google.com/uc?export=view&id=1r3iG5y4XgBCY6q9iKr550PF9k16Vyqrd'),
(10, 'Bodas Coffee', 'Bringing delightful artisanal dessert choices, and a whole new experience of enjoying coffee in Bandung', 'Jl. Talaga Bodas No. 64, Burangrang, Bandung', '08:00 - 22:00 WIB', 'Rp50.000 - Rp100.000', 'https://drive.google.com/uc?export=view&id=1j0vYAurJHwDTzGF5g1lGNww-IkCglbpw'),
(11, 'Yumaju Coffee 3.0 Buah Batu', '#collaborationovercoffee', 'Jl. Buah Batu No.140, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40287', '08:00 - 22:00 WIB', 'Rp30.000 - Rp100.000', 'https://drive.google.com/uc?export=view&id=17NEKjxHLTLx2Hjsfm3Sr6FS6ouGodP9Y');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_04_08_141113_create_user_table', 1),
(3, '2023_04_12_051414_create_cafe_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'qwerty', 'qwerty'),
(2, 'a', '$2y$10$fxe4gdzAKqk0FWBc3mG./eDRJMVoTpSAQUW/vRKkkEAhvEiX9N0v2'),
(3, 'b', '$2y$10$mIpAyX5evEG2HmJ7IZIZ4OX0JEvALYqpZMCGgGSgSAV/3UCxzxTV6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`idCafe`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `idCafe` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
