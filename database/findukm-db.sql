-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2018 pada 09.38
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findukm-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'kuliner'),
(2, 'produk_segar'),
(3, 'oleh_khas'),
(4, 'transportasi'),
(5, 'penyewaan'),
(6, 'ukm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_kuliner`
--

CREATE TABLE `menu_kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `id_mk` int(10) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_kuliner`
--

INSERT INTO `menu_kuliner` (`id_kuliner`, `id_mk`, `menu`, `harga`) VALUES
(1, 1, 'Martabak Coklat', 20000),
(2, 1, 'Martabak Keju', 22000),
(3, 2, 'Bakso Babi', 16000),
(4, 3, 'Kue Ulang Tahun', 85000),
(5, 3, 'Pizza (Berbagai varian)', 0),
(6, 3, 'Bakery (berbagai varian)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_ok`
--

CREATE TABLE `menu_ok` (
  `id_menu` int(11) NOT NULL,
  `id_ok` int(11) NOT NULL,
  `sedia` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_ok`
--

INSERT INTO `menu_ok` (`id_menu`, `id_ok`, `sedia`, `harga`) VALUES
(2, 7, 'Kemeja Katun', 'Rp. 200.000 - Rp. 350.000'),
(3, 7, 'Dress Katun', 'Rp. 250.000'),
(6, 7, 'Blus Katun', 'Rp. 130.000 - Rp. 235.000'),
(7, 7, 'Kain Katun', 'Rp. 130.000 - Rp. 200.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_produksegar`
--

CREATE TABLE `menu_produksegar` (
  `id_menu` int(11) NOT NULL,
  `id_segar` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_produksegar`
--

INSERT INTO `menu_produksegar` (`id_menu`, `id_segar`, `menu`, `harga`) VALUES
(1, 4, 'Durian Kecil', 'Rp 10.000/buah'),
(2, 4, 'Durian Besar', 'Rp. 20.000/buah'),
(3, 5, 'Semangka', 'Rp. 7.000-10.000/buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_sewa`
--

CREATE TABLE `menu_sewa` (
  `id_menu` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_transportasi`
--

CREATE TABLE `menu_transportasi` (
  `id_menu` int(11) NOT NULL,
  `id_transportasi` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_ukm`
--

CREATE TABLE `menu_ukm` (
  `id_menu` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `no_rek` int(12) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `jenis_pesanan` varchar(30) NOT NULL,
  `jlh_pesanan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_produk`, `id_mk`, `kode_pos`, `kota`, `nama_rek`, `no_rek`, `bank`, `jenis_pesanan`, `jlh_pesanan`) VALUES
(2, 5, 2, 3, 22384, 'Porsea', 'Andareas Sianipar', 884718741, 'BCA', 'Bakso Babi', 2),
(3, 4, 1, 2, 22382, 'Laguboti', 'Joe Allen Butarbutar', 876678278, 'BCA', 'Martabak Keju', 3),
(6, 4, 1, 1, 22381, 'Laguboti', 'Joe Allen Butarbutar', 123456789, 'BNI', 'Bakso Babi', 2),
(7, 5, 1, 1, 22381, 'Laguboti', 'Andareas Sianipar', 884718741, 'BNI', 'Martabak Coklat', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori` int(10) NOT NULL,
  `nama_ukm` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `hari_buka` varchar(30) NOT NULL,
  `jam_buka` varchar(30) NOT NULL,
  `link` text NOT NULL,
  `favorit` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kategori`, `nama_ukm`, `foto`, `hari_buka`, `jam_buka`, `link`, `favorit`) VALUES
(1, 1, 'Martabak Banditz', '1.jpg', 'Senin - Minggu', '17.00 - 22.00', 'https://goo.gl/maps/ucnMfGGYDom', 1),
(2, 1, 'Bakso Babi', '7.jpg', 'Senin - Minggu', '09.00 - 22.00', 'https://goo.gl/maps/ZgFw7Tcv4C52', 0),
(3, 1, 'Pizza Etnik Toba', '2.jpg', 'Senin - Minggu', '10.00 -17.00', '', 0),
(4, 2, 'Durian', '4.jpg', '', '', 'https://goo.gl/maps/6dZ1pTSKJoK2', 0),
(5, 2, 'Semangka', '6.jpg', 'Senin - Minggu', '10.00 - 17.00', 'https://goo.gl/maps/LPaUP1tYQxk', 0),
(6, 4, 'Binter Travels', '3.jpg', 'Senin - Minggu', '09.00 - 19.00', '', 0),
(7, 3, 'Batikta', '11.jpg', 'Senin - Minggu', '10.00 - 17.00', 'https://goo.gl/maps/89vyzqW7LS72', 0),
(8, 3, 'Phino\'s Artworker', '9.jpg', 'Senin - Minggu', '09.00 - 21.00', 'https://goo.gl/maps/AvGnZAjh17J2', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `telp`, `alamat`, `foto`, `role`) VALUES
(1, '', '', 'admin', 'admin', '', '', '', 'admin'),
(2, '', '', 'user', 'user', '082374224211', 'Jl. Sisingamangaraja Balige', '', 'user'),
(4, 'Joe Allen Butarbutar', 'joeallen@gmail.com', 'joeallen', 'joeallen', '082166457728', 'Rusun 3', '6.png', 'user'),
(5, 'Andareas Sianipar', 'andareas@mail.com', 'andareas', 'andareas', '08123456789', 'Rusun Nazareth', '4.png', 'user'),
(6, 'jo', 'joe.rev7@gmail.com', 'joe', 'joejoe', '082166457728', 'Rusun Nazareth', 'Capture.PNG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu_kuliner`
--
ALTER TABLE `menu_kuliner`
  ADD PRIMARY KEY (`id_kuliner`),
  ADD KEY `id_mk` (`id_mk`);

--
-- Indexes for table `menu_ok`
--
ALTER TABLE `menu_ok`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `oleh_khas` (`id_ok`);

--
-- Indexes for table `menu_produksegar`
--
ALTER TABLE `menu_produksegar`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `produksegar` (`id_segar`);

--
-- Indexes for table `menu_sewa`
--
ALTER TABLE `menu_sewa`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `sewa` (`id_sewa`);

--
-- Indexes for table `menu_transportasi`
--
ALTER TABLE `menu_transportasi`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `transportasi` (`id_transportasi`);

--
-- Indexes for table `menu_ukm`
--
ALTER TABLE `menu_ukm`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `ukm` (`id_ukm`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_users` (`id_user`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_mk` (`id_mk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tes` (`kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_kuliner`
--
ALTER TABLE `menu_kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_ok`
--
ALTER TABLE `menu_ok`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_produksegar`
--
ALTER TABLE `menu_produksegar`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_sewa`
--
ALTER TABLE `menu_sewa`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_transportasi`
--
ALTER TABLE `menu_transportasi`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_ukm`
--
ALTER TABLE `menu_ukm`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_mk`) REFERENCES `menu_kuliner` (`id_kuliner`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `tes` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
