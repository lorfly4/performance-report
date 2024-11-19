-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2024 at 02:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sistematisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `allianz`
--

CREATE TABLE `allianz` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil_investigasi`
--

CREATE TABLE `analisa_hasil_investigasi` (
  `id` int NOT NULL,
  `hasil_investigasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_sebaran_wilayah_hasil_investigasi`
--

CREATE TABLE `analisa_sebaran_wilayah_hasil_investigasi` (
  `entry_id` int NOT NULL,
  `id` int NOT NULL,
  `analisa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_tat`
--

CREATE TABLE `analisa_tat` (
  `entry_id` int NOT NULL,
  `id` int NOT NULL,
  `tat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_top_wilayah`
--

CREATE TABLE `analisa_top_wilayah` (
  `entry_id` int NOT NULL,
  `id` int NOT NULL,
  `top` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bri`
--

CREATE TABLE `bri` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `periode` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generali`
--

CREATE TABLE `generali` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kesimpulan`
--

CREATE TABLE `kesimpulan` (
  `entry_id` int NOT NULL,
  `id` int NOT NULL,
  `kesimpulan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `msig`
--

CREATE TABLE `msig` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `entry_id` int NOT NULL,
  `id` int NOT NULL,
  `rekomendasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int NOT NULL,
  `result_type` varchar(50) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'admin', 'dim', '563728df0fdd90631ac1e51258e2857d', 'admin'),
(2, 'Raihan Addo', 'addo', 'cb7526a2025073d628317061a9d6a9dd', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allianz`
--
ALTER TABLE `allianz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_hasil_investigasi`
--
ALTER TABLE `analisa_hasil_investigasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `analisa_sebaran_wilayah_hasil_investigasi`
--
ALTER TABLE `analisa_sebaran_wilayah_hasil_investigasi`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `analisa_tat`
--
ALTER TABLE `analisa_tat`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `id` (`entry_id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `analisa_top_wilayah`
--
ALTER TABLE `analisa_top_wilayah`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `generali`
--
ALTER TABLE `generali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `msig`
--
ALTER TABLE `msig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allianz`
--
ALTER TABLE `allianz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_hasil_investigasi`
--
ALTER TABLE `analisa_hasil_investigasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_sebaran_wilayah_hasil_investigasi`
--
ALTER TABLE `analisa_sebaran_wilayah_hasil_investigasi`
  MODIFY `entry_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_tat`
--
ALTER TABLE `analisa_tat`
  MODIFY `entry_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_top_wilayah`
--
ALTER TABLE `analisa_top_wilayah`
  MODIFY `entry_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generali`
--
ALTER TABLE `generali`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  MODIFY `entry_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msig`
--
ALTER TABLE `msig`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `entry_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
