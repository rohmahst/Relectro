-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relectro`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `deskripsi` text DEFAULT NULL,
  `harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `image`, `deskripsi`, `harga`) VALUES
(1, 'Voltsillam', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'embrace sticky solutions', 896334),
(2, 'Zaam-Dox', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'benchmark turn-key paradigms', 808231),
(3, 'Lotstring', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'drive seamless e-business', 476402),
(4, 'Treeflex', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'recontextualize scalable metrics', 121391),
(5, 'Daltfresh', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'orchestrate granular experiences', 486296),
(6, 'Y-find', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'enable turn-key bandwidth', 615137),
(7, 'Zaam-Dox', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'extend holistic vortals', 746548),
(8, 'Sonsing', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'benchmark cutting-edge communities', 487389),
(9, 'It', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'embrace back-end architectures', 971658),
(10, 'Daltfresh', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'evolve cross-platform infomediaries', 516987),
(11, 'Stringtough', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'strategize cross-platform action-items', 942208),
(12, 'Redhold', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'visualize killer models', 723766),
(13, 'Redhold', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'integrate granular systems', 327578),
(14, 'Tempsoft', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'revolutionize front-end e-services', 223925),
(15, 'Holdlamis', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'envisioneer user-centric niches', 381349),
(16, 'Alpha', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'benchmark plug-and-play content', 397113),
(17, 'Otcom', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'architect cutting-edge supply-chains', 327118),
(18, 'Ronstring', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'implement transparent experiences', 331786),
(19, 'Alphazap', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'e-enable turn-key niches', 676393),
(20, 'Regrant', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'incubate integrated applications', 656640),
(21, 'Bamity', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'deploy customized schemas', 795058),
(22, 'Fix San', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'grow visionary e-commerce', 743563),
(23, 'Fixflex', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'transition rich action-items', 376630),
(24, 'Namfix', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'grow value-added models', 634665),
(25, 'Stringtough', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'synergize dot-com systems', 164603),
(26, 'Bamity', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'implement transparent supply-chains', 382309),
(27, 'Konklux', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'drive e-business markets', 774135),
(28, 'Konklux', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'synergize global applications', 670198),
(29, 'Solarbreeze', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'harness granular infomediaries', 989797),
(30, 'Toughjoyfax', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'reinvent scalable bandwidth', 851323),
(31, 'Fintone', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'enhance real-time initiatives', 562870),
(32, 'Fixflex', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'generate scalable markets', 397817),
(33, 'Treeflex', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'incubate sexy niches', 462311),
(34, 'Temp', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'recontextualize B2B systems', 477550),
(35, 'Ronstring', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'morph distributed applications', 301250),
(36, 'Lotstring', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'empower end-to-end bandwidth', 660122),
(37, 'Aerified', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'expedite interactive communities', 230987),
(38, 'Latlux', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'enable proactive functionalities', 727997),
(39, 'Job', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'orchestrate frictionless applications', 509391),
(40, 'Sonsing', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'unleash turn-key e-markets', 551345),
(41, 'Hatity', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'recontextualize dot-com ROI', 788042),
(42, 'Fixflex', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'seize bleeding-edge synergies', 267128),
(43, 'Kanlam', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'benchmark one-to-one markets', 985346),
(44, 'Viva', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'monetize revolutionary methodologies', 129985),
(45, 'Zaam-Dox', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'visualize synergistic experiences', 772057),
(46, 'Sonsing', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'strategize bleeding-edge users', 872996),
(47, 'Y-Solowarm', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'architect frictionless functionalities', 203444),
(48, 'Bigtax', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'integrate ubiquitous e-tailers', 262124),
(49, 'Bytecard', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'empower dot-com niches', 287764),
(50, 'Tempsoft', 'acer-swift-3-sf314-512-512t-FpBl-pure-silver-modelpreview.png\r\n', 'synergize world-class networks', 703772);

-- --------------------------------------------------------

--
-- Table structure for table `cara_pembayaran`
--

