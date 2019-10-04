-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2019 às 19:15
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
(1, 'Capuccino', 'cafe_manha', '2019-09-25 15:47:22', 'sim'),
(2, 'Café Expresso', 'cafe_manha', '2019-09-25 15:47:22', 'sim'),
(3, 'Waffles', 'cafe_manha', '2019-09-25 15:47:22', 'sim'),
(4, 'Panquecas', 'cafe_manha', '2019-09-25 15:47:22', 'sim'),
(5, 'Brownie', 'cafe_manha', '2019-09-25 15:47:22', 'sim'),
(6, 'Cheesecake', 'cafe_manha', '2019-09-25 15:47:22', 'sim'),
(13, 'Strogonoff de Frango', 'almoco', '2019-09-25 15:47:22', 'sim'),
(14, 'Nuggets', 'almoco', '2019-09-25 15:47:22', 'sim'),
(15, 'Batata Frita', 'almoco', '2019-09-25 15:47:22', 'sim'),
(16, 'Macarronada', 'almoco', '2019-09-25 15:47:22', 'sim'),
(17, 'Bife à Parmegiana', 'almoco', '2019-09-25 15:47:22', 'sim'),
(18, 'Risoto de Brócolis', 'almoco', '0000-00-00 00:00:00', 'sim'),
(19, 'Pizza Calabresa', 'jantar', '2019-09-25 15:47:22', 'sim'),
(20, 'Sopa de macarrão', 'jantar', '2019-09-25 15:47:22', 'sim'),
(21, 'Esfiha', 'jantar', '2019-09-25 15:47:22', 'sim'),
(22, 'Cachorro Quente', 'jantar', '2019-09-25 15:47:22', 'sim'),
(23, 'Lasanha', 'jantar', '2019-09-25 15:47:22', 'sim'),
(32, 'Cheeseburger ', 'jantar', '2019-09-25 15:47:22', 'sim'),
(34, 'Macarrão', 'almoco', '2019-09-25 15:47:22', 'sim'),
(35, 'macarrão', 'almoco', '2019-09-26 16:42:45', 'sim'),
(36, 'Capuccino', 'cafe_manha', '2019-09-26 16:42:50', 'sim'),
(37, 'Cheeseburger', 'jantar', '2019-09-26 16:42:57', 'sim'),
(38, 'feijao', 'almoco', '2019-09-27 13:46:05', 'sim'),
(39, 'feijao', 'almoco', '2019-09-27 13:51:54', 'sim'),
(40, 'cafÃ©', 'cafe_manha', '2019-09-27 16:05:54', 'sim'),
(41, 'pÃ£o com queijo', 'cafe_manha', '2019-09-27 16:06:04', 'nao'),
(42, 'carne com arroz', 'almoco', '2019-09-27 16:06:25', 'nao'),
(43, 'feijoada', 'almoco', '2019-09-27 16:06:31', 'nao'),
(44, 'x-burguer', 'jantar', '2019-09-27 16:06:40', 'nao'),
(45, 'pizza de frango', 'jantar', '2019-09-27 16:06:49', 'nao'),
(46, 'macarrÃ£o', 'almoco', '2019-09-30 13:54:09', 'nao'),
(47, 'carne', 'jantar', '2019-09-30 15:47:22', 'nao'),
(48, 'macarrÃ£o', 'jantar', '2019-09-30 17:10:09', 'nao'),
(49, 'Cheeseburger', 'jantar', '2019-10-01 16:08:04', 'nao'),
(50, 'feijao', 'almoco', '2019-10-01 16:45:22', 'nao'),
(51, 'feijao', 'almoco', '2019-10-02 14:01:59', 'nao');

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
  `comentarios` varchar(255) NOT NULL,
  `saldo_cafe` int(11) NOT NULL,
  `saldo_almoco` int(11) NOT NULL,
  `saldo_jantar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `estado`, `cidade`, `rua`, `numero_telefone`, `restricao_alimentar`, `comentarios`, `saldo_cafe`, `saldo_almoco`, `saldo_jantar`) VALUES
(1040, 'pedro', 'SC', 'bnu', 'pedro', 33445566, 'acucar', 'ODEIO CARNE ', 0, 0, 0),
(1042, 'Isadora Zancanaro', 'SC', 'Blumenau', 'Rua Bahia, 5800', 2147483647, 'nenhuma', '', 0, 0, 0),
(1043, 'jose', 'SC', '', '', 0, 'nenhuma', '', 0, 0, 0),
(1044, 'Isadora Zancanaro', 'SC', 'Blumenau', 'Rua Bahia, 5800', 2147483647, 'lactose', 'ki', 0, 0, 0),
(1045, 'Isadora Zancanaro', 'SC', 'Blumenau', 'Rua Bahia, 5800', 96256464, 'nenhuma', 'eu gosto de voces :)\r\n', 0, 0, 0),
(1046, 'isa', 'SC', '', '', 0, 'nenhuma', '', 0, 0, 0),
(1047, 'Isadora Zancanaro', 'SC', 'Blumenau', 'Rua Bahia, 5800', 2147483647, 'nenhuma', 'oi gosto de vocÃªs', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `local` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `id_usuario`, `local`, `rua`, `bairro`, `cidade`, `estado`) VALUES
(3, 1062, 'trabalho', '7 de setembro', 'centro', 'Blumenau', 'SC'),
(4, 1062, 'casa', 'bahia', 'salto weissbach', 'blumenau', 'SC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolha_cardapio_dia`
--

DROP TABLE IF EXISTS `escolha_cardapio_dia`;
CREATE TABLE `escolha_cardapio_dia` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cardapio` int(11) NOT NULL,
  `hora_selecao` varchar(255) NOT NULL,
  `entregue` enum('sim','nao') NOT NULL,
  `id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(22, 1052, 5, 'boleto_bancario', 'pago', '2019-09-24 16:28:41'),
(23, 1059, 8, 'cartao_credito', 'pago', '2019-09-25 15:14:28'),
(24, 1059, 5, 'dinheiro', 'pago', '2019-09-25 17:02:00'),
(25, 1059, 8, 'cartao_debito', 'pago', '2019-09-25 17:02:06'),
(26, 1059, 9, 'boleto_bancario', 'pago', '2019-09-25 17:02:12'),
(27, 1062, 8, 'cartao_debito', 'pago', '2019-09-27 16:30:16'),
(28, 1062, 5, 'cartao_debito', 'pendente', '2019-09-27 16:31:16'),
(29, 1052, 8, 'cartao_debito', 'pendente', '2019-09-30 14:03:03'),
(30, 1052, 5, 'cartao_credito', 'pendente', '2019-09-30 14:04:07'),
(31, 1052, 9, 'boleto_bancario', 'pendente', '2019-09-30 14:05:19');

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
(1053, 'deliiverycheff@gmail.com', '2019', 'administrador', 0, 1),
(1059, 'isa@feia.comn', '123', 'cliente', 1044, 1),
(1062, 'isaaa349@gmail.com', '123', 'cliente', 1047, 1);

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
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `fk_usuarioo` (`id_usuario`);

--
-- Indexes for table `escolha_cardapio_dia`
--
ALTER TABLE `escolha_cardapio_dia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_endereco` (`id_endereco`);

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
  MODIFY `id_cardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1048;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `escolha_cardapio_dia`
--
ALTER TABLE `escolha_cardapio_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finalizacao`
--
ALTER TABLE `finalizacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1063;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_usuarioo` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `escolha_cardapio_dia`
--
ALTER TABLE `escolha_cardapio_dia`
  ADD CONSTRAINT `fk_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `enderecos` (`id_endereco`);

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
