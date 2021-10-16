-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2021 at 12:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `spbu_produk`
--

CREATE TABLE `spbu_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` double NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL DEFAULT 'Admin',
  `update_time` datetime DEFAULT current_timestamp(),
  `updated_by` varchar(255) DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spbu_transaksi`
--

CREATE TABLE `spbu_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jenis_bahan_bakar` int(11) NOT NULL,
  `harga_bahan_bakar` int(11) NOT NULL,
  `beli_rupiah` double NOT NULL,
  `beli_liter` double NOT NULL,
  `created_by` varchar(255) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spbu_produk`
--
ALTER TABLE `spbu_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `spbu_transaksi`
--
ALTER TABLE `spbu_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spbu_produk`
--
ALTER TABLE `spbu_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spbu_transaksi`
--
ALTER TABLE `spbu_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
