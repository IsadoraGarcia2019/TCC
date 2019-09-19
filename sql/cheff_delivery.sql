-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Set-2019 às 19:50
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

CREATE TABLE `cardapio_dia` (
  `id_cardapio` int(11) NOT NULL,
  `nome_comida` varchar(255) NOT NULL,
  `categoria_comida` enum('cafe_manha','almoco','jantar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardapio_dia`
--

INSERT INTO `cardapio_dia` (`id_cardapio`, `nome_comida`, `categoria_comida`) VALUES
(1, 'Capuccino', 'cafe_manha'),
(2, 'Café Expresso', 'cafe_manha'),
(3, 'Waffles', 'cafe_manha'),
(4, 'Panquecas', 'cafe_manha'),
(5, 'Brownie', 'cafe_manha'),
(6, 'Cheesecake', 'cafe_manha'),
(13, 'Strogonoff de Frango', 'almoco'),
(14, 'Nuggets', 'almoco'),
(15, 'Batata Frita', 'almoco'),
(16, 'Macarronada', 'almoco'),
(17, 'Bife à Parmegiana', 'almoco'),
(18, 'Risoto de Brócolis', 'almoco'),
(19, 'Pizza Calabresa', 'jantar'),
(20, 'Sopa de macarrão', 'jantar'),
(21, 'Esfiha', 'jantar'),
(22, 'Cachorro Quente', 'jantar'),
(23, 'Lasanha', 'jantar'),
(32, 'Cheeseburger ', 'jantar');

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

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nome_empresa`, `CNPJ`, `numero_funcionarios`, `turno`, `tipo_empresa`, `numero_empresa`, `cidade_empresa`, `rua_empresa`) VALUES
(1, 'pacifico', 114563298, 2550, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 33369854, 'Blumenau', 'Rua Bahia, 5800'),
(2, 'pacifico', 114563298, 2550, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 33369854, 'Blumenau', 'Rua Bahia, 5800'),
(3, 'Isadora Zancanaro', 22554250, 25896, 'Matutino', 'Sociedade Simples (SS)', 36985741, 'Blumenau', 'Rua Bahia, 5800'),
(4, '123', 123, 132, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 123, '132', '321'),
(5, 'pacifico sul', 2147483647, 21696, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 2147483647, 'Blumenau', 'Rua Bahia, 5800'),
(6, 'karsten', 0, 0, '-', '-', 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `finalizacao`
--

CREATE TABLE `finalizacao` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pacote` int(11) NOT NULL,
  `forma_pagamento` enum('dinheiro','boleto_bancario','cartao_credito','cartao_debito') NOT NULL,
  `status_pagamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `id_pacote` int(11) NOT NULL,
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

INSERT INTO `pacotes` (`id_pacote`, `nome_pacote`, `nome_imagem`, `descricao_pacote`, `preco_pacote`, `quantidade_cafe`, `quantidade_almoco`, `quantidade_jantar`) VALUES
(5, 'Básico', 'massas1.jpg', '20 almoços durante todo o mês, o usuário escolhe os dias em que quer receber e o que quer receber.', 'R$ 260,00', 0, 20, 0),
(8, 'Intermediário', 'waffles1.jpg', '20 cafés da manhã e 20 almoços durante o mês, o usuário escolhe os dias em que quer receber e o que quer receber.\r\n', 'R$ 500,00', 20, 20, 0),
(9, 'Premium', 'refeicoes.jpg', '20 cafés da manhã, 20 almoços e 20 jantares durante o mês, o usuário escolhe os dias em que quer receber e o que quer receber.\r\n', 'R$ 760,00', 20, 20, 20);

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

--
-- Extraindo dados da tabela `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nome_restaurante`, `numero_telefone`, `horario_atendimento`, `dias_atendimento`, `avaliacao`, `localizacao`, `estado`, `categoria`) VALUES
(1, 'habibs', 33695821, 'Segunda Ã  Segunda', '', 'bom', 'rua nao sei', 'SC', 'lanches_e_petiscos'),
(2, 'habibs', 2147483647, 'Segunda Ã  Segunda', '', 'muito_bom', 'Blumenau', 'SC', 'lanches_e_petiscos'),
(3, 'zecao', 0, 'Segunda Ã  Sexta', '', 'muito_bom', '', 'SC', 'cafeteria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tp_usuario` enum('restaurante','empresa','cliente','administrador') NOT NULL,
  `fk_tipo` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `tp_usuario`, `fk_tipo`, `ativo`) VALUES
(1052, 'oi@xp.com', '123', 'cliente', 1043, 1),
(1053, 'deliiverycheff@gmail.com', '2019', 'administrador', 0, 1),
(1057, 'oi@oi.com', '123', 'empresa', 6, 1),
(1058, 'oiaiaiaia@gmail.com', '123', 'restaurante', 3, 1);

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
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalizacao`
--
ALTER TABLE `finalizacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pacote` (`id_pacote`),
  ADD KEY `fk_cliente` (`id_cliente`);

--
-- Indexes for table `pacotes`
--
ALTER TABLE `pacotes`
  ADD PRIMARY KEY (`id_pacote`);

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
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finalizacao`
--
ALTER TABLE `finalizacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id_pacote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_pacote` FOREIGN KEY (`id_pacote`) REFERENCES `pacotes` (`id_pacote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
