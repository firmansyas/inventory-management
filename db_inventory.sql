-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Feb 2018 pada 16.37
-- Versi Server: 10.1.29-MariaDB
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
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_izin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `asal_negara` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `spesifikasi_khusus` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `gambar_barang` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `kode_supplier` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kategori_barang` int(10) UNSIGNED NOT NULL,
  `merk_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `kode_customer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama_customer` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat_kantor` text COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `notelp_1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `notelp_2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_beli`
--

CREATE TABLE `detail_beli` (
  `nota_beli` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_satuan` double NOT NULL,
  `total_harga` double NOT NULL,
  `diskon` decimal(8,2) NOT NULL,
  `harga_setelah_diskon` double NOT NULL,
  `no_baris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jual`
--

CREATE TABLE `detail_jual` (
  `nota_jual` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_satuan` double NOT NULL,
  `total_harga` double NOT NULL,
  `diskon` decimal(8,2) NOT NULL,
  `harga_setelah_diskon` double NOT NULL,
  `no_baris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_po`
--

CREATE TABLE `detail_po` (
  `surat_po` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `no_baris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_retur`
--

CREATE TABLE `detail_retur` (
  `nota_retur` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `no_baris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `kode` int(10) UNSIGNED NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk_barang`
--

CREATE TABLE `merk_barang` (
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `asal_negara` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kode_supplier` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_07_000000_create_customer_table', 1),
(4, '2018_02_07_000001_create_tagihan_table', 1),
(5, '2018_02_07_000003_create_supplier_table', 1),
(6, '2018_02_07_000004_create_nota_retur_table', 1),
(7, '2018_02_07_000005_create_kategori_barang_table', 1),
(8, '2018_02_07_000006_create_surat_po_table', 1),
(9, '2018_02_07_000007_create_merk_barang_table', 1),
(10, '2018_02_07_000008_create_nota_beli_table', 1),
(11, '2018_02_07_000009_create_nota_jual_table', 1),
(12, '2018_02_07_000010_create_barang_table', 1),
(13, '2018_02_07_000011_create_detail_po_table', 1),
(14, '2018_02_07_000012_create_detail_retur_table', 1),
(15, '2018_02_07_000013_create_detail_beli_table', 1),
(16, '2018_02_07_000014_create_detail_jual_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_beli`
--

CREATE TABLE `nota_beli` (
  `nomor` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `grand_total` double NOT NULL,
  `terbilang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_supplier` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_jual`
--

CREATE TABLE `nota_jual` (
  `nomor` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `no_po` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_po` date DEFAULT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `diantar_oleh` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `pajak` decimal(8,2) NOT NULL,
  `down_payment` double NOT NULL,
  `grand_total` double NOT NULL,
  `terbilang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_customer` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_retur`
--

CREATE TABLE `nota_retur` (
  `nomor` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_retur` date NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `diterima_oleh` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `alasan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama_supplier` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_kantor` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `notelp_1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `notelp_2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `asal_negara` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_po`
--

CREATE TABLE `surat_po` (
  `nomor` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `untuk` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagihan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` enum('Admin','User') COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `jabatan`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$NmO/IvfShAWwT1DxrrqAHexC7I4ICty6CIUi8vmBYoRWYDOsHW53i', 'Admin', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `fk_barang_merk_barang1_idx` (`merk_barang`),
  ADD KEY `fk_barang_kategori_barang1_idx` (`kategori_barang`),
  ADD KEY `fk_barang_supplier_idx` (`kode_supplier`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_customer`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD KEY `fk_nota_beli_has_barang_barang1_idx` (`kode_barang`),
  ADD KEY `fk_nota_beli_has_barang_nota_beli1_idx` (`nota_beli`);

--
-- Indexes for table `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD KEY `fk_nota_jual_has_barang_barang1_idx` (`kode_barang`),
  ADD KEY `fk_nota_jual_has_barang_nota_jual1_idx` (`nota_jual`);

--
-- Indexes for table `detail_po`
--
ALTER TABLE `detail_po`
  ADD KEY `fk_surat_po_has_barang_barang1_idx` (`kode_barang`),
  ADD KEY `fk_surat_po_has_barang_surat_po1_idx` (`surat_po`);

--
-- Indexes for table `detail_retur`
--
ALTER TABLE `detail_retur`
  ADD KEY `fk_nota_retur_has_barang_barang1_idx` (`kode_barang`),
  ADD KEY `fk_nota_retur_has_barang_nota_retur1_idx` (`nota_retur`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `fk_merk_barang_supplier1_idx` (`kode_supplier`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota_beli`
--
ALTER TABLE `nota_beli`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `fk_nota_beli_supplier1_idx` (`kode_supplier`);

--
-- Indexes for table `nota_jual`
--
ALTER TABLE `nota_jual`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `fk_nota_jual_customer1_idx` (`kode_customer`);

--
-- Indexes for table `nota_retur`
--
ALTER TABLE `nota_retur`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `surat_po`
--
ALTER TABLE `surat_po`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
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
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `kode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_kategori_barang1_idx` FOREIGN KEY (`kategori_barang`) REFERENCES `kategori_barang` (`kode`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_merk_barang1_idx` FOREIGN KEY (`merk_barang`) REFERENCES `merk_barang` (`kode`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_supplier_idx` FOREIGN KEY (`kode_supplier`) REFERENCES `supplier` (`kode_supplier`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD CONSTRAINT `fk_nota_beli_has_barang_barang1_idx` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_beli_has_barang_nota_beli1_idx` FOREIGN KEY (`nota_beli`) REFERENCES `nota_beli` (`nomor`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD CONSTRAINT `fk_nota_jual_has_barang_barang1_idx` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_jual_has_barang_nota_jual1_idx` FOREIGN KEY (`nota_jual`) REFERENCES `nota_jual` (`nomor`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_po`
--
ALTER TABLE `detail_po`
  ADD CONSTRAINT `fk_surat_po_has_barang_barang1_idx` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_surat_po_has_barang_surat_po1_idx` FOREIGN KEY (`surat_po`) REFERENCES `surat_po` (`nomor`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_retur`
--
ALTER TABLE `detail_retur`
  ADD CONSTRAINT `fk_nota_retur_has_barang_barang1_idx` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_retur_has_barang_nota_retur1_idx` FOREIGN KEY (`nota_retur`) REFERENCES `nota_retur` (`nomor`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD CONSTRAINT `fk_merk_barang_supplier1_idx` FOREIGN KEY (`kode_supplier`) REFERENCES `supplier` (`kode_supplier`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `nota_beli`
--
ALTER TABLE `nota_beli`
  ADD CONSTRAINT `fk_nota_beli_supplier1_idx` FOREIGN KEY (`kode_supplier`) REFERENCES `supplier` (`kode_supplier`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `nota_jual`
--
ALTER TABLE `nota_jual`
  ADD CONSTRAINT `fk_nota_jual_customer1_idx` FOREIGN KEY (`kode_customer`) REFERENCES `customer` (`kode_customer`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
