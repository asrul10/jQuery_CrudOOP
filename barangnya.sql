-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 06:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barangnya`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangnya`
--

CREATE TABLE IF NOT EXISTS `barangnya` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `hrg_beli` varchar(20) NOT NULL,
  `hrg_jual` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangnya`
--

INSERT INTO `barangnya` (`id`, `nama`, `jenis`, `jumlah`, `hrg_beli`, `hrg_jual`) VALUES
('1', '2', '3', '4', '5', '60'),
('111', '1112', '12', '353', '4654', '454'),
('123', '1', '1', '1', '1', '1'),
('1234', 'kkk', 'kk', '1', '90', '90'),
('12345', 'hhhhh', 'hh', '2', '9000', '9200'),
('123456', 'hhhhh', 'hh', '9', '9000', '10000'),
('321', 'barru', 'barru', 'barru', '1000', '1000'),
('432', '2', '2', '2', '2', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
