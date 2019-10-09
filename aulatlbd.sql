-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2019 às 02:22
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulatlbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `uf`, `nome`) VALUES
(1, 'SP', 'ITU'),
(2, 'SP', 'SALTO DE ITU'),
(3, 'PR', 'CURITIBA'),
(4, 'RJ', 'RIO DE JANEIRO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
