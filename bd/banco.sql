-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2022 às 23:00
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sapatos`
--

CREATE TABLE IF NOT EXISTS `sapatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) COLLATE latin1_general_ci NOT NULL,
  `tipo` varchar(55) COLLATE latin1_general_ci NOT NULL,
  `cor` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `marca` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `sapatos`
--

INSERT INTO `sapatos` (`id`, `nome`, `tipo`, `cor`, `marca`, `valor`, `quantidade`) VALUES
(1, 'all star', 'tenis', 'preto', 'converse', 250, 4),
(5, 'old school', 'tenis', 'amarelo', 'vans', 280, 2),
(6, 'air force', 'tenis', 'branco', 'adidas', 530, 1),
(7, 'coturno ', 'bota', 'preto', 'amorelle', 99, 3),
(8, 'chuck 70', 'tenis', 'verde', 'converse', 160, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `google_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `email`, `profile_image`) VALUES
(1, '1234', 'Administrador', 'admin@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
