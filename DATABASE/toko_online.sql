-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2022 pada 13.58
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `harga` text NOT NULL,
  `foto_produk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES
(1, 'Rubik 3x3', 'fastcube', '30.000', 'rubik3x3.jpg'),
(2, 'Rubik 3x3', 'Agak jelek', '15.000', 'rubik3x3.1.jpg'),
(3, 'Rubik 4X4', 'Slow cube', '100.000', 'rubik4x4.jpg'),
(4, 'Rubik 4x4 Gan', 'Fast cube Gan', '400.000', 'rubik4x4_gan.jpg'),
(5, 'Rubik Mirror Gan', 'Rubik mirror terbagus saat ini', '450.000', 'mirror Gan.jpg'),
(6, 'Rubik Mirror Gold', 'Rubik Mirror Gold', '50.000', 'mirror_gold.jpg'),
(7, 'Rubik Mirror Silver', 'Rubik Mirror Silver', '50.000', 'mirror silver.jpg'),
(8, 'Rubik Megaminx', 'Bagus cuy', '141.000', 'rubik megaminx.jpg'),
(9, 'HP OMEN 16', 'HP OMEN 16 memiliki ukuran layar 16,1 inci dengan resolusi full HD yang didukung oleh grafis dari AMD RDNA™ 2 dan fitur smart access memory.', '25.000.000', 'HP OMEN 16.jpg'),
(10, 'Supra Bapak', 'Motor terkuat di dunia', '*Sold Out', 'supra bapak.jpg'),
(11, 'Kamu nanya?', 'Kamu bertanya tanya', '999.999.999', 'kamu nanya.jpg'),
(13, 'Gomu Gomu no Mi', 'Katanya paling kuat sih', '435.315.102', 'gomugomu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `id_produk` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` enum('Proses','Dikirim','Sampai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_produk`, `id_user`, `nama_produk`, `foto_produk`, `jumlah`, `tgl_beli`, `tgl_selesai`, `status`) VALUES
(7, 5, 6, 'Rubik Mirror Gan', 'mirror Gan.jpg', 2, '2022-11-13', '2022-11-13', 'Sampai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_tlp` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('user','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `gender`, `alamat`, `no_tlp`, `username`, `password`, `status`) VALUES
(1, 'Muhammad Radya Iftikhar', 'Laki-Laki', 'Mataram', '087716212000', 'radya', '123', 'petugas'),
(6, 'Aditya', 'Laki-Laki', 'Bumi', '97382716', '123', '123', 'user'),
(9, 'Raiandra', 'Laki-Laki', 'Bumi', '67543214', 'rai', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
