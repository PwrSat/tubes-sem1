-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 09:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data1`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `email`, `role`) VALUES
(6, 'ZeeroXc', '$2y$10$UASSdej2uXgPEYl83X/gJePsN3GKzh1QZkbJoCA15cFnl2FxVQhpK', 'Muhammad Luthfi', 'luthfim904@gmail.com', 1),
(7, 'karov', '$2y$10$Laf1ts1Xk2LvFFE3.Zr9A.33R6a19URMVFnCIHvcM6JeVTirDC1Ly', 'karov', 'karov@gmail.com', 2),
(12, 'Ameliathh', '$2y$10$UXDQbMOW141BQ3PznFU4Nu6LizrlhqJaKrZK50NUGfsbrWlScd/kC', 'Amelia luthfiyah ', 'Amelia@gmail.com', 1),
(13, 'frengky', '$2y$10$CgY4NAe62UK27TTPFQrPu.Ie0ty6E7ldS9vj4p6E1f7uAepQQ01S2', 'Frengkyy', 'freng12@gmail.com', 0),
(14, 'ab', '$2y$10$NYx3vV0KzHUwkrTYUpZrMu1Dj7uFsMhvOFboTNTtrQu1cyIRoSDHi', 'ab', 'ab@gmail.com', 0),
(15, 'sat', '$2y$10$pdDOvSNU1p/VziEsZz760.WwpZWzlUM3/YDOH0KScFAF3GPmOKFYi', 'sat', 'sat@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` char(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_laporan` varchar(300) NOT NULL,
  `status` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `judul`, `tanggal`, `isi_laporan`, `status`) VALUES
(15, 'Muhammad Luthfi', 'anjay', '2023-01-04', 'sdfghjklsdfghj', 'approved'),
(16, 'Muhammad Luthfi', 'anjay', '2023-01-04', 'sdfghjklsdfghj', 'approved'),
(18, 'karov', 'anjay', '2023-01-04', 'wzextrcfyvguibhinjomkarsetxrdctfvgyubhujnwzexrctfuvygbuhnij', 'approved'),
(19, 'lebih', 'hjadbhasbdu', '2023-01-04', 'wexrdctfyguhijes4ed5rft6gyhuijdrf6tgyuhij', 'approved'),
(20, 'lebih', 'anjay', '2023-01-04', 'wzesxrdctfyuvygbuhnijmokszxrdctfvgybhunjimkdxrtcfvgyhub', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
