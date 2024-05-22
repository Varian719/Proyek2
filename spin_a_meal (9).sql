-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 01:38 PM
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
(1, 'Ayam Goreng +Nasi', 22000, 1),
(2, 'Mie Yamin', 15000, 3),
(4, 'Nasi Pecel Ayam', 14000, 2),
(5, 'Ayam Geprek+Nasi', 13000, 4),
(6, 'Ayam Goreng Dan  Nasi', 10000, 5),
(7, 'Ayam Geprek dan nasi', 15000, 5);

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
(2, 'vr711', 4, 'nice'),
(3, 'varian_rhesa', 5, 'gg'),
(3, 'vr711', 4, 'good'),
(4, 'varian_rhesa', 5, 'very good and cheap'),
(5, 'varian_rhesa', 4, 'lumayan '),
(5, 'vr711', 5, 'nice'),
(5, 'vr722', 3, ''),
(6, 'vr722', 2, 'Slow');

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
(1, 'BFC', 'Jl. Sultan Sulaiman No.96, Sambutan, Kec. Sambutan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.3537712388159!2d117.18088785822523!3d-0.5098756542117485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5d5ed62067e75%3A0xea6d328080402313!2sBFC%20Store%20Sambutan!5e0!3m2!1sid!2sid!4v1714399140480!5m2!1sid!2sid', '312311'),
(2, 'Pecel Delicy', 'F48F+R95, Jl. Cipto Mangun Kusumo, Sungai Keledang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6456907316597!2d117.1209207742348!3d-0.5329914994617895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67e2b6c999e0d%3A0xf2e444b4ef5fe3a9!2sRumah%20Makan%20Pecel%20Delicy!5e0!3m2!1sid!2sid!4v1714399344523!5m2!1sid!2sid', '132'),
(3, 'Warung Mie Yamin Mas', 'Sengkotek, Jl. Cipto Mangunkusumo, Kota Samarinda,', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4114524170719!2d117.12094006955063!3d-0.532807858919247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f0e64068fe9%3A0x2d2a5f716691540b!2sWarung%20Mie%20Yamin%20Mas%20Min!5e0!3m2!1sid!2sid!4v1713839049613!5m2!1sid!2sid', '813454'),
(4, 'Madhe', 'jl cipto mangunkusumo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d419.3598642938243!2d117.12235070001157!3d-0.532707084648233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f0072e926ef%3A0xca151461c4394d5b!2sWarung%20Makdhe!5e0!3m2!1sid!2sid!4v1714399435728!5m2!1sid!2sid', '131231231'),
(5, 'Mimi Chicken', 'jl. Lambung Mangkurat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.673920372825!2d117.15839717109866!3d-0.48746779841984966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f468f5de2e1%3A0x115aeece19e5f033!2sMimi%20Chicken%20Lambung%20Mangkurat!5e0!3m2!1sid!2sid!4v1714999371002!5m2!1sid!2sid', '0888888'),
(6, ' Memey Chicken', 'Jl. Cipto Mangunkusumo, Harapan Baru, Kec. Loa Jan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.8968919810054!2d117.12246539763525!3d-0.5327920627703858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f9000e9ccdb%3A0xc9d5e2f6e32ee334!2sMemey%20Chicken!5e0!3m2!1sid!2sid!4v1715644952574!5m2!1sid!2sid', '-'),
(7, 'Rm Titik Nadir', 'Jl. Cipto Mangun Kusumo No.31, RT.29/RW.29, Sungai', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.35287176942094!2d117.12413756971364!3d-0.5325937122707087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67fbd1bd528bb%3A0x1c946c4981c693da!2sTITIK%20NADIR!5e0!3m2!1sid!2sid!4v1715645520167!5m2!1sid!2sid', '-');

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
('varian_rhesa', '1111'),
('vr722', '123'),
('vr711', '12345');

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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id_Menu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  MODIFY `id_rm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `rating_ibfk_4` FOREIGN KEY (`id_rm`) REFERENCES `rumahmakan` (`id_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
