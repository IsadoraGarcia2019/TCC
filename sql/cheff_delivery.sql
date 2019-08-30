-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2019 às 20:49
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheff_delivery`
--
CREATE DATABASE IF NOT EXISTS `cheff_delivery` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cheff_delivery`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero_telefone` int(10) NOT NULL,
  `restricao_alimentar` varchar(255) NOT NULL,
  `preferencia_comida` int(11) NOT NULL,
  `preferencia_restaurante` int(11) NOT NULL,
  `comentarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `estado`, `cidade`, `rua`, `numero_telefone`, `restricao_alimentar`, `preferencia_comida`, `preferencia_restaurante`, `comentarios`) VALUES
(30, '123', 'SC', '102', '123', 123, 'nenhuma', 13, 132, 13),
(31, '123', 'SC', '102', '123', 123, 'nenhuma', 13, 132, 13),
(32, '123', 'SC', '102', '123', 123, 'nenhuma', 13, 132, 13),
(33, '123', 'SC', '102', '123', 123, 'nenhuma', 13, 132, 13),
(34, '123', 'SC', '102', '123', 123, 'nenhuma', 13, 132, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `CNPJ` int(11) NOT NULL,
  `numero_funcionarios` int(11) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `tipo_empresa` varchar(255) NOT NULL,
  `numero_empresa` int(11) NOT NULL,
  `cidade_empresa` varchar(255) NOT NULL,
  `rua_empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` int(11) NOT NULL,
  `nome_restaurante` varchar(255) NOT NULL,
  `numero_telefone` int(11) NOT NULL,
  `horario_atendimento` varchar(255) NOT NULL,
  `dias_atendimento` varchar(255) NOT NULL,
  `avaliacao` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tp_usuario` enum('restaurante','empresa','cliente') NOT NULL,
  `fk_tipo` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `tp_usuario`, `fk_tipo`, `ativo`) VALUES
(31, 'oi@xp.com', '123', 'cliente', 30, 1),
(32, 'oi@xp.com', '123', 'cliente', 31, 1),
(33, 'oi@xp.com', '123', 'cliente', 32, 1),
(34, 'oi@xp.com', '123', 'cliente', 33, 1),
(35, 'oi@xp.com', '123', 'cliente', 34, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
