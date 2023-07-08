-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 05:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sparklens1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `is_checkout` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `user_id`, `product_id`, `qty`, `subtotal`, `is_checkout`) VALUES
(1, 6, 6, 1, '190000', 1),
(2, 6, 5, 1, '160000', 1),
(3, 6, 6, 1, '190000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expedition`
--

CREATE TABLE `expedition` (
  `id_expedition` bigint(20) UNSIGNED NOT NULL,
  `expedition` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expedition`
--

INSERT INTO `expedition` (`id_expedition`, `expedition`) VALUES
(1, 'JNE'),
(2, 'J&T Ekspress'),
(3, 'POS Indonesia'),
(4, 'TIKI'),
(5, 'SiCepat'),
(6, 'Ninja Express');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `scale` varchar(50) DEFAULT NULL,
  `rotation` varchar(50) DEFAULT NULL,
  `glb` varchar(100) DEFAULT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `slug`, `price`, `stock`, `description`, `position`, `scale`, `rotation`, `glb`, `photo`) VALUES
(2, 'Kacamata Frame Besar', 'kacamata-frame-besar', 150000, 100, 'Kacamata yang frame nya besar, cocok buat mak mak', '0 0.2 0.82', '2.1 2.1 2.1', '0 180 0', 'kacamata_frame__besar.glb', '5_PNG61d4f15bcd759.png'),
(3, 'Kacamata Harry', 'kacamata-harry', 120000, 130, 'Kacamatanya Harry Potter', '0 -0.05 0.88', '0.06 0.06 0.06', '0 90 0', 'kacamata_harry.glb', '2_PNG61d4f0f526340.png'),
(4, 'Kacamata Hitam', 'kacamata-hitam', 150000, 150, 'Kacamata yang frame nya warnanya hitam', '0 0.2 0.8', '0.56 0.51 0.51', '0 0 0', 'kacamata_hitam.glb', '1_PNG61d4f0be7ccca.png'),
(5, 'Kacamata Oranye', 'kacamata-oranye', 160000, 118, 'Kacamata yang frame nya oranye', '0 0.3 0.8', '0.077 0.077 0.077', '0 0 0', 'kacamata_oranye.glb', '3_PNG61d4f110d6620.png'),
(6, 'Kacamata Simple Steel', 'kacamata-simple-steel', 190000, 156, 'Kacamata yang simpel besi aja gitu', '0 0 0.8', '0.23 0.23 0.23', '0 0 0', 'kacamata_simple_steel.glb', '4_PNG61d4f12fde550.png'),
(14, 'tes', 'tes', 1, 1, 'tes', '123', '123', '123', 'glasses', '2_PNG61d4f0f5263401.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` bigint(20) UNSIGNED NOT NULL,
  `transaction_status_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `recipient_name` varchar(200) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `postal_code` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `proof_of_payment` varchar(200) DEFAULT NULL,
  `expedition` varchar(50) DEFAULT NULL,
  `receipt_number` varchar(100) DEFAULT NULL,
  `transaction_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `transaction_status_id`, `user_id`, `recipient_name`, `phone_number`, `postal_code`, `address`, `proof_of_payment`, `expedition`, `receipt_number`, `transaction_date`) VALUES
(1, 3, 6, 'Customer', '123', '13', 'coba', '1.PNG', 'Ninja Express', '12345', '2023-06-25'),
(2, 4, 6, 'tes', '123', '123', 'tes', 'Screenshot_(3).png', 'SiCepat', '123', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id_transaction_detail` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`id_transaction_detail`, `transaction_id`, `cart_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_status`
--

CREATE TABLE `transaction_status` (
  `id_transaction_status` bigint(20) UNSIGNED NOT NULL,
  `transaction_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_status`
--

INSERT INTO `transaction_status` (`id_transaction_status`, `transaction_status`) VALUES
(1, 'Menunggu Konfirmasi'),
(2, 'Pesanan Sedang Dikemas'),
(3, 'Pesanan Sedang Dalam Perjalanan'),
(4, 'Pesanan Sudah Di Terima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `role_id`) VALUES
(5, 'Admin', 'admin@sparklens.com', '$2y$10$2.K7q7T9dbsnrLG7x8GlOeefTG7wkz2liNYR.3u1yq/O7XBJ8732i', 1),
(6, 'Customer', 'customer@sparklens.com', '$2y$10$ipL8o2z8hp5WDGOojRfJiOwPr3.80MqWXYmgFo4zeqRyNZhdVSZuK', 2),
(8, 'tes', 'tes@gmail.com', '$2y$10$iSlsk8iZcNWmgQ/SDAa6Vesd4N8KuK5T1L8ij/Eo9hYOmLpHn32WK', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `expedition`
--
ALTER TABLE `expedition`
  ADD PRIMARY KEY (`id_expedition`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id_transaction_detail`);

--
-- Indexes for table `transaction_status`
--
ALTER TABLE `transaction_status`
  ADD PRIMARY KEY (`id_transaction_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expedition`
--
ALTER TABLE `expedition`
  MODIFY `id_expedition` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id_transaction_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction_status`
--
ALTER TABLE `transaction_status`
  MODIFY `id_transaction_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
