-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 03:51 PM
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
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) NOT NULL,
  `Komentar` varchar(200) NOT NULL,
  `id_rm` int(10) NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `Komentar`, `id_rm`, `userid`) VALUES
(6, 'nice', 1, 4),
(7, 'gg', 1, 4);

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
(1, 'Ayam Geprek+Nasi', 13000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(20) NOT NULL,
  `id_rm` int(10) NOT NULL,
  `userid` int(20) NOT NULL,
  `Rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_rm`, `userid`, `Rating`) VALUES
(7, 1, 4, 5),
(8, 1, 4, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ratingcommentview`
-- (See below for the actual view)
--
CREATE TABLE `ratingcommentview` (
`id_rating` int(20)
,`userid` int(20)
,`Rating` int(1)
,`id_rm` int(10)
,`id_komentar` int(10)
,`comment_user_id` int(20)
,`Komentar` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ratingcommentview2`
-- (See below for the actual view)
--
CREATE TABLE `ratingcommentview2` (
`id_rating` int(20)
,`userid` int(20)
,`Rating` int(1)
,`id_komentar` int(10)
,`comment_user_id` int(20)
,`Komentar` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `rumahmakan`
--

CREATE TABLE `rumahmakan` (
  `id_rm` int(10) NOT NULL,
  `nama_rumahmakan` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `lokasi_rm` varchar(50) NOT NULL,
  `no_telp` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumahmakan`
--

INSERT INTO `rumahmakan` (`id_rm`, `nama_rumahmakan`, `Alamat`, `lokasi_rm`, `no_telp`) VALUES
(1, 'BFC', 'Jl. Sultan Sulaiman No.96, Sambutan, Kec. Sambutan', '-0.508293615161712, 117.18187513108832', 312311),
(7, 'Madhe', 'jl cipto mangunkusumo', '1312313123', 131231231);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(2, 'varian_rhesa', '12345'),
(4, 'varian_rhesa23', '12345678');

-- --------------------------------------------------------

--
-- Structure for view `ratingcommentview`
--
DROP TABLE IF EXISTS `ratingcommentview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ratingcommentview`  AS SELECT `r`.`id_rating` AS `id_rating`, `r`.`userid` AS `userid`, `r`.`Rating` AS `Rating`, `r`.`id_rm` AS `id_rm`, `c`.`id_komentar` AS `id_komentar`, `c`.`userid` AS `comment_user_id`, `c`.`Komentar` AS `Komentar` FROM (`rating` `r` join `komentar` `c` on(`r`.`userid` = `c`.`userid`))  ;

-- --------------------------------------------------------

--
-- Structure for view `ratingcommentview2`
--
DROP TABLE IF EXISTS `ratingcommentview2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ratingcommentview2`  AS SELECT `r`.`id_rating` AS `id_rating`, `r`.`userid` AS `userid`, `r`.`Rating` AS `Rating`, `c`.`id_komentar` AS `id_komentar`, `c`.`userid` AS `comment_user_id`, `c`.`Komentar` AS `Komentar` FROM (`rating` `r` join `komentar` `c` on(`r`.`userid` = `c`.`userid` and `r`.`id_rm` = `c`.`id_rm`))  ;

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
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_rm` (`id_rm`,`userid`),
  ADD KEY `userid` (`userid`);

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
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_rm` (`id_rm`,`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
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
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  MODIFY `id_rm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `rumahmakan` (`id_rm`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

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
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
