-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 06:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rented_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_user` int(30) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `usia` int(3) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_user`, `nama`, `usia`, `alamat`, `email`, `password`) VALUES
(2, 'ihsan', 20171018, 'Jl kelilinng no.3a', 'ihsandifa@gmail.com', '123456'),
(4, '', 0, '', '', ''),
(5, '', 0, '', '', ''),
(6, '', 0, '', '', ''),
(7, '', 0, '', '', ''),
(8, '', 0, '', '', ''),
(9, '', 0, '', '', ''),
(10, '', 0, '', '', ''),
(11, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-01'),
(12, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-01'),
(13, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-01'),
(14, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '45678', '2019-07-03'),
(15, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '09876', '2019-07-04'),
(16, 'carda', 0, 'carda@gmail.com', '123456', '2019-07-09'),
(17, 'carda', 0, 'carda@gmail.com', '098765', '2019-07-27'),
(18, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '12345', '2019-07-04'),
(19, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '12345', '2019-07-02'),
(20, 'Naufal ihs', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-01'),
(21, 'carda', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-03'),
(22, 'ihsan', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-01'),
(23, 'zebua', 0, 'naufal_iksan@ymail.com', '123456', '2019-07-05'),
(24, 'caca', 0, 'caca@yahoo.com', '123456789', '2019-07-01'),
(26, 'Adi', 0, 'adi@gmail.com', '123456', '67'),
(27, 'Asep', 1234456, 'adi@gmail.com', '1234456', '45'),
(28, 'fandi', 0, 'adi@gmail.com', '34354546', '55'),
(29, 'carda1', 0, 'WEWEW@GMAIL.COM', '3434344343', '13'),
(30, 'carda', 30, 'Jl kemunging', 'caca@yahoo.com', '12345'),
(31, 'Adi', 30, 'Jl Angkasa', 'naufal18ti@mahasiswa', '12345'),
(32, 'Adi', 30, 'Jl Angkasa', 'naufal18ti@mahasiswa', '12345'),
(33, 'carda', 30, 'Jl Angkasa', 'ihsandifa157@gmail.c', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