CREATE TABLE `cara_pembayaran` (
  `id` int(11) NOT NULL,
  `kode_metode` varchar(3) NOT NULL,
  `nama_metode` varchar(30) DEFAULT NULL,
  `cara_bayar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cara_pembayaran`
--

INSERT INTO `cara_pembayaran` (`id`, `kode_metode`, `nama_metode`, `cara_bayar`) VALUES
(1, 'cod', 'Cash On Delivery', '<p>Konsumen dapat membayar tagihan pesanan ketika barang yang dipesan telah sampai di tempat tuju</p>\r\n'),
(2, 'bca', 'Transfer Bank (BCA)', '<h2><strong>1. Melalui ATM</strong></h2>\n\n<ul>\n	<li>\n	<p>Masukkan kartu dan ketikkan nomor PIN di ATM BCA</p>\n	</li>\n	<li>\n	<p>Pilih menu &ldquo;Transaksi Lainnya&rdquo;, lalu pilih &ldquo;Transfer&rdquo;</p>\n	</li>\n	<li>\n	<p>Pilih &ldquo;ke Rekening BCA Virtual Account&rdquo;</p>\n	</li>\n	<li>\n	<p>Masukkan nomor&nbsp;<em>virtual account</em>, kemudian tekan &ldquo;Benar&rdquo;</p>\n	</li>\n	<li>\n	<p>Masukkan nominal yang akan dibayarkan, lalu tekan &ldquo;Benar&rdquo; lagi</p>\n	</li>\n	<li>\n	<p><strong>Masukkan Kode Pembayaran (Invoice Number)</strong></p>\n	</li>\n	<li>\n	<p>Setelah layar menampilkan informasi pembayaran, silakan cek kembali nomor&nbsp;<em>virtual account</em>, total pembayaran, serta informasi lainnya</p>\n	</li>\n	<li>\n	<p>Jika seluruhnya sesuai, maka tekan &ldquo;Ya&rdquo;</p>\n	</li>\n	<li>\n	<p>Pembayaran pun selesai</p>\n	</li>\n</ul>\n\n<h2><strong>2. Me</strong><strong>lalui BCA Mobile</strong></h2>\n\n<ul>\n	<li>\n	<p><em>Login</em>&nbsp;ke aplikasi BCA Mobile, lalu pilih &ldquo;m-BCA&rdquo; dan masukkan kode akses</p>\n	</li>\n	<li>\n	<p>Pilih &ldquo;m-Transfer&rdquo;, lalu lanjut ke &ldquo;BCA Virtual Account&rdquo;</p>\n	</li>\n	<li>\n	<p>Masukkan nomor&nbsp;<em>virtual account</em>&nbsp;lalu masukkan jumlah yang akan dibayarkan</p>\n	</li>\n	<li>\n	<p><strong>Masukkan Kode Pembayaran (Invoice Number)</strong></p>\n	</li>\n	<li>\n	<p>Masukkan PIN m-BCA</p>\n	</li>\n	<li>\n	<p>Pembayaran selesai dilakukan</p>\n	</li>\n</ul>\n\n<h2><strong>3. Me</strong><strong>lalui Klik BCA&nbsp;</strong></h2>\n\n<p>Berikut cara transfer virtual account BCA melalui Klik BCA:</p>\n\n<h3><strong>K</strong><strong>lik BCA Individu</strong></h3>\n\n<ul>\n	<li>\n	<p><em>Login</em>&nbsp;ke aplikasi Klik BCA Individu, masukkan user ID dan PIN</p>\n	</li>\n	<li>\n	<p>Pilih menu &ldquo;Transfer Dana&rdquo;, selanjutnya pilih &ldquo;Transfer ke BCA Virtual Account&rdquo;</p>\n	</li>\n	<li>\n	<p>Masukkan nomor&nbsp;<em>virtual account</em>&nbsp;yang merupakan tujuan pembayaran Anda</p>\n	</li>\n	<li>\n	<p>Masukkan jumlah pembayaran dan lakukan validasi untuk memastikan semuanya selesai</p>\n	</li>\n	<li>\n	<p><strong>Masukkan Kode Pembayaran (Invoice Number)</strong></p>\n	</li>\n	<li>\n	<p>Masukkan kode yang diperoleh dari KEYBCA APPLI 1, kemudian klik &ldquo;Kirim&rdquo;</p>\n	</li>\n	<li>\n	<p>Transaksi selesai</p>\n	</li>\n</ul>\n\n<h3><strong>Klik B</strong><strong>CA Bisnis</strong></h3>\n\n<ul>\n	<li>\n	<p>Pastikan Anda telah&nbsp;<em>login</em>&nbsp;ke akun Klik BCA Bisnis</p>\n	</li>\n	<li>\n	<p>Pilih menu &ldquo;Transfer Dana&rdquo;, &ldquo;Daftar Transfer&rdquo;, lalu &ldquo;Tambah&rdquo;</p>\n	</li>\n	<li>\n	<p>Masukkan kode&nbsp;<em>virtual account</em>&nbsp;BCA, pilih menu &ldquo;Kirim&rdquo;, lalu pilih &ldquo;Transfer Dana&rdquo;</p>\n	</li>\n	<li>\n	<p>Klik &ldquo;ke BCA Virtual Account&rdquo;, lalu pilih rekening sumber dana dan nomor&nbsp;<em>virtual account</em>&nbsp;</p>\n	</li>\n	<li>\n	<p>Masukkan jumlah yang akan dibayarkan, pilih &ldquo;Kirim&rdquo;</p>\n	</li>\n	<li>\n	<p><strong>Masukkan Kode Pembayaran (Invoice Number)</strong></p>\n	</li>\n	<li>\n	<p>Lakukan validasi sampai data berhasil di-<em>input</em>&nbsp;lalu pilih &ldquo;Simpan&rdquo;</p>\n	</li>\n	<li>\n	<p>Pilih &ldquo;Transfer Dana&rdquo;, lalu &ldquo;Otorisasi Transaksi&rdquo; untuk melanjutkan transaksi sampai selesai</p>\n	</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `id_cara_pembayaran` int(11) DEFAULT NULL,
  `id_keranjang` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `nama_pembeli` varchar(255) DEFAULT NULL,
  `email_pembeli` varchar(100) DEFAULT NULL,
  `alamat_pembeli` text DEFAULT NULL,
  `no_hp` decimal(12,0) DEFAULT NULL,
  `total_harga` float DEFAULT NULL,
  `status` smallint(6) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_cara_pembayaran`, `id_keranjang`, `id_user`, `invoice_number`, `nama_pembeli`, `email_pembeli`, `alamat_pembeli`, `no_hp`, `total_harga`, `status`) VALUES
(14, 2, 2, 4, 'INV-2206122026144', 'Rafibr', 'rdf399@gmail.com', 'Jl. Janar Putih Pasar Batuah No.37', '82255303169', 5637950, 0),
(15, NULL, 42, 4, 'INV-2206122055384', 'Rafibr', 'rdf399@gmail.com', 'Jl. Janar Putih Pasar Batuah No.37', '82255303169', 788639, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isi_keranjang`
--

CREATE TABLE `isi_keranjang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_keranjang`
--

INSERT INTO `isi_keranjang` (`id`, `id_barang`, `id_keranjang`) VALUES
(1, 5, 2),
(2, 12, 2),
(3, 21, 2),
(4, 44, 2),
(5, 11, 2),
(6, 31, 2),
(7, 5, 2),
(8, 1, 2),
(9, 6, 2),
(13, 0, 42),
(16, 8, 42),
(17, 35, 42),
(20, 3, 0),
(21, 3, 44);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status_keranjang` smallint(6) DEFAULT NULL COMMENT '0: Belum Checkout (masih bisa nambah barang)\r\n\r\n1: Sudah Checkou (tidak bisa nambah barang/sudah masuk invoice)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `status_keranjang`) VALUES
(2, 4, 1),
(42, 4, 1),
(43, 4, 0),
(44, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` decimal(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `alamat`, `no_hp`) VALUES
(4, 'Rafibr', 'rdf399@gmail.com', '$2y$10$zFNFTL47bG.cH7RmPVXMg.ejAh2Th2l4x4Bji3oYrW80Vy3I7m/76', 'Jl. Janar Putih Pasar Batuah No.37', '82255303169');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cara_pembayaran`
--
ALTER TABLE `cara_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_keranjang`
--
ALTER TABLE `isi_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cara_pembayaran`
--
ALTER TABLE `cara_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `isi_keranjang`
--
ALTER TABLE `isi_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
