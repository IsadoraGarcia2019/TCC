-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2019 às 20:09
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
-- Estrutura da tabela `cardapio_dia`
--

DROP TABLE IF EXISTS `cardapio_dia`;
CREATE TABLE `cardapio_dia` (
  `id_cardapio` int(11) NOT NULL,
  `nome_comida` varchar(255) NOT NULL,
  `categoria_comida` enum('cafe_manha','almoco','jantar') NOT NULL,
  `data_cardapio` datetime NOT NULL,
  `excluido` enum('sim','nao') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardapio_dia`
--

INSERT INTO `cardapio_dia` (`id_cardapio`, `nome_comida`, `categoria_comida`, `data_cardapio`, `excluido`) VALUES
(1, 'Capuccino', 'cafe_manha', '2019-09-25 00:00:00', 'nao'),
(2, 'Café Expresso', 'cafe_manha', '0000-00-00 00:00:00', 'nao'),
(3, 'Waffles', 'cafe_manha', '0000-00-00 00:00:00', 'nao'),
(4, 'Panquecas', 'cafe_manha', '0000-00-00 00:00:00', 'nao'),
(5, 'Brownie', 'cafe_manha', '0000-00-00 00:00:00', 'nao'),
(6, 'Cheesecake', 'cafe_manha', '0000-00-00 00:00:00', 'nao'),
(13, 'Strogonoff de Frango', 'almoco', '0000-00-00 00:00:00', 'nao'),
(14, 'Nuggets', 'almoco', '0000-00-00 00:00:00', 'nao'),
(15, 'Batata Frita', 'almoco', '0000-00-00 00:00:00', 'nao'),
(16, 'Macarronada', 'almoco', '0000-00-00 00:00:00', 'nao'),
(17, 'Bife à Parmegiana', 'almoco', '0000-00-00 00:00:00', 'nao'),
(18, 'Risoto de Brócolis', 'almoco', '0000-00-00 00:00:00', 'nao'),
(19, 'Pizza Calabresa', 'jantar', '0000-00-00 00:00:00', 'nao'),
(20, 'Sopa de macarrão', 'jantar', '0000-00-00 00:00:00', 'nao'),
(21, 'Esfiha', 'jantar', '0000-00-00 00:00:00', 'nao'),
(22, 'Cachorro Quente', 'jantar', '0000-00-00 00:00:00', 'nao'),
(23, 'Lasanha', 'jantar', '0000-00-00 00:00:00', 'nao'),
(32, 'Cheeseburger ', 'jantar', '0000-00-00 00:00:00', 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero_telefone` int(10) NOT NULL,
  `restricao_alimentar` varchar(255) NOT NULL,
  `preferencia_comida` varchar(255) NOT NULL,
  `preferencia_restaurante` varchar(255) NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `saldo_cafe` int(11) NOT NULL,
  `saldo_almoco` int(11) NOT NULL,
  `saldo_janta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `estado`, `cidade`, `rua`, `numero_telefone`, `restricao_alimentar`, `preferencia_comida`, `preferencia_restaurante`, `comentarios`, `saldo_cafe`, `saldo_almoco`, `saldo_janta`) VALUES
(1040, 'pedro', 'SC', 'bnu', 'pedro', 33445566, 'acucar', 'vegana', 'mc donalds', 'ODEIO CARNE ', 0, 0, 0),
(1042, 'Isadora Zancanaro', 'SC', 'Blumenau', 'Rua Bahia, 5800', 2147483647, 'nenhuma', '123', 'ovo frito', '', 0, 0, 0),
(1043, 'jose', 'SC', '', '', 0, 'nenhuma', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `finalizacao`
--

DROP TABLE IF EXISTS `finalizacao`;
CREATE TABLE `finalizacao` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pacote` int(11) NOT NULL,
  `forma_pagamento` enum('dinheiro','boleto_bancario','cartao_credito','cartao_debito') NOT NULL,
  `status_pagamento` enum('pendente','pago','atrasado') NOT NULL,
  `data_compra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `finalizacao`
--

INSERT INTO `finalizacao` (`id`, `id_usuario`, `id_pacote`, `forma_pagamento`, `status_pagamento`, `data_compra`) VALUES
(16, 1052, 9, 'boleto_bancario', 'pendente', '2015-02-20'),
(17, 1052, 5, 'dinheiro', 'pendente', '2019-02-20'),
(22, 1052, 5, 'boleto_bancario', 'pendente', '2019-09-24 16:28:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

DROP TABLE IF EXISTS `pacotes`;
CREATE TABLE `pacotes` (
  `id` int(11) NOT NULL,
  `nome_pacote` varchar(255) NOT NULL,
  `nome_imagem` varchar(255) NOT NULL,
  `descricao_pacote` varchar(255) NOT NULL,
  `preco_pacote` varchar(255) NOT NULL,
  `quantidade_cafe` int(11) NOT NULL,
  `quantidade_almoco` int(11) NOT NULL,
  `quantidade_jantar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacotes`
--

INSERT INTO `pacotes` (`id`, `nome_pacote`, `nome_imagem`, `descricao_pacote`, `preco_pacote`, `quantidade_cafe`, `quantidade_almoco`, `quantidade_jantar`) VALUES
(5, 'Básico', 'massas1.jpg', '20 almoços durante todo o mês, o usuário escolhe os dias em que quer receber e o que quer receber.', 'R$ 260,00', 0, 20, 0),
(8, 'Intermediário', 'waffles1.jpg', '20 cafés da manhã e 20 almoços durante o mês, o usuário escolhe os dias em que quer receber e o que quer receber.\r\n', 'R$ 500,00', 20, 20, 0),
(9, 'Premium', 'refeicoes.jpg', '20 cafés da manhã, 20 almoços e 20 jantares durante o mês, o usuário escolhe os dias em que quer receber e o que quer receber.\r\n', 'R$ 760,00', 20, 20, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tp_usuario` enum('cliente','administrador') NOT NULL,
  `fk_tipo` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `tp_usuario`, `fk_tipo`, `ativo`) VALUES
(1052, 'oi@xp.com', '123', 'cliente', 1043, 1),
(1053, 'deliiverycheff@gmail.com', '2019', 'administrador', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio_dia`
--
ALTER TABLE `cardapio_dia`
  ADD PRIMARY KEY (`id_cardapio`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalizacao`
--
ALTER TABLE `finalizacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pacote` (`id_pacote`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indexes for table `pacotes`
--
ALTER TABLE `pacotes`
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
-- AUTO_INCREMENT for table `cardapio_dia`
--
ALTER TABLE `cardapio_dia`
  MODIFY `id_cardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;

--
-- AUTO_INCREMENT for table `finalizacao`
--
ALTER TABLE `finalizacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1059;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `finalizacao`
--
ALTER TABLE `finalizacao`
  ADD CONSTRAINT `fk_pacote` FOREIGN KEY (`id_pacote`) REFERENCES `pacotes` (`id`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
