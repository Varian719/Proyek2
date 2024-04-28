-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 08:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spin_a_meal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_name`, `password`) VALUES
('admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(5) NOT NULL,
  `nama_jalan` varchar(50) NOT NULL,
  `Kelurahan` varchar(30) NOT NULL,
  `kota/kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id_Menu` int(30) NOT NULL,
  `Menu` varchar(30) NOT NULL,
  `Harga` float NOT NULL,
  `Id_rm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id_Menu`, `Menu`, `Harga`, `Id_rm`) VALUES
(0, 'Ayam Goreng +Nasi', 22000, 1),
(3, 'Mie Yamin', 15000, 3),
(4, 'Nasi Pecel Ayam', 14000, 2),
(5, 'Ayam Geprek+Nasi', 13000, 4),
(6, 'Ayam Goreng Dan  Nasi', 10000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rm` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Rating` int(1) NOT NULL,
  `Komentar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rm`, `username`, `Rating`, `Komentar`) VALUES
(1, 'varian_rhesa', 5, 'good'),
(2, 'varian_rhesa', 5, 'mantap mereun'),
(3, 'varian_rhesa', 5, 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `rumahmakan`
--

CREATE TABLE `rumahmakan` (
  `id_rm` int(10) NOT NULL,
  `nama_rumahmakan` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `lokasi_rm` varchar(500) NOT NULL,
  `no_telp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumahmakan`
--

INSERT INTO `rumahmakan` (`id_rm`, `nama_rumahmakan`, `Alamat`, `lokasi_rm`, `no_telp`) VALUES
(1, 'BFC', 'Jl. Sultan Sulaiman No.96, Sambutan, Kec. Sambutan', '-0.508293615161712, 117.18187513108832', '312311'),
(2, 'Pecel Delicy', 'F48F+R95, Jl. Cipto Mangun Kusumo, Sungai Keledang', '-0.532896557777105, 117.12359911072886', '132'),
(3, 'Warung Mie Yamin Mas', 'Sengkotek, Jl. Cipto Mangunkusumo, Kota Samarinda,', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4114524170719!2d117.12094006955063!3d-0.532807858919247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f0e64068fe9%3A0x2d2a5f716691540b!2sWarung%20Mie%20Yamin%20Mas%20Min!5e0!3m2!1sid!2sid!4v1713839049613!5m2!1sid!2sid', '813454'),
(4, 'Madhe', 'jl cipto mangunkusumo', '1312313123', '131231231'),
(5, 'Mimi Chicken', 'jl. Lambung Mangkurat', '1312412412', '0888888'),
(6, 'rm2', 'jl cipto mangunkusumo', '13245', '0131231231'),
(7, 'Rm3', 'jl.cipto mangunkusumo', '123123131231', '088888'),
(8, 'makan padang', 'jalan juanda', '1231231', '91321312');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('varian_rhesa', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_name`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id_Menu`),
  ADD KEY `Id_rm` (`Id_rm`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rm`,`username`),
  ADD KEY `id_rm` (`id_rm`,`username`),
  ADD KEY `userid` (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  MODIFY `id_rm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`Id_rm`) REFERENCES `rumahmakan` (`id_rm`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_rm`) REFERENCES `rumahmakan` (`id_rm`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
