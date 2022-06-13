-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 17.12
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(8, 'Bisquit Cake', '', 'Modern Cake', 10000, 36, 'bisquitcake.jpg'),
(9, 'Croissants Strawberry', '', 'Modern Cake', 15000, 31, 'croissants-stoberry.jpg'),
(10, 'Es Teler Cake', '', 'Modern Cake', 35000, 41, 'estelercake.jpg'),
(11, 'Muffin Cokelat', '', 'Modern Cake', 10000, 50, 'muffin_cokelat.jpg'),
(12, 'Pancake', '', 'Modern Cake', 10000, 50, 'pancake.jpg'),
(13, 'Pie Lemon', '', 'Modern Cake', 10000, 49, 'pie_lemon.jpg'),
(14, 'Pie Coffe Strowberry', '', 'Modern Cake', 15000, 50, 'pie-coffe-stoberry.jpg'),
(15, 'Pie Kurma', '', 'Modern Cake', 15000, 50, 'pie-kurma.jpg'),
(16, 'Quark Tart', '', 'Modern Cake', 10000, 49, 'quarktart.jpg'),
(17, 'Strowberry Roll', '', 'Modern Cake', 15000, 50, 'strawberry-roll.jpg'),
(18, 'Tiramissu', '', 'Modern Cake', 15000, 50, 'triamisu.jpg'),
(19, 'Venus Cake', '', 'Modern Cake', 15000, 50, 'venus_cake.jpg'),
(20, 'Apple Tart', '', 'Modern Cake', 15000, 50, 'appletert.jpg'),
(21, 'Birthday Cake', ' Chocolate Strowberry', 'Birthday Cake', 50000, 49, 'birthaycake_chocolate-stoberry.jpg'),
(22, 'Birthday Cake', 'Cream Maccarons', 'Modern Cake', 50000, 50, 'birthdaycake.jpg'),
(23, 'Birthday Cake', 'Blueberries', 'Modern Cake', 50000, 50, 'birthdaycake-blueberries.jpg'),
(24, 'Birthday Cake', 'Full Cream Chocolate', 'Birthday Cake', 50000, 48, 'birthdaycake-full-cream.jpg'),
(25, 'Birthday Cake', 'Chocolate Lecy', 'Birthday Cake', 50000, 49, 'birthdaycake-leccy.jpg'),
(26, 'Birthday Cake', 'Sommer Kuschen', 'Birthday Cake', 50000, 50, 'birthdaycake-somer.jpg'),
(27, 'Birthday Cake', 'Mango Lecy', 'Birthday Cake', 50000, 50, 'bithdaycake-mango.jpg'),
(28, 'Birthday Cake', 'Quark Berries', 'Modern Cake', 50000, 50, 'cake_quark-berry.jpg'),
(29, 'Cake Balls', '', 'Modern Cake', 10000, 50, 'cake-balls.jpg'),
(30, 'Candy Cake', '', 'Modern Cake', 10000, 50, 'candy_cake.jpg'),
(31, 'Carrot Cake', '', 'Modern Cake', 15000, 50, 'carrot-cake.jpg'),
(32, 'Coffee Cake', '', 'Modern Cake', 15000, 50, 'coffe_cake.jpg'),
(33, 'Cream Cake Strowberry', '', 'Modern Cake', 15000, 50, 'cream_cake-stoberry.jpg'),
(34, 'Creppess', '', 'Modern Cake', 10000, 50, 'crepes.jpg'),
(35, 'Desserts Cake', '', 'Modern Cake', 15000, 50, 'dessertcake.jpg'),
(36, 'Pavlova ', 'Mix Berries', 'Birthday Cake', 50000, 50, 'pavlova-mixed-berries.jpg'),
(37, 'Red Velvet', '', 'Birthday Cake', 50000, 50, 'redvelvet.jpg'),
(38, 'Sponge Cake', 'Chocolate Strowberry', 'Birthday Cake', 50000, 50, 'spongecake_cokelat.jpg'),
(39, 'Black Forest', '', 'Birthday Cake', 50000, 50, 'black-forest-cake.jpg'),
(40, 'Dadar Gulung', '', 'Traditional Cake', 5000, 49, 'Dadar_Gulung.jpg'),
(41, 'Bikang', '', 'Traditional Cake', 5000, 50, 'Bikang.jpg'),
(42, 'Jentik Manis', '', 'Traditional Cake', 5000, 50, 'Jentik_Manis.jpg'),
(43, 'Kue Ku', '', 'Traditional Cake', 5000, 50, 'Kue_“Ku”.jpg'),
(44, 'Kue Bugis Mandi', '', 'Traditional Cake', 5000, 50, 'Kue_Bugis_Mandi.jpg'),
(45, 'Kue Lumpur', '', 'Traditional Cake', 5000, 50, 'Kue_Lumpur.jpg'),
(46, 'Kue Mangkok', '', 'Traditional Cake', 5000, 50, 'Kue_Mangkok.jpg'),
(47, 'Kue Mata Roda', '', 'Traditional Cake', 5000, 50, 'Kue_Mata_Roda.jpg'),
(48, 'Kue Putu Ayu', '', 'Traditional Cake', 5000, 50, 'Kue_Putu_Ayu.jpg'),
(49, 'Kue Talam', '', 'Traditional Cake', 5000, 50, 'Kue_Talam.jpg'),
(50, 'Lemper', '', 'Traditional Cake', 5000, 50, 'Lemper.jpg'),
(51, 'Mendut', '', 'Traditional Cake', 5000, 50, 'Mendut.jpg'),
(52, 'Onde-Onde', '', 'Traditional Cake', 5000, 50, 'Onde-onde.jpg'),
(53, 'Pastel', '', 'Traditional Cake', 5000, 50, 'Pastel.jpg'),
(54, 'Wajik', '', 'Traditional Cake', 5000, 50, 'Wajik.jpg'),
(55, 'Klepon', '', 'Traditional Cake', 5000, 50, 'klepon.jpg'),
(56, 'Akar Kelapa', '', 'Eid Cake', 15000, 50, 'Akar_Kelapa.jpg'),
(57, 'Butter Cookies', '', 'Eid Cake', 15000, 49, 'Butter_Cookies.jpg'),
(58, 'Cokelat Chip Ccookies', '', 'Eid Cake', 15000, 49, 'Cokelat_Chip_Cookies.jpg'),
(59, 'Kastengel', '', 'Eid Cake', 15000, 50, 'Kastengel.jpg'),
(60, 'Kue Kembang Goyang', '', 'Eid Cake', 15000, 50, 'Kue_Kembang_Goyang.jpg'),
(61, 'Kue Puteri Salju', '', 'Eid Cake', 15000, 50, 'Kue_Putri_Salju.jpg'),
(62, 'Kue Semprit', '', 'Eid Cake', 15000, 50, 'Kue_Semprit.jpg'),
(63, 'Lidah Kucing', '', 'Eid Cake', 15000, 50, 'Lidah_Kucing.jpg'),
(64, 'Nastar', '', 'Eid Cake', 15000, 50, 'Nastar.jpg'),
(65, 'Pastel Kering', '', 'Eid Cake', 15000, 50, 'Pastel_Kering.jpg'),
(66, 'Telur Gabus', '', 'Eid Cake', 15000, 50, 'Telur_gabus.jpg'),
(67, 'Cucur', '', 'Traditional Cake', 5000, 50, 'cucur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `pengiriman` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`, `bukti_pembayaran`, `status_pembayaran`, `pengiriman`, `bank`) VALUES
(17, '', '', '2021-12-06 21:05:54', '2021-12-07 21:05:54', 'BACKGROUND SEMINAR WAJIB ENTREPRENEUR copy (2).jpg', 'selesai', 'JNE', 'BRI - xxxxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(5, 8, 8, 'Bisquit Cake', 1, 10000, ''),
(6, 8, 9, 'Croissants Strawberry', 1, 15000, ''),
(7, 9, 10, 'Es Teler Cake', 1, 35000, ''),
(8, 10, 8, 'Bisquit Cake', 1, 10000, ''),
(9, 10, 9, 'Croissants Strawberry', 1, 15000, ''),
(10, 10, 21, 'Birthday Cake', 1, 50000, ''),
(11, 14, 9, 'Croissants Strawberry', 1, 15000, ''),
(12, 14, 10, 'Es Teler Cake', 1, 35000, ''),
(13, 15, 16, 'Quark Tart', 1, 10000, ''),
(14, 15, 40, 'Dadar Gulung', 1, 5000, ''),
(15, 15, 24, 'Birthday Cake', 1, 50000, ''),
(16, 15, 58, 'Cokelat Chip Ccookies', 1, 15000, ''),
(17, 16, 57, 'Butter Cookies', 1, 15000, ''),
(18, 17, 24, 'Birthday Cake', 1, 50000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'Andri Triadi', 'andri', '1234', 2),
(4, 'Inez Yolanda', 'inez', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
